<?php session_start(); ?>
<html>
<head>
    <meta content="text/html; charset=UTF-8" http-equiv="content-type">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tancar la sessió</title>
</head>    
<body>
    <?php $_SESSION['acces']=0;
    session_destroy();
    echo "Has tancat la sessió<br><br>\n";
    print '<meta http-equiv="refresh" content="2;url=./login.html">';
    ?>
</body>
</html>