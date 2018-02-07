<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
        <link href="s.css" rel="stylesheet">
    </head>
    <body>
        <!--Form-->
        <form action=# method="post">
        <input type="text" name="text">
        <input type="submit">
        </form>
        <?php
$text=$_REQUEST['text'];
echo"$text";
        ?>
    </body>
</html>
