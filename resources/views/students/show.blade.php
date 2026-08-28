<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Profile</title>

    <style>
        body {
            margin: 0;
            padding: 40px 20px;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
        }

        .success {
            padding: 15px;
            background: #dcfce7;
            color: #166534;
            border-radius: 6px;
            margin-bottom: 25px;
            text-align: center;
        }

        .profile {
            text-align: center;
            margin-bottom: 30px;
        }

        .profile img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #ddd;
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .detail {
            padding: 15px;
            background: #f9fafb;
            border-radius: 6px;
        }

        .detail strong {
            display: block;
            margin-bottom: 5px;
        }

        .full {
            grid-column: 1 / -1;
        }

        .back {
            display: block;
            margin-top: 25px;
            text-align: center;
            text-decoration: none;
            padding: 12px;
            background: #2563eb;
            color: white;
            border-radius: 6px;
        }

        @media (max-width: 650px) {
            .details {
                grid-template-columns: 1fr;
            }

            .full {
                grid-column: auto;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Profile</h1>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <div class="profile">
        <img
            src="{{ asset('storage/' . $student->profile_picture) }}"
            alt="Student Profile Picture"
        >
    </div>

    <div class="details">

        <div class="detail">
            <strong>Student ID</strong>
            {{ $student->student_id }}
        </div>

        <div class="detail">
            <strong>First Name</strong>
            {{ $student->first_name }}
        </div>

        <div class="detail">
            <strong>Middle Name</strong>
            {{ $student->middle_name ?: 'N/A' }}
        </div>

        <div class="detail">
            <strong>Last Name</strong>
            {{ $student->last_name }}
        </div>

        <div class="detail">
            <strong>Email</strong>
            {{ $student->email }}
        </div>

        <div class="detail">
            <strong>Mobile Number</strong>
            {{ $student->mobile_number }}
        </div>

        <div class="detail">
            <strong>Date of Birth</strong>
            {{ $student->date_of_birth->format('F d, Y') }}
        </div>

        <div class="detail">
            <strong>Gender</strong>
            {{ $student->gender }}
        </div>

        <div class="detail">
            <strong>Program</strong>
            {{ $student->program }}
        </div>

        <div class="detail">
            <strong>Year Level</strong>
            {{ $student->year_level }}
        </div>

        <div class="detail full">
            <strong>Address</strong>
            {{ $student->address }}
        </div>

    </div>

    <a href="{{ route('students.create') }}" class="back">
        Register Another Student
    </a>

</div>

</body>
</html>