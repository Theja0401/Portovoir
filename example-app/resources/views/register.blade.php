<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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

.parentdiv{
	border-radius: 5px;
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
	padding-left: 16px;
	box-sizing: border-box;
}

.contentinput::placeholder{
	opacity: 70%;
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
	margin-left: -4%;
	top: 44px;
}

#parentdiv1{
	opacity: 1;
	-webkit-transition: opacity 0.3s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	-ms-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3 ease-in-out;
}

#parentdiv1.fade{
	opacity: 0;
}

#parentdiv2{
	opacity: 0;
	-webkit-transition: opacity 0.6s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	-ms-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3 ease-in-out;
}

#parentdiv2.fade2{
	opacity: 1;
}

#parentdiv2.fade3{
	opacity: 0;
}

#parentdiv3{
	opacity: 0;
	-webkit-transition: opacity 0.6s ease-in-out;
	-moz-transition: opacity 0.3s ease-in-out;
	-ms-transition: opacity 0.3s ease-in-out;
	-o-transition: opacity 0.3s ease-in-out;
	transition: opacity 0.3 ease-in-out;
}

#parentdiv3.fade4{
	opacity: 1;
}

.buttoncontainer{
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	margin-bottom: 20px;
}

.buttons{
	width: 33%;
	height: 80px;
	border: 2px solid #d4d4d4;
	border-radius: 5px;
	position: relative;
	background: none;
	word-wrap: break-word;
}

.marginright{
	margin-right: 25px;
}

.marginbottom{
	margin-bottom: 20px;
}

.colored{
	border: 2px solid #7C83FD;
	color: #7C83FD !important;
}

.instagram{
	border: 3px solid #DD2A7B;
	color: #DD2A7B;	
}

.instagram:focus, .pinterest:focus, .youtube:focus{
	outline: none;
}

.instagram::placeholder{
	color: #DD2A7B;
}

.pinterest{
	border: 3px solid #C8232C;
	color: #C8232C;
}

.pinterest::placeholder{
	color: #C8232C;
}

.youtube{
	border: 3px solid #FF0000;
	color: #FF0000;	
}

.youtube::placeholder{
	color: #FF0000;
}

.inputcontainer{
	position: relative;
}

.inputcontainer img{
	width: 30px;
	height: 30px;
	position: absolute;
	right: 10px;
	top: 10px;
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

.social.darkmode{
	border: 3px solid #7c83fd;
}

.google.darkmode{
	border: 3px solid #DD4B39;
}

.facebook.darkmode{
	border: 3px solid #4267B2;
}

.twitter.darkmode{
	border: 3px solid #1DA1F2;
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

.buttons.darkmode{
	color: white;
}

.instagram.darkmode{
	color: #DD2A7B;
}

.instagram.darkmode::placeholder{
	color: #DD2A7B;
}

.pinterest.darkmode{
	color: #C8232C;
}

.pinterest.darkmode::placeholder{
	color: #C8232C;
}

.youtube.darkmode{
	color: #FF0000;
}

.youtube.darkmode::placeholder{
	color: #FF0000;
}

.buttoncontainer .buttons, .buttoncontainer .buttons span{
	font-weight: bold;
	position: relative;
}

.buttoncontainer .buttons:before{
	content: ' ';
	display: block;
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	opacity: 0.6;
	background-repeat: no-repeat;
	background-position: 50% 0;
	background-size: cover;
}

#button1:before{
	background-image: url('photography.jpg');
}

#button2:before{
	background-image: url('digitalart.png');
}

#button3:before{
	background-image: url('drawing.jpg');
}

#button4:before{
	background-image: url('scifi.jpg');
}

#button5:before{
	background-image: url('game.jpg');
}

#button6:before{
	background-image: url('nature.jpg');
}

#button7:before{
	background-image: url('modern.jpg');
}

#button8:before{
	background-image: url('technology.jpg');
}

#button9:before{
	background-image: url('foods.jpg');
}

#button10:before{
	background-image: url('horror.jpg');
}

#button11:before{
	background-image: url('infographics.jpg');
} 

#button12:before{
	background-image: url('animals.jpg');
}

#button13:before{
	background-image: url('coding.jpg');
}

#button14:before{
	background-image: url('gamedesign.jpg');
}

#button15:before{
	background-image: url('webdesign.jpg');
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
<div class="darkmodeflag box" style="">
	<div class="selections">
			<div class="darkmodeflag selection login" id="login" onclick="login()">
				<span class="darkmodeflag selectiontext">LOGIN</span>
			</div>
		</a>
			<div class="darkmodeflag selection register" id="register">
				<span class="darkmodeflag selectiontext">REGISTER</span>
				<div id="whitesquare" class="darkmodeflag whitesquare"></div>
			</div>
		</a>
	</div>
	<form action='/register' method="post">
		@csrf
	<div class="darkmodeflag parentdiv" id="parentdiv1">
		<div class="boxcontent">
			<p class="texts boxheadertext darkmodeflag">Make a new account</p>
			<input class="darkmodeflag contentinput marginbottom" type="text" name="username" placeholder="Username" required>
			<input class="darkmodeflag contentinput marginbottom" type="text" name="email" placeholder="Email" required>
			<input class="darkmodeflag contentinput marginbottom" type="password" name="password" placeholder="Password" required>
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
			<input type="submit" class="blackimg darkmodeflag" value="Register">
			<!-- <img   src="{{url('img/arrow.png')}}"	 id="next" >  -->
		</div>
	</form>
		<div class="registercontainer">
			<span><b><a class="texts darkmodeflag" href="login.php">Already have an account?</a></b></span>
		</div>
	</div>
	<div class="darkmodeflag parentdiv" id="parentdiv2" hidden>
		<div class="boxcontent">
			<p class="texts darkmodeflag boxheadertext">Which type of content do you prefer?</p>
			<div class="buttoncontainer">
				<button class="darkmodeflag buttons marginright" id="button1" type="button" onclick="togglecolor(this)"><span>Photography</span></button>
				<button class="darkmodeflag buttons marginright" id="button2" type="button" onclick="togglecolor(this)"><span>Digital Art</span></button>
				<button class="darkmodeflag buttons" id="button3" type="button" onclick="togglecolor(this)"><span>Drawing</span></button>
			</div>
			<div class="buttoncontainer">
				<button class="darkmodeflag buttons marginright" id="button4" type="button" onclick="togglecolor(this)"><span>Sci-Fi</span></button>
				<button class="darkmodeflag buttons marginright" id="button5" type="button" onclick="togglecolor(this)"><span>Game</span></button>
				<button class="darkmodeflag buttons" id="button6" type="button" onclick="togglecolor(this)"><span>Nature</span></button>
			</div>
			<div class="buttoncontainer">
				<button class="darkmodeflag buttons marginright" id="button7" type="button" onclick="togglecolor(this)"><span>Modern</span></button>
				<button class="darkmodeflag buttons marginright" id="button8" type="button" onclick="togglecolor(this)"><span>Technology</span></button>
				<button class="darkmodeflag buttons" id="button9" type="button" onclick="togglecolor(this)"><span>Foods</span></button>
			</div>
			<div class="buttoncontainer">
				<button class="darkmodeflag buttons marginright" id="button10" type="button" onclick="togglecolor(this)"><span>Horror</span></button>
				<button class="darkmodeflag buttons marginright" id="button11" type="button" onclick="togglecolor(this)"><span>Infographics</span></button>
				<button class="darkmodeflag buttons" id="button12" type="button" onclick="togglecolor(this)"><span>Animals</span></button>
			</div>
			<div class="buttoncontainer">
				<button class="darkmodeflag buttons marginright" id="button13" type="button" onclick="togglecolor(this)"><span>Coding</span></button>
				<button class="darkmodeflag buttons marginright" id="button14" type="button" onclick="togglecolor(this)"><span>Game Design</span></button>
				<button class="darkmodeflag buttons" id="button15" type="button" onclick="togglecolor(this)"><span>Web Design</span></button>
			</div>
		</div>
		<div class="arrowcontainer">
			<img class="blackimg darkmodeflag"  src="{{url('img/arrow.png')}}" id="next" onclick="next2()"> 
		</div>
		<div class="registercontainer">
			<span><b><a class="texts darkmodeflag" href="login.php">Already have an account?</a></b></span>
		</div>
	</div>
	<div class="darkmodeflag parentdiv" id="parentdiv3" hidden>
		<div class="boxcontent">
			<p class="texts darkmodeflag boxheadertext">Other social media links (Optional)</p>
			<div class="inputcontainer">
				<input class="darkmodeflag contentinput marginbottom instagram" type="text" name="username" placeholder="Instagram">
				<img  src="{{url('img/instagram.png')}}">
			</div>
			<div class="inputcontainer">
				<input class="darkmodeflag contentinput marginbottom pinterest" type="text" name="email" placeholder="Pinterest">
				<img id="pinterest"  src="{{url('img/pinterest.png')}}">
			</div>
			<div class="inputcontainer">
				<input class="darkmodeflag contentinput youtube" type="text" name="password" placeholder="Youtube">
				<img  src="{{url('img/youtube.png')}}">
			</div>
		</div>
		<div class="arrowcontainer">
			<img class="blackimg darkmodeflag"  src="{{url('img/checkbutton.png')}}" id="next" onclick="next3()"> 
		</div>
		<div class="registercontainer">
			<span><b><a class="texts darkmodeflag"href="login.php">Already have an account?</a></b></span>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
function next(){
	var parent1 = document.getElementById('parentdiv1');
	var parent2 = document.getElementById('parentdiv2');
	setTimeout(function(){
		parent1.hidden = true;
		parent2.hidden = false;
		setTimeout(function(){
			parent2.classList.add('fade2');
		}, 100);
	}, 300);
	parent1.classList.add('fade');
}

function next2(){
	var parent2 = document.getElementById('parentdiv2');
	var parent3 = document.getElementById('parentdiv3');
	setTimeout(function(){
		parent2.hidden = true;
		parent3.hidden = false;
		setTimeout(function(){
			parent3.classList.add('fade4');
		}, 100);
	}, 300);
	parent2.classList.add('fade3');
}

function togglecolor(button){
	button.classList.toggle('colored');
}
function next3(){
	
}
function toggledarkmode(){
	var divs = document.querySelectorAll('.darkmodeflag');
	for (var i = 0; i < divs.length; i++) {
	    divs[i].classList.toggle('darkmode');
	}
}
function login(){
    location.href="{{url('/login')}}";
}
</script>
</html>