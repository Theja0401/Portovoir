<!DOCTYPE html>
<html>
<head>
	<title>My Uploads</title>
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

::-webkit-scrollbar {
	height: 10px;
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
	margin-top: 100px;
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

a{
	color: #7C83FD;
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

.bottom{
	display: flex;
}

.otherprojects{
	flex: 1;
	height: 700px;
	overflow-y: scroll;
}

.otherprojectspecial{
	height: 400px;
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

.otherprojects2{
	direction: ltr;
	margin-left: 0;
	margin-right: 15px;
	padding-right: 15px;
}

.projects{
	overflow-x: scroll;
	padding-bottom: 20px;
	display: flex;
}

.projects .project{
	position: relative;
	margin-right: 30px;
}

.projects .projectimg{
	width: auto;
	height: 300px;
	border-radius: 10px;
}

.projectamount{
	font-size: 16px;
	font-weight: bold;
	color: white;
	position: absolute;
	left: 10px;
}

.projectcategory{
	font-size: 22px;
	font-weight: bold;
	color: white;
	position: absolute;
	left: 10px;
	bottom: 0;
}

.project .blackscreen{
	background: rgba(0,0,0,0.3);
	position: absolute;
	left: 0;
	top: 0;
	height: calc(100% - 5px);
	width: 40%;
	height: 300px;
	border-top-left-radius: 10px;
	border-bottom-left-radius: 10px;
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

.footerfull .rightside input:focus{
	outline: none;
}

#profile:hover{
	cursor: pointer;
}

.addproject{
	text-align: center;
	height: 300px;
	border: 2px solid #7C83FD;
	border-radius: 10px;
	padding: 44px 80px;
	transition: 0.3s;
}

.addproject2{
	text-align: center;
	height: 500px;
	border: 2px solid #7C83FD;
	border-radius: 10px;
	padding: 44px 150px;
	transition: 0.3s;
}

.addproject p, .addproject2 p{
	font-size: 26px;
	font-weight: bold;
}

.addproject img, .addproject2 img{
	width: 50px;
	height: 50px;
}

.addproject:hover, .addproject2:hover{
	cursor: pointer;
	background: #7C83FD
}

.bottom{
	position: relative;
}

.bottom .addproject2{
	height: 280px;
	position: absolute;
	bottom: 0;
	right: 0;
}

.otherproject{
	position: relative;
}

.otherproject .threedots{
	position: absolute;
	top: 5px;
	right: 0;
	width: 30px;
	height: 30px;
}

.otherproject .threedots:hover{
	cursor: pointer;
}

.popupsettings{
	border-radius: 10px;
	background: #BFC5D6;
	padding: 10px;
	height: 130px;
	position: absolute;
	right: 0;
	top: 50px;
	display: none;
}

.popupsettings.darkmode{
	background: #1c1d1e;
}

.popupsettings img{
	width: 30px;
	height: 30px;
	margin-right: 10px
}

.popuprow{
	display: flex;
	align-items: center;
	margin-bottom: 10px;
	transition: 0.3s;
}

.projectpopup{
	display: flex;
	border-radius: 10px;
	border: 2px solid #7C83FD;
	padding: 10px;
	justify-content: center;
	margin-top: 10px;
}

.popupproject{
	display: flex;
	align-items: center;
	transition: 0.3s;
}

.popupproject.marginright{
	margin-right: 80px;
}

.popupproject img{
	width: 30px;
	height: 30px;
	margin-right: 10px;
}

.addprojectcontent{
	width: 300px;
}

.popuprow:hover, .popupproject:hover, .popuprow.darkmode:hover, .popupproject.darkmode:hover{
	cursor: pointer;
	color: #7C83FD;
}
</style>
<body>
	<div id="sidebarblack" class="sidebarblack sticky"></div>
	<div id="mySidebar" class="darkmodeflag sidebar">
		<div id="sidebarcontent">
            <a href="javascript:void(0)" class="closebtn darkmodeflag textsspecial" onclick="closeNav()">×</a>
            <p id="borderbottom"><img src="{{url('img/portovoirfull.png')}}"></p>
            <p><img src="{{url('img/home.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="home">Home</a></p>
            <p><img src="{{url('img/gallery.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="myuploads">My Uploads</a></p>
            <p><img src="{{url('img/Categories.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="category">Categories</a></p>
            <div id="downarrowcontainer" onclick="toggleuploads()"><p><img src="{{url('img/upload.png')}}" class="sidebaricon"><a class="darkmodeflag texts">Upload Content</a><img id="downarrow" src="{{url('img/arrow2.png')}}"></p></div>
            <div id="downarrowpopup">
                <p><img src="{{url('img/image.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="uploadimage.php">Upload Images</a></p>
                <p><img src="{{url('img/blueprint2.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="uploadproject.php">Upload Projects</a></p>
            </div>
            <p><img src="{{url('img/inbox.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="mail">Mail Page</a></p>
            <p><img src="{{url('img/blueprint.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="projects.php">Projects</a></p>
            <p><img src="{{url('img/search2.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="jobgenres.php">Search Employees</a></p>
            <p><img src="{{url('img/info.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="about.php">About Us</a></p>
        </div>
	</div>
	<div id="headerreal" class="darkmodeflag header real sticky">
        <img src="{{url('img/hamburger.png')}}" class="hamburger openbtn" onclick="openNav()" title="Open sidebar menu">  
        <img id="logo" src="{{url('img/portovoir.png')}}" title="Portovoir">
        <div class="search">
            <input class="darkmodeflag" id="searchbar" type="text" name="search" placeholder="Search">
            <img id="searchlogo" src="{{url('img/search.png')}}">
        </div>
        <div class="headerbuttons notlogged">
            <img class="inbox" src="{{url('img/inbox.png')}}" title="Inbox" onclick="toggleinbox()">
            <button class="darkmodeflag texts buttons login" onclick="location.href='otwlogin'">Login</button>
            <button class="darkmodeflag texts buttons register" onclick="location.href='register'">Register</button>
        </div>
       <!--  <div class="headerbuttons logged">
            <img class="inbox" src="{{url('img/inbox.png')}}" title="Inbox" onclick="toggleinbox()">
            <button class="darkmodeflag texts buttons logout">Log out</button>
            <img id="profile" src="{{url('img/profile.jpg')}}" onclick="location.href = 'pro'">
        </div> -->
        <div id="inboxbox" class="inboxbox darkmodeflag">
            <div class="emptylogo">
                <img src="{{url('img/inboxempty.png')}}">
                <p class="darkmodeflag texts">Your inbox is empty</p>
            </div>
           <!--  <div class="messages">
                <div class="message">
                    <div class="leftside">
                        <img src="{{url('img/profile.jpg')}}">
                    </div>
                    <div class="rightside">
                        <p class="darkmodeflag texts"><span class="inboxusername">Lorem</span> sent you a message.</p>
                        <p class="darkmodeflag texts">About : <span class="inboxtitle">Message Title</span></p>
                    </div>
                </div>
                <div class="message">
                    <div class="leftside">
                        <img src="{{url('img/profile.jpg')}}">
                    </div>
                    <div class="rightside">
                        <p class="darkmodeflag texts"><span class="inboxusername">Lorem</span> sent you a message.</p>
                        <p class="darkmodeflag texts">About : <span class="inboxtitle">Message Title</span></p>
                    </div>
                </div>
                <div class="message">
                    <div class="leftside">
                        <img src="{{url('img/profile.jpg')}}">
                    </div>
                    <div class="rightside">
                        <p class="darkmodeflag texts"><span class="inboxusername">Lorem</span> sent you a message.</p>
                        <p class="darkmodeflag texts">About : <span class="inboxtitle">Message Title</span></p>
                    </div>
                </div>
                <span class="moremessages">+6 other messages</span>
            </div> -->
            <!-- <button onclick="location.href = 'mailmanagement.php'" class="viewall darkmodeflag texts">View All Messages</button> -->
        </div>
    </div>
	<div class="body darkmodeflag">
		<h2 class="darkmodeflag texts" style="font-size: 26px;">My Projects</h2>
		<div class="section projects">
			<div class="project">
				<img class="projectimg" src="{{url('img/project.png')}}">
				<div class="blackscreen">
					<p class="projectamount">40k Projects</p>
					<p class="projectcategory">Game Design</p>
				</div>
				<div class="projectpopup">
					<div class="popupproject marginright">
						<img src="{{url('img/edit2.png')}}">
						<span class="darkmodeflag texts" onclick="location.href = 'updateproject.php'">Edit</span>
					</div>
					<div class="popupproject marginright">
						<img src="{{url('img/delete.png')}}">
						<span class="darkmodeflag texts">Delete</span>
					</div>
					<div class="popupproject">
						<img src="{{url('img/archive.png')}}">
						<span class="darkmodeflag texts">Archive</span>
					</div>
				</div>
			</div>
			<div class="addproject addprojecttop" onclick="location.href = 'uploadproject'">
				<div class="addprojectcontent">
					<img src="{{url('img/prototype.png')}}">
					<p class="darkmodeflag texts">Create a new project</p>
					<img src="{{url('img/plus.png')}}">
				</div>
			</div>
		</div>
		<div class="section titles">
			<h2 class="projectcomments darkmodeflag texts">My Posts</h2>
		</div>
		<div class="section bottom">
			<div class="otherprojects otherprojects2">
				<div class="flipcontainer">
					<div class="otherproject portrait">
						<div class="leftside">
							<div class="projectimage">
								<img src="{{url('img/others2.jpg')}}">
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
									<img class="logo" src="{{url('img/heart.png')}}">
									<p class="darkmodeflag texts">72k</p>
								</div>
								<div class="projectcomments">
									<img class="logo" src="{{url('img/comment.png')}}">
									<p class="darkmodeflag texts">30k</p>
								</div>
							</div>
						</div>
						<img class="threedots" src="{{url('img/settings.png')}}" onclick="showpopup(this)">
						<div class="popupsettings darkmodeflag">
							<div class="popuprow">
								<img src="{{url('img/delete.png')}}">
								<span class="darkmodeflag texts">Delete post</span>
							</div>
							<div class="popuprow edit">
								<img src="{{url('img/edit2.png')}}">
								<span class="darkmodeflag texts" onclick="location.href = 'updatepost.php'">Edit post</span>
							</div>
							<div class="popuprow">
								<img src="{{url('img/archive.png')}}">
								<span class="darkmodeflag texts">Archive post</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="border"></div>
			<div class="otherprojects otherprojectspecial">
				<div class="flipcontainer">
					<div class="otherproject landscape">
						<div class="leftside">
							<div class="projectimage">
								<img src="{{url('img/others1.jpg')}}">
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
									<img class="logo" src="{{url('img/heart.png')}}">
									<p class="darkmodeflag texts">72k</p>
								</div>
								<div class="projectcomments">
									<img class="logo" src="{{url('img/comment.png')}}">
									<p class="darkmodeflag texts">30k</p>
								</div>
							</div>
						</div>
						<img class="threedots" src="{{url('img/settings.png')}}" onclick="showpopup(this)">
						<div class="popupsettings darkmodeflag">
							<div class="popuprow">
								<img src="{{url('img/delete.png')}}">
								<span class="darkmodeflag texts">Delete post</span>
							</div>
							<div class="popuprow">
								<img src="{{url('img/edit2.png')}}">
								<span class="darkmodeflag texts" onclick="location.href = 'updatepost'">Edit post</span>
							</div>
							<div class="popuprow">
								<img src="{{url('img/archive.png')}}">
								<span class="darkmodeflag texts">Archive post</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="addproject2" onclick="location.href = 'uploadpost'">
				<img src="{{url('img/image.png')}}">
				<p class="darkmodeflag texts">Create a new post</p>
				<img src="{{url('img/plus.png')}}">
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

function toggleUpdate(element){
	if(element.nextElementSibling.style.display != "block"){
		element.nextElementSibling.style.display = "block";
		element.innerHTML = "less details";
	}else{
		element.nextElementSibling.style.display = "none";
		element.innerHTML = "more details";
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

function toggleinbox(){
	if(document.getElementById('inboxbox').style.display == "block"){
		document.getElementById('inboxbox').style.display = "none";
	}else{
		document.getElementById('inboxbox').style.display = "block";
	}
}

function showpopup(element){
	if(element.nextElementSibling.style.display != "block"){
		element.nextElementSibling.style.display = "block";
	}else{
		element.nextElementSibling.style.display = "none";
	}
}
</script>
</html>