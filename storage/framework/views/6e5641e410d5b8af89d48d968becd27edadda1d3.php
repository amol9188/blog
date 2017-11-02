<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">post <?php echo e($post->id); ?></div>
                    <div class="panel-body">

                        <a href="<?php echo e(url('/admin/posts')); ?>" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/admin/posts/' . $post->id . '/edit')); ?>" title="Edit post"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="<?php echo e(url('admin/posts' . '/' . $post->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-xs" title="Delete post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($post->id); ?></td>
                                    </tr>
                                    <tr><th> Title </th><td> <?php echo e($post->title); ?> </td></tr><tr><th> Body </th><td> <?php echo e($post->body); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>