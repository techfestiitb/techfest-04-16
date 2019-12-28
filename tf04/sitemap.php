<html>
<head><style type="text/css">
.dot         { position: absolute; width: 10; height: 10; visibility: hidden; background-color: red; font-size: 1px; cursor: pointer; cursor: hand; z-index: 100 }
.dotoff      { position: absolute; width: 10; height: 10; visibility: hidden; background-color: gray; font-size: 1px; cursor:default; z-index: 100}
.dotempty    { position: absolute; width: 10; height: 10; visibility: hidden; background-color: orange; font-size: 1px; cursor: pointer; cursor: hand; zindex: 100 }
.caption     { position: absolute; visibility: hidden; font-family: Tahoma; color: black; font-size: 11px; text-align: Center; cursor: default; z-index: 1 }
</style>
<script language="JavaScript" type="text/javascript">
// Copyright 2001 Dan Pupius dan@pupius.net http://www.pupius.net
// This script was released at DHTMLCentral.com
// Permission granted to SimplytheBest.net to feature the script in the 
// DHTML script collection at http://simplythebest.net/info/dhtml_scripts.html
function lib_bwcheck(){ //Browsercheck (needed)
	this.ver=navigator.appVersion
	this.agent=navigator.userAgent
	this.dom=document.getElementById?1:0
	this.opera5=(navigator.userAgent.indexOf("Opera")>-1 && document.getElementById)?1:0
	this.ie5=(this.ver.indexOf("MSIE 5")>-1 && this.dom && !this.opera5)?1:0; 
	this.ie6=(this.ver.indexOf("MSIE 6")>-1 && this.dom && !this.opera5)?1:0;
	this.ie4=(document.all && !this.dom && !this.opera5)?1:0;
	this.ie=this.ie4||this.ie5||this.ie6
	this.mac=this.agent.indexOf("Mac")>-1
	this.ns6=(this.dom && parseInt(this.ver) >= 5) ?1:0; 
	this.ns4=(document.layers && !this.dom)?1:0;
	this.bw=(this.ie6 || this.ie5 || this.ie4 || this.ns4 || this.ns6 || this.opera5)
	return this
}
var bw=new lib_bwcheck()
</script>
</head>
<body bgcolor="white">
<script language="javascript1.2" type="text/javascript">
// Copyright 2001 Dan Pupius dan@pupius.net http://www.pupius.net
// This script was released at DHTMLCentral.com
// Permission granted to SimplytheBest.net to feature the script in the 
// DHTML script collection at http://simplythebest.net/info/dhtml_scripts.html
<!--
// DotMenu
// provides cross-browser functionality
//======================================
function getObjectRef(name) {
  if(document.getElementById) return document.getElementById(name);
  else if(document.all) return document.all[name];
  else return null;
}

// general functions to assist the script
//========================================
function show(name) {
  var el = getObjectRef(name);
  if(el) el.style.visibility = "visible";
}
function hide(name) {
  var el = getObjectRef(name);
  if(el) el.style.visibility = "hidden";
}
function getWidth(name) {
  var el = getObjectRef(name);
  return el.offsetWidth;
}
function getHeight(name) {
  var el = getObjectRef(name);
  return el.offsetHeight;
}
function moveMe(name,x,y) {
  var el = getObjectRef(name);
  if(el) { el.style.top = parseInt(y); el.style.left = parseInt(x); }  
}
function moveBy(name,x,y) {
  var el = getObjectRef(name);
  if(el) { el.style.top = parseInt(el.style.top) + parseInt(y); el.style.left = parseInt(el.style.left) + parseInt(x); }  
}

// Creates the menu objects
//==========================
var menuCount = 0;
function menuObject(name,x,y,caption, r, parent) {
  if ( (!document.getElementById&&!document.all) || navigator.userAgent.indexOf("Opera")>-1) return;
  document.write('<div id="divDot' + menuCount + '" class="dotempty" style="top: ' + y + '; left: ' + x + '"></div>');
  document.write('<div id="divCap' + menuCount + '" class="caption" style="top: 0; left: 0">' + caption + '</div>');
  
  this.name = name;
  this.parent = parent
  this.ref = "divDot" + menuCount;
  this.caption = "divCap" + menuCount
  if(r) this.radius = r;
  else this.radius = 600;
  this.subMenus = new Array();
  this.state = 0;
  this.moving = false;
  if(this.parent) this.action = "null";
  else this.action = "toggle";
  if(this.parent) this.startAngle = parent.startAngle;
  else this.startAngle = 0;

  getObjectRef(this.ref).objRef = this.name;
  
  this.show = function() { show(this.ref); }
  this.hide = function() { hide(this.ref); }
  this.moveMe = function(x,y) { if(this.parent) { x += this.parent.x(); y += this.parent.y(); } moveMe(this.ref,x,y); }
  this.moveBy = function(x,y) { moveBy(this.ref,x,y); }
  this.x = function() { return parseInt(getObjectRef(this.ref).style.left); }
  this.y = function() { return parseInt(getObjectRef(this.ref).style.top); }
  this.w = function() { return getWidth(this.ref); }
  this.h = function() { return getHeight(this.ref); }

  this.showCaption = function() {
    moveMe(this.caption, this.x() - (getWidth(this.caption)/2) + (this.w()/2), (this.y() + this.h()));
    show(this.caption);
  }
  this.hideCaption = function() {
    hide(this.caption);
  }
  this.setCaption = function(c) { getObjectRef(this.caption).innerHTML = c;}
 
  this.addItem = function(c,action,r) {
    getObjectRef(this.ref).className = "dot";
    if(!r) r = this.radius/2;
    var sub = new menuObject(this.name + ".subMenus[" + this.subMenus.length + "]",0,0,c,r,this);
    sub.parent = this;
    sub.action = action;
    sub.moveMe(0,0);
    this.subMenus[this.subMenus.length] = sub;
    return sub;
  }
  
  this.expand = function() {
    if(this.subMenus.length > 0) {
      var p = true;
      if(this.parent) {
        p = !this.parent.moving;
        for(var i=0; i<this.parent.subMenus.length;i++)
          p = p && ((this.parent.subMenus[i].state==0) || (this.parent.subMenus[i].state==this.parent.subMenus[i].subMenus.length)) && (this.parent.subMenus[i].moving==false);
      } else var o = false;
      
      if((!this.parent || this.parent.state == this.parent.subMenus.length) && p) {
        if(this.parent) this.collapseAll(this.name);
        
        var diff = 360 / this.subMenus.length;
        for(var i=0;i<this.subMenus.length;i++){
          this.subMenus[i].moveMe(0,0);
          this.subMenus[i].show();
          this.moving = true;
          this.subMenus[i].slide(this.subMenus[i].radius * cos(degToRad((diff*i)+this.startAngle)), this.subMenus[i].radius * sin(degToRad((diff*i)+this.startAngle)), this.name + ".subMenus[" + i + "].showCaption();" + this.name + ".moving=false;" + this.name + ".state+=1;");
        }
        if(this.parent){
          getObjectRef(this.parent.ref).style.filter = "alpha (opacity=33)";
          getObjectRef(this.parent.ref).style.MozOpacity = "33%";

          getObjectRef(this.parent.ref).className = "dotoff";
          getObjectRef(this.parent.caption).style.filter = "alpha (opacity=33)";
          getObjectRef(this.parent.caption).style.MozOpacity = "33%";
          for(i=0;i<this.parent.subMenus.length;i++) {
              getObjectRef(this.parent.subMenus[i].ref).style.filter = "alpha (opacity=66)";
              getObjectRef(this.parent.subMenus[i].ref).style.MozOpacity = "66%";
              getObjectRef(this.parent.subMenus[i].caption).style.filter = "alpha (opacity=66)";
              getObjectRef(this.parent.subMenus[i].caption).style.MozOpacity = "66%";        
          }
          if(this.parent.parent) {
            for(i=0;i<this.parent.parent.subMenus.length;i++) {
              getObjectRef(this.parent.parent.subMenus[i].ref).style.filter = "alpha (opacity=33)";
              getObjectRef(this.parent.parent.subMenus[i].ref).style.MozOpacity = "33%";
              getObjectRef(this.parent.parent.subMenus[i].ref).className = "dotoff";
              getObjectRef(this.parent.parent.subMenus[i].caption).style.filter = "alpha (opacity=33)";        
              getObjectRef(this.parent.parent.subMenus[i].caption).style.MozOpacity = "33%";
            }
            getObjectRef(this.parent.parent.ref).style.MozOpacity = "33%";
            getObjectRef(this.parent.parent.ref).style.MozOpacity = "33%";
            getObjectRef(this.parent.parent.ref).className = "dotoff";
          }
        }
        getObjectRef(this.ref).style.filter = "alpha (opacity=66)";
        getObjectRef(this.caption).style.filter = "alpha (opacity=66)";  
        getObjectRef(this.ref).style.MozOpacity = "66%";
        getObjectRef(this.caption).style.MozOpacity = "66%"; 
      }
    }  
  }
  this.collapse = function() {
    var p = true;
    p = !this.moving;
    for(var i=0; i<this.subMenus.length;i++)
      p = p && (this.subMenus[i].state==0)  && (this.subMenus[i].moving==false);
    if(p && this.subMenus.length > 0) {
      for(var i=0;i<this.subMenus.length;i++){
        this.subMenus[i].hideCaption();
        this.moving = true;
        this.subMenus[i].slide(0, 0, this.name + ".subMenus[" + i + "].hide();" + this.name + ".moving=false;" + this.name + ".state-=1;");
      }
      if(this.parent){
        getObjectRef(this.parent.ref).style.filter = "alpha (opacity=66)";
        getObjectRef(this.parent.ref).style.MozOpacity = "66%";
        if(this.parent.subMenus.length != 0)
          getObjectRef(this.parent.ref).className = "dot";
        else
          getObjectRef(this.parent.ref).className = "dotempty";
        getObjectRef(this.parent.caption).style.filter = "alpha (opacity=66)";
        getObjectRef(this.parent.caption).style.MozOpacity = "66%";
        for(i=0;i<this.parent.subMenus.length;i++) {
          getObjectRef(this.parent.subMenus[i].ref).style.filter = "alpha (opacity=100)";
          getObjectRef(this.parent.subMenus[i].ref).style.MozOpacity = "100%";
          if(this.parent.subMenus[i].subMenus.length != 0) 
            getObjectRef(this.parent.subMenus[i].ref).className = "dot";
          else
            getObjectRef(this.parent.subMenus[i].ref).className = "dotempty";
          getObjectRef(this.parent.subMenus[i].caption).style.filter = "alpha (opacity=100)";        
          getObjectRef(this.parent.subMenus[i].caption).style.MozOpacity = "100%";
        }
        if(this.parent.parent) {
          for(i=0;i<this.parent.parent.subMenus.length;i++) {
            getObjectRef(this.parent.parent.subMenus[i].ref).style.filter = "alpha (opacity=66)";
            getObjectRef(this.parent.parent.subMenus[i].ref).style.MozOpacity = "66%";
            if(this.parent.parent.subMenus[i].subMenus.length != 0)
              getObjectRef(this.parent.parent.subMenus[i].ref).className = "dot";
            else
              getObjectRef(this.parent.parent.subMenus[i].ref).className = "dotempty";
            getObjectRef(this.parent.parent.subMenus[i].caption).style.filter = "alpha (opacity=66)";        
            getObjectRef(this.parent.parent.subMenus[i].caption).style.MozOpacity = "66%";
          }
        }
      }
      getObjectRef(this.ref).style.filter = "alpha (opacity=100)";
      getObjectRef(this.caption).style.filter = "alpha (opacity=100)";       
      getObjectRef(this.ref).style.MozOpacity = "100%";
      getObjectRef(this.caption).style.MozOpacity = "100%";
    }
  }

  this.collapseAll = function(except) {
    for(var i=0;i<this.parent.subMenus.length;i++) {
      if(this.parent.subMenus[i].name!=except && this.parent.subMenus[i].state==this.parent.subMenus[i].subMenus.length) {
        this.parent.subMenus[i].collapse();
      }    
    }
  }
  this.toggle = function(e) {
    if(document.all) id = window.event.srcElement;
    else id = e.target;
    var dot = eval(id.objRef);
    if(dot.state==0 && !dot.moving) dot.expand();
    else if(dot.state==dot.subMenus.length && !dot.moving) dot.collapse()
  }
  this.doAction = function(e) {
    if(document.all) id = window.event.srcElement;
    else id = e.target;
    var dot = eval(id.objRef);
    if(dot.action == "toggle") dot.toggle(e);
    else eval(dot.action);
  }
  //change these if you want to change the events that trigger the actions
  //========================================================================
  //getObjectRef(this.ref).onmousemove = this.toggle;
  getObjectRef(this.ref).onmouseup = this.doAction;
  this.slide = function(xx,yy,func) {
    if(!func) func = "";
    var px = this.parent.x();
    var py = this.parent.y();
    var x = xx - this.x() + px;
    var y = yy - this.y() + py;
    var d = sqrt(square(xx-this.x() + px) + square(yy-this.y() + py));
    var v = d/8;
    if(v<1) v = 1;
    if( (Math.abs(x) < v) && (Math.abs(y) < v) ) {
      moveMe(this.ref,xx + px,yy + py);      
      if(func != "") eval(func);
    } else {    
      var a = round(atan(x,y));
      dx = round(v * cos(degToRad(a)));
      dy = round(v * sin(degToRad(a)));
      this.moveBy(dx,dy);
      setTimeout(this.name + ".slide(" + xx + "," + yy + ", '" + func + "');",10);    
    }
  }
  // Preoading the windows filters.
  if (menuCount==0 && document.all) document.all[this.ref].style.filter = "alpha (opacity=100)";
  menuCount++;
  return this;
}
// Math functions
//================
var pi = Math.PI;
function square(x) { return (x*x); }
function sqrt(x) { return Math.sqrt(x); }
function round(x) { return Math.round(x); }
function rand(x,y) { return (round(Math.random()*(y-x)) + x); }
function cos(x) { return Math.cos(x) }
function sin(x) { return Math.sin(x) }
function degToRad(x) { return ( x/(360/(2*pi)) ); }
function radToDeg(x) { return ( x*(360/(2*pi)) ); }
function atan(s,t) {
  if( s == 0.0 && t > 0.0)
    angle = 90.0;
  else if(s == 0.0 && t < 0.0) 
    angle = 270.0;
  else if (s < 0.0 ) 
    angle = 180.0 + radToDeg(Math.atan(t/s));
  else if (s > 0.0 && t < 0.0)
    angle = 360.0 + radToDeg(Math.atan(t/s));
  else {
    if(s==0.0) s=0.00001;
    angle = radToDeg(Math.atan(t/s));
  }
  if(angle < 0.0) angle += 360.0;
  return angle;
}
//get dimentions of the page
if(document.all) pageWidth = document.body.offsetWidth-20;
else pageWidth = innerWidth;
if(document.all) pageHeight = document.body.offsetHeight-4;
else pageHeight = innerHeight;

//Create main menu
var menu = new menuObject("menu",pageWidth/2,pageHeight/2,"www.techfest.org",450);
menu.startAngle = -90;
//show menu and caption
menu.show();
menu.showCaption();
//Add submenus
menu.addItem("Index page","location='http://www.techfest.org'");
menu.addItem("Events","toggle");
menu.addItem("Competitions","toggle");
menu.addItem("Workshops","location='main.php?file=workshops/workshops1.php");
menu.addItem("Sponsors","toggle");
menu.addItem("Media","toggle");
menu.addItem("Lookback","toggle");
menu.addItem("Others","toggle");

menu.subMenus[1].addItem("Cliffhanger","location='main.php?file=cliffhanger/cliffhanger.php'");
menu.subMenus[1].addItem("Yantriki","toggle");
menu.subMenus[1].addItem("Last Straw","location='main.php?file=laststraw/laststraw.php'");
menu.subMenus[1].addItem("Chemsplash","toggle");
menu.subMenus[1].addItem("Lecture Series","location='main.php?file=lectureseries/lecture.php'");
menu.subMenus[1].addItem("HUB","location='main.php?file=events/hub.php'");
menu.subMenus[1].addItem("Techfest@Dark","location='main.php?file=events/techfestatdark.php'");

menu.subMenus[1].subMenus[1].addItem("Last Man Standing","location='main.php?file=yantriki/queen.php'");
menu.subMenus[1].subMenus[1].addItem("MicroMouse","location='main.php?file=yantriki/micro.php'");
menu.subMenus[1].subMenus[1].addItem("The Line Drafter","location='main.php?file=yantriki/intra.php'");

menu.subMenus[1].subMenus[1].addItem("la porsChe","location='main.php?file=chemsplash/laporsche.php'");
menu.subMenus[1].subMenus[1].addItem("High Spirits","location='main.php?file=chemsplash/highspirits.php'");

menu.subMenus[2].addItem("Open Software","location='main.php?file=competitions/opensoftware.php'");
menu.subMenus[2].addItem("Open Hardware","location='main.php?file=competitions/openhardware.php'");
menu.subMenus[2].addItem("Contraption","location='main.php?file=competitions/contraption.php'");
menu.subMenus[2].addItem("Online Competitions","location='main.php?file=tell/onlinecomp.php'");

menu.subMenus[3].addItem("Sponsors2004","location='main.php?file=tell/onlinecomp.php'");
menu.subMenus[3].addItem("BIOS updates","location='http://simplythebest.net/drivers/bios_updates.html'");
menu.subMenus[3].addItem("CD-ROM drivers","location='http://simplythebest.net/drivers/cdrom_drivers.html'");
menu.subMenus[3].addItem("Fax modems","location='http://simplythebest.net/drivers/fax_modems_drivers.html'");
menu.subMenus[3].addItem("Image scanners","location='http://simplythebest.net/drivers/image_scanners_drivers.html'");
menu.subMenus[3].addItem("Graphic adapters","location='http://simplythebest.net/drivers/graphic_adapters_drivers.html'");
menu.subMenus[3].addItem("Monitor drivers","location='http://simplythebest.net/drivers/monitors_drivers.html'");
menu.subMenus[3].addItem("ISDN drivers","location='http://simplythebest.net/drivers/isdn_drivers.html'");
menu.subMenus[3].addItem("Multimedia devices","location='http://simplythebest.net/drivers/multimedia_devices_drivers.html'");
menu.subMenus[3].addItem("Printer drivers","location='http://simplythebest.net/drivers/printer_drivers.html'");

c = menu.subMenus[4].addItem("Databases","toggle");
c.startAngle = 15;
menu.subMenus[4].addItem("3D graphics","location='http://simplythebest.net/info/3Dgraphics.html'");
menu.subMenus[4].addItem("CD writing","location='http://simplythebest.net/info/cdburninfo.html'");
menu.subMenus[4].addItem("Cookies","location='http://simplythebest.net/info/cookieinfo.html'");
menu.subMenus[4].addItem("CSS","location='http://simplythebest.net/info/cookieinfo.html'");
menu.subMenus[4].addItem("Delphi","location='http://simplythebest.net/info/delphi.html'");
menu.subMenus[4].addItem("E-commerce","location='http://simplythebest.net/info/ecomminf.html'");
menu.subMenus[4].addItem("Servers","location='http://simplythebest.net/info/servers.html'");
menu.subMenus[4].addItem("Security","location='http://simplythebest.net/info/security_issues.html'");

menu.subMenus[4].subMenus[0].addItem("MySQL","location='http://simplythebest.net/info/mysql.html'");
menu.subMenus[4].subMenus[0].addItem("ASP","location='http://simplythebest.net/info/asp.html'");
menu.subMenus[4].subMenus[0].addItem("ColdFusion","location='http://simplythebest.net/info/coldfusion.html'");
menu.subMenus[4].subMenus[0].addItem("Online databases","location='http://simplythebest.net/info/dbinfo.html'");

menu.subMenus[7].addItem("Registration","location='main.php?file=base/registration.php'");
menu.subMenus[7].addItem("Schedule","location='main.php?file=base/schedule.php'");
menu.subMenus[7].addItem("Forum","location='http://www.techfest.org/forum_trial/w-agora/index.php?site=techfest'");
menu.subMenus[7].addItem("FAQ","location='main.php?file=base/faq.php'");
menu.subMenus[7].addItem("Assistance","location='main.php?file=base/assistance.php'");
menu.subMenus[7].addItem("Contact Us","location='main.php?file=base/contactus.php'");


//-->
</script>

