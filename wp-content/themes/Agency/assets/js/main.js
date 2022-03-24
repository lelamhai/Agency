$(document).ready(function(){
    var url_home = $( "#url-home" ).val();
    
    $("#h-custom-ul_menu").on('click','.h-custom-li-category .item',function(){
        $('.h-custom-li-category .item').removeClass("active");
        $(this).addClass("active"); 
        var id = $(this).data("id");
        $.ajax({
            type : "GET", 
            dataType : "html", 
            url : url_home+"/wp-admin/admin-ajax.php",
            data : {
                action: "random", 
                idPost:  id,
            },
            beforeSend: function(){
                $(".h-custom-header-col-md-4").remove();
            },
            success: function(response) {
                $( "#h-custom-header-category" ).append( response );
            },
            error: function( jqXHR, textStatus, errorThrown ){
                 console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        });
    });


    $paged = 2;
    $( ".misha_loadmore" ).click(function() {
        var category = $( "#category" ).val();
        $.ajax({
            type : "GET", 
            dataType : "html", 
            url : url_home+"/wp-admin/admin-ajax.php",
            data : {
                action: "category", 
                catName:  category,
                paged: $paged,
            },
            beforeSend: function(){
                // $(".h-custom-header-col-md-4").remove();
            },
            success: function(response) {
                $( "#h-custom-loadmore" ).append( response );
            },
            error: function( jqXHR, textStatus, errorThrown ){
                 console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        });
        $paged ++;
    });

    $( ".h-custom-search" ).click(function() {
        var areaID = $('#h-custom-area').val();
        var categoryID = $('#h-custom-category').val();
        
        $.ajax({
            type : "GET", 
            dataType : "html", 
            url : url_home+"/wp-admin/admin-ajax.php",
            data : {
                action: "area", 
                areaID:  areaID,
                categoryID: categoryID,
            },
            beforeSend: function(){
                $(".h-custom-news-col-md-3").remove();
            },
            success: function(response) {
                $( "#h-custom-loadmore" ).append( response );
            },
            error: function( jqXHR, textStatus, errorThrown ){
                 console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        });
    });

});