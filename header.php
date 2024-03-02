<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourHubSystem -- Header</title>
    <link rel="stylesheet" href="./css/header.css">
</head>

<body>

    <header class="header">

        <div class="logo">
            <div class="menu">
                <div class="menu_btn"></div>
                <div class="menu_btn"></div>
                <div class="menu_btn"></div>
            </div>
            <a href="index.html">TheTourHUB</a>
        </div>
        <nav class="navbar">
            <li><a class="navlink" href="index.php">Home</a></li>
            <li><a class="navlink" href="#about">About</a></li>
            <li><a class="navlink" href="gallery.php">Gallery</a></li>
            <li><a class="navlink" href="#footer">Contact</a></li>
        </nav>
        <div class="signup_or_login_container">
            <div class="signup"><a href="signup.php">SignUp</a></div>
            <div class="login"><a href="login.php">LogIn</a></div>
        </div>
    </header>
    <script>
        const menu = document.querySelector(".menu");
        const navbar = document.querySelector(".navbar");

        menu.addEventListener("click", () => {
            menu.classList.toggle("active");
            navbar.classList.toggle("active");
        });

        const navlink = document.querySelectorAll(".navlink");
        navlink.forEach(n => n.addEventListener("click", () => {
            menu.classList.remove("active");
            navbar.classList.remove("active");
        }));

    </script>

</body>

</html>