<!DOCTYPE html>
<html lang="tr">

<head>
    <?php $this->load->view("includes/head"); ?>
</head>

<body>
    <?php  
        session_start();
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSMS76N" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header Navigation -->
    <nav>
        <div class="container">
            <div class="row">
                <header class="header">
                    <div class="header-left">
                        <a href="./index.php">
                            <img class="logo" src="./assets/media/logo_acikbeyaz.png" alt="grh-logo">
                        </a>
                    </div>

                    <div class="header-right">
                        <div class="nav-menu" id="navi-menu">
                            <ul class="nav-items">
                                <li class="list-items">
                                    <a class="header-link" id="active-nav" href="./index.php">Ana Sayfa</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./gallery.php">Bilet Al</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./about.php">Hakkımızda</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./amenities.php">Yardım</a>
                                </li>
                                <li class="list-items">
                                    <a class="header-link" href="./contacts.php">İletişim</a>
                                </li>

                                <li class="list-items">
                                    <a class="header-link" href="./faqs.php">SSS</a>
                                </li>
                            </ul>
                            <div class="vertical"></div>

                            <?php
                            
                                if(isset($_SESSION['giris']) && $_SESSION['giris'] == true) { ?>
                            <button class="head-btn" onclick="window.location.href = './account.php'">
                                Hesabım
                            </button>
                            <?php }
                            else {  ?>

                            <button class="head-btn" onclick="window.location.href = './login.php'">
                                Giriş
                            </button>

                            <button class="head-btn" onclick="window.location.href = './register.php'">
                                Kayıt Ol
                            </button>
                            <?php
                            } ?>

                        </div>

                        <!-- Mobile Menu / Mobile için menu -->
                        <div class="mobile-menu" id="hamburger">
                            <i id="openMenu" class="fa-solid fa-bars fa-2xl" style="color: #2c333d;"></i>
                            <i id="closeMenu" class="hide fa-solid fa-x fa-2xl " style="color: #2c333d;"></i>
                        </div>
                    </div>
                </header>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <!-- hero section -->
    <section class="hero-section">

        <div class="container" id="hero-cont">
            <div class="row" id="hero-row">
                <div class="col-12" id="hero-col">
                    <h1 class="hero-h1">Umuttepe Turizme Hoşgeldiniz </h1>

                    <form class="home-search" action="./gallery.php">

                        <div class="form-row">
                            <i class="fa-solid fa-bus " style="color: #909090;"></i>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option value="" disabled selected hidden>Nereden</option>
                                <option value="istanbul">İstanbul</option>
                                <option value="bursa">Bursa</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option value="" disabled selected hidden>Nereye</option>
                                <option value="istanbul">İstanbul</option>
                                <option value="bursa">Bursa</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                        </div>
                        <br><br>
                        <div class="ui calendar" id="date-1">
                            <div class="ui input left icon">
                                <i class="calendar icon"></i>
                                <input type="text" class="calender-text" placeholder="Gidiş Tarihi" required>
                            </div>
                        </div>

                        <div id="donusTarihDiv" style="display:none;">
                            <div class="ui calendar" id="date-2">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" class="calender-text" placeholder="Geliş Tarihi" required>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="donusCheckbox" name="donusCheckbox">
                        <label for="donusCheckbox">
                            <i>Dönüş Bileti Almak İstiyorum</i>
                        </label>

                        <script>
                        // JavaScript ile dönüş tarih input'unun görünürlüğünü kontrol etme
                        document.getElementById('donusCheckbox').addEventListener('change', function() {
                            var donusTarihDiv = document.getElementById('donusTarihDiv');
                            donusTarihDiv.style.display = this.checked ? 'block' : 'none';
                            if (!this.checked) {
                                document.getElementById('tarihDonus').value = ''; // Dönüş tarihini sıfırla
                            }
                        });
                        </script>




                        <div class="submit-search">
                            <button id="submit-main-btn" class="submit" onclick="window.location.href = 'gallery.php';">
                                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                <span class="hide-text-mobile">Arama</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>



    <!-- Cookies -->
    <div id="cookieNotice" class="light display-right">
        <div id="closeIcon">
            <i class="fa-solid fa-circle-xmark fa-xl" style="color: #2C333D;"></i>
        </div>
        <div class="title-wrap">
            <h4>Cookie Consent</h4>
        </div>
        <div class="content-wrap">
            <div class="msg-wrap">
                <p>This website uses cookies or similar technologies, to enhance your browsing experience and provide
                    personalized recommendations. By continuing to use our website, you agree to our <a
                        style="color:#FBB03B;" href="./privacy-policy.html">Privacy Policy</a></p>
                <div class="btn-wrap">
                    <button class="cookie-btn" onclick="acceptCookieConsent();">Accept</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Cookies End -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row" id="footer-row">
                <div class="col-12 col-lg-6">
                    <img class="footer-logo" src="./assets/media/logo_acikbeyaz.png" alt="footer-logo">
                    <p class="footer-text">Umuttepe Turizm, doğanın huzur verici kollarında keşif ve maceraya adım
                        atanların rotasıdır. Yemyeşil ormanlarla çevrili, tarih ve kültür mirasını bünyesinde barındıran
                        bu benzersiz bölge, ziyaretçilerine unutulmaz bir deneyim sunar. Umuttepe Turizm, konforlu
                        konaklama seçenekleri, lezzetli yerel yemekler ve etkileyici doğal güzellikleriyle her
                        ziyaretçisine kendini özel hissettirir. Burada, ruhunuzu dinlendirirken aynı zamanda maceraya
                        atılma fırsatını bulacaksınız. Umuttepe Turizm Sitesi, hayallerinizi gerçeğe dönüştürmek için
                        sizleri bekliyor.
                    </p>
                </div>

                <div class="col-12 col-lg-6 ">
                    <center>
                        <h6 class="footer-header">
                            Hızlı Linkler
                        </h6>

                        <ul class="footer-links">
                            <li class="list-items"><a class="footer-nav" id="active-nav" href="./index.php">Ana
                                    Sayfa</a>
                            </li>
                            <li class="list-items"><a class="footer-nav" href="./gallery.php">Bilet Al</a></li>
                            <li class="list-items"><a class="footer-nav" href="./about.php">Hakkımızda</a></li>
                            <li class="list-items"><a class="footer-nav" href="./amenities.php">Yardım</a></li>
                            <li class="list-items"><a class="footer-nav" href="./contacts.php">İletişim</a></li>
                            <li class="list-items"><a class="footer-nav" href="./faqs.php">SSS</a></li>
                            <li class="list-items"><a class="footer-nav" href="./login.php">Giriş Yap</a></li>
                            <li class="list-items"><a class="footer-nav" href="./register.php">KAyıt Ol</a></li>
                        </ul>
                    </center>

                </div>



            </div>

            <!-- copyright -->
            <div class="row" id="copyright-row">
                <div class="col-12" id="copyright-col">
                    <p class="copyright-text">
                        Umuttepe Turizm &copy; <span id="year"></span> All Rights Reserved.<br><i> Powered By
                            Boostrap</i>
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
    <!-- Back to top button -->
    <!--Sayfada aşağıya indikçe sağ altta çıkan buton, sayfanın en üstüne çıkmayı sağlar.-->
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>


    <!-- JS -->
   <?php $this->load->view("includes/include_script"); ?>


</body>

</html>