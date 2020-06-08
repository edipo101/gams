        <div id="datos-movilidad" class="row">
          <div id="datos-movilidad" class="col-md-6">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Identificación vehículo </h3>
                <h5>Para llenar los siguientes datos, consulte el formulario RUAT de su vehículo</h5>
              </div>
              
              <div class="box-body">
                <!-- Número de placa -->
                <div id="placa_group" class="form-group">
                  <label for="placa" class="col-sm-3 control-label">Nro. placa <span>*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="placa" id="placa" class="form-control" placeholder="" required="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                    <span id="error_mov" class="help-block" style="display: none;">Esta movilidad ya fue registrada!</span>
                  </div>
                </div>

                <!-- Clase -->
                <div class="form-group">
                  <label for="clase" class="col-sm-3 control-label">Clase <span>*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="clase" id="clase" placeholder="CLASE" class="form-control" required="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>
                </div>

                <!-- Marca -->
                <div class="form-group">
                  <label for="marca" class="col-sm-3 control-label">Marca <span>*</span></label>
                  <div class="col-sm-6">
                    <input type="text" name="marca" id="marca" placeholder="MARCA" class="form-control" required="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>
                </div>

                <!-- Tipo -->
                <div class="form-group">
                  <label for="tipo" class="col-sm-3 control-label">Tipo vehículo </label>
                  <div class="col-sm-9">
                    <input type="text" name="tipo" id="tipo" class="form-control" name="tipo" placeholder="TIPO" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>
                </div>

                <!-- Modelo -->
                <div class="form-group">
                  <label for="modelo" class="col-sm-3 control-label">Modelo <span>*</span></label>
                  <div class="col-sm-3">
                    <input type="text" name="modelo" id="modelo" class="form-control" data-inputmask='"mask": "9999"' data-mask required="">
                  </div>
                </div>

                <!-- Servicio -->
                <div class="form-group">
                  <label for="servicio" class="col-sm-3 control-label">Servicio <span>*</span></label>
                  <div class="col-sm-6">
                    <select name="servicio" id="servicio" class="form-control" required="">
                        <option value="">Seleccione una opción</option>
                        <option >PARTICULAR</option>
                        <option >PUBLICO</option>
                      </select>
                  </div>
                </div>

                <!-- Color -->
                <div class="form-group">
                  <label for="color" class="col-sm-3 control-label">Color <span>*</span></label>
                  <div class="col-sm-6">
                    <input type="text" class="form-control" name="color" id="color" placeholder="COLOR" required="" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                  </div>
                </div>
              </div>

              <div class="box-footer">
                Los datos con asterisco (*) son obligatorios
              </div>
            </div>

          </div>
        </div>
        <!-- end datos-movilidad -->