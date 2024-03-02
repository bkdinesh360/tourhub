<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourHubSystem -- Footer</title>
    <script src="https://kit.fontawesome.com/722477c8a9.js" crossorigin="anonymous"></script>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    list-style: none;
    text-decoration: none;
    color: var(--dark);
}
html{
    scroll-behavior: smooth;
}
:root{
    --maincolor:rgb(6, 120, 6);
    --dark:#1b1b1e;
    --light:#cfe5f5;
    --secondarycolor:#fb2056;
}
        .footer{
            background-color: var(--light);
    display: flex
    ;
    flex-direction: column;
    align-items: center;
    padding: 5% 0;
}
.footer_top, .footer_bottom{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 100%;
    padding: 2% 5%;
}
.footer_top h3{
   color: var(--maincolor);
   letter-spacing: 1px;
}
.footer_top p{
    padding: 3px 0;
}
.footer_top a{
    background-color: red;
    color: white;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: 2px;
    padding: 5px 10px;
    border-radius: 3px;
}
.footer_top a:hover{
    background-color: rgb(226, 6, 6);
}
.footer_bottom1 i{
    color: white;
    background-color: var(--maincolor);
    padding: 5px;
    margin: 0 3px;
    cursor: pointer;
}
.footer_bottom1 i:hover{
    background-color: var(--hovermaincolor);
}
.footer_bottom2{
    display: flex;
    flex-direction: row;
    gap: 25px;
}
.footer_bottom li a:hover{
color: var(--hovermaincolor);
}

@media (max-width:700px) {

.footer_top, .footer_bottom{
    flex-direction: column;
    gap: 25px;
    padding: 5%;
    text-align: center;
justify-content: center;
align-items: center;
}
}

    </style>
</head>
<body>

<footer class="footer" id="footer">
    <div class="footer_top">
         <div class="footer_top1">
             <h3>Dang, Nepal</h3>
             <p>Ghorahi-14 Tulsipurchock</p>
         </div>
         <div class="footer_top2">
             <h3>For Business Inquery</h3>
             <p>+977-9876543210</p>
             <p>tourhubsystem360@gmail.com</p>
             
         </div>
         <div class="footer_top3">
             <a href="#">
               <i class="fa-brands fa-youtube" style="color:white"></i> Subscribe
             </a>
         </div>
    </div>
    <hr color="white" width="100%">
    <div class="footer_bottom">
         <div class="footer_bottom1">
             <i class="fa-brands fa-instagram"></i>
             <i class="fa-brands fa-facebook"></i>
             <i class="fa-brands fa-x-twitter"></i>
             <i class="fa-brands fa-tiktok"></i>
             <i class="fa-brands fa-youtube"></i>
         </div>
         <div class="footer_bottom2">
         <li><a class="navlink" href="index.php">Home</a></li>
         <li><a class="navlink" href="#about">About</a></li>
         <li><a class="navlink" href="gallery.php">Gallery</a></li>
         <li><a class="navlink" href="#footer">Contact</a></li>
         </div>
         <div class="footer_bottom3">
             <h2>Tour Hub System</h2>
         </div>
    </div>
 </footer>
    
</body>
</html>