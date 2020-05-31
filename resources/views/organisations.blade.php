@extends('base')

@section('content')

<h1 class="section_title">организации</h1>

<div class="search_section">
      <form action="#" class="search" id="search_organoisation">
        <input type="text" name="search" class="search_field" placeholder="Введите город"> 
        <input type="submit" class="search_button" value="искать"> 
      </form>
</div>

<div class="search_results">

</div>

@endsection