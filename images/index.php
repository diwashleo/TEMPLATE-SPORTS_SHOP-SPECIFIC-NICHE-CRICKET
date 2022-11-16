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
                <li><a class="onsite" href="jersey.html">Jersey</a></li>
                <li><a href="bat.html">Bat</a></li>
                <li><a href="ball.html">Ball</a></li>
                <li><a href="shoes.html">shoes</a></li>
                <li><a href="other.html">Other Accessories</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
        </nav>
        <a href="cart.html"><img src="images/shopping_cart.png" alt="Shopping Cart"></a>
    </header>

    <section id="hero">
        <h3>KITS</h3>
        <h1>RCB TEAM</h1>
        <h1>COLLECTIONS</h1>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box" id="img-1">
            <img src="images/customer.png" alt="">
            <h5>Customer Support</h5>
        </div>

        <div class="fe-box" id="img-2">
            <img src="images/delivery.png" alt="">
            <h5>Free Delivery</h5>
        </div>

        <div class="fe-box" id="img-3">
            <img src="images/return.png" alt="">
            <h5>Easy Return</h5>
        </div>

        <div class="fe-box" id="img-4">
            <img src="images/quality.png" alt="">
            <h5>Quality Product</h5>
        </div>
    </section>

    <section id="product1" class="section-p2">
        <h2>Featured Jersey</h2>
        <p>collections of all team jersey</p>
        <div class="pro-container">
            <div class="pro">
                <img class="img-2" src="images/india.png" alt="">
                <div class="des">
                    <h5>World Cup T20 India Jersey </h5>
                    <h4>₹ 799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/test.png" alt="">
                <div class="des">
                    <h5>Team India Fan Test Jersey </h5>
                    <h4>₹ 799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/train.png" alt="">
                <div class="des">
                    <h5>Team India Training Jersey </h5>
                    <h4>₹ 799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/mi.png" alt="">
                <div class="des">
                    <h5>Mumbai Indians Jersey </h5>
                    <h4>₹ 799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/rcb.png" alt="">
                <div class="des">
                    <h5>RCB Jersey </h5>
                    <h4>₹ 799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/csk.png" alt="">
                <div class="des">
                    <h5>CSK Jersey </h5>
                    <h4>₹ 799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/kkr.png" alt="">
                <div class="des">
                    <h5>KKR Jersey </h5>
                    <h4>₹ 799/-</h4>
                </div>
                <a href="#"><button class="cart">Add To Cart</button></a>
            </div>

            <div class="pro">
                <img class="img-2" src="images/delhi.png" alt="">
                <div class="des">
                    <h5>Delhi Ipl Jersey </h5>
                    <h4>₹ 799/-</h4>
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
            <div class="form">
                <input type="text" placeholder="Email Address">
            </div>
            <div class="form">
                <input type="submit" value="Subscribe">
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
            <a href="#">Contact Us</a>
        </div>

        <div class="copyright">
            <p>© Web Creation 2022. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="app.js"></script>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>