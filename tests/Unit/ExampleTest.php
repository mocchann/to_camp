<?php

test('example', function () {
    expect(true)->toBeTrue();
});

test('home.index', function () {
    $response = $this->get('/home');

    $response->assertStatus(200);
});
