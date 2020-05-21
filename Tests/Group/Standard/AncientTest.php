<?php

// region Attributes

test('god attribute', function () {
    $value = $this->🙃->ancient->god;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('primordial attribute', function () {
    $value = $this->🙃->ancient->primordial;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('titan attribute', function () {
    $value = $this->🙃->ancient->titan;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('hero attribute', function () {
    $value = $this->🙃->ancient->hero;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

// endregion
