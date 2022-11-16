<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- adding css link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1 class="logo">All Cricket</h1>
        <nav class="nav__links">
            <ul>
                <li><a href="index.php">Jersey</a></li>
                <li><a href="bat.php">Bat</a></li>
                <li><a class="onsite" href="ball.php">Ball</a></li>
                <li><a href="other.php">Other Accessories</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <a href="#"><img src="images/shopping_cart.png" alt="Shopping Cart"></a>
    </header>
    
    <section id="product1" class="section-p2">
        <h2> Ball Collections</h2>
        <div class="pro-container">
            <div class="pro" id="item1">
                <img class="img-2" src="images/ball1.png" alt="">
                <div class="des">
                    <h5 class="title">EmmEmm Finest Gold Standard Cricket Leather Ball</h5>
                    <h4>₹ 399/-</h4>
                </div>
                <button class="cart" onclick="addToCart(item1)">Add To Cart</button>
                <!-- <a href="cart.html"><button class="cart" onclick="addToCart(item1)">Add To Cart</button></a> -->
            </div>

            <div class="pro">
                <img class="img-2" src="images/ball2.png" alt="">
                <div class="des">
                    <h5>RAISCO Bw01 Leather Cricket Ball </h5>
                    <h4>₹ 299/-</h4>
                </div>
                <button class="cart" onclick="MyFunc()">Add To Cart</button>
                <!-- <a href="#"><button class="cart">Add To Cart</button></a> -->
            </div>

            <div class="pro">
                <img class="img-2" src="images/ball3.png" alt="">
                <div class="des">
                    <h5>HINDON VP 12 Pcs Light Weight Multi Color Tennis Cricket Ball</h5>
                    <h4>₹ 599/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/ball4.png" alt="">
                <div class="des">
                    <h5>Headly Rubber Cricket Tennis Ball </h5>
                    <h4>₹ 89/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/ball5.png" alt="">
                <div class="des">
                    <h5>Guru Tennis Ball </h5>
                    <h4>₹ 59/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/ball6.png" alt="">
                <div class="des">
                    <h5>Rmax - White Leather Cricket Ball for Practice Purpose (Pack of 4) </h5>
                    <h4>₹ 599/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/ball7.png" alt="">
                <div class="des">
                    <h5>Vector X Green Cricket Tennis Ball (Heavy) (Pack of 6)</h5>
                    <h4>₹ 499/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/ball8.png" alt="">
                <div class="des">
                    <h5>DSC Hanging Synthetic Cricket Ball</h5>
                    <h4>₹ 199/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

        </div>
        </div>
    </section>

    <section id="newsletter"  class="section-p3 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about the offers.</p>
        </div>

        <form action="index.php" method="post">
            <?php
            $userEmail = "";
            if(isset($_POST['subscribe'])){
                $userEmail = $_POST['email'];
                if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){
                    $subject = " Thanks for subscribing us- ALL CRICKET";
                    $message = "Thanks for subscribing to our page. You will always receive update from us. We wont sell your info. ";
                    $sender = "From: tragicleo1010@gmail.com";
                    if(mail($userEmail, $subject, $message, $sender)){
                        ?>
                        <div class="alert success">SUSCRIBED</div>
                        <?php
                        $userEmail = "";
                    }else{
                        ?>
                        <div class="alert error">Mail sending Failed </div>
                        <?php
                    }
                }else{
                    ?>
                    <div class="alert error">Invalid Email</div>
                    <?php
                }
            }
            ?>
            <div class="form">
                <input type="text" name="email" placeholder="Email Address" value="<?php echo $userEmail ?>">
                <input class="button" type="submit" name="subscribe" value="Subscribe">
            </div>
        </form> 
    </section>

    <footer class="section-p3">
        <div class="col">
            <h1 class="logo">All Cricket</h1>
            <h4>Contact</h4>
            <p><strong>Address:</strong> 2nd Cross Rd, A Sector, KHB Colony, Yelahanka New Town, Bengaluru, Karnataka 560064</p>
            <p><strong>Phone:</strong> 5413532659</p>
        </div>

        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>

        <div class="copyright">
            <p>© Web Creation 2022. All Rights Reserved.</p>
        </div>
    </footer>
  <Script src="myapp.js"></Script>
   
</body>
</html>