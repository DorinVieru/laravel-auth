@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <h1 class="fw-bold text-capitalize">{{ $project->title }}</h1>
            <p class="fs-6">{{ $project->slug }}</p>  
        </div>
        <div class="col-12 mt-5">
            <p>{{ $project->description }}</p>
        </div>
        <div class="d-flex mt-2 mb-5">
            {{-- EDIT BUTTON --}}
            <a href="{{ route('admin.projects.edit', ['project' => $project['id']]) }}">
                <button type="button" class="btn btn-warning me-3"><i class="fas fa-edit"></i> Modifica il progetto</button>
            </a>
            {{-- DELETE BUTTON --}}
            {{-- <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST" onsubmit="return confirm('Sei sicuro di voler cancellare {{ $project->title }}?')">
            @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i> Cancella il progetto</button>
            </form> --}}

            {{-- MODALE --}}
            <button class="btn btn-sm square btn-danger" data-bs-toggle="modal" data-bs-target="#modal_project_delete-{{ $project->id }}"><i class="fas fa-trash"></i> Cancella il progetto</button> 
        </div>
        <div class="col-12 text-center mt-5">
            <a href="/admin/projects" > <button class="btn btn-success ms-5">Torna indietro</button></a>
        </div>
    </div>
</div>
{{-- POP-UP MODALE --}}
@include('admin.projects.modal_delete')
@endsection
