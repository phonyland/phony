<?php

namespace Phony\Test\Phony;

use Phony\Test\BaseTest;

class LoaderCacheTest extends BaseTest
{
    /** @test */
    public function can_get_cache_size(): void
    {
        $this->assertIsInt(
            $this->🙃->getCacheSize()
        );
    }

    /** @test */
    public function can_set_cache_size(): void
    {
        $this->🙃 = $this->🙃->setCacheSize(1_000_000);

        $this->assertEquals(
            1_000_000,
            $this->🙃->getCacheSize()
        );
    }

    /** @test */
    public function do_not_cache_if_size_exceed(): void
    {
        $this->🙃 = $this->🙃->setCacheSize(0);

        $this->🙃->alphabet->uppercase_letter;
        $this->🙃->alphabet->lowercase_letter;

        $this->assertEquals(
            0,
            $this->🙃->getCacheUsage()
        );
    }

    /** @test */
    public function do_not_cache_if_it_will_be_exceed_with_the_number_of_new_items(): void
    {
        $this->🙃 = $this->🙃->setCacheSize(28);

        $this->🙃->alphabet->uppercase_letter; // Size of 28
        $this->🙃->alphabet->lowercase_letter; // Size of 28

        $this->assertEquals(
            28,
            $this->🙃->getCacheUsage()
        );
    }

    /** @test */
    public function cache_size_can_be_dynamically_increase(): void
    {
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
    }
}
