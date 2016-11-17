/**
 * Created by BJ on 02/09/2016.
 */
$(document).ready(function(){

    var   postId,title,category,author,picture,body,author_description,author_picture;
    var  titleContent = null;
    var categoryContent = null;
    var authorContent = null;
    var pictureContent = null;
    var bodyContent = null;
    var author_descriptionContent = null;
    var author_pictureContent = null;

    $('.view').on('click',function(event){
        event.preventDefault();
        postId = event.target.parentNode.parentNode.parentNode.dataset['postid'];
        title = event.target.parentNode.parentNode.parentNode.childNodes[3];
        author = event.target.parentNode.parentNode.parentNode.childNodes[5];
        category = event.target.parentNode.parentNode.parentNode.childNodes[7];
        picture = event.target.parentNode.parentNode.parentNode.childNodes[9];
        body = event.target.parentNode.parentNode.parentNode.childNodes[11];
        author_description = event.target.parentNode.parentNode.parentNode.childNodes[13];
        author_picture = event.target.parentNode.parentNode.parentNode.childNodes[15];
        console.log(postId,title,category,author,picture,body,author_description,author_picture);
        console.log(author_picture);
        titleContent = title.textContent;
        authorContent = author.textContent;
        categoryContent = category.textContent;
        pictureContent = picture.textContent;
        bodyContent = body.textContent;
        author_descriptionContent = author_description.textContent;
        author_pictureContent = author_picture.textContent;
        console.log(titleContent,authorContent,categoryContent,bodyContent,pictureContent,author_descriptionContent,author_pictureContent);
        $('#title').val(titleContent);
        $('#author').val(authorContent);
        $('#category').val(categoryContent);
       // $('#file').val(pictureContent);
        $('#body').val(bodyContent);
        $('#description').val(author_descriptionContent);
       // $('#author_picture').html(author_pictureContent);
        $('#view-modal').modal();
    })
});