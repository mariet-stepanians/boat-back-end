<?php

namespace App\Services\Boat;

use App\Models\Boat;

class Delete
{
    public function __invoke($args)
    {
        $boat = Boat::findOrFail($args['id']);

        return $boat->delete();
    }
}
