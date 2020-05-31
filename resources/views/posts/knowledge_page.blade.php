@extends('base')

@section('content')


    <h1 class="section_title">База зананий</h1>

    <div class="img_container">
        <img class="knowledge_img" src="{{$post->image}}" alt="">
    </div>

    <h2 class="knowledge_title">{{$post->title}}</h2>

    <p class="knowledge_description">
        {{$post->description}}
    </p>
    
    
       

@endsection