@extends('admin.list.list')

@section('list-title')
    Nuevo Registro
@stop

@section('buttons')
    <a id="btn-cancel-wizard" href="#" class="btn btn-next btn-fill btn-danger btn-wd btn-sm" >Cancelar</a>
@stop

@section('list-content')
    @parent
    <div class="wizard-container">
          <form action="ballots" method="POST" name = "form-wizar" id = "form-create" >
            <div class="card wizard-card ct-wizard-azzure" id="wizard">
              <ul>
                <li><a href="#about" data-toggle="tab">Boleta Referencia</a></li>
                <li><a href="#account" data-toggle="tab">Medicos</a></li>
                <li><a href="#address" data-toggle="tab">Gineco-Obstetricos</a></li>
                <li><a href="#laboral" data-toggle="tab">Examen Fisico</a></li>
              </ul>

            <div class="tab-content">
              <!-- Boleta referencia -->
              <div class="tab-pane" id="about">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Servicio de salud al que se envía?</label>
                        <input type="text" class="form-control" id="Group1Dato1" name="Group1Dato1" placeholder="Envía"  required>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿Servicio de salud que refiere?</label>
                        <input type="text" class="form-control" id="Group1Dato2" name="Group1Dato2" placeholder="Refiere" required>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Fecha actual?</label>
                        <input type="date" class="form-control" id="Group1Dato3" name="Group1Dato3"  required>
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿Nombre del paciente?</label>
                        <input type="text" class="form-control" id="Group1Dato4" name="Group1Dato4" placeholder="Nombre"  required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿Historial de enfermedad actual?</label>
                        <input type="text" class="form-control" id="Group1Dato5" name="Group1Dato5" placeholder="Historial" required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿Tipo de consulta?</label>
                        <select class = "form-control" name="Group1Dato20">
                            <option value = "Externa">Consulta Externa</option>
                            <option value = "Emergencia">Emergencia</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿Telefono?</label>
                        <input type="text" class="form-control" id="Group1Dato6" name="Group1Dato6" placeholder="Telefono"  required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿Hora de traslado?</label>
                        <input type="time" name="Group1Dato7" class="form-control" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿Edad?</label>
                        <input type="number" class="form-control" id="Group1Dato8" name="Group1Dato8" placeholder="Edad"  required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿Sexo?</label>
                        <select class = "form-control" name="Group1Dato9">
                            <option value = "Masculino">Masculino</option>
                            <option value = "Femenino">Femenino</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Informacion medicos -->
              <div class="tab-pane" id="account">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Medicos?</label>
                        <textarea class="form-control" name="Group2Dato1" placeholder ="Antecedentes Medicos"rows="3"></textarea>
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿Mentales?</label>
                        <textarea class="form-control" name="Group2Dato2" placeholder ="Antecedentes Mentales"rows="3"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Quirurgicos?</label>
                        <textarea class="form-control" name="Group2Dato3" placeholder ="Antecedentes Quirurgicos"rows="3"></textarea>
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿Traumaticos?</label>
                        <textarea class="form-control" name="Group2Dato4" placeholder ="Antecedentes Traumaticos"rows="3"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿Alergicos?</label>
                        <textarea class="form-control" name="Group2Dato5" placeholder ="Antecedentes Alergicos"rows="3"></textarea>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Informacion Gíneco-Obstétricos -->
              <div class="tab-pane" id="laboral">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Peso?</label>
                        <input type="number" class="form-control" id="Grupo4Dato1" name="Grupo4Dato1" placeholder="Peso" required>
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿Talla?</label>
                        <input type="number" class="form-control" id="Grupo4Dato2" name="Grupo4Dato2" placeholder="Talla" required>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Pulso?</label>
                        <input type="number" class="form-control" id="Grupo4Dato3" name="Grupo4Dato3" placeholder="Pulso" required>
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿P/A?</label>
                        <input type="number" class="form-control" id="Grupo4Dato4" name="Grupo4Dato4" placeholder="P/A" required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿F/R?</label>
                        <input type="number" class="form-control" id="Grupo4Dato5" name="Grupo4Dato5" placeholder="F/R" required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿To?</label>
                        <input type="number" class="form-control" id="Grupo4Dato6" name="Grupo4Dato6" placeholder="To" required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿FCF?</label>
                        <input type="number" class="form-control" id="Grupo4Dato7" name="Grupo4Dato7" placeholder="FCP" required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿Examenes realizados?</label>
                        <textarea class="form-control" id="Grupo4Dato8" name="Grupo4Dato8" placeholder="Examenes Realizados" data-is-valid="0" data-lookup="0" rows="3"></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿Impresion clinica?</label>
                        <textarea class="form-control" id="Grupo4Dato9" name="Grupo4Dato9" placeholder="Impresion Clínica" data-is-valid="0" data-lookup="0" rows="3"></textarea>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿Motivo de referencia?</label>
                         <textarea class="form-control" id="Grupo4Dato10" name="Grupo4Dato10" placeholder="Motivo de Referencia" data-is-valid="0" data-lookup="0" rows="3"></textarea>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿Tratamiento y manejo efectuado en el servicio?</label>
                         <textarea class="form-control" id="Grupo4Dato11" name="Grupo4Dato11" placeholder="Tratamiento y Manejo Efectuado en el Servicio" data-is-valid="0" data-lookup="0" rows="3"></textarea>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <!-- examenes fisicos -->
              <div class="tab-pane" id="address">
                <div class="row">
                  <div class="col-sm-10 col-sm-offset-1">
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Gestas?</label>
                        <input type="number" class="form-control" id="Grupo3Dato1" name="Grupo3Dato1" placeholder="Gestas"  required>
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿Partos?</label>
                        <input type="number" class="form-control" id="Grupo3Dato2" name="Grupo3Dato2" placeholder="Partos"  required>
                      </div>
                    </div>
                    <div class="row">
                      <!-- Nombres -->
                      <div class="form-group col-xs-6">
                        <label>¿Abortos?</label>
                        <input type="number" class="form-control" id="Grupo3Dato3" name="Grupo3Dato3" placeholder="Abortos" required>
                      </div>
                      <!-- pellidos -->
                      <div class="form-group col-xs-6">
                        <label>¿Hijos vivos?</label>
                        <input type="number" class="form-control" id="Grupo3Dato4" name="Grupo3Dato4" placeholder="Hijos Vivos"  required>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿Hijos muertos?</label>
                        <input type="number" class="form-control" id="Grupo3Dato5" name="Grupo3Dato5" placeholder="Hijos Muertos"  required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿FUR?</label>
                        <input type="number" class="form-control" id="Grupo3Dato6" name="Grupo3Dato6" placeholder="FUR"  required>
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-xs-6">
                        <label>¿CSTP?</label>
                        <input type="number" class="form-control" id="Grupo3Dato7" name="Grupo3Dato7" placeholder="CSTP"  required>
                      </div>
                      <div class="form-group col-xs-6">
                        <label>¿Otros?</label>
                        <textarea class="form-control" name="Grupo3Dato8" placeholder ="Otros"rows="3" required ></textarea>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
            </div>
              <!-- Pie de pagina-->
              <div class="wizard-footer">
                <div class="pull-right">
                  <input type='button' class='btn btn-next btn-fill btn-info btn-wd btn-sm' name='next' value='Siguiente' />
                  <input type='button' class='btn btn-finish btn-fill btn-info btn-wd btn-sm' name='finish' value='Confirmar' />
                </div>
                <div class="pull-left">
                  <input type='button' class='btn btn-previous btn-fill btn-info btn-wd btn-sm' name='previous' value='Atras' />
                </div>
                <div class="clearfix">

                </div>
              </div>
              </div>
          </form>
    </div><!-- Final-->

{!! Html::script('app/helpers/crud_operate.js') !!}
{!! Html::script('app/admin/generate.js') !!}
{!! Html::script('wizar/js/jquery.bootstrap.wizard.js') !!}
{!! Html::script('wizar/js/wizard.js') !!}
{!! Html::script('wizar/js/ajaxupload-v1.2.js') !!}
@stop
