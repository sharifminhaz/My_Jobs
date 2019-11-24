<style>
    .vl {
        border-left: 1px solid #000000;
        height: 500px;
    }
</style>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-left">
            <h2>Profile</h2>
        </div>
        <div class="row">
            <div class="col-5 p-3">
                <div class="row justify-content-center">
                    <table class="table table-responsive">
                        <?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><img src="<?php echo e(URL::to($pp->Image)); ?>" style="height:30px; width: 30px; "></td>
                        </tr>
                        <tr>
                            <td><?php echo e($pp->CV); ?></td>
                        </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
                <div class="row justify-content-center">
                    <h6> &nbsp; </h6>
                </div>
            </div>
            <div class="col-1 p-3">
                <div class="row justify-content-center">
                    <div class="vl"></div>
                </div>
                <div class="row justify-content-center">
                    <h6> &nbsp; </h6>
                </div>
            </div>
            <div class="col-5 p-3">
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('profile')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group row">
                            <div class="col-md-6">
                            <select name="Last_name">
                                <option value="<?php echo e(Auth::user()->Last_name); ?>">New Upload</option>
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Image" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Image')); ?></label>

                            <div class="col-md-6">
                                <input type="file" class="form-control"  required name="Image">

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="CV" class="col-md-4 col-form-label text-md-right"><?php echo e(__('CV')); ?></label>

                            <div class="col-md-6">
                                <input id="CV" type="file" class="form-control <?php $__errorArgs = ['CV'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="CV" value="<?php echo e(old('CV')); ?>" required autocomplete="CV" autofocus>

                                <?php $__errorArgs = ['CV'];
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MyJobs\resources\views/User_Dashboard.blade.php ENDPATH**/ ?>