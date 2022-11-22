



     <form action="{{url('show')}}" method="get">
<p>{{$no}}.{{$data->question}}</p>
<input type="hidden" value="{{$data->id}}" name="qid" />

<input type="hidden" value="{{$no}}" name="no" />

        A<input type="radio" value="a" name="ans"/>{{$data->a}}<br/>
        B<input type="radio" value="b" name="ans"/>{{$data->b}}<br/>
        C<input type="radio" value="c" name="ans"/>{{$data->c}}<br/>

        <br>
        <button type="submit">Next</button>
    </form>














