<!DOCTYPE html>
<html>
<head>
	<title>Futuristic Bridge</title>
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

.header.darkmode{
	background: #1c1d1e;
}

.content{
	display: flex;
	padding: 30px;
}

.content.landscape .leftside{
	flex: 7;
	overflow-x: hidden;
	overflow-y: scroll;
	padding-right: 15px;
	height: 700px;
	padding-bottom: 300px;
}

.content.landscape #post{
	width: 100%;
	border-radius: 10px;
}

.posttitle{
	font-size: 24px;
	font-weight: bold;
}

.postcreator{
	margin: 10px 0 30px 0;
}

.postcreator img{
	width: 40px;
	height: 40px;
	border-radius: 50%;
	margin-right: 10px;
}

.postcreator p{
	display: inline;
	position: relative;
	top: -14px;
}

.poststats{
	position: relative;
}

.content.landscape .postlikes{
	position: absolute;
	right: 0;
	top: 0;
	display: inline;
	display: flex;
	align-items: center;
	justify-content: center;
}

.content.landscape .postlikes span{
	margin-right: 10px;
}

.likebutton{
	width: 140px;
	height: 40px;
	position: relative;
}

.likebutton button{
	width: 100%;
	height: 100%;
	background: #AA332A;
	border: none;
	border-radius: 10px;
	font-size: 16px;
	text-align: left;
	padding: 0 20px;	
}

.likebutton img{
	width: 28px;
	height: 28px;
	position: absolute;
	right: 20px;
	top: 6px;
}

.postgenres{
	margin-bottom: 20px;
}

.postgenres .genre{
	border: 2px solid #7C83FD;
    border-radius: 5px;
    padding: 6px;
    font-weight: bold;
    margin: 0 10px 0 0;
    display: inline-block;
}

.postdescription{
	margin: 30px 0;
}

.postdescription .desc{
	font-size: 15px;
    width: 100%;
    color: #353639;
    word-wrap: break-word;
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

.border{
	border: 1px solid #7C83FD;
	margin-left: 15px;
}

.content.landscape .rightside{
	flex: 3;
	overflow-y: scroll;
	direction: rtl;
	margin-left: 15px;
	padding: 0 15px;
	height: 700px;
	padding-bottom: 300px;
}

.rightsidecontainer{
	direction: ltr;
}

.rightsidecontainer p{
	font-size: 24px;
	font-weight: bold;
	margin: 10px 0;
}

.rightside .smallpostimg{
	width: 100%;
	border-radius: 10px;
}

.smallpost{
	position: relative;
	width: 100%;
	margin-bottom: 20px;
}

.smallpostdetails{
	position: absolute;
    bottom: 4px;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    background: rgba(21,21,22,0.6);
    width: 100%;
    height: 40px;
    color: white;
    font-size: 20px;
    padding: 8px 16px;
}

.smallpoststats{
	float: right;
}

.smallpoststats img{
	width: 20px;
    height: 20px;
    vertical-align: middle;
    position: relative;
    margin-left: 10px;
    top: -2px;	
}

.smallposttitle{
	width: 180px;
	display: inline-block;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.darkmode.texts{
	color: white;
}

.darkmode.blackimg{
	filter: invert(1);
}

a{
	color: #7C83FD;
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

.content.landscape{
	display: flex;
}

.content.portrait{
	display: none;
}

.content.portrait .postfull{
	display: flex;
}

.content.portrait .leftsidepost, .content.portrait .rightsidepost{
	flex: 1;
}

.content.portrait .leftsidepost{
	margin-right: 20px;
}

.postfull{
	position: relative;
}

.content.portrait .leftsidepost img{
	width: 100%;
	height: auto;
}

.content.portrait .postlikes{
    position: absolute;
    right: 0;
    bottom: 0;
    display: inline;
    display: flex;
    align-items: center;
    justify-content: center;
}

.content.portrait .postlikes span{
	margin-right: 10px;
}

.content.portrait .leftside{
	flex: 10;
	overflow-x: hidden;
	overflow-y: scroll;
	padding-right: 15px;
	height: 700px;
	padding-bottom: 300px;
}

.content.portrait .rightside{
	flex: 4;
	overflow-y: scroll;
	direction: rtl;
	margin-left: 15px;
	padding: 0 15px;
	height: 700px;
	padding-bottom: 300px;
}

.content.portrait .rightside .smallposttitle{
	font-size: 14px;
	width: 50%;
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
            <p><img src="{{url('img/info.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="about.php">About Us</a></p>
        </div>
    </div>
   <div id="headerreal" class="darkmodeflag header real">
		<img src="{{url('img/hamburger.png')}}" class="hamburger openbtn" onclick="openNav()" title="Open sidebar menu">  
		<img id="logo" src="{{url('img/portovoir.png')}}" title="Portovoir">
		<div class="search">
			<input class="darkmodeflag" id="searchbar" type="text" name="search" placeholder="Search">
			<img id="searchlogo" src="{{url('img/search.png')}}">
		</div>
		<div class="headerbuttons notlogged">
			<img class="inbox" src="{{url('img/inbox.png')}}" title="Inbox" onclick="toggleinbox()">
			<button class="darkmodeflag texts buttons login">Login</button>
			<button class="darkmodeflag texts buttons register">Register</button>
		</div>
		<div class="headerbuttons logged">
			<img class="inbox" src="{{url('img/inbox.png')}}" title="Inbox" onclick="toggleinbox()">
			<button class="darkmodeflag texts buttons logout">Log out</button>
			<img id="profile" src="{{url('img/profile.jpg')}}" onclick="location.href = 'pro'">
		</div>
		<div id="inboxbox" class="inboxbox darkmodeflag">
			<div class="emptylogo">
				<img src="{{url('img/inboxempty.png')}}">
				<p class="darkmodeflag texts">Your inbox is empty</p>
			</div>
			<div class="messages">
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
			</div>
			<button onclick="location.href = 'mailmanagement.php'" class="viewall darkmodeflag texts">View All Messages</button>
		</div>
	</div>
	<div class="content landscape">
		<div class="leftside">
			<div class="postdetail">
				<img id="post" src="{{url('img/post3.jpg')}}">
				<div class="poststats">
					<p class="posttitle darkmodeflag texts">Futuristic Bridge</p>
					<div class="postcreator">
						<img src="{{url('img/profile.jpg')}}">
						<p><span class="darkmodeflag texts">By</span> <a href="">@Lorem</a></p>
					</div>
					<div class="postlikes">
						<span class="darkmodeflag texts">2 likes</span>
						<div class="likebutton">
							<button class="darkmodeflag texts">Like</button>
							<img src="{{url('img/heart.png')}}">
						</div>
					</div>
				</div>
				<div class="postgenres">
					<span class="darkmodeflag texts">Genres :</span>
					<span class="darkmodeflag texts genre">Genre</span>
					<span class="darkmodeflag texts genre">Genre</span>
					<span class="darkmodeflag texts genre">Genre</span>
				</div>
				<div class="postdescription">
					<span class="darkmodeflag texts">Description :</span>
					<p class="darkmodeflag texts desc">TestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtest</p>
				</div>
				<div class="postcomments">
					<span class="darkmodeflag texts">Comments :</span>
					<div class="addcomment">
						<img class="profile" src="{{url('img/profile.jpg')}}">
						<input type="text" name="comment" placeholder="Type your comment">
						<img class="sendimg" src="{{url('img/send.png')}}">
					</div>
					<div class="comment">
						<img src="{{url('img/profile.jpg')}}">
						<div class="commentdetails">
							<span class="darkmodeflag texts username">Vincent</span>
							<p class="darkmodeflag texts commentcontent">loremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmdddddddddddddo</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="border">
		</div>
		<div class="rightside">
			<div class="rightsidecontainer">
				<p class="darkmodeflag texts">Similar Posts :</p>
				<div class="smallpost">
					<img class="smallpostimg" src="{{url('img/profile.jpg')}}">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="{{url('img/post3.jpg')}}">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="{{url('img/post3.jpg')}}">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="{{url('img/post3.jpg')}}">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="{{url('img/post3.jpg')}}">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content portrait">
		<div class="leftside">
			<div class="postfull">
				<div class="leftsidepost">
					<img id="post" src="post1.jpeg">
				</div>
				<div class="rightsidepost">
					<div class="poststats">
						<p class="posttitle darkmodeflag texts">Futuristic Bridge</p>
						<div class="postcreator">
							<img src="profile.jpg">
							<p><span class="darkmodeflag texts">By</span> <a href="">@Lorem</a></p>
						</div>
						<div class="postgenres">
							<span class="darkmodeflag texts">Genres :</span>
							<span class="darkmodeflag texts genre">Genre</span>
							<span class="darkmodeflag texts genre">Genre</span>
							<span class="darkmodeflag texts genre">Genre</span>
						</div>
					</div>
				</div>
				<div class="postlikes">
					<span class="darkmodeflag texts">2 likes</span>
					<div class="likebutton">
						<button class="darkmodeflag texts">Like</button>
						<img src="{{url('img/heart.png')}}">
					</div>
				</div>
			</div>
			<div class="postdetail">
				<div class="postdescription">
					<span class="darkmodeflag texts">Description :</span>
					<p class="darkmodeflag texts desc">TestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtestTestloremtest</p>
				</div>
				<div class="postcomments">
					<span class="darkmodeflag texts">Comments :</span>
					<div class="addcomment">
						<img class="profile" src="profile.jpg">
						<input type="text" name="comment" placeholder="Type your comment">
						<img class="sendimg" src="send2.png">
					</div>
					<div class="comment">
						<img src="profile.jpg">
						<div class="commentdetails">
							<span class="darkmodeflag texts username">Vincent</span>
							<p class="darkmodeflag texts commentcontent">loremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmoloremlorelmdddddddddddddo</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="border">
		</div>
		<div class="rightside">
			<div class="rightsidecontainer">
				<p class="darkmodeflag texts">Similar Posts :</p>
				<div class="smallpost">
					<img class="smallpostimg" src="post1.jpeg">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="post1.jpeg">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="post1.jpeg">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="post1.jpeg">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
						</div>
					</div>
				</div>
				<div class="smallpost">
					<img class="smallpostimg" src="post1.jpeg">
					<div class="smallpostdetails">
						<span class="smallposttitle">Futuristic Bridgeddddddddddd</span>
						<div class="smallpoststats">
							<img src="{{url('img/heart.png')}}">
							<span>10k</span>
							<img class="smallpostcomment" src="{{url('img/comment.png')}}">
							<span>10k</span>
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