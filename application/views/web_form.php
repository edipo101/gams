  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="log" style="text-align: center;">
          <img src="<?= base_url() ?>images/gams-sucre.png" alt="">

          <h1 style="margin-bottom: 30px">
            <strong>Solicitud de permiso de circulación vehicular</strong>
          </h1>
          <div class="row">
            <h4>
              Para llenar el formulario ten a la mano tus documentos en formato digital (Licencia de conducir, RUAT,
              Declaración jurada o cualquier otro documento que acredite la actividad económica o laboral a la que te dedicas)
              <p>Si tienes problemas para enviar tus datos por favor comunícate con nosotros al telf.: 645122. 
                <br>Para más información visita nuestra web <a href="https://sucre.bo">sucre.bo</a>
              </h4>
            </div>
          </div>
        </section>

        <!-- Main content -->
        <section class="content">
          <form id="form_data" action="<?= base_url() ?>form/insert" method="post" class="form-horizontal">

            <!-- Datos del solicitante -->
            <div class="page-header"><strong>Datos del solicitante</strong></div>
            <?php $this->load->view('blocks/solicitante'); ?>

            <!-- Datos de la movilidad -->
            <div class="page-header"><strong>Datos de la movilidad</strong></div>
            <?php $this->load->view('blocks/movilidad'); ?>

            <!-- Datos de la movilidad -->
            <div class="page-header"><strong>Solicitud de permiso</strong></div>
            <?php $this->load->view('blocks/permiso'); ?>


            <div class="checkbox" style="padding-bottom: 23px;">
              <label>
                <input type="checkbox" required=""> La información proporcionada mediante este formulario  
                se constituye en una declaración jurada de acuerdo a lo estableciodo en la normativa nacional vigente, 
                manifestando que los datos señalados expresan la verdad y que conozco las sanciones que habrá lugar en caso
                de falsedad (*)
              </label>

            </div>          

            <button type="submit" id="btn_submit" class="btn btn-info">Enviar solicitud</button>

          </form>




        </section>
        <!-- /.content -->
      </div>
      <!-- /.container -->
    </div>
    <!-- /.content-wrapper -->
