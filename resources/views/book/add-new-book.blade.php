<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Client</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('403.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            margin-top: 0px;
        }

        h3 {
            margin-bottom: 20px;
        }

        .alert {
            margin-bottom: 10px;
        }

        .form-label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-control {
            width: 100%;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
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
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Add New book</h3><br>

                @if(Session::has('Success'))
                <div class="alert alert-Success" role="alert">
                    {{Session::get('Success')}} 
                </div>
                @endif

                <form method="post" action="{{url('save-book')}}">
                    @csrf 

                    <div class="md-3">
                        <label class="form-label">book_id</label>
                        <input type="text" class="form-control" name="book_id" placeholder="Enter Book id" value="{{old('book_id')}}">
                        @error('book_id')
                        <div class="alert alert-danger" role="alert">
                            {{$message}} 
                        </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">title</label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{old('title')}}">
                        @error('title')
                        <div class="alert alert-danger" role="alert">
                            {{$message}} 
                        </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">Author_Name</label>
                        <input type="text" class="form-control" name="Author_Name" placeholder="Enter Author_Name" value="{{old('Author_Name')}}">
                        @error('Author_Name')
                        <div class="alert alert-danger" role="alert">
                            {{$message}} 
                        </div>
                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-label">admin_id</label>
                        <input type="text" class="form-control" name="admin_id" placeholder="Enter Admin id" value="{{old('admin_id')}}">
                        @error('admin_id')
                        <div class="alert alert-danger" role="alert">
                            {{$message}} 
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{url('book-index')}}" class="btn btn-danger">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
