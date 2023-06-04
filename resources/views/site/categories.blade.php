<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- {{-- fontawesome ko css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/fontawesome/all.css') }}">

    <!-- {{-- bootstrap ko css link gareko --}} -->
    <link rel="stylesheet" href="{{ asset('site/bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/category.css')}}">
</head>
<body>
<div class="category">
   <div class="top">
         <div class="left">
            <h2>Category</h2>
         </div>
         <div class="right">
            <img src="{{ asset('site/image/vegetable.jpg')}}" alt="">
         </div>
      </div>
   </div>
   <div class="bottom">
      <div class="items">
         <div class="row">
            <div class="col-3 left">
               <h2>Vegetables</h2>
            </div>
            <div class="col-8 right">
                  
            </div>
         </div>
      </div>
      
      <div class="items">
         <div class="row">
            <div class="col-3 left">
               <h2>Fruits</h2>
            </div>
            <div class="col-8 right">
                  
            </div>
         </div>
      </div>

      <div class="items">
         <div class="row">
            <div class="col-3 left">
               <h2>Spices</h2>
            </div>
            <div class="col-8 right">
                  
            </div>
         </div>
      </div>

      <div class="items">
         <div class="row">
            <div class="col-3 left">
               <h2>Other items</h2>
            </div>
            <div class="col-8 right">
                  
            </div>
         </div>
      </div>
   </div>
</div>
    <!-- {{-- jquery link gareko --}} -->
    <script src="{{ asset('site/jquery/jquery.js') }}"></script>

    <!-- {{-- proper js ko javascript link gareko --}} -->
    <script src="{{ asset('site/bootstrap/proper.js') }}"></script>

    <!-- {{-- bootstrap ko javascript lai link gareko --}} -->
    <script src="{{ asset('site/bootstrap/bootstrap.js') }}"></script>


    <!-- {{-- fontawesome ko js link gareko --}} -->
    <script src="{{ asset('site/fontawesome/all.js') }}"></script>

    <!-- {{-- script.js link gareko --}} -->
    <script src="{{ asset('site/js/script.js') }}"></script>
</body>
</html>