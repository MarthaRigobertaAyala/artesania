<?php if ($this->session->flashdata("confirmacion")): ?>
  <script type="text/javascript">
    toastr.success("<?php echo $this->session->flashdata("confirmacion"); ?>");
  </script>
  <?php   $this->session->set_flashdata("confirmacion","") ?>
<?php endif; ?>

<?php if ($this->session->flashdata("error")): ?>
  <script type="text/javascript">
    toastr.error("<?php echo $this->session->flashdata("error"); ?>");
  </script>
  <?php   $this->session->set_flashdata("error","") ?>
<?php endif; ?>
<!-- estilo para dar color a letras  en css -->
<style media="screen">
  .obligatorio{
    color: red;
    background-color: white;
    border-radius: 20px;
    font-size: 10px;
    padding-left: 5px;
    padding-right: 5px;
  }
input.error{
  border: 2px solid red;
}
  .error{
    color: red;
    font-weight: bold;
  }
    </style>
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <br>
<div class="row">
  <div class="border-top text-center"><hr size="3px" color: "white"> </div>
</div>
  <center>
  <div class="row">
    <div class="col-md-2">
      <h4 style="color: SteelBlue"><strong>Desarrolladores:</strong></h4>
      <ul>
        <li style="color: white">Porras Wilson</li>
        <li style="color: white">Ayala Martha</li>
      </ul>
    </div>
    <div class="col-md-8">
      <h4 style="color: SteelBlue">Contactanos en nuestros sitios</h4>
      <hr>
      <a href="https://www.facebook.com/wilson.porrasatiaja"><img src=" <?php echo base_url(); ?>/assets/imagenes/facebook.png " alt="facebook"></a>
      <a href="https://www.instagram.com/porrasatiaja/"><img src=" <?php echo base_url(); ?>/assets/imagenes/instagram.png " alt="instagram"></a>
      <a href="https://www.whatsapp.com/download"><img src=" <?php echo base_url(); ?>/assets/imagenes/whatsapp.png " alt="whatsapp"></a>
      <a href="https://www.tiktok.com/foryou"><img src=" <?php echo base_url(); ?>/assets/imagenes/tik-tok.png " alt="tik-tok"></a>
      <a href="https://www.youtube.com/channel/UCzFMwuuqDT06ud7JGCs0i4A"><img src=" <?php echo base_url(); ?>/assets/imagenes/youtube.png " alt="youtube"></a>
    </div>
    <div class="col-md-2">
      <h4 style="color: SteelBlue">Temas:</h4>
      <p style="color: white">Quienes somos?</p>
      <p style="color: white">Nuestro Objetivo</p>
    </div>
  </div>
  </center>
<div class="d-sm-flex justify-content-center justify-content-sm-between">
  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Universidad Tecnica de Cotopaxi</span>
  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Artesania Indigena del Ecuador</a></span>
</div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="<?php echo base_url();?>plantilla/assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url();?>plantilla/assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url();?>plantilla/assets/js/off-canvas.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/js/hoverable-collapse.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/js/misc.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/js/settings.js"></script>
<script src="<?php echo base_url();?>plantilla/assets/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?php echo base_url();?>plantilla/assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
