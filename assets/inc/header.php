<?php
//TODO: CUT OUT HEADER.PHP
$javascript;
$url = $_SERVER['REQUEST_URI'];
  switch ($url){
      // case "/five/",|| substr( $url, 0, 7 ) === "/five/\40"
            case "/five/index.php" || "/five/" : $javascript = "javascript.js"; break;
            case "/five/level-2.php": $javascript = "javascript2.js"; break;
            case "/five/level-3.php": $javascript = "javascript3.js"; break;
            case "/five/level-4.php": $javascript = "javascript4.js"; break;
            case "/five/level-5.php": $javascript = "javascript5.js"; break;
            default: $javascript = "something is wrong"; break;
          }

//print_r($url);
print_r($javascript);
?>
<!DOCTYPE html>
<head>
    <title>Counting to 5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="assets/js/jquery_library.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/styles.php">
    <script src="assets/js/<?=$javascript?>"></script><!--IF INDEX USE JAVASCRIPT.JS, LEVEL-2=LEVEL-2.JS, ETC-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<html>
<body>