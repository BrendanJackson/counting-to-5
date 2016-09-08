//on Click counts to 1 at most
$(function(){
    //variables
    var number = 0;    //counts how many times "clicked" class has been added per round
    var round = 0;     //checks how many times bubble has been "clicked"
    var check = function check() {
        if (round >= 3) {
            window.open("level-2.php", "_self");
        } else {
            bubbleAnimation();
        }
    }
    var bubbleAnimation =  function bubbleAnimation()
    {
        $('body').append('<div class="test text-center"></div>');
        $('.test').addClass('animation');
        $('.animation').on('webkitAnimationEnd oanimationend oAnimationEnd msAnimationEnd animationend',
            function (e) {
                //clicked it waits 4 seconds before disappearing
                if ($('.test').hasClass('clicked')) {
                    $(this).fadeOut(4000, function () {
                        $(this).remove();
                        check();
                    });
                } else {
                    //clicked it waits 2 second before disappearing
                    $(this).fadeOut(2000, function () {
                        $(this).remove();
                        check();
                    });
                }

               //check();
            });
    };


    //waits 3 seconds before running anything
    setTimeout(function(){

        bubbleAnimation();


    }, 3000);

    //on click adds the class "clicked" and  appends a "number" to the div
    /*
    $(document).on({
        click: function(e) {

       }
    }, '.test');
    */

    //adds data once per element, not once per page
    $('body').delegate('.test', 'click', function() {
        $(this).addClass('clicked');
        if($(this).data('clicked')) {
            return;
        }
        ++round;
        number = 1;
        $(".round").html(round);
        console.log("round: " + round);
        $(this).html('<h1>' + number + '</h1>');

        $(this).data('clicked', true);

    });
});