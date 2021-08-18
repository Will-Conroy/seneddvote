@extends('Info.portfolio')

@section('header')
    <h1>Will</h1>
    <p>William Conroy's Portfolio</p>
@endsection


@section('personalInfo')
<div class=" container-fluid text-left">

        <div class="row ">
            <div class="col-sm-2 text-center">
           
            </div>
            <div class="col-sm-2 text-center">
                <img src="{{url('/will/profileSquare.jpg')}}" class="rounded-circle img-thumbnail  " alt="Profile Image"> 
            </div>
      
            <div class="col-sm">
                <h4 class="lead"> About Me</h4>
                <hr class="my-4">
                
                
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-sm-2 text-center">
                
            </div>
            <!--Links-->
            <div class="col-sm-2 text-left">
                <h4 class="lead"> Links</h4>
                <hr class="my-4">

                <div class="row  ">
                    <!--Linkedin-->
                    <div class="col-sm-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                        </svg>
                    </div>

                    <div class="col-sm">
                        <a href="https://www.linkedin.com/in/william-conroy-4071b2206/">
                            william-conroy-4071b2206
                        </a>
                    </div>
                </div>
                <!--Github-->
                <hr class="my-4">
                <div class="row">

                    <div class="col-sm-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </div>

                    <div class="col-sm">
                        <a href="https://github.com/Will-Conroy">
                            will-conroy
                        </a>
                    </div>
                </div>
                <!--Gmail-->
                <hr class="my-4">
                <div class="row">

                    <div class="col-sm-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-open-fill" viewBox="0 0 16 16">
                            <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
                        </svg>
                    </div>

                    <div class="col-sm">
                        <a href="william1conroy1@gmail.com">
                        william1conroy1@gmail.com
                        </a>
                    </div>
                </div>
                <hr class="my-4">
                <!--CV-->
                <div class="row">
                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                                <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                            </svg>
                        </div>

                        <div class="col-sm">
                            <a href="{{url('/will/WillCV.pdf')}}">
                                CV
                            </a>
                        </div>
                </div>



                <!--Phone-->
                <hr class="my-4">
                <div class="row">

                    <div class="col-sm-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-plus-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM12.5 1a.5.5 0 0 1 .5.5V3h1.5a.5.5 0 0 1 0 1H13v1.5a.5.5 0 0 1-1 0V4h-1.5a.5.5 0 0 1 0-1H12V1.5a.5.5 0 0 1 .5-.5z"/>
                        </svg>
                    </div>

                    <div class="col-sm">
                        +44 7597092334 
                    </div>
                </div>

            </div>
      
            <div class="col-sm">
                <h4 class="lead"> CV</h4>
                <hr class="my-4">
                <object data="{{url('/will/WillCV.pdf')}}" type="application/pdf" width="70%" height="400px"> 
                    <p>It appears you don't have a PDF plugin for this browser. Feel free to <a href="{{url('/will/WillCV.pdf')}}">click here to
                    download the PDF file.</a></p>  
                </object>
                
                </div>
            </div>
        </div>
        
    </div>  
    


    
    
</div>


@endsection

@section('personal')


<div class=" jumbotron jumbotron-fluid text-center ">
    <h2>Senedd Vote</h2>
    <hr class="my-4">

    <!--Senedd Vote-->
    <div class=" container-fluid text-left">
        <div class="row ">
        <div class="col-sm-2">
            <h4 class="lead"> Links</h4>
            <hr class="my-4">

            <!--Github-->
                <div class="row">
                    <div class="col-sm-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </div>

                    <div class="col-sm">
                        <a href="https://github.com/Will-Conroy/seneddvote">
                        Will-Conroy/seneddvote
                        </a>
                    </div>
                </div>
            <hr class="my-4">
            <!--dissertation-->
            <div class="row">
                    <div class="col-sm-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                            <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5v-11zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5H12z"/>
                            <path d="M2 3h10v2H2V3zm0 3h4v3H2V6zm0 4h4v1H2v-1zm0 2h4v1H2v-1zm5-6h2v1H7V6zm3 0h2v1h-2V6zM7 8h2v1H7V8zm3 0h2v1h-2V8zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1zm-3 2h2v1H7v-1zm3 0h2v1h-2v-1z"/>
                        </svg>
                    </div>

                    <div class="col-sm">
                        <a href="{{url('/will/dissertation.pdf')}}">
                            Dissertation
                        </a>
                    </div>
                
            <hr class="my-4">
            </div>
            </div>


            
            
            <div class="col-sm-4 justify-content-center">
            <img src="{{url('/will/SeneddVoteDemo.gif')}}" class="rounded float img-fluid" alt="Animated Gif of maps">
            </div>
            
            <div class="col-sm">
                
                    <h4 class="lead">Laravel - PHP, mySQL, JavaScript</h4>
                    <hr class="my-4">
                    <p>
                        Seneddvote.co.uk was a Web Application that started development as part of my dissertation at Swansea Uni. A copy of which can be found <a href="{{url('/will/dissertation.pdf')}}">
                            here
                        </a>, it of course goes into much more detail about my  development process.
                    </p>
                    <p>
                        The application takes voting data from <a href="https://business.senedd.wales/mgManageElectionResults.aspx">Welsh General Elections</a> and then stores them in a database. Then when displaying the data it models the results according to the Additional Member System. It is done this way, so that polling or hypothetical voting results can be added into the site and accurate results generated instantly.
                    </p>
                    <h4 class="lead">Features:</h4>
                    <ul>
                        <li>Accurately model results given voting data.</li>
                        <li>Store of a repository of historical election data.</li>
                        <li>Parties, Constituencies and Regions have dedicated pages displaying the models results.</li>
                        <li>Display the model’s election results with color-coded interactive map.</li>
                    </ul>
                    <p>
                        It was developed using a Model-View-Controller framework <a href="https://laravel.com/">Laravel</a>. A mySQL database was created to store all historical election data, which was then displayed using javascript’s <a href="https://leafletjs.com/">Leaflet</a> interactive maps.
                        This is an ongoing personal project. During my dissertation the application lived exclusively on a virtual server, on my own pc using <a href="https://www.virtualbox.org">Virtualbox</a>. Since then I have started hosting the site on <a href="https://www.hostinger.co.uk/">Hostinger</a>.
                    </p>
                    

                </div>
            </div>
        </div>
    </div>   
</div>


<div class=" jumbotron jumbotron-fluid text-center">
    <h2>Local Multiplayer Card Game</h2>
    <hr class="my-4">
    <div class=" container-fluid text-left">
        <div class="row ">
        <div class="col-sm-2">
            <h4 class="lead"> Links</h4>
            <hr class="my-4">
            
                <!--Github-->
                
                    <div class="row">

                        <div class="col-sm-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                            </svg>
                        </div>

                        <div class="col-sm">
                            <a href="https://github.com/Will-Conroy/GameJam">
                            Will-Conroy/GameJam
                            </a>
                        </div>
                    </div>
                    <hr class="my-4">
                

            </div>
            
            <div class="col-sm-4 justify-content-center">
            <img src="{{url('/will/CardFartDemo.gif')}}" class="rounded float img-fluid" alt="Animated Gif of maps">
            </div>
            
            <div class="col-sm">
                
                    <h4 class="lead">Unity - C#</h4>
                    <hr class="my-4">
                    <p>
                    This project was born from a casual game jam with lifelong colleague <a href="https://github.com/Patrick-Akbar">Patrick</a>. Due to competing commitments during the 48 hr time limit, we felt unsatisfied with our work. 
                    Eager to gain more experience in every stage of the game development process, we decided to continue working on the project. 
                    </p>

                    <p>
                    The heart of the game is built around the command pattern, which was modified with a state pattern. A central command processor deals with all game actions. Which includes actions such as, the drawing or playing of cards and ending phases. 
                    This allows us to make sure actions happen consecutively, but also allows the undoing of any action with ease. 
                    Even more importantly the command pattern allows for actions to be queued up. Which lets us set up, amongst other things, the automatic discarding of the hand at the end of a turn. 
                    The state pattern is used to stop certain actions being performed during a given phase. Finally an observer pattern is used to update hubs and logs. 
                    All of this was dones in Unity from scratch, writing our own C# scripts.
                    </p>

                </div>
            </div>
        </div>
    </div>   
</div>






@endsection
@section('academic')
<div class=" jumbotron jumbotron-fluid text-center">
    <h2>Stats Wales Data Analysis Tool</h2>
    <hr class="my-4">
    <div class=" container-fluid text-left">
        <div class="row ">
        <div class="col-sm-2">
            <h4 class="lead"> Links</h4>
            <hr class="my-4">

            <!--Github-->
            <div class="row">
                <div class="col-sm-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                    </svg>
                </div>

                <div class="col-sm">
                    <a href="https://github.com/Will-Conroy/Stats-Wales-Data-Analysis-Tool">
                    Will-Conroy/Stats-Wales-Data-Analysis-Tool
                    </a>
                </div>
            </div>
            <hr class="my-4">
        </div>
        
           
            
            <div class="col-sm-4 justify-content-center">
            <img src="{{url('/will/statDemo.png')}}" class="rounded float img-fluid" alt="Animated Gif of maps">
            </div>
            
            <div class="col-sm">
                
                    <h4 class="lead">Advanced Object Oriented Programming - C++</h4>
                    <hr class="my-4">
                    <p >C++ tool to read and filter Walsh data stored in JSON and CSV formats</p>
                    <p>
                    This was the major piece of course work for my Advanced Object Oriented Programming module. Design to test our best practices and knowledge in C++. In this course work we were given a skeleton of code written and documented by our own lecturer. Then given a project specification and automatic test suite. Our task was to produce code that would not only implement the project specification, but was as well documented and as professional as possible. This was easily my most challenging and enjoyable course work undertaken at Swansea. 
                    At the end I had achieved 87% in this project. Details about some of my design decisions during the development process are recorded in the <a href="https://github.com/Will-Conroy/Stats-Wales-Data-Analysis-Tool#readme">README.md</a>, as that is what we were instructed to do.
                    </p>

                </div>
            </div>
        </div>
    </div>   
</div>

@endsection

