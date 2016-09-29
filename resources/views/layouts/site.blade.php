<!DOCTYPE html>
<html lang="en-US">
<title>Home | HUGELZ.COM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Keywords" content="HTML,CSS,JavaScript,DOM,jQuery,ASP,PHP,SQL,XML,Bootstrap,Web,W3C,tutorials,programming,development,training,learning,quiz,primer,lessons,reference,examples,source code,colors,demos,tips,w3c">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{ asset('sites/lib/w3.css')}}">

<style>
body {
  font-size:16px;
}
h1 {
  font-size:80px;
  color:#555555;
}
h2 {
  font-size:40px;
  color:#555555;
}
.top {
  height:68px;
  padding-top:20px;
  line-height:50px;
  overflow:hidden;
  font-size:15px;
}
.hugelz-logo {
    font-family:fontawesome;
    text-decoration:none;
	line-height: 1;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	font-size:37px;
	letter-spacing:3px;
	color:#555555;
	display:block;
	position:absolute;
	top:17px;
	padding-left:2px;
}
.hugelz-logo .dotcom {
    color:#4CAF50;
}
.hugelz-logo:hover {
    color:#555555;
}

.w3-topnav {
  padding:0 10px;
}
.w3-topnav a{
  float:left;
  letter-spacing:4px;
  font-size:17px;
  line-height:47px;
}
.w3-topnav a:hover {
  background-color:white;
  color:#e6e7e8;
}
.topnavlinks {
  width:auto;
  float:right;
}
a.topnav-localicons {
  font-size:20px !important;
}
a.topnav-icons {
  font-size:20px;
}
#menubtn {
  float:left;
  font-size:16px;
}
.w3-sidenav {
  overflow:hidden;
  position:absolute !important;
  display:none;
  background-color:transparent;
}
.w3-sidenav a {
  padding:0 20px;
  color:#555555;
}
.w3-sidenav h2 {
  font-size:20px;
  padding-left:20px;
  color:#000000;
}
.w3-dropnav {
  display:none;
  padding-bottom:40px;
}
.w3-dropnav h3 {
  padding-top:20px;
}
.w3-closebtn {
  padding:10px 20px !important;
  position:absolute;
  right:0;
}
#nav_menu-xs {
  background-color:#f1f1f1;
  text-align:center;
}
#nav_menu-xs a {
  color:#000000;
  margin:10px;
  display:block;
  font-size:16px;
  letter-spacing:4px;
  color:inherit;
  text-decoration:none;
}
#nav_menu-xs .w3-closebtn {
  margin:0;
}
.w3-closebtn:hover {
  background-color:#cccccc;
}
#sectionxs_tutorials, #sectionxs_references, #sectionxs_examples {
  background-color:#ffffff;
}
#sectionxs_tutorials .w3-closebtn, #sectionxs_references .w3-closebtn, #sectionxs_examples .w3-closebtn {
  display:none;
}
#sectionxs_tutorials a, #sectionxs_references a, #sectionxs_examples a {
  letter-spacing:normal;
}
#nav_translate, #nav_search {
  display:none;
}
#nav_translate a {
  display:inline;
}
#googleSearch {
  color:#000000;
}
.searchdiv {
  max-width:400px;
  margin:auto;
  text-align:left;
  font-size:16px;
}
div.cse .gsc-control-cse, div.gsc-control-cse {
  background-color:transparent;
  border:none;
  padding:0px;
  margin:0px;
}
td.gsc-search-button input.gsc-search-button {
  background-color:#555555;
}
input.gsc-input, .gsc-input-box, .gsc-input-box-hover, .gsc-input-box-focus, .gsc-search-button {
  box-sizing:content-box;
  line-height:normal;
}
.gsc-tabsArea div {
  overflow:visible; 
}
.gsst_a .gscb_a {
  margin-top:3px;
}
.section{
  padding:4%;
}
.section p {
  color:#555555;
  font-size:30px;
	margin:0 0 10px !important;
}
.w3-code {
  padding:12px 16px;
  border-left:4px solid #4CAF50 !important;
}
.sectionbtn {
  background-color:#555555;
  margin:10px 5px 5px 5px;
}
.section.onethird p {
  font-size:20px;
}
.section.onethird .w3-card-2 {
  padding:15px 10px;
  height:260px;
}
footer a {
  text-decoration:none;
}
.about {
  text-align:center;
  margin:20px auto auto auto;
  font-size:14px;
  letter-spacing:4px;
  word-spacing: 10px;
  color:#555555;
}
#fblikeframe {
  display:none;
}
#popupframe {
  position:fixed;
  height:100%;
  width:100%;
  top:0;
  left:0;
  background-color:#000000;
  opacity:0.5;
  z-index:999;
}
#popupDIV {
  position:fixed;
  height:40%;
  width:40%;
  min-width:310px;
  min-height:250px;
  top:30%;
  left:30%;
  background-color:#ffffff;
  z-index:9999;
}
@font-face {
	font-family: 'fontawesome';
	src:url('{{asset('sites/lib/fonts/fontawesome8deb.eot?14663396')}}');
	src:url('{{asset('sites/lib/fonts/fontawesome8deb.eot?14663396#iefix')}}') format('embedded-opentype'),
	    url('{{asset('sites/lib/fonts/fontawesome8deb.woff?14663396')}}') format('woff'),
	    url('{{asset('sites/lib/fonts/fontawesome8deb.ttf?14663396')}}') format('truetype'),
	    url('{{asset('sites/lib/fonts/fontawesome8deb.svg?14663396#fontawesome')}}') format('svg');
	font-weight:normal;
	font-style:normal;
}
.fa {
  display:inline-block;
  font:normal normal normal 14px/1 FontAwesome;
  font-size:inherit;
  text-rendering:auto;
  -webkit-font-smoothing:antialiased;
  -moz-osx-font-smoothing:grayscale;
  transform:translate(0,0);
}
.fa-2x {
  font-size:2em;
}
.fa-home:before {content: '\e800'; }
.fa-globe:before {content: '\e801'; }
.fa-search:before {content: '\e802'; }
.fa-thumbs-o-up:before {content: '\e803'; }
.fa-left-open:before {content: '\e804'; }
.fa-right-open:before {content: '\e805'; }
.fa-facebook-square:before { content: '\e806'; }
.fa-google-plus-square:before { content: '\e807'; }
.fa-twitter-square:before { content: '\e808'; }
.fa-caret-down:before { content: '\e809'; }
.fa-caret-up:before { content: '\e80a'; }

@media only screen and (min-width :1100px) {
  #main {
    margin-left:0px;
  }
  #sidemenu {
    width:230px;
    display:block;
  }
  .w3-auth{
    display: block;
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-align: right;
    font-size: 14px;
  }
}
@media only screen and (min-width :992px) {
  .about {
    text-align:right;
    margin:auto;
  }
  .css-hide-when-large {
      display:none;
  }  
}
@media only screen and (max-width :991px) {
  .topsection {
    text-align:center;
  }
  .topsection img, .topsection div {
    float:none;
    margin:auto;
  }
  .top {
    height:100px;
  }
  .top img {
    display:block;
    margin:auto;
  }
  .top .hugelz-logo {
    position:relative;
    top:0;
    width:100%;
    text-align:center;
    margin:auto;
  }  
  .toptext {
    width:100%;
    text-align:center;
  }
  .css-hide-when-small {
    display:none;
  }
  .w3-auth{
    display: block;
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-align: right;
    font-size: 14px;
  }
}
@media screen and (max-width: 768px) {
  h1 {
    font-size:50px;
  }
  .section p {
    font-size:18px;
  }
  .sectionexample {
    display:none !important;
  }
  .section {
    padding:0 0 30px 0;
  }
  .onethird {
    padding:30px;
  }
  #navbtn_tutorials, #navbtn_references, #navbtn_examples {
    display:none !important;
  }
  #menubtn {
    background-repeat:repeat-x !important;/*To test for devices less than 768px*/
  }
  .w3-sidenav {
    display:none !important;
  }
  #main {
    margin-left:0% !important;
  }
}
@media screen and (min-width: 769px) {
  #nav_menu-xs {
    display:none !important;
  }
}
@media screen and (max-width:600px) {
  .top {
    height:68px;
  }
  .toptext {
    display:none;
  }
  .w3-dropnav .w3-col {
    height:auto;
  }
  .w3-auth{
    display: block;
    width: 100%;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 5px;
    text-align: center;
    font-size: 14px;
  }

}
.w3-theme {
  color:#fff !important;
  /*background-color:#4CAF50 !important;*/
  background-color:#ed1c24 !important;
}
.w3-auth{
  display: block;
}
</style>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<body class="hunglv-creater" >

<div class='w3-container top'>
	<a href='http://www.hugelz.com'><img src='{{ asset('sites/images/logo_s.png')}}' alt='huglez.com' class='w3-fluid' style="width: 100px;" ></a>	

	<div class='w3-right toptext w3-wide'>THE WORLD'S LARGEST WEB DEVELOPER SITE</div>
</div>

<div class="w3-theme w3-card-2 w3-topnav w3-right-align w3-slim">
  <a id="menubtn" href='javascript:void(0);' class='topnav-localicons w3-left' onclick='w3_open()' title='Menu'>&#9776;</a>
  <div class="topnavlinks">
  <a href="javascript:void(0)" id="navbtn_tutorials" onclick="w3_open_nav('tutorials')">TUTORIALS <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
  <a href="javascript:void(0)" id="navbtn_references" onclick="w3_open_nav('references')">REFERENCES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
  <a href="javascript:void(0)" id="navbtn_examples" onclick="w3_open_nav('examples')">EXAMPLES <i class='fa fa-caret-down'></i><i class='fa fa-caret-up' style='display:none'></i></a>
  <a href='javascript:void(0);' class='topnav-icons fa fa-search w3-right' onclick="w3_open_nav('search')" title='Search hugelz'></a>
 
  </div>
</div>

<div id='nav_menu-xs' class="w3-card-2" style="display:none;">
  <a href="javascript:void(0)" onclick="w3_close_nav('menu-xs')" class="w3-closebtn w3-large">&times;</a><br>
  <div class="w3-container w3-padding-32">
  <a onclick="open_xs_menu('tutorials')" href="javascript:void(0);">TUTORIALS <i class='fa fa-caret-down'></i></a>
  <div id="sectionxs_tutorials"></div>
  <a onclick="open_xs_menu('references')" href="javascript:void(0);">REFERENCES <i class='fa fa-caret-down'></i></a>
  <div id="sectionxs_references"></div>
  <a onclick="open_xs_menu('examples')" href="javascript:void(0);">EXAMPLES <i class='fa fa-caret-down'></i></a>
  <div id="sectionxs_examples"></div>
  </div>
</div>

<nav id="nav_tutorials" class="w3-dropnav w3-light-grey w3-card-2">
  <span onclick="w3_close_nav('tutorials')" class="w3-closebtn w3-xlarge">&times;</span><br>
  <div class="w3-row-padding">
    <div class="w3-col m4">
	    <h3>HTML and CSS</h3>
	    <a href="html/default.html">Learn HTML</a>
	    <a href="css/default.html">Learn CSS</a>
	    <a href="w3css/default.html">Learn W3.CSS</a>
	    <a href="colors/default.html">Learn Colors</a>
	    <a href="bootstrap/default.html">Learn Bootstrap</a>
	    <h3>HTML Graphics</h3>
	    <a href="canvas/default.html">Learn Canvas</a>
	    <a href="svg/default.html">Learn SVG</a>
	    <a href="icons/default.html">Learn Icons</a>
	    <a href="googleapi/default.html">Learn Google Maps</a>
	    <a href="games/default.html">Learn HTML Games</a>    
    </div>
    <div class="w3-col m4">    
	    <h3>JavaScript</h3>
	    <a href="js/default.html">Learn JavaScript</a>
	    <a href="jquery/default.html">Learn jQuery</a>
	    <a href="jquerymobile/default.html">Learn jQueryMobile</a>
	    <a href="appml/default.html">Learn AppML</a>
	    <a href="angular/default.html">Learn AngularJS</a>
	    <a href="json/default.html">Learn JSON</a>
	    <h3>XML Tutorials</h3>
	    <a href="xml/default.html">Learn XML</a>
	    <a href="xsl/default.html">Learn XSLT</a>
	    <a href="ajax/default.html">Learn AJAX</a>
    </div>
    <div class="w3-col m4">    
	    <h3>Server Side</h3>
	    <a href="sql/default.html">Learn SQL</a>
	    <a href="php/default.html">Learn PHP</a>
	    <a href="asp/default.html">Learn ASP</a>
	    <a href="aspnet/default.html">Learn ASP.NET</a>
	    <h3>Web Building</h3>
	    <a href="website/default.html">Web Building</a>
	    <a href="browsers/default.html">Web Statistics</a>
	    <a href="cert/default.html">Web Certificates</a>
    </div>
  </div>
</nav>

<nav id="nav_references" class="w3-dropnav w3-light-grey w3-card-2">
  <span onclick="w3_close_nav('references')" class="w3-closebtn w3-xlarge">&times;</span><br>
  <div class="w3-row-padding">
    <div class="w3-col m4">
    <h3>HTML</h3>
    <a href='tags/default.html'>HTML Tag Reference</a>
    <a href='tags/ref_eventattributes.html'>HTML Event Reference</a>
    <a href='colors/default.html'>HTML Color Reference</a>
    <h3>CSS</h3>
    <a href='cssref/default.html'>CSS Reference</a>
    <a href='cssref/css_selectors.html'>CSS Selector Reference</a>
    <a href='w3css/w3css_references.html'>W3.CSS Reference</a>
    <a href='bootstrap/bootstrap_ref_css_text.html'>Bootstrap Reference</a>
    </div>
    <div class="w3-col m4">
    <h3>JavaScript</h3>
    <a href='jsref/default.html'>JavaScript Reference</a>
    <a href='jsref/default.html'>HTML DOM Reference</a>
    <a href='jquery/jquery_ref_selectors.html'>jQuery Reference</a>
    <a href='jquerymobile/jquerymobile_ref_data.html'>jQuery Mobile Reference</a>
    <a href='angular/angular_ref_directives.html'>AngularJS Reference</a>    
    <a href='googleAPI/google_maps_ref.html'>Google Maps Reference</a>
    <h3>XML</h3>
    <a href='xml/dom_nodetype.html'>XML DOM Reference</a>
    <a href='xsl/xsl_w3celementref.html'>XSLT Reference</a>
    <a href='xml/schema_elements_ref.html'>XML Schema Reference</a>
    <a href='svg/svg_reference.html'>SVG Reference</a>
    </div>
    <div class="w3-col m4">
    <h3>Character Sets</h3>
    <a href='charsets/default.html'>HTML Character Sets</a>
    <a href='charsets/ref_html_ascii.html'>HTML ASCII</a>
    <a href='charsets/ref_html_ansi.html'>HTML ANSI</a>
    <a href='charsets/ref_html_ansi.html'>HTML Windows-1252</a>
    <a href='charsets/ref_html_8859.html'>HTML ISO-8859-1</a>
    <a href='charsets/ref_html_symbols.html'>HTML Symbols</a>
    <a href='charsets/ref_html_utf8.html'>HTML UTF-8</a>
    <h3>Server Side</h3>
    <a href='php/php_ref_array.asp'>PHP Reference</a>
    <a href='sql/sql_quickref.html'>SQL Reference</a>
    <a href='asp/asp_ref_response.html'>ASP Reference</a>
    <a href='aspnet/aspnet_intro.html'>ASP.NET Reference</a>
    <a href='aspnet/webpages_ref_classes.html'>Razor Reference</a>
    </div>
  </div>
</nav>

<nav id="nav_examples" class="w3-dropnav w3-light-grey w3-card-2">
  <span onclick="w3_close_nav('examples')" class="w3-closebtn w3-xlarge">&times;</span><br>
  <div class="w3-row-padding">
    <div class="w3-col l3 m6">
    <h3>HTML and CSS</h3>
    <a href='html/html_examples.html'>HTML Examples</a>
    <a href='css/css_examples.html'>CSS Examples</a>
    <a href='w3css/w3css_examples.html'>W3.CSS Examples</a>
    </div>
    <div class="w3-col l3 m6">
    <h3>JavaScript</h3>
    <a href="js/js_examples.html" target="_top">JavaScript Examples</a>
    <a href="js/js_dom_examples.html" target="_top">HTML DOM Examples</a>
    <a href="jquery/jquery_examples.html" target="_top">jQuery Examples</a>
    <a href="jquerymobile/jquerymobile_examples.html" target="_top">jQuery Mobile Examples</a>
    <a href="angular/angular_examples.html" target="_top">AngularJS Examples</a>
    <a href="ajax/ajax_examples.html" target="_top">AJAX Examples</a>
    </div>
    <div class="w3-col l3 m6">
    <h3>Server Side</h3>
    <a href="php/php_examples.html" target="_top">PHP Examples</a>
    <a href="asp/asp_examples.html" target="_top">ASP Examples</a>
    <a href="aspnet/webpages_examples.html" target="_top">Razor Examples</a>
    <a href="aspnet/aspnet_examples.html" target="_top">.NET Examples</a>
    </div>
    <div class="w3-col l3 m6">
    <h3>XML</h3>
    <a href="xml/xml_examples.html" target="_top">XML Examples</a>
    <a href="xsl/xsl_examples.html" target="_top">XSLT Examples</a>
    <a href="xsl/xpath_examples.html" target="_top">XPath Examples</a>
    <a href="xml/schema_example.html" target="_top">XML Schema Examples</a>
    <a href="svg/svg_examples.html" target="_top">SVG Examples</a>
    </div>
  </div>
</nav>


<nav id="nav_search" class="w3-dropnav w3-light-grey w3-card-2 w3-center">
  <span onclick="w3_close_nav('search')" class="w3-closebtn w3-xlarge">&times;</span><br><br>
  <div class="searchdiv">
    Search
    <div id='googleSearch'><div class='gcse-search'></div></div>
  </div>
  <br>
</nav>

<nav id="sidemenu" class="w3-sidenav w3-card-2 w3-animate-left" style="display:none;">
	<a href="javascript:void(0)" onclick="w3_close()" class="w3-closebtn w3-large">&times;</a><br>
	<h2>HTML and CSS</h2>
	<a href="html/default.html">Learn HTML</a>
	<a href="css/default.html">Learn CSS</a>
	<a href="w3css/default.html">Learn W3.CSS</a>
	<a href="colors/default.html">Learn Colors</a>
	<a href="bootstrap/default.html">Learn Bootstrap</a>
	<h2>JavaScript</h2>
	<a href="js/default.html">Learn JavaScript</a>
	<a href="jquery/default.html">Learn jQuery</a>
	<a href="jquerymobile/default.html">Learn jQueryMobile</a>
	<a href="appml/default.html">Learn AppML</a>
	<a href="angular/default.html">Learn AngularJS</a>
	<a href="json/default.html">Learn JSON</a>
	<h2>HTML Graphics</h2>
	<a href="canvas/default.html">Learn Canvas</a>
	<a href="svg/default.html">Learn SVG</a>
	<a href="icons/default.html">Learn Icons</a>
	<a href="googleapi/default.html">Learn Google Maps</a>
	<a href="games/default.html">Learn HTML Games</a>
	<h2>Server Side</h2>
	<a href="sql/default.html">Learn SQL</a>
	<a href="php/default.html">Learn PHP</a>
	<a href="asp/default.html">Learn ASP</a>
	<a href="aspnet/default.html">Learn ASP.NET</a>
	<h2>Web Building</h2>
	<a href="website/default.html">Web Building</a>
	<a href="browsers/default.html">Web Statistics</a>
	<a href="cert/default.html">Web Certificates</a>
	<h2>XML Tutorials</h2>
	<a href="xml/default.html">Learn XML</a>
	<a href="xsl/default.html">Learn XSLT</a>
	<a href="ajax/default.html">Learn AJAX</a>
</nav>
<!--- BEGIND MAIN -->
<div id="main">
  @yield('content')
</div>
<!--- END MAIN -->

<!--- BEGIN FOOTER -->
<footer class="w3-container w3-light-grey w3-center w3-padding-jumbo w3-opacity">
  <a href="cert/default.html"><button class="w3-btn w3-dark-grey w3-hover-black">WEB CERTIFICATES</button></a>
  <br>
  <nav class="about">
  <a href="http://hugelz.invisionzone.com/" target="_blank">FORUM</a> |
  <a href="about/default.html" target="_top">ABOUT</a>
  </nav>
  <br>
  <p class="w3-medium">
  HUGELZ is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding.
  Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content.
  While using this site, you agree to have read and accepted our <a href="about/about_copyright.html">terms of use</a>, <a href="about/about_privacy.html">cookie and privacy policy</a>.<br>
  <a href="about/about_copyright.html">Copyright 1999-2016</a> by Refsnes Data. All Rights Reserved.<br><br>
  </p>  
  <div class="w3-xxx" >
    @if( Auth::user() )
       <a href="{{ url('/admin/v1') }}" class="w3-btn w3-theme" >Administrator</a>
       <a href="{{ url('/auth/logout') }}" class="w3-btn" >Logout</a>
    @else
      <a href="{{ url('/auth/register') }}" class="w3-btn w3-theme" >Register</a>
      <a href="{{ url('/auth/login') }}" class="w3-btn">Sign In</a>
    @endif
  </div>
</footer>
<!--- END FOOTER -->
<script>
function w3_open() {
  if (w3_getStyleValue(document.getElementById("menubtn"), "background-repeat") == "repeat-x") {
    if (document.getElementById("nav_menu-xs").style.display == "block") {
        document.getElementById("nav_menu-xs").style.display = "none";
        return;
    }
    document.getElementById("nav_menu-xs").style.display = "block";
    return;
  }
  if (w3_getStyleValue(document.getElementById("sidemenu"), "display") == "block") {
    w3_close();
    return;
  }
  document.getElementById("main").style.marginLeft = "230px";
  document.getElementById("sidemenu").style.width = "230px";
  document.getElementById("main").style.transition = ".4s";
  document.getElementById("sidemenu").style.display = "block";
}
function w3_getStyleValue(elmnt,style) {
  if (window.getComputedStyle) {
    return window.getComputedStyle(elmnt,null).getPropertyValue(style);
  } else {
    return elmnt.currentStyle[style];
  }
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("sidemenu").style.display = "none";
}
function w3_open_nav(x) {
  if (document.getElementById("nav_" + x).style.display == "block") {
    w3_close_nav(x);
  } else {
    w3_close_nav("tutorials");
    w3_close_nav("references");
    w3_close_nav("examples");
    //w3_close_nav("translate");
    w3_close_nav("search");
    document.getElementById("nav_" + x).style.display = "block";
    if (document.getElementById("navbtn_" + x)) {
        document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "none";
        document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "inline";
    } 
    if (x == "search") {
      if (document.getElementById("gsc-i-id1")) {document.getElementById("gsc-i-id1").focus(); }
    }
  }
}
function w3_close_nav(x) {
  document.getElementById("nav_" + x).style.display = "none";
  if (document.getElementById("navbtn_" + x)) {
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[0].style.display = "inline";
    document.getElementById("navbtn_" + x).getElementsByTagName("i")[1].style.display = "none";
  }
}
function open_xs_menu(x) {
  if (document.getElementById("sectionxs_" + x).innerHTML == "") {
    document.getElementById("sectionxs_" + x).innerHTML = document.getElementById("nav_" + x).innerHTML;
  } else {
    document.getElementById("sectionxs_" + x).innerHTML = "";
  }
}

</script>
<script src="{{ asset('sites/lib/w3codecolors.js')}}"></script>
</body>
</html> 