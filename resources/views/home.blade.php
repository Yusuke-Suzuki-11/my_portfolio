@extends('layouts')

@section('content')
<div class='pf-top-container'>
	<p class='pf-top-logo'>Yusuke Suzuki</p>
	<p class="pf-top-sub-logo"><span>-</span> portfolio site <span>-</span></p>
</div>

<div class="pf-container">
	<div class="pf-top">
		<p class="pf-main">オリジナルポートフォリオ一覧</p>
	</div>
	<button style="display: inline">条件を絞って探す</button>
	<div class="pf-language-skills">
		<ul class="pf-language-skills-item">
			@foreach ($SkillRowset as $SkillRow)
				<li><a href="">{{$SkillRow->skill}}</a></li>
			@endforeach
		</ul>
	</div>
</div>

<div id="app">
	<example-component></example-component>


	<show-list-component></show-list-component>
</div>






<script src="{{ mix('js/app.js') }}"></script>

@endsection