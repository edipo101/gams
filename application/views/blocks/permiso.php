          <div id="datos-permiso" class="row">
            <div class="col-md-6">
              <div class="box">

                <div class="box-body">

                  <!-- Tipo permiso -->
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Tipo permiso <span>*</span></label>
                    <div class="col-sm-6">
                      <select name="tipo_permiso" id="tipo_permiso" class="form-control" required="">
                        <option value="">SELECCIONE UNA OPCIÓN</option>
                        <option value="1">PARTICULAR</option>
                        <option value="2">PUBLICO</option>
                        <option value="3">INSTITUCIONAL</option>
                      </select>
                    </div>
                  </div>

                  <!-- Cedula de identidad y lugar de expedicion -->
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Motivo <span>*</span></label>
                    <div class="col-sm-6">
                      <select name="motivo" id="motivo" class="form-control" required="">
                        <option value="">SELECCIONE UNA OPCIÓN</option>
                        <option >EMERGENCIA Y/O CASO MÉDICO</option>
                        <option >DELIVERY</option>
                        <option >EMPRESARIAL</option>
                        <option >CONSTRUCCION</option>
                        <option >AGROPECUARIO</option>
                        <option >OTRO</option>
                      </select>
                    </div>
                  </div>

                  <!-- Nombres del solicitante -->
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Descripción</label>
                    <div class="col-sm-9">
                      <textarea class="form-control" name="motivo_desc" id="motivo_desc" rows="3" placeholder="Describa brevemente la necesidad de su permiso"></textarea>
                    </div>
                  </div>

                </div>

                <div class="box-footer">
                  Los datos con asterisco (*) son obligatorios
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Documentos respaldatorios</h3>
                  <h5>Ingrese los documentos en formato digital (jpeg|pdf) para su posterior verificación</h5>
                </div>
                <div class="box-body">
                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Doc. Licencia</label>
                    <div class="col-sm-9">
                      <input type="file" name="doc_licencia" id="doc_licencia" class="form-control">  
                    </div>
                    
                  </div>

                  <div class="form-group">
                    <label for="" class="col-sm-3 control-label">Doc. RUAT <span>*</span></label>
                    <div class="col-sm-9">
                      <input type="file" name="doc_ruat" id="doc_licencia" class="form-control">       
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>