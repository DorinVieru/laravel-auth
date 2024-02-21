@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 d-flex justify-content-center align-items-center">
            <h1 class="fw-bold">I miei Progetti</h1>
            <a href="#" > <button class="btn btn-success ms-5">Aggiungi un nuovo progetto</button></a>
            
        </div>
        <div class="col-12 mt-5">
            <table class="table table-striped border">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Titolo</th>
                        <th>Descrizione</th>
                        <th>Slug</th>
                        <th>TOOLS</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td class="fw-bold">{{ $project->id }}</td>
                            <td class="text-capitalize">{{ $project->title }}</td>
                            <td>{{ Str::limit($project->description, 20, '...') }}</td>
                            <td>{{ $project->slug }}</td>
                            <td>
                                <a href="{{ route('admin.projects.show', ['project' => $project->id]) }}" class="btn btn-sm square btn-primary">Vai al Progetto</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
