<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2>Edit User</h2>
<!-- Display success message if available -->
<?php if (session()->has('success')): ?>
    <div class="alert alert-success"><?= session('success') ?></div>
<?php endif; ?>
<form action="<?php echo site_url('users/update'); ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" class="form-control" id="username" name="username" value="<?php echo $user['username']; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" value="<?php echo $user['email']; ?>">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Update</button>
</form>
<?= $this->endSection() ?>
