<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Student Registration</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            padding: 40px 20px;
        }

        .container {
            max-width: 850px;
            margin: auto;
            background: white;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 11px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        textarea {
            min-height: 100px;
            resize: vertical;
        }

        .full {
            grid-column: 1 / -1;
        }

        .error {
            color: #dc2626;
            font-size: 14px;
            margin-top: 5px;
        }

        .submit-btn {
            width: 100%;
            padding: 13px;
            border: none;
            border-radius: 6px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background: #1d4ed8;
        }

        .required {
            color: red;
        }

        @media (max-width: 700px) {
            .form-row {
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

    <h1>Student Registration Form</h1>

    <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="form-row">

            <!-- Student ID -->
            <div class="form-group">
                <label>
                    Student ID <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="student_id"
                    value="{{ old('student_id') }}"
                    placeholder="Enter Student ID"
                >

                @error('student_id')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- First Name -->
            <div class="form-group">
                <label>
                    First Name <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="first_name"
                    value="{{ old('first_name') }}"
                    placeholder="Enter First Name"
                >

                @error('first_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Middle Name -->
            <div class="form-group">
                <label>Middle Name</label>

                <input
                    type="text"
                    name="middle_name"
                    value="{{ old('middle_name') }}"
                    placeholder="Enter Middle Name"
                >

                @error('middle_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label>
                    Last Name <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="last_name"
                    value="{{ old('last_name') }}"
                    placeholder="Enter Last Name"
                >

                @error('last_name')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label>
                    Email Address <span class="required">*</span>
                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="example@email.com"
                >

                @error('email')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Mobile -->
            <div class="form-group">
                <label>
                    Mobile Number <span class="required">*</span>
                </label>

                <input
                    type="text"
                    name="mobile_number"
                    value="{{ old('mobile_number') }}"
                    placeholder="09XXXXXXXXX"
                    maxlength="20"
                >

                @error('mobile_number')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Date of Birth -->
            <div class="form-group">
                <label>
                    Date of Birth <span class="required">*</span>
                </label>

                <input
                    type="date"
                    name="date_of_birth"
                    value="{{ old('date_of_birth') }}"
                >

                @error('date_of_birth')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label>
                    Gender <span class="required">*</span>
                </label>

                <select name="gender">
                    <option value="">Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>
                        Male
                    </option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                        Female
                    </option>
                </select>

                @error('gender')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Program -->
            <div class="form-group">
                <label>
                    Program <span class="required">*</span>
                </label>

                <select name="program">
                    <option value="">Select Program</option>

                    <option value="BS Information Technology"
                        {{ old('program') == 'BS Information Technology' ? 'selected' : '' }}>
                        BS Information Technology
                    </option>

                    <option value="BS Computer Science"
                        {{ old('program') == 'BS Computer Science' ? 'selected' : '' }}>
                        BS Computer Science
                    </option>

                    <option value="BS Information Systems"
                        {{ old('program') == 'BS Information Systems' ? 'selected' : '' }}>
                        BS Information Systems
                    </option>
                </select>

                @error('program')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Year Level -->
            <div class="form-group">
                <label>
                    Year Level <span class="required">*</span>
                </label>

                <select name="year_level">
                    <option value="">Select Year Level</option>

                    <option value="1st Year"
                    {{ old('year_level') == '1st Year' ? 'selected' : '' }}>
                    1st Year
                    </option>

                    <option value="2nd Year"
                    {{ old('year_level') == '2nd Year' ? 'selected' : '' }}>
                    2nd Year
                    </option>

                    <option value="3rd Year"
                    {{ old('year_level') == '3rd Year' ? 'selected' : '' }}>
                    3rd Year
                    </option>

                    <option value="4th Year"
                    {{ old('year_level') == '4th Year' ? 'selected' : '' }}>
                    4th Year
                    </option>
                </select>

                @error('year_level')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Address -->
            <div class="form-group full">
                <label>
                    Address <span class="required">*</span>
                </label>

                <textarea
                    name="address"
                    placeholder="Enter complete address"
                >{{ old('address') }}</textarea>

                @error('address')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <!-- Profile Picture -->
            <div class="form-group full">
                <label>
                    Profile Picture <span class="required">*</span>
                </label>

                <input
                    type="file"
                    name="profile_picture"
                    accept=".jpg,.jpeg,.png"
                >

                <small>
                    JPG, JPEG, or PNG only. Maximum size: 2MB.
                </small>

                @error('profile_picture')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

        </div>

        <button type="submit" class="submit-btn">
            Register Student
        </button>

    </form>

</div>

</body>
</html>