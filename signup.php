<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TourHubSystem -- Signup</title>
    <link rel="stylesheet" href="./css/style.css" />
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
    <div class="signup_container" id="signup_container">
        <form action="signup.php" method="POST">
            <div class="reset">
                <a href="index.php">X</a>
            </div>

            <h3>Sign Up</h3>
            <div class="sign_input">
                <input type="text" placeholder="User Name" name="username" required />
                <input type="email" placeholder="Email address" name="email" required />
                <input type="password" placeholder="Password" name="password" required />
                <!-- <input type="password" placeholder="Conform Password" /> -->
                <label for="logina">Already a account ? <span><a href="login.php">Login</a></span></label>
                <input type="submit" value="Sign Up" name="register" />
            </div>
            <p id="alert"></p>
        </form>
    </div>
    <?php
    include 'connection.php';

    if(isset($_POST['register'])){
        $user_exist_query = "SELECT * FROM `userlogin` WHERE `username`='$_POST[username]' OR`email`='$_POST[email]'";
        $result = mysqli_query($conn,$user_exist_query);

        if($result){

            if(mysqli_num_rows($result)>0){

                #If any user has already taken username or email
                $result_fetch=mysqli_fetch_assoc($result);
                
                #error for username already taken
                if($result_fetch['username']==$_POST['username']){
                    echo "
                        <script>
                        alert('$result_fetch[username] - Username already taken');
                        window.location.href='index.php';
                        </script>
                         ";
                }
                #error for email already taken
                else{
                    echo "
                    <script>
                    alert('$result_fetch[email] - Email already taken');
                    window.location.href='index.php';
                    </script>
                     ";
                }

            }


            else{

                $password=password_hash($_POST['password'],PASSWORD_BCRYPT);

                $query = "INSERT INTO `userlogin`(`username`, `email`, `password`) VALUES ('$_POST[username]','$_POST[email]','$password')";

                if(mysqli_query($conn,$query)){

                    #if data inserted suscessfully
                        echo "
                            <script>
                            alert('Registeration Sucessfully');
                            window.location.href='index.php';
                            </script>
                            ";

                }

                #if data cannot be inserted
                else{
                    echo "
                        <script>
                        alert('Cannot Run Query');
                        window.location.href='index.php';
                        </script>
                        ";
                }

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



    else{

    }
?>


    <script>
        function popup(popup_name) {
            let get_popup = document.getElementById(popup_name);
            if (get_popup.style.display == "none") {
                get_popup.style.display = "flex";
            } else {
                get_popup.style.display = "none";
            }
        }
    </script>
</body>

</html>