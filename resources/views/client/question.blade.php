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
                </a> <span class="quizhead1">Winners on {{$today}} {{$monthName }}</span>
            </div>
        </div>
        <div id="scoresubmit">
            <div class="row sequence">
                <div class="col l6 s6 m6">
                    <div class="sequencehead1">
                        <!-- <img class="sequencehead01" src="images/circle.png" alt=""> -->
                        <div class="circle ">
                            <div id="countdown">
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
                           
                        </div>
                        <div class="controlls">
                            {{-- <div class="display-remain-time"></div> --}}
                          
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="controlls">
            <div id="countdown" style="color: #fff"></div>
            </div> --}}
<div id="ajaxQuestion">

                {{-- <div class="col l6 s6 m6">
                    <div class="sequencehead">
                        <span>{{$no}}</span> /<span>25</span>
                    </div>

                </div> --}}

                <!--   <div class="col l6 s4 m4">
              <div><img class="star" th:src="@{/img/star.png}" alt=""></div>
              <div class="hat">Hat-trick!</div>
              <div class="points">10 points added</div>
                </div> -->
                {{-- <div class="col-6 colmobile12">
                    <div class="row  earningtabnew entrydetails" style="width: 100%;">

                        <div class="col-lg-12">
                            <div class="card-body">
                               
                                <div class="questionhead">
                                    <span>{{$no}}.{{$data->question}}</span>
                                </div>
                                <div class="options">
                                    <div>
                                        <a class="option1" id="optionA" onclick="optionClick('B', 'A', 'hR5hOxUvG14KmL1BibHJmtrfUF98XaAREcOPZkhkLeLe5w==')">
                                            <span>{{$data->a}} </span>
                                        </a>
                                        <img class="sad" id="sadoptionA" src="images/sad.png" alt="" style="display:none">
                                        <img class="smile" id="smileoptionA" src="images/smile.png" alt="" style="display:none">
                                    </div>
                                    <div>
                                        <a class="option2" id="optionB" onclick="optionClick('B', 'B', 'hR5hOxUvG14KmL1BibHJmtrfUF98XaAREcOPZkhkLeLe5w==')">
                                            <span>{{$data->b}}</span></a>
                                        <img class="sad" id="sadoptionB" src="images/sad.png" alt="" style="display:none">
                                        <img class="smile" id="smileoptionB" src="images/smile.png" alt="" style="display:none">
                                    </div>
                                    <div>
                                        <a class="option3" id="optionC" onclick="optionClick('B', 'C', 'hR5hOxUvG14KmL1BibHJmtrfUF98XaAREcOPZkhkLeLe5w==')">
                                            <span>{{$data->c}}</span></a>
                                        <img class="sad" id="sadoptionC" src="images/sad.png" alt="" style="display:none">
                                        <img class="smile" id="smileoptionC" src="images/smile.png" alt="" style="display:none">
                                    </div>
                                </div>
                                <a href="{{url('result')}}"><button type="button" class="btn" style="background: #b5a264; border: 1px solid #b5a264;">Show Result</button></a>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="score">Your Score :
                    <span id="scoreValue">0</span>
                    <span style="display:none" id="scoreKey">U2FsdGVkX19a3bSAuNuNoT+gowUbS/CQeusGjTGmDhY=</span>
                    <span id="scoreData" style="display: none;">t02KLBGctzpVU180kT0cbol4aTdw9MbAn29XJvbZ0yD4Ufm+WnD5kltpR4GVvQKLswA/Xq4Qm2xcDdPbfOnwEEQFKIrs4dIuZgR0Ilexxuvp1Xvu6ckLGsanvQanm0fvW97l+dBVEIFYxR45xvdTG2NPxiemViidJRasgnl2tA4HbjgW+ev+uw95yg==</span>
                    <span id="quizId" style="display: none;">55188</span>
                    <span id="userId" style="display: none">AU16588951859810106</span>
                </div>
           


            </div>  --}} 





        <div id="ajaxQuestion">
            
            <div class="col l6 s6 m6">
                <div class="sequencehead">
                    <span>{{$no}}</span> /<span>25</span>
                </div>
            </div>

            <div class="col-6 colmobile12">
                <div class="row  earningtabnew entrydetails" style="width: 100%;">
                   
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="basic-form">
                                <form action="{{url('show')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <p class="questionp">{{$no}}.{{$data->question}} </p>
                           
                                    <input type="hidden" id="qid" value="{{$data->id}}" name="qid"  />

                                    <input type="hidden" id="no" value="{{$no}}" name="no"  />

                                   <span class="questionspan"> A  <input type="radio" value="a" name="ans" id="ans" class="questioninput"required/> {{$data->a}} <br/></span>
                                   <span class="questionspan"> B <input type="radio" value="b" name="ans"  id="ans" class="questioninput" required/> {{$data->b}} <br/></span>
                                   <span class="questionspan"> C <input type="radio" value="c" name="ans" id="ans" class="questioninput" required/> {{$data->c}} <br/></span>

                                    <br>
                                    <button type="submit" class="btn" id="send_form" style="background: #b5a264; border: 1px solid #b5a264;">Next</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="score" style="display:none;">Your Score :
                <span id="scoreValue">0</span>
                <span  id="scoreKey" style="display:none">U2FsdGVkX19a3bSAuNuNoT+gowUbS/CQeusGjTGmDhY=</span>
                <span id="scoreData" style="display: none;">t02KLBGctzpVU180kT0cbol4aTdw9MbAn29XJvbZ0yD4Ufm+WnD5kltpR4GVvQKLswA/Xq4Qm2xcDdPbfOnwEEQFKIrs4dIuZgR0Ilexxuvp1Xvu6ckLGsanvQanm0fvW97l+dBVEIFYxR45xvdTG2NPxiemViidJRasgnl2tA4HbjgW+ev+uw95yg==</span>
                <span id="quizId" style="display: none;">55188</span>
                <span id="userId" style="display: none;">AU16588951859810106</span>
            </div>
       
        </div>



        </div>
    </div>
    <!-- #/ container -->
</div>
<!--**********************************
        Content body end
 ***********************************-->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
 <script>
    var timeleft = 90;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    document.getElementById("countdown").innerHTML = "Finished";
  } else {
    document.getElementById("countdown").innerHTML = timeleft + " seconds remaining";
  }
  timeleft -= 1;
}, 1000);
 </script>
 {{-- <script>
 
 $(document).ready(function() {
    $("#send_form").click(function(e){
        e.preventDefault();
     var _token = $("input[name='_token']").val();
     var qid = $('#qid').val();
     var no = $('#no').val();
     var ans = $('#ans').val();
    //  alert(ans);

        $.ajax({
            url: "{{url('show') }}",
            method:'POST',
            data: {_token:_token,qid:qid,no:no,ans:ans},
            success: function(data) {
               
            //    alert('data.success');

            }
        });
   
    }); 
});

</script> --}}
{{-- <script type="text/javascript">

    $("#ajaxQuestion").submit(function(e) {
        e.preventDefault();
    
        var qid = $("#qid").val();
        var no = $("#no").val();
    //    alert(no);
        var ans = $("#ans").val();
      
   
        // var _token = $("input[name=_token]").val();
    
        $.ajax({
            type: "POST",
            url: "{{url('show')}}",
            data: {
                qid: qid,
                no: no,
                ans: ans,
                _token: _token
            },
            success: function(response) {
                if (response) {
                    $("#ajaxQuestion")[0].reset();
                  
                }
            }
        });
        $("#send_form").click(function() {
            $("#ajaxQuestion").load("#ajaxQuestion");
        });
    
    });
</script> --}}
@endsection
