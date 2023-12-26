@extends('layouts.main')

@section('content')
<h1> File </h1> 
<a href="{{route('file.create')}}"><button type="button" class="btn btn-success">Create new File</button></a>

@include('layouts.error-message')


    @foreach($files as $file)
        <a href="{{route('file.show', $file->id)}}">
            <div class="alert alert-info">

                <img src="{{ Storage::disk('')->url($file->path) }}" />
            
            </div>
        </a>
    @endforeach

@endsection
