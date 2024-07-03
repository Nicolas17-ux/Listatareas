{{-- resources/views/tasks/show.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detalles de Tarea</div>

                    <div class="card-body">
                        <p><strong>Título:</strong> {{ $task->title }}</p>
                        <p><strong>Descripción:</strong> {{ $task->description }}</p>
                        <p><strong>Fecha de Vencimiento:</strong> {{ $task->due_date }}</p>
                        <p><strong>Prioridad:</strong> {{ $task->priority }}</p>
                        <p><strong>Estado:</strong> {{ $task->status }}</p>
                        <p><strong>Progreso (%):</strong> {{ $task->progress }}</p>

                        <a href="{{ route('tasks.index') }}" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
