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
                <button type="button" class="btn btn-warning me-3">Modifica il progetto</button>
            </a>
        </div>
        <div class="col-12 text-center mt-5">
            <a href="/admin/projects" > <button class="btn btn-success ms-5">Torna indietro</button></a>
        </div>
    </div>
</div>
@endsection
