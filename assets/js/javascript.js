$(function(){
    //variables
    var number;    //counts how many times "clicked" class has been added per round
    //var counter;   //checks how many times bubble has been "clicked"
    var count;     //checks how many times bubble has been "clicked"
    var bubbleAnimation =  function bubbleAnimation()
    {
        $('body').append('<div class="test text-center"></div>');
        $('.test').addClass('animation');
        $('.animation').on('webkitAnimationEnd oanimationend oAnimationEnd msAnimationEnd animationend',
            function (e) {
                //clicked it waits 3 seconds before disappearing
                if ($('.test').hasClass('clicked')) {
                    $('.test').fadeOut(3000, function () {
                        $(this).remove();
                    });
                } else {
                    //clicked it waits 1 second before disappearing
                    $('.test').fadeOut(1000, function () {
                        $(this).remove();
                    });
                }
            });
    }


    //counter is checked periodically
 /*
  function checkForChanges(){
        if ($('.test').hasClass('clicked')){
            var i = 0;
            counter = ++i;
            console.log(counter);
        } else{
            setTimeout(checkForChanges, 500);
        }
    }
   */
    //counter function is called
    //    $(checkForChanges);


    //waits 3 seconds before running anything
    setTimeout(function(){

        bubbleAnimation();

    }, 3000);

    if(count != 3){
        bubbleAnimation();
    }

});

/* function is not very modular, fix this so you can run things more cleanly
* if(counter == 3){
*   run next level
* } else {
*   loop bubble animation
* }
*
* */



//on click appends a "number" to the div
$(document).one({
    click: function(e) {
        number = 1;
        $(this).append('<h1>' + number + '</h1>');

    }
}, '.test');
//on click adds the class "clicked" to the div
$(document).on({
    click: function(e) {
        count = 0;
        $(this).addClass('clicked');
        $(".count").html(++count);
        console.log("count:" + count );
   }
}, '.test');