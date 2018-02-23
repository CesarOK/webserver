<!DOCTYPE html>
<html>
<title>Sample Web Page</title>

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
