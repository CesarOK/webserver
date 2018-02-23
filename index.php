<!DOCTYPE html>
<html>
<title>Pagina do Cesar e do Abdala</title>

<body>
  Welcome to MyExample.com <br>
  <?php
    include('test.php');
    echo date('l, F jS, Y');
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    test();
    ?>
</body>

</html>
