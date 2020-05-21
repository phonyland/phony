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

// endregion
