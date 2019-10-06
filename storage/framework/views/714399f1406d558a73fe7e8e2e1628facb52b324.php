<?php $__env->startSection('content'); ?>
<div class="container ">
    <div class="row justify-content-center">
        <div class="col-md-3 bg-warning" style="padding: 20px; margin-right: 10px;">

            <img src="<?php echo e(asset('images/pph.png')); ?>" class="img-fluid" width="150" style="margin-left: 30%; ">
            <hr>
            <h5>
            <div class="list-group">
               <a href="<?php echo e(route('addQuestion')); ?>" class="list-item">
                <i class="fa fa-question" aria-hidden="true"></i>
                    Ask New Question 
                </a>
               <a href="<?php echo e(route('askedQuestion')); ?>" class="list-item">
                <i class="fa fa-question" aria-hidden="true"></i>
                Asked Question
                 <span class="badge badge-secondary">10</span>
                </a>
               <a href="<?php echo e(route('newAnswers')); ?>" class="list-item">
                <i class="fa fa-comment-o" aria-hidden="true"></i>
                New Answers
                 <span class="badge badge-secondary">5</span>
                  </a>
               <a href="<?php echo e(route('likedVideos')); ?>" class="list-item">
                <i class="fa fa-play" aria-hidden="true"></i>
                liked videos
                 <span class="badge badge-secondary">12</span> </a>
               <a href="<?php echo e(route('playlist')); ?>" class="list-item">
                <i class="fa fa-file-video-o" aria-hidden="true"></i>
                Subscribed Playlist <span class="badge badge-secondary">5</span> </a>
               <a href="<?php echo e(route('likedArticles')); ?>" class="list-item">
                <i class="fa fa-info" aria-hidden="true"></i>
                liked Articles </a>
               <a href="<?php echo e(route('savedTool')); ?>" class="list-item">
                <i class="fa fa-database" aria-hidden="true"></i>
                Saved Tool <span class="badge badge-secondary">5</span> </a>
               <a href="<?php echo e(route('connectedExpert')); ?>" class="list-item">
                <i class="fa fa-connectdevelop" aria-hidden="true"></i>
                Connected Exeprts <span class="badge badge-secondary">5</span> </a>
               <a href="<?php echo e(route('complains')); ?>" class="list-item">
                <i class="fa fa-list" aria-hidden="true"></i>
                Your Complains <span class="badge badge-secondary">5</span> </a>

            </div>

             </h5>   
        </div>


        <div class="col-md-8 bg-warning card">
            <?php echo $__env->yieldContent('userDataContent'); ?>  
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userApp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Projects\htdocs\Stay4Health\resources\views/userDataView/userData.blade.php ENDPATH**/ ?>