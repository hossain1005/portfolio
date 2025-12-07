@extends('layouts.app')

@section('title', 'Projects | Rafiya')

@section('page-style')
<style>

/* PAGE TITLE */
.projects-header {
    margin-bottom: 30px;
}

.projects-header h1 {
    font-size: 38px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff6a00, #ff8c37);
    -webkit-background-clip: text;
    color: transparent;
}

/* GRID WRAPPER */
.project-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 22px;
}

/* EACH CARD */
.project-card {
    background: white;
    padding: 22px;
    border-radius: 14px;
    box-shadow: 0 5px 14px rgba(0,0,0,0.08);
    border-left: 6px solid #ff6a00;
    transition: 0.25s ease;
}

.project-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 10px 22px rgba(0,0,0,0.12);
}

/* TITLE */
.project-card h3 {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #111;
}

/* DESCRIPTION */
.project-card p {
    font-size: 14px;
    color: #444;
    line-height: 1.6;
    margin-bottom: 12px;
}

/* TECH TAGS */
.tech-badges {
    margin-bottom: 14px;
}

.tech-badges span {
    display: inline-block;
    background: #ffefe5;
    color: #ff6a00;
    padding: 6px 10px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 600;
    margin-right: 6px;
}

/* BUTTONS */
.project-links a {
    font-size: 14px;
    font-weight: 600;
    color: #111;
    text-decoration: underline;
    cursor: pointer;
}

.project-links a:hover {
    color: #ff6a00;
}

</style>
@endsection


@section('content')

<div class="projects-header">
    <h1>My Projects</h1>
</div>

<div class="project-grid">

    @foreach($projects as $p)
    <div class="project-card">

        <h3>{{ $p->title }}</h3>

        <p>{{ $p->description }}</p>

        {{-- TECH STACK --}}
        @if($p->tech_stack)
        <div class="tech-badges">
            @foreach(explode(',', $p->tech_stack) as $tech)
                <span>{{ trim($tech) }}</span>
            @endforeach
        </div>
        @endif

        {{-- LINKS --}}
        <div class="project-links">
            @if($p->github_link)
                <a href="https://github.com/hossain1005" class="github-btn" target="_blank">GitHub</a>
            @endif

            @if($p->demo_link)
                <a href="{{ $p->demo_link }}" class="demo-btn" target="_blank">Live Demo</a>
            @endif
        </div>

    </div>
    @endforeach

</div>

@endsection
