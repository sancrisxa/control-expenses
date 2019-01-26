<?php

require_once ('../../../vendor/autoload.php');

use Code\Connection\Connection;
use Code\User\Dao\UserDao;

$connection = new Connection();

$userDao = new UserDao($connection);

$result = $userDao->selectUsers();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Usuarios</h2>
    <?php if ($result->num_rows > 0): ?>

        <ul>
            <?php while($row = $result->fetch_assoc()): ?>

                <li>
                    <?php echo "id: " . $row["UserID"]. " - Login: " . $row["UserLogin"] . " - Name: " . $row["UserName"]. " " . $row["UserLastName"]. " - E-mail: " . $row["UserEmail"]. "<br>";?>
                </li>

            <?php endwhile;?>
        </ul>
    <?php else:?>

        <p><?php echo "0 results";?></p>

    <?php endif;?>
 
    
</body>
</html>