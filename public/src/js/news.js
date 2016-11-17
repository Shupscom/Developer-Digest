/**
 * Created by BJ on 18/08/2016.
 */
 var newId,title,author,picture,body;
 var  titleContent = null;
 var authorContent = null;
 var pictureContent = null;
 var bodyContent = null;
$('.table-responsive').find('.table').find('.edit').on('click',function(event){
    event.preventDefault();
     newId = event.target.parentNode.parentNode.parentNode.dataset['newsid'];
     title = event.target.parentNode.parentNode.parentNode.childNodes[3];
     author = event.target.parentNode.parentNode.parentNode.childNodes[5];
     picture = event.target.parentNode.parentNode.parentNode.childNodes[7];
     body = event.target.parentNode.parentNode.parentNode.childNodes[9];
    console.log(newId,title,author,picture, body);
    //titleContent = title.textContent;
    //authorContent = author.textContent;
    //pictureContent = picture.textContent;
    bodyContent = body.textContent;
    console.log(titleContent,authorContent,bodyContent);
    $('#title').val(titleContent);
    $('#author').val(authorContent);
    $('#file').val(pictureContent);
    $('#body').val(bodyContent);

    $('#edit-modal').modal();
});

$('#modal-save').on('click',function() {
    $.ajax({
        method: 'POST',
        url: urlEditNews,
        data: {title:  $('#title').val(), author: $('#author').val(),file:$('#file').val(),
            body: $('#body').val(), newsId: newId, _token: token}
    }).done(function(msg){
         $(titleContent).text(msg['new_title']);
        $(authorContent).text(msg['new_author']);
        $(pictureContent).text(msg['new_picture']);
        $(bodyContent).text(msg['new_body']);
        console.log(titleContent,authorContent,pictureContent,bodyContent);
        $('#edit-modal').modal('hide');
    });
    location.reload();

});
$('.view').on('click',function(){
    newId = event.target.parentNode.parentNode.parentNode.dataset['newsid'];
    title = event.target.parentNode.parentNode.parentNode.childNodes[3];
    console.log(title);
    author = event.target.parentNode.parentNode.parentNode.childNodes[5];
    picture = event.target.parentNode.parentNode.parentNode.childNodes[7];
    body = event.target.parentNode.parentNode.parentNode.childNodes[9];
    console.log(newId,title,author,picture, body);
    titleContent = title.textContent;
    authorContent = author.textContent;
    pictureContent = picture.textContent;
   bodyContent = body.textContent;
    console.log(titleContent,authorContent,bodyContent);
    $('#view_title').val(titleContent);
   $('#view_author').val(authorContent);
    $('#view_file').text(pictureContent);
    //$('#view_file').attr('src','public/img/uploads/admin/'+pictureContent);
    $('#view_body').val(bodyContent);
    $('#view-modal').modal();
});
$('.test').click(function(){
   bootbox.prompt('Are you sure',function(){
       alert('ok');
   })
})