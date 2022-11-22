@extends('client.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">



                <div class="row headrow">
                    <div class="quizhead">
                        <a class="quizhead" href="index.html"> <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
                            <!-- <i class="fas fa-arrow-left"></i> -->
                        </a> <span class="quizhead1">Winners on 25th July</span>
                    </div>
                </div>
                <div class="row  earningtabnew entrydetails">
                    <div class="col l6 s5 m5">
                        <img class="gkimage" src="{{URL:: asset('client/assets/images/megaquiz.png')}}" alt="">
                    </div>
                    <div class="col l6 s7 m7">
                        <div class="gkheadnew">Play and win</div>

                        <div class="gkheadnew1">


                            <div>
                                <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt="">
                                <span if:th="">500000</span>
                            </div>


                        </div>

                        <div class="gkheadnew2">
                            <a class="gkheadnew2" href="{{url('playnow')}}">View Rank Breakup</a>
                        </div>
                    </div>
                    {{-- <div>
                        <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt="">
                        <span class="coinspan" if:th="">{{Session::get('result')}}</span>
                    </div> --}}
                    <div class="detailsnew">
                        <div id="loading"></div>

                        <svg class="svg-inline--fa fa-check-circle fa-w-16 details0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        <!-- <i class="fas fa-check-circle details0"></i> -->You got 90 seconds
                    </div>
                    <div class="detailsnew">
                        <svg class="svg-inline--fa fa-check-circle fa-w-16 details0" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path></svg>
                        <!-- <i class="fas fa-check-circle details0"></i> -->Answer as many questions as you can
                    </div>

                    <div class="detailsnew1 text-center">
                        <p>Join Qureka Lite &amp; become eligible to win coins</p>
                    </div>

                    <div class="col-lg-12 freeentrypage text-center">

                        <div class="shimmer3 outerborder">
                            <a class="text-center w-100 border-custom" href="{{url('registration')}}">
                                <span class="freejoinearn">Join Now </span><br>
                                <span>&amp;	Start Earning Coins</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 coin-eligble-free text-center">
                        <h6>
                            <b>Or</b>
                        </h6>
                    </div>

                    <div class="col-12 text-center">
                        <a class="coin-eligble2" href="{{url('show')}}" onclick="entryFreeRedirect('NTQ5OTQ=','Wed Jul 27 19:15:00 IST 2022')">Play
							Quiz (without joining)</a>
                    </div>



                </div>
                <div class="row entryad">
                    <div id="div-gpt-ad-1603455687733-0" style="width: 468px; height: 100px; display: none;"></div>
                </div>
                <div class="rules">
                    <a class="rules" href="{{url('rules')}}"> Quiz Rules</a>
                </div>



            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


@endsection
