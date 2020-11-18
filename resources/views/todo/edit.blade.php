@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-10">
        <h2 class="text-muted py-3">Todo 編集</h2>
        @include('todo.input')
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