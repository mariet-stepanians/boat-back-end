<?php

namespace App\GraphQL\Mutations;

use App\Models\Boat;
use App\Services\Boat\Delete;
use App\Services\Boat\Store;
use App\Services\Boat\Update;
use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;

class BoatMutator
{
    public function create($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $store = new Store;
        return $store($args);
    }

    public function update($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $update = new Update();
        return $update($args);
    }

    public function delete($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)
    {
        $delete = new Delete();
        return $delete($args);
    }
}
