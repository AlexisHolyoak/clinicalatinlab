@extends('admin.layouts.admin')

@section('title', 'Pacientes Ocupacionales')
@section('title-right')
<div>
  <a href="{{route('ocupacional.create')}}" class="btn btn-primary">Registrar paciente ocupacional</a>
</div>
@endsection
@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registros de pacientes ocupacionales</h2>
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
            Bienvenido a la seccion de administracion de pacientes ocupacionales, aqui podra registrar, visualizar, actualizar o eliminar un paciente ocupacional.
          </p>
          <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datatable_wrapper">
            <div class="row">
              <div class="table-responsive">
                <table id="t_data_tables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th data-priority="1">Nombre</th>
                      <th>N° Historia</th>
                      <th>Empresa</th>
                      <th>Fecha de evaluación</th>

                      <th data-priority="2" width="1%">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Alexis Jesus Peralta Holyoak</td>
                      <td>111111</td>
                      <td>TopiTop</td>
                      <td>24/10/1997</td>

                      <td><a href="{{route('ocupacional.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>

                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>TITO NIEVES</td>
                      <td>222222</td>
                      <td>Ripley</td>
                      <td>24/10/1997</td>

                      <td><a href="{{route('ocupacional.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>

                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>JUANA LA CUBANA</td>
                      <td>3333333</td>
                      <td>Redondos</td>
                      <td>24/10/1997</td>

                      <td><a href="{{route('ocupacional.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>

                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include('admin.pacientes.delete')
@endsection

@section('style')
<!--DataTable-->
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/buttons.dataTables.min.css')}}">
<!--nprogress-->
<link rel="stylesheet" href="{{asset('css/nprogress.css')}}">
<!--Custom theme styles-->
<link rel="stylesheet" href="{{asset('css/custom.min.css')}}">
@endsection

@section('script')
<!--DataTable-->
<script type="text/javascript" src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/responsive.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/buttons.print.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/jszip.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/pdfmake.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/vfs_fonts.js')}}"></script>
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){$("#t_data_tables").DataTable({
    dom: 'Bfrtip',
    buttons:[{
      extend: 'pdf',
         footer: true,
         title:'Reporte de pacientes ocupacionales',
         exportOptions: {
              columns: [0,1,2,3,4]
          }
    },
    {
          extend: 'excel',
          title:'Reporte de pacientes ocupacionales',
          exportOptions: {
              columns: [0,1,2,3.4]
           }
    },
    {
          extend: 'print',
          title:'Reporte de pacientes ocupacionales',
          exportOptions: {
              columns: [0,1,2,3,4]
           }
    }]
  });
});
</script>
@endsection
