<div class="mainhead"><h1 style="font-family: 'Yeseva One', cursive;color:navy">RCIA at Our Lady of Peace &#10020; Fords, NJ</h1></div>
<!-- topnav -->
    <?php include("navbar.php"); ?>
<?php if (file_exists('messages/message.php')) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?php include('messages/message.php'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php } 
      if (file_exists('messages/message1.php')) { ?>
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <?php include('messages/message1.php'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
      <?php } ?>