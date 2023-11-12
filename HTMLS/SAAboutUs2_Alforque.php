<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summative Assessment1 - Tristan Shawn Alforque</title>
    <link rel="shortcut icon" href="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/CirlceLogo.png?raw=true">
</head>
<body>
    <style>
        *{
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

body{
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
    right: 65px;
    top: 13px;
}

div.Circle{
    margin-left: 6%;
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
    text-decoration: underline 2px #545454;
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

div.Platforms:hover {
    text-decoration: underline 2px var(--color-secondary);
}

div.Products:hover {
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
    left: 1287px;
    top: 35px;
}

div.SignUp{
    position: absolute;
    color: var(--color-primary);
    font-family: 'Arial';
    font-size: 18px;
    font-weight: 100;
    left: 1274px;
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

div.BoxesAboutUs{
    height: 100%;
    color: transparent;
}

div.AboutUsBox {
    position: absolute;
    left: 15px;
    width: 1250px;
    height: 80px;
    top: 125px;
    background-color: var(--color-secondary-light);
    margin: 2%;
    font-size: 25px;
}

div.ShawBox {
    position: absolute;
    left: 15px;
    width: 620px;
    height: 250px;
    top: 210px;
    background-color: var(--color-secondary-light);
    margin: 2%;
    font-size: 25px;
}

div.Shawkunn {
    position: absolute;
    top: 60px;
    height:50%;
    width:auto;
    margin-left: 100px;
}

div.DescriptionAboutUsShaw {
    position: absolute;
    top: 100px;
    height:50%;
    width:auto;
    margin-left: 240px;
}

div.KenBox {
    position: absolute;
    left: 640px;
    width: 625px;
    height: 250px;
    top: 210px;
    background-color: var(--color-secondary-light);
    margin: 2%;
    font-size: 25px;
}

div.Kenchikki {
    position: absolute;
    top: 60px;
    height:50%;
    width:auto;
    margin-left: 100px;
}

div.DescriptionAboutUsKen {
    position: absolute;
    top: 100px;
    height:50%;
    width:auto;
    margin-left: 240px;
}

div.PishBox {
    position: absolute;
    left: 15px;
    width: 620px;
    height: 250px;
    top: 470px;
    background-color: var(--color-secondary-light);
    margin: 2%;
    font-size: 25px;
}

div.Pish {
    position: absolute;
    top: 60px;
    height:50%;
    width:auto;
    margin-left: 100px;
}

div.DescriptionAboutUsPish {
    position: absolute;
    top: 100px;
    height:50%;
    width:auto;
    margin-left: 240px;
}

div.ShiroBox {
    position: absolute;
    left: 640px;
    width: 625px;
    height: 250px;
    top: 470px;
    background-color: var(--color-secondary-light);
    margin: 2%;
    font-size: 25px;
}

div.Shirokansen {
    position: absolute;
    top: 60px;
    height:50%;
    width:auto;
    margin-left: 100px;
}

div.DescriptionAboutUsShiro {
    position: absolute;
    top: 100px;
    height:50%;
    width:auto;
    margin-left: 240px;
}

div.AbUs{
    position: absolute;
    margin-top: 10px;
    margin-left: 42%;
}

div.Founders{
    position: absolute;
    margin-top: 43px;
    margin-left: 47%;
}

footer {
    position: absolute;
    bottom: -250px;
    font-family: Arial;
    font-size: 8px;
    text-align: center;
    color: var(--color-primary-dark);
    background-color: var(--color-secondary-light);
    font-weight: 200;
    width: 100%;
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
                <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Darkcircle.png?raw=true">
            </div>
            <div class="Circle">
                <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Darkcircle.png?raw=true">
            </div>
            <div class="Circle">
                <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Darkcircle.png?raw=true">
            </div>
            <div class="Circle">
                <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SA1Main/Darkcircle.png?raw=true">
            </div>
        </div>

        <label class="reserve"><h5>©All rights reserved™</h5></label>
        <label class="year"><h5>2022</h5></label>

        <div class="LogIn">
            <a href="http://localhost/login/login.php"> Log In </a>
        </div>
        <div class="SignUp">
            <a href="http://localhost/login/signup.php"> Sign Up </a>
        </div>
    </div>
 
    <div>
        <div class = "NavBar1">
            <div class="Home">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SA2_ALFORQUE.php"> Home </a>
            </div>
            <div class="AboutUs">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SAAboutUs2_Alforque.php"> About Us </a>
            </div>
            <div class="Platforms">
            <a href="http://localhost/TansPublicProjects.io/HTMLS/SAPlatforms2_Alforque.php"> Platforms </a>
            </div>
            <div class="Products">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SAProducts2_Alforque.php"> Products </a>
            </div>
            <div class="Services">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SAService2_Alforque.php"> Services </a>
            </div>
            <div class="SupportUs">
                <a href="http://localhost/TansPublicProjects.io/HTMLS/SASupportUs2_Alforque.php"> Support Us</a>
            </div>
        </div>

        <div class="BoxesAboutUs">
            <div class="AboutUsBox">
                <div class="AbUs">
                    <h3>ABOUT US</h3>
                </div>
                <div class="Founders">
                    <h4>Founders</h4>
                </div>
            </div>

            <div class="ShawBox">
                <div class="Shawkunn">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAAboutUs/Shawkunn.jpg?raw=true"  height="100%" width="auto"></a>
                </div>
                <div class="DescriptionAboutUsShaw">
                    <h4>Tristan Shawn Alforque</h4>
                    <p>The Developer of this Website for the group, gikapoy, katugon, pero laban</p>
                    <p></p>
                </div>
            </div>

            <div class="KenBox">
                <div class="Kenchikki">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAAboutUs/Kenchikki.jpg?raw=true"  height="100%" width="auto"></a>
                </div>
                <div class="DescriptionAboutUsKen">
                    <h4>Vladimier Juliano</h4>
                    <p>Nag change teams ni siya, from MMCM to AdDU</p>
                </div>
            </div>

            <div class="PishBox">
                <div class="Pish">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAAboutUs/P1sh.jpg?raw=true"  height="100%" width="auto"></a>
                </div>
                <div class="DescriptionAboutUsPish">
                    <h4>Jan Angelo Quiachon</h4>
                    <p>Nag change teams ni siya, from SPC to MMCM</p>
                </div>
            </div>

            <div class="ShiroBox">
                <div class="Shirokansen">
                    <img src="https://github.com/TanNatTan/TansPublicProjects.io/blob/main/SAAboutUs/Shirokansen.jpg?raw=true" height="100%" width="auto"></a>
                </div>
                <div class="DescriptionAboutUsShiro">
                    <h4>Kouji Tsukishima</h4>
                    <p>MMA - Mixed Martial Arts</p>
                </div>
            </div>
        </div>
    </div> 

</body>
</html>
<footer>
    <h5>For more inquires, call our number, 090-8XXX-XXX, or email us at <a href="https://www.gmail.com"> haori1234@gmail.com </a> | This website is made by: Haori Squad | Last update: Sept. 20, 2023 (9:55AM)</h5>
    <h5>CPE143L Web Design and Development (Laboratory) | ©All rights reserved™ | 2022 </h5>
</footer>
