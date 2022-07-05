<?php 

    session_start();

    $conn = mysqli_connect("localhost", "root", "jordan88", "ssdocs");

    if(mysqli_connect_error()) {
        echo 'Sorry, could not establish a database connection ' . mysqli_connect_errno(); 
    }

    function generateVerifyKey($length = 40) {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefhijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    // Start the session 
    function login() {
        global $conn;
        $discord = mysqli_real_escape_string($conn, $_POST['discord']);
        $verification_key = $_POST['verification_key'];

        $doesUserExist = mysqli_query($conn, "SELECT * FROM customers WHERE discord = '$discord' AND verification_key = '$verification_key'");
        if(mysqli_num_rows($doesUserExist) == 1) {
            $logged_in_user = mysqli_fetch_assoc($doesUserExist);

            $_SESSION['user'] = $logged_in_user;
            header("location: dashboard");
        }
    }

    // Is user logged in
    function isLoggedIn() {
        if(isset($_SESSION['user'])) {
            return true;
        } else {
            return false;
        }
    }

    ?>