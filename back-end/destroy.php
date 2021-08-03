<?php
    session_start();
    // $_SESSION = array();
    // if (ini_get("session.use_cookies")) {
    //    $params = session_get_cookie_params();
    //    setcookie(session_name(), '', time() - 42000,
    //     $params["path"], $params["domain"],
    //     $params["secure"], $params["httponly"]
    //    );
    // }
    // session_destroy();
    // $_SESSION['username'] = "before";
    if(isset($_SESSION['username'])){
        // unset($_SESSION['username']);
        // session_destroy();
        $_SESSION['username'] = "Deleting session";
    }

    
    echo $_SESSION['username'];
    unset($_SESSION['username']);
    session_destroy();

    header("location: ../front-end/landing-shop/landing.php");


?>
