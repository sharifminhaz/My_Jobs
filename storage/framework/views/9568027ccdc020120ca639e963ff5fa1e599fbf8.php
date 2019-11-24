<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Jobs</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    This is home. You are logged in!
                        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <hr>
                    <table class="table table-responsive">
                        <tr>
                            <th>Company name</th>
                            <td>: &nbsp;</td>
                            <td><?php echo e($job->Company); ?></td>
                        </tr>
                        <tr>
                            <th>Job Title</th>
                            <td>: &nbsp;</td>
                            <td><?php echo e($job->Job_title); ?></td>
                        </tr>
                        <tr>
                            <th>Job Description</th>
                            <td>: &nbsp;</td>
                            <td><?php echo e($job->Job_description); ?></td>
                        </tr>
                        <tr>
                            <th>Salary</th>
                            <td>: &nbsp;</td>
                            <td><?php echo e($job->Salary); ?></td>
                        </tr>
                        <tr>
                            <th>Location</th>
                            <td>: &nbsp;</td>
                            <td><?php echo e($job->Location); ?></td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>: &nbsp;</td>
                            <td><?php echo e($job->Country); ?></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="#" class="btn btn-sm btn-success">Apply</a>
                            </td>
                        </tr>
                    </table>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Project\MyJobs\resources\views/home.blade.php ENDPATH**/ ?>