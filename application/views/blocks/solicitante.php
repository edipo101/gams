          <div id="datos-solicitante" class="row">
            <div id="datos-personales" class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Datos personales</h3>
                </div>


                <div class="box-body">
                  <input type="text" id="id_persona" name="id_persona" hidden="">
                  <!-- Cedula de identidad y lugar de expedicion -->
                  <div class="form-group">
                    <label for="cedula" class="col-sm-3 control-label">Nro. cédula <span>*</span></label>
                    <div class="col-sm-3">
                      <input type="text" name="cedula" id="cedula" class="form-control" data-inputmask='"mask": "[999999999]"' data-mask required>
                    </div>

                    <label for="depto" class="col-sm-2 control-label">Exp. en <span>*</span></label>
                    <div class="col-sm-4">
                      <select name="lugar_exp" id="depto" class="form-control" required="">
                        <option value="">DEPARTAMENTO</option>
                        <option value="CH">CHUQUISACA</option>
                        <option value="CB">COCHABAMBA</option>
                        <option value="TJ">TARIJA</option>
                        <option value="LP">LA PAZ</option>
                        <option value="OR">ORURO</option>
                        <option value="PT">POTOSÍ</option>
                        <option value="PD">PANDO</option>
                        <option value="BN">BENI</option>
                        <option value="SC">SANTA CRUZ</option>
                        <option value="EX">EXTRANJERO</option>
                      </select>
                    </div>
                  </div>

                  <!-- Nombres del solicitante -->
                  <div class="form-group">
                    <label for="nombres" class="col-sm-3 control-label">Nombre(s) <span>*</span></label>
                    <div class="col-sm-9">
                      <input type="text" name="nombres" id="nombres" class="form-control" id="" placeholder="NOMBRES DEL SOLICITANTE" required="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                  </div>

                  <!-- Apellidos del solicitante -->
                  <div class="form-group">
                    <label for="apellidos" class="col-sm-3 control-label">Apellido(s) <span>*</span></label>
                    <div class="col-sm-9">
                      <input type="text" name="apellidos" id="apellidos" class="form-control" id="" placeholder="APELLIDOS DEL SOLICITANTE" required="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                  </div>

                  <!-- Fecha de nacimiento -->
                  <div class="form-group">
                    <label for="fecha_nac" class="col-sm-3 control-label">Fecha nac. <span>*</span></label>
                    <div class="col-sm-3">
                      <input type="text" name="fecha_nac" id="fecha_nac" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" required="">
                    </div>

                  </div>

                  <!-- Género -->
                  <div class="form-group">
                    <label for="genero" class="col-sm-3 control-label">Género <span>*</span></label>
                    <div class="col-sm-3">
                      <div class="radio">
                        <label>
                          <input type="radio" name="genero" id="genero1" value="M" required="">
                          Masculino
                        </label>
                      </div>
                      <div class="radio">
                        <label>
                          <input type="radio" name="genero" id="genero2" value="F" required="">
                          Femenino
                        </label>
                      </div>
                    </div>
                  </div>

                  <!-- Direccion -->
                  <div class="form-group">
                    <label for="direccion" class="col-sm-3 control-label">Dirección <span>*</span></label>
                    <div class="col-sm-9">
                      <input type="text" name="direccion" id="direccion" class="form-control" placeholder="DIRECCION" required="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    </div>
                  </div>

                  <!-- Correo electrónico -->
                  <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">E-mail</label>
                    <div class="col-sm-9">
                      <input type="email" name="email" id="email" class="form-control" placeholder="correo@electronico">
                    </div>
                  </div>

                  <!-- Celular -->
                  <div class="form-group">
                    <label for="telef_contacto" class="col-sm-3 control-label">Telef. contacto <span>*</span></label>
                    <div class="col-sm-6">
                      <input type="text" name="telef_contacto" id="telef_contacto" class="form-control" data-inputmask='"mask": "[99999999]"' data-mask required="">
                    </div>
                  </div>
                </div>

                <div class="box-footer">
                  Los datos con asterisco (*) son obligatorios
                </div>


              </div>
            </div>

            <div id="datos-licencia" class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Datos de licencia de conducir</h3>
                </div>

                <div class="box-body">

                  <!-- Nombres del solicitante -->
                  <div class="form-group">
                    <label for="licencia" class="col-sm-3 control-label">Nro. licencia <span>*</span></label>
                    <div class="col-sm-9">
                      <input type="text" id="licencia" class="form-control" name="licencia" placeholder="NRO. DE LICENCIA" required="">
                    </div>
                  </div>

                  <!-- Categoria -->
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Categoria <span>*</span></label>
                    <div class="col-sm-6">
                      <select name="categoria" id="" class="form-control" required="">
                        <option value="">Seleccione una opción</option>
                        <option value="M">Licencia Motociclista M</option>
                        <option value="P">Licencia Particular P</option>
                        <option value="A">Licencia Profesional A</option>
                        <option value="B">Licencia Profesional B</option>
                        <option value="C">Licencia Profesional C</option>
                        <option value="T">Licencia Motorista T</option>
                        <option value="E">Licencia Extranjera E</option>
                      </select>
                    </div>
                  </div>


                </div>

              </div>
            </div>
          </div>