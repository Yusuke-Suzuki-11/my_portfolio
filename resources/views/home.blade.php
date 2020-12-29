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
	</div>

	<show-list-component></show-list-component>

@endsection