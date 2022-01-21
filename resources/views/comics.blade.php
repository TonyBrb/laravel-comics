@extends('layout.main')

@section('content')
<main>
    <ul>
      <li>fumetto 1</li>
      <li>fumetto 2</li>
      <li>fumetto 3</li>
      <li>fumetto 4</li>
      <li>fumetto 5</li>
    </ul>
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
@endsection