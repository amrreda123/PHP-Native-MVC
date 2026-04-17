<?php

use Core\Validator;

it("validates a string", function () {
    expect(Validator::string("foobar"))->toBeTrue();
    expect(Validator::string(false))->toBeFalse();
    expect(Validator::string(''))->toBeFalse();
});
it("validates a string with a minimum length", function () {
    expect(Validator::string("foobar", 20))->toBeFalse();
    expect(Validator::string(false, 20))->toBeFalse();
    expect(Validator::string('', 20))->toBeFalse();
});
it("validates an email", function () {
    expect(Validator::email("test@example.com"))->toBeTrue();
    expect(Validator::email("foobar"))->toBeFalse();
    expect(Validator::email(false))->toBeFalse();
    expect(Validator::email(''))->toBeFalse();
});
it("validates that a number is greater than a given amount", function () {
    // This test case seems to be misplaced, as the Validator class doesn't have a method for this validation
    expect(Validator::greaterThan(10, 1))->toBeTrue();
    expect(Validator::greaterThan(10, 20))->toBeFalse();
})->only();