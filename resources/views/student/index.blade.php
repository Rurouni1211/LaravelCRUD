@foreach ($student as $stu)
    <p>{{$stu->id}} | {{$stu->rollno}} | {{$stu->name}} | {{$stu->email}} | {{$stu->phoneno}} | {{$stu->address}} | {{$stu->created_at}} | {{$stu->updatedat}} </p>
@endforeach