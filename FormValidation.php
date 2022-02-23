<?php
 //class FormValidation{
    if(isset($_POST['butoniS'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    /*public function getEmail(){
        return $this->$email;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }
    
    public function getPassword(){
        return $this->$password;
    }
    */

   //public function validoEmail(){
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    if (!preg_match ($pattern, $email) ){  
        $ErrMsg = "Email is not valid.";  
                echo $ErrMsg;  
    } else {  
        echo "Your valid email address is: " .$email;  
    }  
   //}

 //   public function validoPass(){

        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);
        $specialChars = preg_match('@[^\w]@', $password);
        if(!empty($_POST["password"]) && $_POST["password"] != "" ){
        
            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
                echo 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
            }else{
                echo 'Strong password.';
            }

        }
    //}

     /* public function validoSubmit(){
        if(isset($_POST['butoniLogin'])) {  
            if($nameErr == "" && $emailErr == "" && $mobilenoErr == "" && $genderErr == ""  && $agreeErr == "") {  
                echo "<h3 color = #FF0001> <b>You have sucessfully registered.</b> </h3>";  
                echo "<h2>Your Input:</h2>";  
                echo "Name: " .$name;  
                echo "<br>";  
                echo "Email: " .$email;  
                echo "<br>";  
                echo "Mobile No: " .$mobileno;  
                echo "<br>";   
                echo "Gender: " .$gender;  
            } else {  
                echo "<h3> <b>You didn't filled up the form correctly.</b> </h3>";  
            }  
            }  */
        

      }




    ?>