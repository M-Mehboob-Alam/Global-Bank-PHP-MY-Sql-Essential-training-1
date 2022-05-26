<?php require_once('../../../private/initialize.php'); ?>
<?php

    $subjects = [
            ['id' => '1', 'position'=> '1', 'visible'=>'1',  'menu_name'=>'About Globel Bank'],
            ['id' => '2', 'position'=> '2', 'visible'=>'1',  'menu_name'=>'Consumer'],
            ['id' => '3', 'position'=> '3', 'visible'=>'1',  'menu_name'=>'Small Business'],
            ['id' => '4', 'position'=> '4', 'visible'=>'1',  'menu_name'=>'Commercial'],
    ];

?>
<?php $title_name = 'Pages'; ?>
<?php  include(Shared_Path . '/staff_header.php'); ?>
    <div id="content">
        <div class="pages listing">
            <h1>Pages</h1>
            <div class="actions">
                <a href="<?php echo url_for('/staff/pages/new.php'); ?>" class="action">Create New Subject</a>
            </div>
            <table class="list">
                <tr>
                    <th>ID</th>
                    <th>Position</th>
                    <th>Visible</th>
                    <th>Name</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
                <?php foreach($subjects as $subject){ ?>
                    <tr>
                    <td><?php echo $subject['id']; ?></td>
                    <td><?php echo $subject['position']; ?></td>
                    <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo $subject['menu_name']; ?></td>
                    <td><a href="<?php  echo url_for('/staff/pages/show.php?id='.h(u($subject['id']))); ?>">View</a></td>
                    <td><a href="<?php echo url_for('/staff/pages/edit.php?id=' .h(u($subject['id']))) ?>">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
<?php include( Shared_Path .'/staff_footer.php');?> 