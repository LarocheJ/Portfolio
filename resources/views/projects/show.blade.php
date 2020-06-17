@extends('layouts.main')

@section('content')

<div class="header">
    <h1 data-aos="fade-up">{{ $project->title }}</h1>
    <h2 class="subheading" data-aos="fade-up">{{ $project->sub_title }}</h2>
</div>

<div class="container-fluid mt-5">

    <a href="{{ route('work') }}" class="button button-blue mb-4" data-aos="fade-right"><i class="fas fa-arrow-left"></i> Back to all projects</a>

    <div class="row mt-2">

        <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-4 mb-md-4" data-aos="fade-right">

            <img class="img-fluid img-border" 
            @if($project->full && $project->full !== "noimage.jpg")
                src="https://jimmylaroche-images.s3.us-west-2.amazonaws.com/{{ $project->full }}" 
            @else
                src="/storage/{{ $project->thumb }}" 
            @endif
            
            alt="Image for {{ $project->title }}">

        </div>

        <div class="col-0 col-sm-0 col-md-0 col-lg-8 px-3 px-md-3 px-lg-5" data-aos="fade-left">
            @if($project->intro)
                <div>
                    <h4>Project Description</h4>
                    <p>{{ $project->intro }}</p>
                    <hr>
                </div>
            @endif
            <div>
                <h4 class="">The Challenge</h4>
                <p>{!! $project->challenge !!}</p>
            </div>
            <div>
                <h4>The Solution</h4>
                <p>{!! $project->solution !!}</p>
            </div>
            @if($project->role)
                <div>
                    <h4>My Role</h4>
                    <p>{!! $project->role !!}</p>
                </div>
            @endif
            <div>
                <h4>Stack</h4>
                <ul class="stack">
                    @foreach($project->stack as $stack)
                        @if(File::exists(public_path().'/img/icons/'.$stack.'.svg'))
                            <li>
                                <img src="/img/icons/{{ $stack }}.svg" alt="{{ $stack }} icon" data-toggle="tooltip" data-placement="bottom" title="{{ $stack }}">
                            </li> 
                        @else
                            <li>
                                {{ $stack }}
                            </li> 
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="d-flex flex-wrap">
                <a href="{{ $project->url }}" class="button button-blue mr-2" target="_blank">View live site <i class="fas fa-external-link-alt font-weight-bold"></i></a>
                @if($project->github)
                    <a href="{{ $project->github }}" class="button button-transparent mt-2 mt-sm-0" target="_blank">View code <i class="fab fa-github-alt"></i></a>
                @endif
            </div>
            

        </div>

    </div>

</div>

@endsection