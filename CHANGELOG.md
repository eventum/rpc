# Eventum RPC Client Library

## [4.4.0] - 2020-05-28

- Update methods documentation up to Eventum 3.8.14, [#8]

[4.4.0]: https://github.com/eventum/rpc/compare/v4.3.0...v4.4.0
[#8]: https://github.com/eventum/rpc/pull/7

## [4.3.0] - 2018-05-02

- Make cloning object do clone used objects as well, [#5]
- Add fluent interface for setter methods, [#6]

[4.3.0]: https://github.com/eventum/rpc/compare/v4.2.0...v4.3.0
[#5]: https://github.com/eventum/rpc/pull/5
[#6]: https://github.com/eventum/rpc/pull/6

## [4.2.0] - 2018-05-01

- Move classes to `Eventum\RPC` namespace, deprecate root namespace, [#4]
- Update xmlrpc methods doc, include `@method` annotation, [#4]

[4.2.0]: https://github.com/eventum/rpc/compare/v4.1.1...v4.2.0
[#4]: https://github.com/eventum/rpc/pull/4

## [4.1.1] - 2017-10-15

- add `addUserAgent` method for public access

[4.1.1]: https://github.com/eventum/rpc/compare/v4.1.0...v4.1.1

## [4.1.0] - 2017-10-15

- set xmlrpc useragent our library version, [41ed1c9]
- require phpxmlrpc >= 4.2.2, [a24f320]

[4.1.0]: https://github.com/eventum/rpc/compare/v4.0.0...v4.1.0
[41ed1c9]: https://github.com/eventum/rpc/commit/41ed1c9
[a24f320]: https://github.com/eventum/rpc/commit/a24f320

## [4.0.0] - 2016-11-23

- replace xmlrpc implementation with phpxmlrpc/phpxmlrpc, [#1]

[4.0.0]: https://github.com/eventum/rpc/compare/v3.0.3...v4.0.0
[#1]: https://github.com/eventum/rpc/pull/1

## [3.0.3] - 2015-10-19

- update README, add methods documentation

[3.0.3]: https://github.com/eventum/rpc/compare/v3.0.2...v3.0.3

## [3.0.2] - 2015-05-01

- encode input types (method parameters) that do not fit to xmlrpc types with serialize, [ca00da8].
  this allows us to use DateTime objects as parameters

[3.0.2]: https://github.com/eventum/rpc/compare/v3.0.1...v3.0.2
[ca00da8]: https://github.com/eventum/rpc/commit/ca00da8

## [3.0.1] - 2015-04-30

- add `encodeBinary` - Implementation independent method to encode value as binary
- changes to make non-ASCII data pass two ways without errors and data corruption

[3.0.1]: https://github.com/eventum/rpc/compare/v3.0.0...v3.0.1

## [3.0.0] - 2014-11-27

- library released separately from Eventum Core
- adds composer support

[3.0.0]: https://github.com/eventum/rpc/commits/v3.0.0
