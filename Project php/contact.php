<?php
$title="Contact us";
$md= "This is meta description for the page";
?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>
    <section class="contact">
        <header>
            <div class="container">
                <div class="row">
                    <div class="logo"><a href="index.html"><img src="img/logo.png" alt="logo"></a></div>
                    <ul class="menu">
                        <a href="home.php"><li class="menu_link">Home</li></a>
                        
                        <a href="apartment.php"><li class="menu_link">Apartment</li></a>
                        
                        <a href="about.php"><li class="menu_link active">About</li></a>
                        
                        <a href="#"><li class="menu_link">News</li></a>
                        
                        <a href="contact.php"><li class="menu_link">Contact</li></a>
    
                    </ul>
                </div>
            </div>

            <ul class="menu_mini">
                <li class="menu_item"><a href="index.html" class="menu_link">Home</a></li>
                <li class="menu_item"><a href="index.html" class="menu_link">Apartment</a></li>
                <li class="menu_item"><a href="about_us.html" class="menu_link">About</a></li>
                <li class="menu_item"><a href="index.html" class="menu_link">News</a></li>
                <li class="menu_item"><a href="contact.html" class="menu_link">Contact</a></li>
            </ul>
    
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </header>
        </header>

        <div class="panel">
            <div id="blue" data-color="#b3e5fc" onclick="changeColor('blue')"></div>
            <div id="red" data-color="#ce8f96" onclick="changeColor('red')"></div>
            <div id="purple" data-color="#8e6ad1" onclick="changeColor('purple')"></div>
            <div id="green" data-color="#c5e1a5" onclick="changeColor('green')"></div>
            <div id="orange" data-color="#D9AB74" onclick="changeColor('orange')"></div>
        </div>
        
        <div class="wrapper_contact">
            <div class="container">
                <h1 class="contact_title">Contact us</h1>
            </div>
        </div>
        
    </section>

    <section class="contact_info">
        <div class="container">
            <h2 class="contact_subtitle">
                Lets start a Conversation
            </h2>
            <div class="contact_wrapper">
                <div class="contact_data">
                    <ul class="contact_list">
                        <li>Opening hours: 9:00-18:00</li>
                        <li>hey@coliving.fi</li>
                        <li>+358 45 223-43-12</li>
                        <li>H??meenlinna 23A, Finland</li>
                    </ul>
                    <div class="maps">
                        <iframe class="maps_info" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.9025009626635!2d2!3d3!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdb2ba8689ed0920d!2z0J_QmNCm0JjQmtCQ0KLQng!5e0!3m2!1sbg!2sus!4v1448115192914"></iframe>
                    </div>
                </div>
                <div class="contact_form">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <input type="text" placeholder="Country">
                    <textarea placeholder="Enter your message"></textarea>
                    <div class="contact_warning">Please note: all fields are required to fill.</div>
                    <div class="descr_btn">Send message</div>
                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';?>