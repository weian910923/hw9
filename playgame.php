<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf8">
        <title>戳戳樂</title>
    </head>
    <body>
        <h1>戳戳樂</h1>
        <form action = "output.php">
        <table border="1" cellpadding="10">
            <tr>
              <td><a href="lose.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png"  width="200" height="200"></a></td>
              <td><a href="win.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></td>
              <td><a href="lose.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></td>
            </tr>   
            <tr>
              <td><a href="win.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></td>
              <td><a href="lose.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></td>
              <td><a href="win.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></td>
            </tr>
            <tr>
              <th><a href="lose.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></th>
              <th><a href="win.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></th>
              <th><a href="win.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/52/YouTube_social_white_circle_%282017%29.svg/1920px-YouTube_social_white_circle_%282017%29.svg.png" width="200" height="200"></a></th>
            </tr>
                <?php
                for ( $i=0 ; $i<2 ; $i++){
                    if ($i= 1){
                        echo '<a href="win.php">';
                    }
                    else{
                        echo '<a href="lose.php">';
                        
                    }
                }
                echo "<br>";
                ?>
        
        </table>
        </form>

    </body>
</html>
