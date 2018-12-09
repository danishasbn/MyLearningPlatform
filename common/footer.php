</div>
<!-- /End of Main Container -->
<?php
  //Get Project folder full path
  $fullPath = realpath($_SERVER['DOCUMENT_ROOT']);
  $BS_jquery = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/jquery-3.3.1.slim.min.js';
  $BS_popper = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/popper.min.js';
  $BS_bootstrap = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/bootstrap.min.js';
  $CustomJS = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/MyLearningPlatform/Asset/js/app.js';
?>
<!-- Bootstrap Main Scripts -->
<script src="<?= $BS_jquery; ?>"></script>
<script src="<?= $BS_popper; ?>"></script>
<script src="<?= $BS_bootstrap; ?>"></script>
<script src="<?= $CustomJS; ?>"></script>
</body>
</html>
