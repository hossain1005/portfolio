@extends('layouts.app')

@section('title', 'Home | Rafiya')

@section('page-style')
<style>
/* MAIN HERO */
.hero-wrapper {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 80px 0;
    gap: 60px;
}

/* LEFT CONTENT */
.hero-left {
    flex: 1;
}

.hero-left h3 {
    font-size: 18px;
    margin-bottom: 6px;
    font-weight: 600;
    color: #333;
}

.hero-left h1 {
    font-size: 46px;
    font-weight: 800;
    margin: 0;
    line-height: 1.2;
    color: #111;
}

.hero-left h1 span {
    color: #ff6a00; /* highlight orange */
}

.hero-left h2 {
    font-size: 30px;
    font-weight: 700;
    margin-top: 5px;
    color: #111;
}

.hero-left p {
    max-width: 470px;
    margin-top: 16px;
    color: #555;
    font-size: 15px;
    line-height: 1.7;
}

/* BUTTONS */
.hero-buttons {
    margin-top: 22px;
    display: flex;
    gap: 14px;
}

.btn-black {
    background: #111;
    color: #fff;
    padding: 10px 22px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
}

.btn-orange {
    background: #ff6a00;
    color: #fff;
    padding: 10px 22px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 14px;
}

/* IMAGE AREA */
.hero-right {
    flex: 1;
    display: flex;
    justify-content: center;
}

.hero-image {
    width: 340px;
    height: 340px;
    border-radius: 50%;
    overflow: hidden;
    border: 8px solid #ffffff;
    box-shadow: 0 10px 25px rgba(0,0,0,0.15);
}

.hero-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* RESPONSIVE */
@media(max-width: 768px) {
    .hero-wrapper {
        flex-direction: column-reverse;
        text-align: center;
        padding: 50px 0;
    }

    .hero-left h1 {
        font-size: 32px;
    }

    .hero-left h2 {
        font-size: 22px;
    }

    .hero-image {
        width: 240px;
        height: 240px;
    }

    .hero-left p {
        margin-left: auto;
        margin-right: auto;
    }
}
</style>
@endsection


@section('content')

<section class="hero-wrapper">

    {{-- LEFT SIDE --}}
    <div class="hero-left">
        <h3>Hi</h3>

        <h1>I'm <span>Rafiya Tasnim Hossain</span></h1>

        

        <p>
            Final-year CSE student at Daffodil International University, focused on building
            clean and user-friendly web applications with Laravel, PHP and modern frontend tools.
        </p>

        <div class="hero-buttons">
            <a href="{{ route('contact') }}" class="btn-black">contact Me</a>
            <a href="{{ route('projects') }}" class="btn-orange">My projects</a>
        </div>
    </div>

    {{-- RIGHT SIDE IMAGE --}}
    <div class="hero-right">
        <div class="hero-image">
            <img src="/images/rafiya.jpg" alt="Rafiya">
        </div>
    </div>

</section>

@endsection




