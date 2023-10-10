
<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- Hero Section -->
<header class="hero bg-primary text-white text-center py-5">
    <div class="container">
        <h1 class="display-4">Welcome to My Website</h1>
        <p class="lead">Your one-stop destination for amazing content.</p>
        <a href="<?= site_url("users/create"); ?>" class="btn btn-light btn-lg">Create User</a>
    </div>
</header>

<!-- Main Content Section -->
<section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam accumsan, justo in tristique convallis, est ex suscipit massa.</p>
                </div>
                <div class="col-lg-6">
                    <h2>Our Services</h2>
                    <ul>
                        <li>Web Design</li>
                        <li>App Development</li>
                        <li>Digital Marketing</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection() ?>
