
<html>
<body>

<h1>My first PHP page</h1>

<?php
if($_GET["name"]=="hema")
header( 'Location: http://192.168.1.100/h/' );
echo 'github is awesome';
?>

</body>
</html>