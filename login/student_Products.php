<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summative Assessment1 - Tristan Shawn Alforque</title>
        <meta name="description" content="This is the description">
        <link rel="shortcut icon" href="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/CirlceLogo.png?raw=true">
    </head>
    <body class="showCart">
        <style>
            * {

padding: 0;
margin: 0;
--color-primary: #545454;
--color-primary-dark: #1B1B1B;
--color-secondary: #969696;
--color-secondary-light:#e7e7e7;
--color-prime-light: #ffffff;
--color-prime-dark: #000000;
list-style: none;
box-sizing: border-box;
}

html, body {
margin: 0;
padding: 0;
min-height: 100%;
background-image:url(https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Mountains_Background.jpg?raw=true);
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100%;
}


div{
font-size: 150%;
text-align: center;
font-family: Arial;
}

h1{
color: var(--color-primary-dark);
text-align: left;
font-family: League Spartan;
src: url(https://github.com/TanNatTan/TansPublicProjects.io/raw/main/SA1Main/LeagueSpartan-Bold.otf);
font-weight: 800;
}

h2 {
color: var(--color-primary-dark);
text-align: center;
font-family: League Spartan;
src: url(https://github.com/TanNatTan/TansPublicProjects.io/raw/main/SA1Main/LeagueSpartan-Bold.otf);
font-weight: 800;
font-size: 36px;
}

h3 {
color: var(--color-primary-dark);
text-align: left;
font-family: League Spartan;
src: url(https://github.com/TanNatTan/TansPublicProjects.io/raw/main/SA1Main/LeagueSpartan-Bold.otf);
font-weight: 800;
font-size: 36px;
margin-left: 10px;
}

h4{
color: var(--color-primary);
text-align: left;
font-family: Arial;
font-weight: 200;
font-size: 23px;
}

h5 {
font-weight: 100;
}

div.TopImage{
height: auto;
display: flex;
flex-direction: row;
flex-wrap: wrap;
position: absolute;
width: 400px;
right: 75px;
top: 15px;
}

div.Circle1 {
position: absolute;
margin-left: 0;
top: -5px;
}

div.Circle2 {
position: absolute;
margin-left: 20%;
top: -5px;
}

div.Circle3 {
position: absolute;
margin-left: 40%;
top: -5px;
}

div.Circle4 {
position: absolute;
margin-left: 60%;
top: -5px;
}


label.reserve {
position: absolute;
color: var(--color-primary-dark);
text-align: right;
font-family: Arial;
font-size: 12px;
left: 1250px;
top: 0px;
}

label.year {
position: absolute;
color: var(--color-primary-dark);
text-align: right;
font-family: Arial;
font-size: 12px;
left: 1325px;
top: 10px;
}

div.TopBar{
background-image:url(https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/TopNavigationBar.png?raw=true);
background-size: 100%;
height: 77px;
}

div.Haori{
position: absolute;
top:0px;
left: 275px;
width: 250px;
}

div.SearchBorder {
position: absolute;
width: 400px;
height: 50px;
padding: 0px 10px;
border: 1px solid var(--color-secondary);
background-color: var(--color-secondary);
border-radius: 50px;
left: 450px;
top: 15px;
z-index: 2;
}

div.SearchContent {
display: flex; /* Use flexbox */
justify-content: center; /* Center content horizontally */
align-items: center; /* Center content vertically */
}

.search {
border: none;
height: 40px;
width: 325px;
padding: 0px 5px;
border-radius: 50px;
background-color: transparent;
font-size: 15px;
font-family: "Arial";
font-weight: 100;
color: var(--color-prime-light);
}

div.NavBar1{
background-image:url(https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/BottomNavigationBar.png?raw=true);
background-size: 100%;
top: 70px;
font-size: 35px;
height: 33px;
text-decoration: none;
}

div.Home{
    position:absolute;
    left: 12%;
    top: 50px;

}

div.AboutUs{
    position:absolute;
    left: 25%;
    top: 50px;
}

div.Platforms{
    position:absolute;
    left: 40%;
    top: 50px;
}

div.Products{
    position:absolute;
    left: 53%;
    top: 50px;
    text-decoration: underline 2px #545454;
}

div.Services{
    position:absolute;
    left: 66.5%;
    top: 50px;
}

div.SupportUs{
    position:absolute;
    left: 78%;
    top: 50px;
}

div.Home:hover {
    text-decoration: underline 2px var(--color-secondary);
}

div.AboutUs:hover {
    text-decoration: underline 2px var(--color-secondary);
}

div.Platforms:hover {
    text-decoration: underline 2px var(--color-secondary);
}

div.Services:hover {
    text-decoration: underline 2px var(--color-secondary);
}

div.SupportUs:hover {
    text-decoration: underline 2px var(--color-secondary);
}

a {
    color: #1B1B1B;
    padding: 5px;
    font-family: 'Times New Roman';
    font-size: 18px;
    font-weight: 100;
    text-decoration: none;
    top: 5px;
}

div.LogIn{
    position: absolute;
    color: var(--color-primary);
    font-family: 'Arial';
    font-size: 18px;
    font-weight: 100;
    left: 1250px;
    top: 35px;
}

div.SignUp{
    position: absolute;
    color: var(--color-primary);
    font-family: 'Arial';
    font-size: 18px;
    font-weight: 100;
    left: 1285px;
    top: 55px;
}

div.LogIn a:hover {
    text-decoration: underline; 
}

div.SignUp a:hover {
    text-decoration: underline;
}

body {
    text-align: center;
}

h6 {
    text-align: center;
    font-family: Arial;
    font-weight: 100;
    color: var(--color-prime-light);
    padding: 2%;
}

strong{
    font-size: 125%;
}

p {
    text-align: justify;
    font-family: Arial;
    font-size: 20%;
    color: var(--color-primary);
    margin-left: 10px;
    margin-right: 10px;
}

div.BoxesProducts{
    height: 100%;
    color: transparent;
}

div.ProdBox {
    position: relative;
    align-items: center;
    justify-content: space-between;
    width: 1285px;
    height: 80px;
    background-color: var(--color-secondary-light);
    color: var(--color-prime-light);
    border-radius: 10px;
    box-shadow: 0 0 15px var(--color-prime-dark);
    margin: 2%;
    font-size: 25px;
}

.icon-cart {
    position:absolute;
}

.icon-cart span {
    display: flex;
    width: 20px;
    height: 20px;
    right: -1260px;
    background-color: var(--color-primary);
    justify-content: center;
    align-items: center;
    color: var(--color-prime-light);
    border-radius: 50%;
    position: absolute;
    top: 50px;
    z-index: 4;
    font-size: 12px;
}

.icon-cart img {
    position: absolute;
    width: auto;
    right: -1240px;
    height: 45px;
    z-index: 3;
    top: 20px;
}

div.Prod{
    position: absolute;
    margin-top: 10px;
    margin-left: 42%;
}

div.List{
    position: absolute;
    margin-top: 43px;
    margin-left: 29%;
}

.content-section {
    margin: 1em;
}

.container {
    position: relative;
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 1.0em;
    transition: transform .5s;
    right: 700px;
}

.section-header {
    font-family: "Metal Mania";
    font-weight: normal;
    color: var(--color-prime-light);
    text-align: center;
    font-size: 1.5em;
    top: 100px;
    padding-bottom: 20px;
    padding-top: 20px;
}

.btn {
    text-align: center;
    vertical-align: middle;
    padding: .67em .67em;
    cursor: pointer;
}

.btn-header {
    margin: .5em 15% 2em 15%;
    color: white;
    border: 2px solid #2D9CDB;
    background-color: rgba(255, 255, 255, .1);
    border-radius: 0;
    font-size: 1.5em;
    font-weight: lighter;
    padding-left: 2em;
    padding-right: 2em;
}

.btn-header:hover {
    background-color: rgba(255, 255, 255, .3);
}

.btn-play {
    display: block;
    margin: 0 auto;
    color: #2D9CDB;
    font-size: 4em;
    border-radius: 50%;
    width: 100px;
    height: 100px;
    padding: 0;
    text-align: center;
}

.btn-primary {
    color: white;
    background-color: var(--color-primary);
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-primary:hover {
    background-color: var(--color-primary-dark);
}


.shop-item {
    flex-basis: calc(24% - 20px);
    margin: 10px;
}

.shop-item-title {
    display: block;
    width: 100%;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
    color: #333;
    margin-bottom: 15px;
}

.shop-item-image {
    height: 250px;
}

.shop-item-details {
    display: flex;
    align-items: center;
    padding: 5px;
    margin-top: 10px;
}

.shop-item-price {
    flex-grow: 1;
    color: #333;
    margin-right: 10px;
    font-size: 16px;
    font-weight: 400;
}

.shop-items {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

.shop-item-button {
    margin-left: 10px; /* Add margin to the left of the button */
}

.image-container {
    width: 300px;
    height: 350px;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Center vertically */
    align-items: center; /* Center horizontally */
    background-color: var(--color-secondary-light);
    color: var(--color-prime-light);
    border-radius: 5px;
    box-shadow: 0 0 15px var(--color-prime-dark);
}

.image-container:hover {
    box-shadow: 0 0 15px var(--color-primary);
}

.image-container img {
    max-width: 100%; /* Ensure the image fits within the container */
    max-height: 100%; /* Ensure the image fits within the container */
}

.cart-header {
    font-weight: bold;
    font-size: 1.25em;
    color: #333;
}

.cart-content-section {
    margin: 1em;
    max-width: 1000px;
    height: 650px;
    margin: 0 auto;
    padding: 0 1.0em;
    background-color: var(--color-primary);
    position: fixed;
    inset: 0 0 0 auto;
    z-index: 4;
    overflow: auto;
    display: grid;
    grid-template-rows: 70px 1fr 70px;
    transition: .5s
}

body.showCart .cart-content-section {
	inset: 0 0 0 auto:
}

body.showCart .container {
	transform: translateX(700px);
} 

.cart-section-header {
    font-family: Helvetica;
    color: var(--color-prime-light);
    text-align: left;
}

.cart-column {
    display: flex;
    align-items: center;
    border-bottom: 1px solid black;
    margin-right: 1.5em;
    padding-bottom: 10px;
    margin-top: 10px;
}

.cart-row {
    display: flex;
}

.cart-item {
    width: 45%;
    font-size: 0.4em;
    font-family: Helvetica;
    font-weight: 100;
    color: var(--color-prime-light);
}

.cart-price {
    width: 20%;
    font-size: 0.4em;
    font-family: Helvetica;
    font-weight: 100;
    color: var(--color-prime-light);
}

.cart-quantity {
    width: 35%;
    font-size: 0.4em;
    font-family: Helvetica;
    font-weight: 100;
    color: var(--color-prime-light);
}

.cart-item-title {
    color: var(--color-primary-light);
    margin-left: 2.0em;
    font-size: 0.4em;
}

.cart-item-image {
    width: 75px;
    height: auto;
    border-radius: 10px;
}

.btn-danger {
    color: white;
    background-color: var(--color-primary);
    border: none;
    border-radius: .3em;
    font-weight: bold;
}

.btn-danger:hover {
    background-color: var(--color-primary-dark);
}

.cart-quantity-input {
    height: 34px;
    width: 50px;
    border-radius: 5px;
    border: 1px solid var(--color-prime-dark);
    background-color: #eee;
    color: var(--color-prime-dark);
    padding: 0;
    text-align: center;
    margin-right: 25px;
}

.cart-row:last-child {
    border-bottom: 1px solid black;
}

.cart-row:last-child .cart-column {
    border: none;
}

.cart-total {
    text-align: end;
    margin-top: 10px;
    margin-right: 10px;
    position: relative;
    top: -250px;
}

.cart-total-title {
    font-weight: bold;
    font-size: 0.7em;
    color: var(--color-prime-light);
    margin-right: 20px;
}

.cart-total-price {
    color: var(--color-prime-light);
    font-size: .85em;
}

.btn-purchase {
    display: block;
    margin: 40px auto 80px auto;
    font-size: .55em;
    position: relative;
    text-align: center;
    right: 0px;
    top: -443px;
    background-color: var(--color-primary-dark);
}

.btn-close {
    display: block;
    margin: 40px auto 80px auto;
    font-size: .55em;
    position: relative;
    text-align: center;
    right: -80px;
    top: -290px;
    background-color: var(--color-primary-dark);
}

.main-footer {
    background-color: var(--color-secondary-light);
    color: var(--color-primary-dark);
    padding: .25em 0;
    font-size: 37%;
    text-align: center;
}

.main-footer-container {
    align-items: center;
    font-family: 'Times New Roman';
}

.main-footer-container ul {
    flex-grow: 1;
    text-align: end;
    font-weight: 100;
}

.footer-nav li {
    padding: 0 .5em;
}

.footer-nav img {
    width: 20px;
    height: 20px;
}
        </style>
        <div class="TopBar">
        <h1>HAORI SQUAD</h1>
        <h4>SERVICE?SERVICE.</h4>

        <div class ="Haori">
            <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/haoribanner.jpg.png?raw=true" height="77px" weight="77px">
        </div>

        <div class="SearchBorder">
            <table class="SearchContent">
                <tr>
                    <td>
                        <a href="#"><img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/SearchIcon_smol.png?raw=true" size="20px"></a>
                    </td>   
                    <td>
                        <input type="text" placeholder="Find specific content, products, and events"
                        class="search">
                    </td>
                    <td>
                        <a href="#"><img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/microphone.png?raw=true" size="20px"></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class = "TopImage">
            <div class="Circle1">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SAAboutUs2_Alforque.php" target="_blank">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Circle-guy-1.png?raw=true" height="60px" width="60px">
                </a>
            </div>
            <div class="Circle2">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SAAboutUs2_Alforque.php" target="_blank">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Circle-guy-2.png?raw=true" height="60px" width="60px">
                </a>
            </div>
            <div class="Circle3">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SAAboutUs2_Alforque.php" target="_blank">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Circle-guy-3.png?raw=true" height="60px" width="60px">
                </a>
            </div>
            <div class="Circle4">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SAAboutUs2_Alforque.php" target="_blank">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Circle-guy-4.png?raw=true" height="60px" width="60px">
                </a>
            </div>
        </div>

        <label class="reserve"><h5>©All rights reserved™</h5></label>
        <label class="year"><h5>2022</h5></label>

        <div class="LogIn">
            <a href="http://localhost/TansPublicProjects.io/login/login.php"> <?php echo $user_data['user_name']; ?> </a>
        </div>
		<div class="SignUp">
            <a href="http://localhost/TansPublicProjects.io/HTMLS/SA2_ALFORQUE.php"> Logout </a>
        </div>
    </div>
 
    <div>
        <div class = "NavBar1">
            <div class="Home">
                <a href="http://localhost/TansPublicProjects.io/login/student_main.php"> Home </a>
            </div>
            <div class="AboutUs">
                <a href="http://localhost/TansPublicProjects.io/login/student_AboutUs.php"> About Us </a>
            </div>
            <div class="Platforms">
            <a href="http://localhost/TansPublicProjects.io/login/student_Platforms.php"> Platforms </a>
            </div>
            <div class="Products">
                <a href="http://localhost/TansPublicProjects.io/login/student_Products.php"> Products </a>
            </div>
            <div class="Services">
                <a href="http://localhost/TansPublicProjects.io/login/student_Service.php"> Services </a>
            </div>
            <div class="SupportUs">
                <a href="http://localhost/TansPublicProjects.io/login/student_SupportUs.php"> Support Us</a>
            </div>
        </div>
        <div class="BoxesProducts">
            <div class="ProdBox">
                <div class="Prod">
                    <h3>PRODUCTS</h3>
                </div>
                <div class="icon-cart">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/shopping-cart_black.png?raw=true">
                    <span>0</span>
                </div>
                <div class="List">
                    <h4>FANS | HAORIS | STICKERS | LIMITED-EDITION</h4>
                </div>
            </div>
        </div>
        <section class="container content-section">
            <h2 class="section-header">Fans</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">3 and 1 Fans</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan1.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$9.50</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">White Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan2.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$3.00</span>
                            <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Black Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan3.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$3.00</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Wooden Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan4.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$10.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Crimson Moon Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan5.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$10.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Bird Theme Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan6.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$5.00</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Sun goddess Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan7.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$5.00</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Tiger Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/Fan8.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$7.00</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
        <h2 class="section-header">Haoris</h2>
        <div class="shop-items">
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Gold Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/GoldHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Flower Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/CatHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.00</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Dharma Egg Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/DharmaEggHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Fish Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/FishHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Fox Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/FoxHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$9.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Red Dragon Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/RedDragonHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$11.99</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Skeletons and Dragons Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/SkeletonHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Tiger Haori</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/TigerHaori.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$7.00</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <section class="container content-section">
        <h2 class="section-header">Stickers</h2>
        <div class="shop-items">
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Haori Die Cut</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/HaoriDieCut.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$0.25</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Haori Squad Sticker</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/HaoriSquad2.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$0.25</span>
                        <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Haori Squad Slap Sticker</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/SlapHaoriService.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$0.50</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
            <div class="shop-item">
                <div class="image-container">
                    <span class="shop-item-title">Haori Squad Kanji Slap Sticker</span>
                    <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/SlapStickerKanjiDesign.jpg?raw=true">
                    <div class="shop-item-details">
                        <span class="shop-item-price">$0.50</span>
                        <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="container content-section">
            <h2 class="section-header">Limited Edition</h2>
            <div class="shop-items">
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Zoro's Swords</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/ZoroSword.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$20000000.00</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Hatsune Miku Haori</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/MikuHatsuneHaori.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$165000.00</span>
                            <button class="btn btn-primary shop-item-button"type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Ayaka Fan</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/AyakaFan.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$150.99</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
                <div class="shop-item">
                    <div class="image-container">
                        <span class="shop-item-title">Zangetsu</span>
                        <img class="shop-item-image" src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAProducts/BleachSword.jpg?raw=true">
                        <div class="shop-item-details">
                            <span class="shop-item-price">$2500000.00</span>
                            <button class="btn btn-primary shop-item-button" type="button">ADD TO CART</button>
                        </div>
                    </div>
                </div>
            </section>
        <section id="cart-section"class="container cart-content-section">
            <h2 class="cart-section-header">YOUR CART</h2>
            <div class="cart-row">
                <span class="cart-item cart-header cart-column">ITEM</span>
                <span class="cart-price cart-header cart-column">PRICE</span>
                <span class="cart-quantity cart-header cart-column">QUANTITY</span>
            </div>
            <div class="cart-items">
            </div>
            <div class="cart-total">
                <strong class="cart-total-title">Total</strong>
                <span class="cart-total-price">$0</span>
            </div>
            <button class="btn btn-primary btn-close" type="button">CLOSE</button>
            <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
        </section>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
            let iconCart = document.querySelector('.icon-cart');
            let closeCart = document.querySelector('.btn-close');
            let body = document.querySelector('body');

            iconCart.addEventListener('click', () => {
                body.classList.toggle('showCart');
                document.querySelector('.container').classList.toggle('showCart');
                document.querySelector('.cart-content-section').classList.toggle('showCart');
            });

            // Add event listener for the Remove button
            var removeButton = document.querySelector('.btn-danger');
            if (removeButton) {
                removeButton.addEventListener('click', function () {
                    updateCount(-1);
                });
            }

            // Add event listener for the Purchase button
            var purchaseButton = document.querySelector('.btn-purchase');
            if (purchaseButton) {
                purchaseButton.addEventListener('click', function () {
                    resetCart(); // Call the resetCart function when Purchase button is pressed
                });
            }

            // Add event listener for the Close button
            closeCart.addEventListener('click', () => {
                body.classList.toggle('showCart');
                document.querySelector('.container').classList.toggle('showCart');
                document.querySelector('.cart-content-section').classList.toggle('showCart');
            });

            // Call the ready function to set up other event listeners
            ready();

            if (document.readyState == 'loading') {
                document.addEventListener('DOMContentLoaded', ready);
            } else {
                ready();
            }
        });

    // Add event listener for the Close button
    function resetCart() {
            // Set the count to 0 when the Purchase button is pressed
            document.querySelector('.icon-cart span').innerText = '0';
        }

        function ready() {
            updateCartCount();
            var removeCartItemButtons = document.getElementsByClassName('btn-danger');
            for (var i = 0; i < removeCartItemButtons.length; i++) {
                var button = removeCartItemButtons[i];
                button.addEventListener('click', removeCartItem);
            }

            var quantityInputs = document.getElementsByClassName('cart-quantity-input');
            for (var i = 0; i < quantityInputs.length; i++) {
                var input = quantityInputs[i];
                input.addEventListener('change', quantityChanged);
            }

            var addToCartButtons = document.getElementsByClassName('shop-item-button');
            for (var i = 0; i < addToCartButtons.length; i++) {
                var button = addToCartButtons[i];
                button.addEventListener('click', addToCartClicked);
            }

            document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseClicked);
        }

function updateCartCount() {
    var cartItems = document.getElementsByClassName('cart-items')[0];
    var itemCount = cartItems.getElementsByClassName('cart-row').length;

    var cartCountSpan = document.querySelector('.icon-cart span');
    cartCountSpan.innerText = itemCount;
}

function purchaseClicked() {
    alert('Thank you for your purchase')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    while (cartItems.hasChildNodes()) {
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()
}

function removeCartItem(event) {
    var buttonClicked = event.target
    buttonClicked.parentElement.parentElement.remove()
    updateCartTotal()
}

function quantityChanged(event) {
    var input = event.target
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1
    }
    updateCartTotal()
}

function addToCartClicked(event) {
    var button = event.target;
    var shopItem = button.parentElement.parentElement;
    var title = shopItem.querySelector('.shop-item-title').innerText;
    var price = shopItem.querySelector('.shop-item-price').innerText;
    var imageSrc = shopItem.querySelector('.shop-item-image').src;
    addItemToCart(title, price, imageSrc);
    updateCartTotal();
}

function addItemToCart(title, price, imageSrc) {
    var cartRow = document.createElement('div')
    cartRow.classList.add('cart-row')
    var cartItems = document.getElementsByClassName('cart-items')[0]
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    
    // Update the count inside the span element
    var countSpan = document.querySelector('.icon-cart span');
    var currentCount = parseInt(countSpan.innerText);
    countSpan.innerText = currentCount + 1;

    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
            alert('This item is already added to the cart')
            // If the item is already in the cart, don't add it again
            return
        }
    }
    
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`;
        cartRow.innerHTML = cartRowContents;
        cartItems.append(cartRow);
        cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem);
        cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityChanged);
}

function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0]
    var cartRows = cartItemContainer.getElementsByClassName('cart-row')
    var total = 0
    for (var i = 0; i < cartRows.length; i++) {
        var cartRow = cartRows[i]
        var priceElement = cartRow.getElementsByClassName('cart-price')[0]
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0]
        var price = parseFloat(priceElement.innerText.replace('$', ''))
        var quantity = quantityElement.value
        total = total + (price * quantity)
    }
    total = Math.round(total * 100) / 100
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total
}

function showAdditionalBox() {
    const additionalBox = document.getElementById("additional-box");
    if (additionalBox.style.display === "none") {
      additionalBox.style.display = "block";
    } else {
      additionalBox.style.display = "none";
    }
  }
        </script>
        <footer class="main-footer">
            <div class="container main-footer-container">
                <h5>For more inquires, call our number, 090-8XXX-XXX, or email us at <a href="https://www.gmail.com"> haori1234@gmail.com </a> | This website is made by: Haori Squad | Last update: Sept. 20, 2023 (9:55AM)</h5>
                <h5>CPE143L Web Design and Development (Laboratory) | ©All rights reserved™ | 2022 </h5>
            </div>
        </footer>
    </body>
</html>