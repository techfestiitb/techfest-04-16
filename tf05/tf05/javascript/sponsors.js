
var pic_width=160;
var pic_height=160;

/* define image urls */

if (document.images)
 {
     pic1= new Image(pic_width,pic_height);
     pic1.src="http://www.techfest.org/logos/reliance.jpg";  
     pic2= new Image(pic_width,pic_height); 
     pic2.src="http://www.techfest.org/logos/veritas.jpg"; 
     pic3= new Image(pic_width,pic_height);
     pic3.src="http://www.techfest.org/logos/intel.jpg";  
     pic4= new Image(pic_width,pic_height);
     pic4.src="http://www.techfest.org/logos/microsoft.jpg";  
     pic5= new Image(pic_width,pic_height);
     pic5.src="http://www.techfest.org/logos/iocl.jpg"; 
     pic6= new Image(pic_width,pic_height);
     pic6.src="http://www.techfest.org/logos/hcc.jpg";
     pic7= new Image(pic_width,pic_height);
     pic7.src="http://www.techfest.org/logos/dhruva.jpg";
     pic8= new Image(pic_width,pic_height);
     pic8.src="http://www.techfest.org/logos/mastek.jpg";
     pic9= new Image(pic_width,pic_height);
     pic9.src="http://www.techfest.org/logos/Zee.jpg";
     pic10= new Image(pic_width,pic_height);
     pic10.src="http://www.techfest.org/logos/chip.jpg";
     pic11= new Image(pic_width,pic_height);
     pic11.src="http://www.techfest.org/logos/ie.jpg";
     pic12= new Image(pic_width,pic_height);
     pic12.src="http://www.techfest.org/logos/aramex.jpg";
     pic13= new Image(pic_width,pic_height);
     pic13.src="http://www.techfest.org/logos/reliance.jpg";
     
 }    

/* define text for image captions  */

 
var pics= new Array(5) 
   pics[0]=pic1.src;
   pics[1]=pic2.src;
   pics[2]=pic3.src;
   pics[3]=pic4.src;
   pics[4]=pic5.src; 
   pics[5]=pic6.src;
   pics[6]=pic7.src;
   pics[7]=pic8.src;
   pics[8]=pic9.src;
   pics[9]=pic10.src;
   pics[10]=pic11.src;
   pics[11]=pic12.src;
   pics[12]=pic13.src;
   
var numpics=13;
var thenum=0;
imgName="img1";

function change_it()
 {
   if (document.images)
    {
      document.write("<IMG SRC='"+pics[thenum]+"' border='0' width='"+pic_width+"' height='"+pic_height+"' name='img1'>\n");
      
      setTimeout('change_it2()',3000);  
   }
}

function change_it2()
 {
         var x=0;
         thenum+=1;

           if (thenum>numpics-1)
             thenum=0;

           document[imgName].src=pics[thenum];
           /*document.form1.text1.value=destext[thenum];*/
           x+=1;
           setTimeout('change_it2()',3000);
          
 }


 change_it()
