<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
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

.header{
	margin-bottom: 40px;
}

.headerimage{
	width: 100%;
	height: 350px;
	overflow: hidden;
	position: relative;
	background-image: url('banner.jpg');
	background-position: bottom;
	background-size: cover;
}

.profile{
	background: #BFC5D6;
	position: relative;
	height: auto;
}

#profilepic{
	position: absolute;
	left: 50px;
	top: -80px;
	width: 250px;
	height: 250px;
	border-radius: 100%;
}

.details{
	padding: 20px 0 20px 350px;
	position: relative;
}

.top{
	margin-bottom: 16px;
}

.nickname{
	font-size: 44px;
}

.tag{
	font-size: 22px;
	color: #353639;
}

.social{
	margin-right: 32px;
	font-size: 18px;	
}

.social img{
	width: 36px;
	height: 36px;
	margin-right: 8px;
	vertical-align: middle;
}

.editprofile{
	position: absolute;
	top: 16px;
	right: 16px;
}

.editprofile a{
	margin-right: 12px;
	color: black;
}

.editprofile img{
	width: 36px;
	height: 36px;
	vertical-align: middle;
}

.headerimage button{
	position: absolute;
}

.headerimage .button{
	font-weight: bold;
	font-size: 16px;
	border: none;
	border-radius: 8px;
}

.back{
	width: 140px;
	height: 36px;
	top: 10px;
	left: 10px;
}

.settings{
	width: 80px;
	height: 46px;
	top: 10px;
	right: 10px;
}

.banneredit{
	width: 80px;
	height: 46px;
	bottom: 20px;
	right: 10px;
}

.headerimage img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
}

.header button:hover{
	cursor: pointer;
}

.body table img{
	width: 30px;
	height: 30px;
	vertical-align: middle;
}

.body table{
	width: 100%;
	vertical-align: middle;
}

.body table .title{
	width: 20%;
	text-align: left;
	font-weight: bold;
}

.body table .colon{
	width: 5%;
	text-align: center;
}

.body table .postscategory .content span{
	border: 2px solid #7C83FD;
	border-radius: 5px;
	padding: 6px;
	font-weight: bold;
	margin: 0 20px 20px 0;
	display: inline-block;
}

.body table td{
	padding: 20px 0;
}

.achievements li{
	padding: 8px 0;
}

.verified{
	position: absolute;
	right: 0;
	top: 25%;
	width: 300px;
	padding: 20px;
	border: 2px solid #7C83FD;
	border-radius: 5px;
}

.viewall{
	font-size: 12px;
}

.viewall:hover{
	cursor: pointer;
}

.jobtext{
	font-weight: bold;
	font-size: 22px;
	text-transform: uppercase;
	margin-right: 50px;
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
	width: 100px;
    white-space: nowrap; 
	text-overflow: ellipsis;
	overflow: hidden;
}

.floatright{
	float: right;
}

.likes{
	padding-right: 30px;
}

.crowndisplay{
	width: 70px;
	height: 50px;
	position: absolute;
	top: 0;
	right: 0;
	background: rgba(0,0,0,0.7);
	border-top-right-radius: 10px;
	text-align: center;
}

.crowndisplay img{
	width: 40px;
	height: 40px;
	margin-top: 5px;
}

.showmore{
	border: 2px solid #7C83FD;
	width: 100%;
	padding: 10px;
	border-radius: 0 0 10px 10px;
	margin-bottom: 50px;
	font-weight: bold;
	text-align: center;
	font-size: 20px;
}

.ongoing input{
	border: 2px solid #7C83FD;
	border-radius: 10px;
	width: 600px;
	height: 50px;
	background: none;
	padding: 20px 0 20px 10px;
	font-size: 18px;
	color: #353639;
}

.ongoing input:focus{
	outline: none;
}

.searchinput{
	width: 600px;
	height: 50px;
	position: relative;
	margin-bottom: 50px;
}

.searchinput img{
	width: 30px;
	height: 30px;
	position: absolute;
	right: 20px;
	top: 10px;
}

.projecttitle{
	margin-bottom: 20px;
}

.projecttitle img{
	width: 60px;
	height: 60px;
	vertical-align: middle;
	margin-right: 20px;
}

.projecttitle .title{
	font-weight: bold;
	font-size: 28px;
}

.projecttitle .date{
	padding: 10px 0;
	float: right;
}

.projectimg{
	max-width: 100%;
	margin-bottom: 20px;
}

.project{
	border-bottom: 2px solid #7C83FD;
	padding-bottom: 30px;
	margin-bottom: 60px;
}

.project .tags .genres{
	border: 2px solid #7C83FD;
	border-radius: 5px;
	padding: 6px;
	font-weight: bold;
	margin: 0 0 20px 20px;
	display: inline-block;
}

.finished .projecttitle .goto{
	float: right;
	margin-top: -20px;
}

.tags{
	padding: 0 20px 0 10px;
}

.tags span{
	font-size: 20px;
}

.tags .viewall{
	font-size: 12px;
}

.tags img{
	width: 30px;
	height: 30px;
	margin-right: 10px;
	vertical-align: middle;
}

.darkmode.button, .darkmode.profile{
	background: #1c1d1e;
}

.darkmode.texts{
	color: white;
}

a{
	color: #7C83FD;
}

.hiringstatus .content button{
	width: auto;
	height: 40px;
	background: #7C83FD;
	border: none;
	border-radius: 8px;
	color: white;
	font-size: 16px;
	font-weight: bold;
	padding: 0 20px;
	line-height: 30px;
}

.hiringstatus .content button img{
	width: 30px;
	height: 30px;
	border-radius: 50%;
	margin-right: 10px;
	vertical-align: middle;
	position: relative;
	top: -1px;
}

.hiringstatus .content button:hover{
	cursor: pointer;
}

.mailbox{
	width: 100%;
	height: auto;
	background: #BFC5D6;
	display: flex;
	padding: 50px 0px;
	position: relative;
	border-radius: 10px;
}

.mailboxleft{
	float: left;
	flex: 1;
	margin-right: 20px;
	border-right: 2px solid #7C83FD;
	text-align: center;
}

.mailboxpfp{
	position: relative;
	width: 200px;
	margin: 0 auto;
}

.mailboxright{
	float: right;
	flex: 3;
	padding-right: 50px;
}

.mailboxleft img{
	width: 200px;
	height: 200px;
	border-radius: 50%;
}

.mailboxleft p{
	font-size: 20px;
	font-weight: bold;
}

.userstatus{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	background: grey;
	position: absolute;
	right: 8px;
	bottom: 8px;
}

#userstatus.online{
	background: green;
}

#closemail{
	position: absolute;
	top: 20px;
	right: 20px;
	width: 30px;
	height: 30px;
}

.mailboxinput:focus{
	outline: none;
}

.mailboxinput, .message{
	width: 100%;
	height: 50px;
	border: 2px solid #7C83FD;
	font-size: 18px;
	border-radius: 10px;
	background: none;
	padding: 0 20px;
	margin-bottom: 20px;
}

.recipient{
	width: auto;
}

.message{
	padding: 10px 20px;
	height: 240px;
	position: relative;
}

.mailboxtextarea{
	outline: none;
	border: none;
	background: none;
	font-size: 18px;
	resize: none;
	width: 100%;
	height: 240px;
}

.sendbutton{
	border: none;
	font-weight: bold;
	font-size: 18px;
	background: #7C83FD;
	width: 140px;
	height: 40px;
	border-radius: 5px;
	position: absolute;
	right: 10px;
	bottom: 10px;
}

.sendbutton:hover{
	cursor: pointer;
}

#charcounter{
	color: #757679;
	position: absolute;
	bottom: 10px;
	left: 20px;
	font-size: 14px;
}

.mailboxright p{
	text-align: center;
	font-size: 18px;
}

.mailboxright a{
	color: black;
}

#closemail:hover{
	cursor: pointer;
}

.mailbox.darkmode{
	background: #1C1D1E;
}

.mailboxinput.darkmode{
	color: white;
}

.blackimg.darkmode{
	filter: invert(1);
}

.mailboxnologin{
	font-size: 22px;
	text-align: center;
	margin: 0 auto;
}

.mailboxnologin img{
	width: 300px;
	height: 300px;
	margin: 0 auto;
}

.mailboxnologin button{
	font-size: 22px;
	width: 400px;
	border: 2px solid #7C83FD;
	background: none;
	height: 60px;
	border-radius: 5px;
	font-weight: bold
}

.mailboxnologin button:hover{
	cursor: pointer;
}

.registerbutton{
	background: #7C83FD !important;
}

.contacttext{
	color: black;
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
	z-index: 2;
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
	z-index: 1;
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
.footerfull .leftside img{
	margin-top: 20px;
	width: 225px;
	height: 75px;
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
</style>	
<body>
 <div id="sidebarblack" class="sidebarblack"></div>
    <div id="mySidebar" class="darkmodeflag sidebar">
        <div id="sidebarcontent">
            <a href="javascript:void(0)" class="closebtn darkmodeflag textsspecial" onclick="closeNav()">×</a>
            <p id="borderbottom"><img src="{{url('img/portovoirfull.png')}}"></p>
            <p><img src="{{url('img/home.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="home">Home</a></p>
            <p><img src="{{url('img/gallery.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="myuploads.php">My Uploads</a></p>
            <p><img src="{{url('img/Categories.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="category">Categories</a></p>
            <div id="downarrowcontainer" onclick="toggleuploads()"><p><img src="{{url('img/upload.png')}}" class="sidebaricon"><a class="darkmodeflag texts">Upload Content</a><img id="downarrow" src="{{url('img/arrow2.png')}}"></p></div>
            <div id="downarrowpopup">
                <p><img src="{{url('img/image.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="uploadimage.php">Upload Images</a></p>
                <p><img src="{{url('img/blueprint2.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="uploadproject.php">Upload Projects</a></p>
            </div>
            <p><img src="{{url('img/inbox.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="mail">Mail Page</a></p>
            <p><img src="{{url('img/blueprint.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="projects.php">Projects</a></p>
            <p><img src="{{url('img/search2.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="jobgenres.php">Search Employees</a></p>
            <p><img src="{{url('img/info.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="about">About Us</a></p>
        </div>
    </div>
    <div class="darkmodeflag header real">
        <img src="{{url('img/hamburger.png')}}" class="hamburger openbtn" onclick="openNav()" title="Open sidebar menu">  
        <img id="logo" src="{{url('img/portovoir.png')}}" title="Portovoir">
        <div class="search">
            <input class="darkmodeflag" id="searchbar" type="text" name="search" placeholder="Search">
            <img id="searchlogo" src="{{url('img/search.png')}}" >

        </div>
        <div class="headerbuttons notlogged">
            <img class="inbox" src="{{url('img/inbox.png')}}" title="Inbox">
            <button class="darkmodeflag texts buttons login">Login</button>
            <button class="darkmodeflag texts buttons register">Register</button>
        </div>
        <div class="headerbuttons logged">
            <img class="inbox" src="{{url('img/inbox.png')}}" title="Inbox" onclick="mail()">
            <button class="darkmodeflag texts buttons logout">Log out</button>
            <img id="profile" src="{{url('img/profile.jpg')}}" onclick="profile()">
        </div>
    </div>
<div class="header">
	<div class="headerimage" style="background-image:url({{url('/img/bgregister.jpg')}})">
		<button class="darkmodeflag texts button back" onclick="history.back()">Back</button>
		<button class="darkmodeflag button settings" onclick="settings()"><img src="{{url('img/settings.png')}}"></button>
		<button class="darkmodeflag button banneredit" onclick=""><img src="{{url('img/slider.png')}}"></button>
	</div>
	<div class="darkmodeflag profile">
		<img id="profilepic" src="{{url('img/profile.jpg')}}">
		<div class="details">
			<div class="editprofile" onclick="settings()"	>
				<span><a class="darkmodeflag texts">Edit Profile</a></span>
				<img src="{{url('img/edit.png')}}">
			</div>
			<div class="top">
				<span class="darkmodeflag texts nickname">Lorem Ipsum</span>
				<img src="{{url('img/immanuel.png')}}" style="width: 40px; height: 40px; position: relative; bottom: -8px;" title="Alumni of Immanuel Vocational Highschool Pontianak">
				<span class="darkmodeflag texts tag">@Lorem2021</span>
			</div>
			<div class="socials">
				<span class="darkmodeflag texts social instagram"><img src="{{url('img/instagram.png')}}">@Lorem2021</span>
				<span class="darkmodeflag texts social pinterest"><img src="{{url('img/pinterest.png')}}">@Lorem2021</span>
				<span class="darkmodeflag texts social youtube"><img src="{{url('img/youtube.png')}}">@Lorem2021</span>
			</div>
		</div>
	</div>
</div>
<div class="body" style="padding: 0 40px;">
	<table>
		<tr class="postscategory">
			<td class="darkmodeflag texts title">Posts category</td>
			<td class="darkmodeflag texts colon">:</td>
			<td class="content"><div>
				<span class="darkmodeflag texts">Photography <img src="{{url('img/crown.png')}}"></span>
				<span class="darkmodeflag texts">Digital Art</span>
				<span class="darkmodeflag texts">Landscape Artist</span>
				<span class="darkmodeflag texts">Illustrator</span>
				<span class="darkmodeflag texts">Video Editor</span>
			</div></td>
		</tr>
		<tr class="achievements">
			<td class="darkmodeflag texts title">Achievements</td>
			<td class="darkmodeflag texts colon">:</td>
			<td class="content"><div>
				<ul style="position: relative;">
					<li class="darkmodeflag texts">1st place at 2019 annual Pontianak art contest <img src="{{url('img/gold.png')}}"></li>
					<li class="darkmodeflag texts">2nd place at 2020 Online Landscape Art Competition <img src="{{url('img/silver.png')}}"></li>
					<li class="darkmodeflag texts">3rd place at 2020 Local Pontianak Photography Contest <img src="{{url('img/bronze.png')}}"></li>
					<div class="verified"><span class="darkmodeflag texts maintext">Verified by <a href="">@smkimmanuelptk</a> + 7 other admins...</span><span class="darkmodeflag texts viewall" onclick="">View all</span></div>
				</ul>
			</div></td>
		</tr>
		<tr class="hiringstatus">
			<td class="darkmodeflag texts title">Job Status</td>
			<td class="colon">:</td>
			<td class="content"><div>
				<span class="darkmodeflag texts jobtext">Looking for a job  </span>
				<button onclick="togglemailbox()"><img src="{{url('img/profile.jpg')}}"><span class="darkmodeflag texts contacttext">Contact @LoremIpsum</span></button>
			</div></td>
		</tr>
	</table>
	<div id="mailbox" class="darkmodeflag closed mailbox" style="display: none;">
		<img id="closemail" class="darkmodeflag blackimg" src="{{url('img/cancel2.png')}}" onclick="closemailbox()">
		<div id="mailboxleft" class="mailboxleft" hidden>
			<p class="darkmodeflag texts">Currently contacting</p>
			<div class="mailboxpfp">
				<img src="{{url('img/profile.jpg')}}">
				<div class="userstatus"></div>
			</div>
			<p class="darkmodeflag texts">@LoremIpsum</p>
			<p class="darkmodeflag texts">Status: Offline</p>
		</div>
		<div id="mailboxright"class="mailboxright" hidden>
			<input class="darkmodeflag mailboxinput recipient" type="text" name="recipient" value="Recipient: LoremIpsum" readonly>
			<input class="mailboxinput" type="text" name="title" value="" placeholder="Title / Subject">
			<div class="message">
				<textarea id="mailboxtextarea" class="mailboxtextarea" placeholder="Type your message here" maxlength="200" onkeydown="countchar()" onchange="countchar()" onkeyup="countchar()"></textarea>
				<button class="darkmodeflag texts sendbutton">Send</button>
				<span id="charcounter">0/200</span>
			</div>
			<p><a class="darkmodeflag texts" href="managemail.php">Manage your mails on this page</a></p>
		</div>
		<div class="mailboxnologin">
			<img src="{{url('img/embarassed.png')}}">
			<p class="darkmodeflag texts">Unfortunately you need to login to use this feature</p>
			<button class="darkmodeflag texts registerbutton" onclick="location.href = 'register.php';">Create an account</button>
			<p class="darkmodeflag texts">or</p>
			<button class="darkmodeflag texts" onclick="location.href = 'login.php';">Login</button>
		</div>
	</div>
	<h1 class="darkmodeflag texts">Genre Filters :</h1>
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
	<h1 class="darkmodeflag texts">Posts :</h1>
	<div class="posts">
		<div class="postsrow lspr">
			<div class="post ls marginright">
				<img src="{{url('img/post3.jpg')}}">
				<div class="postdetails">
					<span class="postname">Futuristic Bridge</span>
					<span class="floatright">
						<span class="likes"><img src="{{url('img/heart.png')}}">5.2k</span>
						<span class="comments"><img src="{{url('img/comment.png')}}">5.2k</span>
					</span>
				</div>
			</div>
			<div class="post pr crown">
				<img src="{{url('img/post1.jpeg')}}">
				<div class="crowndisplay">
					<img src="{{url('img/crown.png')}}">
				</div>
				<div class="postdetails">
					<span class="postname">Colorful Keyboard</span>
					<span class="floatright">
						<span class="likes"><img src="{{url('img/heart.png')}}">5.2k</span>
						<span class="comments"><img src="{{url('img/comment.png')}}">5.2k</span>
					</span>
				</div>
			</div>
		</div>
	</div>
	<div class="darkmodeflag texts showmore">+ Show more posts</div>
	<h1 class="darkmodeflag texts">Ongoing Projects :</h1>
	<div class="ongoing">
		<div class="searchinput">
			<input type="text" name="search" placeholder="Search for projects">
			<img src="search.png">
		</div>
		<div class="projects">
			<div class="project">
				<div class="projecttitle">
					<img src="{{url('img/calendar.png')}}">
					<span class="darkmodeflag texts title">Wildlife Illustration without pen tablet</span>
					<span class="darkmodeflag texts date">Ongoing since July 1st 2021	</span>
				</div>
				<img class="projectimg" src="{{url('img/ongoing.jpg')}}">
				<div class="tags">
					<span class="darkmodeflag texts">Tags :</span>
					<span class="darkmodeflag texts genres">Illustration</span>
					<span class="darkmodeflag texts genres">Wildlife</span>
					<span class="darkmodeflag texts genres">Drawing</span>
					<span class="darkmodeflag texts genres">Adobe</span>
				</div>
			</div>
			<div class="project finished">
				<div class="projecttitle">
					<img src="{{url('img/calendar.png')}}">
					<span class="darkmodeflag texts title">Application banner design for school project</span>
					<span class="darkmodeflag texts date">Completed at June 20th 2021</span><br>
					<span class="goto"><a href="">Go to post</a></span>
				</div>
				<img class="projectimg" src="{{url('img/ongoing.jpg')}}">
				<div class="tags">
					<span class="darkmodeflag texts">Tags :</span>
					<span class="darkmodeflag texts genres">Illustration</span>
					<span class="darkmodeflag texts genres">Wildlife</span>
					<span class="darkmodeflag texts genres">Drawing</span>
					<span class="darkmodeflag texts genres">Adobe</span>
					<span class="darkmodeflag texts">+3 other tags</span>
					<span class="darkmodeflag texts viewall">View all</span>
					<span class="floatright">
						<span class="darkmodeflag texts likes"><img src="heart.png">5.2k</span>
						<span class="darkmodeflag texts comments"><img src="comment.png">5.2k</span>
					</span>
				</div>
			</div>
			<div class="darkmodeflag texts showmore">+ Show more projects</div>
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
<script type="text/javascript">
function toggledarkmode(){
	var divs = document.querySelectorAll('.darkmodeflag');
	for (var i = 0; i < divs.length; i++) {
	    divs[i].classList.toggle('darkmode');
	}
	document.body.classList.toggle('darkmode');
}

function countchar(){
	var input = document.getElementById('mailboxtextarea');
	var length = input.value.length;
	var charcount = document.getElementById('charcounter');
	charcount.innerHTML = length+"/200";
}

function closemailbox(){
	var mailbox = document.getElementById('mailbox');
	mailbox.classList.add('closed');
	mailbox.style.display = "none";
}

function togglemailbox(){
	var mailbox = document.getElementById('mailbox');
	if(mailbox.classList.contains('closed')){
		mailbox.style.display = "flex";
		mailbox.classList.remove('closed');
	}else{
		mailbox.style.display = "none";
		mailbox.classList.add('closed');
	}
}

function settings(){
    location.href="{{url('/edit')}}";
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
</script>
</body>
</html>