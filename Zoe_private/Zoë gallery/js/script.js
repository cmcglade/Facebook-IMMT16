var pictures = [
	{
		"title":"White lily",
		"description":"A fragrant flower.",
		"url":"img/img1.jpg"
	},
	{
		"title":"Toronto skyline",
		"description":"A view of the city",
		"url":"img/img2.jpg"
	},
	{
		"title":"Sunrise",
		"description": "Morning in Little Italy",
		"url":"img/img3.jpg"
	}
];

//This tells jquery to wait until the document loads before running this function
$(document).ready(function(){
	
	//Get picture data
	var count = 0;
	$(pictures).each(function(){
		
		//Page container
		var img = $(document.createElement("img"));
		$(img).attr({
			"src":this.url,
			"data-index":count,
			"title":this.title,
			"alt":this.description
		});

		//Putting images in the html container
		$(img).appendTo("figure");

		//Creating thumbnails
		var thumb = $(img).clone().appendTo("nav");

		//Adding on-click action in jquery - a "bind"
		$(thumb).bind("click",function(){

			//Hiding all the images sitting in the <figure> element
			$("figure img").each(function(){
				$(this).addClass("hidden");
			});
			//This will show the selected image by taking the index number of the image and unhiding it
			$('figure img[data-index="'+this.getAttribute("data-index")+'"]').removeClass("hidden");
			//This will show the image title and description
			$('h3').html(this.getAttribute("title"));
			$('figcaption').html(this.getAttribute("alt"));
		});

	count++;

	});

});