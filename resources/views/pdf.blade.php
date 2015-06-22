<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Registros</title>
	<style type="text/css">
		.oculto
		{
			color: white;
		}
		.header {	
			height: 50px;	
			width: 100%;
		}
		.logo img {
			height: 90%;
			padding-left: 2px;
			padding-top: 2px;
			width: 90%;
		}
		.logo {
			display: inline-block;
			width: 25%;
		}
		.title {
			display: inline-block;
			width: 74%;
		}

		.title p {		
			font-size: 1em;
			padding-left: 50px;
		}

		.boleta {
			font-size: 12px;
			height: 125px;
			width: 100%;
		}

		.boletaHeader {
			width: 100%;		
		}
		.boletaTitle {
			display: inline-block;
			font-size: 16px;
			text-align: right;
			width: 70%;	
		}
		.boletaTitle strong {
			padding-right: 35px;
		}
		.boletaNumero {
			display: inline-block;
			width: 29%;
		}
		.boletaNumero input {
			font-size:  8px;
			text-align: center;
			width: 75px;
		}
		.boletaBody {
			width: 100%;
		}
		.boletaBodyLeft {
			display: inline-block;		
			font-size: 10px;
			width: 50%;
		}
		.boletaBodyRight {
			display: inline-block;
			font-size: 10px;		
			width: 49%;
		}
		.label{		
			display: inline-block;
			padding-top: 7px;
			width: 40%;
		}
		.input{		
			display: inline-block;		
			width: 59%;
		}
		.input input {
			border: none;
			border-bottom: solid 1px black;			
			width: 190px;
		}
		.labelRight {
			display: inline-block;
			width: 50%;		
		}
		.inputRight {
			display: inline-block;
			width: 49%;	
		}
		.inputRight input {
			border: none;
			border-bottom: solid 1px black;			
			font-size: 8px;
			text-align: center;
			width: 150px;
		}
		.divLeft {
			display: inline-block;
			width: 50%;
		}
		.divLeftx {
			display: inline-block;
			width: 49%;
		}
		.labelx {
			display: inline-block;
			width: 50%;
		}
		.inputx {
			display: inline-block;
			width: 49%;
		}
		.inputx input {
			border: none;
			border-bottom: solid 1px black;			
			font-size: 8px;
			text-align: center;
			width: 63px;
		}
		.divR {
			padding-top: 3px;
		}

		.divR strong {
			padding-top: 2px;
		}
		.boletaFoother{
			font-size: 10px;
			width: 100%;		
		}
		.boletaFoother input {
			width: 100%;	
		}
		#label {
			display: inline-block;
			padding-top: 5px;
			width: 20%;
		}
		#area {
			display: inline-block;
			width: 77.3%;
		}
		.medicos {		
			border: solid 1.3px black;				
			margin-right: 18px;
			width: 100%;
		}
		.medicosTitle {
			background: #0074B7;
			border-bottom: solid 1.3px black;
			font-size: 14px;
			text-align: center;		
			width: 99.95%;
		}
		.medicosBody {
			width: 100%;
		}
		.medicosBodyLeft {
			display: inline-block;
			font-size: 10px;
			width: 50%;
		}
		.medicosBodyRight {
			display: inline-block;
			font-size: 10px;
			padding-right: 2.8px;
			width:49%;
		}
		.medicLabel{
			display: inline-block;
			padding-top: 5px;
			width: 20%;
		}
		.medicLabel strong {
			padding-left: 5px;
		}
		.medicInput {
			display: inline-block;
			width: 79%;
		}
		.medicInput input {
			border: none;
			border-bottom: solid 1px black;			
			width: 100%;
		}	
		.medicosFoother {
			font-size : 10px;
			width: 100%;
		}
		.fox {
			display: inline-block;
			padding-top: 5px;		
			width: 10%;
		}
		.fox strong {
			padding-left: 5px;
		}
		.foxx {
			display: inline-block;
			width: 89%;
		}
		.foxx input {
			border: none;		
			width: 100%;
		}
		.blo {
			display: inline-block;
			font-size: 10px;
			width: 22%;		
		}
		.bloLabel {
			display: inline-block;		
			padding-top: 5px;
			width: 45%;
		}
		.bloLabel strong {
			padding-left: 5px;
		}
		.bloInput {
			display: inline-block;		
			width: 54%;
		}
		.bloInput input {
			text-align: center;
			width: 100%;
		}
		.elementBlo {
			font-size: 10px;
			width: 100%;
		}
		.elementBlo strong {
			font-size: 11px;
			padding-left: 5px;
		}
		.elementBlo input {
			border:none;
			border-bottom: 1px solid black;
			border-top: 1px solid black;			
			padding-left: 5px;
			width: 100%;
		}
		.eleStron {
			padding-top: -10px;
		}
		.eleInt {
			padding-top: -10px;
		}
		.firmas{
			font-size: 10px;
			width: 100%;
		}
		.firmasLesf {
			display: inline-block;
			padding-top: 15px;
			text-align: center;
			width: 50%;
		}
		.firmasLesf input {
			border:none;
			border-bottom: solid 1px black;			
			color: white;
			margin: 0 auto;
			width: 240px;
		}
		.firmasLesf p {
			margin-top: -3px;
		}

		.firmasRight {
			display: inline-block;
			padding-top: 15px;
			text-align: center;
			width: 49%;
		}
		.firmasRight input {
			border:none;
			border-bottom: solid 1px black;			
			color: white;
			margin: 0 auto;
			width: 175px;
		}
		.firmasRight p {
			margin-top: -3px;
		}
		.firmaFoother{
			width: 100%;
		}

		.firmaFoother input 
		{
			border:none;
			border-bottom: solid 1px black;			
			color: white;
			width: 499px;
		}

		.boletaContra {			
			padding-right: 16px;
			border: none;	
			border-top-color: #ff0000;
			border-top-style: dashed;
			border-top-width:2px;			
			widows: 100%;
		}
		.titleContra {
			text-align: center;
			width: 100%;
		}
		.correlativoContra {	
			font-size: 10px;
			width: 100%;
		} 
		.correlativoContraLeft {	
			display: inline-block;
			margin-top: 6px;
			text-align: right;
			width: 80%;
		}
		.correlativoContraRight {
			display: inline-block;
			width: 19%;
		}
		.correlativoContraRight input {
			border:none;
			border-bottom: solid 1px black;			
			font-size: 10px;
			width: 100%;
		}
		.bodyContra {
			width: 100%;
		}
		.leftBodyContra {
			display: inline-block;
			font-size: 10px;
			padding-bottom: 5px;
			width: 22%;
		}
		.rightBodyContra {
			display: inline-block;
			font-size: 10px;
			width: 77%;
		}
		.rightBodyContra input{
			border:none;
			border-bottom: 1px solid black;			
			width: 100%;
		}
		.footherContraReferencia {
			padding-top: 15px;
			text-align: center;
		}
		.footherContraReferencia p{
			margin-top: -2px;
		}
		.firmasRightDos {
			padding-top: 10px;
		}
		.firmasLesfDos {
			padding-top: 10px;
		}
		.bodyContra {
			width: 100%;
		}
		.trileft {
			display: inline-block;
			width: 55%;		
		}
		.tricenter {
			display: inline-block;
			width: 22%;
		}
		.triright {
			display: inline-block;
			width: 21%;
		}
		.rightBodyContraDos {
			width: 60%;		
		}
		.leftBodyContraDos {
			margin-top: 5px;
			width: 40%;
		}
		.tricenter {
			font-size: 10px;
		}
		.tricenter input {
			border:none;
			border-bottom: 1px black solid; 			
			text-align: center;
		}
		.triright {
			font-size: 10px;
		}
		.triright input {
			width: 79%;
			border:none;
			border-bottom: 1px black solid; 			
			text-align: center;
		}
	</style>		
</head>
<body>
<div class ="header">
	<div class = "logo">
		<img src="logo.jpg">
	</div>
	<div class = "title">
		<p><strong>Ministerio de Salud Pública y Asistencia Social</strong></p>
	</div>
</div>
<div class="boleta">
	<div class="boletaHeader">
		<div class="boletaTitle">
			<strong>BOLETA DE REFERENCIA</strong>
		</div>
		<div class="boletaNumero">
			Númeo correlativo<input type ="text" value =" 54564">
		</div>
	</div>
	<div class="boletaBody">
		<div class="boletaBodyLeft">
			<div>
				<div class="label"><strong>Fecha:</strong></div>
				<div class="input"><input type = "text" value = "{{$data['Group1Dato3']}}"></div>					
			</div>
			<div>
				<div class="label"><strong>Nombre del Paciente:</strong></div>
				<div class="input"><input type = "text" value = "{{$data['Group1Dato4']}}"></div>				
			</div>
			<div>
				<div class="label"><strong>Servicio de salud que refiere:</strong></div>
				<div class="input"><input type = "text" value = "{{$data['Group1Dato2']}}"></div>
			</div>
			<div>
				<div class="label"><strong>Servicio de salud al que se envia:</strong> </div>
				<div class="input"><input type = "text" value = "{{$data['Group1Dato1']}}"></div>
			</div>
		</div>
		<div class="boletaBodyRight">
			<div class = "divR">
				<div class="labelRight"><strong>Hora del traslado:</strong></div>
				<div class="inputRight"><input type = "text" value = "{{ date('H:m:i',strtotime($data['Group1Dato7'])) }}"></div>					
			</div>
			<div class = "divR">
				<div class="labelRight"><strong>Telefono:</strong></div>
				<div class="inputRight"><input type = "text" value = "{{$data['Group1Dato6']}}"></div>					
			</div>
			<div class = "divR">
				@if($data["Group1Dato20"] === "Externa")
					<div class = "divLeft">
						<div class="labelx"><strong>Consulta Externa:</strong></div>				
						<div class="inputx"><input type = "text" value = " X "></div>				
					</div>
					<div class = "divLeftx">					
						<div class="labelx"><strong>Emergencia:</strong></div>
						<div class="inputx"><input type = "text" value = " --- "></div>				
					</div>
				@else
					<div class = "divLeft">
						<div class="labelx"><strong>Consulta Externa:</strong></div>				
						<div class="inputx"><input type = "text" value = " --- "></div>				
					</div>
					<div class = "divLeftx">					
						<div class="labelx"><strong>Emergencia:</strong></div>
						<div class="inputx"><input type = "text" value = " X "></div>				
					</div>
				@endif
			</div>
			<div class = "divR">
				<div class = "divLeft">					
					<div class="labelx"><strong>Edad:</strong></div>
					<div class="inputx"><input type = "text" value = "{{$data['Group1Dato8']}}"></div>				
				</div>
				<div class = "divLeftx">					
					<div class="labelx"><strong>Sexo:</strong></div>
					<div class="inputx"><input type = "text" value = "{{$data['Group1Dato9']}}"></div>				
				</div>
			</div>
		</div>
	</div>
	<div class="boletaFoother">
		<div id = "label">
			<strong>Historia de la enfermad actual:</strong>
		</div>
		<div id ="area">
			<input type = "text"  value = "{{$data['Group1Dato5']}}">
		</div>		
	</div>
</div>
<br/>
<div class="medicos">
	<div class="medicosTitle">
		<strong>Antecedentes Médicos</strong>
	</div>
	<div class="medicosBody">
		<div class="medicosBodyLeft">
			<div>
				<div class = "medicLabel"><strong>Médicos:</strong></div>
				<div class = "medicInput">
					
					@if($data['Group2Dato1'] === '')
						<input  type = "text" value = "----------------">	
					@else
						<input type = "text" value = "{{$data['Group2Dato1']}}">
					@endif
				</div>
			</div>	
			<div>
				<div class = "medicLabel"><strong>Quirúrgicos:</strong></div>
				<div class = "medicInput">					
					@if($data['Group2Dato3'] === '')
						<input  type = "text" value = "----------------">	
					@else
						<input type = "text" value = "{{$data['Group2Dato3']}}">
					@endif
				</div>
			</div>
		</div>
		<div class="medicosBodyRight">
			<div>
				<div class = "medicLabel"><strong>Mentales:</strong></div>
				<div class = "medicInput">
					
					@if($data['Group2Dato2'] === '')
						<input  type = "text" value = "----------------">	
					@else
						<input type = "text" value = "{{$data['Group2Dato2']}}">
					@endif	
				</div>
			</div>	
			<div>
				<div class = "medicLabel"><strong>Traumáticos:</strong></div>
				<div class = "medicInput">					
						@if($data['Group2Dato4'] === '')
							<input  type = "text" value = "----------------">	
						@else
							<input type = "text" value = "{{$data['Group2Dato4']}}">
						@endif	
				</div>
			</div>
		</div>
	</div>
	<div class="medicosFoother">
		<div class = "fox">
			<strong>Alérgicos:</strong>
		</div>
		<div class = "foxx">			
			@if($data['Group2Dato5'] === '')
				<input  type = "text" value = "----------------">	
			@else
				<input type = "text" value = "{{$data['Group2Dato5']}}">
			@endif	
		</div>
	</div>
</div>
<br/>
<div class="medicos">
	<div class="medicosTitle">
		<strong>Antecedentes Gíneco-Obstétricos</strong>
	</div>
	<div class="medicosBody">
		<div>
			<div class="blo">
				<div class="bloLabel"><strong>Gestas</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo3Dato1']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>Partos</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo3Dato2']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>Abortos</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo3Dato3']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>Hijos vivos</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo3Dato4']}}"></div>
			</div>
		</div>
		<div>
			<div class="blo">
				<div class="bloLabel"><strong>Hijos Muertos</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo3Dato5']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>FUR</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo3Dato6']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>CSTP</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo3Dato7']}}"></div>
			</div>
		</div>
	</div>
	<div class="medicosFoother">
		<div class = "fox">
			<strong>Otros:</strong>
		</div>
		<div class = "foxx">
			<input type = "text" value = "{{$data['Grupo3Dato8']}}">
		</div>
	</div>
</div>
<br/>
<div class="medicos">
	<div class="medicosTitle">
		<strong>Examen Físico</strong>
	</div>
	<div class="medicosBody">
		<div>
			<div class="blo">
				<div class="bloLabel"><strong>Peso</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo4Dato1']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>Talla</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo4Dato2']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>Pulso</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo4Dato3']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>P/A</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo4Dato4']}}"></div>
			</div>
		</div>
		<div>
			<div class="blo">
				<div class="bloLabel"><strong>F/R</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo4Dato5']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>T°</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo4Dato6']}}"></div>
			</div>
			<div class="blo">
				<div class="bloLabel"><strong>FCF</strong></div>
				<div class="bloInput"><input type = "text" value = "{{$data['Grupo4Dato7']}}"></div>
			</div>
		</div>
	</div>
	<div class = "elementBlo">
		<div class="eleStron">
			<p><strong>Exámenes Realizados:</strong></p>
		</div>
		<div class="eleInt">
			
			@if($data['Grupo4Dato8'] === '')
				<input  type = "text" value = "----------------">	
			@else
				<input  type = "text" value = "{{$data['Grupo4Dato8']}}">
			@endif		
		</div>
	</div>
	<div class = "elementBlo">
		<div class="eleStron">
			<p><strong>Impresión Clínica:</strong></p>
		</div>
		<div class="eleInt">			
			@if($data['Grupo4Dato9'] === '')
				<input  type = "text" value = "----------------">	
			@else
				<input  type = "text" value = "{{$data['Grupo4Dato9']}}">	
			@endif	
		</div>
	</div>
	<div class = "elementBlo">
		<div class="eleStron">
			<p><strong>Motivo de la referencia:</strong></p>
		</div>
		<div class="eleInt">
			@if($data['Grupo4Dato10'] === '')
				<input  type = "text" value = "----------------">	
			@else
				<input  type = "text" value = "{{$data['Grupo4Dato10']}}">	
			@endif
		</div>
	</div>
	<div class = "elementBlo">
		<div class="eleStron">
			<p><strong>Tratamiento y Manejo efectuado en el servicio:</strong></p>
		</div>
		<div class="eleInt">
			@if($data['Grupo4Dato11'] === '')
				<input  type = "text" value = "----------------">	
			@else
				<input  type = "text" value = "{{$data['Grupo4Dato11']}}">	
			@endif			
		</div>
	</div>
</div>
<div class="firmas">
	<div class="firmasLesf">
		<input type = "text" value = ".">
		<div>
			<label>Nombre,cargo,firma y sello</label>
			<p>de <strong>quien refiere</strong></p>
		</div>
	</div>
	<div class="firmasRight">
		<input type = "text"value= "prueba">
		<div>
			<label>Nombre,cargo,firma y sello</label>
			<p>de <strong>quien recibe la referencia</strong></p>
		</div>
	</div>
	<div class="firmaFoother">
		Fecha y Hora en que se recibe la referencia: <input type = "text" value="xs">
	</div>
</div>

<div class="boletaContra">
    <div class = "titleContra">
        <strong>BOLETA DE CONTRA REFERENCIA</strong>
    </div>
    <div class="correlativoContra">
        <div class = "correlativoContraLeft">
            Número correlativo:
        </div>
        <div class = "correlativoContraRight">
            <input type = "text" value = "2" class = "oculto">
        </div>
    </div>
    <div class="bodyContra">
        <div class="trileft">
            <div class="leftBodyContra leftBodyContraDos">
                <strong>Nombre del Paciente:</strong>
            </div>
            <div class="rightBodyContra rightBodyContraDos">
                <input type = "text" value = "*" class = "oculto">
            </div>
        </div>
        <div class="tricenter">
            Edad: <input type = "text" value = "*" class = "oculto">
        </div>
        <div class="triright">
            Sexo: <input type = "text" value = "*" class = "oculto">
        </div>

    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Dirección del Paciente:</strong>
        </div>
        <div class="rightBodyContra">
            <input type = "text" value = "*" class = "oculto" >
        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Servicio que atendió:</strong>
        </div>
        <div class="rightBodyContra">
            <input type = "text" value = "*" class = "oculto">
        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Servicio a donde se contra refiere:</strong>
        </div>
        <div class="rightBodyContra">
            <input type = "text" value = "*" class = "oculto">
        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Resumen de la evolucion:</strong>
        </div>
        <div class="rightBodyContra">
            <input type = "text" value = "*" class = "oculto">
        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Tratamiento Brindado:</strong>
        </div>
        <div class="rightBodyContra">
            <input type = "text" value = "*" class = "oculto">

        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Diagnostico:</strong>
        </div>
        <div class="rightBodyContra">
            <input type = "text" value ="*" class = "oculto">
        </div>
    </div>
    <div class="bodyContra">
        <div class="leftBodyContra">
            <strong>Recomendaciones:</strong>
        </div>
        <div class="rightBodyContra">
            <input type = "text" value = "*" class = "oculto">
        </div>
    </div>
    <div class="firmas">
        <div class="firmasLesf firmasLesfDos">
            <input type = "text" value = "*" class = "oculto">
            <div>
                <strong>Nombre y firma y cargo del responsable de la atencion</strong>
            </div>
        </div>
        <div class="firmasRight firmasRightDos">
            <input type = "text"value= "*" class = "oculto">
            <div>
                <strong>fecha del alta</strong>
            </div>
        </div>
        <div class="footherContraReferencia">
            <label><strong>6ta. Avenida 3-45 zona 11</strong></label>
            <p><strong>Teléfono: P.B.X. 2444-7474</strong></p>
        </div>
    </div>
</div>

</body>
</html>
