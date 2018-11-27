(function( $ ) {


    // Ajax-based ramdon post fetching.

    $(function(){ 
        $('body').on('click', '.new-quote-button', function(event){
            event.preventDefault();


            $.ajax({
                method: 'get',
                url: api_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1', 
                cache: false
            }).done(function(data) {
         
                const post = data.shift(),
                entryContent = post.content.rendered,
                title = post.title.rendered,
                quoteSource = post._qod_quote_source,
                quoteSourceUrl = post._qod_quote_source_url;
                
                $('.entry-content').html(entryContent);
                $('.entry-meta').html('<h2>- ' + title + '</h2>');
                $('.source').html(', <a class="source-url" href="' + quoteSourceUrl + '">' + quoteSource + '</a>');
                
                
                // get the first and only post array

                // update the quote content and name of the quoted person

                // display quote source if available

                // update the URL using history

                // make the back and forward nav work with the history API    

            }); 
        });
    });

    /* Ajax-based front-end post submissions */

        $(function() {   
                
            $('#submit-form').on('submit', function(event) {
                event.preventDefault();
                const data = {
                    title: $('#author-name-field').val(),
                    content: $('#quote-content-field').val(),
                    _qod_quote_source: $('#quote-source-field').val(),
                    _qod_quote_source_url: $('#quote-url-field').val(),
                    post_status: 'pending' 
                };
                $.ajax({
                    method: 'POST',
                    url: api_vars.root_url + 'wp/v2/posts',
                    data: data,
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader( 'X-WP-Nonce', api_vars.nonce );
                    }
    
                }).done(function() {
                    

                    $('#submit-form').slideUp().find('textarea, input[type="submit"], input[type="text"]').val('');

                    $('.success-message').text(api_vars.success);
                    
                    // Use jquey to hide the form in a slidey way

                    // Clear the form fields and hide the form
    
                    // show success message using the var from functions.php
    
    
                }).fail(function() {

                    $('.sorry-message').text(api_vars.failure);
                    // post and alert wih failure var from functions.php
                })
            });
        });
    
})(jQuery);