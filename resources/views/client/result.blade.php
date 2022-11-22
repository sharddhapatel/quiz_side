


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
                            <img src="images/b11.jpg" alt="">
                        </a> <span class="quizhead1">Show Result</span>
                        <a href="{{url('index')}}" ><button type="submit" class="btn" style="background: #b5a264; border: 1px solid #b5a264;">Play Quiz</button></a>
                    </div>
                </div>
                <div id="scoresubmit">
                    <!--  Ajax Calling here  -->
                    <div class="col-6 colmobile12">
                        <div class="row  earningtabnew entrydetails" style="width: 100%;">
                            <div class="col-lg-12">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>Show Result</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    {{-- <th>Question</th>  --}}
                                                    <th>Result/Score</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                   
                                                    <td>{{Session::get('result')}}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  Ajax End here  -->
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
            Content body end
        ***********************************-->

@endsection


