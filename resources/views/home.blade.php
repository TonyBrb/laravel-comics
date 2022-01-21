<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>Laravel Comics</title>
</head>
<body>
  <header>
    <div class="container">
    <div class="logo">
      <img src="{{ asset('img/dc-logo-bg.png') }}" alt="logo DC">
    </div>
    <div class="menu">
      <ul>
        <li>
          <a href="#">CHARACTERS</a>
        </li>
        <li>
          <a href="#">COMICS</a>
        </li>
        <li>
          <a href="#">MOVIES</a>
        </li>
        <li>
          <a href="#">TV</a>
        </li>
        <li>
          <a href="#">GAMES</a>
        </li>
        <li>
          <a href="#">COLLECTIBLES</a>
        </li>
        <li>
          <a href="#">VIDEOS</a>
        </li>
        <li>
          <a href="#">FANS</a>
        </li>
        <li>
          <a href="#">NEWS</a>
        </li>
        <li>
          <a href="#">SHOP</a>
        </li>
      </ul>
    </div>
  </div>
  </header>

  <main>
    <div class="main-container">
    <div class="jumbotron">
      <img src="{{ asset('img/jumbotron.jpg') }}" alt="">
    </div>

    <div class="current-series">
        CURRENT SERIES
      </div>

    <div class="container boxes">
      
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/AC1000_DLX_162-001_HD_5ba13723281ab0.37845353.jpg?itok=ZsI-C5eX" alt="">
        <h6>ACTION COMICS</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/AV1976_01_300-001_HD_5f738f6e39ddd7.18205602.jpg?itok=VgdYdJ01" alt="">
        <h6>AMERICAN VAMPIRE 1976</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2018/08/AQMv4_UW_153-001_HD_5b7efa1745a9b8.08589135.jpg?itok=HPTtnrsb" alt="">
        <h6>AQUAMAN</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/06/batgirl_v5_1_5b23e1f1124941.50950783.jpg?itok=VnrJah76" alt="">
        <h6>BATGIRL</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="">
        <h6>BATMAN</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2018/09/BM_56_300-001_HD_5ba137a85c3bf3.33122291.jpg?itok=3FHJQYJZ" alt="">
        <h6>BATMAN BEYOND</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2019/08/BMSM_5d4361b7116261.74371456.jpg?itok=kEDR2OL8" alt="">
        <h6>BATMAN/SUPERMAN</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMSMANN_01_300-001_HD_5f5ff17fa1d665.74704970.jpg?itok=azz5sfGk" alt="">
        <h6>BATMAN/SUPERMAN ANNUAL</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/09/BMTJWZ_01_300-001_HD_5f5ff2307dcb37.34652945.jpg?itok=VswVjLR8" alt="">
        <h6>BATMAN: THE JOKER WAR ZONE</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/08/cover-v2_5f40314645a734.37285065.png?itok=ImNM2QBY" alt="">
        <h6>BATMAN: THREE JOKERS</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/comic-covers/2020/10/BMWK_HQ_01_300-001_HD_5f7cb4945e13f6.89501032.jpg?itok=sVwALbUX" alt="">
        <h6>BATMAN: WHITE KNIGHT PRESENTS: HARLEY QUINN</h6>
      </div>
      <div class="productCard">
        {{-- <img :src="cardImage" :alt="cardTitle">
        <h6>{{cardTitle}}</h6> --}}
        <img src="https://www.dccomics.com/sites/default/files/styles/covers192x291/public/gn-covers/2019/04/CTWv1_CC_144-001_HD_5ca5299a751963.53054221.jpg?itok=ooPaoLDq" alt="">
        <h6>CATWOMAN</h6>
      </div>

      <button class="btn">
        LOAD MORE
      </button>
    </div>
  </div>
  </main>

  <section class="bf-container">
    <div class="container">
      <div class="bf-box">
        <div class="bf-img">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
        </div>
        <span>DIGITAL COMICS</span>
      </div>
      <div class="bf-box">
        <div class="bf-img">
          <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
        </div>
        <span>DC MERCHANDISE</span>
      </div>
      <div class="bf-box">
        <div class="bf-img">
          <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
        </div>
        <span>SUBSCRIPTION</span>
      </div>
      <div class="bf-box">
        <div class="bf-img">
          <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
        </div>
        <span>COMIC SHOP LOCATOR</span>
      </div>
      <div class="bf-box">
        <div class="bf-img">
          <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">
        </div>
        <span>DC POWER VISA</span>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-container-up">
    <div class="container">
      <div class="left-block">
        <div class="left-links">
          <h4>DC COMICS</h4>
          <ul>
            <li><a href="#">Characters</a></li>
            <li><a href="#">Comics</a></li>
            <li><a href="#">Movies</a></li>
            <li><a href="#">Tv</a></li>
            <li><a href="#">Games</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">News</a></li>
          </ul>
          <h4>SHOP</h4>
          <ul>
            <li><a href="#">Shop DC</a></li>
            <li><a href="#">Shop DC Collectibles</a></li>
          </ul>
        </div>

          <div class="centre-links">
          <h4>DC</h4>
          <ul>
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Privacy policy (new)</a></li>
            <li><a href="#">Ad Choices</a></li>
            <li><a href="#">Adversiting</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Subscriptions</a></li>
            <li><a href="#">Talent Workshops</a></li>
            <li><a href="#">CPSC Certificates</a></li>
            <li><a href="#">Rating</a></li>
            <li><a href="#">Shop Help</a></li>
            <li><a href="#">Concact Us</a></li>
          </ul>
        </div>

          <div class="right-links">
          <h4>SITES</h4>
          <ul>
            <li><a href="#">DC</a></li>
            <li><a href="#">MAD Magazine</a></li>
            <li><a href="#">DC Kids</a></li>
            <li><a href="#">DC Universe</a></li>
            <li><a href="#">DC Power Visa</a></li>
          </ul>
        </div>
      </div>
      <div class="right-block">
        <img src="{{asset('img/dc-logo-bg.png')}}" alt="">
      </div>
    </div>
    <div class="footer-container-down">
      <div class="container">
        <button class="btn">SIGN-UP NOW!</button>
        <div class="right-container-down">
          <h4>FOLLOW US</h4>
          <div class="social">
            <img src="{{asset('img/footer-facebook.png')}}" alt="">
          </div>
          <div class="social">
            <img src="{{asset('img/footer-twitter.png')}}" alt="">
          </div>
          <div class="social">
            <img src="{{asset('img/footer-youtube.png')}}" alt="">
          </div>
          <div class="social">
            <img src="{{asset('img/footer-pinterest.png')}}" alt="">
          </div>
          <div class="social">
            <img src="{{asset('img/footer-periscope.png')}}" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
  </footer>
</body>
</html>