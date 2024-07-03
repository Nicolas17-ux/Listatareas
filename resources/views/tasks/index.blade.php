{{-- resources/views/tasks/index.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lista de Tareas</div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Crear Nueva Tarea</a>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Título</th>
                                    <th>Descripción</th>
                                    <th>Fecha de Vencimiento</th>
                                    <th>Prioridad</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tasks as $task)
                                    <tr>
                                        <td>{{ $task->task_id }}</td>
                                        <td>{{ $task->title }}</td>
                                        <td>{{ $task->description }}</td>
                                        <td>{{ $task->due_date }}</td>
                                        <td>{{ $task->priority }}</td>
                                        <td>{{ $task->status }}</td>
                                        <td>
                                            <a href="{{ route('tasks.show', $task->task_id) }}" class="btn btn-info btn-sm">Ver</a>
                                            <a href="{{ route('tasks.edit', $task->task_id) }}" class="btn btn-primary btn-sm">Editar</a>
                                            <form action="{{ route('tasks.destroy', $task->task_id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de querer eliminar esta tarea?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
