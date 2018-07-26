@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" style="width:18rem;">Java Todo List with GUI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col" style="width:14rem;">Description of the project</td>
                        <td>Build an simple application that keeps track of your activies. Like a todo list.</td>
                    </tr>
                    <tr>
                        <td>Scope</td>
                        <td>
                            A user can make a new activity. An activity has a short description field, a textarea and a datefield.
                            The data should be stored in a text file. When you open the application the activities are shown in order by date.
                            Activities that are expire this day should be marked in red. Activities that expire tomorrow should be marked in orange.
                            Beyond tomorrow is marked in black. An user can delete an activity by right mouse clicking or using
                            the delete key. An user can filter today's activities. When the program starts it should pupulate the list automatically.
                            When the program is terminated it should save all changes made.
                        </td>
                    </tr>
                    <tr>
                        <td>Goals</td>
                        <td>Using Java to make a small application. To get comfortable to use it.</td>
                    </tr>
                    <tr>
                        <td>Used languages</td>
                        <td>Java, JavaFx
                        </td>
                    </tr>
                    <tr>
                        <td>Knowledge before</td>
                        <td>
                        The basics in OOP, Java Collections and JavaFX.
                        </td>
                    </tr>
                    <tr>
                        <td>Knowledge after</td>
                        <td>
                        Understanding in: observableArrayList, DateTimeFormatter, cellFactory and Predicate.
                        Better Understanding in JavaFX.
                        </td>
                    </tr>
                    <tr>
                        <td>The most fun part?</td>
                        <td>Making a graphical user interface</td>
                    </tr>
                    <tr>
                        <td>GitHub</td>
                        <td><a href="https://github.com/BasLaravel/TodoList" target="_blank">To GitHub</a></td>
                    </tr>
                </tbody>
        </table>
    </div>

 <!-- Button trigger modal -->
    <div class="row mt-3">
            <div class="col" >
                <a href="#" class="" role="button" data-toggle="modal" data-target="#exampleModalCenter">
                <font size="4">Play video of project</font></a>
            </div>
    </div>




    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Video of the project. Click on enlarge for full screen modus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                    <div class="modal-body">
                      <video controls
                      controlsList="nodownload"
                        muted
                        src=/video/TodoList.mp4
                        width="80%"
                        height="80%">
                        Sorry, your browser doesn't support embedded videos.
                    </video>
                    </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
      @endsection