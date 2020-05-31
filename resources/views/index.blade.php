@extends('base')

@section('content')
<div class="main_banner">
      <div class="banner_description">
        <h1 class="banner_title">
          Веб-портал волонтерской помощи 
        </h1>
        <p class="banner_text">портал добрых людей</p>
      </div>
      <img src="img/banner-img.png" alt="" class="banner_img">
    </div>

    <div class="requests_section">
      <div class="request _to-help">
        <h3 class="request_title">хочу помочь!</h3>
        <p class="request_text">Чтобы стать волонтером, заполните анкету, и после регистрации у Вас появится возможность приступать к волонтерская деятельности!</p>
        <a href="/registration" class="request_button">стать волонтером</a>
      </div>
      <div class="request _need-help">
        <h3 class="request_title">нужна помощь!</h3>
        <p class="request_text">Если Вы нуждаетесь в помощи, оставьте заявку на этом сайте. Кто-нибудь обязательно откликнется и поможет Вам!</p>
        <a href="/request" class="request_button">подать заявку</a>
      </div>
    </div>

    <h2 class="section_title">
      все меропрития в вашем регионе
    </h2>

    <div class="activity_section">
        

        @foreach ($categories as $category)
        <?php  $url = 'posts/' . $category->id  ?>
            <a href="{{ url($url) }}" class="activity">
                <img src="{{$category->image}}" alt="помощь пожилым" class="activity_img">
                <p class="activity_name">{{$category->title}}</p>
            </a>
        @endforeach
     
    </div>

    <div class="search_section">
      <form action="#" class="search">
        <input type="text" class="search_field" placeholder="Введите город"> 
        <input type="submit" class="search_button" value="искать"> 
      </form>
    </div>

    

    <h2 class="section_title">
      база знаний
    </h2>

    <div class="base_section">
      <div class="base_item base">
        <img src="img/base1.png" alt="" class="base_img">
        <p class="base_description">«Волонтерское движение в современном обществе».</p>
      </div>
      <div class="base_item base">
        <img src="img/base1.png" alt="" class="base_img">
        <p class="base_description">«Волонтерское движение в современном обществе».</p>
      </div>
      <div class="base_item base">
        <img src="img/base1.png" alt="" class="base_img">
        <p class="base_description">«Волонтерское движение в современном обществе».</p>
      </div>
      <div class="base_item base">
        <img src="img/base1.png" alt="" class="base_img">
        <p class="base_description">«Волонтерское движение в современном обществе».</p>
      </div>
    </div>
    @endsection