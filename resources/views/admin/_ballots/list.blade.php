@extends('admin.list.list')

@section('list-title')
    Boletas
@stop

@section('buttons')
    <a id="btn-open-wizard" href="#" class="btn btn-next btn-fill btn-info btn-wd btn-sm" >Nueva Boleta</a>
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
                <a href="{{ action('Admin\BallotsController@getPDF', $value->id) }}" target="_blank" data-toggle="tooltip"  class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>

            @if($value->state)
                <a href="{{ action('Admin\BallotsController@getPDF2', $value->id) }}" target="_blank" data-toggle="tooltip"  class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>

                <a href="getImagen2/{{ $value->id }}" target="_blank" data-toggle="tooltip"  class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
            @else
                <a data-id="{{$value['id']}}" class="detalleBallot btn btn-info btn-xs fieldBallot" data-toggle="tooltip" data-placement="top" href="#"><i class="ace-icon fa fa-pencil bigger-120"></i></a>

            @endif
                <a href="getImagen/{{ $value->id }}" target="_blank" data-toggle="tooltip" class="btn btn-effect-ripple btn-xs btn-success download"><i class="fa fa-download"></i></a>
            </td>
        </tr>
    @endforeach
@stop
{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}
@stop
