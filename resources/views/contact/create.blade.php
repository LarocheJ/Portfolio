@extends('layouts.main')

@section('content')

    <div class="header">
        <h1 data-aos="fade-up">Contact</h1>
    </div>

    <div class="container">

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        {{ Form::open(['action' => 'ContactFormController@store', 'method' => 'post']) }}
            <div class="row">
                <div class="col-12 col-md-6" data-aos="fade-right">
                    <div class="form-group">
                        {{ Form::label('name', 'Name *') }}
                        {{ Form::text('name', old('name'), ['class' => 'form-control']) }}
                        <div class="text-danger">{{ $errors->first('name') }}</div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('email', 'Email *') }}
                        {{ Form::email('email', old('email'), ['class' => 'form-control']) }}
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    </div>
                    <div class="form-group">
                        {{ Form::label('subject', 'Subject') }}
                        {{ Form::text('subject', old('subject'), ['class' => 'form-control']) }}
                    </div>
                </div>
                <div class="col-0 col-md-6" data-aos="fade-left">
                    <div class="form-group">
                        {{ Form::label('message', 'Message *') }}
                        {{ Form::textarea('message', old('message'), ['class' => 'form-control']) }}
                        <div class="text-danger">{{ $errors->first('message') }}</div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col" data-aos="fade-right">
                    <p><small><em>* = required</em></small></p>
                </div>
                <div class="col" data-aos="fade-left">
                    {{ Form::button('Send <i class="fas fa-paper-plane"></i>', ['type' => 'submit', 'class' => 'button button-blue width-100']) }}
                </div>
            </div>
        {{ Form::close() }}
        

    </div>

@endsection
