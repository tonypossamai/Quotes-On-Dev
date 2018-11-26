(function( $ ) {


    // Ajax-based ramdon post fetching.




    $('body').on('click', '.new-quote-button', function(){
        jQuery.ajax({
            method: 'get',
            url: api_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1', 
            cache: false
        }).done(function(data) {
            console.log(data);

            // get the first and only post array

            // update the quote content and name of the quoted person

            // display quote source if available

            // update the URL using history

            // make the back and forward nav work with the history API    
            
        });
   
     
    });

              
    
    /* Ajax-based front-end post submissions */
    // $(function(){

    //     // Event on submit of the form

    //     $.ajax({
    //         method: 'get',
    //         url: api_vars.root_url + 'wp/v2/posts',
    //         // data,
    //         beforeSend: {

    //             // get the code to add a nonce from the documentation 
    //         }

    //     }).done(function(){
    //         // clear the form fields and hide the form
    //         // use jQuery to hide the form in a slidey way

    //         // show success message using the var from functions.php


    //     }).fail(function(){
    //         // post an alert with failure var from functions.php
    //     })
    // });

})(jQuery);
    
