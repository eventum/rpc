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

use Eventum\RPC\Client;

class ClientTest extends TestCase
{
    /**
     * Test that instance can be created
     */
    public function testInstance()
    {
        $url = 'http://localhost/';
        $client = new Client($url);
        $this->assertNotEmpty($client);
    }

    /**
     * Test actual call to public phpxmlrpc server
     *
     * @group network
     */
    public function testRequest()
    {
        $url = 'http://phpxmlrpc.sourceforge.net/server.php';
        $method = 'system.listMethods';

        $client = new Client($url);
        $methods = $client->__call($method);
        $this->assertContains($method, $methods);
    }
}
