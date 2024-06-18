<div>
    @foreach ($students as $student)
        <p>
        {{$student->studid}} |
        {{ $student->studfirstname}} |
        {{ $student->studmidname}} |
        {{ $student->studlastname}} |
        {{ $student->studlastname}} |
        {{ $student->studyear }}
        </p>
    @endforeach
</div>
