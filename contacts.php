<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="awrapper">
       
    <?php require_once "blocks/header.php"; ?>

        <div class="contacts-hero container">
            <span>Home ><span class="currentpage">Contact us</span>
                <h1>Lorem Ipsum is simply dummy text of the printing and.</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                <img src="img/map.png" alt="">
        </div>

        <div class="our-contacts container">
            <div class="follow">
                <p>Follow us</p>
                <div class="follow-icons">
                    <img src="img/facebook.png" alt="">
                    <img src="img/instagram.png" alt="">
                    <img src="img/twitter.png" alt="">
                    <img src="img/in.png" alt="">
                </div>
            </div>
            <div class="vertical-line"></div>
            <div class="number">
                <img src="img/phone.png" alt="">
                <p>+94 4444 5555 6</p>
            </div>
            <div class="vertical-line"></div>
            <div class="location">
                <img src="img/locationv.png" alt="">
                <p>but also the leap into electronic
                    typesetting</p>
            </div>
        </div>
    </div>
    <div class="sayhello">
        <h2>Say hello</h2>
        <p>Lorem Ipsum is simply dummy text of the printing.</p>
        <form class="container" action="#" method="post">
            <div class="field-group full-name">
                <div class="fname">
                    <label for="fname">First name</label>
                    <input type="text" name="fname" id="fname">
                </div>
                <div class="lname">
                    <label for="lname">Last name</label>
                    <input type="text" name="lname" id="lname">
                </div>
            </div>
            <div class="field-group">
                <label for="email">Email Address</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="field-group">
                <label for="message">Message</label>
                <textarea name="message" id="message"></textarea>
            </div>
            <button type="submit" class="btn field-group">Get in touch</button>
        </form>
        <img class="orange" src="img/orangeline.svg" alt="">
        <img class="white" src="img/whiteline.png" alt="">
    </div>

    <div class="awrapper">
        <div class="container email">
            <h3>Lorem Ipsum</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="block">
                <div>
                    <h4>Stay in the loop</h4>
                    <p>Subscribe to receive the latest news and updates about TDA.
                        We promise not to spam you! </p>
                </div>
                <div class="input-wrappe">
                    <input type="email" placeholder="Enter email address">
                    <button type="submit">Continue</button>
                </div>
            </div>
        </div>
    </div>
    
    <?php require_once "blocks/footer.php";  ?>

</body>

</html>