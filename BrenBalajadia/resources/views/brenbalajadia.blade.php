<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bren G. Balajadia  Resume</title>

    <!-- Link to Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f5f8;
            color: #333;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Resume Container */
        .resume-container {
            width: 100%;
            max-width: 800px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            gap: 20px;
        }

        /* Header Section without Image */
        .header {
            text-align: left;
            padding-bottom: 20px;
            border-bottom: 2px solid #007acc;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2em;
            color: #007acc;
            margin: 0;
        }

        .header p {
            font-size: 1.1em;
            color: #666;
            margin: 5px 0;
        }

        .contact-info {
            font-size: 1em;
            color: #333;
            margin-top: 10px;
        }

        .contact-info p {
            margin: 5px 0;
        }

        /* Section */
        .section {
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 8px;
            background-color: #f2f8fc;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
        }

        .section-title {
            font-size: 1.5em;
            color: #007acc;
            border-bottom: 1px solid #007acc;
            padding-bottom: 5px;
            margin-bottom: 10px;
        }

        .section-content p, .section-content li {
            font-size: 1em;
            color: #555;
            line-height: 1.6;
        }

        .section-content ul {
            list-style-type: none;
            padding-left: 0;
        }

        /* Links and Icons */
        .contact-info i, .section-content a {
            color: #007acc;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 600px) {
            .resume-container {
                padding: 20px;
            }
            .section {
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <div class="resume-container">
        <!-- Header with Name and Contact Info -->
        <header class="header">
            <h1>Bren G. Balajadia </h1>
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
