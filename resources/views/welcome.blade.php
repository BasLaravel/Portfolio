<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        

        <!-- Styles -->
        <style>
         .videoContainer {
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
                /* optional */
                width: 100%;
                height: 100%; 
                }

      
        </style>
    </head>
    <body>

<!-- <iframe style="position: absolute; top: 0; left: 0;"
src="https://www.youtube.com/embed/8HSr8BjcufM?autoplay=1&controls=0&loop=1&playlist=8HSr8BjcufM&amp;showinfo=0" 
width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->
 

<div class="videoContainer">
        <iframe width="1920" height="1080" 
        src="https://www.youtube.com/embed/videoseries?list=PLCPhqEUKuUo7lAtXkSXQyNtBH5xBNhL_m&autoplay=1&loop=1&controls=0&showinfo=0"
        frameborder="0"></iframe> 
   </div>  




   


        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

    </body>

</html>