<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap"
    rel="stylesheet"
  />
</head>
<link rel="stylesheet" href="index.css">
<body>
   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">ROHIT YADAV</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#index.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Sevices</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php">Gallery</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </nav>
  <section class="my-5">
    <div class="py-5">
        <h2 class="text-center">contact for to make website</h2>
</div>

<div class="w-50 m-auto">

<form action="userinfo.php" method="Post">
  <div class="form-group">
    <label>User name</label>
    <input type="text" name="user" autocomplete="off" class="form-control">
    

  </div>
  <div class="form-group">
    <label>Email Id</label>
    <input type="text" name="Email" autocomplete="off" class="form-control">
    

  </div>
  <div class="form-group">
    <label>Mobile Number</label>
    <input type="text" name="Mobile" autocomplete="off" class="form-control">
    

  </div>
  
  <div class="form-group">
    <label>Comment</label>
    <textarea class="form-control" name="Comment"></textarea>
    

  </div>
  <button type="submit" class="btn btn-success">Submit</button> 
</form> 
</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@rohityadavWebdevlloper</p>
</footer>

</body>
</html>
