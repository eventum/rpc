<?php

/*
 * This file is part of the Eventum (Issue Tracking System) package.
 *
 * @copyright (c) Eventum Team
 * @license GNU General Public License, version 2 or later (GPL-2+)
 *
 * For the full copyright and license information,
 * please see the LICENSE and AUTHORS files
 * that were distributed with this source code.
 */

namespace Eventum\RPC\Test;

use Eventum\RPC\XmlRpcException;
use Eventum_RPC;
use Eventum_RPC_Exception;

class ClientTest extends TestCase
{
    /**
     * Test that instance can be created
     */
    public function testInstance()
    {
        $url = 'http://localhost/';
        $client = new Eventum_RPC($url);
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

        $client = new Eventum_RPC($url);
        $methods = $client->__call($method);
        $this->assertContains($method, $methods);

        // test  that legacy exception class is catchable
        try {
            $client->unknownMethod($method);
            $this->fail('Exception not thrown');
        } catch (Eventum_RPC_Exception $e) {
            $this->assertEquals('Unknown method', $e->getMessage());
            $this->assertEquals(1, $e->getCode());
        }

        // test that new exception class is catchable
        try {
            $client->unknownMethod($method);
            $this->fail('Exception not thrown');
        } catch (XmlRpcException $e) {
            $this->assertEquals('Unknown method', $e->getMessage());
            $this->assertEquals(1, $e->getCode());
        }
    }
}
