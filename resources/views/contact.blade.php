<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>

body{
        font-family: "Times New Roman", Times, serif;
        background-color: cyan;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        padding: 0;
        background-image: url('https://i.pinimg.com/originals/fa/c7/6a/fac76a264e8c30cba664d10eecb85f77.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        overflow: hidden;
        
    }
    </style>

</head>
<body>
<div class="header">
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item name"><i><b>Library Management System</b></i></li>
                    
                <li class="nav-item center "><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="log"><i class="fa fa-user-circle" style='font-size:24px' aria-hidden="true"></i></a></li>
            
            </ul>
        </nav>
    </div>
  <div class="container">
    <h1>Login</h1>
    <form action="{{ route ('login.store') }}" method="post">
    @csrf
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <a href="select">
          <input type="submit" value="Login">
        </a>
      </div>
      <div class="form-group message">
        Don't have an account? <a href="#">Sign up</a>
      </div>
    </form>
  </div>
</body>
</html>
