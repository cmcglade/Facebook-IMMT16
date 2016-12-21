var pictures = [
{
	"title":"White lily",
	"description":"A fragrant flower.",
	"url": "img/img1.jpg"

},
{
	"title": "Toronto Skyline",
	"description":"A view of the city",
	"url":"img/img2.jpg"
},
{
	"title": "Sunrise",
	"description": "Morning in Little Italy",
	"url":"img/img3.jpg"
}

];
// this tells jquery to wait until the ocument loads before running this function
$(document).ready(function(){
//get picture data
var count = 0;
$(pictures).each(function)
//page container
var img = $(document.createElement("img"));
$ (img). attr({
"src":this.url,
"data-index":count,
"title": this.title,
"alt":this.description


});
// putting images in out html container
$(img).appendTO("figure");
//create thumbnails
var thumb = $(img).clone().appendTo("nav");
//addonclick action in jquery which is called bind
$(thumb).bind( "click",function(){
//hide all the images sitting in the figure element
$("figure img").each(function(){
$(this).addClass ("hidden");

});
//show selected image by getting its index number and unhiding it
$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
//show that title and description
$('h3').html(this.getAttribute("title"));
$( 'figcaption').html(this.getAttribute("alt"));
});
count++;

});


});