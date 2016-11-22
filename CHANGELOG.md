# Eventum RPC Client Library

## [4.0.0] - 2016-11-23

 - replace xmlrpc implementation with phpxmlrpc/phpxmlrpc, [#1]

## [3.0.3] - 2015-10-19

 - update README, add methods documentation

## [3.0.2] - 2015-05-01

 - encode input types (method parameters) that do not fit to xmlrpc types with serialize, [ca00da8].
   this allows us to use DateTime objects as parameters

## [3.0.1] - 2015-04-30

 - add `encodeBinary` - Implementation independent method to encode value as binary
 - changes to make non-ASCII data pass two ways without errors and data corruption

## [3.0.0] - 2014-11-27

 - library released separately from Eventum Core
 - adds composer support

[4.0.0]: https://github.com/eventum/rpc/compare/v3.0.3...v4.0.0
[3.0.3]: https://github.com/eventum/rpc/compare/v3.0.2...v3.0.3
[3.0.2]: https://github.com/eventum/rpc/compare/v3.0.1...v3.0.2
[3.0.1]: https://github.com/eventum/rpc/compare/v3.0.0...v3.0.1
[3.0.0]: https://github.com/eventum/rpc/commits/v3.0.0
[ca00da8]: https://github.com/eventum/rpc/commit/ca00da8
[#1]: https://github.com/eventum/rpc/pull/1
