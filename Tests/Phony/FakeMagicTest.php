<?php

it('can not access undefined magic attribute', function () {
    $this->expectException(RuntimeException::class);

    $this->🙃->alphabet->not_exist;
});

it('can not set a magic attribute', function () {
    $this->expectException(RuntimeException::class);

    $this->🙃->alphabet->uppercase_letter = 'can-not';
});

it('can check existence with magic isset', function () {
    $this->assertTrue(
        isset($this->🙃->alphabet->uppercase_letter)
    );

    $this->assertFalse(
        isset($this->🙃->alphabet->not_exist)
    );
});

it('can not access undefined magic method', function () {
    $this->expectException(RuntimeException::class);

    $this->🙃->alphabet->not_exist();
});
