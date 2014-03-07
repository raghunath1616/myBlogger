/*$(document).on('click','#comment',function(e) {
	e.preventDefault();
	$('#post').removeClass("active");
	$('#comment').addClass("active");
});

$(document).on('click','#post',function(e) {
	e.preventDefault();
	$('#comment').removeClass("active");
	$('#post').addClass("active");
});*/

$(document).ready(function(){
   $(".commentmodal").click(function(){ 
     var postId = $(this).data('id');
     $(".modal-body #post_id").val( postId );
   });
});

$("#signup").click(function(e){
   	if($('#password').val() != $('#cnf_password').val())
   	{
   		$("#registerModal").modal('show');
   		alert('Your password is not matching')
   		e.preventDefault();
   		
   	}
});