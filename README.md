# phpunit10-nested-testsuite-issue

The test suites would be executed repeatedly if the user doesn't specify the test suite in PHPUnit 10.

Please switch the branches and install PHPUnit to see the differences.

## PHPUnit 9

```text
$ ./vendor/bin/phpunit -c ./phpunit.xml 
PHPUnit 9.6.15 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.14
Configuration: ./phpunit.xml

...                                                                 3 / 3 (100%)

Time: 00:00.005, Memory: 6.00 MB

OK (3 tests, 3 assertions)
```

## PHPUnit 10

### Expected (with the `defaultTestSuite` attribute specified)

```text
$ ./vendor/bin/phpunit -c ./phpunit.xml 
PHPUnit 10.5.7 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.14
Configuration: /<SOME_PATH>/phpunit.xml

...                                                                 3 / 3 (100%)

Time: 00:00.003, Memory: 6.00 MB

OK (3 tests, 3 assertions)
```

### Actual

```text
$ ./vendor/bin/phpunit -c ./phpunit.xml 
PHPUnit 10.5.7 by Sebastian Bergmann and contributors.

Runtime:       PHP 8.2.14
Configuration: /<SOME_PATH>/phpunit.xml

......                                                              6 / 6 (100%)

Time: 00:00.004, Memory: 6.00 MB

OK (6 tests, 6 assertions)
```
