@extends('layouts.main')

@section('content')
<h1> File </h1> 

@include('layouts.error-message')

<form action="{{route('file.update', $file->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" name="description"  value="{{$file->description}}"  placeholder="input description">
        
        <label for="file">Title</label>
        <img src="{{ Storage::disk('')->url($file->path) }}" />
        <input type="file" class="form-control" id="path" name="path" value="{{Storage::disk('public')->url($file->path)}}" placeholder="Choose file">
  
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection