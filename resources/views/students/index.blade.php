<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Registered Students</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
        }

        h1 {
            text-align: center;
        }

        .register {
            display: inline-block;
            padding: 10px 15px;
            background: #2563eb;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #f3f4f6;
        }

        .view {
            color: #2563eb;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Registered Students</h1>
    <p style="text-align: center;">
    Student Registration System
    </p>

    <a href="{{ route('students.create') }}" class="register">
        + Register Student
    </a>

    @if($students->count() > 0)

        <table>

            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Program</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>

                @foreach($students as $student)

                    <tr>

                        <td>
                            {{ $student->student_id }}
                        </td>

                        <td>
                            {{ $student->first_name }}
                            {{ $student->last_name }}
                        </td>

                        <td>
                            {{ $student->email }}
                        </td>

                        <td>
                            {{ $student->program }}
                        </td>

                        <td>
                            <a
                                href="{{ route('students.show', $student) }}"
                                class="view"
                            >
                                View
                            </a>
                        </td>

                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>No students registered yet.</p>

    @endif

</div>

</body>
</html>