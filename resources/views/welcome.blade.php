@extends('layouts')

@section('content')
<div>
	@for($i = 0; $i < 10; $i++)
		<h1>youkoso!! youkoso!! youkoso!! youkoso!! youkoso!! youkoso!! youkoso!! youkoso!! youkoso!!</h1>
	@endfor
</div>

<div class="pf-container">
	<div class="pf-top">
		<p class="pf-main">ポートフォリオ一覧</p>
	</div>
	<div class="pf-language-skills">
		<ul class="pf-language-skills-item">
			<li><a href="">Ruby</a></li>
			<li><a href="">PHP</a></li>
			<li><a href="">HTML</a></li>
			<li><a href="">SCSS/CSS</a></li>
			<li><a href="">JavaScript</a></li>
		</ul>
	</div>
</div>





@endsection