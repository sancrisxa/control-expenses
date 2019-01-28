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
    <table>
        <tr>
            <th>Nº</th>
            <th>Login</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
        <?php $n = 0;?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>   
                    <td><?php echo ++$n;?></td>
                    <td><?php echo $row["UserLogin"];?></td>
                    <td><?php echo $row["UserLogin"] . " " .$row["UserLastName"];?></td>
                    <td><?php echo $row["UserEmail"];?></td>
                </tr>
            <?php endwhile;?>     
    </table>
        <?php else:?>
            
            <p><?php echo "0 results";?></p>

        <?php endif;?>   
</body>
</html>