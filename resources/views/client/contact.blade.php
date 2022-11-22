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
                        </a> <span class="quizhead1">Contact Us</span>
                    </div>
                </div>
                <div class="row  earningtabnew entrydetails">
                    <!-- <div class="formdetails"> -->
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="basic-form">
                                <h3 style="text-align: center;">Contact Us</h3>
                                <form>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" class="form-control input-default">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Password</label>
                                        <input type="password" class="form-control input-default">
                                    </div>
                                    <button type="submit" class="btn" style="background: #b5a264; border: 1px solid #b5a264;">Submit</button>
                                </form>
                            </div>
                            <!-- </div> -->
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
