<?php require_once('../../../private/initialize.php'); ?>
<?php

    $pages = [
            ['id' => '1', 'position'=> '1', 'visible'=>'1',  'menu_name'=>'Globel Bank'],
            ['id' => '2', 'position'=> '2', 'visible'=>'1',  'menu_name'=>'History'],
            ['id' => '3', 'position'=> '3', 'visible'=>'1',  'menu_name'=>'Leadership'],
            ['id' => '4', 'position'=> '4', 'visible'=>'1',  'menu_name'=>'Contact Us'],
    ];

?>
<?php $title_name = 'Pages'; ?>
<?php  include(Shared_Path . '/staff_header.php'); ?>
    <div id="content">
        <div class="subjects listing">
            <h1>Pages</h1>
            <div class="actions">
                <a href="" class="action">Create New Page</a>
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
                <?php foreach($pages as $subject){ ?>
                    <tr>
                    <td><?php echo h( $subject['id']); ?></td>
                    <td><?php echo h($subject['position']); ?></td>
                    <td><?php echo $subject['visible'] == 1 ? 'true' : 'false'; ?></td>
                    <td><?php echo h($subject['menu_name']); ?></td>
                    <td><a href="<?php  echo url_for('/staff/pages/show.php?id='.h(u($subject['id']))); ?>">View</a></td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
<?php include( Shared_Path .'/staff_footer.php');?> 