<?php

namespace App\Policies;

use App\Models\Store;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class StorePolicy
{
    public function update(User $user, Store $store): Response
    {
        return $user->id === $store->user_id ? Response::allow() : Response::denyAsNotFound();
    }
}
