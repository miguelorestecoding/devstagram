@extends('layouts.app')

@section('titulo', 'Crear cuenta')

@section('contenido')
<form method="POST" action="{{ route('register.store') }}" class="space-y-6 bg-white shadow-sm p-6 rounded-lg">
    @csrf

    <div class="space-y-2">
        <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
        <input id="name" name="name" type="text" value="{{ old('name') }}" required autofocus
            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
        @error('name')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <label for="email" class="block text-sm font-medium text-gray-700">Correo electrónico</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" required
            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
        @error('email')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
        <input id="password" name="password" type="password" required
            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
        @error('password')
            <p class="text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="space-y-2">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmar contraseña</label>
        <input id="password_confirmation" name="password_confirmation" type="password" required
            class="w-full rounded-md border-gray-300 focus:border-blue-500 focus:ring-blue-500">
    </div>

    <button type="submit"
        class="inline-flex items-center justify-center rounded-md bg-blue-600 px-4 py-2 text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Registrarme</button>
</form>
@endsection
