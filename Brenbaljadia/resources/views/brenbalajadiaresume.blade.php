<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bren G. Balajadia's Resume</title>

    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Custom CSS for styling -->
<!-- Custom CSS for styling -->
<style>
    /* Base Colors */
    :root {
        --primary-color: #FCF596;
        --text-color: #333;
        --background-color: #f1f1f1;
        --content-background: #ffffff;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: var(--background-color);
        color: var(--text-color);
        margin: 0;
        padding: 0;
        font-size: 1.1em; /* Increase base font size */
    }

    /* Main Container */
    .resume-container {
        width: 80%;
        max-width: 800px;
        margin: 30px auto;
        padding: 25px; /* Increase padding for better spacing */
        background-color: var(--content-background);
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
    }

    /* Header Section */
    .header {
        text-align: center;
        border-bottom: 2px solid var(--primary-color);
        padding-bottom: 20px; /* Increase padding for more space */
        margin-bottom: 30px;
    }

    .header h1 {
        font-size: 2.5em; /* Increase font size */
        margin: 0;
        color: #333;
    }

    .header p {
        font-size: 1.2em; /* Slightly larger */
        margin-top: 5px;
        color: #666;
    }

    /* Contact Information */
    .contact-info {
        text-align: center;
        font-size: 1em; /* Slightly larger */
        margin-top: 12px;
        color: #555;
    }

    .contact-info p {
        margin: 6px 0;
    }

    /* Section Title */
    .section-title {
        font-size: 1.6em; /* Increase section title font size */
        color: var(--text-color);
        margin-top: 30px;
        margin-bottom: 12px;
        border-bottom: 2px solid var(--primary-color);
        padding-bottom: 8px;
    }

    /* Section Content */
    .section-content p, .section-content li {
        font-size: 1.1em; /* Slightly larger */
        margin: 10px 0;
        line-height: 1.7;
        color: var(--text-color);
    }

    ul {
        list-style-type: disc;
        padding-left: 25px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .resume-container {
            width: 90%;
            padding: 18px;
        }

        .header h1 {
            font-size: 2em;
        }

        .section-title {
            font-size: 1.4em;
        }
    }
</style>

</head>
<body>

    <div class="resume-container">

        <!-- Header with Name and Contact Info -->
        <header class="header">
            <h1>Bren G. Balajadia</h1>
            <p>Aspiring Developer | Information Technology Student</p>
            <div class="contact-info">
                <p><i class="fas fa-phone"></i> {{ $profile->phone }}</p>
                <p><i class="fas fa-envelope"></i> {{ $profile->email }}</p>
                <p><i class="fas fa-map-marker-alt"></i> {{ $profile->address }}</p>
            </div>
        </header>

        <!-- Objective Section -->
        <section class="section">
            <h2 class="section-title">Objective</h2>
            <div class="section-content">
                <p>{{ $profile->objective }}</p>
            </div>
        </section>

        <!-- Education Section -->
        <section class="section">
            <h2 class="section-title">Education</h2>
            <div class="section-content">
                @foreach ($profile->educations as $education)
                    <p><strong>{{ $education->level }}:</strong> {{ $education->school_name }} ({{ $education->years_attended }})</p>
                @endforeach
            </div>
        </section>

        <!-- Skills Section -->
        <section class="section">
            <h2 class="section-title">Skills</h2>
            <div class="section-content">
                <ul>
                    @foreach ($profile->skills as $skill)
                        <li>{{ $skill->skill }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <!-- Certifications Section -->
        <section class="section">
            <h2 class="section-title">Certifications</h2>
            <div class="section-content">
                <ul>
                    @foreach ($profile->certifications as $certification)
                        <li>{{ $certification->certification }}</li>
                    @endforeach
                </ul>
            </div>
        </section>

        <!-- Languages Section -->
<section class="section">
    <h2 class="section-title">Languages</h2>
    <div class="section-content">
        <ul>
            @if(!empty($profile->language) && is_iterable($profile->language))
                @foreach ($profile->language as $language)
                    <li>{{ $language->language }}</li>
                @endforeach
            @else
                <li>No languages available</li>
            @endif
        </ul>
    </div>
</section>
        <!-- References Section -->
        <section class="section">
            <h2 class="section-title">References</h2>
            <div class="section-content">
                @foreach ($profile->references as $reference)
                    <p><strong>{{ $reference->name }}</strong>, {{ $reference->profession }}</p>
                    <p><i class="fas fa-envelope"></i> {{ $reference->email }} | <i class="fas fa-phone"></i> {{ $reference->phone }}</p>
                @endforeach
            </div>
        </section>
    </div>
</body>
</html>
