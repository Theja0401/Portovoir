<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
</head>
<style type="text/css">
*{
	font-family: 'Noto Sans', sans-serif;
	box-sizing: border-box;
}

body{
	background-image: url('bgregister.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	overflow-y: scroll;
}

a{
	color: black;
	text-decoration: none;
}

.box{
	width: 35%;
	height: 100%;
	margin: 50px auto;
	box-shadow: 6px 10px 25px 0px rgba(0,0,0,0.75);
	border-radius: 8px;
	background: white;
}

.selections{
	width: 100%;
	height: 0;
}

.selection{
	position: relative;
	width: 50%;
	height: 50px;
	box-sizing: border-box;
	background: #353639;
	text-align: center;
	vertical-align: middle;
	line-height: 50px;
}

.login{
	border-top-left-radius: 5px;
	float: left;
}

.register{
	border-top-right-radius: 5px;
	border-left: 1px solid white;
	float: right;
}

.selectiontext{
	color: white;
	font-size: 16px;
}

.boxcontent{
	height: 100%;
	padding: 50px 50px 0px 50px;
}

.boxheadertext{
	padding: 15px 0;
	font-weight: bold;
	font-size: 20px;
	text-align: center;
}

.contentinput{
	width: 100%;
	border-radius: 5px;
	height: 50px;
	border: 3px solid #d4d4d4;
	margin-bottom: 20px;
	padding-left: 16px;
	box-sizing: border-box;
}

.contentinput::placeholder{
	opacity: 40%;
	color: black;
	font-size: 16px;
}

.ortext{
	text-align: center;
	width: 100%;
	margin: -8px 0 14px 0;
}

.loginwith{
	width: 100%;
	height: 50px;
	padding: 0 50px;
	display: flex;
	flex-wrap: nowrap;
}

.social{
	flex-grow: 1;
	height: 50px;
	border: 3px solid #d4d4d4;
	border-radius: 5px;
	position: relative;
}

.facebook, .twitter{
	margin-left: 25px;
}

.social img{
	width: 22px;
	height: 22px;
	position: absolute;
	left: 50%;
	top: 50%;
	transform: translate(-50%, -50%);
}

.arrowcontainer{
	text-align: center;
	width: 100%;
	height: 50px;
	margin: 24px 0;
	padding: 0 50px;
}

.arrowcontainer img{
	width: 50px;
	height: 50px;
}

.registercontainer{
	width: 100%;
	text-align: center;
	padding: 0 50px 24px 50px;
}

#next:hover{
	cursor: pointer;
}

.whitesquare{
	width: 20px;
	height: 20px;
	background: white;
	transform: rotate(45deg);
	position: absolute;
	left: 50%;
	margin-left: -3%;
	top: 44px;
}

.switch {
	position: absolute;
	right: 10px;
	top: 10px;
	width: 60px;
	height: 34px;
}

.checkboxtext{
	position: absolute;
	color: white;
	right: 80px;
	top: 16px;
}

.slider {
	position: absolute;
	cursor: pointer;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background-color: #ccc;
	-webkit-transition: .4s;
	transition: .4s;
}

.slider:before {
	position: absolute;
	content: "";
	height: 26px;
	width: 26px;
	left: 4px;
	bottom: 4px;
	background-color: white;
	-webkit-transition: .4s;
	transition: .4s;
}

input:checked + .slider {
	background-color: #7C83FD;
}

input:focus + .slider {
	box-shadow: 0 0 1px #7C83FD;
}

input:checked + .slider:before {
	-webkit-transform: translateX(26px);
	-ms-transform: translateX(26px);
	transform: translateX(26px);
}

.slider.round {
	border-radius: 34px;
}

.slider.round:before {
	border-radius: 50%;
}

.blackcover{
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	background: black;
	z-index: -999;
	opacity: 0.5;
}

.box.darkmode{
	background: #151516;
}

.whitesquare.darkmode{
	background: #151516;
}

.contentinput.darkmode{
	background: none;
	color: white;
}

.contentinput.darkmode::placeholder{
	color: white;
	opacity: 0.6;
}

.login.darkmode, .register.darkmode{
	background: white;
	font-weight: bold;
}

.selectiontext.darkmode{
	color: black;
}

.texts.darkmode{
	color: white;
}

.blackimg.darkmode{
	filter: invert(1);
}

::-webkit-scrollbar {
	width: 10px;
}

::-webkit-scrollbar-track {
	box-shadow: inset 0 0 50px #BFC5D6; 
}
 
::-webkit-scrollbar-thumb {
	background: #7C83FD;
	}

::-webkit-scrollbar-thumb:hover {
	background: #4a53fc; 
}
</style>
<body style="background-image:url({{url('/img/bgregister.jpg')}})">
<div class="blackcover"></div>
<span class="checkboxtext">Dark Mode :</span>
<label class="switch">
	<input type="checkbox" onclick="toggledarkmode()">
	<span class="slider round"></span>
</label>
<form action="/login" method="post">
	@csrf
<div class="darkmodeflag box" style="">
	<div class="selections">
		<a href="login.php">
			<div class="darkmodeflag selection login">
				<span class="darkmodeflag selectiontext">LOGIN</span>
				<div class="darkmodeflag whitesquare"></div>
			</div>
		</a>
			<div class="darkmodeflag selection register" onclick="register()">
				<span class="darkmodeflag selectiontext">REGISTER</span>
			</div>
		</a>
	</div>
	<div class="boxcontent">
		<p class="texts darkmodeflag boxheadertext">Login to your account</p>
		<input class="darkmodeflag contentinput marginbottom @error('email') is-invalid @enderror" type="email" name="email" placeholder="email" value="{{old('email')}}" >
			@error('email')
			<div class="invalid-feed">
				{{$message}}
			</div>
			@enderror
		<input class="darkmodeflag contentinput" type="password" name="password" placeholder="Password">
	</div>
	<div class="ortext">
		<span class="texts darkmodeflag"><b>OR</b></span>
	</div>
	<div class="loginwith">
		<div class="social google">
			<img src="{{url('img/google.png')}}">
		</div>
		<div class="social facebook">
			<img src="{{url('img/facebook.png')}}">
		</div>
		<div class="social twitter">
			<img src="{{url('img/twitter.png')}}">
		</div>
	</div>
	<div class="arrowcontainer">
		<input type="submit" class="blackimg darkmodeflag" value="login">
	</div>
	</form>
	<div class="registercontainer">
		<span><b><a class="texts darkmodeflag" href="register.php">Don't have an account?</a></b></span>
	</div>
</div>
</body>
<script type="text/javascript">
function toggledarkmode(){
	var divs = document.querySelectorAll('.darkmodeflag');
	for (var i = 0; i < divs.length; i++) {
	    divs[i].classList.toggle('darkmode');
	}
}

function register(){
    location.href="{{url('/register')}}";

}
</script>
</html>