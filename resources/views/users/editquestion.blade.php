@extends('layouts.app')

@section('title', 'Edit Question')

@section('content')
<div class="row create-post-container">
    <div class="col-3 header-create-post">
        <h1>Edit <br>Question</h1>
    </div>
    <div class="col-8 post">
        {!! Form::open(['action' => ['QuestionsController@update', $question->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('topic', 'Topic')}}
                {{Form::text('topic', $question->topic, ['class' => 'form-control', 'placeholder' => 'Topic'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Question')}}
                {{Form::textarea('body', $question->body, ['class' => 'form-control', 'id' => 'article-ckeditor', 'placeholder' => 'Question'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            <div class="bottomButton">
                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                <a onclick="return confirm('Are you sure you want to leave?')" class="onclick btn btn-danger pull-right" href="/questions/{{$question->id}}">
                    Cancel
                </a>
            </div>
        {!! Form::close() !!}
    </div>
</div>
@endsection