<?php
    include_once '../config.php';
    include_once CON_FRONT.'customerController.php';
    $cust = index();
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

    <?php include "../layout/adminHeader.php";?>
    <br><br>

    <div class="section-title text-center">
        <h2 style="font-weight: 700;">Customer Info Table</h2>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>


    <table border = "1 px" align="center">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>phone</th>
            <th>address</th>
            <th>join date</th>
            <th>login Id</th>
            <th>Option</th>
        </tr>
        <?php foreach($cust as $c)
        { ?>
        <tr>
            <td><?php echo $c->Id ?></td>
            <td><?php echo $c->Name ?></td>
            <td><?php echo $c->Email ?></td>
            <td><?php echo $c->Phone ?></td>
            <td><?php echo $c->Address ?></td>
            <td><?php echo $c->Join_Date ?></td>
            <td><?php echo $c->Login_Id ?></td>
            <td><a href="details.php?id=<?php echo $c->Id ?>">details</a> | <a href="edit.php?id=<?php echo $c->Id ?>">Edit</a></td>
        </tr>
        <?php } ?>
    </table>
<br>
    <br>
    <br>
    <br>
    <br>
    <?php include "../layout/adminFooter.php";?>


</body>
</html>