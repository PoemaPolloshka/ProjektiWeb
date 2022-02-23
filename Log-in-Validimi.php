
<?php
  if(isset($_POST['butoniLogIn'])){
    if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all fields!";
    }else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        include_once 'db.php';
       $conn = new mysqli("localhost", 'rina', 'rina123', 'web.db');
       
        $sql = "SELECT roli, email, password  FROM users";
        $result = $conn->query($sql);
        
$emri;
       
        while ($row = $result->fetch_assoc()){
            $rows[] = $row;
        }
        if(isset($rows)){
        foreach ($rows as $row)
        {
            if($email==$row['email']){

            session_start();
            $_SESSION['email'] = $row["email"];
            $_SESSION['password'] = $row['password'];
            $_SESSION['roli'] = $row['Roli'];

            header("location:shop.php");
           
        }else{
            echo "Incorrect Username or Password!";
            }

        }
    }

    }
}

?>