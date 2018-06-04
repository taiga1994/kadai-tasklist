@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のTask詳細ページ</h1>

    <p>タイトル: {{ $task->title }}</p>
    <p>メッセージ: {{ $task->content }}</p>

{!! link_to_route('tasks.edit', 'このTaskを編集', ['id' => $task->id]) !!}

{!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
    {!! Form::submit('削除') !!}
{!! Form::close() !!}

@endsection