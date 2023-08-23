<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order - Edit</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
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
            width: 300px;
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
    </style>
</head>
<body>
    <h1>Book-Mark Edit</h1>

    @if(Session::has('success'))
        <div class="success-message">{{ Session::get('success') }}</div>
    @endif

    <form method="post" action="{{ url('reading-list-update', $reading_list->bookmark_id) }}">
        @csrf
    


        <label for="book_id">Book:</label>
        <select name="book_id" id="book_id">
        @foreach($books as $book)
        <option value="{{ $book->book_id }}" {{ $reading_list->book_id == $book->book_id ? 'selected' : '' }}>
            {{ $book->book_id }}
        </option>
    @endforeach
        </select>
        @error('book_id')
                <div class="error-message">{{ $message }}</div>
            @enderror

        <br><br>

        <label for="student_id">Student:</label>
        <select name="student_id" id="student_id">
        @foreach($students as $student)
        <option value="{{ $student->student_id }}" {{ $reading_list->student_id == $student->student_id ? 'selected' : '' }}>
            {{ $student->student_id }}
        </option>
    @endforeach
        </select>
        @error('student_id')
                <div class="error-message">{{ $message }}</div>
            @enderror

        <br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
