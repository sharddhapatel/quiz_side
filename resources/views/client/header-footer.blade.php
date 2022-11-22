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


    <div class="container mobile"></div>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <h1 class="qurekah1">Qureka Lite</h1>
            <!-- <div class="brand-logo">
                <a href="index-2.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="images/logo-text.png" alt="">
                    </span>
                </a>
            </div> -->
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"> </i></span>
                    </div>
                    <div class="hamburger1">
                        <span class="toggle-icon">Qureka Lite</span>
                    </div>
                </div>

            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <div class="userProfile">
                        <span class="profile_image">
                            <img src="{{URL:: asset('client/assets/images/ninja.png')}}">
                        </span>
                        <span class="name_and_role">
                            <h6><span>Guest User</span></h6>
                            <div class="shimmer2">
                                <a class=" text-yellow shimmerpadding " href="#">Join Qureka Lite</a>
                            </div>
                        </span>
                    </div>

                    <li style="border-bottom: solid 1px #ccc;">
                        <a aria-expanded="false" href="{{url('rules')}}">
                            <i class="fa-solid fa-clipboard-list"></i><span class="nav-text"> Quiz Rules
                            </span>
                        </a>

                    </li>
                    <li style="border-bottom: solid 1px #ccc;">
                        <a aria-expanded="false" href="">
                            <i class="fa-brands fa-instagram"></i><span class="nav-text">Instagram</span>
                        </a>

                    </li>
                    <li style="border-bottom: solid 1px #ccc;">
                        <a aria-expanded="false" href="">
                            <i class="fa-brands fa-facebook-f"></i><span class="nav-text">Facebook</span>
                        </a>

                    </li>
                    <li style="border-bottom: solid 1px #ccc;">
                        <a aria-expanded="false" href="{{url('contact')}}">
                            <i class="fa-solid fa-envelope"></i><span class="nav-text">Contact Us</span>
                        </a>
                    </li>
                    <li style="border-bottom: solid 1px #ccc;">
                        <a aria-expanded="false" href="{{url('registration')}}">
                            <i class="fa-solid fa-right-from-bracket"></i><span class="nav-text">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
        @yield('contant')
        <!--**********************************
        Main wrapper end
    ***********************************-->

        <!--**********************************
        Scripts
    ***********************************-->
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
<script>

var redirectUrl = sessionStorage.getItem("hurl");
if (redirectUrl != null) {
    window.location.href = redirectUrl;
}

str = window.location.href.split("/");
var quizIdJs = str[str.length - 1];
if (sessionStorage.getItem(quizIdJs + "scoreHBack") == "back") {
    sessionStorage.clear();
    window.location.href = subdomain + '/';

}

document.getElementById("quizId").style.display = "none";
document.getElementById("scoreData").style.display = "none";

function optionClick(ans, option, nextQuestion) {

    document.getElementById('optionA').removeAttribute("onclick");
    document.getElementById('optionB').removeAttribute("onclick");
    document.getElementById('optionC').removeAttribute("onclick");

    // /* if(option == "A"){
    //     document.getElementById('optionB').removeAttribute("onclick");
    //     document.getElementById('optionC').removeAttribute("onclick");
    // }
    // if(option == "B"){
    //     document.getElementById('optionA').removeAttribute("onclick");
    //     document.getElementById('optionC').removeAttribute("onclick");
    // }
    // if(option == "C"){
    //     document.getElementById('optionB').removeAttribute("onclick");
    //     document.getElementById('optionA').removeAttribute("onclick");
    // } */
    var hatric = 0
    var score = 0;
    if (ans == option) {
        var x = document.getElementById("smileoption" + option);
        x.style.display = "block";

        document.getElementById("option" + option).className = "correctanswer";
        document.getElementById("scoreValue").innerHTML = 20 + parseInt(decryptJavascriptScore(document.getElementById('scoreKey').innerHTML));
        document.getElementById("scoreKey").innerHTML = encryptJavascriptScore(document.getElementById("scoreValue").innerHTML);
        score = decryptJavascriptScore(document.getElementById("scoreKey").innerHTML);

    } else {
        var x = document.getElementById("sadoption" + option);
        x.style.display = "block";
        document.getElementById("option" + option).className = "wronganswer";
        document.getElementById("scoreValue").innerHTML = -10 + parseInt(decryptJavascriptScore(document.getElementById('scoreKey').innerHTML));
        document.getElementById("scoreKey").innerHTML = encryptJavascriptScore(document.getElementById("scoreValue").innerHTML);
        score = decryptJavascriptScore(document.getElementById("scoreKey").innerHTML);


    }

    window.setTimeout('questionAjaxCall(\'' + nextQuestion + '\', \'' + score + '\', \'' + ans + '\', \'' + option + '\' )', 1000);
}

function questionAjaxCall(nextQuestion, score, ans, option) {
    console.log(score);
    var encryptedScore = encryptScore(score);
    var encryptedAns = encryptScore(ans);
    var encryptedClickOption = encryptScore(option);
    var newData = {
        "data": nextQuestion,
        "score": encryptedScore,
        'answer': encryptedAns,
        "clickOption": encryptedClickOption
    };
    var dataJson = JSON.stringify(newData);

    $.ajax({
        type: "POST",
        contentType: "application/json;",
        url: subdomain + "/show",

        data: dataJson,
        cache: false,
        timeout: 600000,
        success: function(data) {
            console.log("message " + data.message)
            if (data.message == "continue") {

                htmlAppend(data);

            } else if (data.message == "success") {
                scoreAjaxCall(data.object.data);

            } else {}
        },
        error: function(e) {}
    });
}

function htmlAppend(data) {
    var score = encryptJavascriptScore(data.object.score.toString());
    $('#ajaxQuestion').empty().append('');

    $('#ajaxQuestion').append('  <div class="col l6 s6 m6">' +
        '<div class="sequencehead">' +
        '<span>' + data.object.size + '</span> /<span>' + data.object.questionSize + '</span></div>' +
        '</div>');

    if (data.object.hatricFlag == true) {
        $('#ajaxQuestion').append('<div class="col l6 s4 m4">' +
            '<div><img class="star" src="client/assets/images/star.png" alt=""></div>' +
            '<div class="hat">Hat-trick!</div>' +
            '<div class="points">10 points added</div></div>');

    }


    $('#ajaxQuestion').append('<div class="questionhead">' +
        '<span>' + data.object.question + '</span>' +
        '</div>' +
        '<div class="options">' +
        '<div>' +
        '<a class="option1" id="optionA"  onclick="optionClick(\'' + data.object.answer + '\', \'A\', \'' + data.object.nextQuestionEncrpt + '\')">' +
        '<span>' + data.object.optionA + '</span>' +
        '</a>' +
        '<img class="sad" id="sadoptionA" src="' + subdomain + 'client/assets/images/sad.png" alt="" style="display:none">' +
        '<img class="smile" id="smileoptionA" src="' + subdomain + 'client/assets/images/smile.png" alt="" style="display:none">' +
        '</div>' +
        '<div>' +


        '<a class="option2" id="optionB"  onclick="optionClick(\'' + data.object.answer + '\', \'B\', \'' + data.object.nextQuestionEncrpt + '\')">' +
        '<span>' + data.object.optionB + '</a>' +
        '<img class="sad" id="sadoptionB" src="' + subdomain + 'client/assets/images/sad.png" alt="" style="display:none">' +
        '<img class="smile" id="smileoptionB" src="' + subdomain + 'client/assets/images/smile.png" alt="" style="display:none">' +
        '</div>' +

        '<div>' +
        '<a class="option3" id="optionC"  onclick="optionClick(\'' + data.object.answer + '\', \'C\', \'' + data.object.nextQuestionEncrpt + '\')">' +
        '<span>' + data.object.optionC + '</a>' +
        '<img class="sad" id="sadoptionC" src="' + subdomain + 'client/assets/images/sad.png" alt="" style="display:none">' +
        '<img class="smile" id="smileoptionC" src="' + subdomain + 'client/assets/images/smile.png" alt="" style="display:none">' +
        '</div>' +
        '</div>' +
        '<div class="score">Your Score : ' +
        '<span id="scoreValue">' + data.object.score + '</span></div>' +
        '<span id="scoreKey" style="display:none">' + score + '</span></div>' +
        '<span id="scoreData">' + data.object.data + '</span>');
    document.getElementById("scoreData").style.display = "none";
}


function scoreAjaxCall(scoreData) {
    //console.log("score data"+scoreData);
    var newData = {
        "data": scoreData
    };
    var dataJson = JSON.stringify(newData);

    $.ajax({
        type: "POST",
        contentType: "application/json;",
        url: subdomain + "/hourlyquiz/scoreSubmit",

        data: dataJson,
        cache: false,
        timeout: 600000,
        success: function(data) {
            if (data.status == "200") {
                window.location.href = subdomain + '/hourlyquiz/score/' + quizIdJs;
            }
            if (data.status == "208") {
                window.location.href = subdomain + '/hourlyquiz/score/' + quizIdJs;
            }

            console.log("SUCCESS : ", data);
        },
        error: function(e) {
            console.log("ERROR : ", e);
        }
    });
}
let progressBar = document.querySelector('.e-c-progress');
let indicator = document.getElementById('e-indicator');
let pointer = document.getElementById('e-pointer');
let length = Math.PI * 2 * 100;

progressBar.style.strokeDasharray = length;
$(document).ready(function() {
    var score = $("#scoreKey").text();
    var encryptedScore = encryptJavascriptScore(score)

    $("#scoreKey").text(encryptedScore);

});

function encryptJavascriptScore(score) {
    var ciphertext = CryptoJS.AES.encrypt(score, 'secret key 123');
    return ciphertext;

}

function decryptJavascriptScore(encryptedScore) {
    var bytes = CryptoJS.AES.decrypt(encryptedScore.toString(), 'secret key 123');
    var scoreValue = bytes.toString(CryptoJS.enc.Utf8);
    return scoreValue;
}

function update(value, timePercent) {
    var offset = -length - length * value / (timePercent);
    progressBar.style.strokeDashoffset = offset;
    pointer.style.transform = `rotate(${360 * value / (timePercent)}deg)`;
};
const displayOutput = document.querySelector('.display-remain-time')
let intervalTimer;
let timeLeft;
let wholeTime = 90;

if (sessionStorage.getItem(quizIdJs) != null && sessionStorage.getItem(quizIdJs) != 0 && sessionStorage.getItem(quizIdJs) != "NaN") {
    wholeTime = sessionStorage.getItem(quizIdJs);
}

update(wholeTime, wholeTime);
displayTimeLeft(wholeTime);

function changeWholeTime(seconds) {
    if ((wholeTime + seconds) > 0) {
        wholeTime += seconds;
        update(wholeTime, wholeTime);
    }
}

timer(wholeTime);

function timer(seconds) {
    let remainTime = Date.now() + (seconds * 1000);
    displayTimeLeft(seconds);

    intervalTimer = setInterval(function() {
        timeLeft = Math.round((remainTime - Date.now()) / 1000);
        if (timeLeft < 0) {
            clearInterval(intervalTimer);
            isStarted = false;
            setterBtns.forEach(function(btn) {
                btn.disabled = false;
                btn.style.opacity = 1;
            });
            displayTimeLeft(wholeTime);
            pauseBtn.classList.remove('pause');
            pauseBtn.classList.add('play');
            return;
        }
        displayTimeLeft(timeLeft);
                                                                                                                                                                                                                            }, 1000);
}

function encryptScore(score) {
    console.log(score);
    var secret = "René Über";
    var encrypted = CryptoJS.AES.encrypt(score, secret);
    return encrypted.toString();

}

function displayTimeLeft(timeLeft) {

    let minutes = Math.floor(timeLeft / 60);
    let seconds = timeLeft;


    sessionStorage.setItem(quizIdJs, seconds);

    let displayString = `${seconds < 10 ? '0' : ''}${seconds}`;
    displayOutput.textContent = displayString;
    update(timeLeft, wholeTime);

    console.log(seconds);
    if (seconds == 0) {
        console.log("coming if seconds is 0");
        console.log(seconds);
        var scoreData = document.getElementById('scoreData').innerHTML;
        sessionStorage.removeItem(quizIdJs);
        console.log(scoreData);
        scoreAjaxCall(scoreData);
    }
    /*  var userId = document.getElementById("userId") ;
     if(userId == null){
         sessionStorage.removeItem(quizIdJs);
     } */
}
</script>
</body>
<!-- Mirrored from demo.themefisher.com/quixlab/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Mar 2022 05:45:24 GMT -->

</html>
