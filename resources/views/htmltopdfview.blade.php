
<div class="row">
    <a href="{{ route('htmltopdfview',['download'=>'pdf']) }}">Download PDF</a>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        @foreach ($empleados as $empleado)
        <tr>
            <td>{{ $empleado->nombre}}</td>
            <td>{{ $empleado->apellido}}</td>
        </tr>
        @endforeach
    </table>
</div>