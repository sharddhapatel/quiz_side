@extends('client.header-footer')
@section('contant')



        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">



                <div class="row headrow">
                    <div class="quizhead">
                        <a class="quizhead" href="{{url('playnow')}}"> <svg class="svg-inline--fa fa-arrow-left fa-w-14" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
                            <!-- <i class="fas fa-arrow-left"></i> -->
                        </a> <span class="quizhead1">Rules</span>
                    </div>
                </div>
                <div class="row  earningtabnew entrydetails">
                    <div class="rulesnewsub">
                        <h6><b>Rules: Quiz</b></h6>
                        <p>1. You get 90 seconds to answer as many questions as you can (max questions you can answer is 25). </p>
                        <p>2. There are 3 options for each question, one of them is the answer for the question.</p>
                        <p>3. You get 20 points for each right answer. </p>
                        <p>4. You get (-)10 points for each wrong answer.</p>
                        <p>5. You get 10 points as hattrick bonus if you answer 3 questions correctly in a row.</p>
                        <p>6. The winners for the quiz is decided depending upon the scores of all the users that participated in the quiz.</p>
                        <p>7. Winners for each quiz will be declared at a pre-defined time.</p>
                    </div>
                </div>
                <div class="underline px-3 py-4 w-100 text-center">
                    <p>For details, kindly refer to <a href="{{url('rules')}}">terms of use</a>.</p>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->

@endsection
