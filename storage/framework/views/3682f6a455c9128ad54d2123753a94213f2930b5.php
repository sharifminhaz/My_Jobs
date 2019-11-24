<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Post Job')); ?></div>

                    <div class="card-body">
                        <form method="POST" action="<?php echo e(route('posts')); ?>">
                            <?php echo csrf_field(); ?>
                            <div>
                                <select name="Company">
                                    <option value="<?php echo e(Auth::user()->Business_name); ?>"><?php echo e(Auth::user()->Business_name); ?></option>
                                </select>
                            </div>
                            <div class="form-group row">
                                <label for="Job_title" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Job Title')); ?></label>

                                <div class="col-md-6">
                                    <input id="Job_title" type="text" class="form-control <?php $__errorArgs = ['Job_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Job_title" value="<?php echo e(old('Job_title')); ?>" required autocomplete="Job_title" autofocus>

                                    <?php $__errorArgs = ['Job_title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            
                            <div class="control-group ">

                                <div class="form-group floating-label-form-group controls">
                                    <label for="Job_description" class="col-md-4 col-6 text-md-right"><?php echo e(__('Job Description')); ?></label>
                                    <textarea rows="12" type="text" class="form-control" name="Job_description" value="<?php echo e(old('Job_description')); ?>"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Salary" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Salary')); ?></label>

                                <div class="col-md-6">
                                    <input id="Salary" type="text" class="form-control <?php $__errorArgs = ['Salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Salary" value="<?php echo e(old('Salary')); ?>" required autocomplete="Salary" autofocus>

                                    <?php $__errorArgs = ['Salary'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Location" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Location')); ?></label>

                                <div class="col-md-6">
                                    <input id="Location" type="text" class="form-control <?php $__errorArgs = ['Location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Location" value="<?php echo e(old('Location')); ?>" required autocomplete="Location" autofocus>

                                    <?php $__errorArgs = ['Location'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Country" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Country')); ?></label>

                                <div class="col-md-6">
                                    <input id="Country" type="text" class="form-control <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="Country" value="<?php echo e(old('Country')); ?>" required autocomplete="Country" autofocus>

                                    <?php $__errorArgs = ['Country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        <?php echo e(__('Post')); ?>

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


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MyJobs\resources\views/Admin_Dashboard.blade.php ENDPATH**/ ?>