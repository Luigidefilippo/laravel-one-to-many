@extends('layouts.admin')

@section('content')

@include('partials.session_message')
<h1>Progetti </h1>
<div class="d-flex flex-row">
    <a href="{{route('admin.projects.create')}}" class="btn btn-success  ">Crea</a>
    <a class="btn btn-primary " href="{{ route('admin.dashboard') }}">Torna Indietro</a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Identificativo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                <th scope="row">{{ $project->id }}</th>
                <td>{{ $project->title }}</td>
                <td>{{ $project->slug }}</td>
                <td>
                    <div class="container d-flex flex-row  ">
                        <a href="{{route('admin.projects.show', $project->slug)}}" class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                 <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                     <form action="{{route('admin.projects.destroy', $project->slug)}}" method="POST">
                         @csrf
                             @method('DELETE')
                         <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </form>
                    </div>
             
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection