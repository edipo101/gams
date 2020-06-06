  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="row">
      <?php
        for ($i=0; $i < 6 ; $i++):
      ?>
        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 product-item">
          <!-- <img class="product-image" src="https://via.placeholder.com/407x579"> -->
          <!-- <img class="product-image" src="https://via.placeholder.com/260x370"> -->
          <img class="product-image" src="<?= base_url() ?>images/pokemon_gigante.jpg">
          <h5 class="product-name">Her Private Life</h5>
          <h5 class="product-price">Bs 15,00</h5>
        </div>
      <?php
        endfor;
      ?>
      </div>
        
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->