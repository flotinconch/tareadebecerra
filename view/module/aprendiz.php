<input type="hidden" id="icodeAprendiz" name="icodeAprendiz">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Aprendiz
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#"> Aprendiz</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Ingreso de aprendices</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        
      <div class="box-body">  
      <form method="POST" id="formuAprendiz">

          <!-- ROW 1 -->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Nombre</span>
                  <input id="inameAprendiz" name="inameAprendiz" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Fecha Nacimiento</span>
                  <input id="naciAprendiz" name="naciAprendiz" type="date" class="form-control">
                </div>
              </div>
            </div>

            <br>
             <!-- ROW 1 -->
          <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">sexo</span>
                  <input id="sexAprendiz" name="sexAprendiz" type="text" class="form-control">
                </div>
              </div>
              

            <br>

        
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Ciudad</span>
                  <input id="ciuAprendiz" name="ciuAprendiz" type="text" class="form-control">
                </div>
              </div>
            </div>
          <br>
        
        <div class="box-footer">
          <button class="btn btn-app bg-blue" type="submit" onclick="validateAprendiz(event)">
            <i class="fa fa-save"></i> Guardar
          </button>
          <button class="btn btn-app bg-gray" type="submit" onclick="getGenerarReporteAprendiz(event)">
            <i class="fa fa-print"></i> Reporte
          </button>
        </div>
        <!-- /.box-footer-->
      </form>
      </div>
      <?php
        if (isset($_POST['inameAprendiz'])){
          $objCtrAprendiz = new AprendizController();
          $objCtrAprendiz -> setInsertAprendiz($_POST['inameAprendiz'], $_POST['naciAprendiz'], $_POST['sexAprendiz'], $_POST['ciuAprendiz']);
        }
      ?>
    </div>
    <!-- /.box -->

    <!-- Otro box -->
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">Usuarios</h3>
        
        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
          title="Collapse">
          <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
          
            <table id="users" class="table table-bordered table-striped table-hover">
              <thead>
                <!-- Este tr sirve para los títulos -->
                <tr>
                  <th class="text-center">Codigo</th>
                  <th class="text-center">Nombre</th>
                  <th class="text-center">Fecha de Nacimiento</th>
                  <th class="text-center">Sexo</th>
                  <th class="text-center">Ciudad</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <form action="" method="post">
                  <?php
                    $objCtrAprendizAll = new AprendizController();

                    if (gettype($objCtrAprendizAll -> getSearchAllAprendiz()) == 'boolean') {
                      echo '
                      <tr>
                        <td colspan = "5">No hay datos que mostrar</td>
                      </tr>';  
                    } else {
                      foreach ($objCtrAprendizAll -> getSearchAllAprendiz() as $key => $value) {
                        echo '
                        <tr>
                          <td>'. $value["codigo"] .'</td>
                          <td>'. $value["nombre"] .'</td>
                          <td>'. $value["fechaNacimiento"] .'</td>
                          <td>'. $value["sexo"] .'</td>
                          <td>'. $value["ciudad"] .'</td>
                          <td class="text-center">
                            <button class="btn btn-social-icon btn-google" onclick="eraseAprendiz(this.parentElement.parentElement)"><i class="fa fa-trash"></i></button>
                            <button class="btn btn-social-icon bg-blue" onclick="getDataAprendiz(this.parentElement.parentElement)" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o"></i></button>
                            </td>
                            </tr>';
                        }
                      }
                  ?>
                </form>
              </tbody>
            </table> 
        </div>
      
        <!-- /.box-body -->
    </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Modal para guardar -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header bg-blue">
          <h4 class="modal-title">Modificar Aprendiz </h4>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form method="POST" id="formAprendizm">
            <input type="hidden" name="icodeAprendizm" id="icodeAprendizm">
            <!-- ROW 1 MOD CONTIENE NOMBRE Y FECHA DE NACIMIENTO-->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Nombre</span>
                  <input id="inameAprendizm" name="inameAprendizm" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Fecha Nacimiento</span>
                  <input id="naciAprendizm" name="naciAprendizm" type="date" class="form-control">
                </div>
              </div>
            </div>
            <br>
            <!-- ROW 2 MOD CONTIENE SEXO Y CIUDAD-->
            <div class="row">
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Sexo</span>
                  <input id="sexAprendizm" name="sexAprendizm" type="text" class="form-control">
                 
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-6 col-xs-6">
                <!-- small box -->
                <div class="input-group">
                  <span class="input-group-addon">Ciudad</span>
                  <input id="ciuAprendizm" name="ciuAprendizm" type="text" class="form-control">
                </div>
              </div>
              <!-- ./col -->
            </div>
          </form>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button class="btn btn-google bg-blue" type="submit" onclick="validateAprendizMod(event)">
            <i class="fa fa-save"></i> Guardar
          </button>
          <?php
          if (isset($_POST['inameAprem'])) {
            $objCtrAprendiz = new AprendiController();
            $objCtrAprendiz->setUpdateAprendiz($_POST['icodeAprendizm'], $_POST['inameAprendizm'], $_POST['naciAprendizm'], $_POST['sexAprendizm'], $_POST['ciuAprendizm']);
          }
          ?>
          <button type="button" class="btn btn-google bg-red" data-dismiss="modal">
            <i class="fa fa-close"></i> Cerrar
          </button>
        </div>

      </div>
    </div>
  </div>