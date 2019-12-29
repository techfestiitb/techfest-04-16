


hexinput=100;  // Initial color value.
var inc=-1; //increment variable



function fadingtext()
{
if(hexinput<255) {
	hexinput+=3; // increase color value
	
	document.getElementById("fader").style.color="rgb("+hexinput+","+hexinput+","+hexinput+")"; // Set color value.

	
	setTimeout("fadingtext()",20);
	}
	else
	{
	hexinput=100;  //reset hex value
	}
}

function changetext()
{
	
inc=inc+1;


if (inc==0)
{document.getElementById("fader").innerHTML= "Techfest 2005<br><font size=2><b>Gets Over</font></b>";
inc=inc+1;
}

else 
{
document.getElementById("fader").innerHTML= "<b>See U All At Techfest 2006<br>20th-22nd Jan</b>";

	inc=-1;
 }


fadingtext();
setTimeout("changetext()",2000);
}

window.onload=changetext();


