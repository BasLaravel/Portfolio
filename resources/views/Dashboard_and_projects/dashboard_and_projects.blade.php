
@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row dashboard">
        <!-- dashboard -->
        <div id="layoutblue" class="col-lg-1"></div>
        <div id="linken" class="col-lg-2">
            <a class="" href="{{ url('/cv')}}">
                <img src="/images/cv-image2.png" alt="Home">
            </a>
        </div>
        <div id="profieltekst" class="col-lg-5 ">
            <p>Het meest interessante gedeelte van mijn
                werk als CNC frezer vond ik het schrijven van
                CNC programma's. Hierop ben ik begonnen
                met mijn fulltime studie webdevelopment. Ik
                merkte al snel dat het leren van
                programmeertalen mij goed ligt. Al In korte
                tijd bouwde ik webapplicaties. Op het
                moment ben ik een maatwerktraject bij
                CodeGorilla begonnen, om mezelf als
                programmeur nog beter neer te kunnen
                zetten. Een erg gaaf aspect hierin is het
                schrijven van java-applicaties. Na mijn
                afstudeeropdracht in augustus 2018 wil ik zo
                snel mogelijk aan de slag bij mijn toekomstige
                werkgever.
            </p>
        </div>
        
        <div id="foto" class="col-lg-4">
            <img src="/images/bas.jpg" alt="Profielfoto">
        </div>
    </div>

         <div >
            <img id="psd" src="/images/psd.jpg" alt="psd certificate">
        </div>


    <div class="row projects">
        <!-- Project CNC -->
        <div class="col-md-3.5 card-wrapper">
            <div class="layoutorange" ></div>
            <div class="card layoutcard">
                <img class="card-img-top" src="/images/drilling.gif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text">These are some of my CNC projects were I used macro's with/in HAAS G-Code</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/cnc/program1">Multifunctional program for circular manholes</a></li>
                    <li class="list-group-item"><a href="/cnc/program2">Making an inner radius using a ball nose mill</a></li>
                </ul>
            </div>
        </div>

        <!-- Project PHP -->
        <div class="col-md-3.5 card-wrapper">
            <div class="layoutorange" ></div>
            <div class="card layoutcard">
                <img class="card-img-top" src="/images/business.gif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text">These are my projects based on: HTML, CSS, Javascript, PHP, MySQL</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/php/portfolio">My Portfolio</a></li>
                    <li class="list-group-item"><a href="/php/forum">Web Forum</a></li>
                    <li class="list-group-item"><a href="/php/webshop">Webshop</a></li>
                </ul>
            </div>
        </div>


        <!-- Project Java -->
        <div class="col-md-3.5 card-wrapper">
            <div class="layoutorange" ></div>
            <div class="card layoutcard">
                <img class="card-img-top" src="/images/learning.gif" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Projects</h5>
                    <p class="card-text">These are my projects based on Java</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/java/todolist">Java Todo List application</a></li>
                    
                </ul>
            </div>
        </div>

             <!-- Actueel -->
        <div class="col-md-3.5 card-wrapper">
            <div class="layoutorange" style="background-color:#ff8b5f" ></div>
            <div class="card layoutcard" >
                <img class="card-img-top" src="/images/recentnewsedit.gif"  alt="Card image cap">
                <div class="card-body">
                <h5 class="card-title">What's new?</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="/psd">Past the PSD 1 assessment</a></li>
                    <li class="list-group-item"><a href="#"></a></li>
                    <li class="list-group-item"><a href="#"></a></li>
                    <li class="list-group-item"><a href="#"></a></li>
                    <li class="list-group-item"><a href="#"></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>


@endsection

