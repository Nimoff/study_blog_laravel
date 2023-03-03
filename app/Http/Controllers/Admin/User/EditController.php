<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(User $user)
    {
        $roles = $user::getRole();
        return view('admin.user.edit', compact('user', 'roles'));
    }
}
