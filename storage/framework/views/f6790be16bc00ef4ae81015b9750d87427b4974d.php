<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-warning">
                <div class="card-header"><?php echo e(__('Register')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name')); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name" value="<?php echo e(old('name')); ?>" required autocomplete="name" autofocus>

                                <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email">

                                <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="password" required autocomplete="new-password">

                                <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender')); ?></label>

                            <div class="col-md-6">

                                <select name="gender" id=gender class="form-control" required >
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Another">Another</option>
                                </select>

                                <?php if ($errors->has('gender')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('gender'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="blood_group" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Blood Group')); ?></label>

                            <div class="col-md-6">

                                <select name="blood_group" id="blood_group" class="form-control" required >
                                    <option value="A+">A+</option>
                                    <option value="B+">B+</option>
                                    <option value="AB+">AB+</option>
                                    <option value="B+">O+</option>
                                    <option value="B+">A-</option>
                                    <option value="B+">B-</option>
                                    <option value="B+">AB-</option>
                                    <option value="B+">O-</option>
                                </select>

                                <?php if ($errors->has('blood_group')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('blood_group'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>                        

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right"><?php echo e(__('City')); ?></label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="city" value="<?php echo e(old('city')); ?>" required autocomplete="city">

                                <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nationlity" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Nationality')); ?></label>

                            <div class="col-md-6">
                                <input id="nationality" type="text" class="form-control <?php if ($errors->has('nationality')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nationality'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="nationality" value="<?php echo e(old('nationlity')); ?>" required autocomplete="nationality" autofocus>

                                <?php if ($errors->has('nationality')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('nationality'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Projects\htdocs\Stay4Health\resources\views/auth/register.blade.php ENDPATH**/ ?>