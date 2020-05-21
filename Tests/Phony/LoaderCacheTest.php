<?php

it('can get cache size', function () {
    $value = $this->🙃->getCacheSize();

    $this->assertIsInt($value);
});

it('can set cache size', function () {
    $this->🙃 = $this->🙃->setCacheSize(1_000_000);

    $this->assertEquals(
        1_000_000,
        $this->🙃->getCacheSize()
    );
});

it('does not cache if size exceed', function () {
    $this->🙃 = $this->🙃->setCacheSize(0);

    $this->🙃->alphabet->uppercase_letter;
    $this->🙃->alphabet->lowercase_letter;

    $this->assertEquals(
        0,
        $this->🙃->getCacheUsage()
    );
});

it('does not cache if it will be exceed with the number of new items', function () {
    $this->🙃 = $this->🙃->setCacheSize(28);

    $this->🙃->alphabet->uppercase_letter; // Size of 28
    $this->🙃->alphabet->lowercase_letter; // Size of 28

    $this->assertEquals(
        28,
        $this->🙃->getCacheUsage()
    );
});

test('cache size can be dynamically increase', function () {
    $this->🙃 = $this->🙃->setCacheSize(0);

    $this->🙃->alphabet->uppercase_letter; // Size of 28

    $this->assertEquals(
        0,
        $this->🙃->getCacheUsage()
    );

    $this->🙃 = $this->🙃->setCacheSize(28);

    $this->🙃->alphabet->uppercase_letter; // Size of 28

    $this->assertEquals(
        28,
        $this->🙃->getCacheUsage()
    );
});
