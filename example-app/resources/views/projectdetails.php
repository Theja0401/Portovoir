<!DOCTYPE html>
<html>
<head>
	<title>Design Project</title>
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
	overflow-x: hidden;
}

body.darkmode, .body.darkmode{
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
	display: none;
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
	font-color: white;
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

.body .slideshow .slideshowimg{
	width: 80%;
	height: 100%;
	margin: 0 auto;
	margin-top: 100px;
	overflow: hidden;
}

.body .slideshow .slideshowimg img{
	height: 100%;
	display: block;
	margin: 0 auto;
}

.body .slideshow .imgs{
	display: flex;
	width: 4500px;
	transition: 0.5s;
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

.slideshow{
	position: relative;
	margin-bottom: 20px;
}

.previmg{
	position: absolute;
	left: 10%;
	top: 50%;
	transform: translateY(-50%);
	background: rgba(0,0,0,0.4);
	padding: 10px;
	transition: 0.3s;
	opacity: 0;
}

.previmg img{
	transform: rotate(90deg);
	width: 40px;
	height: 40px;
	vertical-align: middle;
}

.nextimg{
	position: absolute;
	right: 10%;
	top: 50%;
	transform: translateY(-50%);
	background: rgba(0,0,0,0.4);
	padding: 10px;
	transition: 0.3s;
	opacity: 0;
}

.nextimg img{
	transform: rotate(270deg);
	width: 40px;
	height: 40px;
	vertical-align: middle;
}

.nextimg:hover, .previmg:hover{
	background: rgba(124, 131, 253, 0.5);
	cursor: pointer;
}

.imgnumber{
	display: flex;
	justify-content: center;
}

.imgnumber .number{
	margin-top: 20px;
	width: 30px;
	height: 10px;
	border-radius: 5px;
	background: white;
}

.imgnumber .number.marginright{
	margin-right: 20px;
}

.imgnumber .number.selected{
	background: #7C83FD;
}

.switch {
	position: absolute;
	right: 10%;
	bottom: -12px;
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

.autotext{
	position: absolute;
	right: 40px;
	bottom: -6px;
	width: 100px;
	font-size: 14px;
}

.toppart{
	display: flex;
}

.toppart .leftside{
	flex: 3;
}

.toppart .rightside{
	flex: 1;
	text-align: right;
}

.toppart .title{
	font-size: 24px;
	margin-bottom: 30px;
	font-weight: bold;
}

.toppart .genre{
	border: 2px solid #7C83FD;
	font-weight: bold;
	font-size: 16px;
	border-radius: 5px;
	padding: 8px;
	width: auto;
	margin-right: 10px;
}

.toppart .author img{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	vertical-align: middle;
}

a{
	color: #7C83FD;
}

.toppart .author span{
	margin-right: 10px;
}

.toppart .rightside .likes img{
	width: 30px;
	height: 30px;
}

.toppart .likes{
	display: flex;
	justify-content: flex-end;
}

.toppart .likes .likebutton{
	background: #aa332a;
	padding: 10px;
	border-radius: 5px;
	width: 100px;
	height: 40px;
	text-align: center;
}

.toppart .likes .likebutton img{
	vertical-align: middle;
	position: relative;
	top: -6px;
}

.toppart .likes .likebutton span{
	position: relative;
	top: -4px;
	margin-right: 8px;
}

.toppart .likes .liketext{
	position: relative;
	bottom: -8px;
	margin-right: 10px;
}

.details .desctitle{
	font-size: 18px;
}

.bottompart .projectstatus{
	font-weight: bold;
	font-size: 20px;
	margin-left: 10px;
}

.completed{
	color: #0DC142;
}

.ongoing{
	color: #ff9900;
}

.onhold{
	color: #ff0000;
}

.projectstatusdesc{
	margin-bottom: 40px;
}

.bottompart .projectdescription{
	color: #7e7e7e;
	margin-bottom: 40px;
}

.update{
	border-bottom: 2px solid #7C83FD;
	position: relative;
}

.update .updatetitle{
	display: flex;
	font-weight: bold;
	align-items: center;
}

.update .updatetitle img{
	width: 40px;
	height: 40px;
	margin-right: 10px;
}

.update .updatetitle p{
	font-size: 20px;
}

.update .updatedate{
	font-weight: bold;
}

.update .moredetails{
	position: absolute;
	bottom: 0;
	right: 0;
	color: #7e7e7e;
	text-decoration: underline;
}

.update .moredetails:hover{
	cursor: pointer;
}

.updatecontent{
	display: none;
}

.updatecontent img{
	width: 100%;
	height: auto;
}

.slideshowimg:hover ~ .nextimg, .slideshowimg:hover ~ .previmg, .nextimg:hover, .previmg:hover{
	opacity: 1;
}

.addcomment{
	margin: 10px 0;
	display: flex;
	align-items: center;
	position: relative;
}

.addcomment img{
	width: 20px;
	height: 20px;
}

.addcomment .profile{
	border-radius: 50%;
	width: 30px;
	height: 30px;
	margin-right: 10px;
}

.addcomment input{
	flex: 8;
	background: none;
	border: none;
	border-bottom: 1px solid #7C83FD;
	padding: 10px 20px 10px 0;
	font-size: 16px;
}

.addcomment .sendimg{
	position: absolute;
	right: 10px;
	bottom: 10px;
}

.bottom{
	display: flex;
}

.comments, .otherprojects{
	flex: 1;
	height: 300px;
	overflow-y: scroll;
}

.comments{
	margin-right: 15px;
	padding-right: 15px;
}

.otherprojects{
	margin-left: 15px;
	padding-left: 15px;
	direction: rtl;
}

.flipcontainer{
	direction: ltr;
}

.border{
	border-right: 2px solid #7C83FD;
}

.comment img{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	margin: 10px 10px 0 0;
}

.comment .username{
	color: #7e7e7e;
	font-size: 14px;
}

.comment{
	display: flex;
	border-bottom: 1px solid #7C83FD;
	padding: 10px 0;
}

.commentdetails{
	margin-top: 10px;
}

.commentdetails .commentcontent{
	width: 100%;
	word-break: break-all;
	margin: 4px 0;
}

.titles{
	display: flex;
	margin-top: 60px;
}

.titles h2{
	flex: 1;
}

.titles .projectcomments{
	margin-right: 30px;
}

.titles .otherprojectslikethis{
	margin-left: 30px;
}

.otherproject{
	display: flex;
	margin-bottom: 40px;
}

.otherproject .leftside, .otherproject .rightside{
	flex: 1;
}

.otherproject .leftside .projectimage, .otherproject .leftside .projectgenres{
	flex: 1;
}

.otherproject .leftside{
	margin-right: 10px;
}

.otherproject .rightside{
	margin-left: 10px;
	position: relative;
}

.otherproject .leftside .projectimage img{
	width: 100%;
	height: auto;
	margin-bottom: 20px;
}

.otherproject .logo{
	width: 30px;
	height: 30px;
	margin-right: 5px;
}

.otherproject .projectgenre{
	border: 2px solid #7C83FD;
	font-weight: bold;
	font-size: 14px;
	border-radius: 5px;
	padding: 8px;
	width: auto;
	margin-right: 5px;
	margin-bottom: 10px;
	display: inline-block;
}

.plusothers{
	color: #7e7e7e;
	font-size: 12px;
}

.otherproject .projecttitle{
	font-size: 22px;
	font-weight: bold;
	margin-bottom: 10px;
}

.otherproject .projectdesc{
	font-size: 14px;
	height: 100%;
	width: 100%;
    word-break: break-all;
}

.otherproject .otherprojectstatus{
	font-weight: bold;
	font-size: 20px;
	position: absolute;
	bottom: 13px;
	left: 0;
}

.otherproject .otherprojectdetails, .otherproject .projectlikes, .otherproject .projectcomments{
	display: flex;
	align-items: center;
}

.otherproject .otherprojectdetails{
	position: absolute;
	right: 0;
	bottom: 0;
}

.otherproject .projectlikes{
	margin-right: 10px;
}

.otherproject.portrait .projectdesc{
	margin-bottom: 20px;
}

.otherproject.portrait .otherprojectdetails{
	bottom: 20px;
}

.otherproject.portrait .otherprojectstatus{
	bottom: 33px;
}

.imgcontainer{
	flex: 1;
	height: 400px;
}

#profile:hover{
	cursor: pointer;
}
</style>
<body>
	<div id="sidebarblack" class="sidebarblack sticky"></div>
	<div id="mySidebar" class="darkmodeflag sidebar">
		<div id="sidebarcontent">
			<a href="javascript:void(0)" class="closebtn darkmodeflag textsspecial" onclick="closeNav()">×</a>
			<p id="borderbottom"><img src="portovoirfull.png"></p>
			<p><img src="home.png" class="sidebaricon"><a class="darkmodeflag texts" href="home.php">Home</a></p>
			<p><img src="gallery.png" class="sidebaricon"><a class="darkmodeflag texts" href="myuploads.php">My Uploads</a></p>
			<p><img src="categories.png" class="sidebaricon"><a class="darkmodeflag texts" href="category.php">Categories</a></p>
			<div id="downarrowcontainer" onclick="toggleuploads()"><p><img src="upload.png" class="sidebaricon"><a class="darkmodeflag texts">Upload Content</a><img id="downarrow" src="arrow2.png"></p></div>
			<div id="downarrowpopup">
				<p><img src="image.png" class="sidebaricon"><a class="darkmodeflag texts" href="uploadpost.php">Upload Posts</a></p>
				<p><img src="blueprint2.png" class="sidebaricon"><a class="darkmodeflag texts" href="uploadproject.php">Upload Projects</a></p>
			</div>
			<p><img src="inbox.png" class="sidebaricon"><a class="darkmodeflag texts" href="mailmanagement.php">Mail Page</a></p>
			<p><img src="blueprint.png" class="sidebaricon"><a class="darkmodeflag texts" href="projects.php">Projects</a></p>
			<p><img src="search2.png" class="sidebaricon"><a class="darkmodeflag texts" href="jobgenres.php">Search Employees</a></p>
			<p><img src="info.png" class="sidebaricon"><a class="darkmodeflag texts" href="about.php">About Us</a></p>
		</div>
	</div>
	<div id="headerreal" class="darkmodeflag header real sticky">
		<img src="hamburger.png" class="hamburger openbtn" onclick="openNav()" title="Open sidebar menu">  
		<img id="logo" src="portovoir.png" title="Portovoir">
		<div class="search">
			<input class="darkmodeflag" id="searchbar" type="text" name="search" placeholder="Search">
			<img id="searchlogo" src="search.png">
		</div>
		<div class="headerbuttons notlogged">
			<img class="inbox" src="inbox.png" title="Inbox" onclick="toggleinbox()">
			<button class="darkmodeflag texts buttons login">Login</button>
			<button class="darkmodeflag texts buttons register">Register</button>
		</div>
		<div class="headerbuttons logged">
			<img class="inbox" src="inbox.png" title="Inbox" onclick="toggleinbox()">
			<button class="darkmodeflag texts buttons logout">Log out</button>
			<img id="profile" src="profile.jpg" onclick="location.href = 'profile.php'">
		</div>
		<div id="inboxbox" class="inboxbox darkmodeflag">
			<div class="emptylogo">
				<img src="inboxempty.png">
				<p class="darkmodeflag texts">Your inbox is empty</p>
			</div>
			<div class="messages">
				<div class="message">
					<div class="leftside">
						<img src="profile.jpg">
					</div>
					<div class="rightside">
						<p class="darkmodeflag texts"><span class="inboxusername">Lorem</span> sent you a message.</p>
						<p class="darkmodeflag texts">About : <span class="inboxtitle">Message Title</span></p>
					</div>
				</div>
				<div class="message">
					<div class="leftside">
						<img src="profile.jpg">
					</div>
					<div class="rightside">
						<p class="darkmodeflag texts"><span class="inboxusername">Lorem</span> sent you a message.</p>
						<p class="darkmodeflag texts">About : <span class="inboxtitle">Message Title</span></p>
					</div>
				</div>
				<div class="message">
					<div class="leftside">
						<img src="profile.jpg">
					</div>
					<div class="rightside">
						<p class="darkmodeflag texts"><span class="inboxusername">Lorem</span> sent you a message.</p>
						<p class="darkmodeflag texts">About : <span class="inboxtitle">Message Title</span></p>
					</div>
				</div>
				<span class="moremessages">+6 other messages</span>
			</div>
			<button onclick="location.href = 'mailmanagement.php'" class="viewall darkmodeflag texts">View All Messages</button>
		</div>
	</div>
	<div class="body darkmodeflag">
		<div class="section slideshow">
			<div id="slideshowimg" class="slideshowimg">
				<div id="imgs" class="imgs">
					<div class="imgcontainer">
						<img class="imgpreview" src="slideshow.jpg">
					</div>
					<div class="imgcontainer">
						<img class="imgpreview" src="slideshow.jpg">
					</div>
					<div class="imgcontainer">
						<img class="imgpreview" src="slideshow.jpg">
					</div>
					<div class="imgcontainer">
						<img class="imgpreview" src="slideshow.jpg">
					</div>
					<div class="imgcontainer">
						<img class="imgpreview" src="slideshow.jpg">
					</div>
				</div>
			</div>
			<div class="previmg" onclick="prevImg()">
				<img src="arrow2.png">
			</div>
			<div class="nextimg" onclick="nextImg()">
				<img src="arrow2.png">
			</div>
			<div class="imgnumber">
				<div id="number0" class="number marginright selected" onclick="gotoImg(0, this)"></div>
				<div id="number1" class="number marginright" onclick="gotoImg(1, this)"></div>
				<div id="number2" class="number marginright" onclick="gotoImg(2, this)"></div>
				<div id="number3" class="number marginright" onclick="gotoImg(3, this)"></div>
				<div id="number4" class="number marginright" onclick="gotoImg(4, this)"></div>
			</div>
			<label class="switch">
				<p class="autotext darkmodeflag texts">Auto Scroll</p>
				<input type="checkbox" checked onclick="toggleAutoScroll()">
				<span class="slider round"></span>
			</label>
		</div>
		<div class="section details">
			<div class="toppart">
				<div class="leftside">
					<p class="darkmodeflag texts title">Seasonal Nature</p>
					<p class="darkmodeflag texts genres"><span class="desctitle">Genres : </span><span class="darkmodeflag texts genre">Photography</span><span class="darkmodeflag texts genre">Photography</span></p>
				</div>
				<div class="rightside">
					<p class="author darkmodeflag texts"><span>By <a href="#">@Lorem</a></span><img src="profile.jpg"></p>
					<div class="likes">
						<p class="liketext darkmodeflag texts">2 likes</p>
						<p class="likebutton darkmodeflag texts"><span>Like </span><img src="heart.png"></p>
					</div>
				</div>
			</div>
			<div class="bottompart">
				<p class="desctitle projectstatusdesc darkmodeflag texts">Project Status: <span class="projectstatus ongoing">ONGOING</span></p>
				<p class="desctitle darkmodeflag texts">Project Description:</p>
				<p class="projectdescription">A collection of seasonal nature photographies that grows every week. Featuring colorful and moody pictures of our nature. Suggestions will always be viewed by us so please leave a comment on what we should take a picture from :D</p>
			</div>
		</div>
		<div class="section updates">
			<h2 class="darkmodeflag texts">Project Updates :</h2>
			<div class="update">
				<div class="updatetitle">
					<img src="plus.png">
					<p class="darkmodeflag texts">Added “Misty Forest” image into the project</p>
				</div>
				<p class="updatedate darkmodeflag texts">August 20, 2021</p>
				<p class="moredetails" onclick="toggleUpdate(this)">more details</p>
				<div class="updatecontent">
					<img src="profile.jpg">
					<p class="darkmodeflag texts">Added by <a href="#">@Lorem</a></p>
				</div>
			</div>
		</div>
		<div class="section titles">
			<h2 class="projectcomments darkmodeflag texts">Project Comments :</h2>
			<h2 class="otherprojectslikethis darkmodeflag texts">Other Projects Like This :</h2>
		</div>
		<div class="section bottom">
			<div class="comments">
				<div class="addcomment">
					<img class="profile" src="profile.jpg">
					<input class="darkmodeflag" type="text" name="comment" placeholder="Type your comment">
					<img class="sendimg" src="send2.png">
				</div>
				<div class="comment">
					<img src="profile.jpg">
					<div class="commentdetails">
						<span class="darkmodeflag texts username">Vincent</span>
						<p class="darkmodeflag texts commentcontent">loremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmdddddddddddddo</p>
					</div>
				</div>
				<div class="comment">
					<img src="profile.jpg">
					<div class="commentdetails">
						<span class="darkmodeflag texts username">Vincent</span>
						<p class="darkmodeflag texts commentcontent">loremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmdddddddddddddo</p>
					</div>
				</div>
				<div class="comment">
					<img src="profile.jpg">
					<div class="commentdetails">
						<span class="darkmodeflag texts username">Vincent</span>
						<p class="darkmodeflag texts commentcontent">loremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmdddddddddddddo</p>
					</div>
				</div>
			</div>
			<div class="border"></div>
			<div class="otherprojects">
				<div class="flipcontainer">
					<div class="otherproject landscape">
						<div class="leftside">
							<div class="projectimage">
								<img src="others1.jpg">
							</div>
							<div class="projectgenres">
								<span class="projectgenre darkmodeflag texts">aaaaa</span>
								<span class="projectgenre darkmodeflag texts">Photography</span>
								<span class="plusothers" title="genre, genre, genre">+3 others</span>
							</div>
						</div>
						<div class="rightside">
							<div class="projectdetails">
								<div class="projecttitle darkmodeflag texts">
									Global Motorsport Photography Gallery
								</div>
								<div class="projectdesc darkmodeflag texts">
									10 professional photographers’ collab pursuit to take motorsport photos from 47 different circuits from 47 different countries
								</div>
							</div>
							<div class="otherprojectstatus ongoing">
								ONGOING
							</div>
							<div class="otherprojectdetails">
								<div class="projectlikes">
									<img class="logo" src="heart.png">
									<p class="darkmodeflag texts">72k</p>
								</div>
								<div class="projectcomments">
									<img class="logo" src="comment.png">
									<p class="darkmodeflag texts">30k</p>
								</div>
							</div>
						</div>
					</div>
					<div class="otherproject portrait">
						<div class="leftside">
							<div class="projectimage">
								<img src="others2.jpg">
							</div>
						</div>
						<div class="rightside">
							<div class="projectdetails">
								<div class="projecttitle darkmodeflag texts">
									Gaming Phone Wallpaper Drawings
								</div>
								<div class="projectdesc darkmodeflag texts">
									Collection of Adobe illustrator-created phone wallpapers about gaming that grows every week
								</div>
								<div class="projectgenres">
									<span class="projectgenre darkmodeflag texts">aaaaa</span>
									<span class="projectgenre darkmodeflag texts">Photography</span>
									<span class="projectgenre darkmodeflag texts">Photography</span>
									<span class="projectgenre darkmodeflag texts">d</span>
									<span class="plusothers" title="genre, genre, genre">+3 others</span>
								</div>
							</div>
							<div class="otherprojectstatus ongoing">
								ONGOING
							</div>
							<div class="otherprojectdetails">
								<div class="projectlikes">
									<img class="logo" src="heart.png">
									<p class="darkmodeflag texts">72k</p>
								</div>
								<div class="projectcomments">
									<img class="logo" src="comment.png">
									<p class="darkmodeflag texts">30k</p>
								</div>
							</div>
						</div>
					</div>
				</div>
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

function toggleUpdate(element){
	if(element.nextElementSibling.style.display != "block"){
		element.nextElementSibling.style.display = "block";
		element.innerHTML = "less details";
	}else{
		element.nextElementSibling.style.display = "none";
		element.innerHTML = "more details";
	}
}

var currentimg = 0;
function nextImg(){
	currentimg++;
	if(currentimg < 5){
		document.getElementById("imgs").style.transform = "translateX(-" + (document.getElementById('slideshowimg').offsetWidth * currentimg) + "px)";
	}else{
		document.getElementById("imgs").style.transform = "translateX(0px)";
		currentimg = 0;
	}
	clearnumbers();
	document.getElementById("number" + currentimg).classList.add('selected');
}

function prevImg(){
	currentimg--;
	if(currentimg < 0){
		document.getElementById("imgs").style.transform = "translateX(-" + (document.getElementById('slideshowimg').offsetWidth * 4) + "px)";
		currentimg = 4;
	}else{
		document.getElementById("imgs").style.transform = "translateX(-" + (document.getElementById('slideshowimg').offsetWidth * currentimg) + "px)";
	}
	clearnumbers();
	document.getElementById("number" + currentimg).classList.add('selected');
}

function gotoImg(number, element){
	document.getElementById("imgs").style.transform = "translateX(-" + (document.getElementById('slideshowimg').offsetWidth * number) + "px)";
	clearnumbers();
	currentimg = number;
	element.classList.add('selected');
}

function clearnumbers(){
	for(var y = 0; y < 5; y++){
		document.getElementById("number" + y).classList.remove('selected');
	}
}

var intervalimg = setInterval(nextImg, 4000);
var auto = true;
function toggleAutoScroll(){
	if(auto){
		clearInterval(intervalimg);
	}else{
		intervalimg = setInterval(nextImg, 4000);
	}
	auto = !auto;
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

</script>
</html>