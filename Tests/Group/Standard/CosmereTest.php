<?php

// region Attributes

test('aon attribute', function () {
    $value = $this->🙃->cosmere->aon;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('shard_world attribute', function () {
    $value = $this->🙃->cosmere->shard_world;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('shard attribute', function () {
    $value = $this->🙃->cosmere->shard;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('surge attribute', function () {
    $value = $this->🙃->cosmere->surge;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('knight_radiant attribute', function () {
    $value = $this->🙃->cosmere->knight_radiant;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('metal attribute', function () {
    $value = $this->🙃->cosmere->metal;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('allomancer attribute', function () {
    $value = $this->🙃->cosmere->allomancer;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('feruchemist attribute', function () {
    $value = $this->🙃->cosmere->feruchemist;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('herald attribute', function () {
    $value = $this->🙃->cosmere->herald;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

test('spren attribute', function () {
    $value = $this->🙃->cosmere->spren;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

// endregion
