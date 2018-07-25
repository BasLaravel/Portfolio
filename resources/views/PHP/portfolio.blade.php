@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" colspan="2" style="width:18rem;">My Portfolio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col" style="width:14rem;">Description of the project</td>
                    <td>Built a portfolio.</td>
                </tr>
                <tr>
                    <td>Scope</td>
                    <td>Built a portfolio. Divide my projects into categories; CNC, Web development and Java.
                    </td>
                </tr>
                <tr>
                    <td>Goals</td>
                    <td>Learn how to use Heroku with Laravel and Node.js</td>
                </tr>
                <tr>
                    <td>Used languages</td>
                    <td>HTML 5, CSS, PHP (Laravel-framework), bootstrap 4
                    </td>
                </tr>
                <tr>
                    <td>The most fun part?</td>
                    <td>Creating a portfolio so people can see my projects and learning progress. 
                    Learning to set up Heroku with Laravel and Node.js</td>
                </tr>
                <tr>
                    <td>GitHub</td>
                    <td><a href="#" target="_blank">Coming soon</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

    @endsection