<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Movie4mm</title>
  <link rel="icon" type="image/x-icon" href="./asstes/App Icon.png" sizes="16x16" />
  <link rel="stylesheet" href="./Style/stylereset.css" />
  <!-- Bootstrap Link -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+Myanmar:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./Style/interface-slider/owl.carousel.min.css">
  <link rel="stylesheet" href="./Style/interface-slider/slider.css">
  <!-- Custom Css -->
  <link rel="stylesheet" href="./Style/header.css" />
  <link rel="stylesheet" href="./Style/footer.css" />
  <link rel="stylesheet" href="./Style/index.css" />
  <link rel="stylesheet" href="./Style/scrolltopbutton.css" />
  <link rel="stylesheet" href="./Style/stars.css">
  <link rel="stylesheet" href="./Style/scrollanimated.css">
</head>

<div>
  <header class="bg-light shadow-md">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="./">
              <img id="movie4mm-Logo" src="./asstes/Movie 4 mm logo Black(126x36)-01.png" alt="Linn Logo" />
            </a>
            <!-- Reponsive Button Toggle -->
            <button class="navbar-toggler d-flex d-lg-none flex-column justify-content-around collapsed" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="toggler-icon top-bar"></span>
              <span class="toggler-icon middle-bar"></span>
              <span class="toggler-icon button-bar"></span>
            </button>
            <!-- Button End -->

            <!-- link Collection start -->
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navCollection navbar-nav ms-auto">
                <li class="nav-item">
                  <a class="nav-link link" href="#home">HOME</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link" href="#feature">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link link" href="#Vip">Vip</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link link dropdown-toggle" data-bs-toggle="dropdown" href="#download" role="button"
                    aria-expanded="false">Download</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#Phdownload">For Android</a></li>
                    <li><a class="dropdown-item" href="#TVdownload">For TV</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link link" href="./contact.html">Contact</a>
                </li>
              </ul>
            </div>
            <!-- link Collection end -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- End -->
  <section class="section1" id="home">
    <div class="container-fluid py-4">
      <div class="container">
        <div class="row">
          <div
            class="mainContent col-md-5 col-12 ps-md-5 py-md-5 pt-5 d-flex justify-content-center align-items-md-start align-items-center flex-column">
            <div class="Mainlogo my-4">
              <img src="./asstes/Movie4mmG.png" alt="M vie4mm" class="logoText" />
              <img src="./asstes/Movie 4mm(movie Icon).png" alt="o" class="MovieIcon" />
            </div>
            <div class="mainText pe-xl-5 pe-lg-4 my-2">
              <p>
                <i>Movies</i> နဲ့
                <i>Series</i> တွေကိုတစ်နေရာထဲမှာစုံစုံလင်လင်နဲ့
                တိုက်ရိုက်ကြည့်ရှု့ဖို့ <i>Movie4mm app</i> ကို
                <b>Download</b> ရယူလိုက်ပါ...
              </p>
              <a class="mt-4 mx-md-0 mx-auto Btun" href="#Phdownload"><i class="fa-solid fa-download"></i>Download</a>
            </div>
          </div>
          <div class="mainBanner col-md-7 col-12 py-5">
            <div class="imgContainer">
              <img src="./asstes/devices-home-mobile1.png" alt="Inerface" class="bannerImg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section2 py-3" id="feature">
    <div class="container py-5 px-2">
      <div class="feature--Header Section__Header text-center">
        <h1>FEATURE</h1>
        <p class="fs-2">ဘာ Feature တွေပါဝင်သလဲ ?</p>
      </div>
      <div class="cardContainer py-md-1">
        <div class="row m-2 justify-content-center">
          <div class="col-lg-4 col-md-6 col-12 py-3">
            <div class="card h-100 d-flex align-items-center p-md-2 p-2 cardHover shadow-md">
              <div class="icon px-lg-4 py-2 text-center fs-2">
                <i class="fa-solid fa-eye"></i>
              </div>
              <div class="cardContent text-center p-2 pb-4">
                <h5 class="card-title p-2 pt-0">Watch Stream</h5>
                <p class="card-text fs-6">
                  Moviesတွေ Seriesတွေကို Streamတိုက်ရိုက်ကြည့်ရှု့နိုင်ခြင်း
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 py-3">
            <div class="card h-100 d-flex align-items-center p-md-2 p-2 cardHover shadow-md">
              <div class="icon px-lg-4 py-2 text-center fs-2">
                <i class="fa-solid fa-download"></i>
              </div>
              <div class="cardContent text-center p-2 pb-4">
                <h5 class="card-title p-2 pt-0">Easy Download</h5>
                <p class="card-text fs-6">
                  အလွယ်တကူ One Click Download ရယူနိုင်ခြင်း
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 py-3">
            <div class="card h-100 d-flex align-items-center p-md-2 p-2 cardHover shadow-md">
              <div class="icon px-lg-4 py-2 text-center fs-2">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
              <div class="cardContent text-center p-2 pb-4">
                <h5 class="card-title p-2 pt-0">Easy Search</h5>
                <p class="card-text fs-6">
                  အလွယ်တကူရှာဖွေနိုင်ပြီး မိမိနှစ်သက်ရာကို
                  ရွေးချယ်ကြည့်ရှု့နိုင်ခြင်း
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 py-3">
            <div class="card h-100 d-flex align-items-center p-md-2 p-2 cardHover shadow-md">
              <div class="icon px-lg-4 py-2 text-center fs-2">
                <i class="fa-solid fa-file-video"></i>
              </div>
              <div class="cardContent text-center p-2 pb-4">
                <h5 class="card-title p-2 pt-0">Movie Request</h5>
                <p class="card-text fs-6">
                  မိမိနှစ်သက်ရာ Movies နဲ့ Seriesများကို Requestနိုင်ခြင်း
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 py-3">
            <div class="card h-100 d-flex align-items-center p-md-2 p-2 cardHover shadow-md">
              <div class="icon px-lg-4 py-2 text-center fs-2">
                <i class="fa-solid fa-flag"></i>
              </div>
              <div class="cardContent text-center p-2 pb-4">
                <h5 class="card-title p-2 pt-0">Report Movie</h5>
                <p class="card-text fs-6">
                  Movies Errorများကို Report လုပ်နိုင်ခြင်း
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 col-12 py-3">
            <div class="card h-100 d-flex align-items-center p-md-2 p-2 cardHover shadow-md">
              <div class="icon px-lg-4 py-2 text-center fs-2">
                <i class="fa-solid fa-circle-play"></i>
              </div>
              <div class="cardContent text-center p-2 pb-4">
                <h5 class="card-title p-2 pt-0">Video Player</h5>
                <p class="card-text fs-6">
                  Movie Player များရွေးချယ်၍ကြည့်ရှု့နိုင်ခြင်း
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section3 d-flex justify-content-center align-items-center" id="Vip">
    <div class="container py-5">
      <div class="Section__Header d-flex align-items-center flex-column">
        <h1 class="py-5 fs-1">Vip Plan</h1>
        <h2 class="fs-1">Coming Soon</h2>
      </div>
    </div>
  </section>
    <section class="section4 py-3" id="Phdownload">
      <div class="container-fluid  pt-5 pb-3">
        <div class="feature--Header Section__Header text-center">
          <h1 class="fs-1">Download</h1>
          <p class="fs-3 m-0">App Download ရယူရန် ...</p>
        </div>
        <div class="container PhoneDownl px-5 px-md-0">
          <div class="row py-3 px-md-5 flex-column-reverse flex-lg-row justify-content-lg-center align-items-lg-center">
            <div class="content col-lg-8 col-12 p-md-5">
              <h3 class="fs-4 d-inline-block py-2">
                Android Phone , Android Tablet များအတွက် Download ရယူရန်
              </h3>
              <p class="fs-6 d-inline-block pe-md-5">
                Android ဖုန်းများအတွက် Stream တိုက်ရိုက်ကြည့်ရှု့နိုင်ပြီး
                အလွယ်တကူ One Click Downloadရယူနိုင်သော Android App ဖြစ်ပါသည်။
              </p>
              <a class="mt-3 Btun" href="./apkFile/android (3).apk"><i
                  class="fa-solid fa-mobile-screen"></i>Download</a>
            </div>
            <div class=" col-lg-4 col-12 px-lg-5">
              <div class="d-flex justify-content-center">
                <div class="slider owl-carousel slider_carousel text-center Phonebanner">
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/Home.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/Moviepage.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/Live.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/Series.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/MenuSlider.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/Gern.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/myAccount1.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/Setting.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/ChoisePlayer.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface/MovieRequest.png">
                  </div>
                  <div class="card_box">
                    <img class="img-fluid w-100" src="./asstes/phone_interface//ReportMovie.png">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section5" id="TVdownload">
      <!-- For TV -->
      <div class="container TVDownl py-5 px-5 px-md-0" id="TVSection">
        <div class="row py-lg-5 pt-5 mt-5 px-md-5 justify-content-lg-center align-items-lg-center">
          <div class="col-lg-7 col-12 px-lg-5">
            <div class="d-flex justify-content-center">
              <div class="slider owl-carousel slider_carousel text-center TVbanner">
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface/logoInterface.png">
                </div>
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface/Sci-fi.png">
                </div>
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface/Channel Interface.png">
                </div>
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface/movie.png">
                </div>
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface/Series.png">
                </div>
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface//Series1.png">
                </div>
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface/Slidebar.png">
                </div>
                <div class="card_box">
                  <img class="img-fluid w-100" src="./asstes/tv_interface/MyAcc.png">
                </div>
              </div>
            </div>
          </div>
          <div class="content col-lg-5 col-12 p-md-5">
            <h3 class="fs-4 d-inline-block py-2">
              Android TV , Android Box များအတွက် Download ရယူရန်
            </h3>
            <p class="fs-6 d-inline-block pe-md-5">
              Android TV,Android Box များအတွက် ရည်ရွယ်ထားသော Android App ဖြစ်ပါသည်။
            </p>
            <a class="mt-3 Btun" href="./apkFile/movie4mm-tv-1.2.2-linn-app-store.apk">
              <i class="fa-solid fa-tv"></i>Download
            </a>
          </div>
        </div>
      </div>
    </section>
  <section class="section6 py-5" id="contact">
    <div class="container-fluid py-4">
      <div class="container">
        <div class="row">
          <div
            class="mainContent col-md-5 col-12 ps-md-5 py-md-5 pt-5 d-flex justify-content-center align-items-md-start align-items-center flex-column">
            <div class="feature--Header Section__Header text-center">
              <h1 class="fs-1">Contact Us</h1>
            </div>
            <div class="mainText my-2">
              <p>
                <i>Movies4mm</i> Account ကိုရယူရန်
                <a href="tel:09403449900"><b>09-403449900</b></a> ကိုဆက်သွယ်စုံစမ်းနိုင်ပါသည်။
              </p>
              <a class="mt-4 mx-md-0 mx-auto Btun" href="tel:09403449900"><i class="fa-solid fa-phone"></i></i>Call Now</a>
            </div>
          </div>
          <div class="mainBanner col-md-7 col-12 py-5">
            <div class="imgContainer">
              <img src="./asstes/ContactVactorArt.png" alt="Inerface" class="bannerImg" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer>
    <div class="container-fluid footerContent text-white p-4 pt-sm-5 justify-content-center d-flex">
      <div id="stars"></div>
      <div class="row pageMargin container">
        <!-- first Coloum -->
        <div class="contentColoum logoContainer col-lg-5 col-sm-12 py-5 py-md-2">
          <div class="logo">
            <img src="./asstes/Movie 4 mm logo White (126x36).png" alt="" />
          </div>
        </div>

        <!-- Second Coloum -->
        <div class="contentColoum col-lg-3 col-6">
          <h6>Usefull Links</h6>
          <hr class="headerOutline" />
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#feature">Feature</a></li>
            <li><a href="#Vip">Vip</a></li>
            <li><a href="#Phdownload">Download</a></li>
            <!-- <li><a href="#interface">Interface</a></li> -->
          </ul>
        </div>
        <!-- Third Coloum -->
        <div class="contentColoum branches col-lg-4 col-6">
          <h6>Function</h6>
          <hr class="headerOutline" />
          <ul>
            <li><a href="#feature">Watch Stream</a></li>
            <li><a href="#feature">Easy Download</a></li>
            <li><a href="#feature">Easy Search</a></li>
            <li><a href="#feature">Movie Request</a></li>
            <li><a href="#feature">Movie Report</a></li>
          </ul>
        </div>
        <!-- coloum End -->
      </div>
    </div>
    <div class="container-fluid Copyright">
      <div class="d-flex justify-content-center container py-3">
        <a href="#" class="fs-6">
          Copyright &copy; <?= date('Y') ?>, Movie4MM All Rights Reserved.
        </a>
      </div>
    </div>
  </footer>
  <button id="scrollTop" onclick="scrolltoTop()">
    <i class="fa-solid fa-arrow-up"></i>
  </button>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
  <script src="./js/index.js"></script>
  <script src="./js/scrolltopcomponent.js"></script>
  <script src="./js/Interface-slider/jquery-3.4.1.min.js"></script>
  <script src="./js/Interface-slider/owl.carousel.min.js"></script>
  <script src="./js/Interface-slider/Slider.js"></script>
  </body>

</html>