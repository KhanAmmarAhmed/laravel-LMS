<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
       
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Styles -->
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
    * {box-sizing: border-box;}
    a{
        text-decoration: none;
    }

   .navbar {
  background-color: rgb(37, 150, 190);
  height: auto;
  background-attachment: static;
  position: fixed;
  width: 100%;
}

.navbar-nav {
  display: flex;
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.nav-item {
  margin-right: 10px;
  font-size: 20px;
}
.center{
    margin-left: 600px;
}
.name{
    font-size: 30px;  
    color: white;
    padding-left: 1vw;
    width: 30vw;
    position: relative;
    top: 5px;

}

.nav-link {
  color: #fff;
  text-decoration: none;
  padding: 2vh;
  display: inline-block;
}


.nav-link:hover {
  background-color:  rgb(70, 170, 180);
  color: black;
  text-decoration: none;
}
.main{
    
    flex: 1;
    color: white
}
.container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
    }

.search{
    width: 700%;
    height: 100px;
    position: relative;
    display: flex;
    justify-content: auto;
    top: 100px;
    
}
.form-control{
    width: 500px;
    height: 50px;
    border-radius: 30px 0 0 30px;
}


.btn{
    width: 70px;
    height: 50px;
    border-radius: 0 30px 30px 0;
}

.heading{
    position: relative;
    display: flex;
    justify-content: center;
    font-size: 30px;
    padding: 10px;
    margine-bottom: -10px;

}

.footer {
  background-color: rgb(70, 170, 180);
  color: black;
  text-align: center;
  font-size: 2vh;
  height: 20px; 
}


.flip-card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      
    }

    .flip-card {
      perspective: 1000px;
      width: 300px;
      height: 400px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.2s;
      transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(90deg);
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;

    }

    .flip-card-back img {
      width: 100%;
      height: 100%;
      object-fit: contain;
    }


    .flip-card-front {
      background-color: #f1f1f1;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      color: white;
    }
    .flip-card-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .flip-card {
      perspective: 1000px;
      width: 300px;
      height: 200px;
    }

    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 0.6s;
      transform-style: preserve-3d;
    }

    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
      
      transform-style: preserve-3d;
    }
    .flip-card:hover .flip-card-inner .flip-card-back {
        backface-visibility: hidden;
    }

    .flip-card-front,
    .flip-card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    .flip-card-front {
      background-color: black;
      color: white:
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 24px;
      opacity: 0.7;
      
      transform: rotateY(180deg);
    }
    .flip-card-front a{
    color: white;
    font-size: 28px;
    }

 </style>
</head>
<body>
    <div class="header">
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item name"><i><b>Library Management System</b></i></li>
                    
                <li class="nav-item center "><a class="nav-link" href="/book-index">Books</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="log"><i class="fa fa-user-circle" style='font-size:24px' aria-hidden="true"></i></a></li>
            
            </ul>
        </nav>
    </div>
    <div class="main">
        <div class="container">
            <div>
                <form action="/" class="search">
                    <div>
                    <input class="form-control" type="text" placeholder="Search.." name="search" autocomplete="off">
                    </div>
                    <div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </div>                   
                </form>
            </div>
            
        </div>

        <div class="heading"><b>Trending Books</b></div>
        <hr>
        


        
            <div class="flip-card-container">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <a href="https://thegreatestbooks.org/lists/44">Famous story book.</a>
                        
                        </div>
                        <div class="flip-card-back">
                        <img src="https://cdn.shopify.com/s/files/1/0640/7123/7846/products/91vTgugLZRL.jpg?v=1652863218" alt="Image 1" />
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <a href="https://www.britannica.com/list/12-novels-considered-the-greatest-book-ever-written">Famous book of the year.</a>
                        
                        </div>
                        <div class="flip-card-back">
                            
                        <img src="https://i.guim.co.uk/img/media/77e3e93d6571da3a5d77f74be57e618d5d930430/0_0_2560_1536/master/2560.jpg?width=1200&height=900&quality=85&auto=format&fit=crop&s=c99740fab952ee29d238d75272b98a61" alt="Image 2" />
                     
                        </div>
                    </div>
                </div>

                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <a href="https://thegreatestbooks.org">Famous novel of the year.</a>
                        
                        </div>
                        <div class="flip-card-back">
                        <img src="https://www.bookgeeks.in/wp-content/uploads/2020/06/Best-Indian-Books-by-Indian-Authors-1-1024x768.jpg" alt="Image 3" />
                        </div>
                    </div>
                </div>
            </div>

    </div>
    <div class="footer">
        
    <p>&copy; 5/20/2023 created by @khan. All rights reserved.</p>

    </div>
</body>
</html>

