<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arvick Mercado Resume</title>

    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #0A1F44;
            color: #F1F1F1;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Resume Container */
        .resume-container {
            display: flex;
            flex-direction: column;
            width: 100%;
            max-width: 1000px;
            background-color: #112240;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
            padding: 30px;
            gap: 20px;
        }

        /* Header and Image */
        .header {
            display: flex;
            align-items: center;
            text-align: left;
            gap: 20px;
            border-bottom: 3px solid #1DA1F2;
            padding-bottom: 20px;
            margin-bottom: 20px;
        }

        .header img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #1DA1F2;
        }

        .header-info {
            flex: 1;
        }

        .header-info h1 {
            font-size: 2.5em;
            color: #1DA1F2;
            margin: 0;
        }

        .header-info p {
            font-size: 1.2em;
            color: #D9D9D9;
            margin: 5px 0;
        }

        .contact-info {
            font-size: 1.1em;
            color: #F1F1F1;
            margin-top: 10px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        /* Section */
        .section {
            background-color: #0A1F44;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            font-size: 1.8em;
            color: #1DA1F2;
            border-bottom: 2px solid #1DA1F2;
            padding-bottom: 5px;
            margin-bottom: 15px;
        }

        .section-content p, .section-content li {
            font-size: 1.2em;
            color: #D9D9D9;
            line-height: 1.8;
        }

        .section-content ul {
            list-style-type: none;
            padding-left: 0;
        }

        /* Links and Icons */
        .contact-info i, .section-content a {
            color: #1DA1F2;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 800px) {
            .header {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .header-info, .contact-info {
                text-align: center;
            }
        }
    </style>
</head>
<body>

    <div class="resume-container">
        <!-- Header with Image, Name, and Contact Info -->
        <header class="header">
            <!-- Profile Image -->
            <img src="{{ $profile->image }}" alt="Profile Image of Arvick R. Mercado">

            <!-- Header Information -->
            <div class="header-info">
                <h1>Arvick R. Mercado</h1>
                <p>Aspiring Developer | Information Technology Student</p>
                <div class="contact-info">
                    <p><i class="fas fa-phone"></i> {{ $profile->phone }}</p>
                    <p><i class="fas fa-envelope"></i> {{ $profile->email }}</p>
                    <p><i class="fas fa-map-marker-alt"></i> {{ $profile->address }}</p>
                </div>
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
