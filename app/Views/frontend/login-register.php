<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--=============== FLATICON ===============-->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-straight/css/uicons-regular-straight.css'>

    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="<?= base_url('assets-front/css/styles.css')?>" />

    <title>Fashion Store</title>
  </head>
  <body>

      <?php if (session()->getFlashdata('alert') == 'login_gagal'): ?>
      <script>alert('Login Gagal')</script>
      <?php elseif (session()->getFlashdata('alert') == 'tambah_user'): ?>
      <script>alert('Berhasil membuat akun.')</script>
      <?php elseif (session()->getFlashdata('alert') == 'belum_login'): ?>
      <script>alert('Silahkan login terlebih dahulu.')</script>
      <?php elseif (session()->getFlashdata('errors')): ?>
      <script>alert('Password tidak sama.')</script>
      <?php elseif (session()->getFlashdata('alert') == 'logout_sukses'): ?>
      <script>alert('Logout berhasil.')</script>
      <?php endif; ?>

    <!--=============== HEADER ===============-->
    <header class="header">

      <nav class="nav container">
        <a href="index.html" class="nav__logo">
          <img src="<?= base_url('assets/image/logo-3.png')?>" alt="" class="nav__logo-img">
        </a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item">
              <a href="<?= base_url('/')?>" class="nav__link ">Home</a>
            </li>
            <li class="nav__item">
              <a href="<?= base_url('shop')?>" class="nav__link">Shop</a>
            </li>
            <li class="nav__item">
              <a href="<?= base_url('settings')?>" class="nav__link">Settings</a>
            </li>
            <li class="nav__item">
              <a href="<?= base_url('login-register')?>" class="nav__link active-link">Login</a>
            </li>
          </ul>

          <div class="header__search">
            <input type="text" placeholder="Search for items" class="form__input">

            <button class="search__btn">
              <img src="<?= base_url('assets-front/img/search.png')?>" alt="image" />
            </button>
          </div>
        </div>

        <div class="header__user-actions">
          <a href="#" class="header__action-btn">
            <img src="<?= base_url('assets-front/img/icon-heart.svg')?>" alt="">
            <!-- <span class="count">3</span> -->
          </a>

          <a href="<?= base_url('login-register/checkout')?>" class="header__action-btn">
            <img src="<?= base_url('assets-front/img/icon-cart.svg')?>" alt="">
            <!-- <span class="count">3</span> -->
          </a>
        </div>
      </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
      <!--=============== BREADCRUMB ===============-->
      <section class="breadcrumb">
        <ul class="breadcrumb__list flex container">
          <li><a href="index.html" class="breadcrumb__link">Home</a></li>
          <li><span class="breadcrumb__link">></span></li>
          <li><span class="breadcrumb__link">Login / Register</span></li>
        </ul>
      </section>


      <!--=============== LOGIN-REGISTER ===============-->
      <section class="login-register section--lg">
        <div class="login-register__container container grid">
          <div class="login">
            <div class="section__title">Login</div>

            <form action="<?= base_url('login-register/login')?>" method="post" class="form grid">
              <input type="email" placeholder="Your Email" name="email" class="form__input">
              <input type="password" placeholder="Your Password" name="password" class="form__input">

              <div class="form__btn">
                <button class="btn">Login</button>
              </div>
            </form>
          </div>

          <div class="register">
            <div class="section__title">Create an Account</div>

            <form action="<?= base_url('login-register/register')?>" method="post" class="form grid">
              <input type="text" placeholder="Username" name="username" class="form__input">
              <input type="email" placeholder="Your Email" name="email" class="form__input">
              <input type="password" placeholder="Your Password" name="password" class="form__input">
              <input type="password" placeholder="Confirm Password" name="confirm_password" class="form__input">

              <div class="form__btn">
                <button type="submit" class="btn">Submit & Register</button>
              </div>
            </form>
          </div>
        </div>
      </section>

      <!--=============== NEWSLETTER ===============-->
      <section class="newsletter section">
        <div class="newsletter__container container grid">
          <h3 class="newsletter__title flex">
            <img src="<?= base_url('assets/img/icon-email.svg')?>" alt="" class="newsletter__icon">
            Sign up to Newsletter
          </h3>

          <p class="newsletter__description">...and receive 25% voucher for first shopping.</p>

          <form action="" class="newsletter__form">
            <input type="text" placeholder="Enter your email" class="newsletter__input">
            <button type="submit" class="newsletter__btn">Subscribe</button>
          </form>
        </div>
      </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer container">
      <div class="footer__container grid">
        <div class="footer__content">
          <a href="index.html" class="footer__logo">
            <img src="<?= base_url('assets/image/logo-3.png')?>" alt="" class="footer__logo-img">
          </a>

          <h4 class="footer__subtitle">Contact</h4>

          <p class="footer__description"><span>Address:</span> Banjar - Jawa Barat</p>
          <p class="footer__description"><span>Phone:</span> 62+ 82317330549</p>
          <p class="footer__description"><span>Hours:</span> 10:00 - 18:00, Sennin - Sabtu</p>

          <div class="footer__social">
            <h4 class="footer__subtitle">Follow Me</h4>

            <div class="footer__social-links flex">
              <a href="" class="">
                <img src="<?= base_url('assets/img/icon-facebook.svg')?>" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="<?= base_url('assets/img/icon-twitter.svg')?>" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="<?= base_url('assets/img/icon-instagram.svg')?>" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="<?= base_url('assets/img/icon-pinterest.svg')?>" alt="" class="footer__social-icon">
              </a>
              <a href="" class="">
                <img src="<?= base_url('assets/img/icon-youtube.svg')?>" alt="" class="footer__social-icon">
              </a>
            </div>
          </div>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Address</h3>

          <ul class="footer__links">
            <li><a href="" class="footer__link">About Us</a></li>
            <li><a href="" class="footer__link">Delivery Information</a></li>
            <li><a href="" class="footer__link">Privacy Policy</a></li>
            <li><a href="" class="footer__link">Terms & Conditions</a></li>
            <li><a href="" class="footer__link">Contact Us</a></li>
            <li><a href="" class="footer__link">Support Center</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">My Account</h3>

          <ul class="footer__links">
            <li><a href="" class="footer__link">Sign In</a></li>
            <li><a href="" class="footer__link">View Cart</a></li>
            <li><a href="" class="footer__link">My Wishlist</a></li>
            <li><a href="" class="footer__link">Track My Order</a></li>
            <li><a href="" class="footer__link">Help</a></li>
            <li><a href="" class="footer__link">Order</a></li>
          </ul>
        </div>

        <div class="footer__content">
          <h3 class="footer__title">Secured Payment Gateways</h3>

          <img src="<?= base_url('assets/img/payment-method.png')?>" alt="">
          <div class="payment__img">
            <img src="<?= base_url('assets/image/payment-mandiri.png')?>" alt="">
            <img src="<?= base_url('assets/image/payment-bca.png')?>" alt="">
            <img src="<?= base_url('assets/image/payment-bni.png')?>" alt="">
            <img src="<?= base_url('assets/image/payment-bri.png')?>" alt="">
          </div>
        </div>
      </div>

      <div class="footer__bottom">
        <p class="copyright">&copy; 2023 Gani. All Rights Reserved</p>
        <span class="designer">Designed by Gani Maulana</span>
      </div>
    </footer>

    <!--=============== SWIPER JS ===============-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="<?= base_url('assets/js/main.js')?>"></script>
  </body>
</html>
