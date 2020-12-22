<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
	public function new()
	{
		return view('skill.new')->with('SkillRowset', Skill::all());
	}

	public function store(Request $request)
	{
		$SkillRow = new Skill;

		$SkillRow->fill([
			"skill" => $request->skill,
			"level" => $request->level,
			"skill_type" => $request->skill_type,
		]);

		$SkillRow->save();

		return redirect(route('skill.new'));
	}


}
