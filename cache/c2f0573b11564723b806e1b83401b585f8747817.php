
<?php $__env->startSection('content'); ?>

    <div class="container">
        <header class="header">
            <div class="header__inscription">Blogich</div>
        </header>
            <nav class="block_menu">
                <ul class="menu">
                    <li class="menu__item menu__item_active"><a href="/">Блог</a></li>
                    <li class="menu__item"><a href="">Тратата</a></li>
                    <li class="menu__item"><a href="">О Нас</a></li>
                    <li class="menu__item"><a href="">О Вас</a></li>
                    <li class="menu__item"><a href="">Контакты</a></li>
                </ul>
            </nav>
                <main class="main_content">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="post">
                        <label for="single_post_link"><img class="post__image"  src="<?php echo e($post->image); ?>" alt=""></label>
                        <div class="post__title" id="single_post_link">
                            <a href="/single/<?php echo e($post->getId()); ?>"><?php echo e($post->title); ?></a>
                        </div>
                        <div class="post__description">
                        <?php echo e($post->content); ?>

                        </div>
                            <div class="post__author">
                                <span>Автор:</span>
                                <a href="">
                                    <?php echo e($post->user()->login); ?>

                                </a>
                            </div>
                            <div class="post__component"><span>Категории:</span>
                                <?php if(isset($post->categories())): ?>
                                <?php $__currentLoopData = $post->categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/category/<?php echo e($category->name); ?>" class="component_common_category">
                                    <?php echo e($category->name); ?>

                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                            </div>
                            <div class="post__component">
                                <span>Тэги:</span>

                                <?php if(isset($post->tags())): ?>
                                <?php $__currentLoopData = $post->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="/tag/<?php echo e($tag->name); ?>" class="component_common_tag">
                                    <?php echo e($tag->name); ?>

                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                
                            </div>
                            <div class="post__date">
                                5th may of 2020.
                            </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </main>
    <aside class="right_sidebar">
                <div class="sections">
<!--                <div class="users">-->
<!--                    <div class="side_bar_block_name">-->
<!--                        Users:-->
<!--                    </div>-->
<!--                </div>-->
                <div class="categories">
                    <div class="side_bar_block_name">
                        Categories:
                    </div>
                    <div class="side_bar_block_body">
                        <?php $__currentLoopData = $post->categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="/category/<?php echo e($category['category']); ?>" class="component_common_category"><?php echo e(category->name); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="tags">
                    <div class="side_bar_block_name">
                        Tags:
                    </div>
                    <div class="side_bar_block_body">
                       <?php $__currentLoopData = $post->tags(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <a href="/tag/<?php echo e($tag->tag); ?>" class="component_common_tag"><?php echo e($tag->name); ?></a>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
            </aside>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main.layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH W:\domains\first_mvc\views/main/select.blade.php ENDPATH**/ ?>