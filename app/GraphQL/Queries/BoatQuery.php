<?php

namespace App\GraphQL\Queries;

use App\Models\Boat;
use App\Services\Boat\Index;
use App\Services\Boat\Show;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class BoatQuery
{
    /**
     * Return a single boat by its ID.
     *
     * @param $rootValue
     * @param array<string, mixed> $args
     * @param GraphQLContext $context
     * @param ResolveInfo $resolveInfo
     * @return mixed
     */
    public function find($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $show = new Show();
        return $show($args);
    }

    public function paginate($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $index = new Index;
        return $index($args);
    }
}
