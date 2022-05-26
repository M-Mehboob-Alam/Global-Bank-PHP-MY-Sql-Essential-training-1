<?php require_once('../../../private/initialize.php'); ?>
<?php 

  $id = $_REQUEST['id'] ?? '1';
  

?>
<?php $tittle_name = 'show subject'; ?>
<?php include(Shared_Path . '/staff_header.php'); ?>

   <div id="content">
     <a href="<?php echo url_for('/staff/pages/index.php'); ?>" class="back-link">&laquo; Back To List</a>
      <div class="subject show">
        Subject ID: <?php echo h($id);?>
      </div>
    </div>
<?php echo include(Shared_Path . '/staff_footer.php'); ?>