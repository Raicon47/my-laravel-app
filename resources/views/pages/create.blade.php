@extends('layouts.app')

@section('title')
{{config('app.name', 'Tripcard')}} | {{__('Create Post')}}
@endsection

@section('home-main')

<div class="container text-center">
    <h1 class="text-center font-weight-bold">Create Post</h1>

    {!! Form::open(['action' => 'PagesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                 @csrf
            <div class="mb-3">
                {{Form::label('title', 'Title', ['class' => 'form-label'])}}
                {{Form::text('title', '', ['class' => 'form-control'])}}
            </div>

            <div class="mb-3">
                {{Form::label('body', 'Body', ['class' => 'form-label'])}}
                {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control'])}}
            </div>
{{-- 
            <div class="mb-3">
                {{Form::label('cover_image', 'Choose Image', ['class' => 'form-label'])}}
                {{Form::file('cover_image')}}
            </div> --}}

            <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Please read and edit your card thoroughly before publishing <i class="fas fa-smile text-dark"></i>
            </div>

            {{Form::submit('Publish Card', ['class' => 'btn btn-success'])}}

{!! Form::close() !!}
     
</div>

@endsection