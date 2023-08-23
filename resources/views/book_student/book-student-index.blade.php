<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allocated Books</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 10px;
        }
        .table-container {
            background-color: #ade8f4; /* Set the desired background color */
            padding: 10px;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary:hover,
        .btn-danger:hover {
            opacity: 0.8;
        }

        h1 {
            margin-bottom: 20px;
            text-align: center;
        }

        table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }

        th, td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 2px solid #dee2e6;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .button-container {
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Allocated Books</h1><br>
                <div class="button-container">
                    <a href="{{ url('add-new-book-student') }}" class="btn btn-primary">Add New  book_students</a>
                </div>

                @if(Session::has('Success'))
                <div class="alert alert-Success" role="alert">
                    {{ Session::get('Success') }} 
                </div>
                @endif
                
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Allocated ID</th>
                                <th>Book ID</th>
                                <th>Student ID</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($book_students as $book_student)
                            <tr>
                                <td>{{ $book_student->allocated_id }}</td>
                                <td>{{ $book_student->book_id }}</td>
                                <td>{{ $book_student->student_id }}</td>
                                <td>
                                    <a href="{{ url('edit-book-student', $book_student->allocated_id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{url('delete-book-student/'.$book_student->allocated_id)}}" class="btn btn-danger">Delete</a>

                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
