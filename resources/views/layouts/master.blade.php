<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'Portfolio van Bas Kingma')}}</title>

        <!-- scripts -->
        <script src="/js/app.js" ></script>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">


        <style>

        #psd{
            position: absolute;
            top:80px;
            right:10px;
            width:12rem;
        }
  
            body {
                background-color: rgb(234,234,234);
                margin-bottom:5%;
            }

            .navbar{
                background-color: #2aaaed;
            }

            table{
                margin-top:20px;
            }

            .projects{
                margin-left:auto;
                margin-right:auto;
            }

            .dashboard {
                display:flex;
                background:#ffffff;
                margin-top: 50px;
                margin-left:auto;
                margin-right:auto;
                margin-bottom:50px;
                padding-top: 10px;
                padding-bottom: 10px;
                width:90%;
              
            }
            #layoutblue{
                background-color: #2aaaed;
                height: 18rem;
                margin:-2%;
            }

            #linken{
                display: flex;
            }

            #linken a{
                margin-top:2rem;
                margin-left:auto;
                margin-right:auto;
            }

            #profieltekst{
                display: flex;
            }
            #profieltekst p{
                margin:auto;   
                padding:2%; 
            }

            #foto {
                display: flex;
            }
            #foto img{
                width:70%;
                height: 80%;
                margin: auto;
            }

            .list-group-item a{
                color:black;
            }

            .productfoto{ 
                border: 1px solid black; 
            }

            .carousel-control-prev-icon,
            .carousel-control-next-icon {
            height: 100px;
            width: 100px;
            outline: none;
            background-size: 100%, 100%;
            border-radius: 50%;
            border: none;
            background-image: none;
            }

            .carousel-control-next-icon:after
            {
            content: '>';
            font-size: 35px;
            color: black;
            }

            .carousel-control-prev-icon:after {
            content: '<';
            font-size: 35px;
            color: black;
            }

            .carousel-indicators li{
            background-color: gray;
            }

            .carousel-indicators .active {
            height: 6px;
            background-color:black;
            }

            .card-wrapper{
                display:flex;
                margin-right: 1.8rem;
                margin-bottom:3rem;
                padding:0;
            }

            .layoutorange{
                background-color:#0066cc;
                height:100%; 
                width:1rem;
                margin-right:-2px;
                padding:0;
                margin:-2%;
            }
           
            .layoutcard{
                background-color: rgb(234,234,234);
                width:14rem;
                padding:0;
            }

            .card,
            .card-img-top{
                border-radius: 0px 0px 0px 0px;
            }

        </style>
    </head>

    <body>
        <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ url('/')}}">
                <img src="/images/home.png" alt="Home" style="width:30px;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"></li>
                </ul>
            </div>
        </nav>
  

        <div class="container">
            @yield('content')
        </div>

      

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
            </div>
        </div>
</html>



  <!-- footer -->
        <!-- <div class="footer container-fluid">
            <div class="row mt-3">
                <div class="col" >
                    <!-- Button trigger modal
                    <a href="#" class="" role="button" data-toggle="modal" data-target="#exampleModalCenter"><font size="4">Contact</font></a>
                </div>
                <div class="col row">
                    <p class="copyright ml-auto">&copy; Copyright 2018</p>
                </div>
            </div>
        </div> -->
