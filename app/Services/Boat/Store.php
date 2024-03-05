<?php

namespace App\Services\Boat;

use App\Models\Boat;

class Store
{
    public function __invoke($args)
    {
        $args['user_id'] = auth()->id();
        return Boat::create($args);
    }
}
