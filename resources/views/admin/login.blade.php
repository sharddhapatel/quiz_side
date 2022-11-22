<link href="{{URL:: asset('client/assets/css/style.css')}}" rel="stylesheet">

<!--**********************************
            Content body start
        ***********************************-->
<div class="content-body">

    <div class="container-fluid mt-3">



        <div class="row">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <!--  <div class="text1">Join</div>
                             <div class="text2"><span class="sign-q">Qureka</span> Lite</div> -->
                            <div class="text2"><span> Join Qureka Lite now </span></div>
                            <!-- <div class="text3">Your <span class="yellow" th:text="${introBonus}"></span><span class="yellow"> coins</span> are just one step  away now</div> -->
                            <div class="text3">And start earning coins</div>
                        </td>
                        <td><img class="sign-img" src="{{URL:: asset('client/assets/images/logo (1).png')}}" alt=""></td>
                    </tr>
                </tbody>
            </table>

        </div>
        <div class="col-6 colmobile12">
            <div class="row  earningtabnew entrydetails" style="width: 100%;">
                <!-- <div class="formdetails"> -->
                <div class="col-lg-12">
                    <div class="card-body">
                        <div class="basic-form">
                            <h3 style="text-align: center;">Login</h3>

                            @if(Session::has('message'))
                            <div class="alert alert-success">
                                <i class="fa-lg fa fa-warning"></i>
                                {!! session('message') !!}
                            </div>
                            @elseif(Session::has('error'))
                            <div class="alert alert-danger">
                                <i class="fa-lg fa fa-warning"></i>
                                {!! session('error') !!}
                            </div>
                            @endif
                            <form action="{{url('clientlogin')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">email</label>
                                    <input type="text" name="email" class="form-control input-default">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="text" name="password" class="form-control input-default">
                                </div>
                                <button type="submit" class="btn" style="background: #b5a264; border: 1px solid #b5a264;">Submit</button>

                                <!-- <button type="submit" >Submit</button> -->
                            </form>
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="textbtm mt-2">By continuing, you agree to our <a class="textbtm1" href="https://www.qurekalite.com/privacy.html">Privacy Policy</a> &amp;
            <a class="textbtm1" href="https://www.qurekalite.com/terms.html">Terms of use</a>
        </div>
        <div class="sign-i text-opacity">
            <p>* We promise we will never spam you</p>
        </div>
        <ul class="sign-l" style="    margin-right: 10px;">
            <li style="list-style: decimal;"><span>Over 40 million quiz enthusiasts have played
                    with us</span></li>
            <li style="list-style: decimal;"><span>We are India’s favorite Quiz destination</span></li>
            <li style="list-style: decimal;"><span>Over 100 quizzes are waiting for you</span></li>

        </ul>
        <div class="sign-flag">
            <ul class="list-inline">
                <li><img class="img-fluid " src="{{URL:: asset('client/assets/images/flag.png')}}" style="width:50px; height:30px;" alt=""></li>
                <li>Proudly Made In India</li>
            </ul>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
            Content body end
        ***********************************-->
