<html>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">

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

                    <a href="{{url('addquestion')}}"><button type="submit" class="btn btn-outline-primary" data-toggle="question" data-target="#question{id}">Addquestion</button></a>


                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive m-b-20">

                                    <style>
                                        table,
                                        th,
                                        td {
                                            border: 1px solid black;
                                        }
                                    </style>

                                    <table class="table table-borderless table-data3" id="myTable">
                                        <thead>
                                            <tr>
                                                <td>id</td>
                                                <td>Question</td>
                                                <td>A</td>
                                                <td>B</td>
                                                <td>C</td>
                                                <td>ANS</td>
                                                <!-- <td>Edit</td> -->
                                                <td>Delete</td>
                                            </tr>
                                        </thead>
                                        <?php $data = App\Models\question::get() ?>

                                        @foreach($data as $ans)
                                        <tr>

                                            <!--FETCHING DATA FROM EACH
                              ROW OF EVERY COLUMN-->
                                            <td>{{$ans->id}}</td>
                                            <td>{{$ans->question}}</td>
                                            <td>{{$ans->a}}</td>
                                            <td>{{$ans->b}}</td>
                                            <td>{{$ans->c}}</td>
                                            <td>{{$ans->ans}}</td>
                                            <!-- <td><a href="editquestion/{{ $ans->id}}">Edit</a></td> -->
                                            <td><a href="deletequestion/{{ $ans->id}}">Delete</a></td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>

</html>
