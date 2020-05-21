<?php

// region Attributes

test('name attribute', function () {
    $value = $this->🙃->artist->name;

    $this->assertMatchesRegularExpression('/\w+/', $value);
});

// endregion
