<?php 
    require_once '../Controllers/MenuController.php';
    $produkti = new MenuController;
    if(isset($_POST['submit'])){
        $produkti -> insert ($_POST);
    }
?>

<div>
    <form method="POST">
            Title:
            <input type="text" name="content">
            <br>
            Image:
            <input type="file" name="image">
            <!--Content:
            <textarea name ="body" cols="30" rows="10"></textarea>-->
            <input type="submit" name="submit" value="Save">
        </from>
        <p>Create menu test </p>
</div>