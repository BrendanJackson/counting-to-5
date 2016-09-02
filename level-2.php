<?php include('/assets/inc/header.php') ?>

<ol>
    <li>page loads</li>
    <li>3 seconds later a bubble floats up</li>
    <li>if clicked, "clicked" class is added and it will display a number 1</li>
    <li>at animation end, counter for times "clicked" class has been added is checked</li>
    <li>For everytime the class "clicked" is added to a bubble, +1 is added to a (hidden) counter</li>
    <li>if counter !== 3, restart loop with no delay</li>
    <li>When Counter == 3, go to the next level</li>
    <li>level # pops up and fades out on screen for 3 seconds</li>
    <li>a bubble floats up</li>
    <li><strong>1 seconds later another bubble floats up</strong></li>
    <li>whichever bubble is clicked 1st, that will get #1, the next bubble will get #2, this will continue to atleast 5</li>

    <li></li>
</ol>


<h1 class="count"></h1>
<div class="col-xs-6"></div>
<div class="col-xs-6">
    <h1>issues</h1>
    <ul>
        <li>php rand in CSS, unbind after each animation</li>
    </ul>
</div>



<?php include('/assets/inc/footer.php') ?>
