@inject('assets', 'App\Assets\Assets')
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
	{{ $assets->getAssets() }}
	<script src="https://unpkg.com/vue@next"></script>
</head>

<body>
	<header>
		<a class="top" href="{{ route('/') }}">TOP</a>
		@auth
			<a class="mypage" href="{{ route('mypage.edit-profile') }}">MYPAGE</a>
			<form method="POST" action="{{ route('logout') }}">
				@csrf
				<button class="login-btn out">LOGOUT</button>
			</form>
		@endauth
		@guest
			<a class="login-btn" href="{{ route('login') }}">LOGIN</a>
		@endguest
	</header>
	<div id="app">
		@yield('content')
	</div>
</body>

{{-- <script src="{{ mix('js/app.js') }}"></script> --}}

</html>
