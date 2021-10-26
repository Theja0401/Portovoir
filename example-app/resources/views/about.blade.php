<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
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
	margin: 0;
	background: #e1e1e5;
}

body.darkmode{
	background: #151516;
}

.header.real.darkmode{
	background: #1c1d1e;
}

::-webkit-scrollbar {
	width: 5px;
}

::-webkit-scrollbar-track {
	box-shadow: inset 0 0 50px #BFC5D6; 
	border-radius: 10px;
}
 
::-webkit-scrollbar-thumb {
	background: #7C83FD; 
	border-radius: 10px;
	}

::-webkit-scrollbar-thumb:hover {
	background: #4a53fc; 
}

.header{
	background: #BFC5D6;
	width: 100%;
	height: 90px;
	padding: 20px 30px;
	display: flex;
	align-items: center;
	justify-content: center;
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
	display: flex;
}

.headerbuttons.logged{
	display: flex;
}

.header .register:hover{
	background: none;
	cursor: pointer;
}

.header .login:hover, .header .logout:hover{
	background: #7C83FD;
	cursor: pointer;
}

input.darkmode, .darkmode.texts{
	color: white;
}

.header.darkmode{
	background: #1c1d1e;
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

.body{
	background: #e5e5e5;
	width: 100%;
	height: auto;
	padding: 50px 120px;
}

.definition{
	display: flex;
	margin-bottom: 100px;
}

.definition .leftside{
	flex: 7;
}

.definition .rightside{
	flex: 4;
	text-align: right;
}

.definition .leftside h2, .definition .leftside span{
	font-size: 30px;
}

.definition .leftside p{
	font-size: 18px;
}

.definition .rightside img{
	width: 340px;
	height: 280px;
}

.offers h2{
	margin: 0 auto 40px auto;
	font-size: 30px;
	text-align: center;
}

.offerscontainer{
	display: flex;
}

.offer{
	flex: 1;
	display: block;
	padding: 0 20px;
	text-align: center;
	margin-bottom: 100px;
}

.offer1 img{
	width: 240px;
	height: 160px;
}

.offer2 img{
	width: 180px;
	height: 160px;
}

.offer3 img{
	width: 220px;
	height: 180px;
}

.offer img{
	display: block;
	margin: auto;
}

.testimonials{
	margin-bottom: 100px;
}

.testimonials h2{
	margin: 0 auto 40px auto;
	font-size: 30px;
	text-align: center;
}

.testimonial{
	width: 100%;
	height: 300px;
	background: #BFC5D6;
	border-radius: 10px;
	display: flex;
	margin-bottom: 60px;
}

.showimage img{
	width: 500px;
	height: 100%;
	margin: 0 0 0 -100px;
}

.showimage{
	height: 100%;
	overflow: hidden;
	flex: 3;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
}

.testimonialcontent{
	padding: 0 20px;
	flex: 7;
	position: relative;
}

.testimonial .testimonialcontent h3{
	font-size: 24px;
}

.testimonial .testimonialtext{
	font-size: 18px;
}

.testimonialdetails{
	position: absolute;
	bottom: 10px;
	left: 20px;
}

.testimonialdetails p{
	font-size: 14px;
}

.showmore{
	width: 200px;
	height: 40px;
	border: 1px solid #7C83FD;
	background: none;
	border-radius: 10px;
	font-weight: bold;
	font-size: 16px;
	display: block;
	margin: auto;
}

.showmore:hover{
	cursor: pointer;
}

.developers{
	margin-bottom: 100px;
}

.developers h2{
	text-align: center;
	margin-bottom: 40px;
}

.developerscontainer{
	display: flex;
	margin-bottom: 60px;
}

.developer{
	flex: 1;
}

.developer.marginright{
	margin-right: 160px;
}

.developer img{
	width: 100%;
	height: 200px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
}

.developerdetails{
	background: #BFC5D6;
	margin-top: -5px;
	padding: 20px;
	border-bottom-left-radius: 10px;
	border-bottom-right-radius: 10px;
}

.developername, .developerrole{
	margin: 0;
	text-align: center;
}

.developername{
	margin: 0 0 20px 0;
}

.developerrole{
	font-weight: bold;
}

.form{
	display: flex;
}

.form .leftside{
	flex: 1;
	margin-right: 60px;
}

.form .rightside{
	flex: 1;
}

.feedbackdesc{
	margin: 50px 0;
}

.feedback h2{
	text-align: center;
}

.feedback input{
	border: 2px solid #7C83FD;
	border-radius: 5px;
	width: 100%;
	background: none;
	height: 40px;
	font-size: 14px;
	padding: 0 10px;
	margin-bottom: 20px;
}

.warning{
	display: flex;
}

.warning p{
	margin: 0;
	color: #7e7e7e;
}

.warning img{
	width: 40px;
	height: 40px;
	margin-right: 10px;
}

textarea{
	width: 100%;
	height: 300px;
	background: none;
	border-radius: 10px;
	border: 2px solid #7C83FD;
	resize: none;
	padding: 10px;
}

textarea:focus{
	outline: none;
}

.charlimit{
	font-size: 12px;
	position: absolute;
	bottom: 10px;
	left: 10px;
	color: grey;
}

.textarea{
	position: relative;
}

.feedback .submit{
	background: #7C83FD;
	font-weight: bold;
	width: 100%;
	height: 40px;
	border-radius: 10px;
	font-size: 16px;
	margin-top: 20px;
	border: none;
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
	<div class="body darkmodeflag">
		<div class="section definition">
			<div class="leftside">
				<h2 class="darkmodeflag texts">What is Portovoir?</h2>
				<p class="darkmodeflag texts"><span>P</span>ortovoir is a website build for storing collection of portofolios and projects from different users from anywhere, allowing people to search for potential employees or search for inspiration and ideas easier by storing collection of people’s works in one website</p>
			</div>
			<div class="rightside">
				<img src="{{url('img/Logos.png')}}">
			</div>
		</div>
		<div class="section offers">
			<h2 class="darkmodeflag texts">What Portovoir Offers</h2>
			<div class="offerscontainer">
				<div class="offer offer1">
					<img src="{{url('img/Logos2.png')}}">
					<p class="darkmodeflag texts">Project organization to track your work progress</p>
				</div>
				<div class="offer offer2">
					<img src="{{url('img/Logos3.png')}}">
					<p class="darkmodeflag texts">Free service and access to total all features</p>
				</div>
				<div class="offer offer3">
					<img src="{{url('img/Logos4.png')}}">
					<p class="darkmodeflag texts">Easy communication using our own built mailing system</p>
				</div>
			</div>
		</div>
		<div class="section testimonials">
			<h2 class="darkmodeflag texts">Testimonials From Our Clients</h2>
			<div class="testimonial">
				<div class="showimage">
					<img src="{{url('img/testimonials.jpg')}}">
				</div>
				<div class="testimonialcontent darkmodeflag">
					<h3 class="darkmodeflag texts">"The first of it’s kind website with perfect additional features"</h3>
					<p class="testimonialtext darkmodeflag texts">Perfect additional features included inside the app that help the users to use the website to the maximum potential</p>
					<div class="testimonialdetails">
						<p class="darkmodeflag texts">Katheryne</p>
						<p class="darkmodeflag texts">Professional web reviewer</p>
					</div>
				</div>
			</div>
			<div class="testimonial">
				<div class="showimage">
					<img src="{{url('img/testimonials2.jpg')}}">
				</div>
				<div class="testimonialcontent darkmodeflag">
					<h3 class="darkmodeflag texts">"The first of it’s kind website with perfect additional features"</h3>
					<p class="testimonialtext darkmodeflag texts">Perfect additional features included inside the app that help the users to use the website to the maximum potential</p>
					<div class="testimonialdetails">
						<p class="darkmodeflag texts">Katheryne</p>
						<p class="darkmodeflag texts">Professional web reviewer</p>
					</div>
				</div>
			</div>
			<div class="testimonial">
				<div class="showimage">
					<img src="{{url('img/testimonials3.jpg')}}" style="height: 700px; margin-top: -200px">
				</div>
				<div class="testimonialcontent darkmodeflag">
					<h3 class="darkmodeflag texts">"The first of it’s kind website with perfect additional features"</h3>
					<p class="testimonialtext darkmodeflag texts">Perfect additional features included inside the app that help the users to use the website to the maximum potential</p>
					<div class="testimonialdetails">
						<p class="darkmodeflag texts">Katheryne</p>
						<p class="darkmodeflag texts">Professional web reviewer</p>
					</div>
				</div>
			</div>
			<button class="showmore darkmodeflag texts">Show More</button>
		</div>
		<div class="section developers">
			<h2 class="darkmodeflag texts">Meet Our Developers</h2>
			<div class="developerscontainer">
				<div class="developer marginright developer1">
					<img src="{{url('img/dev.jpg')}}">
					<div class="developerdetails darkmodeflag">
						<p class="developername darkmodeflag texts">Robot</p>
						<p class="developerrole darkmodeflag texts">Founder</p>
					</div>
				</div>
				<div class="developer marginright developer1">
					<img src="{{url('img/dev.jpg')}}">
					<div class="developerdetails darkmodeflag">
						<p class="developername darkmodeflag texts">Robot</p>
						<p class="developerrole darkmodeflag texts">Founder</p>
					</div>
				</div>
				<div class="developer developer1">
					<img src="{{url('img/dev.jpg')}}">
					<div class="developerdetails darkmodeflag">
						<p class="developername darkmodeflag texts">Robot</p>
						<p class="developerrole darkmodeflag texts">Founder</p>
					</div>
				</div>
			</div>
			<button class="showmore darkmodeflag texts">Show More</button>
		</div>
		<div class="section feedback">
			<h2 class="darkmodeflag texts">Feedbacks are always welcome</h2>
			<p class="feedbackdesc darkmodeflag texts">Help us make Portovoir a better website by giving a feedback to the development team</p>
			<div class="form">
				<div class="leftside">
					<p class="darkmodeflag texts">Personal Info</p>
					<input class="darkmodeflag texts" type="text" name="username" placeholder="Username">
					<input class="darkmodeflag texts" type="email" name="email" placeholder="E-mail">
					<div class="warning">
						<img src="{{url('img/chat.png')}}">
						<p>Providing your e-mail address enables us to contact you for more information regarding your feedback (if necessary). We will keep your e-mail address confidential for your privacy.</p>
					</div>
				</div>
				<div class="rightside">
					<p class="darkmodeflag texts">Feedback Content</p>
					<div class="textarea">
						<textarea id="replyarea" class="replyarea darkmodeflag texts" placeholder="Enter your reply" maxlength="500" onkeydown="countchar()" onchange="countchar()" onkeyup="countchar()"></textarea>
						<span id="charlimit" class="charlimit">0/500</span>
					</div>
					<button class="submit darkmodeflag texts">Submit Feedback</button>
				</div>
			</div>
		</div>
	</div>
	@include('layouts/footer')
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

function countchar(){
	var input = document.getElementById('replyarea');
	var length = input.value.length;
	var charcount = document.getElementById('charlimit');
	charcount.innerHTML = length+"/500";
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

function toggleuploads(){
	if(document.getElementById('downarrow').style.transform != "rotate(180deg)"){
		document.getElementById('downarrow').style.transform = "rotate(180deg)";
		document.getElementById('downarrowpopup').style.display = "block";
	}else{
		document.getElementById('downarrow').style.transform = "rotate(0)";
		document.getElementById('downarrowpopup').style.display = "none";
	}
}

</script>
</html>