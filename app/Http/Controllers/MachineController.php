<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\machine;
use App\Http\Controllers\Traits\CrudActions;

class MachineController extends Controller
{
	const MODEL = machine::class;
     use CrudActions;
}
?>