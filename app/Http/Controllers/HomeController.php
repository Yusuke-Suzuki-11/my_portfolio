<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class HomeController extends Controller
{
	public function index()
	{
		return view('home')->with('SkillRowset', Skill::all());
	}
}
