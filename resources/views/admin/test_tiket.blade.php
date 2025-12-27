



<div>
    {{$tiket->id}}
    {{gettype($tiket->id)}}
    
    
    
</div>

<div>
    {{$tiket->cliente}}
    {{gettype($tiket->cliente)}}
</div>
<div>
    
</div>
<div>
    {{$tiket->fecha_hora_evento}}
    {{gettype($tiket->fechaHoraEvento)}}
</div>
<div>
    {{$tiket->estado}}
    {{gettype($tiket->estado)}}
</div>
<div>
    {{$tiket}}
</div>

<h1>
    test data
</h1>
<div>
    {{gettype(DateTime::createFromFormat('d/m/Y', "16/10/2003"))}}
</div>
