@extends('base')

@section('content')


      <h1 class="section_title">{{$category[0]->title}}</h1>
        
        <div  class="activity_item">
                <img src="{{$post[0]->image}}" alt="" class="activity_item__img">
                <div class="activity_item__descriptin">
                    <h3 class="actictivity_item__title">
                        {{$post[0]->title}}
                    </h3>
                    <p class="activity_item__text">
                        Заявку подал: {{$post[0]->user_name}} <br>
                        Место проведения: {{$post[0]->region}} <br>
                        Дата работы: {{$post[0]->date}} <br>
                        Вид требуемой помощи: {{$post[0]->kind_help}} <br>
                    </p>
                </div>
        </div>  
 

        <p class="activity_description">
            ОПИСАНИЕ: <br>
            {{$post[0]->description}}
        </p>


        <a href="#" class="activity_button ">Откликнуться на заявку</a>

@endsection