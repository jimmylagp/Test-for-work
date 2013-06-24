var timer = setInterval(morePost, 3000);

$(document).ready(function(){
	$(document).on("mouseover", "#visible .post", function(e) {
	    clearInterval(timer);
	});

	$(document).on("mouseout", "#visible .post", function(e) {
	    timer = setInterval(morePost, 3000);
	});
});

function morePost(){
	$("#visible .post:first").clone().appendTo("#visible");

	$('#visible .post:first').animate({
        opacity: 0,
    }, {
        duration: 1000,
        queue: false,
        complete: function(){
        	$('#visible .post:first').animate({
	            height: 0,
	            margin: 0,
	        }, {
	            duration: 500,
	            complete: function(){ $(this).remove(); }
	        });
		}
    });
}