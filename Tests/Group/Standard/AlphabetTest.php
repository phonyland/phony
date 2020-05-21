<?php

// region Attributes

test('uppercase_letter attribute', function () {
    $value = $this->🙃->alphabet->uppercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('lowercase_letter attribute', function () {
    $value = $this->🙃->alphabet->lowercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('letter attribute', function () {
    $value = $this->🙃->alphabet->letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('punctuation_mark attribute', function () {
    $value = $this->🙃->alphabet->punctuation_mark;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

// endregion

// region Methods

test('ascii_uppercase_letter() method', function () {
    $value = $this->🙃->alphabet->ascii_uppercase_letter();

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_lowercase_letter() method', function () {
    $value = $this->🙃->alphabet->ascii_lowercase_letter();

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_letter() method', function () {
    $value = $this->🙃->alphabet->ascii_letter();

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

// endregion

// region Methods as Attributes

test('ascii_uppercase_letter() method as attribute', function () {
    $value = $this->🙃->alphabet->ascii_uppercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_lowercase_letter() method as attribute', function () {
    $value = $this->🙃->alphabet->ascii_lowercase_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

test('ascii_letter() method as attribute', function () {
    $value = $this->🙃->alphabet->ascii_letter;

    $this->assertEquals(1, mb_strlen($value, 'utf8'));
});

// endregion
