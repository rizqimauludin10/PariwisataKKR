<div class="container">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" action="<?= base_url('admin/register') ?>" method="post">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="User Name">
                                </div>

                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-user" id="email" name="email" placeholder="Email Address">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="repeatpassword" name="repeatpassword" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button href="<?= base_url('/') ?>" class="btn btn-primary btn-user btn-block" type="submit">
                                Register Account
                            </button>
                    </div>

                    <?php if (isset($validation)) : ?>
                        <div class="col-md-12">
                            <div class="alert alert-danger" role="alert">
                                <?= $validation->listErrors() ?>
                            </div>
                        </div>

                    <?php endif; ?>

                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="<?= base_url('admin/login') ?>">Already have an account? Login!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>