@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" colspan="2" style="width:18rem;">Multifunctional program for circular manholes</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="col" style="width:14rem;">Description of the project</td>
                    <td>Make a program for producing circular manholes of different diameters and thicknesses.</td>
                </tr>
                <tr>
                    <td>Scope</td>
                    <td>The program should have an interface for controlling the parameters of the product.
                    Include a boolean parameter if the product should be measured with a automatic probe. Make sure the following
                    functionality is included: milling to the desired inner diameter inclusief finish option, surface milling,
                    circular chamber of 8 mm or 6.8 mm with deburring option, a chamber starting from the inside, a pitch circle
                    with threaded holes.
                    </td>
                </tr>
                <tr>
                    <td>How to do it?</td>
                    <td>Detertime all possible machining operations. And insert the correct values through parameters.</td>
                </tr>
                <tr>
                    <td>The most fun part?</td>
                    <td>The most fun part was to determing all possible product options. So it doesn't matter of you want machine
                    a complex product or a product that requires only a few machine operations.</td>
                    </tr>
                    <tr>
                    <td>What did I learn?</td>
                    <td>To really think through all possible product options. And make the interface as clear of possible.</td>
                    </tr>
                </tbody>
        </table>
    </div>


    <!-- Button trigger modal -->
    <div class="row mt-3">
            <div class="col" >
                <a href="#" class="" role="button" data-toggle="modal" data-target="#exampleModalCenter"><font size="4">Code</font></a>
            </div>
    </div>

      <!-- photos-->
      <div class="row mt-3">
        <div class="col" >
            <img class="productfoto" src="/images/gring.jpg" alt="product image" style="width:40%; height:300px;">
            <img class="productfoto" src="/images/kring.jpg" alt="product image" style="width:40%; height:300px;">
        </div>
    </div>
      
     


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">The G-code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                    <div class="modal-body">
                        <embed src="/cnc/pr1.txt" width="100%" height="400px">
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>








</div>
      @endsection