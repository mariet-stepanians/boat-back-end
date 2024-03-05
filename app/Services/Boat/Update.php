<?php

namespace App\Services\Boat;

use App\Models\Boat;

class Update
{
    public function __invoke($args)
    {
        $boat = Boat::findOrFail($args['id']);

        $boat->update($args);
        return $boat;
    }
}
