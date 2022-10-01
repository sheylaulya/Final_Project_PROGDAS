<?php
include 'koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favors</title>
    <link rel="stylesheet" href="style.css">

    <!-- font area -->
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">


    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/203b2af49c.js" crossorigin="anonymous"></script>

</head>

<body>
    <div id="index" class="container1">
        <nav>
            <ul>
                <li><a href="#FAQ">FAQ</a></li>
                <li><a href="#rekom-produk">Recommendation</a></li>
                <li><a href="#index">Home</a></li>
                <li>
                    <img src="asset/logo.png" alt="logo">
                </li>
                <li><a href="#best-seller">Best Seller</a></li>
                <li><a href="#footer">More</a></li>
            </ul>
            <div class="signin">
                <a href="">Sign In</a>
                <a href="">Sign Up</a>
            </div>
        </nav>
        
        <div class="hero">
            <div class="row-1">
                <h1>Make your Life Flavours</h1>
                <h3>with <span>FAVORS</span> </h3>
            </div>
            <div class="highlight">
                <div class="mainobject">
                    <div class="background">
                        <img src="asset/main-object.jpg" alt="main-object">
                    </div>
                    <button>+</button>

                </div>
                <div class="cart">
                    <img class="arrow" src="asset/arrow.png" alt="arrow">
                    <p>add to <br> <span>cart</span> </p>
                </div>
            </div>

            <div class="left-row">
                <div class="left-row-atas">
                    <img src="asset/oven.png" alt="oven">
                    <div class="left-row-atas-text">
                        <h3>Baked</h3>
                        <h5>into a perfect texture.</h5>
                    </div>
                    <div class="left-row-bawah">
                        <p>many <br> variants.</p>
                        <img src="asset/tart cake.jpg" alt="tart">
                    </div>
                </div>
            </div>

            <div class="right-row">
                <div class="right-row-atas">
                    <img src="asset/cupcake.jpg" alt="cupcake">
                    <p>fresh from <br> the oven.</p>
                </div>
                <div class="right-row-tengah">
                    <h4>Wedding <br>Cake <span> Edition.</span></h4>
                    <div class="garis"></div>
                </div>
                <div class="right-row-bawah">
                    <h2>we'll keep it <br><span>Short and Sweet.</span></h2>
                    <img src="asset/taste.png" alt="taste">
                </div>
            </div>

        </div>
    </div>
    <div id="best-seller" class="best-seller">
        <div class="judul">
            <h2>Our Best Seller</h2>
        </div>
        <div class='lagoon'> 
         
            <div class='judul-lagoon'>
                <h2>
                <?php
                $sql = ("SELECT nama from bestseller ORDER BY id DESC");
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                   echo" $data[nama]";}?>
                   </h2>
             
            </div>   
             <img class="logonih"src='asset/cake-lagoon1.png' alt=''>
            <div class='judul-text'>     
              
                    <p>Try It!</p>
                    <h3>A Nice Cake Made By Ours.</h3>
                </div>
            <div class='cakeall'>
                <a href='3'>Buy Now</a>
                <div class='gambar-lagoon'>
                    <img src='
                    <?php
                $sql = ("SELECT gambar from bestseller ORDER BY id DESC");
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                   echo" gambar/$data[gambar]";}?>
                    ' alt='' width='300px'>

                    <img src='asset/curved-arrow-with-broken-line 2.png' alt=''>
                    <div class='cakelava'>
                    </div>
                    <div class='harga'>
                        <h2>
                        <?php
                $sql = ("SELECT harga from bestseller ORDER BY id DESC");
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                   echo" $data[harga]";}?>
                        </h2>
                        <h2></h2>
                    </div>

                    <div class='textlagoon'>
                        <p>
                        <?php
                $sql = ("SELECT deskripsi from bestseller ORDER BY id DESC");
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                   echo" $data[deskripsi]";}?>
                        </p>

                    </div>

                </div>

            </div>


        </div>
    </div>

    <!-- recomendded product -->
    <div id="rekom-produk">
    <div class="rec-product">
        <div class="title-rp">
            <p> create a story</p>
            <h1>with <span>FAVORS</span></h1>
        </div>
        <div class="rec-pro">
            <div class="garis">
                <p>Recommended Product
                    <i class="fa-solid fa-cake-candles"></i>
                </p>
            </div>
        </div>

    </div><div class='wrapper'>        
    <?php
     $sql = ("SELECT * from rekomen");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
    <div class='chart'>
        <div class='c-1'>
            <div class='nama'>
                <div class='ck'>
                    <p>$data[nama]</p>
                </div>
                <div class='ker'>
                    <i class='fa-solid fa-cart-shopping'></i>
                </div>
            </div>

            <div class='gambar'>
                <img src='gambar/$data[gambar]' alt=''>
            </div>

            <div class='harga'>
                <div class='harga-1'>
                    <p>$data[harga]</p>
                </div>

                <div class='harga-2'>
                    <p><s>$data[diskon]</s></p>
                </div>
            </div>

            <div class='buy'>
                <p>BUY NOW</p>
            </div>

        </div>
        </div>";
    }
    ?>
    </div>
    </div>
   
     


    <!-- FAQ -->
    <div id="FAQ" class="faq">
        <div class="faq-kiri">
            <div class="judul-faq">
                <div class="bg">
                    <h1>FAQ'S</h1>
                    <p>( Frequently Asked Questions )</p>
                </div>
                <div class="faq-kotak-1">
                    <div class="a">
                        <div class="lingkaran-b">

                        </div>

                        <div class="tanya">
                            <p>When should I order?</p>
                        </div>
                    </div>
                </div>

                <div class="faq-kotak-2">
                    <div class="a">
                        <div class="lingkaran-b">

                        </div>

                        <div class="tanya-2">
                            <p>Do you decorate or personalize your cakes?</p>
                        </div>
                    </div>
                </div>

                <div class="faq-kotak-3">
                    <div class="a">
                        <div class="lingkaran-b">

                        </div>

                        <div class="tanya-3">
                            <p>How many people do your cakes feed?</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="faq-kanan">
            <div class="faq-kotak-5">
                <div class="a">
                    <div class="lingkaran-a">

                    </div>

                    <div class="tanya-5">
                        <p>Do you ship cakes?</p>
                    </div>
                </div>
            </div>

            <div class="faq-kotak-6">
                <div class="a">
                    <div class="lingkaran-a">

                    </div>

                    <div class="tanya-6">
                        <p>Do you sell sugar free cakes?</p>
                    </div>
                </div>
            </div>

            <div class="faq-kotak-7">
                <div class="a">
                    <div class="lingkaran-a">

                    </div>

                    <div class="tanya-7">
                        <p>How long does a cake stay fresh?</p>
                    </div>
                </div>
            </div>

            <div class="faq-kotak-8">
                <div class="a">
                    <div class="lingkaran-a">

                    </div>

                    <div class="tanya-8">
                        <p>Should I refrigerate my cake?</p>
                    </div>
                </div>
            </div>

            <div class="faq-kotak-9">
                <div class="a">
                    <div class="lingkaran-a">

                    </div>

                    <div class="tanya-9">
                        <p>What is your Refund Policy?</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <!-- Foooter -->
    <div id="footer" class="footer">
        <div class="content">
            <div class="favors">
                <p>Favors</p>
                <ul>

                    <li><a href="#index">About Us</a></li>
                    <li><a href="">Menu</a></li>
                    <li><a href="#best-seller">Best Seller</a></li>
                    <li><a href="">About Us</a></li>
                </ul>
            </div>

            <div class="help-center">
                <p>Help Center</p>
                <ul>
                    <li><a href="">FAQ</a></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="best_seller">
                <p>Best Seller</p>
                <ul>
                    <li><a href="#best-seller">Wedding Cake</a></li>
                    <li><a href="#best-seller">Birthday cake</a></li>
                    <li><a href="#best-seller">Cup Cake</a></li>
                </ul>
            </div>
            <div class="logo">
                <img src="asset/Desain tanpa judul (1).png" alt=""> <br>
                <div class="copyright">
                    <img src="asset/copyright (1).png" alt="">
                    <p class="copyright-text">1997-now, Favors</p>
                </div>
            </div>
            <div class="sosmed">
                <p>Contact Us</p>
                <ul>
                    <li> <img src="asset/instagram.png" alt=""></li>
                    <li> <img src="asset/twitter.png" alt=""></li>
                    <li> <img src="asset/facebook.png" alt=""></li>
                    <li> <img src="asset/tiktok.png" alt=""></li>
                    <li> <img src="asset/email.png" alt=""></li>
                </ul>
            </div>
        </div>


    </div>
    </div>




</body>

</html>