<?php

namespace Spatie\Ignition\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Ignition\Ignition;

class StyleController
{
    public function __invoke(Request $request)
    {
        return response(
            file_get_contents(Ignition::styles()[$request->style]),
            200,
            ['Content-Type' => 'text/css']
        );
    }
}
