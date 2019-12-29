


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
document.getElementById("fader").innerHTML= "<b>SAP</b> presents <br><a href='http://www.techfest.org/ai/sap/'><b>Fellowship contest</b></a>";


else 
{
document.getElementById("fader").innerHTML= "Fellowship upto <br><b>Rs 1,00,000 (ONE LAKH) individually</b>";

	inc=-1;
 }


fadingtext();
setTimeout("changetext()",2000);
}

window.onload=changetext();


