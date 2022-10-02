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
    <link rel="stylesheet" href="faq.css">

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
                $sql = ("SELECT nama from bestseller ORDER BY id DESC LIMIT 1");
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                   echo" $data[nama]";}?>
                </h2>

            </div>
            <img class="logonih" src='asset/cake-lagoon1.png' alt=''>
            <div class='judul-text'>

                <p>Try It!</p>
                <h3>A Nice Cake Made By Ours.</h3>
            </div>
            <div class='cakeall'>
                <a href='3'>Buy Now</a>
                <div class='gambar-lagoon'>
                    <img src='
                    <?php
                $sql = ("SELECT gambar from bestseller ORDER BY id DESC LIMIT 1");
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                   echo" dashboard/gambar/$data[gambar]";}?>
                    ' alt='' width='300px'>

                    <img src='asset/curved-arrow-with-broken-line 2.png' alt=''>
                    <div class='cakelava'>
                    </div>
                    <div class='harga'>
                        <h2>
                            <?php
                $sql = ("SELECT harga from bestseller ORDER BY id DESC LIMIT 1");
                $query = mysqli_query($connect, $sql);
                while($data = mysqli_fetch_array($query)){
                   echo" $data[harga]";}?>
                        </h2>
                        <h2></h2>
                    </div>

                    <div class='textlagoon'>
                        <p>
                            <?php
                $sql = ("SELECT deskripsi from bestseller ORDER BY id DESC LIMIT 1");
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

        </div>
        <div class='wrapper'>
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
                <img src='dashboard/gambar/$data[gambar]' alt=''>
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
    <div class="faq">
        <div class="faq-kiri">
            <div class="judul-faq">
                <div class="bg">
                    <h1>FAQ'S</h1>
                    <p>( Frequently Asked Questions )</p>
                </div>
                <div class="wrap-collabsible">

                    <input id="collapsible" class="toggle" type="checkbox">
                    <?php
     $sql = ("SELECT * from faq WHERE id='1'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                    <label for='collapsible' class='lbl-toggle'> $data[pertanyaan] </label>
                    <div class='collapsible-content'>
                        <div class='content-inner'>
                            <p> $data[jawaban]</p>
                        </div>
                    </div>
                </div>
                ";
     }
     ?>

                    <div class="wrap-collabsible2">
                        <input id="collapsible2" class="toggle2" type="checkbox">
                        <?php
     $sql = ("SELECT * from faq WHERE id='2'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                    <label for='collapsible2' class='lbl-toggle2'>$data[pertanyaan]</label>
                    <div class='collapsible-content2'>
                        <div class='content-inner2'>
                            <p>$data[jawaban]</p>
                        </div>
                    </div>
                </div>
                ";
    }
    ?>
                        <div class="wrap-collabsible3">
                            <input id="collapsible3" class="toggle3" type="checkbox">
                            <?php
     $sql = ("SELECT * from faq WHERE id='3'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                            <label for='collapsible3' class='lbl-toggle3'>$data[pertanyaan]</label>
                            <div class='collapsible-content3'>
                                <div class='content-inner3'>
                                    <p>$data[jawaban]</p>
                                </div>
                            </div>
                        </div>
                ";
     }
     ?>

                        <div class="wrap-collabsible4">
                            <input id="collapsible4" class="toggle4" type="checkbox">
                            <?php
     $sql = ("SELECT * from faq WHERE id='4'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                            <label for='collapsible4' class='lbl-toggle4'>$data[pertanyaan]</label>
                            <div class='collapsible-content4'>
                                <div class='content-inner4'>
                                    <p>$data[jawaban]</p>
                                </div>
                            </div>
                        </div>
                        ";}?>
                    </div>
                </div>

                <div class="faq-kanan">
                    <div class="wrap-collabsible5">
                        <input id="collapsible5" class="toggle5" type="checkbox">
                        <?php
     $sql = ("SELECT * from faq WHERE id='5'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                        <label for='collapsible5' class='lbl-toggle5'>$data[pertanyaan]</label>
                        <div class='collapsible-content5'>
                            <div class='content-inner5'>
                                <p>$data[jawaban]</p>
                            </div>
                        </div>
                    </div>
                    ";}?>



                    <div class="wrap-collabsible6">
                        <input id="collapsible6" class="toggle6" type="checkbox">
                        <?php
     $sql = ("SELECT * from faq WHERE id='6'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                        <label for='collapsible6' class='lbl-toggle6'>$data[pertanyaan]</label>
                        <div class='collapsible-content6'>
                            <div class='content-inner6'>
                                <p>$data[jawaban]</p>
                            </div>
                        </div>
                    </div>
                    ";}?>



                    <div class="wrap-collabsible7">
                        <input id="collapsible7" class="toggle7" type="checkbox">
                        <?php
     $sql = ("SELECT * from faq WHERE id='7'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                        <label for='collapsible7' class='lbl-toggle7'>$data[pertanyaan]</label>
                        <div class='collapsible-content7'>
                            <div class='content-inner7'>
                                <p>$data[jawaban]</p>
                            </div>
                        </div>
                    </div>
                    ";}?>



                    <div class="wrap-collabsible8">
                        <input id="collapsible8" class="toggle8" type="checkbox">
                        <?php
     $sql = ("SELECT * from faq WHERE id='8'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                        <label for='collapsible8' class='lbl-toggle8'>$data[pertanyaan]</label>
                        <div class='collapsible-content8'>
                            <div class='content-inner8'>
                                <p>$data[jawaban]</p>
                            </div>
                        </div>
                    </div>
                    ";}?>

                    <div class="wrap-collabsible9">
                        <input id="collapsible9" class="toggle9" type="checkbox">
                        <?php
     $sql = ("SELECT * from faq WHERE id='9'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                        <label for='collapsible9' class='lbl-toggle9'>$data[pertanyaan]</label>
                        <div class='collapsible-content9'>
                            <div class='content-inner9'>
                                <p>$data[jawaban]</p>
                            </div>
                        </div>
                    </div>
                    ";}?>

                    <div class="wrap-collabsible10">
                        <input id="collapsible10" class="toggle10" type="checkbox">
                        <?php
     $sql = ("SELECT * from faq WHERE id='10'");
     $query = mysqli_query($connect, $sql);
     while($data = mysqli_fetch_array($query)){
        echo"
                        <label for='collapsible10' class='lbl-toggle10'>$data[pertanyaan]</label>
                        <div class='collapsible-content10'>
                            <div class='content-inner10'>
                                <p>$data[jawaban]</p>
                            </div>
                        </div>
                    </div>
                    ";}?>



                </div>
            </div>



            <script>
                let myLabels = document.querySelectorAll('.lbl-toggle');

                Array.from(myLabels).forEach(label => {
                    label.addEventListener('keydown', e => {
                        // 32 === spacebar
                        // 13 === enter
                        if (e.which === 32 || e.which === 13) {
                            e.preventDefault();
                            label.click();
                        };
                    });
                });
            </script>


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