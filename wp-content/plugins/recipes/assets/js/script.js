jQuery(document).ready(function($) {
    $('.btn-counter').on('click', function(e) {
        e.preventDefault();

        let recipe_id = jQuery(this).attr('data-recipe-id');
        let likeBtn = $(this);

        jQuery.ajax({
            type: 'post',
            dataType: 'json',
            url: my_ajax_object.ajax_url,
            data: {
                action:'recipe_likes', 
                'recipe_id': recipe_id, 
                'nonce': my_ajax_object.nonce
            },
            success: function(result){
                let new_value = result.data.count;
                likeBtn.attr('data-count', new_value );

            }
        });
    });
});