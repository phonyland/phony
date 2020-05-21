<?php

it('can fetch a value', function () {
    $value = $this->callPrivateFakeMethod('fetch', 'alphabet.uppercase_letter');

    $this->assertNotNull($value);
});

it('can fetch many values', function () {
    $times = random_int(2, 10);
    $value = $this->callPrivateFakeMethod('fetchMany', $times, false, '', static function () {
        return 'value';
    });

    $this->assertCount($times, $value);
});

it('can fetch many values as a string', function () {
    $times = random_int(2, 10);
    $value = $this->callPrivateFakeMethod('fetchMany', $times, true, ' ', static function () {
        return 'value';
    });

    $this->assertEquals(
        $times - 1,
        substr_count($value, ' ')
    );
});

it('can fetch many values as glued string', function () {
    $times = random_int(2, 10);
    $value = $this->callPrivateFakeMethod('fetchMany', $times, true, '🙃', static function () {
        return 'value';
    });

    $this->assertEquals(
        $times - 1,
        substr_count($value, '🙃')
    );
});
