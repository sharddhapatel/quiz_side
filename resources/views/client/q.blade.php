@extends('client.header-footer')
@section('contant')


<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">



        <div class="row headrow">
            <div class="quizhead" style="margin-left: 12px;">
                <a class="quizhead" href="#" style="margin-left: 12px;">
                    <img src="{{URL:: asset('client/assets/images/b11.jpg')}}" alt="">
                </a> <span class="quizhead1">Winners on  {{$today}} {{$monthName }}</span>
            </div>
        </div>
        <div id="scoresubmit">

            <div class="row sequence">


                <div class="col l6 s6 m6">
                    <div class="sequencehead1">
                        <!-- <img class="sequencehead01" src="images/circle.png" alt=""> -->
                        <div class="circle ">
                            <svg width="50" viewBox="0 0 220 220">
                                <g transform="translate(110,110)">
                                    <circle r="100" class="e-c-base"></circle>
                                    <g transform="rotate(-90)">
                                        <circle r="100" class="e-c-progress"
                                            style="stroke-dasharray: 628.319; stroke-dashoffset: -628.319;">
                                        </circle>
                                        <g id="e-pointer" style="transform: rotate(0deg);">
                                            <circle cx="100" cy="0" r="8" class="e-c-pointer"></circle>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="controlls">
                            <div class="display-remain-time">00</div>
                        </div>
                    </div>
                </div>
            </div>
        <div id="ajaxQuestion">
            <div class="col l6 s6 m6">
                <div class="sequencehead">
                    <span>{{$no}}</span> /<span>25</span>
                </div>
            <!-- </div>
            <div class="col l6 s6 m6">
                <div class="sequencehead1">

                    <div class="controlls">
                        <div class="display-remain-time">{{ $today }}</div>

                    </div>
                </div>
            </div> -->
            <div class="col-6 colmobile12">
                <div class="row  earningtabnew entrydetails" style="width: 100%;">
                    <!-- <div class="formdetails"> -->
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="basic-form">


                            <form action="{{url('show')}}" method="get">
                                    <p class="questionp">{{$no}}.{{$data->question}}</p>
                                    <input type="hidden" value="{{$data->id}}" name="uid" />
                                    <input type="hidden" value="{{$data->id}}" name="qid" />

                                    <input type="hidden" value="{{$no}}" name="no" />

                                   <span class="questionspan"> A  <input type="radio" value="a" name="ans" class="questioninput"/> {{$data->a}} <br /></span>
                                   <span class="questionspan"> B <input type="radio" value="b" name="ans" class="questioninput" /> {{$data->b}} <br /></span>
                                    <span class="questionspan"> C <input type="radio" value="c" name="ans" class="questioninput" /> {{$data->c}} <br /></span>

                                    <br>
                                    <button type="submit" class="btn" style="background: #b5a264; border: 1px solid #b5a264;">Next</button>
                                </form>
                            </div>
                            <!-- </div> -->
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="score">Your Score :
                <span id="scoreValue">0</span>
                <span style="display:none" id="scoreKey">U2FsdGVkX19a3bSAuNuNoT+gowUbS/CQeusGjTGmDhY=</span>
                <span id="scoreData" style="display: none;">t02KLBGctzpVU180kT0cbol4aTdw9MbAn29XJvbZ0yD4Ufm+WnD5kltpR4GVvQKLswA/Xq4Qm2xcDdPbfOnwEEQFKIrs4dIuZgR0Ilexxuvp1Xvu6ckLGsanvQanm0fvW97l+dBVEIFYxR45xvdTG2NPxiemViidJRasgnl2tA4HbjgW+ev+uw95yg==</span>
                <span id="quizId" style="display: none;">55188</span>
                <span id="userId" style="display: none">AU16588951859810106</span>
            </div> --}}
            {{-- <div class="textbtm mt-2">Your Score : <a href="#" style="color: #fff;">0</a>
            </div> --}}
        </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->


@endsection
send_form