@extends('layouts.main')

@section('content')
<h1> File </h1> 

@include('layouts.error-message')

<form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="description">description</label>
      <input type="text" class="form-control" id="description" name="description"  placeholder="input description">
      
      <label for="file">Img path</label>
      <input type="file" class="form-control" id="path" name="path"  placeholder="Choose file">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
