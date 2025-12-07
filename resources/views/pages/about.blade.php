@extends('layouts.app')

@section('title', 'About | Rafiya')

@section('page-style')
<style>

/* HEADER */
.about-header {
    margin-bottom: 30px;
}

.about-header h1 {
    font-size: 38px;
    font-weight: 800;
    margin-bottom: 8px;
    background: linear-gradient(90deg, #ff6a00, #ff8c37);
    -webkit-background-clip: text;
    color: transparent;
}

.about-header p {
    max-width: 700px;
    font-size: 15px;
    color: #555;
    line-height: 1.7;
}

/* COLORFUL CARD BLOCKS */
.info-block {
    background: white;
    padding: 22px;
    border-radius: 14px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    margin-bottom: 25px;
    border-left: 6px solid #ff6a00;
}

.info-block h3 {
    font-size: 22px;
    font-weight: 700;
    color: #ff6a00;
    margin-bottom: 14px;
}

.info-block p {
    margin: 4px 0;
    font-size: 15px;
    color: #333;
}

.edu_title{
    font-size: 26px;
    font-weight: 800;
    margin-top: 35px;
    margin-bottom: 15px;
    background: linear-gradient(90deg, #533017ff, #67442bff);
    -webkit-background-clip: text;
    color: transparent;

}

/* SKILLS – CV style */
.skills-title {
    font-size: 26px;
    font-weight: 800;
    margin-top: 35px;
    margin-bottom: 15px;
    background: linear-gradient(90deg, #533017ff, #67442bff);
    -webkit-background-clip: text;
    color: transparent;
}

.skill-box {
    background: white;
    padding: 22px;
    border-radius: 14px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    border-left: 6px solid #ff6a00;
    margin-bottom: 20px;
}

.skill-box h4 {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #444;
}

.skill-box p {
    margin: 0;
    font-size: 15px;
    color: #555;
    line-height: 1.6;
}


</style>
@endsection


@section('content')

<div class="about-header">
    <h1>About Me</h1>
    <p>
        I am Rafiya Tasnim Hossain, a CSE student at Daffodil International University.
        I enjoy learning new technologies and building simple, user-friendly web applications.
    </p>
</div>

{{-- EDUCATION SECTION --}}

<h4 class="edu_title">Education</h4>

<div class="info-block">
    

    <p><strong>University:</strong> Daffodil International University</p>
    <p><strong>Department:</strong> Computer Science & Engineering</p>
    <p><strong>CGPA:</strong> 3.66</p>

    <br>

    <p><strong>College:</strong> Govt. Azizul Haque College</p>
    <p><strong>HSC Result:</strong> GPA 5.00</p>

    <br>

    <p><strong>School:</strong> Bogura Cantonment Public School and College</p>
    <p><strong>SSC Result:</strong> GPA 5.00</p>
</div>


{{-- SKILLS --}}
<h2 class="skills-title">Skills</h2>

<div class="skill-box">
    <h4>Programming Languages</h4>
    <p>C, Java, Python, HTML, CSS</p>
</div>

<div class="skill-box">
    <h4>Software Tools</h4>
    <p>MS Office, Canva, VS Code</p>
</div>

<div class="skill-box">
    <h4>Database</h4>
    <p>MySQL</p>
</div>

<div class="skill-box">
    <h4>Communication</h4>
    <p>Good communication skill, teamwork & leadership</p>
</div>

@endsection
