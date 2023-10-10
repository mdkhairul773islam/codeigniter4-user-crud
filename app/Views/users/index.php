<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2>Users</h2>
<a class="btn btn-primary mb-3" href="<?php echo site_url('users/create'); ?>">Create User</a>
<!-- Display success message if available -->
<?php if (session()->has('success')): ?>
    <div class="alert alert-danger"><?= session('success') ?></div>
<?php endif; ?>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td class="text-center">
                    <a class="btn btn-info" href="<?php echo site_url('users/edit/' . $user['id']); ?>">Edit</a>
                    <a class="btn btn-danger" href="<?php echo site_url('users/delete/' . $user['id']); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?= $this->endSection() ?>
