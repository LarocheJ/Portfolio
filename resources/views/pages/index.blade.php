@extends('layouts.main')

@section('content')

    <section id="home">

        <div class="intro-container" data-aos="fade-up">

            <h1 class="text-blue">Hey, I'm Jimmy.</h1>
            <h2 class="text-blue">A Web Developer.</h2>
            <div class="button-container">
                <a href="{{ route('work') }}" class="button button-blue">My work</a>
                <a href="{{ route('download') }}" class="button button-transparent ml-1" title="Download my resumé" data-toggle="tooltip" data-placement="bottom">Resumé <i class="fas fa-download"></i></a>
            </div>

        </div>  

    </section><!-- End home -->

    
    <section id="featured">

        <div class="container-fluid">

            <h2 class="my-4">Featured Projects</h2>

            <div class="featured-projects-container">

                @foreach($projects as $project)

                @if($project->featured == 'yes')
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
                @endif

                @endforeach

            </div>

        <a href="{{ route('work') }}" class="button button-blue">View all</a>

    </div>

    </section><!-- End featured -->

@endsection


