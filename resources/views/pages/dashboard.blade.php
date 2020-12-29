@extends('layouts.app')

@section('title')
{{config('app.name', 'Tripcard')}} | {{__('Dashboard')}}
@endsection

@section('content')

  <div class="alert alert-warning alert-dismissible fade show" role="alert">
    <div class="container text-center">
     <strong>Hello {{ Auth::user()->email }} <i class="far fa-smile"></i></strong> Welcome to your Dashboard.
    </div>
  </div>

@endsection

@section('about_aside')
<ul class="nav">
  <li class="nav-item">
    <a class="nav-link btn btn-dark ms-1" href="{{url('/')}}">Home</a>
  </li>
    <li class="nav-item">
      <a class="nav-link btn btn-warning ms-1" href="{{url('cards')}}">Cards</a>
    </li>
  </ul>

  <ul class="list-group mt-3">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <span>
        <a href="#0" class="text-primary"><i class="fab fa-twitter"></i> Tweets</a>
    </span>
      <span class="badge bg-primary rounded-pill">89</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center"> 
      <span>
        <a href="#0" class="text-primary"><i class="fab fa-facebook"></i> Shares</a>
    </span>
      <span class="badge bg-primary rounded-pill">546</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      <span>
        <a href="#0" class="text-danger"><i class="fab fa-youtube"></i> Views</a>
    </span>
      <span class="badge bg-primary rounded-pill">1867</span>
    </li>
  </ul>
@endsection

@section('about_main')
    <div class="container mt-2 mb-4">

      @if(count($posts) > 0)
      <table class="table table-hover">
       <div class="container text-center mb-2">
        <a href="{{url('/create')}}" class="btn btn btn-dark">Create Card</a>
       </div>
       <hr>
          <tr>
              <th>P/N</th>
              <th>{{ __('Posts')}}</th>
              <th></th>
          </tr>
         @foreach($posts as $post)
          <tr>
              <td>{{$post->id}}</td>                           
              <td><a class="link-warning" href="show/{{$post->id}}">{{$post->title}} </a></td>                          
               <td>
                {!!Form::open(['action' => ['PagesController@destroy', $post->id], 'method' => 'POST'])!!}
                @csrf
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
                {!!Form::close()!!}
               </td>
          </tr>
         @endforeach

         @else 
         <div class=" shadow bg-white rounded p-4">
          <h3 class="text-danger">{{__('Write Amazing Cards')}}</h3>
         <p>
           {{__('
          For every moment we laugh, learn something new, eat something delicious or see a memorable site,
           if not grabbed, we will never appreciate the inpact of each fleeting moment in our lives.
            ')}} -
            <small class="text-secondary"><i>Nwaerema Cyprian Jacob</i></small>
         </p>
         
         <a href="{{url('/create')}}" class="btn btn-warning btn-lg mt-1">Create Card</a>
         <a href="https://flutterwave.com/pay/9fdvkblcyea0" target="_blank" class="btn btn-lg btn-danger mt-1">DONATE HERE</a> 
     </div>
      </table>
       @endif

    </div>
@endsection