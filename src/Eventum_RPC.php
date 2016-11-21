<?php

/*
 * This file is part of the Eventum (Issue Tracking System) package.
 *
 * @copyright (c) Eventum Team
 * @license GNU General Public License, version 2 or later (GPL-2+)
 *
 * For the full copyright and license information,
 * please see the COPYING and AUTHORS files
 * that were distributed with this source code.
 */

class Eventum_RPC_Exception extends Exception
{
}

class Eventum_RPC
{
    /**
     * The URL of Eventum installation to send requests to
     *
     * @var string
     */
    private $url;

    /**
     * @var XML_RPC_Client
     */
    private $client;

    public function __construct($url)
    {
        $this->url = $url;
        $this->client = $this->getClient();

        // not sure why this is ever off,
        // because data that can't be encoded to xml can't be submitted at all
        $this->client->setAutoBase64(true);
    }

    /**
     * Change the current debug mode
     *
     * @param int $debug  where 1 = on, 0 = off
     */
    public function setDebug($debug)
    {
        $this->client->setDebug($debug);
    }

    /**
     * Set username and password properties for connecting to the RPC server
     *
     * @param string $username the user name
     * @param string $password the password
     * @see XML_RPC_Client::$username, XML_RPC_Client::$password
     */
    public function setCredentials($username, $password)
    {
        $this->client->setCredentials($username, $password);
    }

    /**
     * Implementation independent method to encode value as binary
     *
     * @param mixed $value
     * @return XML_RPC_Value
     */
    public function encodeBinary($value)
    {
        return new XML_RPC_Value($value, 'base64');
    }

    private function getClient()
    {
        $data = parse_url($this->url);
        if (!isset($data['port'])) {
            $data['port'] = $data['scheme'] == 'https' ? 443 : 80;
        }
        if (!isset($data['path'])) {
            $data['path'] = '';
        }

        return new XML_RPC_Client($data['path'], $data['host'], $data['port']);
    }

    public function __call($method, $args)
    {
        $params = array();
        foreach ($args as $arg) {
            // argument already encoded as XML_RPC_Value
            if ($arg instanceof XML_RPC_Value) {
                $params[] = $arg;
                continue;
            }

            // serialize all objects first
            if (is_object($arg)) {
                $arg = serialize($arg);
            }

            $params[] = XML_RPC_encode($arg);
        }
        $msg = new XML_RPC_Message($method, $params);

        $result = $this->client->send($msg);

        if ($result === 0) {
            throw new Eventum_RPC_Exception($this->client->errstr);
        }
        if (is_object($result) && $result->faultCode()) {
            throw new Eventum_RPC_Exception($result->faultString());
        }

        $value = XML_RPC_decode($result->value());

        return $value;
    }
}
