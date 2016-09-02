<?php header("Content-type: text/css"); ?>
/*http://stackoverflow.com/questions/10333295/i-need-insert-some-php-code-in-style-sheet*/
/*php file as stylesheet*/
/*
if clicked
animation-iteration-count: 3;
else infinite loop
*/

.clicked{
    background-color:red !important;
}

.test {
    background-color: blue;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 90px;
    width: 90px;
    position: relative;
    left: 0;
    transition: all 1s;
    border-radius:4em;
}

.test h1 {
    color: #FFF;
    margin: 0;
    padding: 0;
}

.animation {
    animation: test 10s linear 1 forwards;
}

/**
* TODO: write algorithm to capture random# generated and pop it into 100% "left" field and reset on next generated box.
*/
<?php
//use a new random number per div, each div should have a unique width to be appended to (clicked or not)
//$randomNumber = rand(1,725);

function random() {
    echo rand(0, 725);

}


?>
@keyframes test {
    0%   { top: 500px; left:<?=random();?>px;}
    100% { top: 0px;   left:<?=random();?>px;}
}

//http://stackoverflow.com/questions/6662417/need-to-generate-random-number-after-time-interval
