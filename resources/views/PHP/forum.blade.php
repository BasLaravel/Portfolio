@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col" colspan="2" style="width:18rem;">Laravel & Vue bases web forum</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="col" style="width:14rem;">Description of the project</td>
                        <td>Built a user forum. With basis functionality. And expand the project according to the scope.</td>
                    </tr>
                    <tr>
                        <td>Scope</td>
                        <td>Design a web forum with all the basis functionality: Register page, login page, remember me, password recovery,
                        Post a thread, reply to a thread, see all threads, edit functions like: delete and update. Expand the forum with the following functionality:
                        an user should confirm by email, a profile page with recent activities and the option to upload an avatar, browse threads bases on 'my threads', 'unanswered threads',popular threads,
                        subscribe to a thread, name someone in a thread of reply, automatic name generation, notify subscribers if there is a new reply, 
                        notify users when they are mentioned, spam protection, a reply can be liked, a reply can be selected as the 'best answer',
                        show the top 5 popular threads, hardcode an admin name make sure the admin can lock a thread.
                        </td>
                    </tr>
                    <tr>
                        <td>Goals</td>
                        <td>Learn to fully understand eloquent-relationships and model-structures,
                        php classes, event-listeners, email mark-down, custom blade syntax, policies,
                        notifications, laravel-structures and Vue-structures.</td>
                    </tr>
                    <tr>
                        <td>Used languages</td>
                        <td>HTML 5, Vue 2.*,PHP (Laravel-framework), bootstrap 4, MySQL, Axios,
                        some redis
                        </td>
                    </tr>
                    <tr>
                        <td>Knowledge before</td>
                        <td>Basis understanding of controllers, model, migrations, blade-files and routes
                        </td>
                    </tr>
                    <tr>
                        <td>Knowledge after</td>
                        <td>Great understanding of eloquent-relationships, policies, middleware, Providers,
                         blade custom syntax,  php classes structures like: Inspections, Events, Listeners, Mail,
                          Traits, Notifications and models. How to use Redis.
                        </td>
                    </tr>
                    <tr>
                        <td>The most fun part?</td>
                        <td>Understanding and working with Polymorphic Relations.
                         Setting up all of the routes. Design the automatic name fetching in textarea-fields. Learning Vue 2.*.</td>
                    </tr>
                    <tr>
                        <td>GitHub</td>
                        <td><a href="https://github.com/BasLaravel/forumVue" target="_blank">To GitHub</a></td>
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
                        src=/video/vidforum.mp4
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