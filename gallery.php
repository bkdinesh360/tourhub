<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TourHubSystem -- Gallery</title>
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
body{
    background-color: var(--light);
}
:root{
    --maincolor:rgb(6, 120, 6);
    --dark:#1b1b1e;
    --light:#cfe5f5;
    --secondarycolor:#fb2056;
}
        .heading h2{
    text-align: center;
    color: var(--maincolor);
    padding: 5% 0 0 0 ;
    text-decoration: underline;
}
.gallery{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 5% 5% 0 5%;
    gap: 25px;
}
.gallery img{
    height: 250px;
    cursor: pointer;
    transition: all 0.3s ease;
}
.gallery img:hover{
   transform: scale(1.05);
}
.image{
    display: flex;
    flex-direction: column;
    text-align: center;
}
.image a{
    background-color: var(--maincolor);
    color: white;
    text-decoration: none;
    padding: 3px;
}
    </style>
</head>
<body>

<div class="heading">
    <h2>Tour Hub Gallery</h2>
</div>
    <div class="gallery">
        <div class="image">
            <img src="./assets/a1.jpg" alt="">
            <a href="./assets/b1.jpg" download="">Download</a>
        </div>
        <div class="image">
            <img src="./assets/b1.jpg" alt="">
            <a href="./assets/b1.jpg" download="">Download</a>
        </div>
        <div class="image">
            <img src="./assets/b2.jpg" alt="">
            <a href="./assets/b2.jpg" download="">Download</a>
        </div>
        <div class="image">
            <img src="./assets/world-heritage-sites-of-nepal.jpg" alt="">
            <a href="./assets/world-heritage-sites-of-nepal.jpg" download="">Download</a>
        </div>
        <div class="image">
            <img src="./assets/b4.jpg" alt="">
            <a href="./assets/b4.jpg" download="">Download</a>
        </div>
       
        <div class="image">
            <img src="./assets/nepal-in-august.webp" alt="">
            <a href="./assets/nepal-in-august.webp" download="">Download</a>
        </div>
        
        
        <div class="image">
            <img src="./assets/a.jpg" alt="">
            <a href="./assets/a.jpg" download="">Download</a>
        </div>
        <div class="image">
            <img src="./assets/b5.jpg" alt="">
            <a href="./assets/b5.jpg" download="">Download</a>
        </div>
        <div class="image">
            <img src="./assets/nepal-028.jpg" alt="">
            <a href="./assets/nepal-028.jpg" download="">Download</a>
        </div>
    </div>
    
</body>
</html>