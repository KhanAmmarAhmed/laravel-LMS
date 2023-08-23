
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('404.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        .form_body {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 5px;
        }

        label {
            font-weight: bold;
        }

        input[type="email"],
        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .submit {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="form_body">
            <form action="{{ route('send_mail') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div>
                    <label for="cc">CC:</label>
                    <input type="email" name="cc" id="cc">
                </div>
                <div>
                    <label for="bcc">BCC:</label>
                    <input type="email" name="bcc" id="bcc">
                </div>
                <div>
                    <label for="subject">Subject:</label>
                    <input type="text" name="subject" id="subject" required>
                </div>
                <div>
                    <label for="details">Body:</label>
                    <textarea name="details" id="details" rows="4" required></textarea>
                </div>
                <div>
                    <label for="attachment">Attachments:</label>
                    <input type="file" name="attachment[]" id="attachment" multiple>
                </div>
                <button type="submit">Send Email</button>
            </form>
        </div>
    </div>
</body>


</html>