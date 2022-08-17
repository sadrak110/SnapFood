<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <style>

        *  color varibles for the page */

/*------------------------------------------------------------------
    style template for mexican resturant 
    
    author: cryptograghi 

*/
root {

    --font: slategrey;
    --background: wheat;
    --menuColor: slategrey;
}



body {
    width: auto;
    background-image: url('https://images.unsplash.com/photo-1606625736768-f521ab7e23fb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&dl=jeswin-thomas-PtfRiBumfQU-unsplash.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    color: white;
    background-color: wheat;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

/* nav bar styling */

.navBar {
    margin-bottom: 20px;
    width: 100%;
    height: auto;
    position: fixed;
    left: 0;
    top: 0;
    display: inline-block;
    z-index: 1;
    background-color: rgba(0, 0, 0, 0.541);
}

.navBar a {
    text-decoration: none;
    color: white;
}

img {
    margin: 10px;
}

i {
    font-size: 20px;
}

i:hover,
a:hover {
    color: dodgerblue;
    cursor: pointer;
}

.navBar nav li {
    padding: 10px;
    margin: 20px;
    list-style-type: none;
    display: inline-block;
}


#hamMenu {
    visibility: hidden;
}

/*  grid system for the webpage */

.header {
    width: 80%;
    height: auto;
    position: absolute;
    top: 10%;
    left: 5%;
    display: grid;
    grid-template-rows: 1fr;
}

.header>div {
    margin-top: 10%;
    max-width: 100%;

}

.IntroMsg {
    margin: 20px;
    position: relative;
    width: 100%;
    left: 5%;
    top: -20%;
    text-align: center;
    padding: 10px;
    height: auto;
    opacity: 0.9;
    background-color: transparent;
    border-radius: 10px;

}

.logo {
    display: block;
    margin-left: auto;
    margin-right: auto;

}

/* for image seperation */


.story {
    display: block;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
}

.imgContainer {
    width: 90%;
    height: fit-content;
    position: relative;
    display: grid;
    grid-template-rows: 1fr 1fr 1fr;
    color: white;


}

.imgContainer>div {
    margin: 10px;
}

.menuIntro>img {
    width: 75%;
    border-radius: 10%;
    height: auto;
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
    filter: blur(0.5px);
}

.menuIntro {
    text-align: center;
    color: rgb(39, 39, 39);
    border-radius: 10px;
}

.menu {
    display: grid;
    grid-template-columns: 1fr 1fr;
    position: relative;
    width: 100%;
    left: 0%;
    text-align: center;
    padding: 20px;
    opacity: 0.9;
    background-color: rgba(100, 98, 98, 0.288);
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

@media only screen and (max-width: 600px) {

    .menu,
    .form {
        grid-template-rows: 1fr;
        grid-template-columns: 1fr;
        position: relative;
        top: -5%;

    }

    .logo {
        width: 200px;
        height: 200px;
    }

    html {
        font-size: 12px;
        font-family: Arial, Helvetica, sans-serif;
    }

    h2,
    h1 {
        font-size: 18px;
    }

    .navBar,
    .navBar nav li {
        width: 100%;
        height: 100%;
        display: block;
    }  

    #hamMenu {
        visibility: visible;
        color: white;
        font-size: 25px;    
        z-index: -1;
    }

}


.form {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    position: relative;
    width: 100%;
    left: 0%;
    top: 40px;
    text-align: center;
    padding: 20px;
    opacity: 0.9;
    background-color: rgba(100, 98, 98, 0.288);
    box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
}

.form input {
    padding: 10px;
    border: none;
    border-radius: 5px;
    width: 80%;
    opacity: 0.9;
    margin: 10px;

}

.form span {
    margin: 10px;
}

.form button {
    width: 60%;
    position: relative;
    left: 2%;
    margin: 5px;
    font-size: 20px;
    border: none;
    border-radius: 5px;
    color: white;
    text-shadow: 0.5px 0.5px black;
    background-color: rgb(109, 103, 93);
    padding: 10px;
}

.form button:hover {
    cursor: pointer;
    box-shadow: 0px 3px 6px slategray;
}

.form button:active {
    background-color: rgba(30, 96, 161, 0.801);
    border: none;
}

#home-menu ul {
    background-color: white;
    border-radius: 5px;
    list-style: none;
    padding: 30px;
}

#home-menu h2 {
    text-shadow: 0.5px 0.5px black;
}

#home-menu ul:after {
    content: "";
    clear: both;
    display: block;
}

#home-menu li {
    float: left;
    width: 50%;
    padding: 0;
    margin: 20px 0 20px 8%;
    border-bottom: 1px solid slategray;
}
.dish {
    float: left;
    color: #555;
    font-weight: bold;
    position: relative;
    z-index: 1;
    background-color: transparent;
    padding-right: 15px;
}

.Price {
    float: right;
    color: #555;
    font-weight: bold;
    position: relative;
    background-color: transparent;
    padding-left: 15px;
}

.Description {
    clear: both;
    display: block;
    color: #999;
    font-style: italic;
    font-size: 14px;
    padding-top: 10px;
    position: relative;
    top: -8px;
}


.logo {
    animation: windowsFly ease-out 3s;
    box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1), 0 0 0 4px rgb(255, 255, 255), 0.3em 0.3em 4em rgba(0, 0, 0, 0.3);
}

/*  image animation for resturant*/

@keyframes windowsFly {
    0% {
        filter: blur(10px);
        opacity: 0;
        width: 0px;

    }

    50% {
        filter: blur(5px);
        opacity: 0.5;
        width: 50%;
    }

    100% {
        opacity: 1;
    }
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href='./css/main.css' />
    <link rel="shortcut icon" href="img\logo\Garcia Tavern-logos.jpeg" />
    <script src="./js/anime.min.js"></script>    
    <script src="js/intro.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title>SnapFood </title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            
    </body>
   
<body>

    <!--  animated nav bar -->
     <!-- <div class="navBar" id="nv">
        <nav>
            <i class="bi bi-justify" onclick="alert('heelo')" id="hamMenu"></i>
            <ul>
                
                <li><a href='?page=home'>HOME </a></li>
                <li><a href='?page=menu'>MENU </a></li>
                <li><a href='?page=ourstory'>OUR STORY  </a></li>
                <li><a href='?page=contactus'>CONTACT US </a></li>
               
                <li class="socialIcon"><a href="call:111-111-111"><i class="bi bi-telephone-forward"></i></a></li>
                <li class="socialIcon"><a href="instgram.com/example"><i class="bi bi-instagram"></i></a></li>
                <li class="socialIcon"><a href="mailto:example@example.com"><i class="bi bi-envelope-fill"></i></a></li>
            </ul>
        </nav>
    </div>   -->
    
    <div class="header">

       
         
    <!-- main logo !-->
	<div class="IntroMsg">
    <img  alt="Garcia Taverns where food meets passion" 
    class="logo" src="https://i.ibb.co/WK9hkx8/Garcia-Tavern-logos-transparent.png" id="introLogo" width="200" height="200" />
    </div>
        <!-- subject-->
	<div class='IntroMsg'>
        <h1> Stunning food, Amazing Quaility  </h1>
    </br>
        <span>
           Let us host your next special occassion
        </span>
        <h2>
       <a href="call:111-111-111" style="text-decoration: none; color: white;"> <i class="bi bi-telephone-forward-fill"> <span> Contact US today </span></i></a>
       
        </h2>
	</div>
        <!-- review name-->

        <!-- title system for content-->
  
     <div class="menu">   
        <div class="menuIntro">     
            <!-- img tile system -->
            <img src="https://i.ibb.co/QCxY7FT/michael-discenza-Mxfcoxyc-H-Y-unsplash.jpg"/>
            <img src="https://i.ibb.co/cNrYC6S/izabela-rutkowski-Nme6-Tb-Wu-Vp-A-unsplash.jpg" />
        </div>
            
    <!-- menu layout-->
        <section id="home-menu">
            <h2>DRINK MENU</h2>
			<h3> Sprits, wine, and beer</h3>
	<ul>
		<li>
			<span class="dish">Vodka 1oz</span>
			<span class="Price">$6</span>
			<span class="Description">VODKA and choice of juice or soda.</span>
		</li>
		<li>
			<span class="dish">Rum 1oz.</span>
			<span class="Price">$6</span>
			<span class="Description">RUM and choice of juice or soda.</span>
		</li>
		<li>
			<span class="dish">Whisky 1oz.</span>
			<span class="Price">$6</span>
			<span class="Description">Whisky and choice of juice or soda.</span>
		</li>
		<li>
			<span class="dish">Tequila 1oz.</span>
			<span class="Price">$6</span>
			<span class="Description">Tequila served with juice or soda.</span>
		</li>
		<li>
			<span class="dish">Red wine.</span>
			<span class="Price">$8</span>
			<span class="Description">8oz Red wine, ask server for our wine selection. </span>
		</li>
		<li>
			<span class="dish">White wine.</span>
			<span class="Price">$8</span>
			<span class="Description">8oz white wine, ask server for our wine selection.</span>
		</li>
		<li>
			<span class="dish">Sparkling wine .</span>
			<span class="Price">$12</span>
			<span class="Description">8oz sparking wine glass of your choice.</span>
		</li>
		<li>
			<span class="dish">Domestic and foreign beer .</span>
			<span class="Price">$6 - $8</span>
			<span class="Description">Domestic and foreign beer of you choice</span>
		</li>
	</ul>
    </section>
    <!-- end of menu layout -->
    </div>

    <div class="menu">   
        <div class="menuIntro">    
            <img  id="caption_img"src="https://i.ibb.co/9g9yg5G/chad-montano-l-P5-MCM6n-Z5-A-unsplash.jpg"  />  
            <img id="caption_img" src="https://i.ibb.co/q1HKkyL/ella-olsson-4d-Qia-WKi-L-Y-unsplash.jpg" />
        </div>
 
     <section id="home-menu">
            <h2>FOOD MENU</h2>
			<h3> Entrees, mains, and handhelds</h3>
	<ul>
		<li>
			<span class="dish">Nachos</span>
			<span class="Price">$12</span>
			<span class="Description">cheese, onions, tomotoes. 
			</span>
		</li>
		<li>
			<span class="dish">Tacos.</span>
			<span class="Price">$12</span>
			<span class="Description">chicken or beef with your choice of side.</span>
		</li>
		<li>
			<span class="dish">Chicken rice bowl.</span>
			<span class="Price">$16</span>
			<span class="Description">
				brown rice, and veggies, served with choice or sauce 
			</span>
		</li>
		<li>
			<span class="dish">Grilled chicken</span>
			<span class="Price">$15</span>
			<span class="Description">
				Juicy grilled chicken served with choice of sauce.
			</span>
		</li>
		<li>
			<span class="dish">Steak and fired beans.</span>
			<span class="Price">$15</span>
			<span class="Description">Steak and your choice of side.</span>
		</li>
		<li>
			<span class="dish">burrito.</span>
			<span class="Price">$12</span>
			<span class="Description">Your choice of beef or chicken.</span>
		</li>
		
	</ul></section></div>


    <div class="menu">   
        <div class="menuIntro">    
             <img src="https://i.ibb.co/GJ0Q03Q/camille-paralisan-rq-NIBr-DGnh4-unsplash.jpg" />
             <img src="https://i.ibb.co/rsxRJMX/oscar-nord-5-CPn8-NE2-Tc-unsplash.jpg" />
        </div>
     <section id="home-menu">
            <h2>DESERT MENU</h2>
			<h3> Deserts and sweets</h3>
	<ul>
		<li>
			<span class="dish">Chocolate cake .</span>
			<span class="Price">$7</span>
			<span class="Description">Loaded Chocolate cake with fudge topping.</span>
		</li>
		<li>
			<span class="dish">NY cheesecake.</span>
			<span class="Price">$12</span>
			<span class="Description">NY cheesecake toped with strawberry topping.</span>
		</li>
		<li>
			<span class="dish">Apple pie.</span>
			<span class="Price">$6</span>
			<span class="Description">Warm apple pie tooped with icecream.</span>
		</li>
		<li>
			<span class="dish">Churros.</span>
			<span class="Price">$7</span>
			<span class="Description">pancake mix, water, oil, sugar, cinnamon.</span>
		</li>
		<li>
			<span class="dish">Sopaipillas</span>
			<span class="Price">$7</span>
			<span class="Description">Light, crispy pastry puffs, sopaipillas are a sweet way to round out a spicy meal.</span>
		</li>
		<li>
			<span class="dish">Creamy Caramel Flan.</span>
			<span class="Price">$12</span>
			<span class="Description">A small slice of this impressively rich, creamy, caramel flan dessert goes a long
				way.</span>
		</li>
		<li>
			<span class="dish">Shortcut Tres Leches Cake</span>
			<span class="Price">$12</span>
			<span class="Description">My mom's favorite cake is tres leches, a butter cake soaked in three kinds of milk. </span>
		</li>
		<li>
			<span class="dish">Pressure-Cooker Pumpkin Flans</span>
			<span class="Price">$14</span>
			<span class="Description">This silky, smooth dessert captures the essence and elegance of fall. </span>
		</li>
	</ul></section></div></div>


   <!-- coded by cryptograghi 2021  aka oliver shwaba  :) -->

</html>
