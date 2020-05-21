<?php

it('can numerify with hash sign', function () {
    $value = (int) $this->callPrivateFakeMethod('numerify', '###');

    $this->assertMatchesRegularExpression('/^[\d]{0,3}$/', $value);
});

it('can hexify with hash sign', function () {
    $value = $this->callPrivateFakeMethod('hexify', '###');

    $this->assertMatchesRegularExpression('/^[a-z0-9]{3}$/', $value);
});

it('can hexify arrays', function () {
    $testArray = [
        '#',
        '##',
        '###',
    ];

    $result = $this->callPrivateFakeMethod('hexify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[a-z0-9]{1,3}$/', $item);
    }
});

it('can numerify with percentage sign', function () {
    $value = (int) $this->callPrivateFakeMethod('numerify', '%%%');

    $this->assertMatchesRegularExpression('/^[\d]{3}$/', $value);
});

it('can numerify arrays', function () {
    $testArray = [
        '##',
        '%%',
        '#%',
    ];

    $result = $this->callPrivateFakeMethod('numerify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[\d]{1,2}$/', (int) $item);
    }
});

it('can letterify', function () {
    $value = $this->callPrivateFakeMethod('letterify', '???');

    $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
});

it('can letterify arrays', function () {
    $testArray = [
        '?',
        '??',
        '???',
    ];

    $result = $this->callPrivateFakeMethod('letterify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[A-Za-z]{1,3}$/', $item);
    }
});

it('can bothify', function () {
    $value = $this->callPrivateFakeMethod('bothify', '?#%');

    $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
});

it('can bothify with asterix', function () {
    $value = $this->callPrivateFakeMethod('bothify', '***');

    $this->assertMatchesRegularExpression('/^[\w]{3}$/', $value);
});

it('can bothify arrays', function () {
    $testArray = [
        '#',
        '?',
        '*',
        '**',
        '#?*',
    ];

    $result = $this->callPrivateFakeMethod('bothify', $testArray);

    foreach ($result as $item) {
        $this->assertMatchesRegularExpression('/^[\w]{1,3}$/', $item);
    }
});
