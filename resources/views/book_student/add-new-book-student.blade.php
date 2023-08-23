<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Client Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        select {
            padding: 8px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px 20px;
            background-color: #003049;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #457b9d;
        }

        .success-message {
            color: green;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .error-message {
            color: red;
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New  book_student</h1>

        @if(Session::has('Success'))
            <div class="success-message">{{ Session::get('Success') }}</div>
        @endif

        <form method="post" action="{{ url('store-book-student') }}">
            @csrf

            <label for="book_id">Book ID:</label>
            <select name="book_id" id="book_id">
                @foreach($books as $book)
                    <option value="{{ $book->book_id }}">{{ $book->book_id }}</option>
                @endforeach
            </select>
            @error('book_id')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <label for="student_id">Student ID:</label>
            <select name="student_id" id="student_id">
                @foreach($students as $student)
                    <option value="{{ $student->student_id }}">{{ $student->student_id }}</option>
                @endforeach
            </select>
            @error('student_id')
                <div class="error-message">{{ $message }}</div>
            @enderror

            <button type="submit">Create  book_student</button>
        </form>
    </div>
</body>
</html>
