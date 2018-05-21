 

var postId = 0;
var postBodyElement = null;
function divFunction(event) {
    event.stopPropagation();

    postBodyElement =event.target.parentNode.parentNode.childNodes[1];
    var postBody = postBodyElement.textContent;
    postId = event.target.parentNode.parentNode.dataset['postid'];
    $('#post-body').val(postBody);	
    $('#edit-modal').modal();
  }
   function Savings(){

  $.ajax({
   method: 'POST',
   url: urlEdit,
   data: {body: $('#post-body').val(), postId: postId, _token:token} 
   })
   .done(function(msg){
    $(postBodyElement).text(msg['new_body']);
    $('#edit-modal').modal('hide');
   });
}





