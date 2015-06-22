@extends('admin.list.list')

@section('list-title')
    Boletas
@stop

@section('buttons')
    <a id="btn-open-wizard" href="#" class="btn btn-effect-ripple btn-important" >Nueva Boleta</a>
@stop

@section('list-content')
    @parent

@section('list-content-columns')
    <th class="text-center" style="width: 50px;">#</th>
    <th>Fecha</th>
    <th>Paciente</th>
    <th>Lugar enviado</th>
    <th>Usuario</th>
    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
@stop

@section('list-content-values')
    @foreach($data as $key => $value)
        <tr>
            <td class="text-center">{{ $key + 1 }}</td>
            <td>{{ date('d/m/Y',strtotime($value->created_at)) }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->place }}</td>
            <td>{{ $value->user->username }}</td>
            <td class="text-center">
                <a href="{{ action('Admin\BallotsController@getPDF', $value->id) }}" target="_blank" data-toggle="tooltip" title="Descargar Boleta de Referencia" class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>

            @if($value->state)
                <a  data-id="{{$value['id']}}"  data-toggle="tooltip" title="Descargar Contra Referencia" class="btn btn-effect-ripple btn-xs btn-success downloadDetalle"><i class="fa fa-download"></i></a>

                <a href="getImagen2/{{ $value->id }}" target="_blank" data-toggle="tooltip" title="Descargar Imagen Contra Boleta" class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
            @else
                <a data-id="{{$value['id']}}" class="detalleBallot btn btn-info btn-xs"
                       data-toggle="tooltip" data-placement="top" title="Llenar Contra Referencia" data-original-title="Llenar Contra Referencia" href="#"><i class="ace-icon fa fa-pencil bigger-120"></i></a>

            @endif
                <a href="getImagen/{{ $value->id }}" target="_blank" data-toggle="tooltip" title="Descargar Imagen Boleta" class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
            </td>
        </tr>
    @endforeach
@stop

@include('admin._ballots.create')
<div id="div-modal"></div>
<script>
    $(function(){
        CRUD.url_base = 'ballots';
        Helper.rules = {
            'name':{ required : true },
            'place'  : { required  : true }
        };
        Helper.messages = {
            'name':{ required : 'Debe ingresar el nombre del paciente' },
            'place' : { required : 'Debe ingresar el lugar a enviar' }
        }
//        Helper.validate('#form-create');
    })
</script>
{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}
@stop