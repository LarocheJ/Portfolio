@extends('layouts.main')

@section('content')

<div class="header">
    <h1 data-aos="fade-up">Work</h1>
</div>

    <div class="container-fluid">
        
        <div class="projects-container">

            @foreach($projects as $project)

            <div class="project" data-aos="zoom-in">

                <a href="{{ route('show', $project->slug ) }}">
                    <img src="/storage/thumbs/{{ $project->thumb }}" alt="Thumbnail for {{ $project->title }}">
                    <div class="caption">
                        <div class="blur"></div>
                        <div class="caption-text">
                            <h3>{{ $project->title }}</h3>
                            <p>{{ $project->sub_title }}</p>
                        </div>
                    </div>
                </a>

            </div>

            @endforeach

        </div>

    </div>

@endsection

