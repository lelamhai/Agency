$(document).ready(function(){
    var url_home = $( "#url-home" ).val();
    // Header
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

    // load more  page news and entertainment
    $paged = 2;
    $( ".h_news" ).click(function() {
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

    // load more page handbook
    $page = 2;
    $( ".h_handbook" ).click(function() {
        var catSlug = $( "#category" ).val();
        var catName = $( "#catName" ).val();

        $.ajax({
            type : "GET", 
            dataType : "html", 
            url : url_home+"/wp-admin/admin-ajax.php",
            data : {
                action: "handbook", 
                catSlug:  catSlug,
                catName:  catName,
                paged: $page,
            },
            beforeSend: function(){
                // $(".h-custom-header-col-md-4").remove();
            },
            success: function(response) {
                $( "#h-custom-blog-wrap" ).append( response );
            },
            error: function( jqXHR, textStatus, errorThrown ){
                 console.log( 'The following error occured: ' + textStatus, errorThrown );
            }
        });
        $page ++;
    });


    // page news and entertainment
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