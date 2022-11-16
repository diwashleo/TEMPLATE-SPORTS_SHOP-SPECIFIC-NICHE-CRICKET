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
                <li><a href="ball.php">Ball</a></li>
                <li><a class="onsite" href="other.php">Other Accessories</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <a href="#"><img src="images/shopping_cart.png" alt="Shopping Cart"></a>
    </header>
    
    <section id="product1" class="section-p2">
        <h2> Cricket Assessories</h2>
        <div class="pro-container">
            <div class="pro" id="item1">
                <img class="img-2" src="images/bag1.png" alt="">
                <div class="des">
                    <h5 class="title">JJ Jonex Jonex Ashes Cricket Kit Bag</h5>
                    <h4>₹ 799/-</h4>
                </div>
                <button class="cart" onclick="addToCart(item1)">Add To Cart</button>
                <!-- <a href="cart.html"><button class="cart" onclick="addToCart(item1)">Add To Cart</button></a> -->
            </div>

            <div class="pro">
                <img class="img-2" src="images/bag2.png" alt="">
                <div class="des">
                    <h5>SS Cricket Kit Bag</h5>
                    <h4>₹ 1,799/-</h4>
                </div>
                <button class="cart" onclick="MyFunc()">Add To Cart</button>
                <!-- <a href="#"><button class="cart">Add To Cart</button></a> -->
            </div>

            <div class="pro">
                <img class="img-2" src="images/helmet1.png" alt="">
                <div class="des">
                    <h5>Steelbird Hitz Cricket Helmet</h5>
                    <h4>₹ 1,999/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/helmet2.png" alt="">
                <div class="des">
                    <h5>SG AeroShield Cricket Helmet, </h5>
                    <h4>₹ 1,499/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/leg1.png" alt="">
                <div class="des">
                    <h5>DSC Youth Leather 1500665 Condor Glider Cricket Batting Right Legguard</h5>
                    <h4>₹ 2,299/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/leg2.png" alt="">
                <div class="des">
                    <h5>SG Test RH PU Foam Batting Legguard</h5>
                    <h4>₹ 3,299/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/combo.png" alt="">
                <div class="des">
                    <h5>CW Bouncer Right Hand Cricket Kit for Kids Cricket Set</h5>
                    <h4>₹ 4,999/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/shoe.png" alt="">
                <div class="des">
                    <h5>FOOTBOX Pitch Cricket Sports Shoe</h5>
                    <h4>₹ 1,799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/stump.png" alt="">
                <div class="des">
                    <h5>SAS Sports Cricket Wooden Spring Back Stump Set</h5>
                    <h4>₹ 1,599/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/cap.png" alt="">
                <div class="des">
                    <h5>SS Cricket Helmet Skull Cap for Men's </h5>
                    <h4>₹ 299/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/tape.png" alt="">
                <div class="des">
                    <h5>DSC Fiberglass Cricket Bat Tape</h5>
                    <h4>₹ 149/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/grip.png" alt="">
                <div class="des">
                    <h5>Livox Pack of 5 Cricket Bat Grips</h5>
                    <h4>₹ 399/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/glove.png" alt="">
                <div class="des">
                    <h5>AS Ranger Cricket Batting Gloves</h5>
                    <h4>₹ 399/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/glove2.png" alt="">
                <div class="des">
                    <h5>SG RSD Prolite Wicket Keeping Gloves</h5>
                    <h4>₹ 1699/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/bottle.png" alt="">
                <div class="des">
                    <h5>Morons MS Dhoni 7 Sipper Bottle</h5>
                    <h4>₹ 299/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/keyring.png" alt="">
                <div class="des">
                    <h5>AUGEN Premium Stainless Steel Keychain</h5>
                    <h4>₹ 399/-</h4>
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