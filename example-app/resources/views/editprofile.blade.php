<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
	<link rel="icon" href="portovoir.png">
</head>
<style type="text/css">
*{
	font-family: 'Noto Sans', sans-serif;
	box-sizing: border-box;
}

input:focus, select:focus{
	outline: none;
}

body{
	overflow-y: scroll;
	background: #E1E1E5;
	margin: 0;
}

body.darkmode{
	background: #151516;
}

.header.real.darkmode{
	background: #1c1d1e;
}

.title{
	text-align: center;
	font-weight: normal;
}

.header{
	width: 100%;
	height: 350px;
	position: relative;
	background-image: url('banner.jpg');
	background-position: bottom;
	background-size: cover;
}

.header .banneredit{
	position: absolute;
}

.header button:hover{
	cursor: pointer;
}

.header .button{
	font-weight: bold;
	font-size: 16px;
	border: none;
	border-radius: 8px;
}

.banneredit{
	width: 160px;
	height: 46px;
	bottom: 10px;
	right: 10px;
	text-decoration: underline;
}

.banneredit img{
	width: 30px;
	height: 30px;
	margin-top: 8px;
}

.banneredit span{
	position: relative;
	top: -8px;
	padding-left: 10px;
}

.content{
	padding: 50px 100px;
}

.left{
	width: 25%;
	padding-right: 50px;
	float: left;
}

.left button{
	width: 100%;
	height: 44px;
	font-size: 20px;
	margin-bottom: 20px;
	white-space: nowrap; 
	text-overflow: ellipsis;
	overflow: hidden;
	background: none;
	border: 2px solid #7C83FD;
	border-radius: 5px;
	transition: 0.2s;
}

.left button:hover{
	cursor: pointer;
	background: #7C83FD;
}

.right{
	float: right;
	width: 75%;
}

.right .profileimage{
	position: relative;
	width: 80px;
	height: 80px;
}

.right .pfpimage{
	width: 80px;
	height: 80px;
	border-radius: 50%;
}

.right .upload{
	width: 30px;
	height: 30px;
	position: absolute;
	right: 25px;
	top: 25px;
}

.right .pfp{
	display: flex;
}

.right .pfp span{
	font-size: 20px;
	padding-left: 20px;
	line-height: 80px;
}

.right .data .titlebig{
	font-weight: bold;
	font-size: 22px;
	margin: 30px 0 12px;
}

.right .data .inputcontainer input{
	background: none;
	border: 2px solid #7C83FD;
	border-radius: 8px;
	height: 50px;
	width: 100%;
	font-size: 18px;
	padding: 18px;	
}

.inputcontainer{
	position: relative;
}

.inputdeco{
	position: absolute;
	right: 20px;
	top: 10px;
}

.inputdeco img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
	margin-left: 10px;
}

.inputdeco span{
	font-size: 14px;
	color: #353639;
}

.inputdeco.darkmode span{
	color: #a5a6a9;
}

.radiocontainer input{
	width: 20px;
	height: 20px;
	color: #7C83FD;
	margin-right: 10px;
}

.radiocontainer span{
	position: relative;
	top: -4px;
}

.marginright{
	margin-right: 20px;
}

.inputcontainer.last{
	display: flex;
	width: 100%;
	height: auto;
	margin-bottom: 240px;
}

.inputcontainer.last input{
	flex: 1;
}

.options{
	overflow-y: scroll;
	position: absolute;
	right: 0;
	flex: 1;
	width: 47.6%;
	padding: 0 20px;
	background: #BFC5D6;
	border-radius: 8px;
	top: 50px;
	height: 140px;
}

.options img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
	float: right;
}

.options p{
	font-size: 18px;
	font-weight: normal;
	margin: 8px 0;
	width: 100%;
	float: left;
	padding-bottom: 8px;
	border-bottom: 1px solid #7C83FD;
}

.options p:hover{
	cursor: pointer;
}

#marginright{
	margin-right: 40px;
}

.optionlast{
	border: none !important;
}

.simplearrow{
	width: 20px;
	height: 20px;
	position: absolute;
	right: 30px;
	top: 15px;
	transform: rotate(90deg);
}

#openselect:hover, #simplearrow:hover{
	cursor: pointer;
}

#floatingtag{
	position: absolute;
	top: 14px;
	left: 12px;
	color: #353639;
	opacity: 70%;
}

.blacklayer{
	position: absolute;
	width: inherit;
	height: 100%;
	left: 0;
	top: 0;
	border-radius: 50%;
	background: rgba(0,0,0,0.3);
}

.dissapearing{
	opacity: 0;
	transition: all 0.3s;
}

.profileimage:hover{
	cursor: pointer;
}

.profileimage:hover > .dissapearing{
	opacity: 1;
}

#openselect2{
	text-align: center;
}

.data2 .inputcontainer, .data3 .inputcontainer{
	margin-bottom: 20px;
}

#openselect2:hover, #simplearrow2:hover{
	cursor: pointer;
}

.simplearrow2{
	width: 20px;
	height: 20px;
	position: absolute;
	right: 30px;
	top: 15px;
	transform: rotate(90deg);
}

.options2{
	overflow-y: scroll;
	position: absolute;
	right: 0;
	width: 100%;
	padding: 0 20px;
	background: #BFC5D6;
	border-radius: 8px;
	top: 50px;
	height: 140px;
}

.options2 img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
	float: right;
}

.options2 p{
	font-size: 18px;
	font-weight: normal;
	margin: 8px 0;
	width: 100%;
	padding: 8px 0 20px 0;
	border-bottom: 1px solid #7C83FD;
}

.leftoptions{
	width: 45%;
	float: left;
}

.rightoptions{
	width: 45%;
	float: right;
}

.options2 p:hover{
	cursor: pointer;
}

.closecontainer{
	width: 20px;
	height: 20px;
	position: absolute;
	right: -8px;
	top: -8px;
}

.closecontainer:hover{
	cursor: pointer;
}

.greyed{
	opacity: 0.4;
}

.backbuttoncontainer{
	position: relative;
}

.button.back{
	position: absolute;
	top: 20px;
	left: 20px;
	background: #BFC5D6;
	width: 120px;
	height: 40px;
	border: none;
	border-radius: 10px;
	font-size: 16px;
}

.button.back:hover{
	cursor: pointer;
}

.warning, .warning2{
	display: flex;
}

.warning img, .warning2 img{
	width: 40px;
	height: 40px;
	margin-right: 20px;
}

.warning p, .warning2 p{
	margin: 0 0 160px 0;
}

.texts.darkmode{
	color: white;
}

.blackimg.darkmode{
	filter: invert(1);
}

.inputcontainer input.darkmode{
	color: white;
}

#floatingtag.darkmode{
	color: #a5a6a9;
}

.options.darkmode, .options2.darkmode{
	background: #1C1D1E;
}

.back.button.darkmode{
	background: #1C1D1E;
}

.content .left p{
	font-size: 20px;
	font-weight: bold;
}

.data3 .inputdeco{
	top: 14px;
}

#openselect3:hover, #simplearrow3:hover{
	cursor: pointer;
}

.simplearrow3{
	width: 20px;
	height: 20px;
	position: absolute;
	right: 20px;
	top: 15px;
}

.options3{
	overflow-y: scroll;
	position: absolute;
	right: 0;
	width: 100%;
	padding: 0 20px;
	background: #BFC5D6;
	border-radius: 8px;
	top: 50px;
	height: 300px;
}

.options3 img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
	float: right;
}

.options3 p{
	font-size: 18px;
	font-weight: normal;
	margin: 8px 0;
	width: 100%;
	padding: 8px 0;
}

.showdetails{
	text-decoration: underline;
}

.showdetails:hover{
	cursor: pointer;
}

#inputdate{
	width: auto;
}

.addachievement, .deleteachievement{
	border: 2px solid #7C83FD;
	height: 40px;
	width: 300px;
	border-radius: 10px;
	background: none;
	font-size: 18px;
	margin: 0 auto;
	text-align: center;
}

.addachievement:hover, .deleteachievement:hover{
	cursor: pointer;
}

.addachievementcontainer, .deleteachievementcontainer{
	margin-top: 30px;
	text-align: center;
}

.achievementdetails{
	overflow-y: scroll;
	position: absolute;
	right: 0;
	width: 100%;
	padding: 0 20px;
	background: #BFC5D6;
	border-radius: 8px;
	top: 50px;
	height: 280px;
}

.inputcontainer.achievement.opened{
	margin-bottom: 360px;
}

.achievementdetails p{
	margin-bottom: 8px;
}

.achievementdetails h2{
	margin: 0;
}

#verifiedby{
	color: #3A819D;
}

.achievementdetails img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
	margin-left: 30px;
}

#openselect3{
	text-align: center;
}

.achievementdetails.darkmode, .options3.darkmode{
	background: #1C1D1E;
}

#inputdate.darkmode::-webkit-calendar-picker-indicator{
    filter: invert(1);
}

.banneredit.darkmode{
	background: #1C1D1E;
	color: white;
}

.leftsection{
	float: left;
	width: 20%;
}

.rightsection{
	float: right;
	width: 75%;
	margin-bottom: 30px;
}

.rightsection h2{
	white-space: nowrap; 
	text-overflow: ellipsis;
	overflow: hidden;
}

.layoutpreview{
	width: 100%;
	text-align: center;
}

.layoutpreview img{
	margin: 20px auto 100px auto;
}

.data4 .radiocontainer.layouting{
	display: flex;
}

.data4 .radiocontainer.layouting div{
	flex: 1;
	font-size: 14px;
}

.left button.selected{
	background: #7C83FD;
}

.switch {
	position: absolute;
	right: 0px;
	top: 0px;
	width: 60px;
	height: 34px;
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

.data5{
	position: relative;
}

.data5 p{
	font-size: 20px;
	font-weight: bold;
	margin: 30px 0;
}

.switch1{
	top: -4px;
}

.switch2{
	top: 57px;
}

.switch3{
	top: 114px;
}

.switch4{
	top: 171px;
}

.right .pfp{
	position: relative;
}

.right .pfp button{
	width: 200px;
	height: 40px;
	border-radius: 10px;
	background: #7C83FD;
	border: none;
	font-size: 18px;
	position: absolute;
	top: 20px;
	right: 0;
	display: inline-block;
}

.right .pfp button:hover{
	cursor: pointer;
}

.real.header{
	background: #BFC5D6;
	width: 100%;
	height: 90px;
	padding: 20px 30px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-bottom: 0;
	z-index: 1;
}

#logo{
	width: 50px;
	height: 50px;
	margin-right: 20px;
}

.search{
	flex: 13;
	height: 40px;
	position: relative;
	margin-right: 20px;
}

#searchbar{
	width: 100%;
	height: 100%;
	border-radius: 20px;
	border: 2px solid #7C83FD;
	background: none;
	padding-left: 20px;
	font-size: 18px;
}

#searchlogo{
	width: 26px;
	height: 26px;
	position: absolute;
	right: 20px;
	top: 7px;
}

.headerbuttons{
	display: flex;
	align-items: center;
	justify-content: center;
}

.headerbuttons .inbox{
	width: 40px;
	height: 40px;
	margin-right: 20px;
}

.headerbuttons .buttons{
	border: 2px solid #7C83FD;
	width: 150px;
	height: 40px;
	background: #7C83FD;
	border-radius: 10px;
	font-size: 18px;
}

.headerbuttons .login, .headerbuttons .logout{
	margin-right: 20px;
	background: none;
	transition: 0.3s;
}

.headerbuttons .register{
	transition: 0.3s;
}

#profile{
	width: 40px;
	height: 40px;
	border-radius: 50%
}

.headerbuttons.notlogged{
	display: none;
}

.headerbuttons.logged{
	display: flex;
}

.real.header .register:hover{
	background: none;
	cursor: pointer;
}

.real.header .login:hover, .real.header .logout:hover{
	background: #7C83FD;
	cursor: pointer;
}

.real.header input.darkmode{
	color: white;
}

.real.header.darkmode{
	background: #1c1d1e;
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

.scrollcustom::-webkit-scrollbar {
	width: 5px;
}

.scrollcustom::-webkit-scrollbar-track {
	box-shadow: inset 0 0 50px #BFC5D6; 
	border-radius: 10px;
}
 
.scrollcustom::-webkit-scrollbar-thumb {
	background: #7C83FD; 
	border-radius: 10px;
	}

.scrollcustom::-webkit-scrollbar-thumb:hover {
	background: #4a53fc; 
}

.hamburger{
	width: 40px;
	height: 40px;
	margin-right: 20px;
}

.hamburger:hover{
	cursor: pointer;
}

.sidebar {
	height: 100%;
	width: 0;
	position: fixed;
	z-index: 4;
	top: 0;
	left: 0;
	background-color: #BFC5D6;
	overflow-x: hidden;
	transition: 0.5s;
	padding-top: 20px;
}

.sidebar a {
	padding: 8px 8px 8px 32px;
	text-decoration: none;
	font-size: 25px;
	color: black;
	font-weight: bold;
	display: inline;
	transition: 0.3s;
}

#sidebarcontent{
	opacity: 0;
	transition: 1s;
}

.sidebar a:hover {
	color: #7C83FD;
}

.sidebar .closebtn {
	position: absolute;
	top: 10px;
	right: 25px;
	font-size: 36px;
	margin-left: 50px;
	color: black;
}

.sidebar .closebtn:hover{
	color: #7C83FD;
}

.sidebarblack{
	background: rgba(0,0,0,0.5);
	z-index: 3;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	display: none;
}

.sidebaricon{
	width: 30px;
	height: 30px;
	position: relative;
	right: -30px;
	bottom: -4px;
	margin-right: 10px;
	display: inline;
}

#borderbottom img{
	width: 225px;
	height: 75px;
}

#borderbottom{
	border-bottom: 2px solid #7C83FD;
	margin: 0 30px;
	text-align: center;
}

#nohover{
	color: unset;
}

#nohover:hover{
	cursor: pointer;
}

#downarrow{
	width: 30px;
	height: 30px;
	position: absolute;
	right: 30px;
	top: 4px;
}

#downarrowcontainer{
	position: relative;
}

#downarrowcontainer:hover{
	cursor: pointer;
}

#downarrowpopup img{
	right: -70px;
	margin-right: 50px;
}

#downarrow{
	transform: rotate(0);
	transition: 0.5s;
}

#downarrowpopup{
	display: none;
}

.sidebar.darkmode{
	background: #1c1d1e;
}

.darkmode.textsspecial{
	color: white;
}

.header.real .inbox:hover{
	cursor: pointer;
}

.inboxbox{
	background: #e1e1e5;
	border: 2px solid #7C83FD;
	width: 360px;
	height: 400px;
	position: absolute;
	right: 9%;
	top: 90px;
	z-index: 2;
	text-align: center;
	padding: 30px;
	border-radius: 10px;
	display: none;
}

.inboxbox img{
	width: 200px;
	height: 200px;
}

.inboxbox p{
	font-size: 20px;
	font-weight: bold;
}

.inboxbox button{
	width: 200px;
	height: 40px;
	background: none;
	border-radius: 10px;
	border: 2px solid #7C83FD;
	position: absolute;
	bottom: 20px;
	left: 80px;
}

.viewall{
	transition: 0.3s;
}

.viewall:hover{
	cursor: pointer;
	background: #7C83FD;
}

.inboxbox .emptylogo{
	display: none;
}

.inboxbox .message{
	display: flex;
	margin-bottom: 30px;
}

.inboxbox .message p{
	margin: 0;
	margin-top: 4px;
	font-weight: normal;
	font-size: 16px;
}

.inboxbox .message .leftside img{
	width: 50px;
	height: 50px;
	border-radius: 50%;	
	margin-right: 20px;
}

.inboxbox .inboxusername{
	text-decoration: underline;
}

.inboxbox .inboxtitle{
	font-weight: bold;
}

.moremessages{
	color: #7e7e7e;
	font-size: 14px;
	display: block;
	text-align: center;
}

.inboxbox.darkmode{
	background: #151516;
}

.sticky {
	position: fixed;
	top: 0;
	width: 100%; 
}

#profile:hover{
	cursor: pointer;
}
</style>
<body>
    @include('layouts/header')  
<div class="backbuttoncontainer"><button class="darkmodeflag texts button back" onclick="history.back()">Back</button></div>
<h1 class="darkmodeflag texts title">Edit Profile</h1>
<div class="header" style="background-image:url({{url('/img/bgregister.jpg')}})">
	<button class="darkmodeflag button banneredit" onclick=""><img src="{{url('img/slider.png')}}"><span>Edit banner</span></button>
</div>
<div class="content">
	<div class="left">
		<p class="darkmodeflag texts">Account Settings</p>
		<button id="settingsbutton1" class="darkmodeflag texts selected" onclick="openpage('settings1')">Profile Settings</button>
		<button id="settingsbutton2" class="darkmodeflag texts" onclick="openpage('settings2')">Account Links</button>
		<button id="settingsbutton3" class="darkmodeflag texts" onclick="openpage('settings3')">Achievements</button>
		<p class="darkmodeflag texts">Website Settings</p>
		<button id="settingsbutton4" id="settingsbutton1" class="darkmodeflag texts" onclick="openpage('settings4')">General Settings</button>
		<button id="settingsbutton5" class="darkmodeflag texts" onclick="openpage('settings5')">Notifications</button>
	</div>
	<div class="right">
		<div class="pfp">
			<div class="profileimage">
				<img class="pfpimage" src="{{url('img/profile.jpg')}}">
				<div class="dissapearing blacklayer"></div>
				<img class="dissapearing upload" src="{{url('img/upload.png')}}">
			</div>
			<span class="darkmodeflag texts">Change Profile</span>
			<button class="darkmodeflag texts savechanges">Save Changes</button>
		</div>
		<div id="data1" class="data data1">
			<p class="titlebig darkmodeflag texts">Username</p>
			<div class="inputcontainer">
				<input class="darkmodeflag" type="text" name="username" placeholder="Change your username" value="Lorem Ipsum" onkeyup="checkname(this.value)">
				<div class="darkmodeflag inputdeco">
					<span>Username available</span>
					<img id="nameicon" src="{{url('img/check.png')}}">
				</div>
			</div>
			<p class="titlebig darkmodeflag texts">Tag</p>
			<div class="inputcontainer">
				<input class="darkmodeflag" type="text" name="username" placeholder="Change your tag" value="Lorem Ipsum" onkeyup="checktag(this.value)" style="padding: 0 30px">
				<span class="darkmodeflag" id="floatingtag">@</span>
				<div class="darkmodeflag inputdeco">
					<span>Tag available</span>
					<img id="tagicon" src="{{url('img/check.png')}}">
				</div>
			</div>
			<p class="titlebig darkmodeflag texts">Working Status</p>
			<div class="radiocontainer">
				<input type="radio" name="workingstatus" value="looking"><span class="darkmodeflag texts marginright">Looking for a job</span>
				<input type="radio" name="workingstatus" value="notlooking"><span class="darkmodeflag texts">Employed</span>
			</div>
			<p class="titlebig darkmodeflag texts">Contact</p>
			<div class="inputcontainer last">
				<input class="darkmodeflag" id="marginright" type="text" name="username" placeholder="Edit your contact links" value="@Lorem Ipsum">
				<input class="darkmodeflag" id="openselect" type="text" value="Select a social media" readonly onclick="toggleoptions()">
				<img id="simplearrow" class="darkmodeflag blackimg simplearrow" src="{{url('img/simplearrow.png')}}" onclick="toggleoptions()">
				<div id="options" class="scrollcustom darkmodeflag options" style="white-space: nowrap" hidden>
					<p id="Instagram" class="darkmodeflag texts" onclick="changecontact(this.id)">via Instagram <img src="{{url('img/Instagramround.png')}}"></p>
					<p id="Twitter" class="darkmodeflag texts" onclick="changecontact(this.id)">via Twitter <img src="{{url('img/twitter.png')}}"></p>
					<p id="Facebook" class="darkmodeflag texts" onclick="changecontact(this.id)">via Facebook <img src="{{url('img/facebook.png')}}"></p>
					<p id="Whatsapp" class="optionlast darkmodeflag texts" onclick="changecontact(this.id)">via Whatsapp <img src="{{url('img/Whatsapp.png')}}"></p>
				</div>
			</div>
		</div>
		<div id="data2" class="data data2" hidden>
			<p class="titlebig darkmodeflag texts">Social Media Accounts</p>
			<div id="inputYoutube" class="inputcontainer">
				<input class="darkmodeflag" type="text" placeholder="Change your username" value="Lorem Ipsum">
				<div class="darkmodeflag inputdeco">
					<span>For Youtube</span>
					<img id="nameicon" src="{{url('img/youtube.png')}}">
				</div>
				<img class="darkmodeflag blackimg closecontainer" src="{{url('img/cancel.png')}}" onclick="hide(this)">
			</div>
			<div id="inputTiktok" class="inputcontainer">
				<input class="darkmodeflag" type="text" placeholder="Change your tag" value="Lorem Ipsum">
				<div class="darkmodeflag inputdeco">
					<span>For Tiktok</span>
					<img id="tagicon" src="{{url('img/tiktok.png')}}">
				</div>
				<img class="darkmodeflag blackimg closecontainer" src="{{url('img/cancel.png')}}" onclick="hide(this)">
			</div>
			<div id="inputPinterest" class="inputcontainer" hidden>
				<input class="darkmodeflag" type="text" placeholder="Change your tag" value="Lorem Ipsum">
				<div class="darkmodeflag inputdeco">
					<span>For Pinterest</span>
					<img id="tagicon" src="{{url('img/pinterest.png')}}">
				</div>
				<img class="darkmodeflag blackimg closecontainer" src="{{url('img/cancel.png')}}" onclick="hide(this)">
			</div>
			<div id="inputDeviantart" class="inputcontainer" hidden>
				<input class="darkmodeflag" type="text" placeholder="Change your tag" value="Lorem Ipsum">
				<div class="darkmodeflag inputdeco">
					<span>For Deviantart</span>
					<img id="tagicon" src="{{url('img/deviantart.png')}}">
				</div>
				<img class="darkmodeflag blackimg closecontainer" src="{{url('img/cancel.png')}}" onclick="hide(this)">
			</div>
			<div id="inputLine" class="inputcontainer" hidden>
				<input class="darkmodeflag" type="text" placeholder="Change your tag" value="Lorem Ipsum">
				<div class="darkmodeflag inputdeco">
					<span>For Line</span>
					<img id="tagicon" src="{{url('img/line.png')}}">
				</div>
				<img class="darkmodeflag blackimg closecontainer" src="{{url('img/cancel.png')}}" onclick="hide(this)">
			</div>
			<div id="inputDiscord" class="inputcontainer" hidden>
				<input class="darkmodeflag" type="text" placeholder="Change your tag" value="Lorem Ipsum">
				<div class="darkmodeflag inputdeco">
					<span>For Discord</span>
					<img id="tagicon" src="{{url('img/Discord.png')}}">
				</div>
				<img class="darkmodeflag blackimg closecontainer" src="{{url('img/cancel.png')}}" onclick="hide(this)">
			</div>
			<div class="inputcontainer last">
				<input class="darkmodeflag" id="openselect2" type="text" value="Select a social media" readonly onclick="toggleoptions2()">
				<img id="simplearrow2" class="darkmodeflag blackimg simplearrow2" src="{{url('img/simplearrow.png')}}" onclick="toggleoptions2()">
				<div id="options2" class="scrollcustom darkmodeflag options2" style="white-space: nowrap" hidden>
					<div class="leftoptions">
						<p class="greyed darkmodeflag texts" id="Youtube" onclick="show(this.id)">Youtube <img src="{{url('img/youtube.png')}}"></p>
						<p class="darkmodeflag texts" id="Pinterest" onclick="show(this.id)">Pinterest <img src="{{url('img/pinterest.png')}}"></p>
						<p class="darkmodeflag texts" id="Deviantart" onclick="show(this.id)">Deviantart <img src="{{url('img/deviantart.png')}}"></p>
					</div>
					<div class="rightoptions">
						<p class="greyed darkmodeflag texts" id="Tiktok" onclick="show(this.id)">Tiktok <img src="{{url('img/tiktok.png')}}"></p>
						<p class="darkmodeflag texts" id="Line" onclick="show(this.id)">Line <img src="{{url('img/line.png')}}"></p>
						<p class="darkmodeflag texts" id="Discord" onclick="show(this.id)">Discord <img src="{{url('img/discord.png')}}"></p>
					</div>
				</div>
			</div>
			<div id="warning" class="warning">
				<img src="{{url('img/chat.png')}}">
				<p class="darkmodeflag texts">You can add to a maximum of 3 social media accounts. Linking social media accounts is not mandatory as it is only used for easier self promotion.</p>
			</div>
		</div>
		<div id="data3" class="data data3" hidden>
			<p class="titlebig darkmodeflag texts">Social Media Accounts</p>
			<div class="inputcontainer achievement">
				<input class="darkmodeflag" type="text" value="2nd place at the 2020 Online Landscape Art Competition.">
				<div class="darkmodeflag inputdeco">
					<span class="showdetails" onclick="showdetails('achievement1', this)">Show Details</span>
				</div>
				<div class="darkmodeflag achievementdetails" id="achievement1" hidden>
					<p class="darkmodeflag texts">Title</p>
					<h2 class="darkmodeflag texts">2nd place at the 2020 Online Landscape Art Competition.<img src="check.png" title="Verified"></h2>
					<div>
						<div class="achievementdetailssection">
							<div class="leftsection">
								<p class="darkmodeflag texts">Completion Date</p>
								<h2 class="darkmodeflag texts">19/02/2021</h2>
							</div>
							<div class="rightsection">
								<p class="darkmodeflag texts">Verfied By</p>
								<h2 class="darkmodeflag texts" id="verifiedby" title="@ABCD, @ABCdddddddddddddddddddddddddddddD, @ABCD">@ABCD, @ABCdddddddddddddddddddddddddddddD, @ABCD</h2>
							</div>
						</div>
						<div class="deleteachievementcontainer">
							<button class="deleteachievement darkmodeflag texts">Delete Achievement</button>
						</div>
					</div>
				</div>
			</div>
			<div class="inputcontainer last">
				<input class="darkmodeflag" id="openselect3" type="text" value="Add Achievement" readonly onclick="toggleoptions3()">
				<img id="simplearrow3" class="darkmodeflag simplearrow3" src="{{url('img/plus.png')}}" onclick="toggleoptions3()">
				<div id="options3" class="darkmodeflag options3" style="white-space: nowrap" hidden>
					<p class="darkmodeflag texts">Title</p>
					<input class="darkmodeflag" type="text" name="achievementtitle" placeholder="Enter Achievement title">
					<p class="darkmodeflag texts">Completion Date</p>
					<input class="darkmodeflag" id="inputdate" type="date" name="achievementdate" placeholder="dd/mm/yyyy">
					<div class="addachievementcontainer">
						<button class="darkmodeflag texts addachievement">Add Achievement</button>
					</div>
				</div>
			</div>
			<div id="warning2" class="warning2">
				<img src="{{url('img/chat.png')}}">
				<p class="darkmodeflag texts">You can add to a maximum of 3 achievements. Posting achievements are not mandatory as it is only used for easier self promotion.</p>
			</div>
		</div>
		<div id="data4" class="data data4" hidden>
			<p class="titlebig darkmodeflag texts">Color Theme</p>
			<div class="radiocontainer">
				<input type="radio" name="theme" value="light" checked onclick="changelayout('light')"><span class="darkmodeflag texts marginright">Light Theme</span>
				<input type="radio" name="theme" value="dark" onclick="changelayout('dark')"><span class="darkmodeflag texts">Dark Theme</span>
			</div>
			<p class="titlebig darkmodeflag texts">Home Layout</p>
			<div class="radiocontainer layouting">
				<div><input type="radio" name="layout" value="1l2p" checked onclick="changelayout('1l2p')"><span class="darkmodeflag texts marginright">1 Landscape | 2 Portrait</span></div>
				<div><input type="radio" name="layout" value="1l3p" onclick="changelayout('1l3p')"><span class="darkmodeflag texts marginright">1 Landscape | 3 Portrait</span></div>
				<div><input type="radio" name="layout" value="1l4p" onclick="changelayout('1l4p')"><span class="darkmodeflag texts">1 Landscape | 4 Portrait</span></div>
			</div>
			<p class="titlebig darkmodeflag texts">Page Preview</p>
			<div class="layoutpreview">
				<img id="layoutpreview" src="{{url('img/light12.png')}}">
			</div>
		</div>
		<div id="data5" class="data data5" hidden>
			<p class="darkmodeflag texts">Like Notifications</p>
			<p class="darkmodeflag texts">Comment Notifications</p>
			<p class="darkmodeflag texts">Inbox Notifications</p>
			<p class="darkmodeflag texts">Verification Notifications</p>
			<label class="switch switch1">
				<input type="checkbox">
				<span class="slider round"></span>
			</label>
			<label class="switch switch2">
				<input type="checkbox">
				<span class="slider round"></span>
			</label>
			<label class="switch switch3">
				<input type="checkbox">
				<span class="slider round"></span>
			</label>
			<label class="switch switch4">
				<input type="checkbox">
				<span class="slider round"></span>
			</label>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
function toggledarkmode(){
	var divs = document.querySelectorAll('.darkmodeflag');
	for (var i = 0; i < divs.length; i++) {
	    divs[i].classList.toggle('darkmode');
	}
	document.body.classList.toggle('darkmode');
}

function openpage(name){
	var data1 = document.getElementById('data1');
	var data2 = document.getElementById('data2');
	var data3 = document.getElementById('data3');
	var data4 = document.getElementById('data4');
	var data5 = document.getElementById('data5');
	var button1 = document.getElementById('settingsbutton1');
	var button2 = document.getElementById('settingsbutton2');
	var button3 = document.getElementById('settingsbutton3');
	var button4 = document.getElementById('settingsbutton4');
	var button5 = document.getElementById('settingsbutton5');
	if(name == "settings1"){
		data1.hidden = false;
		data2.hidden = true;
		data3.hidden = true;
		data4.hidden = true;
		data5.hidden = true;
		button1.classList.add('selected');
		button2.classList.remove('selected');
		button3.classList.remove('selected');
		button4.classList.remove('selected');
		button5.classList.remove('selected');
	}
	if(name == "settings2"){
		data1.hidden = true;
		data2.hidden = false;
		data3.hidden = true;
		data4.hidden = true;
		data5.hidden = true;
		button1.classList.remove('selected');
		button2.classList.add('selected');
		button3.classList.remove('selected');
		button4.classList.remove('selected');
		button5.classList.remove('selected');
	}
	if(name == "settings3"){
		data1.hidden = true;
		data2.hidden = true;
		data3.hidden = false;
		data4.hidden = true;
		data5.hidden = true;
		button1.classList.remove('selected');
		button2.classList.remove('selected');
		button3.classList.add('selected');
		button4.classList.remove('selected');
		button5.classList.remove('selected');
	}
	if(name == "settings4"){
		data1.hidden = true;
		data2.hidden = true;
		data3.hidden = true;
		data4.hidden = false;
		data5.hidden = true;
		button1.classList.remove('selected');
		button2.classList.remove('selected');
		button3.classList.remove('selected');
		button4.classList.add('selected');
		button5.classList.remove('selected');
	}
	if(name == "settings5"){
		data1.hidden = true;
		data2.hidden = true;
		data3.hidden = true;
		data4.hidden = true;
		data5.hidden = false;
		button1.classList.remove('selected');
		button2.classList.remove('selected');
		button3.classList.remove('selected');
		button4.classList.remove('selected');
		button5.classList.add('selected');
	}
}

function hide(childelement){
	childelement.parentNode.hidden = true;
	var idelement = childelement.parentNode.id.replace('input','');
	document.getElementById(idelement).classList.remove('greyed');
}

function changecontact(id){
	var inputtext = document.getElementById('openselect');
	var options = document.getElementById('options');
	var simplearrow = document.getElementById('simplearrow');
	inputtext.value = "via " + id;
	options.hidden = true;
	simplearrow.style.transform = "rotate(90deg)";
}

function toggleoptions(){
	var options = document.getElementById('options');
	var simplearrow = document.getElementById('simplearrow');
	if(options.hidden == false){
		options.hidden = true;
		simplearrow.style.transform = "rotate(90deg)";
	}else{
		options.hidden = false;
		simplearrow.style.transform = "rotate(180deg)";
	}
}

function toggleoptions2(){
	var options = document.getElementById('options2');
	var simplearrow = document.getElementById('simplearrow2');
	var warning = document.getElementById('warning');
	if(options.hidden == false){
		options.hidden = true;
		simplearrow.style.transform = "rotate(90deg)";
		warning.style.marginTop = "0";
	}else{
		options.hidden = false;
		simplearrow.style.transform = "rotate(180deg)";
		warning.style.marginTop = "160px";
	}
}

function toggleoptions3(){
	var options = document.getElementById('options3');
	var simplearrow = document.getElementById('simplearrow3');
	var warning = document.getElementById('warning2');
	if(options.hidden == false){
		options.hidden = true;
		simplearrow.style.transform = "rotate(0)";
		warning.style.marginTop = "0";
	}else{
		options.hidden = false;
		simplearrow.style.transform = "rotate(45deg)";
		warning.style.marginTop = "320px";
	}
}

function checkname(name){
	var nameicon = document.getElementById('nameicon');
	if(name == "armitage"){
		nameicon.src = "close.png";
	}else{
		nameicon.src = "check.png";
	}
}

function checktag(tag){
	var tagicon = document.getElementById('tagicon');
	if(tag == "armitage"){
		tagicon.src = "close.png";
	}else{
		tagicon.src = "check.png";
	}
}

function show(id){
	var element = document.getElementById('input'+id);
	var element2 = document.getElementById(id);
	var arr = document.getElementsByClassName("greyed")
	if(arr.length <= 2){
		element.hidden = false;
		element2.classList.add('greyed');
	}else{
		timemessage();
	}
}

function timemessage(){
	var selectelement = document.getElementById('openselect2');
	selectelement.value = "Cannot put more than 3 social media links at once.";
	setTimeout(function(){ selectelement.value = "Select a social media" }, 3000);
}

function showdetails(id, element){
	var details = document.getElementById(id);
	var detailstext = element;
	details.hidden = !(details.hidden)
	if(detailstext.innerHTML == "Show Details"){
		detailstext.innerHTML = "Hide Details";
		element.parentNode.parentNode.classList.add('opened');
	}else{
		detailstext.innerHTML = "Show Details";
		element.parentNode.parentNode.classList.remove('opened');
	}
}

var theme = "light"
var layout = "12";
var imgname = "light12";
function changelayout(value){
	var image = document.getElementById('layoutpreview');
	if(value == "light"){
		theme = "light";
	}
	if(value == "dark"){
		theme = "dark";
	}
	if(value == "1l2p"){
		layout = "12";
	}
	if(value == "1l3p"){
		layout = "13";
	}
	if(value == "1l4p"){
		layout = "14";
	}
	imgname = theme+layout+".png";
	image.src = imgname;
}

function openNav() {
	document.getElementById("sidebarcontent").style.transition = "1s ease-in";
	document.getElementById("mySidebar").style.width = "400px";
	document.getElementById("sidebarblack").style.display = "block";
	document.getElementById("sidebarcontent").style.opacity = "1";
}

function closeNav() {
	document.getElementById("sidebarcontent").style.transition = "0.15s";
	document.getElementById("mySidebar").style.width = "0";
	document.getElementById("sidebarblack").style.display = "none";
	document.getElementById("sidebarcontent").style.opacity = "0";
}

function toggleuploads(){
	if(document.getElementById('downarrow').style.transform != "rotate(180deg)"){
		document.getElementById('downarrow').style.transform = "rotate(180deg)";
		document.getElementById('downarrowpopup').style.display = "block";
	}else{
		document.getElementById('downarrow').style.transform = "rotate(0)";
		document.getElementById('downarrowpopup').style.display = "none";
	}
}

function toggleinbox(){
	if(document.getElementById('inboxbox').style.display == "block"){
		document.getElementById('inboxbox').style.display = "none";
	}else{
		document.getElementById('inboxbox').style.display = "block";
	}
}

window.onscroll = function() {myFunction()};
var header = document.getElementById("headerreal");
var sidebarblack = document.getElementById("sidebarblack");
var sticky = header.offsetTop;
function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
		sidebarblack.classList.add("sticky");
	} else {
		header.classList.remove("sticky");
		sidebarblack.classList.remove("sticky");
	}
}
</script>
</html>