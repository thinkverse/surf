<?php

use App\Models\User;

it('can access available route', function ($route) {
    $this->get($route)->assertOk();
})->with('routes');

it('can access available auth route', function ($route) {
    $this->actingAs(User::first());

    $this->get($route)->assertOk();
})->with('authroutes');
