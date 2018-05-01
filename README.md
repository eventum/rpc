# Eventum RPC

Eventum RPC Client Library.

## Install via Composer ##

We recommend installing this package with [Composer](http://getcomposer.org/).

### Download Composer ###

To download Composer, run in the root directory of your project:

```bash
curl -sS https://getcomposer.org/installer | php
```

You should now have the file `composer.phar` in your project directory.

### Install Dependencies ###

Run in your project root:

```
php composer.phar require eventum/rpc
```

You should now have the files `composer.json` and `composer.lock` as well as
the directory `vendor` in your project directory. If you use a version control
system, `composer.json` should be added to it.

### Require Autoloader ###

After installing the dependencies, you need to require the Composer autoloader
from your code:

```php
require __DIR__ . '/vendor/autoload.php';
```

## Usage ##

```php
<?php

require __DIR__ . '/vendor/autoload.php';

$rpc_url = "http://example.org/rpc/xmlrpc.php";
$client = new \Eventum\RPC\EventumXmlRpcClient($rpc_url);
$client->setCredentials("user@example.org", "password");

// add user@example.org as authorized replier in issue $issue_id belonging to project $project_id
$client->addAuthorizedReplier($issue_id, $project_id, "user@example.org");
```

The available XMLRPC Methods can also be seen from [XMLRPC.md](XMLRPC.md).

## Copyright and License ##

This software is Copyright (c) 2008 - 2018 Eventum Team.

This is free software, licensed under the GNU General Public License
version 2.
