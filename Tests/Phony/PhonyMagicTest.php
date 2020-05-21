<?php

it('can not access undefined magic attribute', function () {
    $this->🙃->not_exist;
})->throws(RuntimeException::class);

it('can not set a magic attribute', function () {
    $this->🙃->alphabet = 'can-not';
})->throws(RuntimeException::class);

it('can check existence with magic isset', function () {
    $this->assertTrue(isset($this->🙃->alphabet));
    $this->assertFalse(isset($this->🙃->not_exist));
});
