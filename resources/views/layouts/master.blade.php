<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{config('app.name', 'Laravel')}}</title>

        <script src="/js/app.js" ></script>

        <!-- Fonts -->
        <link href="/css/app.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
         -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script> -->

        <!-- Styles -->
        <style>
         /* .videoContainer {
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                z-index:-1;
                }

                iframe {
                 
                width: 100%;
                height: 100%; 
                } */

            body {
                background:radial-gradient(circle,rgb(255, 255, 255),rgb(73, 119, 172));
            }

            #dashboard {
                display:flex;
                background:rgb(160, 160, 160);
                margin: 50px;
                padding: 0;
                height: 18rem;
                border-radius: 10px 10px 10px 10px; 
            }

            #cut{
                background-color: white;
                height: 8rem;
                border-radius: 10px 0 10px 0px;
                margin-left: auto;
                margin-top:auto;
                background:rgb(124, 167, 216);
            }

            .footer{
                position:absolute;
                background-color:rgb(56,56,56);
                bottom:0;
                left:0;
                right:0;
                height: 65px;
            }

            .copyright{
                color:#0066cc;
                margin-right: 2%;
            }

            .project{
                background-color:#67dbeb;   
            }

            /* .projects{
                position:absolute;
                bottom:10rem;
                left:0;
                right:0;
            } */
        
        </style>
    </head>

    <body>

        <!-- <div class="videoContainer">
                <iframe width="1920" height="1080" 
                src="https://www.youtube.com/embed/videoseries?list=PLCPhqEUKuUo7lAtXkSXQyNtBH5xBNhL_m&autoplay=1&loop=1&controls=0&showinfo=0"
                ></iframe> 
        </div>   -->

        <!-- Nav -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                </ul>
            </div>
        </nav>
  
<!-- <div id="app">
    <example-component>sf</example-component>
   </div> -->

  
        <div class="container">
            @yield('content')
        </div>

        <!-- footer -->
        <div class="footer container-fluid">
            <div class="row mt-3">
                <div class="col" >
                    <!-- Button trigger modal -->
                    <a href="#" class="" role="button" data-toggle="modal" data-target="#exampleModalCenter"><font size="4">Contact</font></a>
                </div>
                <div class="col row">
                    <p class="copyright ml-auto">&copy; Copyright 2018</p>
                </div>
            </div>
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


        <!-- scripts -->
        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script> -->

    </body>

</html>