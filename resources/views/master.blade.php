<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	vertical-align: baseline;
    box-sizing: border-box;

}

html {
	scroll-behavior: smooth;
	margin: 0;
	padding: 0;
	border: 0;
}

body {
    font-size: 15px;
    line-height: 1.5;
	font-family: "Lato", sans-serif;


}
 ul {
	list-style: none;
}

a {
	text-decoration: none;
}

.clear {
	clear: both;
}

.text-white{
	color: white !important;
}

/* https://fontawesome.com/v4.7/icons/ */
/* ============================================================== */

.row {
	margin-left: -8px;
	margin-right: -8px;
}

.col {
	float: left;
	padding: 0 8px;
}

.col-3 {
	width: 33.333333%;
}

.col-2 {
	width: 50%;
}

.col-full {
	width: 100%;
}

.text-center {
	text-align: center;

}

.m-t-16 {
	margin-top: 16px;
}

#main {
	width: 100%;
	padding: 0;
	margin: 0;

}


#header {
	background-color: black;
	width: 100%;
	height: 48px;
	position: fixed;
	top: 0;
	z-index: 1;

}
#main {
    margin-top: 48px;
}

.nav{
	display: inline-block;
	
} 

.nav  li {
	display: inline-block;
	position: relative;
	
}

.nav > li > a{
	text-transform: uppercase;
}


.nav  li a {
	color: #fff;
	line-height: 48px;
	padding: 0px 24px;
	display: block;
	

}

.cusss{
	color: rgb(0, 0, 0);
	line-height: 38px;
	padding: 0px 18px;
	display: block;
	
	
}

.cusss:hover{
	background-color: #ccc;
	color: #000;
}

.nav > li:hover > a,
.sub-nav li:hover  a {
	background-color: #ccc;
	color: #000;

}


.sub-nav  {
	display: none;
	position: absolute;
	background-color: #fff;
	box-shadow: 1px 1px 10px 8px rgba(0, 0, 0, .2);
}

.nav li:hover .sub-nav{
	display: block;	
	}

.sub-nav li{
display: block;
min-width: 190px;

}

.sub-nav  li a  {
	color: #000;
	line-height: 38px;
	padding: 0 16px;
}

#header .header-menu,
#header .header-search{
	float: right;	
}

#header .header-search{
	margin-top: -56px ;	
}

#header .header-menu {
	position: absolute;
	top: 0;
	right: 0;
}

#header .header-menu {
	display: none;
}

#header .header-menu i,
#header .header-search i{
color: rgb(255, 255, 255);
padding: 0 21px;
line-height: 48px;

}

#header .header-menu:hover i {
	background-color: #ccc;
	color: #000;
}

#header .header-search:hover i{
	background-color: #f44336;
	cursor: pointer;	
}



#silder .text-content { 
	position: absolute;
	color: #fff;
	bottom: 48px;
	width: 100%;
	text-align: center;

}

#silder .text-heading {
	font-weight: 500;
	font-size: 24px;
	margin-bottom: 15px;
}

#silder .text-description {
	font-weight: 600;

}
#content {


}

#content .content-section {
	max-width: 800px;
	margin: auto;
	padding: 64px 0 112PX;

	padding-left: 16px;
	padding-right: 16px;

	

}

#content .section-heading {
	font-weight: 500;
	font-size: 30px;
	text-align: center;
	letter-spacing: 4px;

}
#content .sub-heading {
	text-align: center;
	margin: 15px 0;
	opacity: 0.8;
	font-style: italic;


}

#content .about-text {
	text-align: justify;
	line-height: 1.4;
}

.member-name{
	margin-top: 48px;
}

#content .img-member {
	margin-top: 15px;
	width: 60%;
	border-radius: 4%;
}


#content  .tour-section {
	background-color: #000;
}

#content .tickets-list {
	margin-top: 40px;
	background-color: white;
}

.tickets-list li {
	padding: 12px 16px;
	border-bottom: 1px solid #ddd;
	color:#757575;

}

.tickets-list .sold-out {
	background-color: #f44336;
	padding: 3px 4px;
	color: white;
	margin-left: 16px;
}

.tickets-list .quantity {
	background-color: #000000;
	padding: 2px 10px;
	color: white;
	float: right;
	border-radius: 100%;
	margin-right: 16px;

}

.place-list {
	margin-top: 16px;

}

.place-img {
	width: 100%;
	display: block;

}

.place-img:hover {
	opacity: 0.6;

}

.place-content {
	background-color: #fff;
	padding: 16px;
}

.place-heading {

}

.place-time {
	margin-top: 15px;	
	color: #757575;
}

.place-decs {
	margin-top: 15px;
	line-height: 1.4;
}

.place-btn  {
	margin-top: 15px;
	display: block;
	padding: 10px 21px;
	background-color: #000;
	color: #fff;
}

.place-btn a:hover {
	background-color: #ccc;
	color: #000;
}

.fomt-control {

	padding: 11px;
    margin: 4px 0px;
}

.content-section input{
	width: 100%;
	border: #ccc 1px solid;
}

.content-section i[class*="fa-"] {
	width: 24px;
	display: inline-block;
}

.contact-infor {
	font-size: 18px;
	line-height: 1.6;
}

.contact button {
 border: none;
 padding: 10px 21px;
 background-color: #000;
 color: #fff;
 float: right;
 margin-top: 10px;

}

.contact button:hover  {
	background-color: #ccc;
	color: rgb(0, 0, 0);
	cursor: pointer;
}

.contact-fomt,
.contact-infor {
	margin-top: 48px;
}

.map-section img {
	width: 100%;
	filter: grayscale(50%);
}
#footer {
	padding: 64px 16px;
	text-align: center;

}

#footer .socials-list {
	font-size: 24px;
	
}

#footer a{
	color:rgb(122, 122, 122);
}

#footer p {
	margin-top: 15px;
	color:rgb(122, 122, 122);
}

#footer p > a{
	text-decoration: underline;
}

.login-signup{
	display: flex;
	flex-direction: row-reverse;
	margin-top:  -56px;
	margin-right: 56px; ;
	z-index: 3;

}

/* ============================ */
.header-Login,
.header-Signup,
.header-logOut{
	margin: 10px;
	color: rgb(255, 255, 255);
	line-height:46px;
	
}

.modal-login{
    display: none;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(104, 104, 104, 0.3);
}

.modal-container{
    /* max-width: 500px; */
    color: #aaa;
    /* background-color: #fff; */
    margin: 150px auto 0;
    position: relative;
}

.display-block{
	display: block
}

.colse-modal {
    position: absolute;
    right: 0;
    top: 0;
    padding: 8px;
    z-index: 1;
}

.colse-modal:hover {
    background-color:#ff3838;
    color:#fff
}


/* ================================== */

a{color:inherit;text-decoration:none}

.login-wrap{
	width:460px;
	margin:auto;
	max-width:460px;
	min-height:670px;
	position:relative;
	background:url(https://images.unsplash.com/photo-1546636889-ba9fdd63583e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fDEybW18ZW58MHx8MHx8&ixlib=rb-1.2.1&w=1000&q=80) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(28, 47, 58, 0.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#000000;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#000000;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}

.customLogn{
    width: 100%;
    text-align: center;
}

.modal-tickets .col-two{
	width: 62.66%;
	/* height: 510px; */
	overflow-x: hidden;
	overflow-y: auto;
	padding-top: 20px;
	padding-bottom: 20px;
	margin: 0px 10px 0 20px;
}
.modal-tickets .col-one{
	width: 32.33%;
	padding: 20px 0 5px 30px;
	
	
}

.modal-tickets {
	position: relative;
    background: rgb(0, 0, 0);
    /* width: 800px; */
	max-width: 800px;
    margin: 0 auto;
	color: rgb(221, 221, 221);
	/* padding:10px ; */
}

.modal-tickets img {
	margin-bottom: 14px;
   	width: 100%;
}



 .modal-tickets  .infor2{
	margin-bottom: 20px;
	background-color:#fff;
	color:#000;
	padding:10px
 }

 .modal-tickets h2{
	margin-bottom: 10px;
}

 .modal-tickets .warningP{
	 color: rgb(241, 35, 35);
 }

.modal-tickets  .box{
	background-color:rgb(215, 245, 231);
	margin: 8px;
	padding: 8px;
}

.clear-mg-bottom{
	margin-bottom:0 !important;
}
.height-510{
	height:467px
}

.postage-info{
	text-align:justify;
	padding-top:10px ;
}

.postage-price {
	color: rgb(4, 114, 77);
	font-weight: 400;
}

p.countdown-time, p#time-add,p.ticket-num,p.ticket-na {
    display: initial;
}

.col.col-two.height-510 {
	
		margin-right: 20px;
		margin-top: 22px;
		padding-top: 0px;
	
}
.mg-10{
	margin: 10px 0;
}

.img-payment{
	display: inline-block;
}

.col-cus{
	width: 33.33333%;
	text-align: center;
}
.flex-1{

	flex:1;
}

.nut{
	margin: auto;
}

.pBox{
	display: inline-block;
	width: 82%;
}

.lightH {
    line-height: 54px;
}
.img-payment img{
	margin: 0;
}

.modal-tickets button{
	padding: 10px 20px;
	border: solid 1px #000;
}
/* ============================= */
/* width */
::-webkit-scrollbar {
	display: none;
	/* position: relative; */
	top: 120px;
	width: 6px;
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
	background: #f1f1f1; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
	background: #888; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
	background: #555; 
  }



 
/* ----------------------------------------- */





/* liiii */
body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background: white;
}

.slider-content {
    width: 100%;
    height: auto;
    overflow: hidden;
}

.slides-content {
    width: 500%;
    height: auto;
    display: flex;
}

.slides-content input {
    display: none;
}

.slide-content {
    width: 20%;
    transition: 2s;
}

.slide-content img {
    width: 100%;
    height: auto;
}

.navigation-manual {
    position: absolute;
    width: 100%;
    margin-top: -40px;
    display: flex;
    justify-content: center;
}

.manual-btn {
    border: 2px solid white;
    padding: 5px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
}

.manual-btn:not(:last-child) {
    margin-right: 40px;
}

.manual-btn:hover {
    background: white;
}

#radio1:checked~.first {
    margin-left: 0;
}

#radio2:checked~.first {
    margin-left: -20%;
}

#radio3:checked~.first {
    margin-left: -40%;
}

#radio4:checked~.first {
    margin-left: -60%;
}

.navigation-auto {
    position: absolute;
    display: flex;
    width: 100%;
    justify-content: center;
    margin-top: -40px;
}

.navigation-auto div {
    border: 2px solid white;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
}

.navigation-auto div:not(:last-child) {
    margin-right: 40px;
}

#radio1:checked~.navigation-auto .auto-btn1 {
    background: white;
}

#radio2:checked~.navigation-auto .auto-btn2 {
    background: white;
}

#radio3:checked~.navigation-auto .auto-btn3 {
    background: white;
}

#radio4:checked~.navigation-auto .auto-btn4 {
    background: white;
}

@media only screen and (max-width:300px) {
    .manual-btn {
        height: 3px;
        width: 3px;
    }
}
/* =-------------- */

#time-add{
    color: rgb(240, 38, 38);
    font-weight: 600;
}

.time-asdress{
    margin-bottom: 10px;
}

/* --------------------------- nmomo */
.momo {
    /* width: 800px; */
    max-width: 800px;
    margin: 0 auto;
    background-color: rgb(253, 253, 253);
    padding: 20px;
	color: rgb(27, 27, 27);

    
}
.momo h2{
 padding-top:30px ;
}
.momo h2,
.momo h3 {
    text-align: center;
    margin: 0;

}

.row-m-m{
	display: flex;
    flex-wrap: wrap;

}
.row-m-m .col-mmm{
	width: 50%;
    position: relative;
    
}

.col-mmm img{
	width: 100%;
}
.momo .infor{
    padding: 10px;

}
.boxBorder{
    border: solid 2px rgb(0, 0, 0);
    padding:10px;
    margin-bottom: 20px;

}

.btn-pay{
    color: #fff;
    background-color: #000;
    border: none;
    padding: 10px 20px;
    position: absolute;
    bottom: 10px;
    right: 10px;
	
}


/* --------------------------------- */
    </style>
    <div id="main">

        <div id="header">
            <ul class="nav">
                <li><a href="">Home</a></li>
                <li><a href="#Band">Band</a></li>
                <li><a href="#Tour">Tour</a></li>
                <li><a href="#Contact">Contact</a></li>
                <li>
                    <a href="#">More <i class="white-text more-icon fas fa-caret-down" aria-hidden="true"></i> </a>
                    <ul id="sub-nav-id" class="sub-nav">
                        <li class="cusss" onclick="openLog()"> Signup</li>
                        <li class="cusss" onclick="logOut()">Logout</li>
                        <li><a href="#music">Media</a></li>
                   </ul>
                </li>


            </ul>        
         
            <div class="header-search"><i class="fa fa-user-circle-o" aria-hidden="true"></i></div>

            <div id="menu-mobile" class="header-menu"><i class="fa fa-bars" aria-hidden="true"></i></div>

        </div>

        @yield('content')

    
       
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        
        <div class="col-3 col mobile-item m-t-16">
        <img src="undefined" alt="New York" class="place-img">
        <div class="place-content">
            <h3 class="place-heading">undefined</h3>
            <p class="place-time">undefined</p>
            <p class="place-decs">undefined</p>
            <button onclick="openModalBuyTickets()" class="place-btn">Buy ticket</button>
        </div>
    </div>
        
        </div>
                </div>
                
            </div>

            <!-- CONTACT -->
            <div id="Contact" class="contact  content-section">
                <h2 class="section-heading">CONTACT</h2>
                <p class="sub-heading">Fan? Drop a note!</p>

                <div class="row ">
                    <div class="col col-2 contact-infor mobile-item ">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Chicago, US</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i>Phone: +00 151515</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i>Email: TheMBand@gmail.com</p>

                    </div>

                   
                    <form class="col col-2 contact-fomt mobile-item ">
                        <div class="row fomt">
                            <div class="col col-2 mobile-item ">
                                <input class="fomt-control" type="text" required="" placeholder="Name" name="" id="name">
                            </div>

                            <div class="col col-2 mobile-item ">
                                <input class="fomt-control" type="text" required="" placeholder="Email" name="" id="email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col col-full">
                                <input class="fomt-control col-full " type="text" required="" placeholder="Messenger" name="" id="mess">

                            </div>
                        </div>
                        <button type="button" onclick="addC()">Send</button>

                    </form>
                </div>

            </div>

            <div id="music" class="tour-section">
                <div class="content-section">
                    <h2 class="section-heading text-white">US MUSIC</h2>
                    <p class="sub-heading text-white">Take a little music and feel with us!</p>
                <iframe src="https://open.spotify.com/embed/playlist/37i9dQZF1DZ06evO3DbIU8?utm_source=generator&amp;theme=0" width="100%" height="380" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </div>
        </div>


        </div>

        <div id="footer">
            <div class="socials-list">
                <a onclick="chau()" href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-snapchat-square" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href=""><i class="fa fa-linkedin" aria-hidden="true"></i></a>   
            </div>
            
          

        </div>
    </div>

    <div class="modal-login">
        <div class="modal-container">
            <div class="add-content">herr</div>
        </div>
    </div>
    
<!-- Messenger Plugin chat Code -->
<div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div><div class=" fb_iframe_widget fb_invisible_flow" fb-iframe-plugin-query="app_id=&amp;attribution=biz_inbox&amp;container_width=0&amp;current_url=https%3A%2F%2Ftailinhpn.github.io%2FThe-Band%2F&amp;is_loaded_by_facade=true&amp;local_state=%7B%22v%22%3A1%2C%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%2C%22shouldShowLoginPage%22%3Afalse%7D&amp;locale=en_US&amp;log_id=3e916e2f-4b0b-48e3-9f29-7c68b18e055b&amp;page_id=105312208706371&amp;request_time=1655348355618&amp;sdk=joey"><span style="vertical-align: bottom; width: 1000px; height: 0px;"><iframe name="f26ce08ae972998" width="1000px" height="1000px" data-testid="dialog_iframe" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customerchat.php?app_id=&amp;attribution=biz_inbox&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df7214bbc49b5ec%26domain%3Dtailinhpn.github.io%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Ftailinhpn.github.io%252Ff24742ad1030f5c%26relation%3Dparent.parent&amp;container_width=0&amp;current_url=https%3A%2F%2Ftailinhpn.github.io%2FThe-Band%2F&amp;is_loaded_by_facade=true&amp;local_state=%7B%22v%22%3A1%2C%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%2C%22shouldShowLoginPage%22%3Afalse%7D&amp;locale=en_US&amp;log_id=3e916e2f-4b0b-48e3-9f29-7c68b18e055b&amp;page_id=105312208706371&amp;request_time=1655348355617&amp;sdk=joey" style="padding: 0px; position: fixed; z-index: 2147483646; border-radius: 16px; top: auto; background: none; width: 399px; bottom: 84px; max-height: 0px; right: 16px; visibility: visible;" class=""></iframe></span></div><div class="fb_dialog  fb_dialog_advanced" alignment="right" desktop_bottom_spacing="24"><div class="fb_dialog_content"><iframe name="blank_f26ce08ae972998" width="60px" tabindex="-1" data-testid="bubble_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="background: none; border-radius: 60px; bottom: 24px; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px; display: block; height: 60px; margin: 0px 12px; overflow: visible; padding: 0px; position: fixed; right: 12px; top: auto; width: 60px; z-index: 2147483644;"></iframe><iframe name="availabilityStatus_f26ce08ae972998" tabindex="-1" data-testid="availabilityStatus_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="border-radius: 50%; bottom: 21.5px; height: 15px; position: fixed; right: 24px; width: 15px; z-index: 2147483646;"></iframe><iframe name="unread_f26ce08ae972998" tabindex="-1" data-testid="unread_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="background: none; border-radius: 4pt; bottom: 68px; height: 24px; position: fixed; right: 22px; width: 20px; z-index: 2147483645;"></iframe><iframe name="greeting_f26ce08ae972998" tabindex="-1" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v12.0/plugins/customer_chat/bubble" style="border: none;"></iframe></div></div></div>

<!-- Your Plugin chat code -->


<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "105312208706371");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

    <!-- Your SDK code -->
    <script>
    window.fbAsyncInit = function() {
        FB.init({
        xfbml            : true,
        version          : 'v12.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>



<script>
    var headerElement = document.getElementById('header');
    var menuElement = document.getElementById('menu-mobile');
    var menuHight = headerElement.clientHeight;
    
    menuElement.onclick = function() {
        var isClosed = headerElement.clientHeight === menuHight
        if (isClosed) {
            headerElement.style.height = 'auto'
        } else {
            headerElement.style.height = null
        }
    }            

    var count = 0    
    var menuItems = document.querySelectorAll('.nav li a[href*="#"]')
    
    var subNav = document.getElementById('sub-nav-id');
    
    for (var i = 0; i < menuItems.length; i++) {
        var menuItem = menuItems[i];
       


        menuItem.onclick = function(event) {
        var isParentMenu = this.nextElementSibling && this.nextElementSibling.classList.contains('sub-nav')

            if (isParentMenu) {
                event.preventDefault()
                count += 1
                console.log(count)

            } else {
                headerElement.style.height = null 
                                  
            }

            if (count % 2 === 0) {
                subNav.style.display = 'none'
            } else {
                subNav.style.display = null

            }
            
            

            
        }


    }
    
    
    

</script>

<script type="text/javascript">
    var counter = 1;
    setInterval(function () {
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if (counter > 4) {
            counter = 1;
        }
    }, 4000);
</script>

<script>
const apiUrl = "https://61bc10bed8542f0017824526.mockapi.io/menuContact";

function postC(data) {
    axios.post(apiUrl, data).then(res => console.log(res.data));
}

function addC() {

    var nameC = document.getElementById('name').value;
    var emailC = document.getElementById('email').value;
    var messC = document.getElementById('mess').value;

    data = {
        name: nameC,
        email: emailC,
        message: messC,

    }
    postC(data)
}
</script>

<!-- <script src="./main.js"></script> -->
    


</body>
</html>