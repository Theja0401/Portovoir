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

.content{
    height: 100%;
    padding: 10px 30px;
}

.border{
    border: 1px solid #7C83FD;
    position: relative;
    right: -15px;
}

.layout12, .layout13, .layout14, .layout22{
    display: flex;
}

.landscape{
    overflow-y: scroll;
    padding-right: 30px;
}

.portrait{
    padding-left: 30px;
    margin-left: 30px;
}

.landscape, .portrait{
    flex: 1;
    height: 700px;
}

.post{
    position: relative;
    margin-bottom: 30px;
}

.postbg{
    width: 100%;
    border-radius: 10px;
}

.postdetails{
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

.poststats img{
    width: 24px;
    height: 24px;
    vertical-align: middle;
    position: relative;
    top: -2px;
}

.landscape .poststats{
    float: right;
}

.landscape .comment{
    margin-left: 20px;
}

.landscape .posttitle{
    float: left;
    width: 60%;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.portrait{
    direction: rtl;
    overflow-y: scroll;
}

.portrait .container{
    direction: ltr;
}

.portrait .posts{
    display: flex;
}

.portrait .leftposts, .portrait .rightposts, .portrait .middleposts, .portrait .middleposts2{
    flex: 1;
}

.portrait .posttitle{
    float: left;
    font-size: 18px;
    width: 260px;
    white-space: nowrap;
    text-overflow: ellipsis;
    overflow: hidden;
}

.portrait .postdetails{
    height: 70px;
}

.portrait .poststats{
    margin-top: 8px;
    float: left;
}

.portrait .comment{
    margin-left: 20px;
}

.portrait .leftposts{
    margin-right: 15px;
}

.portrait .rightposts{
    margin-left: 15px;
}

input.darkmode, .darkmode.texts{
    color: white;
}

.header.darkmode{
    background: #1c1d1e;
}

.posts{
    margin-bottom: 200px;
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

.layout13 .portrait .poststats, .layout14 .portrait .poststats, .layout22 .portrait .poststats{
    margin-top: 4px;
}

.layout12, .layout13, .layout14{
    display: none;
}

.layout13 .landscape{
    flex: 4;
}

.layout13 .portrait{
    flex: 6;
}

.layout14 .landscape{
    flex: 3;
}

.layout14 .portrait{
    flex: 7;
}

.layout14 .middleposts{
    margin-right: 15px;
}

.layout14 .landscape .posttitle{
    font-size: 16px;
    width: 50%;
}

.layout14 .landscape .poststats{
    margin-top: -2px;
}

.layout22 .posts{
    display: flex;
    flex: 1;
}

.layout22 .landscape{
    flex: 6;
}

.layout22 .portrait{
    flex: 3;
}

.layout22 .landscape .leftposts{
    margin-right: 20px;
}

.layout22 .landscape .posttitle{
    width: 55%;
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
    display: flex;
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
<div id="sidebarblack" class="sidebarblack"></div>
    <div id="mySidebar" class="darkmodeflag sidebar">
        <div id="sidebarcontent">
            <a href="javascript:void(0)" class="closebtn darkmodeflag textsspecial" onclick="closeNav()">×</a>
            <p id="borderbottom"><img src="{{url('img/portovoirfull.png')}}"></p>
            <p><img src="{{url('img/home.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="home">Home</a></p>
            <p><img src="{{url('img/gallery.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="myuploads">My Uploads</a></p>
            <p><img src="{{url('img/Categories.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="category">Categories</a></p>
            <div id="downarrowcontainer" onclick="toggleuploads()"><p><img src="{{url('img/upload.png')}}" class="sidebaricon"><a class="darkmodeflag texts">Upload Content</a><img id="downarrow" src="{{url('img/arrow2.png')}}"></p></div>
            <div id="downarrowpopup">
                <p><img src="{{url('img/image.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="upload">Upload Images</a></p>
                <p><img src="{{url('img/blueprint2.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="uploadproject">Upload Projects</a></p>
            </div>
            <p><img src="{{url('img/inbox.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="mail">Mail Page</a></p>
            <p><img src="{{url('img/blueprint.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="projects">Projects</a></p>
            <p><img src="{{url('img/search2.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="jobgenres.php">Search Employees</a></p>
            <p><img src="{{url('img/info.png')}}" class="sidebaricon"><a class="darkmodeflag texts" href="about">About Us</a></p>
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
            <button class="darkmodeflag texts buttons login" onclick="location.href='login'">Login</button>
            <button class="darkmodeflag texts buttons register" onclick="location.href='register'">Register</button>
        </div>
        <!-- <div class="headerbuttons logged">
            <img class="inbox" src="{{url('img/inbox.png')}}" title="Inbox" onclick="toggleinbox()">
            <button class="darkmodeflag texts buttons logout">Log out</button>
            <img id="profile" src="{{url('img/profile.jpg')}}" onclick="location.href = 'profile'">
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