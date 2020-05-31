  @extends('base')

  @section('content')
        <h1 class="section_title">{{$category[0]->title}}</h1>

        <div class="activitise_list">

            @foreach ($posts as $post)
            <?php $url='post/'.$post->id ?>
            <a href="{{$url}}" class="activity_item">
                <img src="{{$post->image}}" alt="" class="activity_item__img">
                <div class="activity_item__descriptin">
                    <h3 class="actictivity_item__title">
                        {{$post->title}}
                    </h3>
                    <p class="activity_item__text">
                        Заявку подал: {{$post->user_name}} <br>
                        Место проведения: {{$post->region}} <br>
                        Дата работы: {{$post->date}}<br>
                        Вид требуемой помощи: {{$post->kind_help}}
                    </p>
                </div>
            </a>

            @endforeach
        </div>


  @endsection



  