 <div class="container">
     <!-- Outer Row -->
     <div class="row justify-content-center">
         <div class="col-xl-10 col-lg-12 col-md-9">
             <div class="card o-hidden border-0 shadow-lg my-5">
                 <div class="card-body p-0">
                     <!-- Nested Row within Card Body -->
                     <div class="row">
                         <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                         <div class="col-lg-6">
                             <div class="p-5">
                                 <div class="text-center">
                                     <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                 </div>
                                 <?php if (session()->get('success')) : ?>
                                     <div class="alert alert-success" role="alert">
                                         <?= session()->get('success') ?>
                                     </div>
                                 <?php endif; ?>
                                 <form class="user" method="post" action="<?= base_url('admin/index') ?>">
                                     <div class="form-group">
                                         <input type="email" class="form-control form-control-user" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                     </div>
                                     <div class="form-group">
                                         <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password">
                                     </div>

                                     <?php if (isset($validation)) : ?>
                                         <div class="col-md-12">
                                             <div class="alert alert-danger" role="alert">
                                                 <?= $validation->listErrors(); ?>
                                             </div>
                                         </div>

                                     <?php endif; ?>

                                     <button href="/" class="btn btn-primary btn-user btn-block" type="submit">
                                         Login
                                     </button>
                                 </form>
                                 <hr>
                                 <div class="text-center">
                                     <a class="small" href="forgot-password.html">Forgot Password?</a>
                                 </div>
                                 <div class="text-center">
                                     <a class="small" href="<?= base_url('admin/register') ?>">Create an Account!</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>