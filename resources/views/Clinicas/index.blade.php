<h1>Clinicas</h1>


<table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
             </tr>
        </thead>
        <tbody>
    @foreach($Clinicas as $clinica)
    <tr>
        <td>{{$clinica->id}}</td>
        <td>{{$clinica->nombre}}</td>                  
    </tr>  
    @endforeach
    </tbody>
</table>

<button> <a href="clinicas/create">Crear clínica</a></button>