
var img=["Arif Bhaiya 20190707_092933.jpg","Ashiya Mansuri 20190707_195907.jpg","Penguins.jpg","Tulips.jpg"];
var i=0;
function slide()
{
//alert("hello slide");
var div=document.getElementById("slider");
div.style.backgroundImage="url('epulseline/images/"+img[i]+"')";
i++;
if(img.length==i)
{
i=0;
}
window.setTimeout("slide()",1000);
}
