//send bubbles out in pairs of 2's
//Count  on click to two at max

$(function(){
    //variables
    var number = 0;    //counts how many times "clicked" class has been added per round
    var round = 0;     //checks how many times bubble has been "clicked"
    var bubble = $('body').append('<div class="test text-center"></div>');
    var animation = $('.test').addClass('animation');
    var animateBubble = function animateBubble(){
        bubble;
        animation;
        console.log("this is the animateBubble variable");

    };
    var bubbleAnimation =  function bubbleAnimation()
    {
        console.log("This is the bubbleanimation function");
        animateBubble;
        $('.animation').on('webkitAnimationEnd oanimationend oAnimationEnd msAnimationEnd animationend',
            function (e) {
                //clicked it waits 3 seconds before disappearing
                if ($('.test').hasClass('clicked')) {
                    $(this).fadeOut(4000, function () {
                        $(this).remove();
                    });
                } else {
                    //clicked it waits 1 second before disappearing
                    $(this).fadeOut(2000, function () {
                        $(this).remove();
                    });
                }
                if(count != 3){
                    bubbleAnimation();
                } else {
                    /*add fade out/ease in to the next page*/
                    window.open("level-3.php","_self");
                }
            });
    };
    var bubbleAnimation2 = function bubbleAnimation2(){
        animateBubble();
        console.log("this is bubbleAnimation2");
    };

    //waits 3 seconds before running anything
    setTimeout(function(){

     //   bubbleAnimation2();
     //   bubbleAnimation();


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