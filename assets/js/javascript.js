$(function(){
    //waits 3 seconds before running anything
    setTimeout(function(){

        $('body').append('<div class="test text-center"><h1>#</h1></div>');
        $('.test').addClass('animation');
        $('.animation').on('webkitAnimationEnd oanimationend oAnimationEnd msAnimationEnd animationend',
            function(e){
                //clicked it waits 3 seconds before disappearing
                if($('.test').hasClass('clicked')){
                    $('.test').fadeOut(3000, function(){
                        $(this).remove();
                    });
                } else {
                    //clicked it waits 1 second before disappearing
                    $('.test').fadeOut(1000, function(){
                        $(this).remove();
                    });
                }
            });


    }, 3000);
});



$(document).on({
    click: function(e) {
        $(this).addClass('clicked');
    }
}, '.test');