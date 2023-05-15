<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>MEDIWARE</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="user_res/assets/css/maicons.css">

  <link rel="stylesheet" href="user_res/assets/css/bootstrap.css">

  <link rel="stylesheet" href="user_res/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="user_res/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="user_res/assets/css/theme.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!--admin css-->

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    
    @include('schemes.topbar')

    @include('schemes.navbar')

    <div class="container-fluid page-body-wrapper">
      <div class="container">
        <h2 class="text-center my-4 wow fadeInDown">List of Schemes</h2>
        <div class="row justify-content-center">
          @foreach($category as $categories)
            <div class="col-md-3">
              <div class="card wow fadeInLeft mb-4" >
                <div class="p-2"><h5 class="card-header">CATEGORY {{$categories->id}}</h5></div>
                <div class="card-body ">
                  <h5 class="card-title">{{$categories->name}}</h5>
                  <a href="{{url('show_scheme',$categories->id)}}" class="btn btn-primary">More info</a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <style>
        .card-header {
          background-color:#007bff;
          font-size: 20px;
        }
        
      </style>
    </div>   


<script
 src="user_res/assets/js/jquery-3.5.1.min.js"></script>

<script src="user_res/assets/js/bootstrap.bundle.min.js"></script>

<script src="user_res/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="user_res/assets/vendor/wow/wow.min.js"></script>

<script src="user_res/assets/js/theme.js"></script>

<script src="https://code.jquery.com/jquery-2.1.3.js"></script>

<script src="js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>