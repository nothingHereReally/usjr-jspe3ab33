<div>
    @foreach ($departments as $department)
        <p>{{$department->deptid}} | {{ $department->deptfullname}} | {{ $department->deptshortname}}</p>
    @endforeach
</div>
