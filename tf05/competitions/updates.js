


hexinput=255;  // Initial color value.
var inc=-1; //increment variable



function fadingtext()
{
if(hexinput>0) {
	hexinput-=11; // increase color value
	document.getElementById("fader").style.color="rgb("+hexinput+","+hexinput+","+hexinput+")"; // Set color value.
	setTimeout("fadingtext()",20);
	}
	else
	hexinput=255;  //reset hex value
}

function changetext()
{
	if (!document.getElementById) return
		inc++;
	if (inc==0)
		document.getElementById("fader").innerHTML="<p><b>Survivor</b><br><a href=http://www.techfest.org/survivor.html>The International Robotics Challenge</a>";
	else if (inc==1)
		document.getElementById("fader").innerHTML="<p><b>Xgesis</b><br><a href=http://www.techfest.org/competitions/xgesis.html>The Technical Exposition</a>";
	else if (inc==2)
		document.getElementById("fader").innerHTML="<p><b>Workshops</b><br><a href=http://www.techfest.org/workshops/animation.html>Animation Workshop Launched</a>";
	else
	 {
		document.getElementById("fader").innerHTML= "mohit";
	 	inc=-1;
	 }

fadingtext();
setTimeout("changetext()",1500);
}

window.onload=changetext();


