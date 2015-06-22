@extends('admin.layout.modal')

@section('modal-title')
    Boleta Contra Referencia
@stop

@section('modal-id')
    "createDetailBallot"
@stop

@section('modal-body')
    {!! Form::open(['url' => 'employees','id'=>'form-create-Detail','method' => 'POST','class'=>'form-horizontal']) !!}

    <input type="hidden" name="idBallot" value = "{{ $id }}" />

    <div class="form-group">
        <label class="col-md-4 control-label" for="address">Direccion del Paciente</label>
        <div class="col-md-8">
            <input type="text" name = "addres" class="form-control" placeholder="Direccion" required/>
        </div>
    </div>


    <div class="form-group">
        <label class="col-md-4 control-label" for="address">Servicio a donde se contra refiere:</label>
        <div class="col-md-8">
            <input type="text" name = "servicioRefiere" class="form-control" placeholder="Servicio donde refiere" required/>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="address">Resumen Evolucion</label>
        <div class="col-md-8">
            <textarea class="form-control" name="resumen" placeholder ="Resumen" rows="3"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="address">Tratamiento Brindado</label>
        <div class="col-md-8">
            <textarea class="form-control" name="tratamiento" placeholder ="Tratamiento"rows="3"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="address">Diagnostico</label>
        <div class="col-md-8">
            <textarea class="form-control" name="diagnostico" placeholder ="Diagnostico" rows="3"></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="address">Recomendaciones</label>
        <div class="col-md-8">
            <textarea class="form-control" name="recomendaciones" placeholder ="Recomendaciones"rows="3"></textarea>
        </div>
    </div>
    {!! Form::close() !!}
@stop

@section('modal-footer')
    <button id="btnSaveDetailBallot" type="button" class="btn btn-effect-ripple btn-primary">Guardar</button>
    <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Cancelar</button>
@stop

{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}