@extends('layouts.admin')

@section('content')
<h1>{{$project->title }}</h1>
<a class="btn btn-primary mt-4" href="{{ route('admin.projects.index') }}">Torna Indietro</a>
<div class="d-flex justify-content-between">
    @if ($project->type)
    <p class="text-center">{{ $project->type?->name }}</p>
    @else
    <p class="text-center">Non è impostata nessuna categoria</p>
    @endif

</div>
<p class="mt-4">{{$project->description}}</p>
    
@endsection


{{-- 42:33 --}}