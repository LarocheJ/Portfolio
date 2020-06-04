@extends('layouts.dashboard')

@section('content')

    <a class="d-inline-flex align-items-center mb-4" href="javascript:;" onclick="goBack();">
        <svg class="bi bi-arrow-left-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 010 .708L5.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h6.5a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
        </svg> Back
    </a>

    <h2 class="mb-5">Project | {{ $title }}</h2>

    @include('inc.messages')

    <h3>Project Heading</h3>

    {!! Form::open(['action' => 'DashboardController@store', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}

        <div class="row">

            <div class="form-group col-6">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', '', ['class' => 'form-control', 'required', 'autofocus', 'id' => 'title']) }}
            </div>

            <div class="form-group col-6">
                {{ Form::label('subtitle', 'Subtitle') }}
                {{ Form::text('subtitle', '', ['class' => 'form-control', 'required']) }}
            </div>

        </div>

        <div class="row">

            <div class="form-group col-6">
                {{ Form::label('slug', 'Slug') }}
                {{ Form::text('slug', '', ['class' => 'form-control', 'required', 'id' => 'slug']) }}
            </div>

            <div class="form-group col-6">
                {{ Form::label('github', 'GitHub Link') }}
                {{ Form::text('github', '', ['class' => 'form-control', 'required', 'id' => 'github']) }}
            </div>

        </div>

        <div class="form-group">
            {{ Form::label('intro', 'Short Introduction (optional)') }}
            {{ Form::textarea('intro', '', ['class' => 'form-control', 'nullable', 'rows' => '5']) }}
        </div>

        

        <hr class="my-4">

        <h3>Project Description</h3>

        <div class="form-group">
            {{ Form::label('challenge', 'The Challenge') }}
            {{ Form::textarea('challenge', '', ['class' => 'form-control', 'id' => 'challenge']) }}
        </div>

        <div class="form-group">
            {{ Form::label('solution', 'The Solution') }}
            {{ Form::textarea('solution', '', ['class' => 'form-control', 'id' => 'solution']) }}
        </div>

        <div class="form-group">
            {{ Form::label('role', 'My Role (optional)') }}
            {{ Form::textarea('role', '', ['class' => 'form-control', 'id' => 'role']) }}
        </div>

        <div class="form-group">
            {{ Form::label('url', 'Live Site URL') }}
            {{ Form::text('url', '', ['class' => 'form-control', 'nullable']) }}
        </div>

        <hr class="my-4">

        <h3>Stack</h3>

        <div class="row my-2">

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('html', 'HTML', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'html', false, ['class' => 'form-check-input', 'id' => 'html']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('css', 'CSS', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'css', false, ['class' => 'form-check-input', 'id' => 'css']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('js', 'JavaScript', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'js', false, ['class' => 'form-check-input', 'id' => 'js']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('mysql', 'MySQL', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'mysql', false, ['class' => 'form-check-input', 'id' => 'mysql']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('nodejs', 'Node.js', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'nodejs', false, ['class' => 'form-check-input', 'id' => 'nodejs']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('wordpress', 'WordPress', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'wordpress', false, ['class' => 'form-check-input', 'id' => 'wordpress']) }}
                </div>
            </div>

        </div>

        <div class="row my-2">

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('mongodb', 'MongoDB', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'mongodb', false, ['class' => 'form-check-input', 'id' => 'mongodb']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('php', 'PHP', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'php', false, ['class' => 'form-check-input', 'id' => 'php']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('sass', 'Sass', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'sass', false, ['class' => 'form-check-input', 'id' => 'sass']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('laravel', 'Laravel', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'laravel', false, ['class' => 'form-check-input', 'id' => 'laravel']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('express', 'Express', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'express', false, ['class' => 'form-check-input', 'id' => 'express']) }}
                </div>
            </div>

            <div class="col">
                <div class="form-check d-flex">
                    {{ Form::label('digitalocean', 'Digital Ocean', ['class' => 'form-check-label']) }}
                    {{ Form::checkbox('stack[]', 'digitalocean', false, ['class' => 'form-check-input', 'id' => 'digitalocean']) }}
                </div>
            </div>

        </div>
        
        <hr class="my-4">

        <h3>Images</h3>
        <p>Please make sure all images are less than <strong>2 mb</strong></p>

        <div class="d-flex">
            <div>
                <h4>Thumb</h4>
                <div class="form-group">
                    {{ Form::file('thumb') }}
                </div>
            </div>
            
            <div>
                <h4>Full</h4>
                {{ Form::file('full') }}
            </div>
        </div>

        <hr>

        <div class="form-check d-flex mb-4">
            {{ Form::label('featured', 'Make this project featured?', ['class' => 'form-check-label']) }}
            {{ Form::checkbox('featured', 'featured', false, ['class' => 'form-check-input', 'id' => 'featured']) }}
        </div>

        {{ Form::submit('Submit', ['class' => 'btn btn-primary mb-5']) }}

    {!! Form::close() !!}

    <script>

        ClassicEditor
                .create( document.querySelector( '#challenge' ) )
                .catch( error => {
                    console.error( error );
                } );

            ClassicEditor
            .create( document.querySelector( '#solution' ) )
            .catch( error => {
                console.error( error );
            } );

            ClassicEditor
            .create( document.querySelector( '#role' ) )
            .catch( error => {
                console.error( error );
            } );

            $("#title").keyup(function(){
                var Text = $(this).val();
                Text = Text.toLowerCase();
                Text = Text.replace(/[^a-zA-Z0-9]+/g,'-');
                $("#slug").val(Text);        
            });

    </script>

@endsection