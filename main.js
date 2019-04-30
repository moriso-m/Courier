/* ############### index.php ##################*/

// fix navbar at the top when scrolling
$(window).scroll(function() {
   var pos = $(window).scrollTop();
   console.log(pos);
   if (pos>80) {
       $('nav').addClass('navbar-fixed-top fade in');
       $('nav').css({
           
       })
   }
   else if(pos < 80){
       $('nav').removeClass('navbar-fixed-top');
   }
});

/*pop up for newsletter subscription*/
/*
$(document).ready(function() {

    var delay = 2000; // milliseconds
    var cookie_expire = 0; // days

    var cookie = localStorage.getItem("list-builder");
    if(cookie == undefined || cookie == null) {
        cookie = 0;
    }

    if(((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
        $("#list-builder").delay(delay).fadeIn("fast", () => {
            $("#popup-box").fadeIn("fast", () => {});
        });

        $("button[name=subscribe]").click(() => {
            $.ajax({
                type: "POST",
                url: $("#popup-form").attr("action"),
                data: $("#popup-form").serialize(),
                success: (data) => {
                    $("#popup-box-content").html("<p style='text-align: center'>Thank you for subscribing to The Polyglot Developer newsletter!</p>");
                }
            });
        });

        $("#popup-close").click(() => {
            $("#list-builder, #popup-box").hide();
            localStorage.setItem("list-builder", (new Date()).getTime());
        });
    }

});
*/


/* #################### save courier order ################*/
$('#courier-order,#courier-order-index').click(function (e) {
    e.preventDefault();
    ajaxHandler('save-order.php','#alert',$('#order-form').serialize());
});


$(document).ready(function() {
    $("#track-close").click(() => {
        $("#tracking-builder, #track-shipment").hide();
        localStorage.setItem("list-builder", (new Date()).getTime());
    });
});

/* #################### add review ################*/

$('#send-review').click(function (e) {
    e.preventDefault();
    if($('#rating').val() < 6 && $('#rating').val() > 0 || $('#rating').val() ==''){
        ajaxHandler('send-review.php','.reviews',$('#review-form').serialize());
        $('#name').val('');
        $('#comment').val('');
        $('#rating-div').removeClass('has-error');
    }
    else{
        $('#rating-div').addClass('has-error');
        $('#hidden').show();
        $('#hidden').css('color','red');
    }
  });



  /* #################### like comment ################*/
  var like;
function like(like){
    $.post(
        "send-review.php",
        {
            like: like
        },
        function (data, status) {
            if (status === 'success'){
                $('#like'+like).text(data);
            }
        });
}


  /* #################### ajax request handler for all forms ################*/
  var url,responseTarget,src;
  function ajaxHandler(url,responseTarget,src){
    $.ajax({
        url: url,
        type: 'POST',
        data: src,
        success: function (data,status) {
            $(responseTarget).html(data);
          }
    });
  }