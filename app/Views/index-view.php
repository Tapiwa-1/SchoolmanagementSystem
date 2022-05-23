<?= $this->extend('base.php') ?>
<?= $this->section('content') ?>
<section class="section">
    <div class="row">
        <div class="col-lg-4 m-auto">
            <div class="card ">
                <div class="card-body d-block">
                    <h5 class="card-title">Sample Departments</h5>
                    <div class="m-1">
                        <a class="btn btn-primary w-100" href="<?= base_url() ?>/administration" role="button">administration</a>
                    </div>
                    <div class="m-1">
                        <a class="btn btn-primary w-100" href="<?= base_url() ?>/finance" role="button">Finance</a>
                    </div>
                    <div class="m-1">
                        <a class="btn btn-primary w-100" href="<?= base_url() ?>/Teacher" role="button">Teacher</a>
                    </div>
                    <div class="m-1">
                        <a class="btn btn-primary w-100" href="<?= base_url() ?>/student" role="button">Student</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection('content') ?>