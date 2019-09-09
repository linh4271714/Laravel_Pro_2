<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<style type="text/css">
	#nav,#nav ul {
    list-style: none outside none;
    margin: 0;
    padding: 0;
}
#nav {
    font-family: "Lucida Sans Unicode",Verdana,Arial,sans-serif;
    font-size: 13px;
    height: 36px;
    list-style: none outside none;
    margin: auto;
    text-shadow: 0 -1px 3px #202020;
    width: 432px;
    float: center;

    /* border radius */
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
    border-radius: 4px;

    /* box shadow */
    -moz-box-shadow: 0px 3px 3px #cecece;
    -webkit-box-shadow: 0px 3px 3px #cecece;
    box-shadow: 0 3px 4px #8b8b8b;

    /* gradient */
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #787878), color-stop(0.5, #5E5E5E), color-stop(0.51, #707070), color-stop(1, #838383));
    background-image: -moz-linear-gradient(center bottom, #787878 0%, #5E5E5E 50%, #707070 51%, #838383 100%);
    background-color: #5f5f5f;
}
#nav li {
    border-bottom: 1px solid #575757;
    border-left: 1px solid #929292;
    border-right: 1px solid #5d5d5d;
    border-top: 1px solid #797979;
    display: block;
    float: right;
    height: 34px;
    position: relative;
    width: 105px;
}
#nav > li:first-child {
    border-left: 0 none;
    margin-left: 5px;
}
#nav ul {
    left: -9999px;
    position: absolute;
    top: -9999px;
    z-index: 2;
}
#nav ul li {
    background: none repeat scroll 0 0 #838383;
    box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
    width: 100%;
}
#nav li a {
    color: #FFFFFF;
    display: block;
    line-height: 34px;
    outline: medium none;
    text-align: center;
    text-decoration: none;

    /* gradient */
    background-image: -webkit-gradient(linear, left bottom, left top, color-stop(0, #787878), color-stop(0.5, #5E5E5E), color-stop(0.51, #707070), color-stop(1, #838383));
    background-image: -moz-linear-gradient(center bottom, #787878 0%, #5E5E5E 50%, #707070 51%, #838383 100%);
    background-color: #5f5f5f;
}

/* keyframes #animation */
@-webkit-keyframes animation {
    0% {
        -webkit-transform: scale(1);
    }
    30% {
        -webkit-transform: scale(1.2);
    }
    100% {
        -webkit-transform: scale(1.1);
    }
}
@-moz-keyframes animation {
    0% {
        -moz-transform: scale(1);
    }
    30% {
        -moz-transform: scale(1.2);
    }
    100% {
        -moz-transform: scale(1.1);
    }
}
#nav li > a:hover {
    /* CSS3 animation */
    -webkit-animation-name: animation;
    -webkit-animation-duration: 0.3s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: 1;
    -webkit-animation-direction: normal;
    -webkit-animation-delay: 0;
    -webkit-animation-play-state: running;
    -webkit-animation-fill-mode: forwards;

    -moz-animation-name: animation;
    -moz-animation-duration: 0.3s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: 1;
    -moz-animation-direction: normal;
    -moz-animation-delay: 0;
    -moz-animation-play-state: running;
    -moz-animation-fill-mode: forwards;
}
#nav li:hover ul {
    left: 0;
    top: 34px;
    width: 150px;
}
*{
    margin:0;
    padding:0;
}
body {
    font:14px/1.3 Arial,sans-serif;
    background:url("https://i.imgur.com/qAdatTl.jpg") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
header {
    background-color:#212121;
    box-shadow: 0 -1px 2px #111111;
    color:#fff;
    display:block;
    height:70px;
    position:relative;
    width:100%;
    z-index:100;
}
header h2{
    font-size:22px;
    font-weight:normal;
    left:50%;
    margin-left:-400px;
    padding:22px 0;
    position:absolute;
    width:540px;
}
header a.stuts,a.stuts:visited{
    border:none;
    text-decoration:none;
    color:#fcfcfc;
    font-size:14px;
    left:50%;
    line-height:31px;
    margin:23px 0 0 110px;
    position:absolute;
    top:0;
}
header .stuts span {
    font-size:22px;
    font-weight:bold;
    margin-left:5px;

}
.content{
	height: 520px;
	width: 1200px;
	background-color:hsla(0,60%,70%,0.2);
	margin: 30px auto;
	position: relative;
}
.main-content{
	height: 480px;
	width: 1160px;
	margin: 0px auto;
	position: absolute;
	left: 50%; 
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
}
#view{
	left: 50%; 
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    margin: auto;
	position: absolute;
}
.style_table{
	border-collapse: collapse;
}
.style_tr1{
	background-color: #FF6666;
	font-weight: bolder;
}
.style_tr2{
	background-color: #FFFFCC;
}
.style_th{
	border: 1px solid;
}
.style_td{
	border: 1px solid;color: #CC0000;
}
</style>
</head>
<body>
    <!-- Header -->
    <header>
            <h2>MY LIBRARY</h2>
    <!-- Menu -->
    <ul id="nav">
    	<li><a href="#">Statistical</a>
			<ul>
				<li><a href="{{ route('boss_search') }}">Bookstore</a></li>
				<li><a href="#">Thong ke</a></li>
			</ul>
    	</li>
    	<li><a href="#">Managers</a>
    		<ul>
    			<li><a href="{{ route('boss_view_all_manager') }}">All Managers</a></li>
    			<li><a href="{{ route('boss_add_manager') }}">Add Manager</a></li>
    		</ul>
    	</li>
    	<li><a href="#">Notification</a>
    		<ul>
    			<li><a href="{{ route('boss_view_all_notification') }}">Older Notifications</a></li>
    			<li><a href="{{ route('boss_add_notification') }}">Add Notification</a></li>
    		</ul>
    	</li>
    	<li><a href="#">Account</a>
    		<ul>
    			<li><a href="{{ route('boss_view_accout') }}">View Account</a></li>
    			<li><a href="{{ route('boss_check_password') }}">Edit Account</a></li>
    			<li><a href="{{ route('boss_check_password_2') }}">Change Password</a></li>
    			<li><a href="{{ route('boss_logout') }}">Log Out</a></li>
    		</ul>
    	</li>
    </ul>
    </header>    

<!-- Content -->
    <div class="content">
    	<div class="main-content" style="border: 1px dotted pink">@yield('content')</div>       
    </div>
        
<script>
    	// add event handler realization
var addEvent = (function () {
  if (document.addEventListener) {
    return function (el, type, fn) {
      if (el && el.nodeName || el === window) {
        el.addEventListener(type, fn, false);
      } else if (el && el.length) {
        for (var i = 0; i < el.length; i++) {
          addEvent(el[i], type, fn);
        }
      }
    };
  } else {
    return function (el, type, fn) {
      if (el && el.nodeName || el === window) {
        el.attachEvent('on' + type, function () { return fn.call(el, window.event); });
      } else if (el && el.length) {
        for (var i = 0; i < el.length; i++) {
          addEvent(el[i], type, fn);
        }
      }
    };
  }
})();

// variables
var aLoops = []; // sound loops

// initialization
addEvent(window, 'load', function (event) {

    // load music files
    aLoops[0] = new Audio('media/background.ogg');
    aLoops[0].volume = 0.3;
    aLoops[1] = new Audio('media/button.ogg');
    aLoops[1].volume = 1.0;
    aLoops[2] = new Audio('media/button_click.ogg');
    aLoops[2].volume = 1.0;

    aLoops[0].addEventListener('ended', function() { // loop background sound
        this.currentTime = 0;
        this.play();
    }, false);
    aLoops[0].play();
});

// all the buttons
var aBtns = document.querySelectorAll('#nav li');

// onmouseover event handler
addEvent(aBtns, 'mouseover', function (event) {
    aLoops[1].currentTime = 0;
    aLoops[1].play(); // play click sound
});

// onmouseout event handler
addEvent(aBtns, 'mouseout', function (event) {
    aLoops[1].currentTime = 0;
    aLoops[1].pause(); // play click sound
});

// onclick event handler
addEvent(aBtns, 'click', function (event) {
    aLoops[2].currentTime = 0;
    aLoops[2].play(); // play click sound
});
</script>
</body>
</html>