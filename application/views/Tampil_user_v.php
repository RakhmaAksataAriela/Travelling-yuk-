<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Fullname</th>
            <th>Action</th>
        </tr>
        <?php foreach($user as $u):?>
        <tr>
        	<td><?php echo $u->username; ?></td>
        	<td><?php echo $u->password; ?></td>
        	<td><?php echo $u->fullname; ?></td>
        	<td><a href="<?php echo base_url('Tampil_user/delete/'.$u->id); ?>">Delete</a> | <a href="">Edit</a></td>
        </tr>
    <?php endforeach;?>
    </table>
</body>
</html>
        