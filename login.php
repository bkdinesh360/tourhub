<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourHubSystem -- Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <style>
         * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: sans-serif;
        list-style: none;
        text-decoration: none;
        color: var(--dark);
      }
      html {
        scroll-behavior: smooth;
      }
      :root {
        --maincolor: rgb(6, 120, 6);
        --dark: #1b1b1e;
        --light: #cfe5f5;
        --secondarycolor: #fb2056;
      }
      .signup_container {
        position: absolute;
        left: 0;
        top: 0;
        background: rgba(246, 244, 247, 0.99);
        height: 100vh;
        width: 100%;
        padding: 5%;
      }

      .signup_container form {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 350px;
        background-color: var(--light);
        padding: 15px;
      }
      .reset {
        text-align: right;
      }
      .reset input {
        background-color: white;
        border: none;
        font-size: 24px;
        color: var(--maincolor);
        padding: 0 7px;
        cursor: pointer;
      }
      .signup_container form h3 {
        text-align: center;
        font-size: 25px;
        color: var(--maincolor);
        padding: 3px 0 15px 0;
      }
      .signup_container form .sign_input input {
        width: 100%;
        font-size: 18px;
        padding: 7px;
        margin-bottom: 15px;
        border: none;
        border-bottom: 2px solid var(--maincolor);
        outline: none;
      }
      .signup_container form .sign_input label {
        display: block;
        text-align: center;
        font-size: 18px;
        color: var(--maincolor);
      }
      .signup_container form input[type="submit"] {
        background-color: var(--maincolor);
        border: none;
        width: 100%;
        margin: 25px 0 10px 0;
        color: white;
        cursor: pointer;
      }
      .signup_container form p {
        padding: 5px 0;
        text-align: center;
        color: white;
      }
    </style>
</head>
<body>
<div class="signup_container" id="login_container">

<form action="login.php" method="POST" >
  <div class="reset">
    <!-- <input type="reset" value="x" class="x" onclick="popup('login_container')"> -->
    <a href="index.php">X</a>
  </div>

  <h3>Log In</h3>
  <div class="sign_input">
    <!-- <input type="text" placeholder="User Name"> -->
    <input type="email" placeholder="Email address" name="email">
    <input type="password" placeholder="Password" name="password">
    <!-- <input type="password" placeholder="Conform Password"> -->
    <label for="logina">Create new account ? <span><a href="signup.php">Sign Up</a></span></label>
    <input type="submit" value="login" name="login">
  </div>
  <p></p>
</form>
</div>
<?php 
    include 'connection.php';
    session_start();

    if(isset($_POST['login'])){

        $query = "SELECT * FROM `userlogin` WHERE `email`='$_POST[email]' OR `username`='$_POST[username]'";
        $result = mysqli_query($conn,$query);

        if($result){

            if(mysqli_num_rows($result)==1)
            {
                $result_fetch=mysqli_fetch_assoc($result);

                if(password_verify($_POST['password'],$result_fetch['password'])){
                    // echo "
                    // <script>
                    // alert('Login Sucessfully');
                    // window.location.href='index.php';
                    // </script>
                    // ";

                    $_SESSION['logged_in']=true;
                    $_SESSION['username']=$result_fetch['username'];
                    header("location:./user_dashboard/index.php");
                }
                else{

                    echo "
                        <script>
                        alert('Incorrect Password');
                        window.location.href='index.php';
                        </script>
                        ";
                }

            }
            else{

                echo "
                    <script>
                    alert('Email Not Register');
                    window.location.href='index.php';
                    </script>
                    ";
            }



        }

        else{

            echo "
                <script>
                alert('Cannot Run Query');
                window.location.href='index.php';
                </script>
                ";
        }



    }
 
 ?>






    <script>
           function popup(popup_name){
    let get_popup = document.getElementById(popup_name);
    if(get_popup.style.display=="none"){
        get_popup.style.display="flex";
    }
    else{
        get_popup.style.display="none";
    }
}
    </script>   
</body>
</html>