<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<h2>Create User</h2>

<?php if (isset($validation)): ?>
    <?= $validation->listErrors(); ?>
<?php endif; ?>
<!-- Display success message if available -->
<?php if (session()->has('success')): ?>
    <div class="alert alert-success"><?= session('success') ?></div>
<?php endif; ?>

<form action="<?php echo site_url('users/store'); ?>" method="post">
    <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" class="form-control" value="<?= old('username') ?>">
        <?= service('validation')->showError('username') ?>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" class="form-control" value="<?= old('email') ?>">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary mt-2">Create</button>
</form>
<?= $this->endSection() ?>
