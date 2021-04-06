<?php

require './vendor/JSONReader.php';
require './class/User.php';

$userListArray = JSONReader('./dataset/users-management-system.json');


$userListObj = array_map(function($user){
    return new User ($user['id'], $user['firstName'], $user['lastName'], $user['email'], $user['birthday']);
}, $userListArray);



?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        input.form-control {
            padding: 2px;
            line-height: 100%;
            font-size: 1.5rem;
        }
    </style>
</head>
<form action="./index.php">
<body>
    <header class="container-fluid bg-secondary text-light p-2">
        <div class="container">
            <h1 class="display-3 mb-0">
                User management system
            </h1>
            <h2 class="display-6">user list</h2>
        </div>
    </header>
    <div class="container">
        <table class="table">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>cognome</th>
                <th>email</th>
                <th cellspan="2">età</th>
            </tr>
            <tr>
                <th>
                    <input class="form-control" type="text">
                </th>

                <th>
                    <input class="form-control" type="text">
                </th>

                <th>
                    <input class="form-control" type="text">
                </th>

                <th>
                    <input class="form-control" type="text">
                </th>

                <th>
                    <input class="form-control" type="text">
                </th>
                <th>
                    <button class="btn btn-primary" type="submit">cerca</button>
                </th>
            </tr>
            <?php foreach ($userListObj as $user) {?>
                
            
            <tr>
                <td><?= $user-> getUserId()?></td>
                <td><?= $user->getFirstName()?></td>
                <td><?= $user->getLastName()?></td>
                <td><?= $user->getEmail() ?></td>
                <td><?= $user->getAge() ?> </td>
                <td><?= $user->isAdult($user->getAge()) ?> </td>
            </tr>
            <?php }?>
        
        </table>
    </div>
</body>
</form>
</html>