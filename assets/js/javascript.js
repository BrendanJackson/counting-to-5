$(function(){
    //variables
    var number = 0;    //counts how many times "clicked" class has been added per round
    var count = 0;     //checks how many times bubble has been "clicked"
    var bubbleAnimation =  function bubbleAnimation()
    {
        $('body').append('<div class="test text-center"></div>');
        $('.test').addClass('animation');
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
                }
            });
    }


    //waits 3 seconds before running anything
    setTimeout(function(){

        bubbleAnimation();

    }, 3000);

    //on click adds the class "clicked" and  appends a "number" to the div
    $(document).on({
        click: function(e) {


            $(this).addClass('clicked');

       }
    }, '.test');

    //adds data once per element, not once per page
    $('body').delegate('.test', 'click', function() {
        if($(this).data('clicked')) {
            return;
        }
        ++count;
        ++number;
        $(".count").html(+count);
        console.log("count:" + count );
        $(this).append('<h1>' + number + '</h1>');

        $(this).data('clicked', true);

    });

});