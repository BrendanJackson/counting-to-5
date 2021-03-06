<!DOCTYPE html>
<head>
    <title>Counting to 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="assets/js/jquery_library.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.php">
    <script src="assets/js/javascript.js"></script><!--IF INDEX USE JAVASCRIPT.JS, LEVEL-2=LEVEL-2.JS, ETC-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<html>
<body>
<div class="col-xs-6">
    <ol>
        <li>page loads</li>
        <li>3 seconds later a bubble floats up</li>
        <li>if clicked, "clicked" class is added and it will display a number 1</li>
        <li>at animation end, counter for times "clicked" class has been added is checked</li>
        <li>For everytime the class "clicked" is added to a bubble, +1 is added to a (hidden) counter</li>
        <li>if counter !== 3, restart loop with no delay</li>
        <li><strong>When Counter == 3, go to the next level</strong></li>
        <li>level # pops up and fades out on screen for 3 seconds</li>
        <li>a bubble floats up</li>
        <li>1 seconds later another bubble floats up</li>
        <li>whichever bubble is clicked 1st, that will get #1, the next bubble will get #2, this will continue to atleast 5</li>
    </ol>
    <h1>Round:<span class="round"></span></h1>
</div>
<!-- Testing with a comment! -->
<div class="col-xs-6">
    <h1>issues</h1>
    <ul>
        <li>php rand in CSS, unbind after each animation</li>
        <li>JS "case" does not work without "index.php"</li>
        <li>on "remove()" of animation then perform "check" variable</li>
        <li>change level 2 link, at the end of round 3 do something then go to level-2</li>
    </ul>
</div>
<?php include('/assets/inc/footer.php') ?>
