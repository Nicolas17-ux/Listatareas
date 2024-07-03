{{-- resources/views/tasks/create.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Crear Nueva Tarea</div>

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

                        <form action="{{ route('tasks.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Descripción</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="due_date">Fecha de Vencimiento</label>
                                <input type="datetime-local" class="form-control" id="due_date" name="due_date">
                            </div>

                            <div class="form-group">
                                <label for="priority">Prioridad</label>
                                <select class="form-control" id="priority" name="priority" required>
                                    <option value="Low">Baja</option>
                                    <option value="Medium">Media</option>
                                    <option value="High">Alta</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="status">Estado</label>
                                <select class="form-control" id="status" name="status" required>
                                    <option value="Pending">Pendiente</option>
                                    <option value="In Progress">En Progreso</option>
                                    <option value="Completed">Completada</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="progress">Progreso (%)</label>
                                <input type="number" class="form-control" id="progress" name="progress" min="0" max="100" value="0">
                            </div>

                            <button type="submit" class="btn btn-primary">Crear Tarea</button>
                            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
