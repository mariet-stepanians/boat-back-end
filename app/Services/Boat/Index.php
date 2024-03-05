<?php

namespace App\Services\Boat;

use App\Models\Boat;

class Index
{
    public function __invoke($args)
    {
        $page = $args['page'] ?? 1;
        $count = $args['count'] ?? 15;

        $boats = Boat::paginate($count, ['*'], 'page', $page);

        return [
            'data' => $boats->items(),
            'paginatorInfo' => [
                'currentPage' => $boats->currentPage(),
                'lastPage' => $boats->lastPage(),
                'perPage' => $boats->perPage(),
                'total' => $boats->total(),
            ],
        ];
    }
}
