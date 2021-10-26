<!DOCTYPE html>
<html>
<head>
	<title>Category</title>
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

body{
	margin: 0;
	overflow-y: scroll;
	background: #E1E1E5;
}

body.darkmode{
	background: #151516;
}

.header.real.darkmode{
	background: #1c1d1e;
}

.header.fake{
	padding: 0 40px;
	display: inline;
}

.header.fake h1{
	display: block;
	text-align: center;
	width: 70%;
	margin: 0 auto;
}

.header.fake img{
	width: 50px;
	height: 50px;
	vertical-align: middle;
	margin-top: 12px;
}

.header.fake .reload{
	transform: rotate(-50deg);
	float: left;
	margin-left: 40px;
}

.header.fake .profile{
	border-radius: 100%;
	float: right;
	margin-right: 40px;
}

.genres{
	margin-bottom: 60px;
}

.genres img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
}

#mirror{
	transform: scaleX(-1);
}

.genres span{
	border: 2px solid #7C83FD;
	border-radius: 5px;
	padding: 6px;
	font-weight: bold;
	margin: 0 20px 20px 0;
	display: inline-block;
}

.postsrow{
	width: 100%;
	height: auto;
	display: flex;
	flex-wrap: nowrap;
	margin-bottom: 30px;
}

.posts{
	margin-bottom: 30px;
}

.post{
	height: 100%;
	position: relative;
}

.marginright{
	margin-right: 20px;
}

.post img{
	border-radius: 10px;
	max-width: 100%;
}

.lspr img, .nmpr img{
	height: 500px;
}

.nmls img{
	height: 340px;
}

.lsls img{
	height: 240px;
}

.prpr img{
	height: 400px;
}

.nmnm img{
	height: 400px;
}

.postdetails{
	background-color: rgba(0,0,0,0.7);
	position: absolute;
	color: white;
	width: 100%;
	font-size: 22px;
	padding: 10px 20px;
	border-radius: 0 0 10px 10px;
	bottom: 5px;
}

.postdetails img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
	margin-right: 10px;
}

.postname{
	float: left;
}

.pr .postname{
	white-space: nowrap; 
	text-overflow: ellipsis;
	overflow: hidden;
}

.prpr .pr .postname{
	width: 160px;
}

.lspr .pr .postname{
	width: 240px;
}

.nmpr .pr .postname{
	width: 220px;
}

.floatright{
	float: right;
	font-size: 14px;
	line-height: 30px;
}

.firedisplay{
	width: 160px;
	height: 50px;
	position: absolute;
	top: 0;
	right: 0;
	background: rgba(0,0,0,0.7);
	border-top-right-radius: 10px;
	text-align: center;
}

.firedisplay img{
	width: 30px;
	height: 30px;
	position: absolute;
	right: 16px;
	top: 10px;
}

.firedisplay p{
	line-height: 50px;
	height: 50px;
	font-size: 20px;
	width: 100px;
	color: white;
	margin: 0;
	margin-left: 8px;
}

.texts.darkmode{
	color: white;
}

.blackimg.darkmode{
	filter: invert(1);
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

.scrollcustom::-webkit-scrollbar {
	height: 5px;
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

.getstarted{
	width: 100%;
	padding: 30px 120px;
	background: #7C83FD;
}

.getstarted .container{
	display: flex;
	align-items: center;
}

.getstarted .title{
	font-size: 28px;
	font-weight: bold;
}

.getstarted .leftside{
	flex: 3;
}

.footerfull .leftside img{
	margin-top: 20px;
	width: 225px;
	height: 75px;
}

.getstarted .rightside{
	flex: 1;
}

.getstarted .rightside button{
	background: white;
	color: #7C83FD;
	width: 100%;
	height: 40px;
	border: none;
	border-radius: 5px;
	font-weight: bold;
	font-size: 16px;
}

.footerfull{
	width: 100%;
	padding: 50px;
	display: flex;
	background: #BFC5D6;
}

.footerfull .leftside{
	flex: 3;
}

.footerfull .middle, .footerfull .rightside{
	flex: 2;
}

.footeraddress{
	font-weight: bold;
	margin: 4px 0;
}

.footerfull .middle .logolinks{
	margin: 0;
	margin-bottom: 16px;
}

.footerfull .middle p img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
	position: relative;
	margin-right: 8px;
	top: -2px;
}

.footerfull .rightside input{
	width: 100%;
	height: 40px;
	background: none;
	border: 2px solid #7C83FD;
	border-radius: 10px;
	padding: 10px;
	font-size: 14px;
}

.footerfull .rightside .desc{
	color: #7e7e7e;
	font-size: 14px;
}

.footerfull .rightside button{
	background: #7C83FD;
	border: none;
	width: 100%;
	height: 40px;
	font-weight: bold;
	font-size: 16px;
	border-radius: 10px;
}

.footerfull .rightside input:focus{
	outline: none;
}

.body.darkmode{
	background: #151516;
}

.footerfull.darkmode, .developerdetails.darkmode, .testimonialcontent.darkmode{
	background: #1c1d1e;
}

.footerfull a{
	color: #7C83FD;
}

.footer .rightside button:hover{
	cursor: pointer;
}

#profile:hover{
	cursor: pointer;
}
</style>	
<body>
    @include('layouts/header')  
<div class="header fake">
	<h1 class="darkmodeflag texts">Posting Categories</h1>
</div>
<div class="body" style="padding: 0 40px;">
	<p class="darkmodeflag texts" style="margin-bottom: 16px; font-size: 22px">Categories you follow :</p>
	<div class="genres" style="position: relative;">
		<div class="scrollcustom" style="overflow: auto; white-space: nowrap">
			<span class="darkmodeflag texts">Photography <img src="{{url('img/crown.png')}}"></span>
			<span class="darkmodeflag texts">Digital Art</span>
			<span class="darkmodeflag texts">Landscape Artist</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
			<span class="darkmodeflag texts">Illustrator</span>
		</div>
	</div>
	<p class="darkmodeflag texts" style="font-size: 22px;">Explore categories :</p>
	<div class="posts">
		<div class="postsrow nmnm">
			<div class="post nm marginright">
				<img src="{{url('img/post3.jpg')}}">
				<div class="postdetails">
					<span class="postname">Futuristic Bridge</span>
					<span class="floatright">111k posts</span>
				</div>
			</div>
			<div class="post nm">
				<img src="{{url('img/post2.jpg')}}">
				<div class="postdetails">
					<span class="postname">Game Art</span>
					<span class="floatright">111k posts</span>
				</div>
			</div>
		</div>
		<div class="postsrow nmpr">
			<div class="post ls marginright">
				<img src="{{url('img/post5.jpg')}}">
				<div class="postdetails">
					<span class="postname">Medieval Landscape</span>
					<span class="floatright">111k posts</span>
				</div>
			</div>
			<div class="post pr">
				<img src="{{url('img/post1.jpeg')}}">
				<div class="postdetails">
					<span class="postname">Colorful Keyboard</span>
					<span class="floatright">111k posts</span>
				</div>
			</div>
		</div>
		<div class="postsrow large">
			<div class="post fire">
				<img src="{{url('img/post4.jpg')}}">
				<div class="firedisplay">
					<p class="trending">Trending</p>
					<img src="fire.png">
				</div>
				<div class="postdetails">
					<span class="postname">Dystopia</span>
					<span class="floatright">111k posts</span>
				</div>
			</div>
		</div>
		<div class="postsrow nmnm">
			<div class="post nm marginright">
				<img src="{{url('img/post3.jpg')}}">
				<div class="postdetails">
					<span class="postname">Futuristic Bridge</span>
					<span class="floatright">111k posts</span>
				</div>
			</div>
			<div class="post nm">
				<img src="{{url('img/post2.jpg')}}">
				<div class="postdetails">
					<span class="postname">Game Art</span>
					<span class="floatright">111k posts</span>
				</div>
			</div>
		</div>
	</div>
</div>
	<div class="footer">
		<div class="section getstarted">
			<div class="container">
				<div class="leftside">
					<p class="title darkmodeflag texts">Join Portovoir Now For Free!</p>
					<p class="darkmodeflag texts">Start making your own digital portofolio now with Portovoir</p>
				</div>
				<div class="rightside">
					<button onclick="location.href = 'register.php'">Get Started</button>
				</div>
			</div>
		</div>
		<div class="section footerfull darkmodeflag">
			<div class="leftside">
				<p class="darkmodeflag texts">Portovoir Development Base Address</p>
				<p class="darkmodeflag texts footeraddress">Old Quadrant</p>
				<p class="darkmodeflag texts footeraddress">Lyon Elms</p>
				<p class="darkmodeflag texts footeraddress">8800 Tunstall</p>
				<p class="darkmodeflag texts footeraddress">England</p>
				<img src="{{url('img/portovoirfull.png')}}">
			</div>
			<div class="middle">
				<p class="darkmodeflag texts">Know more by visiting us at</p>
				<p class="logolinks"><img src="{{url('img/instagram.png')}}"><a href="">@Portovoir.official</a></p>
				<p class="logolinks"><img src="{{url('img/facebook.png')}}"><a href="">@Portovoir.official</a></p>
				<p class="logolinks"><img src="{{url('img/twitter.png')}}"><a href="">@Portovoir.official</a></p>
				<p class="logolinks"><img src="{{url('img/youtube.png')}}"><a href="">@Portovoir.official</a></p>
			</div>
			<div class="rightside">
				<p class="darkmodeflag texts">Newsletter</p>
				<input class="darkmodeflag texts" type="email" name="email" placeholder="Your Email">
				<p class="desc">By providing your email address in this section you agree to receive newsletter related with Portovoir updates</p>
				<button class="darkmodeflag texts">Submit</button>
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
</body>
</html>