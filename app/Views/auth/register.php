<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4">Register to continue</h5>
                    <style>
    .container {
        margin-bottom: 80px; /* Sesuaikan dengan tinggi footer */
    }
</style>
                    <form action="/register" method="post">
                        <div class="form-group">
                            <label for="example-name">Name</label>
                            <input type="text" class="form-control" id="example-name" aria-describedby="nameHelp" 
                                placeholder="Enter name" required name="name">
                        </div>

                        <div class="form-group">
                            <label for="example-email">Email</label>
                            <input type="text" class="form-control" id="example-email" aria-describedby="emailHelp" 
                                placeholder="Enter email" required name="email">
                        </div>

                        <div class="form-group">
                            <label for="example-password">Password</label>
                            <input type="password" class="form-control" id="example-password" aria-describedby="passwordHelp" 
                                placeholder="Enter password" required name="password">
                        </div>

                        <div class="form-group">
                            <label for="example-password-confirmation">Password Confirmation</label>
                            <input type="password" class="form-control" id="example-password-confirmation" aria-describedby="passwordConfirmationHelp" 
                                placeholder="Confirm password" required name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
