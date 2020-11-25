<?php $__env->startSection('content'); ?>
    <div class="single_post_container">
<!--        <header class="header"><span class="header__inscription">HEADER</span></header>-->
        <nav class="space_link_back">
            <a href="/"><i class="fas fa-angle-double-left fa-2x" style="color: lightskyblue"></i></a>
        </nav>
<div class="main_content_single_post" style="flex-wrap: wrap" >
    <div class="single_post_all_content">
    <div class="single_post_image" style="width: 100%;">
        <img src="<?php echo e($post->getImage()); ?>" alt="" width="600px" height="400px">
    </div>
    <div class="single_post_title" >
        <span><?php echo e($post->title); ?></span>
    </div>
    <div class="single_post_author">
        <span>author: </span>
        <span class="single_post_author_name">
            <?php echo e($post->user()->first()->login); ?>

        </span>
    </div>
    <div class="single_post_content">
        <span>
            <?php echo e($post->content); ?>

        </span>
    </div>
    <div class="single_post_component"><span>Категории:</span>

        <?php if(isset($categories) && !empty($categories)): ?>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/category/<?php echo e($category->name); ?>" class="component_common_category">
            <?php echo e($category->name); ?>

        </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>


    </div>
    <div class="single_post_component">
        <span>Тэги:</span>

        <?php if(isset($tags) && !empty($tags)): ?>
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="/tag/<?php echo e($tag->name); ?>" class="component_common_tag">
                    <?php echo e($tag->name); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </div>
    <div class="single_post_date">
        <span> 20th of November 2020</span>
    </div>
    <div class="comment_button_space">
        <div class="comment_button" id="comments_vision">
            Comments
        </div>
    </div>
    <div class="comment_space" >
        <div class="new_comment">
            <form action="" method="post" id="add_comment_form">
                <div class="comment_user_name_space">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <input type="text" class="form-control" name="id" value="<?php echo e($post->id); ?>" hidden>
                    </div>
                </div>
                    <div class="form-group">
                        <textarea class="form-control" name="content" id="" cols="30" rows="6" placeholder="Your comment"></textarea>
                    </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" id="add_comment_button">Добавить</button>
                </div>
            </form>
        </div>


        <?php if(!empty($post->comments()->get())): ?>
        <?php $__currentLoopData = $post->comments()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="comment" style="margin: 10px 10px; min-height: 150px;
             /*padding-left: 15px; border-left: 10px solid lightblue;*/
             -webkit-box-shadow: -8px 10px 20px 1px lightblue;
            -moz-box-shadow: -8px 10px 20px 1px lightblue;
            box-shadow: -8px 10px 20px 1px lightblue;
            /*display: flex;*/
            /*flex-direction: column;*/
            /*justify-content: space-between;*/
">
           <div style="padding: 15px">
            <div class="comment_img_space">
                <div class="comment_user_name">
                    <?php echo e($comment->email); ?>

                </div>
            </div>
            <div class="comment_content">
                <span>
                    <?php echo e($comment->content); ?>

                </span>
            </div>
            <div class="date">
                <?php echo e($comment->created_at); ?>

            </div>

           </div>

        </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <?php endif; ?>
    </div>
    </div>
    <script src="/js/singlePost.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('main.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/main/singlePost.blade.php ENDPATH**/ ?>