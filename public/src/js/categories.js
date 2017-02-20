/**
 * Created by BJ on 06/08/2016.
 */
var category;
$('#add_category').on('click',function(event){
    event.preventDefault();
    category = $('#category').val();
    if(category.length === 0){
        alert('Please enter a  valid  category name');
        return;
    }
    $.ajax({
        method: 'POST',
        url: urlCategory,
        data: {category:category,_token: token},
        success: function(){
            location.reload();


        }
    })
});
var categoryId=0;
var categoryName = null;
$('.table-responsive').find('.table').find('.edit').on('click',function(event){
    event.preventDefault();
     //categoryId = event.target.parentNode.parentNode.parentNode.childNodes[1].textContent;
    categoryId = event.target.parentNode.parentNode.parentNode.dataset['categoryid'];
    categoryName = event.target.parentNode.parentNode.parentNode.childNodes[3];
     var categoryBody =  categoryName.textContent;
    $('#edit_category').val(categoryBody);
    $('#edit-modal').modal()
});
$('#modal-save').on('click',function() {
    $.ajax({
        method: 'POST',
        url: urlEditCategory,
        data: {category:  $('#edit_category').val(), categoryId: categoryId, _token: token}
    }).done(function(msg){
        $(categoryName).text(msg['new_name']);
        console.log(categoryName);
        $('#edit-modal').modal('hide');
    });
});
