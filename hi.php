<!DOCTYPE html>

<html>

<head>
  <title>Hello!</title>
</head>

<body>

<?php

try{
    $db = new PDO('mysql:host=localhost;dbname=data', 'root', '' );
    echo('vous etes connectÃ© !');
}
catch(PDOException $e)
{ $error_message = $e->getMessage();
echo $error_message ;
exit();
    }

?>

</body>
</html>