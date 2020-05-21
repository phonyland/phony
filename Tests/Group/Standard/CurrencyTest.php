<?php

// region Attributes

test('name attribute', function () {
    $value = $this->🙃->currency->name;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('code attribute', function () {
    $value = $this->🙃->currency->code;

    $this->assertMatchesRegularExpression('/[A-Z]{3}/', $value);
});

test('symbol attribute', function () {
    $value = $this->🙃->currency->symbol;

    $this->assertIsString($value);
});

// endregion
