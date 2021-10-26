<style type="text/css">
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