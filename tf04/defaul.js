
<!--- JavaScript (c) 2000 TQ Team C001414 --->
<!--- Unauthorized production, copying, use or modification is prohibited. --->
<!--- Contact the team for its use. --->

ns4 = (document.layers)? true:false;
ie4 = (document.all)? true:false;
if (ie4)
{
    if (navigator.userAgent.indexOf('MSIE 5')>0)
    { ie5 = true; }
    else { ie5 = false; }
}
else { ie5 = false; }
sSiteName = 'Techfest 2003.';

var sHD = 'C001414/index.html';

function SwitchAgent()
{
    var baa = (typeof(parent.frames.midFrame.aavail)=='undefined') ? true : parent.frames.midFrame.aavail;
    if (!baa) { parent.frames.midFrame.focus(); return; }
    var sHD = 'C001414/index.html';
	var img = parent.frames.frTop.document.imgAssistant;
	var m = parent.frames.midFrame;
	var h = m.location.href;
	re = /\/normal\//;
	if (h.search(re) != -1)
	{
		h = h.replace( re, "assistant/index.html" );
		img.src = sHD + "images/assistantoff.gif";
		img.alt = "Without Assistant";
        parent.frames.midFrame.assistant = true;
	}
	else
    {
		re = /\/assistant\//;
    	if (h.search(re) != -1)
    	{
    		h = h.replace( re, "normal/index.html" );
    		img.src = sHD + "images/assistant.gif";
    		img.alt = "Get Assistant";
            parent.frames.midFrame.assistant = false;
    	}

    }
	m.document.location.href = h;
	m.focus();
}

function AssImg(st)
{
    var sHD = 'C001414/index.html';
    var baa = (typeof(parent.frames.midFrame.aavail)=='undefined') ? true : parent.frames.midFrame.aavail;
    var isrc = '';
	var ia = parent.frames.frTop.document.imgAssistant;
	if (st) { isrc = sHD + "images/assistantoff.gif"; }
	else { isrc = sHD + "images/assistant.gif"; }
    if (!baa) { isrc = sHD + "images/naassistant.gif"; }
    ia.src = isrc;
}

function l(u)
{
    var sHD = 'C001414/index.html';
	var i = parent.frames.frLeft.document.imgHead;
    var ns = sHD + 'images/titles/' + u + '.gif';
	if (i.src != ns) { i.src = ns; }
}

function SetCookie (name, value) {
    var argv = SetCookie.arguments;
    var argc = SetCookie.arguments.length;
    var expires = new Date();
    var path = (argc > 3) ? argv[3] : null;
    var domain = (argc > 4) ? argv[4] : null;
    var secure = (argc > 5) ? argv[5] : false;
		expires.setYear(expires.getYear()+1);
    document.cookie = name + "=" + escape (value) +
    ((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
    ((path == null) ? "" : ("; path=" + path)) +
    ((domain == null) ? "" : ("; domain=" + domain)) +
    ((secure == true) ? "; secure" : "");
}

function getCookieVal (offset) {
    var endstr = document.cookie.indexOf (";", offset);
    if (endstr == -1)
    endstr = document.cookie.length;
    return unescape(document.cookie.substring(offset, endstr));
}

function GetCookie (name) {
    var arg = name + "=";
    var alen = arg.length;
    var clen = document.cookie.length;
    var i = 0;
    while (i < clen)
    	{
    	var j = i + alen;
    	if (document.cookie.substring(i, j) == arg)
    	return getCookieVal (j);
    	i = document.cookie.indexOf(" ", i) + 1;
    	if (i == 0) break;
    	}
    return null;
}

function DeleteCookie (name) {
    var exp = new Date();
    exp.setTime (exp.getTime() - 1);
    var cval = GetCookie (name);
    document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}
