@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のTask編集ページ</h1>


    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection