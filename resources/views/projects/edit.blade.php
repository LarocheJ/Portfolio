@extends('layouts.dashboard')

@section('content')

    <a class="d-inline-flex align-items-center mb-4" href="javascript:;" onclick="goBack();">
        <svg class="bi bi-arrow-left-short" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 010 .708L5.207 8l2.647 2.646a.5.5 0 01-.708.708l-3-3a.5.5 0 010-.708l3-3a.5.5 0 01.708 0z" clip-rule="evenodd"/>
        <path fill-rule="evenodd" d="M4.5 8a.5.5 0 01.5-.5h6.5a.5.5 0 010 1H5a.5.5 0 01-.5-.5z" clip-rule="evenodd"/>
        </svg> Back
    </a>

    <h2 class="mb-4">Edit "{{ $project->title }}"</h2>

    @include('inc.messages')

    <h3>Project Heading</h3>

    {!! Form::open(['action' => ['DashboardController@update', $project->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}

        <div class="row">

            <div class="form-group col-6">
                {{ Form::label('title', 'Title') }}
                {{ Form::text('title', $project->title, ['class' => 'form-control']) }}
            </div>

            <div class="form-group col-6">
                {{ Form::label('subtitle', 'Subtitle') }}
                {{ Form::text('subtitle', $project->sub_title, ['class' => 'form-control']) }}
            </div>

        </div>

        <div class="row">

        <div class="form-group col-6">
            {{ Form::label('slug', 'Slug') }}
            {{ Form::text('slug', $project->slug, ['class' => 'form-control', 'required', 'placeholder' => 'this-is-a-slug']) }}
        </div>
        
        <div class="form-group col-6">
            {{ Form::label('github', 'GitHub Link') }}
            {{ Form::text('github', $project->github, ['class' => 'form-control', 'required', 'id' => 'github']) }}
        </div>

        </div>

        <div class="form-group">
            {{ Form::label('intro', 'Short Introduction (optional)') }}
            {{ Form::textarea('intro', $project->intro, ['class' => 'form-control', 'rows' => '5']) }}
        </div>

        <hr class="my-4">  

        <h3>Project Description</h3>

        <div class="form-group">
            {{ Form::label('challenge', 'The Challenge') }}
            {{ Form::textarea('challenge', $project->challenge, ['class' => 'form-control', 'id' => 'challenge']) }}
        </div>

        <div class="form-group">
            {{ Form::label('solution', 'The Solution') }}
            {{ Form::textarea('solution', $project->solution, ['class' => 'form-control', 'id' => 'solution']) }}
        </div>

        <div class="form-group">
            {{ Form::label('role', 'My Role (optional)') }}
            {{ Form::textarea('role', $project->role, ['class' => 'form-control', 'id' => 'role']) }}
        </div>

        <div class="form-group">
            {{ Form::label('url', 'Live Site URL') }}
            {{ Form::text('url', $project->url, ['class' => 'form-control']) }}
        </div>

        <hr class="my-4">

        <h3>Stack</h3>

        {{-- <strong>Current Stack: </strong> --}}
        @foreach($project->stack as $stack)
            {{ Form::checkbox('stack[]', $stack, true, ['id' => $stack]) }}
            {{ Form::label($stack, $stack) }}
        @endforeach

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

        <h4>Thumbnail</h4>

        <div class="d-flex">
            <div class="mr-4">
                <img class="img-fluid img-thumbnail mb-2" src="/storage/thumbs/{{ $project->thumb }}" alt="Thumbnail for {{ $project->title }}" style="width:400px; max-width:100%;">
                <div class="form-group">
                    {{ Form::file('thumb') }}
                </div>
            </div>
            <div>
                <img class="img-fluid img-thumbnail mb-2" src="/storage/full/{{ $project->full }}" alt="Full image for {{ $project->title }}" style="width:400px; max-width:100%;">
                <div class="form-group">
                    {{ Form::file('full') }}
                </div>
            </div>
        </div>
        
        <hr>

        
        <div class="form-check d-flex mb-4">
            @if($project->featured == "yes")
                {{ Form::label('featured', 'Featured', ['class' => 'form-check-label']) }}
                {{ Form::checkbox('featured', 'featured', true, ['class' => 'form-check-input', 'id' => 'featured']) }}
            @else
            {{ Form::label('featured', 'Make this project featured?', ['class' => 'form-check-label']) }}
                {{ Form::checkbox('featured', 'featured', false, ['class' => 'form-check-input', 'id' => 'featured']) }}
            @endif
        </div>
        
        

        <div class="d-flex align-items-center">
            {{ Form::submit('Save', ['class' => 'btn btn-primary mb-2']) }}
            <a class="btn text-danger btn-outline-light ml-2" href="{{ route('dashboard') }}">Cancel</a>
        </div>

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

    </script>

@endsection