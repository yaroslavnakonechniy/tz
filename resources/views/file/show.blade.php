@extends('layouts.main')

@section('content')
<h1> File </h1> 

<div >

        <img src="{{ Storage::disk('')->url($file->path) }}" />
        <p>Description{{ $file->description }}</p>
        <a href="{{route( 'file.download',$file->id )}}"><button >download</button></a>
        <a href="{{route( 'file.destroy', $file->id )}}"><button >delete</button></a>
        <a href="{{route( 'file.edit', $file->id )}}"><button >edit</button></a>
    
</div>

@endsection
