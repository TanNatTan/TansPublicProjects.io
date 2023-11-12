<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summative Assessment2 - Tristan Shawn Alforque</title>
    <link rel="shortcut icon" href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/CirlceLogo.png">
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
            --color-primary: #545454;
            --color-primary-dark: #1B1B1B;
            --color-secondary: #969696;
            --color-secondary-light:#e7e7e7;
            --color-prime-light: #ffffff;
            --color-prime-dark: #000000;
            list-style: none;
            box-sizing: border-box;
        }

        #body{
            background-image:url(file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Mountains_Background.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 100%;
        }

        #div{
            font-size: 150%;
            text-align: center;
            font-family: Arial;
        }

        #h1{
            color: var(--color-primary-dark);
            text-align: left;
            font-family: League Spartan;
            src: url(file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/LeagueSpartan-Bold.otf);
            font-weight: 800;
        }

        #h2 {
            color: var(--color-primary-dark);
            text-align: center;
            font-family: League Spartan;
            src: url(file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/LeagueSpartan-Bold.otf);
            font-weight: 800;
            font-size: 36px;
        }

#h3 {
    color: var(--color-primary-dark);
    text-align: left;
    font-family: League Spartan;
    src: url(file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/LeagueSpartan-Bold.otf);
    font-weight: 800;
    font-size: 36px;
    margin-left: 10px;
}

#h4{
    color: var(--color-primary);
    text-align: left;
    font-family: Arial;
    font-weight: 200;
    font-size: 23px;
}

#h5 {
    font-weight: 100;
}

#TopImage{
    height: auto;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    position: absolute;
    width: 400px;
    right: 75px;
    top: 15px;
}

#Circle1 {
    position: absolute;
    margin-left: 0;
    top: -5px;
}

#Circle2 {
    position: absolute;
    margin-left: 20%;
    top: -5px;
}

#Circle3 {
    position: absolute;
    margin-left: 40%;
    top: -5px;
}

#Circle4 {
    position: absolute;
    margin-left: 60%;
    top: -5px;
}


#label.reserve {
    position: absolute;
    color: var(--color-primary-dark);
    text-align: right;
    font-family: Arial;
    font-size: 12px;
    left: 1250px;
    top: 0px;
}

#label.year {
    position: absolute;
    color: var(--color-primary-dark);
    text-align: right;
    font-family: Arial;
    font-size: 12px;
    left: 1325px;
    top: 10px;
}

#TopBar{
    background-image:url(file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/TopNavigationBar.png);
    background-size: 100%;
    height: 77px;
}

#Haori{
    position: absolute;
    top:0px;
    left: 275px;
    width: 250px;
}

#SearchBorder {
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

#SearchContent {
    display: flex; /* Use flexbox */
    justify-content: center; /* Center content horizontally */
    align-items: center; /* Center content vertically */
}

#search {
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

#NavBar1{
    background-image:url(file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/BottomNavigationBar.png);
    background-size: 100%;
    top: 70px;
    font-size: 35px;
    height: 33px;
    text-decoration: none;
}

#Home{
    position:absolute;
    left: 12%;
    top: 50px;
    text-decoration: underline 2px var(--color-primary);
}

#AboutUs{
    position:absolute;
    left: 25%;
    top: 50px;
}

#Platforms{
    position:absolute;
    left: 40%;
    top: 50px;
}

#Products{
    position:absolute;
    left: 53%;
    top: 50px;
}

#Services{
    position:absolute;
    left: 66.5%;
    top: 50px;
}

#SupportUs{
    position:absolute;
    left: 78%;
    top: 50px;
}

#AboutUs:hover {
    text-decoration: underline 2px var(--color-secondary);
}

#Platforms:hover {
    text-decoration: underline 2px var(--color-secondary);
}

#Products:hover {
    text-decoration: underline 2px var(--color-secondary);
}

#Services:hover {
    text-decoration: underline 2px var(--color-secondary);
}

#SupportUs:hover {
    text-decoration: underline 2px var(--color-secondary);
}

a {
    color: var(--color-primary-dark);
    padding: 5px;
    font-family: 'Times New Roman';
    font-size: 18px;
    font-weight: 100;
    text-decoration: none;
    top: 5px;
}

#LogIn{
    position: absolute;
    color: var(--color-primary);
    font-family: 'Arial';
    font-size: 18px;
    font-weight: 100;
    left: 1287px;
    top: 35px;
}

#SignUp{
    position: absolute;
    color: var(--color-primary);
    font-family: 'Arial';
    font-size: 18px;
    font-weight: 100;
    left: 1274px;
    top: 55px;
}

#LogIn a:hover {
    text-decoration: underline; 
}

#SignUp a:hover {
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

#boxes{
    height: 100%;
    color: transparent;
}

#FeatureBox{
    position: absolute;
    width: 520px;
    height: 910px;
    background-color: var(--color-secondary-light);
    margin: 2%;
}

#FeatureBox {
    overflow: hidden;
    position: absolute;
    text-align: center;
    width: 425px;
    height: 900px;
    background-color: var(--color-secondary-light);
    color: var(--color-prime-light);
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 15px var(--color-prime-dark);
    z-index: 2;
}

#FeatureBox:hover {
    box-shadow: 0 0 15px rgba(255, 255, 255, 0.5);
}

@keyframes slide_animation {
    0% {left: 2400px;} /* Start from the last position */
    10% {left: 2400px;}
    20% {left: 1200px;}
    30% {left: 1200px;} 
    40% {left: 0px;} /* Back to the first position */
    50% {left: 0px;}
    60% {left: -1200px;} /* Move to the left */
    70% {left: -1200px;}
    80% {left: -2400px;} /* Move to the left */
    90% {left: -2400px;}
    100% {left: -2400px;}
}

@-webkit-keyframes slide_animation {
    0% {left: 2400px;} /* Start from the last position */
    10% {left: 2400px;}
    20% {left: 1200px;}
    30% {left: 1200px;}
    40% {left: 0px;} /* Back to the first position */
    50% {left: 0px;}
    60% {left: -1200px;} /* Move to the left */
    70% {left: -1200px;}
    80% {left: -2400px;} /* Move to the left */
    90% {left: -2400px;}
    100% {left: -2400px;}
}

#slide-images {
    position: relative;
    width: 3600px;
    height: 1000px;
    margin: 0 0 0 -2400px;
    right: -100px;
    -webkit-animation-name: slide_animation;
    animation-name: slide_animation;
    -webkit-animation-duration: 20s;
    animation-duration: 20s;
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    -webkit-animation-direction: normal; /* Set to 'normal' to loop forward */
    animation-direction: normal; /* Set to 'normal' to loop forward */
    -webkit-animation-play-state: running;
    animation-play-state: running;
}

#Fimg-container {
    left: 850px;
    height: 1600px;
    width: 1200px;
    position: relative;
    float: right;
}


#FeatureSlider-nav{
    display: flex;
    column-gap: 1rem;
    position: absolute;
    bottom: 1.25rem;
    left: 275px;
    transform: translateX(-50%);
    z-index: 3;
}

#FeatureSlider-nav a{
    width: 0.5rem;
    height: 0.5rem;
    border-radius: 50%;
    background-color: var(--color-primary-dark);
    opacity: 0.75;
    transition: opacity ease 250ms;
}

#FeatureSlider-nav a:hover{
    background-color: var(--color-prime-dark);
}

#ContentBox{
    position: absolute;
    left: 550px;
    width: 738px;
    height: 275px;
    margin: 2%;
    background-color: var(--color-secondary-light);
    color: var(--color-prime-light);
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 15px var(--color-prime-dark);
    z-index: 2;
}

#DadService:hover, #ShootYourShot:hover {
    box-shadow: 0 0 15px var(--color-prime-dark);
}

#ServiceBox{
    position: absolute;
    left: 550px;
    top: 418px;
    width: 395px;
    height: 400px;
    background-color: var(--color-secondary-light);
    color: var(--color-prime-light);
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 15px var(--color-prime-dark);
    z-index: 2;
    margin: 2%;
}

#PlatformBox{
    position: absolute;
    left: 977px;
    top: 418px;
    width: 310px;
    height: 400px;
    background-color: var(--color-secondary-light);
    color: var(--color-prime-light);
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 15px var(--color-prime-dark);
    z-index: 2;
    margin: 2%;
}

#BuyBox{
    position: absolute;
    left: 550px;
    top: 845px;
    width: 736px;
    height: 175px;
    background-color: var(--color-secondary-light);
    color: var(--color-prime-light);
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 15px var(--color-prime-dark);
    margin: 2%;
    z-index: 2;
}

#DadService{
    position: absolute;
    margin-top: 10px;
    margin-left: 5px;
}

#ShootYourShot{
    position: absolute;
    margin-top: 10px;
    margin-left: 365px;
}

#ServiceCalendar{
    position: absolute;
    height: 10%;
    width:auto;
    margin-left:60px;
}

#FB{
    position: absolute;
    margin-left: 112px;
    top: 85px;
}

#IG{
    position: absolute;
    margin-left: 112px;
    top: 185px;
}

#YT{
    position: absolute;
    margin-left: 112px;
    top: 285px;
}

#Buycontainer {
    padding: 1rem;
    text-align: center;
}

#Buycontainer a {
    padding: 3px;
}

#Buyslider-wrapper {
    position: relative;
    bottom: 20px;
    right: 20px;
    width: 736px;
    height: 134px;
    margin: 0 auto;
    z-index: 4;
}

#Buyslider {
    display: flex;
    width: 730px;
    height: 114px;
    overflow: hidden;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    box-shadow: 0 1.5rem 3rem -0.75rem hsla(0, 0%, 0%, 0.25);
    border-radius: 0.5rem;
    white-space: nowrap;
}

#Buyslider img {
    flex: 1 0 100%;
    scroll-snap-align: start;
    object-fit: cover;
}

#Buyslider-nav {
    display: flex;
    justify-content: center;
    column-gap: 10px;
    position: absolute;
    bottom: 1.25rem;
    left: 0;
    right: 0;
    z-index: 1;
}

#Buyslider-nav a {
    width: 0.5rem;
    height: 0.5rem;
    border-radius: 50%;
    background-color: var(--color-primary-dark);
    opacity: 0.75;
    transition: opacity ease 250ms;
}

#Buyslider-nav a:hover {
    background-color: var(--color-secondary);
}

#footer {
    position: absolute;
    bottom: -500px;
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
            <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/haoribanner.jpg.png" height="77px" weight="77px">
        </div>

        <div class="SearchBorder">
            <table class="SearchContent">
                <tr>
                    <td>
                        <a href="#"><img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/SearchIcon_smol.png" size="20px"></a>
                    </td>   
                    <td>
                        <input type="text" placeholder="Find specific content, products, and events"
                        class="search">
                    </td>
                    <td>
                        <a href="#"><img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/microphone.png" size="20px"></a>
                    </td>
                </tr>
            </table>
        </div>

        <div class = "TopImage">
            <div class="Circle1">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAAboutUs_Alforque.html" target="_blank">
                    <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Circle-guy-1.png" height="60px" width="60px">
                </a>
            </div>
            <div class="Circle2">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAAboutUs_Alforque.html" target="_blank">
                    <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Circle-guy-2.png" height="60px" width="60px">
                </a>
            </div>
            <div class="Circle3">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAAboutUs_Alforque.html" target="_blank">
                    <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Circle-guy-3.png" height="60px" width="60px">
                </a>
            </div>
            <div class="Circle4">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAAboutUs_Alforque.html" target="_blank">
                    <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Circle-guy-4.png" height="60px" width="60px">
                </a>
            </div>
        </div>

        <label class="reserve"><h5>©All rights reserved™</h5></label>
        <label class="year"><h5>2022</h5></label>

        <div class="LogIn">
            <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/LoginSetup.html"> Log In </a>
        </div>
        <div class="SignUp">
            <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SignUpSetup.html"> Sign Up </a>
        </div>
    </div>
 
    <div>
        <div class = "NavBar1">
            <div class="Home">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SA1_ALFORQUE.html"> Home </a>
            </div>
            <div class="AboutUs">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAAboutUs_Alforque.html"> About Us </a>
            </div>
            <div class="Platforms">
            <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAPlatforms_ALFORQUE.html"> Platforms </a>
            </div>
            <div class="Products">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAProducts_Alforque.html"> Products </a>
            </div>
            <div class="Services">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SAService_Alforque.html"> Services </a>
            </div>
            <div class="SupportUs">
                <a href="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/HTMLS/SASupportUs_Alforque.html"> Support Us</a>
            </div>
        </div>

        <div class="boxes">
            <div class="FeatureBox">
                <h2>SEE OUR LATEST SERVICES!</h2>
                <div class="slide-images">
                    <div class="Fimg-container">
                        <a href="https://www.facebook.com/haori.sQUAD/posts/pfbid02Gt5hb32DQeqPNdejaLepGJaLuVcoydi3e6AKM8tTTsuLVgDigm8vXcUW5idhFndVl" target="_blank">
                            <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Latestservice1.png" height="50%" width="400px">
                        </a>
                    </div>
                    <div class="Fimg-container">
                        <a href="https://www.facebook.com/haori.sQUAD/posts/pfbid0LcnLxAcackimaegSBDdo23kvLkjXHkz3bx9a8hFuZkRneDVFWosSXtfLytWNnH5Ql" target="_blank">
                            <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Latestservice2.png" height="50%" width="400px">
                        </a>
                    </div>
                    <div class="Fimg-container">
                        <a href="https://www.facebook.com/haori.sQUAD/posts/pfbid02Gt5hb32DQeqPNdejaLepGJaLuVcoydi3e6AKM8tTTsuLVgDigm8vXcUW5idhFndVl" target="_blank">
                            <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Latestservice1.png" height="50%" width="400px">
                        </a>
                    </div>
                </div>
                <div class="FeatureSlider-nav">
                    <a href="#Fslide-1"></a>
                    <a href="#Fslide-2"></a>
                    <a href="#Fslide-3"></a>
                </div>
                </div>
            </div>
        
            <div class="ContentBox">
                <h3>CHECK OUT OUR CONTENT</h3>
                <div class="DadService">
                    <a href= "https://www.youtube.com/watch?v=hqwjGWUXrdA" target="_blank"> <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Thumbnail.png" height="180" width="auto"></a>
                </div>
                <div class="ShootYourShot">
                    <a href= "https://www.facebook.com/haori.sQUAD/posts/pfbid02QLLSARuHjURhPfMKAmQTLdb4MaA5cHjd99c1G1XosuDFRkGRuYRG7yY1vT4ia9gxl" target="_blank"> <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/PUBMAT1.jpg" height="180" width="auto"></a>
                </div>
            </div>

            <div class="ServiceBox">
                <h3>SERVICE CHRONOLOGY</h3>
                <p>See where it all began! This calendar is updated for members to see when we do our next service</p>
                <div class="ServiceCalendar">
                    <a href="./SAService_Alforque.html" target="_blank"> <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/HaoriCalender.png" height="285px"></a> 
                </div>
            </div>

            <div class="PlatformBox">
                <h3>PLATFORMS</h3>
                <p>Follow us on all of our social media for more of our content!</p>
                <div class="FB">
                    <a href="https://www.facebook.com/HAORI.Squad/" target="_blank"> <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Facebook.png" height="75x"></a> 
                </div>
                <div class="IG">
                    <a href="https://www.instagram.com/haorisquad/" target="_blank"> <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/IG.png" height="75px"></a> 
                </div>
                <div class="YT">
                    <a href="https://www.youtube.com/@HaoriSquad" target="_blank"> <img src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/YT.png" height="75px"></a> 
                </div>
            </div>

            <div class="BuyBox">
                <h3>BUY OUR MERCH!</h3>
                <p>Some common, others limited! Members have discounts!</p>
                <div class="Buycontainer">
                    <div class="Buyslider-wrapper">
                        <div class="Buyslider">
                            <a href="./SAProducts_Alforque.html" target="_blank"><img id="slide-1" src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/Ayaka.png" alt="A product that is sold on this website, courtesy of Haori Squad"></a>
                            <a href="./SAProducts_Alforque.html" target="_blank"><img id="slide-2" src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/FoxHaori.png" alt="A product that is sold on this website, courtesy of Haori Squad"></a>
                            <a href="./SAProducts_Alforque.html" target="_blank"><img id="slide-3" src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/GoldHaori.png" alt="A product that is sold on this website, courtesy of Haori Squad"></a>
                            <a href="./SAProducts_Alforque.html" target="_blank"><img id="slide-4" src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/ChineseFan.png" alt="A product that is sold on this website, courtesy of Haori Squad"></a>
                            <a href="./SAProducts_Alforque.html" target="_blank"><img id="slide-5" src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/MikuHatsuneHaori.png" alt="A product that is sold on this website, courtesy of Haori Squad"></a>
                            <a href="./SAProducts_Alforque.html" target="_blank"><img id="slide-6" src="file:///C:/Users/Admin/Documents/GitHub/TansPublicProjects.io/SA1Main/FishHaori.png" alt="A product that is sold on this website, courtesy of Haori Squad"></a>
                        </div>
                        <div class="Buyslider-nav">
                            <a href="#slide-1"></a>
                            <a href="#slide-2"></a>
                            <a href="#slide-3"></a>
                            <a href="#slide-4"></a>
                            <a href="#slide-5"></a>
                            <a href="#slide-6"></a>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
    </div>

    <script src="./SA1.js"></script>
</body>
</html>
<footer>
    <h5>For more inquires, call our number, 090-8XXX-XXX, or email us at <a href="https://www.gmail.com"> haori1234@gmail.com </a> | This website is made by: Haori Squad | Last update: Sept. 20, 2023 (9:55AM)</h5>
    <h5>CPE143L Web Design and Development (Laboratory) | ©All rights reserved™ | 2022 </h5>
</footer>
