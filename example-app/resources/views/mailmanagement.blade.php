<!DOCTYPE html>
<html>
<head>
	<title>Mail Management</title>
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

html, body{
	height: 100%;
}

body{
	overflow-y: hidden;
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
	margin-bottom: 10px;
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

.content{
	display: flex;
}

.mailbox{
	flex: 5;
}

.details{
	flex: 6;
}

.messagebig{
	flex: 12;
}

.mailbox{
	padding: 0 30px;
}

.mailbox .titlebig, .details .titlebig{
	font-weight: bold;
	text-align: center;
	font-size: 20px;
	padding-bottom: 20px;
	border-bottom: 1px solid black;
}

.details .titlebig{
	margin-bottom: 0;
}

.mailbox .tabs{
	padding: 0 20px;
}

.mailbox .tabs .tab{
	width: 100%;
	height: 80px;
	padding: 20px;
	background: none;
	border: 2px solid #7C83FD;
	border-radius: 10px;
	display : flex;
    align-items : center;
    margin-bottom: 20px;
    transition: 0.3s;
}

.mailbox .tabs .tab h3{
	margin: 0;
}

.mailbox .tabs .tab .left{
	float: left;
}

.mailbox .tabs .tab .right{
	margin-left: auto;
}

.mailbox .tabs .tab .left h3{
	position: relative;
}

.mailbox .tabs .tab .right h3{
	width: 30px;
	height: 30px;
	text-align: center;
	line-height: 30px;
	background: black;
	color: white;
	border-radius: 50%;
}

.mailbox .tabs .tab:hover{
	cursor: pointer;
	background: #7C83FD
}

.mailbox .tabs .tab.selected{
	background: #7C83FD
}

.details p span{
	text-decoration: underline;
}

.details p span:hover{
	cursor: pointer;
}

.border{
	border: 1px solid #737373;
	position: relative;
	left: -15px;
}

.border2{
	border: 1px solid #737373;
	position: relative;
	left: -15px;
}

.details .tabs .tab{
	background: none;
	border-bottom: 1px solid #a0a0a0;
	display: flex;
	height: 160px;
	position: relative;
	padding: 0 10px;
	padding-top: 20px;
}

.details .tabs .tab .profile img{
	width: 40px;
	height: 40px;
	border-radius: 50%;
}

.details .profile{
	margin-right: 10px;
}

.details .content{
	display: block;
}

.details .content .username{
	font-weight: normal;
	font-size: 16px;
	margin: 0;
}

.details .content .title{
	font-weight: bold;
	margin: 8px 0;
}

.details .content .message{
	font-size: 14px;
	float: left;
	white-space: nowrap; 
	text-overflow: ellipsis;
	overflow: hidden;
	height: 60px;
	width: 240px;
}

.details{
	padding-right: 5px;
	margin-right: 20px;
	overflow-y: scroll;
	height: 700px;
	padding-bottom: 300px;
}

.details .date{
	position: absolute;
	top: 10px;
	right: 10px;
	font-size: 14px;
	color: #939393;
}

.details .icons{
	height: 40px;
	position: absolute;
	bottom: 0;
	right: 10px;
}

.details .icons #paperclip, .details .icons #star{
	width: 20px;
	height: 20px;
	position: relative;
	bottom: -2px;
	margin-left: 10px;
}

.details .icons #star:hover{
	cursor: pointer;
}

.details .icons b{
	margin-left: 5px;
}

.details .tabs .tab.selected{
	border-left: 10px solid #7C83FD;
}

.messagebig{
	padding: 20px 30px 20px 10px;
}

.messagebig .left, .messagebig .leftside{
	float: left;
}

.messagebig .left .leftside{
	margin-right: 10px;
}

.messagebig .left .leftside img{
	width: 50px;
	height: 50px;
	border-radius: 50%
}

.messagebig .right, .messagebig .rightside{
	float: right;
}

.messagebig .rightside .username{
	margin: 4px 0;
}

.messagebig .rightside .email{
	font-size: 14px;
	margin: 4px 0;
}

.messagebig .right img{
	width: 20px;
	height: 20px;
	vertical-align: middle;
}

.messagebig .right{
	position: relative;
	bottom: -24px;
}

.messagebig .right span{
	font-size: 14px;
}

.messageheader{
	height: 70px;
	border-bottom: 1px solid black;
}

.messagemessage{
	font-size: 14px;
	margin: 0;
	height: 150px;
	overflow-y: scroll;
	overflow-x: hidden;
	margin-bottom: 10px;
}

.attachmenticon{
	width: 50px;
	height: 50px;
	border-radius: 50%;
	background: #c4c4c4;
	position: relative;
	bottom: -10px;
	right: -10px;
}

.attachmenticon img{
	width: 30px;
	height: 30px;
	margin: auto;
	display: block;
	position: relative;
	bottom: -10px;
}

.attachmenttitle{
	font-weight: bold;
	font-size: 16px;
	margin: 16px 0 4px 0;
}

.attachment{
	background: #BFC5D6;
	height: 70px;
	border-radius: 10px;
	display: flex;
	margin-right: 20px;
	padding-right: 20px;
}

.attachmentsize{
	font-size: 14px;
	margin: 0;
}

.attachmentstats{
	margin-left: 20px;
}

.attachments{
	margin: auto;
	width: 640px;
	display: flex;
	overflow-x: scroll;
	padding-bottom: 10px;
}

.reply{
	margin-top: 20px;
	width: 100%;
	height: 78px;
	position: relative;
}

.reply textarea{
	width: 100%;
	height: 100%;
	background: #BFC5D6;
	border-radius: 10px;
	border: none;
	resize: none;
	padding: 10px;
}

.reply textarea:focus{
	outline: none;
}

.reply img{
	width: 20px;
	height: 20px;
	position: absolute;
	right: 15px;
	top: 10px;
}

.reply .charlimit{
	font-size: 12px;
	position: absolute;
	bottom: 5px;
	left: 10px;
	color: grey;
}

.customscroll::-webkit-scrollbar {
	height: 10px;
}

.darkmode.texts{
	color: white;
}

.darkmode.h3{
	color: black !important;
	background: white !important;
}

.darkmode.blackimg{
	filter: invert(1);
}

.darkmode.header, .darkmode.attachmentstats, .darkmode.replyarea, .darkmode.attachment{
	background: #1c1d1e;
}

.darkmode.bordered{
	border-bottom: 1px solid white;
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
	z-index: 3;
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
	z-index: 2;
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

.messagenotlogged{
	width: 50%;
	padding: 80px 50px;
}

.messagenotlogged .container{
	text-align: center;
}

.messagenotlogged img{
	width: 200px;
	height: 200px;
}

.messagenotlogged .registerbtn, .messagenotlogged .loginbtn{
	border: 2px solid #7C83FD;
	width: 200px;
	height: 40px;
	font-size: 20px;
	font-weight: bold;
	border-radius: 10px;
}

.messagenotlogged .registerbtn{
	background: #7C83FD;
}

.messagenotlogged .loginbtn{
	background: none;
}

.messagenotlogged span{
	margin: 0 20px;
	font-size: 18px;
}

.tabsnotlogged{
	text-align: center;
}

.tabsnotlogged img{
	width: 200px;
	height: 200px;
	margin-top: 60px;
}

.registerbtn:hover, .loginbtn:hover{
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
	z-index: 1;
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

#profile:hover{
	cursor: pointer;
}
</style>
<body>
    @include('layouts/header')  
	<div class="content">
		<div class="mailbox">
			<p class="darkmodeflag bordered texts titlebig">Mailbox</p>
			<div class="tabs">
				<div id="tab1" class="tab selected" onclick="toggletab(this.id)">
					<div class="left">
						<h3 class="darkmodeflag texts">Private Offers</h3>
					</div>
					<div class="right">
						<h3 class="darkmodeflag h3">6</h3>
					</div>
				</div>
				<div id="tab2" class="tab" onclick="toggletab(this.id)">
					<div class="left">
						<h3 class="darkmodeflag texts">Website Notifications</h3>
					</div>
					<div class="right">
						<h3 class="darkmodeflag h3">6</h3>
					</div>
				</div>
				<div id="tab3" class="tab" onclick="toggletab(this.id)">
					<div class="left">
						<h3 class="darkmodeflag texts">Starred</h3>
					</div>
					<div class="right">
						<h3 class="darkmodeflag h3">6</h3>
					</div>
				</div>
				<div id="tab3" class="tab" onclick="toggletab(this.id)">
					<div class="left">
						<h3 class="darkmodeflag texts">Archived</h3>
					</div>
					<div class="right">
						<h3 class="darkmodeflag h3">6</h3>
					</div>
				</div>
			</div>
		</div>
		<div class="darkmodeflag border"></div>
		<div class="details">
			<p class="titlebig darkmodeflag bordered texts">Sorted by <span id="sort" onclick="changesort()">Recent</span></p>
			<div class="tabs">
				<div class="detailstab tab selected" onclick="selecttab(this)">
					<div class="profile">
						<img src="{{url('img/profile.jpg')}}">
					</div>
					<div class="content">
						<p class="darkmodeflag texts username">Azhada</p>
						<p class="darkmodeflag texts title">Project A</p>
						<p class="darkmodeflag texts message">Lorem ipsum lorem lorem lorem lorem lorem lorem loremloremloremloremloremlorem</p>
					</div>
					<span class="date">June 27 2021</span>
					<div class="icons">
						<img id="paperclip" class="darkmodeflag blackimg" src="{{url('img/paperclip.png')}}"><span class="darkmodeflag texts"><b>6</b></span>
						<img id="star" class="darkmodeflag blackimg" src="{{url('img/star.png')}}" onclick="starmail()">
					</div>
				</div>
				<div class="detailstab tab" onclick="selecttab(this)">
					<div class="profile">
						<img src="{{url('img/profile.jpg')}}">
					</div>
					<div class="content">
						<p class="darkmodeflag texts username">Azhada</p>
						<p class="darkmodeflag texts title">Project A</p>
						<p class="darkmodeflag texts message">Lorem ipsum lorem lorem lorem lorem lorem lorem loremloremloremloremloremlorem</p>
					</div>
					<span class="date">June 27 2021</span>
					<div class="icons">
						<img id="paperclip" class="darkmodeflag blackimg" src="{{url('img/paperclip.png')}}"><span class="darkmodeflag texts"><b>6</b></span>
						<img id="star" class="darkmodeflag blackimg" src="{{url('img/star.png')}}" onclick="starmail()">
					</div>
				</div>
				<div class="detailstab tab" onclick="selecttab(this)">
					<div class="profile">
						<img src="{{url('img/profile.jpg')}}">
					</div>
					<div class="content">
						<p class="darkmodeflag texts username">Azhada</p>
						<p class="darkmodeflag texts title">Project A</p>
						<p class="darkmodeflag texts message">Lorem ipsum lorem lorem lorem lorem lorem lorem loremloremloremloremloremlorem</p>
					</div>
					<span class="date">June 27 2021</span>
					<div class="icons">
						<img id="paperclip" class="darkmodeflag blackimg" src="{{url('img/paperclip.png')}}"><span class="darkmodeflag texts"><b>6</b></span>
						<img id="star" class="darkmodeflag blackimg" src="{{url('img/star.png')}}" onclick="starmail()">
					</div>
				</div>
				<div class="detailstab tab" onclick="selecttab(this)">
					<div class="profile">
						<img src="{{url('img/profile.jpg')}}">
					</div>
					<div class="content">
						<p class="darkmodeflag texts username">Azhada</p>
						<p class="darkmodeflag texts title">Project A</p>
						<p class="darkmodeflag texts message">Lorem ipsum lorem lorem lorem lorem lorem lorem loremloremloremloremloremlorem</p>
					</div>
					<span class="date">June 27 2021</span>
					<div class="icons">
						<img id="paperclip" class="darkmodeflag blackimg" src="{{url('img/paperclip.png')}}"><span class="darkmodeflag texts"><b>6</b></span>
						<img id="star" class="darkmodeflag blackimg" src="{{url('img/star.png')}}" onclick="starmail()">
					</div>
				</div>
				<div class="detailstab tab" onclick="selecttab(this)">
					<div class="profile">
						<img src="{{url('img/profile.jpg')}}">
					</div>
					<div class="content">
						<p class="darkmodeflag texts username">Azhada</p>
						<p class="darkmodeflag texts title">Project A</p>
						<p class="darkmodeflag texts message">Lorem ipsum lorem lorem lorem lorem lorem lorem loremloremloremloremloremlorem</p>
					</div>
					<span class="date">June 27 2021</span>
					<div class="icons">
						<img id="paperclip" class="darkmodeflag blackimg" src="{{url('img/paperclip.png')}}"><span class="darkmodeflag texts"><b>6</b></span>
						<img id="star" class="darkmodeflag blackimg" src="{{url('img/star.png')}}" onclick="starmail()">
					</div>
				</div>
				<div class="detailstab tab" onclick="selecttab(this)">
					<div class="profile">
						<img src="{{url('img/profile.jpg')}}">
					</div>
					<div class="content">
						<p class="darkmodeflag texts username">Azhada</p>
						<p class="darkmodeflag texts title">Project A</p>
						<p class="darkmodeflag texts message">Lorem ipsum lorem lorem lorem lorem lorem lorem loremloremloremloremloremlorem</p>
					</div>
					<span class="date">June 27 2021</span>
					<div class="icons">
						<img id="paperclip" class="darkmodeflag blackimg" src="{{url('img/paperclip.png')}}"><span class="darkmodeflag texts"><b>6</b></span>
						<img id="star" class="darkmodeflag blackimg" src="{{url('img/star.png')}}" onclick="starmail()">
					</div>
				</div>
			</div>
		</div>
		<div class="darkmodeflag border2"></div>
		<div class="messagebig">
			<div class="messageheader darkmodeflag bordered">
				<div class="left">
					<div class="leftside">
						<img src="{{url('img/profile.jpg')}}">
					</div>
					<div class="rightside">
						<p class="username darkmodeflag texts">Azhada</p>
						<p class="email darkmodeflag texts">azhada@gmail.com</p>
					</div>
				</div>
				<div class="right">
					<div class="rightsection">
						<img src="{{url('img/calendar.png')}}">
						<span class="darkmodeflag texts">27 June 2021</span>
					</div>
				</div>
			</div>
			<div class="messagecontent">
				<h2 class="messagetitle darkmodeflag texts">About Project A</h2>
				<p class="messagemessage darkmodeflag texts">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
				<div class="attachments customscroll">
					<div class="darkmodeflag attachment">
						<div class="attachmenticon">
							<img src="{{url('img/file.png')}}">
						</div>
						<div class="darkmodeflag attachmentstats">
							<p class="attachmenttitle darkmodeflag texts">Blabla.pdf</p>
							<p class="attachmentsize darkmodeflag texts">745 KB</p>
						</div>
					</div>
					<div class="darkmodeflag attachment">
						<div class="attachmenticon">
							<img src="{{url('img/file.png')}}">
						</div>
						<div class="darkmodeflag attachmentstats">
							<p class="attachmenttitle darkmodeflag texts">Blabla.pdf</p>
							<p class="attachmentsize darkmodeflag texts">745 KB</p>
						</div>
					</div>
					<div class="darkmodeflag attachment">
						<div class="attachmenticon">
							<img src="{{url('img/file.png')}}">
						</div>
						<div class="darkmodeflag attachmentstats">
							<p class="attachmenttitle darkmodeflag texts">Blabla.pdf</p>
							<p class="attachmentsize darkmodeflag texts">745 KB</p>
						</div>
					</div>
					<div class="darkmodeflag attachment">
						<div class="attachmenticon">
							<img src="{{url('img/file.png')}}">
						</div>
						<div class="darkmodeflag attachmentstats">
							<p class="attachmenttitle darkmodeflag texts">Blabla.pdf</p>
							<p class="attachmentsize darkmodeflag texts">745 KB</p>
						</div>
					</div>
					<div class="darkmodeflag attachment">
						<div class="attachmenticon">
							<img src="{{url('img/file.png')}}">
						</div>
						<div class="darkmodeflag attachmentstats">
							<p class="attachmenttitle darkmodeflag texts">Blabla.pdf</p>
							<p class="attachmentsize darkmodeflag texts">745 KB</p>
						</div>
					</div>
					<div class="darkmodeflag attachment">
						<div class="attachmenticon">
							<img src="{{url('img/file.png')}}">
						</div>
						<div class="darkmodeflag attachmentstats">
							<p class="attachmenttitle darkmodeflag texts">Blabla.pdf</p>
							<p class="attachmentsize darkmodeflag texts">745 KB</p>
						</div>
					</div>
				</div>
			</div>
			<div class="darkmodeflag reply">
				<textarea id="replyarea" class="replyarea darkmodeflag texts" placeholder="Enter your reply" maxlength="150" onkeydown="countchar()" onchange="countchar()" onkeyup="countchar()"></textarea>
				<img class="darkmodeflag blackimg" src="{{url('img/send.png')}}">
				<span id="charlimit" class="charlimit">0/150</span>
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

function toggletab(id){
	document.getElementById(id).classList.add('selected');
	if(id == "tab1"){
		document.getElementById("tab2").classList.remove('selected');
		document.getElementById("tab3").classList.remove('selected');
	}else if(id == "tab2"){
		document.getElementById("tab1").classList.remove('selected');
		document.getElementById("tab3").classList.remove('selected');
	}else{
		document.getElementById("tab1").classList.remove('selected');
		document.getElementById("tab2").classList.remove('selected');
	}
}

function changesort(){
	var sort = document.getElementById('sort');
	if(sort.innerHTML == "Recent"){
		sort.innerHTML = "Alphabet";
	}else{
		sort.innerHTML = "Recent";
	}
}

function starmail(){
	var star = document.getElementById('star');
	if(star.src.includes("star.png")){
		star.src = "starfill.png";
	}else{
		star.src = "star.png";
	}
}

function selecttab(element){
	var tabs = document.getElementsByClassName('detailstab');
	for(var x = 0; x < tabs.length; x++){
		tabs[x].classList.remove('selected');
	}
	element.classList.add('selected');
}

function countchar(){
	var input = document.getElementById('replyarea');
	var length = input.value.length;
	var charcount = document.getElementById('charlimit');
	charcount.innerHTML = length+"/150";
}

function back(){
    location.href="{{url('/login')}}";
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
</script>
</html>