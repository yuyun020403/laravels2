@extends('template/main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>about</title>
</head>
<body> 
<main>
<div class="row align-items">
    <div class="col-md-7">
          <img src="/img/jeruk5.png" alt="" height="400" class="h-100 p-5 ">
   </div>
   <div class="col-md-5 ">
    <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">Healty life with ORANGE</h1>
    <h4 style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: grey;">It is the best choice of oranges from the best gardens and maintains its authenticity</h4>
   </div>
</div>
    <br>
    <div class="row align-items">
    <div class="col-md-8 ">
    <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">As bright as your DAYS</h1>
    <h4  style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: grey;">with a bright orange color that will make your days feel  happier plus its natural vitamin c content so that it makes your immune system more awake from busy activities, <b>REMEMBER to make sure your favorite color is ORANGE</b></h4>
   </div>
    <div class="col-md-4">
          <img src="/img/jeruk6.png" alt="" height="400" class="h-100 p-5 ">
   </div>
</div>
</main>
<div class="container">
  <footer class="py-3 my-4 ">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
      <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
    </ul>
    <p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
  </footer>
</div>
</body>
</html>
@endsection