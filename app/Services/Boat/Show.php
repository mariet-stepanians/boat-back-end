<?php

namespace App\Services\Boat;

use App\Models\Boat;

class Show
{
    public function __invoke($args)
    {
        return Boat::findOrFail($args['id']);
    }
}
