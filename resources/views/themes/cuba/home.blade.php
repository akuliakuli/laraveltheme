@extends('themes.cuba.layout')

@section('content')
    <h1>Главная страница - Cuba</h1>
    <form action="{{ route('set.theme') }}" method="POST">
        @csrf
        <label for="theme-select">Выберите тему:</label>
        <select name="theme" id="theme-select">
            <option value="classic">Classic</option>
            <option value="cuba">Cuba</option>
        </select>
        <button type="submit" class="custom-button">Сохранить</button>
    </form>
@endsection
