<div>
    @foreach ($colleges as $college)
        <p>{{$college->collid}} | {{ $college->collfullname}} | {{ $college->collshortname}}</p>
    @endforeach
</div>
