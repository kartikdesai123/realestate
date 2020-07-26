/**
*Author: Zakaria Aboussof
*Email: aboussof.a@gmail.com
**/


// find out if the user already clicked
clicked = false;

//Handle mouseover events on stars
$("body").on('mouseover','.rating',function () {
    // change the cursor to pointer
    $(this).css('cursor', 'pointer');
    
    // If the user not yet clicked on a star
    if (!clicked) {
        // Get the current stars id
        var spanId = getStarID($(this).attr('id'));
        
        var id = $(this).attr('data-id');
        // make the current star and all precedent stars as selected ( GOLD golor)
        for (i = id; i >= 0; i--)
            $('#rat-'+spanId+'-'+ i).removeClass('glyphicon-star-empty').addClass("glyphicon-star");
    }
});

//Handle mouseleave events on stars
$("body").on('mouseleave','.rating',function () {
    // If the user not yet clicked on a star
    if (!clicked) {
        // The leaved stars id
        var id = $(this).attr('data-id');
        var spanId = getStarID($(this).attr('id'));
        // Make the leaved star as not selected
        $(this).removeClass('glyphicon-star').addClass("glyphicon-star-empty");
        // Parse the leaved stars id to int and add 1 to it
        var val = parseInt(id) + 1;

        // make the next stars from the leaved star as not selected
        for (m = val; m <= 5; m++)
            $('#rat-'+spanId+'-'+ m).removeClass('glyphicon-star').addClass("glyphicon-star-empty");

    }
});

// Handle mouseleave event on the rating DIV



// Handle click event on Star
$("body").on('click','.rating',function () {
    
    // Set clicked as true
    clicked = true;
    // get the clicked stars id
    var id = $(this).attr('data-id');

    var spanId = getStarID($(this).attr('id'));
    
    $(this).parents('.col-md-4').find('.ratingStar').val(id);
//    $("#rat-value").val(id);
    // Just for fun, you can remove or edit this if you want!
    
    // Make all stars up to the clicked star as selected ( GOLD color)
    for (i = 1; i <= id; i++)
        $('#rat-'+spanId+'-'+ i).removeClass('glyphicon-star-empty').addClass("glyphicon-star");
    
    // Parse the clicked stars id to int and add 1 to it
    var val = parseInt(id) + 1;

    for (m = val; m <= 5; m++)
       $('#rat-'+spanId+'-'+ m).removeClass('glyphicon-star').addClass("glyphicon-star-empty");
});


/**
* Method to get the Stars id from a given id looks like: val-id
**/
function getStarID(id){
    // Split the passed id by '-'
    var id_splited = id.split('-')
    
    // try to parse if to int , if its work return the value else retur undefined
    try{
       parseInt(id_splited[1]);
       return id_splited[1];
       }
    catch(e){
            return undefined;
           }
}


