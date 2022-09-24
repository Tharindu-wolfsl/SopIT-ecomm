<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce website</title>
    <!-- CSS only -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .login-card{   
        margin-top: 100px;
        margin-bottom: 200px;
    }
    .login-card .row{
        margin: 0 auto;
        justify-content: center
    }
    img.slider-img{
        height: 80vh;
        width: 60% !important;
    }
    div.carousel-caption{
        background-color: rgba(0, 0, 0, 0.24);
    }
    .carousel{
        margin-bottom: 60px;
    }
    .t-item img{
        width: 100px;
        height: 100px;
    }
 
    .trending-items h2{
        margin: 10px 0px;
    }
    .t-item p{
        margin: 5px 0px;
    }
    .t-item{
        float: left;
        padding: 10px;
        margin: 0px 20px;
    }
    .detail-img{
        width: 400px;
        height: 400px;
    }
    .detail-box{
        display: flex;
        flex-direction: column;
        height: 500px;
        justify-content: space-between;
        padding: 40px;
    }
    .btn{
        width: 45%;
    }
   
</style>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js">


</body>
</html>