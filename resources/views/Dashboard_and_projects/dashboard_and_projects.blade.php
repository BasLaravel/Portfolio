
@extends('layouts.master')

@section('content')

 <div class="container">
    <div class="row">
        <!-- dashboard -->
        <div id="dashboard" class="col-10 ml-auto mr-auto">
            <div class="row">
                    <div id="linken" class="col-sm-2">
                        <a href="/cv">CV</a>
                    </div>
                    <div id="profieltekst" class="col-sm-6 ">
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
                  
                    <div id="foto" class="col-sm-4">
                        <img src="/images/bas.jpg" alt="Profielfoto">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="row">
        <!-- Project CNC -->
        <div class="card col-md-3.5 m-2 project" style="width: 14rem;">
        <img class="card-img-top" src="/images/drilling.gif" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Projects</h5>
                <p class="card-text">These are some of my CNC project were I used macro's with/in HAAS G-Code</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="/cnc/program1">Multifunctional program for circular manholes</a></li>
                <li class="list-group-item"><a href="/cnc/program2">Making an inner radius using a ball nose mill</a></li>
            </ul>
        </div>
     

        <!-- Project PHP -->
        <div class="card col-md-3.5 m-2 project" style="width: 14rem;">
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


        <!-- Project Java -->
        <div class="card col-md-3.5 m-2 project" style="width: 14rem;">
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
</div>


@endsection

