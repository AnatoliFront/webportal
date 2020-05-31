@extends('base')

@section('content')

      <h1 class="section_title">База знаний</h1>

      <div class="activitise_list">

          @foreach ($posts as $post)
          <?php $url='knowledge/post/'.$post->id ?>

            <a href="{{$url}}" class="base_section">
                <div class="base_item base">
                    <img src="{{$post->image}}" alt="" class="base_img">
                    <p class="base_description">{{$post->title}}</p>
                </div>
            </a>

          @endforeach
      </div>


@endsection