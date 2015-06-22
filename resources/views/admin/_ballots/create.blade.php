<div class="wizard" id="satellite-wizard" data-title="Ministerio de Salud Pública y Asistencia Social">
    <div class="wizard-card" data-cardname="name">
        <div class="div-scroll" >
            <h3>Boleta Referencia</h3>
            <div class="wizard-input-section">
                <p>
                    Servicio de Salud al que se envía:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Group1Dato1" name="Group1Dato1" placeholder="Envía"  required>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Servicio de Salud que refiere:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Group1Dato2" name="Group1Dato2" placeholder="Refiere" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Fecha:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="date" class="form-control" id="Group1Dato3" name="Group1Dato3"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Nombre del Paciente:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Group1Dato4" name="Group1Dato4" placeholder="Nombre"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Historial de Enfermedad Actual:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Group1Dato5" name="Group1Dato5" placeholder="Historial" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Tipo de Consulta:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <select class = "form-control" name="Group1Dato20">
                            <option value = "Externa">Consulta Externa</option>
                            <option value = "Emergencia">Emergencia</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Telefono:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="Group1Dato6" name="Group1Dato6" placeholder="Telefono"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Hora de Traslado:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="time" name="Group1Dato7" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Edad:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Group1Dato8" name="Group1Dato8" placeholder="Edad"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Sexo:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <select class = "form-control" name="Group1Dato9">
                            <option value = "Masculino">Masculino</option>
                            <option value = "Femenino">Femenino</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wizard-card" data-cardname="group">
        <div class="div-scroll">
            <h3>Medicos</h3>
            <div class="wizard-input-section">
                <p>
                    Médicos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="Group2Dato1" placeholder ="Antecedentes Medicos"rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Mentales:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="Group2Dato2" placeholder ="Antecedentes Mentales"rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Quirúrgicos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="Group2Dato3" placeholder ="Antecedentes Quirurgicos"rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Traumáticos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="Group2Dato4" placeholder ="Antecedentes Traumaticos"rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Alérgicos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="Group2Dato5" placeholder ="Antecedentes Alergicos"rows="3"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wizard-card" data-cardname="services">
        <div class="div-scroll">
            <h3>Gíneco-Obstétricos</h3>
            <div class="wizard-input-section">
                <p>
                    Gestas:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo3Dato1" name="Grupo3Dato1" placeholder="Gestas"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Partos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo3Dato2" name="Grupo3Dato2" placeholder="Partos"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Abortos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo3Dato3" name="Grupo3Dato3" placeholder="Abortos" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Hijos Vivos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo3Dato4" name="Grupo3Dato4" placeholder="Hijos Vivos"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Hijos Muertos:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo3Dato5" name="Grupo3Dato5" placeholder="Hijos Muertos"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    FUR:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo3Dato6" name="Grupo3Dato6" placeholder="FUR"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    CSTP:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo3Dato7" name="Grupo3Dato7" placeholder="CSTP"  required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Otros:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" name="Grupo3Dato8" placeholder ="Otros"rows="3" required ></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wizard-card" data-cardname="location">
        <div class="div-scroll">
            <h3>Examen Físico</h3>
            <div class="wizard-input-section">
                <p>
                    Peso:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo4Dato1" name="Grupo4Dato1" placeholder="Peso" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Talla:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo4Dato2" name="Grupo4Dato2" placeholder="Talla" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Pulso:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo4Dato3" name="Grupo4Dato3" placeholder="Pulso" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    P/A:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo4Dato4" name="Grupo4Dato4" placeholder="P/A" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    F/R:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo4Dato5" name="Grupo4Dato5" placeholder="F/R" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    To:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo4Dato6" name="Grupo4Dato6" placeholder="To" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    FCF:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="Grupo4Dato7" name="Grupo4Dato7" placeholder="FCP" required>
                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Examenes Realizados:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" id="Grupo4Dato8" name="Grupo4Dato8" placeholder="Examenes Realizados" data-is-valid="0" data-lookup="0" rows="3"></textarea>

                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Impresion Clínica:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" id="Grupo4Dato9" name="Grupo4Dato9" placeholder="Impresion Clínica" data-is-valid="0" data-lookup="0" rows="3"></textarea>

                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Motivo de Referencia:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" id="Grupo4Dato10" name="Grupo4Dato10" placeholder="Motivo de Referencia" data-is-valid="0" data-lookup="0" rows="3"></textarea>

                    </div>
                </div>
            </div>
            <div class="wizard-input-section">
                <p>
                    Tratamiento y Manejo Efectuado en el Servicio:
                </p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea class="form-control" id="Grupo4Dato11" name="Grupo4Dato11" placeholder="Tratamiento y Manejo Efectuado en el Servicio" data-is-valid="0" data-lookup="0" rows="3"></textarea>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>