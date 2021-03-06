@extends('layouts.app')


@section('content')

<div class="container">
<div class="page-header">
    <div class="row">
    <div class="col-md-1">
        <label></label> 
        </div>
        <div class="d-inline-block align-top" class="col-md-6" > 
   

</div>
<div class="col-md-2">
      
        </div>
<div class="col-md-2">
      
        </div>
    </div>
</div>
<hr>
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
            
                <div class="alert alert-danger" class="card-header"  >Listado de Incumplidos</div>
                <center>
                {!! Form::open(['route' => 'incumplido.exportar']) !!}

                <div class="form-group col-6">
                    {{ form::label('fechadesde', 'Fecha  desde') }}
                    {{ Form::date('fechadesde', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control']) }}
                </div>
                <div class="form-group col-6">
                    {{ form::label('fechahasta', 'Fecha  Hasta') }}
                    {{ Form::date('fechahasta', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control']) }}
                </div>

          <!--   <table >
                <thead class="thead-dark">
                    
                <th  class='text-center'>Cedula</th>
                <th  class='text-center'>nombres</th>
                <th  class='text-center'>Telefono</th>
                <th  class='text-center'>Producto</th>
                <th  class='text-center'>Monto</th>
                <th  class='text-center'>Fecha</th>
                <th  class='text-center'>area</th>
                <th  class='text-center'>tipo De Pago</th>


             
               
     
                </thead>
                <tbody>
              
                @foreach ($incumplido as $incumplidos)
   
              
                <tr >
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->cedula }}</small></td> 
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->nombres }}</small></td> 
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->telefonowhat }}</small></td> 
                    
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->producto }}</small></td> 
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->cuota }}</small></td> 
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->fecha }}</small></td> 
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->area }}</small></td>
                    <td class='text-center'><small class="text-muted">{{ $incumplidos->tipopagod }}</small></td>
  

                    <td class='text-center'>
               

                </tr>
              
                           





                <span class="fi-icon-name" title="icon name" aria-hidden="true"></span>
               
                </tbody> 
 
                @endforeach
                
               
             </table>

              {!! $incumplido->render() !!}
               
                </div>
            </div>
            <a href="{{ route('incumplido.exportar') }}" class="btn btn-danger">Descargar Excel</a>&nbsp;&nbsp;&nbsp;&nbsp;
<a href="{{ route('incumplidos') }}" class="btn btn-success">Volver</a>
        </div>
    </div>
</div>-->

{{ form::submit('Descargar Excel', ['class' => 'btn btn-sm btn-primary']) }}&nbsp;&nbsp;&nbsp;&nbsp;


<a href="{{ route('incumplidos') }}" class=" btn btn-sm btn-success">Volver</a>


</center>
</div>
</div>
</div>
{!! Form::close() !!}
@endsection


@section('scripts')



  <script>
  
  $(function(){
    $('#select-plantilla').ON('change', onSelect);
});

function onSelect(){
    var plantilla_id = $(this).val();
    alert(plantilla_id);
}
  
  </script>
@endsection