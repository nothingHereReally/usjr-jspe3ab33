<div>
    @foreach ($programs as $program)
        <p>{{$program->progid}} | {{ $program->progfullname}} | {{ $program->progshortname}}</p>
    @endforeach
</div>
