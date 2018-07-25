@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" style="width:18rem;">Laravel based webshop</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col" style="width:14rem;">Description of the project</td>
                        <td>Build a webshop with basic functionality. And an admin backend.</td>
                    </tr>
                    <tr>
                        <td>Scope</td>
                        <td>Design a web forum with all the basis functionality: See all products divided into three product categories,
                        login/register functionality, A user can select a product. That product is then 'added' into the shopping basket. A user can view their shopping
                        basket. And edit the number of articles in the basket. The admin backend has the following functionality:
                        See all products, edit a product, delete a product, add a new product, export the list of all products, view all uploaded product images
                        (on hovering the image should enlarge), delete an image and export the list of images. 
                        </td>
                    </tr>
                    <tr>
                        <td>Goals</td>
                        <td>Learn to use Laravel 5.6. Get a basic understanding of MVC and CRUD.
                        Learn to import a package using composer. </td>
                    </tr>
                    <tr>
                        <td>Used languages</td>
                        <td>HTML 5, PHP (Laravel-framework), MySQL, HTML and CSS
                        </td>
                    </tr>
                    <tr>
                        <td>Knowledge before</td>
                        <td>Some knowledge of laravel, basis understanding of MySQL, jQuery, HTML and CSS.
                        </td>
                    </tr>
                    <tr>
                        <td>Knowledge after</td>
                        <td>Basis understanding of controllers, model, migrations, blade-files and routes.
                        </td>
                    </tr>
                    <tr>
                        <td>The most fun part?</td>
                        <td>'Discovering' the laravel framework. And experiencing the benefit/power of it.
                        Import the LaravelShoppingcart package (Crinsane) and work with it.</td>
                    </tr>
                    <tr>
                        <td>GitHub</td>
                        <td><a href="#" target="_blank">Coming soon</a></td>
                    </tr>
                </tbody>
        </table>
    </div>

       <!-- photos-->
       <div class="row mt-3 mb-5">
            <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/images/cart.png"  alt="Los Angeles">
                        </div>
                        <div class="carousel-item ">
                            <img class="d-block w-100" src="/images/admindashboard.png"  alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/newproduct.png"  alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/images/allproducts.png"  alt="Los Angeles">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>

            </div>      
        </div> 

                           
</div>

    @endsection