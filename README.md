# Overview
The purpose of this repository is to provide a minimum Laravel project for a bug with hasOneThrough eloquent
relationship. For more information please check out this issue: https://github.com/laravel/framework/issues/29574

## On-Going Notes
- The bug is specific to MySQL 8.0. If the tests are run using the SQLite driver, it works.

## How to see the bug
1. Clone the project and run `composer install`
2. Run `phpunit --testsuite=Unit`

This will run the `TestUser` tests, and then the `TestZedComment` test (the "Zed" is just to cause it to run after 
User). You should get the following error:
```
1) Tests\Unit\TestZedComment::testShouldRetrieveUser
Error: Call to a member function is() on null
```

## What Works
- If you run the `TestZedComment` test class by itself, it will work.
- If you add a test that runs before the failing test in the same `TestZedComment` that creates a user, it will work.

## What Fails
- Creating a user in a test that's in *a different* class.
