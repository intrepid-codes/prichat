<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PriChat | Coolest Chatting Platform In India</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://cdn3d.iconscout.com/3d/premium/thumb/chat-2997147-2516185.png?f=webp" type="image/x-icon">
</head>
<body>
<div id="main">
    <div id="page1">
        <div id="cursor"></div>
        <nav>
            <div id="brand">
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/chat-2997147-2516185.png?f=webp" alt="">
                <div id="navline"></div>
                <h2>Prichat</h2>

                <div id="menu-opener">
                    <div id="menuBox">
                        <h4>Menu</h4>
                        <div id="linkBox">
                            <a href="login.php" class="bigMouse"><span>Login</span><span>Login</span></a>
                            <a href="signup.php"><span>Signup</span><span>Signup</span></a>
                            <a href="contact.php"><span>Contact</span><span>Contact</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="menu-button" onclick="animateMenu();">
                <div class="line1"></div>
                <div class="line2"></div>
            </div>
        </nav>
        <div id="glow1"></div><div id="glow2"></div>
        <div id="portfolio-area">
            <img src="images/bg-19.png" alt="">
            <div id="portfolio-text">
                <h1>Chat From The <span>Coolest <br> <span>Chatting</span> Platform</span> In India.</h1>
                <div id="buttons">
                    <button onclick="location.href = 'login.php';"><span>Get Started</span><span>Get Started</span></button>
                    <button onclick="location.href = 'learn_more.php';"><span>Learn More</span><span>Learn More</span></button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    function animateMenu(){
    var menuBtn = document.querySelector('#menu-button')
    var menuOpener = document.querySelector('#menu-opener')
    var needBlur = document.querySelector('#portfolio-area')
    var needScale = document.querySelectorAll('#linkBox a')
    var line1 = document.querySelector('.line1')
    var line2 = document.querySelector('.line2')

    if (line1.className == "line1" && line2.className == "line2") {
        line1.className = "line1 rotate"
        line2.className = "line2 rotates"
        needBlur.style.WebkitFilter = "blur(2px)"
        menuOpener.style.right = "0"
    } else {
        line1.className = "line1"
        line2.className = "line2"
        menuOpener.style.right = "-100%"
        needBlur.style.WebkitFilter = "blur(0px)"
        }
}
</script>
</html>