jQuery(function($) {

  var page = 2;
  var ajaxurl = "../../wp-admin/admin-ajax.php";

  $('body').on('click', '.loadMore', function() {
    var data = {
      'action': 'load_posts_by_ajax',
      'page': page,
    };

    $.post({
      url: ajaxurl,
      data: data,
      type: 'POST',
      beforeSend : function( xhr ) {
        $('#sloading').removeClass('fa-long-arrow-down').addClass('fa-spinner');
      },
      success : function( response ) {
        $('#sloading').removeClass('fa-spinner').addClass('fa-long-arrow-down');
        $('.ajaxPost').append(response);
        console.log(response);
        page++;
      }
    });
  });
});