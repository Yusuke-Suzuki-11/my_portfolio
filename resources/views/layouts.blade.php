<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>そのページのタイトル</title>
		<link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=M+PLUS+1p" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>

	<body>

		@include('elements/header')
		@yield('content')
	</body>
</html>