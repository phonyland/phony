<?php

use Phonyland\Fake\Fake;

test('can_call_by_an_alias', function () {
    $this->assertInstanceOf(Fake::class, $this->🙃->address);
    $this->assertInstanceOf(Fake::class, $this->🙃->📫);
    $this->assertInstanceOf(Fake::class, $this->🙃->alphabet);
    $this->assertInstanceOf(Fake::class, $this->🙃->🔤);
    $this->assertInstanceOf(Fake::class, $this->🙃->ancient);
    $this->assertInstanceOf(Fake::class, $this->🙃->📜);
    $this->assertInstanceOf(Fake::class, $this->🙃->person);
    $this->assertInstanceOf(Fake::class, $this->🙃->coin);
    $this->assertInstanceOf(Fake::class, $this->🙃->currency);
});
