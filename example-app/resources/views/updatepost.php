<!DOCTYPE html>
<html>
<head>
	<title>Upload a Post</title>
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

.body{
	background: #e5e5e5;
	width: 100%;
	height: auto;
	padding: 50px 120px;
}

.previewimg{
	margin-top: 100px;
	width: 100%;
	height: 400px;
	text-align: center;
}

.previewimg img{
	width: auto;
	height: 100%;
}

.filldetails .leftside, .filldetails .rightside{
	flex: 1;
}

.filldetails .leftside input{
	border: 2px solid #7C83FD;
	border-radius: 10px;
	background: none;
	padding: 10px;
	font-size: 14px;
	width: 100%;
}

.filldetails .leftside{
	margin-right: 15px;
}

.filldetails .rightside{
	margin-left: 15px;
}

.filldetails .leftside table{
	width: 100%;
	height: 326px;
	margin-bottom: 40px;
}

.filldetails .leftside table tr .paddingbottom{
	padding-bottom: 20px;
	position: relative;
}

textarea{
	width: 100%;
	height: 200px;
	background: none;
	border-radius: 10px;
	border: 2px solid #7C83FD;
	resize: none;
	padding: 10px;
	font-size: 14px;
	padding-bottom: 30px;
}

.textareacontainer{
	position: relative;
}

textarea:focus{
	outline: none;
}

.charlimit{
	font-size: 12px;
	position: absolute;
	bottom: 30px;
	left: 10px;
	color: grey;
}

.tdtitle{
	vertical-align: top;
	padding-top: 12px;
}

.genrescontainer{
	width: 100%;
	height: 269px;
	border: 2px solid #7C83FD;
	border-radius: 10px;
	padding: 20px;
	overflow: hidden;
	overflow-y: scroll;
	padding-right: 10px;
}

.genresrow{
	display: flex;
	margin-bottom: 20px;
}

.genre{
	border: 2px solid #d4d4d4;
	border-radius: 10px;
	padding: 10px;
	flex: 1;
	height: 80px;
	text-align: center;
	line-height: 52px;
	position: relative;
	overflow: hidden;
}

.genre:hover{
	cursor: pointer;
}

.genre.marginright{
	margin-right: 20px;
}

.genre:before{
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
	background-image: url('animals.jpg');
}

#button2:before{
	background-image: url('cartoon.jpg');
}

#button3:before{
	background-image: url('coding.jpg');
}

#button4:before{
	background-image: url('digitalart.jpg');
}

#button5:before{
	background-image: url('drawing.jpg');
	background-position: 50% 50%;
}

#button6:before{
	background-image: url('foods.jpg');
}

#button7:before{
	background-image: url('game.jpg');
}

#button8:before{
	background-image: url('gamedesign.jpg');
}

#button9:before{
	background-image: url('horror.jpg');
}

#button10:before{
	background-image: url('infographics.jpg');
}

#button11:before{
	background-image: url('modern.jpg');
} 

#button12:before{
	background-image: url('nature.jpg');
}

#button13:before{
	background-image: url('photography.jpg');
}

#button14:before{
	background-image: url('scifi.jpg');
}

#button15:before{
	background-image: url('sketch.jpg');
	background-position: 50% 50%;
}

#button16:before{
	background-image: url('technology.jpg');
}

#button17:before{
	background-image: url('webdesign.jpg');
}

#button18:before{
	background-image: url('wildlife.jpg');
}

.colored{
	border: 2px solid #7C83FD;
	color: #7C83FD !important;
}

.genresrow .genre span{
	font-weight: bold;
	font-size: 16px;
    position: relative;
}

.toppart{
	height: auto;
	display: flex;
}

.trtextarea{
	height: 100%;
}

input[type="file"] {
    display: none;
}

.inputfile{
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}

.inputfile img{
	width: 51px;
	height: 51px;
	border: 2px solid #7C83FD;
	border-radius: 10px;
	padding: 8px;
	position: relative;
	bottom: -3px;
}

.postimage .inputreadonly{
	border: 2px solid #7C83FD;
	border-radius: 10px;
	background: none;
	padding: 10px;
	font-size: 14px;
	width: 100%;
	height: 50px;
}
.postimage, .bottompart button{
	flex: 1;
}

.postimage{
	margin-right: 15px;
}

.bottompart button{
	margin-left: 15px;
	padding: 0;
	border-radius: 10px;
	border: 2px solid #7C83FD;
	background: #7C83FD;
	font-size: 20px;
	font-weight: bold;
	height: 50px;
}

.bottompart button:hover{
	cursor: pointer;
}

.bottompartflex, .postimageflex{
	display: flex;
	align-items: center;
}

.switch {
	position: absolute;
	left: 44%;
	bottom: 0;
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

.archive{
	position: relative;
}

.archivetext{
	padding-bottom: 6px;
}

.projecttitle{
	position: relative;
	top: -2.5px;
}

.genre.darkmode{
	color: white;
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
	<div class="darkmodeflag body">
		<div class="previewimg">
			<img id="imgpreview" src="preview.png">
		</div>
		<div class="filldetails">
			<div class="toppart">
				<div class="leftside">
					<div class="postingdetails">
						<h2 class="darkmodeflag texts">Post Details</h2>
						<table>
							<tr class="projecttitle">
								<td class="darkmodeflag texts paddingbottom">Post Title</td>
								<td class="paddingbottom"><input class="darkmodeflag texts" type="text" name="title" placeholder="Input your title here"></td>
							</tr>
							<tr>
								<td class="darkmodeflag texts paddingbottom tdtitle">Post Description</td>
								<td class="paddingbottom textareacontainer"><textarea id="replyarea" class="darkmodeflag texts replyarea darkmodeflag texts" placeholder="Input your description here" maxlength="300" onkeydown="countchar()" onchange="countchar()" onkeyup="countchar()"></textarea><span id="charlimit" class="charlimit">0/300</span></td>
							</tr>
							<tr class="archive">
								<td class="darkmodeflag texts archivetext">Archive this post?</td>
								<td>
									<label class="switch">
										<input type="checkbox" onclick="toggleAutoScroll()">
										<span class="slider round"></span>
									</label>
								</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="rightside">
					<h2 class="darkmodeflag texts">Post Genres</h2>
					<div class="genrescontainer">
						<div class="genresrow">
							<div id="button1" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Animals</span>
							</div>
							<div id="button2" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Cartoon</span>
							</div>
							<div id="button3" class="darkmodeflag genre" onclick="togglecolor(this)">
								<span>Coding</span>
							</div>
						</div>
						<div class="genresrow">
							<div id="button4" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Digital Art</span>
							</div>
							<div id="button5" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Drawing</span>
							</div>
							<div id="button6" class="darkmodeflag genre" onclick="togglecolor(this)">
								<span>Foods</span>
							</div>
						</div>
						<div class="genresrow">
							<div id="button7" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Game</span>
							</div>
							<div id="button8" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Game Design</span>
							</div>
							<div id="button9" class="darkmodeflag genre" onclick="togglecolor(this)">
								<span>Horror</span>
							</div>
						</div>
						<div class="genresrow">
							<div id="button10" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Infographics</span>
							</div>
							<div id="button11" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Modern</span>
							</div>
							<div id="button12" class="darkmodeflag genre" onclick="togglecolor(this)">
								<span>Nature</span>
							</div>
						</div>
						<div class="genresrow">
							<div id="button13" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Photography</span>
							</div>
							<div id="button14" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Sci-Fi</span>
							</div>
							<div id="button15" class="darkmodeflag genre" onclick="togglecolor(this)">
								<span>Sketch</span>
							</div>
						</div>
						<div class="genresrow">
							<div id="button16" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Technology</span>
							</div>
							<div id="button17" class="darkmodeflag genre marginright" onclick="togglecolor(this)">
								<span>Web Design</span>
							</div>
							<div id="button18" class="darkmodeflag genre" onclick="togglecolor(this)">
								<span>Wildlife</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottompart">
				<h2 class="darkmodeflag texts">Image File</h2>
				<div class="bottompartflex">
					<div class="postimage">
						<div class="postimageflex">
							<input id="inputreadonly" class="darkmodeflag inputreadonly" type="text" placeholder="Insert your file using the button on the right" readonly>
							<label class="inputfile">
							    <input type="file" name="uploadpost" onchange="setfilename(this.value)">
							    <img src="folder.png">
							</label>
						</div>
					</div>
					<button class="darkmodeflag texts">
						Update Post
					</button>
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

function countchar(){
	var input = document.getElementById('replyarea');
	var length = input.value.length;
	var charcount = document.getElementById('charlimit');
	charcount.innerHTML = length+"/300";
}

function togglecolor(button){
	button.classList.toggle('colored');
}

function setfilename(filename){
	f = filename.replace(/.*[\/\\]/, '')
	document.getElementById('inputreadonly').value = f;
	document.getElementById('imgpreview').src = f;
}
</script>
</html>