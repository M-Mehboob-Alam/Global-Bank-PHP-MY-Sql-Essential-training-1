<?php require_once('../../../private/initialize.php'); 
if(!isset($_GET['id'])){
  redirect_to(url_for('/staff/subjects/index.php'));
}
$id = $_GET['id'];
$menu_name = '';
$position= '';
$visible = 0;
// Handle form values sent by new.php
if(is_post_request()){
$menu_name = $_POST['menu_name'] ?? '';
$position = $_POST['position'] ?? '';
$visible = $_POST['visible'] ?? '';

echo "Form parameters<br />";
echo "Menu name: " . $menu_name . "<br />";
echo "Position: " . $position . "<br />";
echo "Visible: " . $visible . "<br />";
}
?>

<?php $page_title = 'Edit Subject'; ?>
<!-- //add new commit to directly github in new.php subjects folder -->
<?php include(Shared_Path . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/subjects/index.php'); ?>">&laquo; Back to List</a>

  <div class="subject edit">
    <h1>Edit Subject</h1>

    <form action="<?php echo url_for('/staff/subjects/edit.php?id='.h(u($id))) ?>" method="post">
      <dl>
        <dt>Menu Name</dt>
        <dd><input type="text" name="menu_name" value="" /></dd>
      </dl>
      <dl>
        <dt>Position</dt>
        <dd>
          <select name="position">
            <option value="1">1</option>
          </select>
        </dd>
      </dl>
      <dl>
        <dt>Visible</dt>
        <dd>
          <input type="hidden" name="visible" value="0" />
          <input type="checkbox" name="visible" value="1" />
        </dd>
      </dl>
      <div id="operations">
        <input type="submit" value="Edit Subject" />
      </div>
    </form>

  </div>

</div>

<?php include(Shared_Path . '/staff_footer.php'); ?>



