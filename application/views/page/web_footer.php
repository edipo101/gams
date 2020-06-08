  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>#QuedateEnCasa</b> Juntos podemos vencer al coronavirus
      </div>
      <strong>Copyright &copy; 2020 <a href="https://sucre.bo">Gobierno Autónomo Municipal de Sucre</a>.</strong> Gestión con obras.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?= base_url() ?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?= base_url() ?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>dist/js/demo.js"></script>
<!-- InputMask -->
<script src="<?= base_url() ?>plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?= base_url() ?>plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?= base_url() ?>plugins/input-mask/jquery.inputmask.extensions.js"></script>

<script type="text/javascript">
  function disabled_solicitante(){
    $("#depto").prop('disabled', true);
    $('#nombres').prop('disabled', true);
    $('#apellidos').prop('disabled', true);
    $('#fecha_nac').prop('disabled', true);
    $("input:radio[name=genero]").prop( "disabled", true);
    $('#direccion').prop('disabled', true);
    $('#email').prop('disabled', true);
    $('#telef_contacto').prop('disabled', true);
  }

  function enabled_solicitante(){
    $('#id_persona').val(''); 
    $('#depto option[value=""]').attr("selected", true);
    $('#nombres').val(''); 
    $('#apellidos').val(''); 
    $('#fecha_nac').val('');
    $('#genero1').prop('checked', false);
    $('#genero2').prop('checked', false);
    $('#direccion').val('');
    $('#email').val('');
    $('#telef_contacto').val('');

    $("#depto").prop('disabled', false);
    $('#nombres').prop('disabled', false);
    $('#apellidos').prop('disabled', false);
    $('#fecha_nac').prop('disabled', false);
    $("input:radio[name=genero]").prop( "disabled", false);
    $('#direccion').prop('disabled', false);
    $('#email').prop('disabled', false);
    $('#telef_contacto').prop('disabled', false);
  }

  $(document).ready(function(){
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    $("#tipo_permiso_cancel").change(function(){
      var option = $(this).val();
      if (option == "1"){
        $('#motivo').prop('disabled', false);
        $('#motivo_desc').prop('disabled', false);
      }
      else{
        $('#motivo').val($("#motivo option:first").val());
        $('#motivo').prop('disabled', true);              
        $('#motivo_desc').val('');
        $('#motivo_desc').prop('disabled', true);
      }
      console.log(option);
    });

    $('#cedula').blur(function(){
      // $(this).css("background-color", "#FFFFCC");
      var cedula = $(this).val();

      $.ajax({
        url: base_url + "form/get_cedula",
        method: "post",
        data: {cedula},
        dataType: 'json',
        success: function(data){
          console.log(data);
          disabled_solicitante();
          $('#id_persona').val(data.id);
          $("#depto option[value="+ data.exp +"]").attr("selected",true);
          $('#nombres').val(data.nombres); 
          $('#apellidos').val(data.apellidos); 
          $('#fecha_nac').val(data.fecha_nacimiento);
          $('input:radio[name=genero]').val([data.sexo]);
          $('#direccion').val(data.direccion);
          $('#email').val(data.email);
          $('#telef_contacto').val(data.celular);
          $('#licencia').focus();
        },     
        error: function(){
          console.log('enabled_solicitante');
          enabled_solicitante();
          $('#depto').focus();
        } 
      });

    });

    $('#placa').blur(function(){
      var placa = $(this).val();
      $.ajax({
        url: base_url + "form/get_placa",
        method: "post",
        data: {placa},
        dataType: 'json',
        success: function(data){
          console.log(data);
          $('#placa_group').addClass('has-error')
          $('#error_mov').show();
          $('#clase').prop('disabled', true);
          $('#marca').prop('disabled', true);
          $('#tipo').prop('disabled', true);
          $('#modelo').prop('disabled', true);
          $('#servicio').prop('disabled', true);
          $('#color').prop('disabled', true);
          $('#btn_submit').prop('disabled', true);
        },
        error: function(){
          console.log('error');
          $('#placa_group').removeClass('has-error')
          $('#error_mov').hide();
          $('#clase').prop('disabled', false);
          $('#marca').prop('disabled', false);
          $('#tipo').prop('disabled', false);
          $('#modelo').prop('disabled', false);
          $('#servicio').prop('disabled', false);
          $('#color').prop('disabled', false);
          $('#btn_submit').prop('disabled', false);
          $('#clase').focus();
        }
      });
    });

    // $('#form_data2').on('submit', function(e) { //use on if jQuery 1.7+
    //     e.preventDefault();  //prevent form from submitting
    //     var data = $("#form_data2 :input").serializeArray();
    //     console.log(data); //use the console for debugging, F12 in Chrome, not alerts
    // });

  });

</script>
</body>
</html>