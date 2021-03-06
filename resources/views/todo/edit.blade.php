@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-10">
        <h2 class="text-muted py-3">Todo 編集</h2>
        <form action="/todo/{{ $todo->id }}" method="POST">
        @method('PUT')
        @include('todo.input')
        <button class="btn btn-primary" type="submit">更新</button>
        </form>
        @include('parts.back')
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection