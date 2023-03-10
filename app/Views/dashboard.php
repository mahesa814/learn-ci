<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>

<div class="section-header">
    <h1>Dashboard</h1>
</div>
<div class="section-body">
    <div class="col-12 mb-4">
        <div class="hero text-white hero-bg-image hero-bg-parallax"
            data-background="<?= base_url()?>template/assets/img/unsplash/andre-benz-1214056-unsplash.jpg"
            style="background-image: url(&quot;<?= base_url()?>template/assets/img/unsplash/andre-benz-1214056-unsplash.jpg&quot;);">
            <div class="hero-inner">
                <h2>Welcome, Ujang!</h2>
                <p class="lead">You almost arrived, complete the information about your account to complete
                    registration.</p>
                <div class="mt-4">
                    <a href="#" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i>
                        Setup Account</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Acara / Program</h4>
                    </div>
                    <div class="card-body">
                        10
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Groups</h4>
                    </div>
                    <div class="card-body">
                        42
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Contact</h4>
                    </div>
                    <div class="card-body">
                        1,201
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Invitaion</h4>
                    </div>
                    <div class="card-body">
                        47
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection()?>