<?php 

// Login Function 
function login($email, $password){
    session_start();
    include('db_config.php');
    include('alerts.php');
    $search_user = "SELECT * FROM `users` WHERE `email` = '$email'";
    $query = $conn->query($search_user);
    $count = mysqli_num_rows($query);
    if($count == 1){
        $enc_password = md5($password);
        foreach($query as $i){
            $password = $i['password'];
            $name = $i['name'];
        }
        if($password == $enc_password){
            $_SESSION['user'] = $email;
            $_SESSION['name'] = $name;
            echo "<script type='text/javascript'>";
            echo "window.location.href = 'profile.php';";
            echo "</script>";
        }
        else{
            $alert = new PHPAlert();
            $alert->warn("Incorrect Password");
        }
    }
    else{
        $alert = new PHPAlert();
        $alert->info("No User Found");
    }
}

// Registration Function 
function register($name, $email, $password){
    include('db_config.php');
    include('alerts.php');
    $search_user = "SELECT * FROM `users` WHERE `email` = '$email'";
    $query = $conn->query($search_user);
    $count = mysqli_num_rows($query);
    if($count >= 1){
        $alert = new PHPAlert();
        $alert->info("Email Already Used");
    }
    else{
        $enc_password = md5($password);
        $insert_user = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$enc_password')";
        $query = $conn->query($insert_user);
        if($query){
            $alert = new PHPAlert();
            $alert->success("User Registration Successfull");
        }
        else{
            $alert = new PHPAlert();
            $alert->warn("User Not Created");
        }
    }
}

?>