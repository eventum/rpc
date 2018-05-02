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

namespace Eventum\RPC\Test;

use Eventum\RPC\XmlRpcClient;
use ReflectionClass;
use SplObjectStorage;

class CloneTest extends TestCase
{
    /** @var XmlRpcClient */
    private $client;
    /** @var XmlRpcClient */
    private $cloned;
    /** @var SplObjectStorage */
    private $store;

    public function setUp()
    {
        $this->client = $this->createClient();
        $this->cloned = clone $this->client;
        $this->store = new SplObjectStorage();
    }

    public function testClone()
    {
        // add both clients, they should not be there
        $this->assertAttachFalse($this->client);
        $this->assertAttachFalse($this->cloned);

        /** @var \PhpXmlRpc\Client $client */
        $client = $this->getClient($this->client);
        /** @var \PhpXmlRpc\Client $cloned */
        $cloned = $this->getClient($this->cloned);
        // the real clients should be also different
        $this->assertAttachFalse($client);
        $this->assertAttachFalse($cloned);

        // setting credentials should not affect each other
        $client->setCredentials('client', 'tneilc');
        $cloned->setCredentials('cloned', 'denolc');

        $this->assertNotSame($client->username, $cloned->username);
        $this->assertNotSame($client->password, $cloned->password);
    }

    private function assertAttachFalse($object)
    {
        $this->assertFalse($this->store->contains($object));
        $this->store->attach($object);
    }

    private function getClient(XmlRpcClient $client)
    {
        $reflectionClass = new ReflectionClass($client);
        $reflectionProperty = $reflectionClass->getProperty('client');
        $reflectionProperty->setAccessible(true);

        return $reflectionProperty->getValue($client);
    }

    /**
     * @return XmlRpcClient
     */
    private function createClient()
    {
        $url = 'http://localhost';

        return new XmlRpcClient($url);
    }
}
