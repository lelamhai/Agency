$(document).ready(function(){
    $("#h-custom-ul_menu").on('click','.h-custom-li-category .item',function(){
        $('.h-custom-li-category .item').removeClass("active");
        $(this).addClass("active"); 
        var id = $(this).data("id");

        $.ajax({
            type : "GET", 
            dataType : "html", 
            url : "http://localhost/Agency/wp-admin/admin-ajax.php",
            data : {
                action: "random", 
                idPost:  id,
            },
            beforeSend: function(){
                $(".h-custom-header-col-md-4").remove();
            },
            success: function(response) {

                $( "#h-custom-header-category" ).append( response );
                //  console.log(response);
            },
            error: function( jqXHR, textStatus, errorThrown ){
                 console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        });


   });
});