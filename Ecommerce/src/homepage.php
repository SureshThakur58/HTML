<?php

session_start();
if(!isset($_SESSION['login'])||$_SESSION['login']!=true){
    header("location:loginpage.php");
    exit;
}
else{
    ?>
    <a href="logout.php"><h1 style="display: inline-block; font-weight: bold;  text-align: center; ">Logout</h1></a>
    <?php
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redstore | Ecommerce Website Design </title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

</head>
<body>
    <div class="header">

    <div class="container">
        <div class="navbar">
            <div class="logo">
               <img src="/Ecommerce/image/logo.png" width="125px">
            </div>
            <nav>
               <ul id="MenuItems">
                   <!-- <li><a href="homepage.php">Home</a></li>  -->
                   <li><a href="product.php">Product</a></li> 
                   <!-- <li><a href="">About</a></li>                                -->
                   <li><a href="contact.php">Contact</a></li> 
                   <li><a href="loginpage.php">Account</a></li> 
               </ul>
            </nav>
            <img src="/Ecommerce/image/cart.png" width="30px" height="30px">
            <img src="/Ecommerce/image/menu.png" class="menu-icon" onclick="menutoggle()">

       </div>  
       <div class="row">
        <div class="col-2">  
            <h1> Give Your Workout <br> A New Style!
            </h1>
            <p>Success isn't always about greatness. It's about consistency.
                 Consistent <br> hard work gain success. Greatness will come. 
            </p>
            <a href="https://www.redstore.gr/en/" class="btn">Explore Now &#8594;</a>

        </div>
        <div class="col-2">
            <img src="/Ecommerce/image/image.png">

        </div>
       </div>
    </div>
</div>

<!-------featured categories----------->

<div class="categories">
    <div class="small-container">
        <div class="row">
            <div class="col-3"> 
                <img src="/Ecommerce/image/category-1.jpg" >
            </div>
            <div class="col-3">
                <img src="/Ecommerce/image/category-2.jpg" alt="">
    
            </div>
            <div class="col-3">
                <img src="/Ecommerce/image/category-3.jpg" alt="">
            </div>
    </div>
   
       
    </div>
</div>

<!-----------featured products-->
<div class="small-container">
    <h2 class="title">Featured Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="/Ecommerce/image/product-1.jpg" >
            <h4>Red Printed T-Shirt</h4>
           <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-2.jpg" >
            <h4>Red Printed T-Shirt</h4>
          <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-3.jpg" >
            <h4>Red Printed T-Shirt</h4>
            <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-4.jpg" >
            <h4>Red Printed T-Shirt</h4>
            <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
    </div>
    <h2 class="title">Latest Products</h2>
    <div class="row">
        <div class="col-4">
            <img src="/Ecommerce/image/product-5.jpg" >
            <h4>Red Printed T-Shirt</h4>
           <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-6.jpg" >
            <h4>Red Printed T-Shirt</h4>
          <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-7.jpg" >
            <h4>Red Printed T-Shirt</h4>
            <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-8.jpg" >
            <h4>Red Printed T-Shirt</h4>
            <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <img src="/Ecommerce/image/product-9.jpg" >
            <h4>Red Printed T-Shirt</h4>
           <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-10.jpg" >
            <h4>Red Printed T-Shirt</h4>
          <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-11.jpg" >
            <h4>Red Printed T-Shirt</h4>
            <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="/Ecommerce/image/product-12.jpg" >
            <h4>Red Printed T-Shirt</h4>
            <!----left for rating symbol-->
            <p>$50.00</p>
        </div>
    </div> 
</div>
    
<!-----------offer---------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="/Ecommerce/image/exclusive.png"  class="offer-img">
                </div>
                <div class="col-2">
                    <p>Excuslively Available on RedStore</p>
                    <h1>Smart Band 4</h1>
                    <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3) AMOLED color full-touch display with adjustable brightness, so everything is clear as can be.
                    </small>
                    <br>
                    <a href="https://www.paypal.com/cgi-bin/webscr" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>

<!------------testimonial---------->



<div class="testimonial">
    <div class="small-container">
        <div class="row">
            <div class="col-3">
               <!-----left for quote symbol "----->
                <p>Sean Parker is an American entrepreneur and philanthropist, best known for his role in co-founding Napster, Plaxo, and being the first president of Facebook.
                </p>
                <!----left for rating symbol-->
                <img src="/Ecommerce/image/user-1.png" >
                <h3>Sean Parker</h3>
            </div>
            <div class="col-3">
                <!-----left for quote symbol "----->
                 <p>Mike Smith was born and raised in Thorburn, Nova Scotia. He started playing hockey at the age of four but showed early signs of musical genius when he learned to play guitar at the age of seven.
                 </p>
                 <!----left for rating symbol-->
                 <img src="/Ecommerce/image/user-2.png" >
                 <h3>Mike Smith</h3>
             </div>
             <div class="col-3">
                <!-----left for quote symbol "----->
                 <p> Michael Jordan is widely regarded as one of the greatest basketball players of all time. He played the majority of his career with the Chicago Bulls in the National Basketball Association (NBA).
                 </p>
                 <!----left for rating symbol-->
                 <img src="/Ecommerce/image/user-3.png" >
                 <h3>Michael Jordan</h3>
             </div>
        </div>
    </div>
</div>

<!-----------Brands------------->

<div class="brands">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="/Ecommerce/image/logo-godrej.png" >
            </div>
            <div class="col-5">
                <img src="/Ecommerce/image/logo-oppo.png" >
            </div>
            <div class="col-5">
                <img src="/Ecommerce/image/logo-coca-cola.png" >
            </div>
            <div class="col-5">
                <img src="/Ecommerce/image/logo-paypal.png" >
            </div>
            <div class="col-5">
                <img src="/Ecommerce/image/logo-philips.png" >
            </div>
        </div>
    </div>
</div>


<!------------footer------------>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App from Android ios mobile phone.
                </p>
            </div>
            <div class="footer-col-2">
                <img src="/Ecommerce/image/logo-white.png" >
                <p>Our Purpose Is To Sustainbly Make the Pleasure and Benefits of Sports Accessible tp the Many.
                </p>
                <div class="app-logo">
                    <img src="/Ecommerce/image/play-store.png">
                    <img src="/Ecommerce/image/app-store.png">
                </div>
            </div>
            <div class="footer-col-3">
                <h3>Useful Links</h3>
                 <ul>
                    <li>Coupons</li>
                    <li>Blog Post</li>
                    <li>Return Policy</li>
                    <li>Join Affiliate</li>
                 </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow Us</h3>
                 <ul>
                    <li>Facebook</li>
                    <li>Twitter</li>
                    <li>Instagram</li>
                    <li>YouTube</li>
                 </ul>
            </div>
        </div>
        <!-- <hr> -->
        <!-- <p class="copyright">Copyright 2020 - Easy Tutorials</p> -->
    </div>
</div>

<!---------------js for toggle menu----------->
<script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px"

    function menutoggle(){
        if( MenuItems.style.maxHeight == "0px")
        {
            MenuItems.style.maxHeight = "200px"
        }
        else
        {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>
</body>
</html>
