</div>
<!-- /End of Main Container -->
<!-- Footer -->
<div class="footer">
  <footer class="page-footer text-center text-muted">
    <p class="text-center"> &copy; Copyright 2018 <em> My Learning Platform <em></p>
    </footer>
  </div>
  <!-- /Footer -->
  <?php
  //Get Project folder full path
  $fullPath     = realpath($_SERVER['DOCUMENT_ROOT']);
  $BS_popper    = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/popper.min.js';
  $BS_bootstrap = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/bootstrap.min.js';
  $CustomJS     = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/app.js';
  $AosJS        = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/aos.js';
  ?>
  <!-- Bootstrap Main Scripts -->
  <script src="<?= $BS_popper; ?>"></script>
  <script src="<?= $BS_bootstrap; ?>"></script>
  <script src="<?= $CustomJS; ?>"></script>
  <script src="<?= $AosJS; ?>"></script>
  <script>
  // Initialize Animated on scroll (AOS) library
  AOS.init();
</script>
</body>
</html>
