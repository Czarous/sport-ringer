<?php


$conn = new mysqli('localhost','root','','sports_management_system');
if($conn->connect_error){
	die("Connection Failed : ". $conn->connect_error);
} 
else {
	// echo "Registration successfully...";

}

$email = $_POST['email'];
$password = $_POST['password'];
session_start();

// check if the user is already logged in
if(isset($_SESSION['email']))
{
    header("location: sports_scheduling/index.php");
    exit;
}

$email = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['email'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter email and password";
        header('Location: ' . "/newproject?error=".$err);
    }
    else{
        $username = trim($_POST['email']);
        $password = trim($_POST['password']);
    }

if(empty($err))
{
    $sql = "SELECT id, email, password FROM registrationpage WHERE email = ? and password = ?";
    $stmt = mysqli_prepare($conn, $sql);
    $param_email = $username;
    mysqli_stmt_bind_param($stmt, "ss", $param_email,$password);
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    // mysqli_stmt_bind_result($stmt, $id, $email, $password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        // if(password_verify($password, $password))
                        // {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["email"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: sports_scheduling/index.php");
                            
                        // }
                    }

                }
                else{
                    header('Location: ' . "/newproject?error=Username or Password Incorrect");
                }

    }
}    


}
	
	

	
?>



