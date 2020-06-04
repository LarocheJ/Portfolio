@extends('layouts.main')

@section('content')
    
    <div class="header mb-5">
        <h1 data-aos="fade-up">About</h1>
    </div>

    <div class="container">

        <div class="row mb-5">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 mb-4 mb-sm-0" data-aos="fade-right">
                <img class="img-fluid img-border" src="{{ asset('img/me-in-tux.jpg') }}" alt="Jimmy Laroche in a tuxedo suit">
            </div>
            <div class="col-0 col-lg-6 col-md-0 col-sm-0" data-aos="fade-left">
                <h2>What I do</h2>
                <p class="large-text"><strong>I am a web developer currently based in Calgary, Alberta. I specialize in building beautiful, user-centered and responsive websites.</strong></p>
                <p><strong>Designing</strong> simple and attractive layouts that not only work but also communicate a clear message for a client’s brand is crucial. For that reason, I always ensure to take the time to fully understand a client’s product or service before starting to draw mockups.
                </p>
                <p><strong>Problem-solving</strong> is a never-ending painstaking process for any business. I have learned to break down problems and requirements into manageable tasks and solutions so that we can stay on time and on budget.
                </p>
                <p><strong>Communicating</strong> and staying in touch throughout the development process is a priority as it is important for me to ensure that the client is involved and happy with where the project is going.
                </p>
                <h3 class="mb-3 mt-5">My Skills</h3>
                <div class="skills">
                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                    </ul>
                    <ul>
                        <li>WordPress</li>
                        <li>MySQL</li>
                        <li>Laravel</li>
                        <li>SASS</li>
                    </ul>
                    <ul>
                        <li>Node.js</li>
                        <li>jQuery</li>
                        <li>Git</li>
                        <li>Bootstrap</li>
                    </ul>
                    <ul>
                        <li>Illustrator</li>
                        <li>Photoshop</li>
                        <li>Adobe XD</li>
                        <li>Constantly learning more</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12 col-lg-6 col-md-12 col-sm-12 mt-5">
                <h2>About this Website</h2>
                <p>I built my portfolio from scratch using a PHP framework called Laravel. I really wanted to "future proof" my portfolio by keeping the design simplistic and making it mobile friendly. 
                </p>
                <p>Furthermore, I wanted to make it easy to add new projects. So, I created my very own mini CMS. I implemented a system where I can dynamically add, edit and remove projects through a custom dashboard. From this dashboard, I can also see the analytical stats to see how my portfolio is performing.</p>
            </div>
            <div class="col-0 col-lg-6 col-md-0 col-sm-0 mt-5">
                <img class="img-fluid img-border" src="{{ asset('img/dashboard.jpg') }}" alt="Dashboard for my portfolio">
            </div>
        </div>

    </div>

@endsection