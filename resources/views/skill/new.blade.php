@extends('layouts')

@section('content')

<form action="{{route('skill.store')}}" method="post">
	@csrf
	<p style="margin: 10px 0 0 0;">スキルを入力</p>
	<input id="スキルを入力" type="text" name="skill" placeholder="スキル名">

	<p style="margin: 10px 0 0 0;">スキルレベルを入力</p>
	<select name="level">
		@foreach (config('const.Skill.LEVEL') as $key => $val)
            <option value="{{ $key }}">{{ $val }}</option>
        @endforeach
	</select>

	<p style="margin: 10px 0 0 0;">スキルタイプを入力</p>
	<select name="skill_type">
		@foreach (config('const.Skill.TYPE') as $key => $val)
            <option value="{{ $key }}">{{ $val }}</option>
        @endforeach
	</select>
	<button type="submit">登録</button>
</form>

<div style="margin-top: 30px">
	@if (!empty($SkillRowset))
		<h2>スキル一覧</h2>
		@foreach ($SkillRowset as $SkillRow)
			<p>
				{{$SkillRow->skill}}
			</p>
		@endforeach

	@endif
</div>
@endsection