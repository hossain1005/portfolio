@extends('layouts.app')

@section('title', 'Contact | Rafiya')

@section('page-style')
<style>

/* HEADER */
.contact-header {
    margin-bottom: 30px;
}

.contact-header h1 {
    font-size: 38px;
    font-weight: 800;
    background: linear-gradient(90deg, #ff6a00, #ff8c37);
    -webkit-background-clip: text;
    color: transparent;
}

.contact-header p {
    max-width: 650px;
    font-size: 15px;
    color: #555;
    line-height: 1.7;
}

/* CARDS */
.contact-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 22px;
    margin-top: 20px;
}

.contact-card {
    background: white;
    padding: 22px;
    border-radius: 14px;
    box-shadow: 0 5px 16px rgba(0,0,0,0.08);
    border-left: 6px solid #ff6a00;
}

.contact-card h3 {
    margin-bottom: 14px;
    font-size: 20px;
    color: #ff6a00;
    font-weight: 700;
}

.contact-card p {
    margin: 6px 0;
    font-size: 15px;
    color: #444;
}

/* DEFAULT BLUE LINKS — DO NOT STYLE THEM */
.contact-card a {
    text-decoration: underline;
    color: #0000EE; /* browser blue */
}

.contact-card a:visited {
    color: #551A8B; /* default visited color */
}

/* ICONS */
.icon {
    margin-right: 6px;
    font-weight: 700;
    color: #ff6a00;
}


</style>
@endsection


@section('content')

<div class="contact-header">
    <h1>Contact Me</h1>
    <p>
        If you want to collaborate or know more about my work, feel free to reach out.
    </p>
</div>

<div class="contact-grid">

    <div class="contact-card">
        <h3>Direct Contact</h3>

        <p><span class="icon">📞</span> <strong>Phone:</strong> +8801799806331</p>

        <p>
            <span class="icon">✉️</span> <strong>Email:</strong>
            <a href="mailto:rafiya.tasnim2002@gmail.com">rafiya.tasnim2002@gmail.com</a>
        </p>

        <p><span class="icon">📍</span> <strong>Address:</strong> Shenpara Parbata, Mirpur, Dhaka</p>
    </div>

    <div class="contact-card">
        <h3>Online</h3>

        <p>
            <span class="icon">🐙</span> <strong>GitHub:</strong>
            <a href="https://github.com/hossain1005" target="_blank">github.com/hossain1005</a>
        </p>

        <p>
            <span class="icon">📘</span> <strong>Facebook:</strong>
            <a href="https://facebook.com/your-profile" target="_blank">facebook.com/your-profile</a>
        </p>
    </div>

</div>

@endsection