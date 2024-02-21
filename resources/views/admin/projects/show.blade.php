@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h1 class="fw-bold text-capitalize">{{ $project->title }}</h1>  
        </div>
        <div class="col-12 mt-5">
            <p>{{ $project->description }}</p>
            <p>{{ $project->slug }}</p>
        </div>
        <div class="col-12 text-center">
            <a href="/admin/projects" > <button class="btn btn-success ms-5">Torna indietro</button></a>
        </div>
    </div>
</div>
@endsection
