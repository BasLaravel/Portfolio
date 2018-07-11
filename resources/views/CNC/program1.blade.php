@extends('layouts.master')

@section('content')


<table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Tabel</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Description of project</td>
            <td>Make a program that mills a radius on a round shaped object</td>
          </tr>
          <tr>
            <td>Goals</td>
            <td>How to use math to calculate the mill paths</td>
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

      @endsection