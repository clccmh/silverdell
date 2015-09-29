
$(document).ready(function(){
    $("#submit").click(function() {
	  var dataString = {
            'post_box'              : $('input[name=post_box]').val(),
        };
	  
	  $.ajax({
		type: "POST",
		url: 'includes/newPost.php',
		data: dataString,
		success: function(s){
			alert("Successfully posted!");
		},
		error:function(exception){alert('Exception: ' + exception);},
		complete: function(){ $('input[name=post_box]').val(' ');}
		});
		event.preventDefault();
	});
	
	$("#about").load("includes/getAbout.php");
	$("#content").load("includes/getContent.php");
		
});