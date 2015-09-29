
$(document).ready(function(){
    $("#submit").click(function() {
      // validate and process form here
	  //var pb = $("#post_box").val();
	  //var dataString = '$post_box=' + pb;
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
      //display message back to user here
		});
		//.done(function(data){
		//	alert('done:' + data);
		//});
  event.preventDefault();
});
});