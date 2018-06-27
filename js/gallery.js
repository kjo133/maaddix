$(document).ready(function(){
	$.ajax({
		type: "GET",
		url: "../images/gallery.xml",
		cache: false,
		dataType: "xml",
		success: function(xml){
			$(xml).find('post').each(function(){
				$(".lightbox-gallery").append('<a href="images/images/' + $(this).find("image").text()+'" data-lightbox="example-set" data-title="' + $(this).find("description").text() + '"><img class="previewImage" src="images/images/' + $(this).find("image").text() + '"/>');
			});
		}
	});
});