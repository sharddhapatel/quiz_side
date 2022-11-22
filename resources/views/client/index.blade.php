@extends('client.header-footer')
@section('contant')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">

                <div class="row">
                    <div class="col l6 s6 m6">
                        <div class="earninghead">
                            <img class="coinstack" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt="">
                            <span>100</span>
                        </div>
                        <div class="earningtext">
                            <div class="shimmer2">
                                <a class="earningtext earningtext1 text-yellow" href="#">Keep your coins safe</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">

                    <div class="card-body">
                        <div class="row2">
                            <div class="col-12">
                                <div class="list-group" style="flex-direction: row;" id="list-tab" role="tablist">
                                    <a class="list-group-item list-group-item-action active" style="width:50%" id="list-Quiz-list" data-toggle="list" href="#list-Quiz" role="tab">Quiz</a>
                                    <a class="list-group-item list-group-item-action" style="width:50%" id="list-IPL-list" data-toggle="list" href="#list-IPL" role="tab"> IPL/Cricket</a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active  mt-4" id="list-Quiz" role="tabpanel" aria-labelledby="list-Quiz-list">
                                        <div class="row row2">
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b1.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>25000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>80</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <a href="{{url('playnow')}}">
                                                                        <div class="userlivebtnwin">Play Now </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/megaquiz.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>50000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>25</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b2.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>2500</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <span>FREE</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b3.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>5000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>10</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b4.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>15000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b5.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>10000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>100</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b6.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>5000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>15</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <a href="{{url('playnow')}}">
                                                                        <div class="userlivebtnwin">Play Now </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b7.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>1500</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>25</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b8.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>5000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>30</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b9.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>50000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>20</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b10.jpg')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>10000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b11.jpg')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>25000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>50</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b12.jpg')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>15000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>5</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b13.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>5000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>30</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade  mt-4" id="list-IPL" role="tabpanel" aria-labelledby="list-IPL-list">
                                        <div class="row row2">
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b1.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>55000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>60</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <a href="{{url('playnow')}}">
                                                                        <div class="userlivebtnwin">Play Now </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/megaquiz.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>2500</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>10</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b2.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>15000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>20</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b3.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>5000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>50</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b4.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>10000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>25</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b5.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>2500</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>45</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b6.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>25000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>70</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b7.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>50000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>15</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b8.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>10000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>35</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b9.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>5000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>40</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b10.jpg')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>15000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>100</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b11.jpg')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>5000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>30</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b12.jpg')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>2500</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>20</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b13.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>25000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>5</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/b1.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>50000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>10</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 mb-3">
                                                <div class="row winnerbtmbg">

                                                    <div class="col-md-3">
                                                        <div>
                                                            <img class="quizim1" src="{{URL:: asset('client/assets/images/megaquiz.png')}}" alt="">
                                                        </div>
                                                        <div class="quizlive">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>                                                            LIVE
                                                        </div>
                                                    </div>
                                                    <div class="col-md-9">
                                                        <div class="userslivee">
                                                            <svg class="svg-inline--fa fa-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M256 8C119 8 8 119 8 256s111 248 248 248 248-111 248-248S393 8 256 8z"></path></svg>
                                                            <span id="userCount_24259">2</span> users playing
                                                        </div>
                                                        <div class="ueserlive1">
                                                            <span>Cricket Knowledge Quiz</span>
                                                        </div>
                                                        <div class="ueserlive2">
                                                            Play &amp; Win: <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""> <span>10000</span>
                                                        </div>
                                                        <div class="ueserlive3">
                                                            Winner announcement: <span>02:30 PM</span>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col l6 s5 m5">
                                                                <div class="userliveentry">
                                                                    Entry : <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt=""><span>25</span>
                                                                </div>
                                                            </div>
                                                            <div class="col l6 s7 m7" id="played_24259" style="display: none">
                                                                <a class="userlivebtnwin" href="#"> Played</a>
                                                            </div>
                                                            <div class="col l6 s7 m7">
                                                                <div>
                                                                    <div class="userlivebtnwin"><a href="{{url('playnow')}}"> Play Now</a> </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div id="timeupModal" class="overlay">
                                                        <div class="popup">
                                                            <a class="close" id="close" href="#">×</a>
                                                            <div class="content">
                                                                <h5>This contest is about to end.<br>Please try playing any other contest.</h5>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

        @endsection
