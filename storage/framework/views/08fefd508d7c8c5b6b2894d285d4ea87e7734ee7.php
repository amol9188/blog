<div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
    <label for="title" class="col-md-4 control-label"><?php echo e('Title'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="title" type="text" id="title" value="<?php echo e(isset($post->title) ? $post->title : ''); ?>" >
        <?php echo $errors->first('title', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('body') ? 'has-error' : ''); ?>">
    <label for="body" class="col-md-4 control-label"><?php echo e('Body'); ?></label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="body" type="textarea" id="body" ><?php echo e(isset($post->body) ? $post->body : ''); ?></textarea>
        <?php echo $errors->first('body', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
