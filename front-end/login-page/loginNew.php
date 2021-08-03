<!-- Paminus Murungi CIT-223-032/2018
purity nyakundi -CIT-227-028/2018
Alois Mutharimi - CIT-227-001/2018
Collins Kipkorir - CIT-227-006/2018
Tom Ngunyi King'ori - CIT-227-029/2018
Brian Nyagwansa Nyagwansa - CIT-227-032/2018
BruceFelix Macharia CIT-223-015/2018 -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" href="../../styles/style.css">
    <?php 
    require '../../back-end/login.php';
    ?>
</head>
<body>

   <div class="error">
   <?php 

$noUser = "<h1 style= 'color:red; text-transform: uppercase'>User not registered</h1> <br> ";
$endOfAttempts = "<div style = 'color:red'> <strong>You can only make 3 attempts at a login. <br> Please contact your website admin. </strong></div>";
$checkPassword = "<div style = 'color:red'> <strong>Check Your password </strong></div>";

        if($_SESSION['errorNumber'] == 1){
            echo $checkPassword;
        }
        else if($_SESSION['errorNumber'] == 2){
            echo $endOfAttempts;
        }
        else if($_SESSION['errorNumber'] == 3){
            echo $noUser;
        }
        
    ?>
   </div>
 

    <form action="../../back-end/login.php" method="POST">
        <h1 class="caption">Log into an account</h1> <br> <br>
        <label for="username">Enter username</label>
        <input type="text" name="username" required placeholder="e.g John Doe"> <br>

        <label for="password">Enter password</label>
        <input type="password" name="password" required placeholder="********"> <br>

        <div class="sect">
            <input type="submit" value="Log in" class="submit">
        <input type="reset" value="Cancel">
        </div>

        <p>
            Don't have an account? <a href="../signup-page/signup.html" style="text-decoration: none; color: red;">Sign up</a>
        </p>
    </form>

    <script type="text/javascript" src="../js/inactivity.js"></script>
</body>
</html>