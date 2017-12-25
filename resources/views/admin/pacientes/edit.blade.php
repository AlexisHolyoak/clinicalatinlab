@extends('admin.layouts.admin')

@section('title', 'Pacientes')
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registrar paciente</h2>
        <ul class="nav navbar-right panel-toolbox">
          <li>
            <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" style="display: block;">
        <form class="form-horizontal form-label-left" action="" method="post">
          <p class="text-muted font 13 m-b-30">
            Bienvenido a la seccion de registro de empresas, asegurate de ingresar los datos correctamente antes de aceptar.
          </p>

          <div class="form-group">
            <div class="col-md-3 col-sm-4 col-xs-12">
                <label for="prNombre">Primer Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
                <label for="sgNombre">Segundo Nombre</label>
                <input type="text" class="form-control" name="nombre">
            </div>
            <div class="col-md-3 col-sm-2 col-xs-12">
                <label for="aPaterno">Apellido Paterno</label>
                <input type="text" name="abreviatura" class="form-control" required>
            </div>
            <div class="col-md-3 col-sm-5 col-xs-12">
                <label for="aMaterno">Apellido Materno</label>
                <input type="text" name="giroNegocio" class="form-control" required>
            </div>

          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="sexo">Sexo</label>
                <div class="input-group">
                  <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-default active">
                      <input type="radio" name="sexo" value="masculino"> Masculino
                    </label>
                    <label class="btn btn-default">
                      <input type="radio" name="sexo" value="femenino"> Femenino
                    </label>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <div class="input-group">
                  <input type="text" name="fechaNacimiento" class="dtp1 form-control has-feedback-left" data-date-end-date="0d">
                  <span class="fa fa-calendar-o form-control-feedback left"></span>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="lugarNacimiento_id">Lugar de Nacimiento</label>
                <select class="form-control special2" style="width: 100%;" name="lugarNacimiento_id" required>
                    <option value=""></option>
                    <option value="1">Huacho</option>
                    <option value="2">Lima</option>
                </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <label for="discapacitado">Discapacitado</label>
              <div class="input-group">
                <input type="checkbox" class="bts-togg" name="discapacitado"  data-on="Si" data-off="No"/>
              </div>
            </div>

          </div>
          <div class="form-group">
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="tipoDocum">Tipo de documento</label>
                <select class="form-control" name="tipoDocum">
                  <option value="">DNI</option>
                  <option value="">Pasaporte</option>
                </select>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="nroDocum">Numero de documento</label>
                <input type="text" name="nroDocum" class="form-control" value="">
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" value="">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="number">Número</label>
                <input type="text" name="nroDirecc" class="form-control" value="">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="intDirecc">Interior</label>
                <input type="number" name="intDirecc" class="form-control" value="">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="mzaDirecc">Manzana</label>
                <input type="text" name="mzaDirecc" class="form-control" value="">
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
                <label for="lotDirecc">Lote</label>
                <input type="number" name="lotDirecc" class="form-control" value="">
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nroTelefono">N° Teléfono</label>
                  <input type="text" name="nroTelefono" class="form-control" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nroCelular">N° Celular</label>
                <input type="text" name="nroCelular" class="form-control" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nroTrabajo">N° Trabajo</label>
                <input type="text" name="nroTrabajo" class="form-control" value="" onkeypress='return event.charCode >= 48 && event.charCode <= 57'>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="residencia_id">Lugar de Residencia</label>
                <select class="form-control special2" style="width: 100%;" name="lugarNacimiento_id" required>
                    <option value=""></option>
                    <option value="1">Huacho</option>
                    <option value="2">Lima</option>
                </select>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="tipoLocali">Tipo de localidad</label>
                <input type="text" name="tipoLocali" class="form-control" value="">
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <label for="nombLocali">Nombre de localidad</label>
                <input type="text" name="nombLocali" class="form-control" value="">
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12">
                <label for="tipoFinanciador">Tipo de Financiador</label>
                <select class="form-control" name="tipoFinanciador">
                  <option value="">Convenio</option>
                  <option value="">Particular</option>
                </select>
            </div>
            <div class="col-md-1 col-sm-1 col-xs-12">
              <label for="veterinaria">Veterinaria</label>
              <div class="input-group">
                <input type="checkbox" class="bts-togg" name="veterinaria"  data-on="Si" data-off="No"/>
              </div>
            </div>

          </div>
          <div class="form-group">
            <div class="col-md-10 col-sm-10 col-xs-12">
              <label for="observacion">Observación</label>
              <textarea name="observacion" rows="2" cols="80" class="form-control" style="resize:none;"></textarea>
            </div>
          </div>
          <div class="form-group">
              <div class="col-md-10 col-sm-10 col-xs-12">
                  <a href="{{route('pacientes.index')}}" class="btn btn-danger">Cancelar</a>
              </div>
              <div class="col-md-2 col-sm-2 col-xs-12">
                  <div class="col-md-4 col-sm-4 col-xs-12"></div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                      <a href="{{route('pacientes.index')}}" class="btn btn-primary">Guardar</a>
                  </div>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('style')
<!--nprogress-->
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<!--select2-->
<link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('css/select2-bootstrap.min.css')}}">
<!--daterangepicker-->
<link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.min.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
<!--bootstrap toggle-->
<link rel="stylesheet" href="{{asset('css/bootstrap-toggle.min.css')}}">
@endsection

@section('script')
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--select2-->
<script type="text/javascript" src="{{asset('js/select2.min.js')}}"></script>
<!--bootstrap switch-->
<script type="text/javascript" src="{{asset('js/bootstrap-toggle.min.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
function alphaOnly(event) {var inputValue = event.charCode;if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){event.preventDefault();}
};
$(document).ready(function() {
  function selection(){
    $('.special2').select2({
      placeholder: 'Seleccione uno...',
      theme: "bootstrap"
    });
  }
  function toggler(){
    $('.bts-togg').bootstrapToggle();
  }
  function date(){
    $('.dtp1').datepicker();
  }
  date();
  toggler();
  selection();

});
</script>
@endsection
