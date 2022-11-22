<html>

<head></head>

<body>

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
    <a href="{{url('showquestion')}}"><button type="submit" class="btn btn-outline-primary" data-toggle="question" data-target="#question{id}">Show</button></a>
    <form action="{{url ('')}}" method="post" name="quize" enctype="multipart/form-data">
        {{ csrf_field() }}
        <center>
            <table border=5>
            <input type="hidden" name="id" id="id" value="{{$data->id}}">
                <tr>
                    <td>Question :</td>
                    <td><input type="text" name="que" value="{{$data->question}}" placeholder="Enter Question" /></td>
                </tr>
                <br><br>
                <tr></tr>
                <center>
                    <tr>
                        <td>
                            <input type="text" name="o1" value="{{$data->a}}" placeholder="Option 1" />
                        </td>
                    <tr>
                        <td>
                            <input type="text" name="o2" value="{{$data->b}}"  placeholder="Option 2" />
                        </td>
                    <tr>
                        <td>
                            <input type="text" name="o3" value="{{$data->c}}" placeholder="Option 3" />
                        </td>

                    </tr>

                    <td>Answer :</td>
                    <td><br>
               
                        A<input type="radio" name="answer" value="A">option<br>
                        B<input type="radio" name="answer" value="B">option<br>
                        C<input type="radio" name="answer" value="C">option<br>

                    </td>
                    <tr></tr>
                    <td>
                        <center>
                            <button type="submit" class="btn btn-outline-primary" data-toggle="question" data-target="#question{id}">Next</button>
                        </center>
                    </td>
                </center>
            </table>
        </center>

    </form>

</body>

</html>
