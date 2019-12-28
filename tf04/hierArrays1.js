function mnu(u)
{
    var bag = (typeof(parent.frames.midFrame.assistant)=='undefined') ? false : parent.frames.midFrame.assistant;
    if (bag)
    { parent.frames.midFrame.location.href = '' + u; }
    else
    { parent.frames.midFrame.location.href = '' + u; }
}

function newframemnu(u)
{
    var bag = (typeof(parent.frames.midFrame.assistant)=='undefined') ? false : parent.frames.midFrame.assistant;
    if (bag)
    { window.open(''+u); }
    else
    { window.open(''+u); }
}

function gohome()
{
    var bag = (typeof(parent.frames.midFrame.assistant)=='undefined') ? false : parent.frames.midFrame.assistant;
    if (bag)
    { parent.location.href = ''; }
    else
    { parent.location.href = ''; }
}

arMenu1 = new Array(
122,
"","",
"#16446a","#16233d",
"#ECEEED","#ECEEED",
"#15446a","#eceeed",
"Open Hardware   ", "javascript:mnu('main.php?file=competitions/openhardware.php')",0,
"Open Software                ", "javascript:mnu('main.php?file=competitions/opensoftware.php')",0,
"Contraption      ", "javascript:mnu('main.php?file=competitions/contraption.php')",0,
"Online Competitions", "javascript:mnu('main.php?file=tell/onlinecomp.php')",0
)


arMenu2 = new Array(
123,
"270","",
"#15446a","#16233d",
"#ECEEED","#ECEEED",
"#15446a","#eceeed",
"Astronomy","javascript:mnu('w_astronomy.htm')",0,
"Archaeology","javascript:mnu('w_archaeology.htm')",0,
"Cryptology","javascript:mnu('w_cryptology.htm')",0,
"Robotics","javascript:newframemnu('http://www.me.iitb.ac.in/yantriki')",0,
"MEMS","javascript:newframemnu('http://www.me.iitb.ac.in/yantriki')",0,
"GPS/GIS","javascript:newframemnu('http://www.civil.iitb.ac.in/~lastraw/')",0,
"CAPE","javascript:mnu('chemsplash/workshops.htm')",0
)




arMenu3 = new Array(
123,
"35","",
"#15446a","#16233d",
"#ECEEED","#ECEEED",
"#15446a","#eceeed",
"Cliffhanger ","javascript:mnu('main.php?file=cliffhanger/cliffhanger.php')",0,
"Yantriki               ","javascript:mnu('main.php?file=yantriki/yantriki.php')",0,
"Laststraw              ","javascript:mnu('main.php?file=competitions/lastraw.php')",0,
"Chemsplash		","javascript:mnu('main.php?file=competitions/chemsplash.php')",0,
"Lecture Series		","javascript:mnu('main.php?file=events/lecture.php')",0,
"HUB			","javascript:mnu('main.php?file=events/hub.php')",0,
"Techfest at Dark	","javascript:mnu('main.php?file=events/techfestatdark.php')",0
);

arMenu4 = new Array( 
119,
"648","",
"#15446a","#16233d",
"#ECEEED","#ECEEED",
"#15446a","#eceeed",
"Lookback 2003","javascript:mnu('main1.php?file=lookback/lookback_2003.php')",0,
"Lookback 2002","javascript:mnu('main1.php?file=lookback/lookback_2002.php')",0,
"Lookback 2001","javascript:mnu('main1.php?file=lookback/lookback_2001.php')",0,
"Lookback 2000","javascript:mnu('main1.php?file=lookback/lookback_2000.php')",0,
"Lookback 1999","javascript:mnu('main1.php?file=lookback/lookback_1999.php')",0,
"Lookback 1998","javascript:mnu('main1.php?file=lookback/lookback_1998.php')",0
)

arMenu5 = new Array(
123,
"401","",
"#15446a","#16233d",
"#ECEEED","#ECEEED",
"#15446a","#eceeed",
"Sponsors 2004","javascript:mnu('main1.php?file=sponsors/sponsors.php')",0,
"Sponsors 2003","javascript:mnu('main1.php?file=sponsors/sponsors_2003.php')",0,
"Sponsors 2002","javascript:mnu('main1.php?file=sponsors/sponsors_2002.php')",0,
"Sponsors 2001","javascript:mnu('main1.php?file=sponsors/sponsors_2001.php')",0,
"Sponsors 2000","javascript:mnu('main1.php?file=sponsors/sponsors_2000.php')",0,
"Sponsors 1999","javascript:mnu('main1.php?file=sponsors/sponsors_1999.php')",0,
"Sponsors 1998","javascript:mnu('main.php?file=sponsors/sponsors_1998.php')",0
)
