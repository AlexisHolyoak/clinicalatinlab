@extends('admin.layouts.admin')

@section('title', 'Sueldos')
@section('title-right')
<div>
  <a href="{{route('sueldos.create')}}" class="btn btn-primary">Crear sueldo</a>
</div>
@endsection

@section('content')
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Registros de sueldos</h2>
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
            Bienvenido a la seccion de sueldos, aqui podra registrar, visualizar, actualizar o eliminar un descuento.
          </p>
          <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="datatable_wrapper">
            <div class="row">
              <div class="table-responsive">
                <table id="t_data_tables" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                  <thead>
                    <tr>
                      <th data-priority="1">Trabajador</th>
                      <td>Cargo</td>
                      <td>Sueldo</td>
                      <td>Descuento</td>
                      <td>Incentivo</td>
                      <td>Fecha de Pago</td>
                      <td>Estado de pago</td>
                      <th data-priority="2" width="1%">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Alexis Jesus Peralta Holyoak</td>
                      <td>Programador</td>
                      <td>400</td>
                      <td>0</td>
                      <td>0</td>
                      <td>21/12/2017</td>
                      <td>POR PAGAR</td>
                      <td><a href="{{route('sueldos.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="{{route('sueldos.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Juan Carlos Camonal Holyoak</td>
                      <td>Enfermero</td>
                      <td>800</td>
                      <td>10</td>
                      <td>50</td>
                      <td>21/12/2016</td>
                      <td>PAGADO</td>
                      <td><a href="{{route('sueldos.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="{{route('sueldos.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#bs-delete-modal-lg"><i class="fa fa-close"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <td>Susa Maria del Vale Y Carmelo</td>
                      <td>Secretaria</td>
                      <td>1200</td>
                      <td>50</td>
                      <td>200</td>
                      <td>21/12/2018</td>
                      <td>POR PAGAR</td>
                      <td><a href="{{route('sueldos.show')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></a>
                          <a href="{{route('sueldos.update')}}" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
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
@include('admin.sueldos.destroy')
@endsection

@section('style')
<!--DataTable-->
<link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('css/responsive.bootstrap.min.css')}}">
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
<!--bootstrap-datepicker-->
<script type="text/javascript" src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<!--nprogress-->
<script type="text/javascript" src="{{asset('js/nprogress.js')}}"></script>
<!--Custom theme styles-->
<script type="text/javascript" src="{{asset('js/custom.min.js')}}"></script>
<script type="text/javascript">
  $(document).ready(function(){$("#t_data_tables").DataTable()});
</script>
@endsection
