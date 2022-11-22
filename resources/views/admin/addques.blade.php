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
    <a href="{{url('logout')}}"><button type="submit" class="btn btn-outline-primary" data-toggle="question" data-target="#question{id}">Logout</button></a>
    <a href="{{url('showquestion')}}"><button type="submit" class="btn btn-outline-primary" data-toggle="question" data-target="#question{id}">Show</button></a>
    <form action="{{url ('insertfrom')}}" method="post" name="quize" enctype="multipart/form-data">
        {{ csrf_field() }}
        <center>
            <table border="5">
                <tr>
                    <td style="padding: 0.5rem;">Question :</td>
                    <td><input type="text" name="que" placeholder="Enter Question" style="padding: 0.5rem;" /></td>
                </tr>
                <br><br>
                <tr></tr>
                <center>
                    <tr>
                        <td>
                            <input type="text" name="o1" placeholder="Option 1" style="padding: 0.5rem;" />
                        </td>
                    <tr>
                        <td>
                            <input type="text" name="o2" placeholder="Option 2" style="padding: 0.5rem;" />
                        </td>
                    <tr>
                        <td>
                            <input type="text" name="o3" placeholder="Option 3" style="padding: 0.5rem;" />
                        </td>

                    </tr>

                    <td style="padding: 0.5rem;">Answer :</td>
                    <td><br>
                        A<input type="radio" name="answer" value="A" style="padding: 0.5rem;">option<br>
                        B<input type="radio" name="answer" value="B" style="padding: 0.5rem;">option<br>
                        C<input type="radio" name="answer" value="C" style="padding: 0.5rem;">option<br>

                    </td>
                    <tr></tr>
                    <td>

                            <button type="submit" class="btn" data-toggle="question" data-target="#question{id}" style="float: left;">Next</button>

                    </td>
                </center>
            </table>
        </center>

    </form>

</body>

</html>
