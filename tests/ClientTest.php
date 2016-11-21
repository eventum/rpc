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

use Eventum_RPC;

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
}
