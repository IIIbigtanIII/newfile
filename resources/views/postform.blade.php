	<form action="{{route('postform')}}" method="post" class="sign-up">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        <h1 class="sign-up-title">Sign up in seconds</h1>
	        <input type="text" class="sign-up-input" placeholder="What's your username?" name="name" autofocus>
	        <input type="password" class="sign-up-input" placeholder="Choose a password" name="password">
	        <input id="btn_submit" type="submit" value="Sign me up!" class="sign-up-button">
	</form>