/* ############### index.php ##################*/

// fix navbar at the top when scrolling
$(window).scroll(function() {
   var pos = $(window).scrollTop();
   console.log(pos);
   if (pos>50) {
       $('nav').addClass('navbar-fixed-top container fade in');
       $('nav').css({
           
       })
   }
   else if(pos < 50){
       $('nav').removeClass('navbar-fixed-top container');
   }
});

/* #################### save courier order ################*/
$('#courier-order').click(function (e) {
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url : 'save-order.php',
        data : $('#order-form').serialize(),
        success : function (data,status) {
            $('#alert').html(data);
        }
    });
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
