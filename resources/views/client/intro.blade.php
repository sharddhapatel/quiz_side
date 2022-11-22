
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:44:53 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL:: asset('client/assets/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{URL:: asset('client/assets/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{URL:: asset('client/assets/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{URL:: asset('client/assets/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Custom Stylesheet -->
    <link href="{{URL:: asset('client/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>




<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="margin-top: 4rem;">

            <div class="container-fluid mt-3">


                <img class="sign-img" src="{{URL:: asset('client/assets/images/logo (1).png')}}" alt="">
                <div class="row">
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="text2 mt-4"><span style="margin-left: 4.5rem;"> Quizzes for everyone!</span>
                                        <div class="row text-center flexwrap">
                                            <div class="col-lg-4 text-white">
                                                <h3 class="text-white mt-4">6+</h3>
                                                <p style="font-size: 16px;">quiz categories</p>
                                            </div>
                                            <div class="col-lg-4 text-white">
                                                <h3 class="text-white mt-4">9M+</h3>
                                                <p style="font-size: 16px;">users & counting</p>
                                            </div>
                                            <div class="col-lg-4 text-white">
                                                <h3 class="text-white mt-4">1L+</h3>
                                                <p style="font-size: 16px;">daily coins</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="sign-i text-opacity mt-2">
                    <p style="margin-left: 9rem;">Test your Knowledge</p>
                </div>
                <div class="textbtm mt-2 gkcontent">Play GK,Math History,IPL & Mega Quizzes to win <img class="coinstack1" src="{{URL:: asset('client/assets/images/COIN.png')}}" alt="">
                </div>
                <img class="infoimage1" src="{{URL:: asset('client/assets/images/infoimage1.png')}}" alt="">
                <div class="textbtm mt-2" style="margin-left: 4rem;">Redirecting in 2 seconds... <a class="textbtm1" href="#"> Skip </a>
                </div>
            </div>
            <!-- #/ container -->
        </div>

<script src="{{URL:: asset('client/assets/plugins/common/common.min.js')}}"></script>
<script src="{{URL:: asset('client/assets/js/custom.min.js')}}"></script>
<script src="{{URL:: asset('client/assets/js/settings.js')}}"></script>
<script src="{{URL:: asset('client/assets/js/gleek.js')}}"></script>
<script src="{{URL:: asset('client/assets/js/styleSwitcher.js')}}"></script>

<!-- Chartjs -->
<script src="{{URL:: asset('client/assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{URL:: asset('client/assets/plugins/circle-progress/circle-progress.min.js')}}"></script>
<!-- Datamap -->
<script src="{{URL:: asset('client/assets/plugins/d3v3/index.js')}}"></script>
<script src="{{URL:: asset('client/assets/plugins/topojson/topojson.min.js')}}"></script>
<script src="{{URL:: asset('client/assets/plugins/datamaps/datamaps.world.min.js')}}"></script>
<!-- Morrisjs -->
<script src="{{URL:: asset('client/assets/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{URL:: asset('client/assets/plugins/morris/morris.min.js')}}"></script>
<!-- Pignose Calender -->
<script src="{{URL:: asset('client/assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{URL:: asset('client/assets/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
<!-- ChartistJS -->
<script src="{{URL:: asset('client/assets/plugins/chartist/js/chartist.min.js')}}"></script>
<script src="{{URL:: asset('client/assets/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



<script src="{{URL:: asset('client/assets/js/dashboard/dashboard-1.js')}}"></script>
<script type="text/javascript">
    hourlyquizlist();
    var userId = $('#userId').text();
    if (userId != null && userId != "") {
        checkCookie();
    }
</script>


</body>


<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>




