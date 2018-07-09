
@extends('layouts.master')

@section('content')

 <div class="container">
    <div class="row">
        <!-- dashboard -->
        <div id="dashboard" class="col-md-6 mr-auto ml-auto">
            <div id="cut" class="col-md-4">
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Project CNC -->
        <div class="card col-md-3.5 m-2 project" style="width: 14rem;">
            <div class="card-body">
                <h5 class="card-title">Projects</h5>
                <p class="card-text">These are my larger projects done with CNC G-Code</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="#">Manhole Ring & Cover</a></li>
                <li class="list-group-item"><a href="#">2 #</a></li>
            </ul>
        </div>
     

        <!-- Project PHP -->
        <div class="card col-md-3.5 m-2 project" style="width: 14rem;">
            <div class="card-body">
                <h5 class="card-title">Projects</h5>
                <p class="card-text">These are my projects bases on: HTML, CSS, Javascript, PHP, MySQL</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/test">Forum-Laravel</a></li>
                <li class="list-group-item"><a href="/name">2 #</a></li>
            </ul>
        </div>


        <!-- Project Java -->
        <div class="card col-md-3.5 m-2 project" style="width: 14rem;">
                <div class="card-body">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text">These are my projects bases on Java</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Java app</a></li>
                    <li class="list-group-item"><a href="#">2 #</a></li>
                </ul>
        </div>
    </div>
</div>


@endsection

