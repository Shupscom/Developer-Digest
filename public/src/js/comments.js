/**
 * Created by BJ on 20/09/2016.
 */
$(document).ready(function(){
    $('.delete').on('click',function(event){
        event.preventDefault();
       bootbox.confirm('Are you sure',function(){

       });
    });

    function deleteComment(){

    }
});
