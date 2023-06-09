<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Login to continue</h5>

                    <?php if(session()->getFlashData('success')) { ?>
                        <div class="alert alert-success">
                            <?= session()->get('success') ?>
                        </div>
                    <?php } ?>

                    <?php if(session()->getFlashdata('errors')) { ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('errors') ?>
                        </div>
                    <?php } ?>

                    <form action="/login" method="post">

                        <div class="form-group">
                            <label for="example-email">Email</label>
                            <input type="text" class="form-control" id="example-email" aria-describedby="emailHelp" 
                                placeholder="Enter email" name="email" value="<?= old('email') ?>">
                        </div>

                        <div class="form-group">
                            <label for="example-password">Password</label>
                            <input type="password" class="form-control" id="example-password" aria-describedby="emailHelp" 
                                placeholder="Enter password" name="password">
                        </div>

                        <div class="d-flex justify-content-between align-items-center">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="/register" class="btn btn-link">Register</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
