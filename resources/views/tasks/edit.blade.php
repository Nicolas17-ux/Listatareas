{{-- resources/views/tasks/edit.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Tarea</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('tasks.update', $task->task_id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{ $task->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="due_date">Fecha de Vencimiento</label>
                                <input type="datetime-local" class="form-control" id="due_date" name="due_date" value="{{ $task->due_date ? $task->due_date->format('Y-m-d\TH:i') : '' }}">
                            </div>

                            <div class="form-group">
                                <label for="priority">Prioridad</label>
                                <select class="form-control" id="priority" name="priority" required>
                                    <option value="Low" {{ $task->priority === 'Low' ? 'selected' : '' }}>Baja</option>
                                    <option value="Medium" {{ $task->priority === 'Medium' ? 'selected' : '' }}>Media</option>
                                    <option value="High" {{ $task->priority === 'High' ? 'selected' : '' }}>Alta</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Estado</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="Pending" {{ $task->status === 'Pending' ? 'selected' : '' }}>Pendiente</option>
                                    <option value="In Progress" {{ $task->status === 'In Progress' ? 'selected' : '' }}>En Progreso</option>
                                    <option value="Completed" {{ $task->status === 'Completed' ? 'selected' : '' }}>Completada</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="progress">Progreso (%)</label>
                                <input type="number" class="form-control" id="progress" name="progress" min="0" max="100" value="{{ $task->progress }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar Tarea</button>
                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
