<?php include('/assets/inc/header.php') ?>
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

<div class="col-xs-6">
    <h1>issues</h1>
    <ul>
         <li>php rand in CSS, unbind after each animation</li>
        <li>JS "case" does not work without "index.php"</li>
        <li>on "remove()" of animation then perform "check" variable</li>
    </ul>
</div>
<?php include('/assets/inc/footer.php') ?>
