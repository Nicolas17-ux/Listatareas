{{-- welcome.blade.php --}}

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bienvenido</div>

                    <div class="card-body">
                        @guest
                            <p>Bienvenido a mi aplicación de gestión de tareas.</p>
                            <p><a href="{{ route('login') }}">Iniciar sesión</a> o <a href="{{ route('register') }}">Registrarse</a></p>
                        @else
                            <p>¡Hola, {{ Auth::user()->name }}!</p>
                            <p><a href="{{ route('tasks.index') }}">Ver mis tareas</a></p>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
