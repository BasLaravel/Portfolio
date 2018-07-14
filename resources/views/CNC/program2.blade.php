@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col" colspan="2" style="width:18rem;">Making an inner radius using a ball nose mill</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="col" style="width:14rem;">Description of the project</td>
                    <td>Make a program that mills a radius on a round shaped object</td>
                </tr>
        
                <tr>
                    <td>Scope</td>
                    <td>The mill should start on top of the material, the outer circumference
                    and working it's way to the inner circumference.
                    The following variables should be used and should be adjustable: product start radius/circumference, the product radius,
                    the ball nose mill radius and the roughness defined by the shift in degree's.
                    </td>
                </tr>
                <tr>
                    <td>How to do it?</td>
                    <td>Making use of the trigonometric functions sine and cosine</td>
                </tr>
                <tr>
                    <td>The most fun part?</td>
                    <td>The most fun part was to determine the mathematical algorithm.</td>
                    </tr>
                    <tr>
                    <td>What did I learn?</td>
                    <td>By doing the match first. And determine the algorithm. You can easily translate that to a working program.</td>
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
            <img class="productfoto" src="/images/radius.jpg" alt="product image" style="width:40%; height:300px;">
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
                        <embed src="/cnc/pr2.txt" width="100%" height="400px">
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>








</div>
      @endsection