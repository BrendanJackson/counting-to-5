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
    height: 90px;
    width: 90px;
    position: relative;
    left: 0;
    transition: all 1s;

}

.animation {
    animation: test 10s linear 1 forwards;
}

/**
* TODO: write algorithm to capture random# generated and pop it into 100% "left" field and reset on next generated box.
*/
@keyframes test {
    0%   { top: 0px; left:<?=rand(1,725);?>px;}
    100% { top: 500px;  }
}
