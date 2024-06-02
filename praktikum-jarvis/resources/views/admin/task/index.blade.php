@extends('admin.partials.app')

@section('content')
<div class="content-wrapper">
    
    <div class="container">
        <h1 class="text-center">Daftar Tugas</h1>
        <hr>
    
        <div class="row">
           @foreach ($tasks as $task)
           <div class="col-12 col-md-4">
            <div class="card mt-2">
                <div class="card-body">
                    <h4 class="card-title">{{ $task['name'] }}</h4><br>
                    <small>Deadline : {{ $task['deadline'] }}</small><br>
                    <span class="badge bg-warning">{{ $task['status'] }}</span>
                    <p class="card-text">{{ $task['description'] }}</p>
    
                    <div class="mt-2">
                        <a href="{{ route('task.show', $task['id']) }}" class="btn btn-primary">Detail</a>
                        <a href="#" class="btn btn-warning">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </div>
                </div>
            </div>
           </div>
           @endforeach
        </div>
    </div>
</div>
@endsection
