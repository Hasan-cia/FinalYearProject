<div class="container">
      <div class="row mb-2">
        <div class="col-2"></div>
        <div class="col-10">
          <?php
          if (isset($_SESSION['message'])) : ?>

            <div class="alert alert-<?= $_SESSION['msg_type'] ?>">

              <?php
              echo $_SESSION['message'];
              unset($_SESSION['message']);
              ?>

            </div>
          <?php endif ?>
        </div>
      </div>
    </div>
