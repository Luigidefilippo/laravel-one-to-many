@extends('layouts.admin')

@section('content')
<h1>{{$project->title }}</h1>
<a class="btn btn-primary mt-4" href="{{ route('admin.dashboard') }}">Torna Indietro</a>
<div>
    <p class="text-end">{{$project->slug}}</p>
</div>
<p class="mt-4">{{$project->description}}</p>
    
@endsection