@extends('base')

@section('content')

  
<div class="container">
    <div class="wrapper">
        <div class="account">
            <div class="account_photo">
                <p>Фото</p>
            </div>
            <div class="account_description">
                <h2 class="account_name">{{$user->name}}</h2>
                <div class="account_parametr _age">Дата рождения: {{$user->birdth_date}}</div>
                <div class="account_parametr _phone">Номер телефона: {{$user->phone}}</div>
                <div class="account_parametr _address">Город проживания: {{$user->city}}</div>
            </div>
        </div>
        <a href="/add_activity/" class="button account_button">Создать мероприятия для волонетров</a>
        <a href="/activities/" class="account_href">Посмотреть, кому Вы можете предложить свою помощь</a>
    </div>
  </div>
  

@endsection