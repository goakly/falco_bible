<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="container-md">

    <div id="myCarousel" class="carousel slide" data-toggle="carousel" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <h1>
                    WELCOME TO THE INAUGURAL
                </h1>
                <img src="/img/Applympics%20Logo%20color.png" alt="Chania">


            </div>

            <div class="item">
                <h1>
                    NOW ACCEPTING TEAM SIGN UPS!
                </h1>
                <center>
                    <h3>
                        Sign ups for events are now open! Click the button below to sign up for an event!
                    </h3>
                    <br>
                    <br>
                    <br>
                    <a class="btn btn-warning btn-lg" href="/players/add">Sign Up!
                    </a>
                </center>
            </div>

            <div class="item">
                <h1>
                    TICKETS ARE NOW ON SALE!
                </h1>
                <center>
                    <h3>
                        Tickets are now available! Click on the button below to get tickets to your favorite event!
                    </h3>
                    <br>
                    <br>
                    <br>
                    <a class="btn btn-success btn-lg" href="/ticket/">Get Tickets!
                    </a>
                </center>
            </div>

            <div class="item">
                <h1>
                    WANT TO SPONSOR AN EVENT?
                </h1>
                <center>
                    <h3>
                        Wish to have your business advertised at an event? Click the button below to find out how!
                    </h3>
                    <br>
                    <br>
                    <br>
                    <a href="/sponsor/"><button class="btn btn-danger"> Sponsorship Information! </button> </a>
                </center>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br><br>
    <!-- Buttons -->
    <div class="btn-group btn-group-justified" id="responsive">
        <a class="btn btn-primary" data-toggle="collapse" data-target="#demo">What is the Applympics?
        </a>

        <a class="btn btn-warning" data-toggle="collapse" data-parent="#accordion" data-target="#when">When is the
            Applympics?
        </a>


        <a class="btn btn-default" data-toggle="collapse" data-target="#events">What are the events?
        </a>


        <a class="btn btn-success" data-toggle="collapse" data-target="#signup">Who can participate?
        </a>


        <a class="btn btn-danger" data-toggle="collapse" data-target="#attend">How can I attend?
        </a>

    </div>
    <div id="demo" class="well collapse">

        <h1 class="transform transformX(50%)">What is the Applympics?</h1>
        <center>
            <h3> The Applympics is an annual event when which brings together the student body of Appalachian State
                university in an evironment of fun and friendly competition. Clubs choose to fund events which students
                compete in. This gets student actively involved while raising awareness for on campus clubs and
                organizations.</h3>
        </center>


    </div>
    <div id="when" class="well collapse">

        <h1 class="transform transformX(50%)">When is the Applympics?</h1>

        <div class="month">
            <ul>
                <center>
                    <li>
                        April<br>
                        <span style="font-size:18px">2018</span>
                    </li>
                </center>

            </ul>
        </div>

        <ul class="weekdays">
            <li>Su</li>
            <li>Mo</li>
            <li>Tu</li>
            <li>We</li>
            <li>Th</li>
            <li>Fr</li>
            <li>Sa</li>
        </ul>

        <ul class="days">
            <li>1</li>
            <li>2</li>
            <li>3</li>
            <li>4</li>
            <li>5</li>
            <li>6</li>
            <li>7</li>
            <li>8</li>
            <li><span class="active">9</span></li>
            <li><span class="active">10</span></li>
            <li><span class="active">11</span></li>
            <li><span class="active">12</span></li>
            <li><span class="active">13</span></li>
            <li>14</li>
            <li>15</li>
            <li>16</li>
            <li>17</li>
            <li>18</li>
            <li>19</li>
            <li>20</li>
            <li>21</li>
            <li>22</li>
            <li>23</li>
            <li>24</li>
            <li>25</li>
            <li>26</li>
            <li>27</li>
            <li>28</li>
            <li>29</li>
            <li>30</li>
        </ul>
    </div>
    <div id="events" class="well collapse">

        <h1 class="transform transformX(50%)">What are the Events?</h1>
        <center>
            <h3>The Applypics hosts a wide variety of events in which to compete. From Basketball, to Rockclimbing, to
                Triva, to
                Video Game Tournaments, and beyond, there is an event for you. The complete list of events can
                be found by pressing the button below.</h3>

            <a href="/events/"><button class="btn btn-danger"> Complete Event List </button> </a>

        </center>

    </div>
    <div id="signup" class="well collapse">

        <h1 class="transform transformX(50%)">Who can participate?</h1>
        <center>
            <h3> The Applympics is open to all students and staff. Anyone currently enrolled or employed at Appalachian
                State my register for events. While members of the general public are unable to compete, they welcome to
                come show their support by purchasing a ticket.</h3>
        </center>

    </div>

    <div id="attend" class="well collapse">

        <h1 class="transform transformX(50%)">How can I attend?</h1>
        <center>
            <h3> Tickets for the Applympics are for sale online. Press the button below to continue on to the
                store.</h3>
        </center>

        <center>
            <a href="/ticket/"><button class="btn btn-success"> Purchase Tickets! </button> </a>
        </center>
    </div>
</div>
