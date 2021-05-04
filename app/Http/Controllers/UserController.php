<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Traits\CrudActions;
use App\User;

class UserController extends Controller
{
    const MODEL = User::class;
    use CrudActions;
}
