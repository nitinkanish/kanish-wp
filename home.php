<?php

/**
 * Template Name: Home
 * Description: Page template full width.
 *
 */

get_header();
?>
<!-- Trending START -->
<section class="py-2">
    <div class="container">
        <div class="row g-0">
            <div class="col-12 bg-primary-soft p-2 rounded">
                <div class="d-sm-flex align-items-center text-center text-sm-start">
                    <!-- Title -->
                    <div class="me-3">
                        <span class="badge bg-primary p-2 px-3">Trending:</span>
                    </div>
                    <!-- Slider -->
                    <div class="tiny-slider arrow-end arrow-xs arrow-white arrow-round arrow-md-none">
                        <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
                            <?php
                            $next_args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 3,
                                'order' => 'DESC',
                                'orderby' => 'ID',
                            );
                            $the_query = new WP_Query($next_args);

                            // The Loop
                            if ($the_query->have_posts()) {
                                while ($the_query->have_posts()) {
                                    $the_query->the_post(); ?>
                                    <div> <a href="<?= get_permalink() ?>" class="text-reset btn-link"><?= the_title() ?></a></div>
                            <?php }
                            } else {
                                // no posts found
                            }
                            /* Restore original Post Data */
                            wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Row END -->
    </div>
</section>
<!-- =======================
Trending END -->
<!-- =======================
Main hero START -->
<section class="py-0 card-grid mt-2 mb-5">
    <div class="container">
        <div class="row">
            <!-- Slider START -->
            <div class="col-lg-7">
                <div class="tiny-slider arrow-hover arrow-blur arrow-round rounded-3">
                    <div class="tiny-slider-inner" data-autoplay="false" data-hoverpause="true" data-gutter="0" data-arrow="true" data-dots="false" data-items="1">
                        <?php
                        $next_args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'posts_per_page' => 3,
                            'order' => 'DESC',
                            'orderby' => 'ID',
                        );
                        $the_query = new WP_Query($next_args);

                        // The Loop
                        if ($the_query->have_posts()) {
                            while ($the_query->have_posts()) {

                                $the_query->the_post();

                                $author_id = get_post_field('post_author', get_the_ID());

                        ?>
                                <!-- Slide 1 -->
                                <div class="card card-overlay-bottom card-bg-scale h-400 h-lg-560 rounded-0" style="background-image:url(<?= get_the_post_thumbnail_url() ?>); background-position: center left; background-size: cover;">
                                    <!-- Card Image overlay -->
                                    <div class="card-img-overlay d-flex flex-column p-3 p-sm-5">
                                        <!-- Card overlay Top -->
                                        <!-- <div class="w-100 mb-auto d-flex justify-content-end">
                                    <div class="text-end ms-auto">
                                        <div class="icon-md bg-primary-soft bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                    </div>
                                </div> -->
                                        <!-- Card overlay Bottom  -->
                                        <div class="w-100 mt-auto">
                                            <div class="col">
                                                <!-- Card category -->
                                                <?php
                                                $categories = get_the_category($post->ID);
                                                foreach ($categories as $category) {
                                                    echo '<a href="' . get_category_link($category->term_id) . '" class="badge bg-primary mb-2 me-2"><i class="fas fa-circle me-2 small fw-bold"></i>' . $category->name . '</a>';
                                                }


                                                ?>
                                                <!-- Card title -->
                                                <h2 class="text-white display-5"><a href="<?= get_permalink() ?>" class="btn-link text-reset stretched-link fw-normal"><?= the_title() ?></a></h2>
                                                <p class="text-white"><?= get_the_excerpt() ?></p>
                                                <!-- Card info -->
                                                <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block">
                                                    <li class="nav-item">
                                                        <div class="nav-link">
                                                            <div class="d-flex align-items-center text-white position-relative">
                                                                <div class="avatar avatar-sm">
                                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/01.jpg" alt="avatar">
                                                                </div>
                                                                <span class="ms-3">by <a href="<?php echo get_the_author_meta('user_url', $author_id); ?>" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta('display_name', $author_id); ?></a></span>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item"><?= get_the_date() ?></li>
                                                    <li class="nav-item">3 min read</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } else {
                            // no posts found
                        }
                        /* Restore original Post Data */
                        wp_reset_postdata();
                        ?>



                    </div>
                </div>
            </div>
            <!-- Slider END -->
            <div class="col-lg-5 mt-5 mt-lg-0">
                <!-- Card item START -->
                <?php
                $next_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'order' => 'DESC',
                    'orderby' => 'ID',
                );
                $the_query = new WP_Query($next_args);

                // The Loop
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {

                        $the_query->the_post();

                        $author_id = get_post_field('post_author', get_the_ID());

                ?>
                        <div class="card mb-4">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded-3" src="<?= get_the_post_thumbnail_url() ?>" alt="">
                                </div>
                                <div class="col-8">
                                    <?php
                                    $categories = get_the_category($post->ID);
                                    foreach ($categories as $category) {
                                        echo '<a href="' . get_category_link($category->term_id) . '" class="badge bg-primary mb-2 me-2"><i class="fas fa-circle me-2 small fw-bold"></i>' . $category->name . '</a>';
                                    }


                                    ?>
                                    <!-- <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Lifestyle</a> -->
                                    <h5><a href="<?= get_permalink() ?>" class="btn-link text-reset stretched-link fw-bold"><?= the_title() ?></a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">

                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/01.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta('display_name', $author_id); ?></a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item"><?= get_the_date() ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                <?php }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>

            </div>
        </div> <!-- Row END -->
    </div>
</section>
<!-- =======================
Main hero END -->

<!-- =======================
Feature News slider START -->
<section class="py-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tiny-slider arrow-blur arrow-round rounded-3 overflow-hidden">
                    <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="24" data-arrow="true" data-dots="false" data-items-xl="4" data-items-lg="3" data-items-md="3" data-items-sm="2" data-items-xs="1">
                        <!-- Card item START -->
                        <?php
                $next_args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'order' => 'DESC',
                    'orderby' => 'ID',
                );
                $the_query = new WP_Query($next_args);

                // The Loop
                if ($the_query->have_posts()) {
                    while ($the_query->have_posts()) {

                        $the_query->the_post();

                        $author_id = get_post_field('post_author', get_the_ID());

                ?>
                        <div>
                            <div class="card card-overlay-bottom card-img-scale">
                                <!-- Card Image -->
                                <img class="card-img" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'homepage-thumb') ?>" alt="">
                                <!-- Card Image overlay -->
                                <div class="card-img-overlay d-flex flex-column p-3 p-sm-4">
                                    <div>
                                        <!-- Card category -->
                                        <?php
                                    $categories = get_the_category($post->ID);
                                    foreach ($categories as $category) {
                                        echo '<a href="' . get_category_link($category->term_id) . '" class="badge bg-warning"><i class="fas fa-circle me-2 small fw-bold"></i>' . $category->name . '</a>';
                                    }


                                    ?>
                                    </div>
                                    <div class="w-100 mt-auto">

                                        <!-- Card title -->
                                        <h4 class="text-white"><a href="<?= get_permalink() ?>" class="btn-link text-reset stretched-link"><?= the_title() ?></a></h4>
                                        <!-- Card info -->
                                        <ul class="nav nav-divider text-white-force align-items-center d-none d-sm-inline-block small">
                                            <li class="nav-item position-relative">
                                                <div class="nav-link">by <a href="#" class="stretched-link text-reset btn-link"><?php echo get_the_author_meta('display_name', $author_id); ?></a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><?= get_the_date() ?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }
                } else {
                    // no posts found
                }
                /* Restore original Post Data */
                wp_reset_postdata();
                ?>
                        <!-- Card item END -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =======================
Feature News slider END -->

<!-- =======================
Main content START -->
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <!-- Main Post START -->
            <div class="col-lg-9">
                <!-- Top highlights START -->
                <div class="mb-4">
                    <h2 class="m-0"><i class="bi bi-hourglass-top me-2"></i>Today's top highlights</h2>
                    <p>Latest breaking news, pictures, videos, and special reports</p>
                </div>
                <div class="tiny-slider arrow-blur arrow-round rounded-3">
                    <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="24" data-arrow="true" data-dots="false" data-items-sm="1" data-items-xs="1" data-items="2">
                        <!-- Card item START -->
                        <div class="card">
                            <!-- Card img -->
                            <div class="position-relative">
                                <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/01.jpg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    <!-- Card overlay Top -->
                                    <div class="w-100 mb-auto d-flex justify-content-end">
                                        <div class="text-end ms-auto">
                                            <!-- Card format icon -->
                                            <div class="icon-md bg-success text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
                                        </div>
                                    </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h4>
                                <p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty gay assistance joy. Unaffected at ye of compliment alteration to</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/01.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jan 22, 2022</li>
                                    <li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 5</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card">
                            <!-- Card img -->
                            <div class="position-relative">
                                <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/06.jpg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    <!-- Card overlay Top -->
                                    <div class="w-100 mb-auto d-flex justify-content-end">
                                        <div class="text-end ms-auto">
                                            <!-- Card format icon -->
                                            <div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title="This post has video"><i class="fas fa-video"></i></div>
                                        </div>
                                    </div>
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Dirty little secrets about the business industry</a></h4>
                                <p class="card-text">Place voice no arises along to. Parlors waiting so against me no. Wishing calling is warrant settled was lucky. Express besides it present if at an opinion visitor.</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/02.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Mar 07, 2022</li>
                                    <li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 3</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card">
                            <!-- Card img -->
                            <div class="position-relative">
                                <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/03.jpg" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    <!-- Card overlay bottom -->
                                    <div class="w-100 mt-auto">
                                        <!-- Card category -->
                                        <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Gadgets</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3">
                                <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Bad habits that people in the industry need to quit</a></h4>
                                <p class="card-text">For who thoroughly her boy estimating conviction. Removed demands expense account in outward tedious do. Particular way thoroughly unaffected</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/03.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jun 17, 2022</li>
                                    <li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 1 </a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item END -->

                    </div>
                </div>
                <!-- Top highlights START -->

                <!-- Divider -->
                <div class="border-bottom border-primary border-2 opacity-1 my-4"></div>

                <!-- Card video item START -->
                <div class="card mb-2 mb-sm-4">
                    <div class="row g-3">
                        <div class="col-md-6 order-sm-2">
                            <div class="rounded-3 overflow-hidden">
                                <div class="ratio ratio-16x9">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/tXHviS-4ygo" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                            <h3><a href="post-single-6.html" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h3>
                            <p>Demesne far hearted suppose venture excited see had has. Dependent on so extremely delivered by. Yet no jokes worse her why. Bed one supposing breakfast day fulfilled off depending questions. For who thoroughly her boy estimating conviction.</p>
                            <!-- Card info -->
                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                <li class="nav-item">
                                    <div class="nav-link">
                                        <div class="d-flex align-items-center position-relative">
                                            <div class="avatar avatar-xs">
                                                <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/06.jpg" alt="avatar">
                                            </div>
                                            <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">Jul 22, 2022</li>
                                <li class="nav-item"><a href="#" class="btn-link"><i class="far fa-comment-alt me-1"></i> 14 </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Card video item END -->

                <!-- Divider -->
                <div class="border-bottom border-primary border-2 opacity-1 my-4"></div>

                <!-- Small card 6X6 START -->
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/01.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">The pros and cons of business agency</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/08.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Joan</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Aug 15, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/02.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">5 reasons why you shouldn't startup</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/09.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jun 01, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/03.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">Ten questions you should answer truthfully.</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/10.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Dec 07, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/04.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">Five unbelievable facts about money.</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/12.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Dennis</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Sep 07, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/05.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">10 biggest problem of startups, and how you can fix it</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/12.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Billy</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Sep 19, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/06.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">Best Twitter accounts for learning about investment</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/13.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Frances</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jan 03, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/07.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">This is why this year will be the year of startups</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/14.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Carolyn</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Feb 15, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-3">
                            <div class="row g-3">
                                <div class="col-4">
                                    <img class="rounded" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/thumb/08.jpg" alt="">
                                </div>
                                <div class="col-8">
                                    <h5><a href="post-single-5.html" class="btn-link stretched-link text-reset">Best Pinterest Boards for learning about business</a></h5>
                                    <!-- Card info -->
                                    <ul class="nav nav-divider align-items-center mt-3 small">
                                        <li class="nav-item">
                                            <div class="nav-link">
                                                <div class="d-flex align-items-center position-relative">
                                                    <div class="avatar avatar-xs">
                                                        <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/15.jpg" alt="avatar">
                                                    </div>
                                                    <span class="ms-2">by <a href="#" class="stretched-link text-reset btn-link">Judy</a></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="nav-item">Jul 30, 2022</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>

                </div><!-- Row END -->
                <!-- Small card 6X6 END -->

                <!-- Adv -->
                <div>
                    <a href="#" class="card-img-flash d-block mt-4">
                        <img src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/adv-1.png" alt="adv">
                    </a>
                </div>

            </div>
            <!-- Main Post END -->
            <!-- Sidebar START -->
            <div class="col-lg-3 mt-5 mt-lg-0">
                <div data-sticky data-margin-top="80" data-sticky-for="767">
                    <!-- Social links -->
                    <div class="row g-2">
                        <a href="#" class="d-flex justify-content-between align-items-center bg-facebook text-white-force rounded p-2 position-relative">
                            <i class="fab fa-facebook-square fs-3"></i>
                            <div class="d-flex">
                                <h6 class="me-1 mb-0">1.5K</h6>
                                <small class="small">Fans</small>
                            </div>
                        </a>
                        <a href="#" class="d-flex justify-content-between align-items-center bg-instagram-gradient text-white-force rounded p-2 position-relative">
                            <i class="fab fa-instagram fs-3"></i>
                            <div class="d-flex">
                                <h6 class="me-1 mb-0">1.8M</h6>
                                <small class="small">Followers</small>
                            </div>
                        </a>
                        <a href="#" class="d-flex justify-content-between align-items-center bg-youtube text-white-force rounded p-2 position-relative">
                            <i class="fab fa-youtube-square fs-3"></i>
                            <div class="d-flex">
                                <h6 class="me-1 mb-0">22K</h6>
                                <small class="small">Subscribers</small>
                            </div>
                        </a>
                    </div>
                    <!-- Categories -->
                    <div class="row g-2 mt-5">
                        <h5>Categories</h5>
                        <div class="d-flex justify-content-between align-items-center bg-warning-soft rounded p-2 position-relative">
                            <h6 class="m-0 text-warning">Photography</h6>
                            <a href="#" class="badge bg-warning text-dark stretched-link">09</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center bg-info-soft rounded p-2 position-relative">
                            <h6 class="m-0 text-info">Travel</h6>
                            <a href="#" class="badge bg-info stretched-link">25</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center bg-danger-soft rounded p-2 position-relative">
                            <h6 class="m-0 text-danger">Photography</h6>
                            <a href="#" class="badge bg-danger stretched-link">75</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center bg-primary-soft rounded p-2 position-relative">
                            <h6 class="m-0 text-primary">Covid-19</h6>
                            <a href="#" class="badge bg-primary stretched-link">19</a>
                        </div>
                        <div class="d-flex justify-content-between align-items-center bg-success-soft rounded p-2 position-relative">
                            <h6 class="m-0 text-success">Business</h6>
                            <a href="#" class="badge bg-success stretched-link">35</a>
                        </div>
                    </div>
                    <!-- Most read -->
                    <div>
                        <h5 class="mt-5 mb-3">Most read</h5>
                        <div class="d-flex position-relative mb-3">
                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">01</span>
                            <h6><a href="#" class="stretched-link text-reset btn-link">Bad habits that people in the business industry need to quit</a></h6>
                        </div>
                        <div class="d-flex position-relative mb-3">
                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">02</span>
                            <h6><a href="#" class="stretched-link text-reset btn-link">How to worst business fails of all time could have been prevented</a></h6>
                        </div>
                        <div class="d-flex position-relative mb-3">
                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">03</span>
                            <h6><a href="#" class="stretched-link text-reset btn-link">How 10 worst business fails of all time could have been prevented</a></h6>
                        </div>
                        <div class="d-flex position-relative mb-3">
                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">04</span>
                            <h6><a href="#" class="stretched-link text-reset btn-link">10 facts about business that will instantly put you in a good mood</a></h6>
                        </div>
                        <div class="d-flex position-relative mb-3">
                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">05</span>
                            <h6><a href="#" class="stretched-link text-reset btn-link">How did we get here? The history of the business told through tweets</a></h6>
                        </div>
                        <div class="d-flex position-relative mb-3">
                            <span class="me-3 mt-n1 fa-fw fw-bold fs-3 opacity-5">06</span>
                            <h6><a href="#" class="stretched-link text-reset btn-link">Ten tips about startups that you can't learn from books</a></h6>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Sidebar END -->
        </div> <!-- Row end -->
    </div>
</section>
<!-- =======================
Main content END -->

<!-- =======================
Featured video START -->
<section class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Title -->
                <div class="mb-4 d-sm-flex justify-content-between align-items-center">
                    <h2 class="m-sm-0 text-white"><i class="bi bi-camera-video me-2"></i>Featured Video</h2>
                    <a href="#" class="btn btn-sm bg-youtube"><i class="bi bi-youtube me-2 align-middle"></i>Subscribe us on YouTube</a>
                </div>
            </div>
            <!-- Card big START -->
            <div class="col-lg-6">
                <div class="card card-overlay-bottom card-fold h-400 h-lg-540" style="background-image:url(assets/images/blog/1by1/06.jpg); background-position: center left; background-size: cover;">
                    <!-- Card featured -->
                    <span class="card-featured" title="Featured post"><i class="fas fa-star"></i></span>
                    <!-- Card Image overlay -->
                    <div class="card-img-overlay d-flex flex-column p-3 p-sm-5">
                        <!-- Card play button -->
                        <div class="position-absolute top-50 start-50 translate-middle pb-5">
                            <!-- Popup video -->
                            <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-lg bg-primary d-block text-white rounded-circle" data-glightbox data-gallery="y-video">
                                <i class="bi bi-play-btn"></i>
                            </a>
                        </div>
                        <!-- Card overlay Bottom  -->
                        <div class="w-100 mt-auto">
                            <div class="col text-center">
                                <!-- Card category -->
                                <a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Business</a>
                                <!-- Card title -->
                                <h2 class="text-white"><a href="post-single.html" class="btn-link text-reset fw-normal">Never underestimate the influence of social media</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card big END -->
            <!-- Card small START -->
            <div class="col-lg-3 mt-4 mt-lg-0">
                <!-- Card item START -->
                <div class="card bg-transparent overflow-hidden mb-4">
                    <!-- Card img -->
                    <div class="position-relative rounded-3 overflow-hidden">
                        <!-- Video -->
                        <div class="card-image">
                            <div class="overflow-hidden w-100">
                                <!-- HTML video START -->
                                <div class="player-wrapper rounded-3 overflow-hidden">
                                    <div class="player-youtube">
                                        <iframe src="https://www.youtube.com/embed/tXHviS-4ygo"></iframe>
                                    </div>
                                </div>
                                <!-- HTML video END -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h5 class="card-title"><a href="post-single.html" class="btn-link text-white fw-bold">Bad habits that people in the industry need to quit</a></h5>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
                            <li class="nav-item">
                                <div class="nav-link">
                                    by <a href="#" class="text-reset btn-link">Bryan</a>
                                </div>
                            </li>
                            <li class="nav-item">Jun 17, 2022</li>
                        </ul>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="card bg-transparent overflow-hidden mb-4">
                    <!-- Card img -->
                    <div class="position-relative rounded-3 overflow-hidden card-fold">
                        <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/16by9/small/02.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay -->
                            <div class="w-100 my-auto">
                                <!-- Popup video -->
                                <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-md bg-primary d-block mx-auto text-white rounded-circle" data-glightbox data-gallery="y-video">
                                    <i class="bi bi-play-btn"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h5 class="card-title"><a href="post-single.html" class="btn-link text-white fw-bold">12 worst types of business accounts you follow on Twitter</a></h5>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
                            <li class="nav-item">
                                <div class="nav-link">
                                    by <a href="#" class="text-reset btn-link">Samuel</a>
                                </div>
                            </li>
                            <li class="nav-item">Jan 22, 2022</li>
                        </ul>
                    </div>
                </div>
                <!-- Card item END -->
            </div>
            <div class="col-lg-3">
                <!-- Card item START -->
                <div class="card bg-transparent overflow-hidden mb-4">
                    <!-- Card img -->
                    <div class="position-relative rounded-3 overflow-hidden card-fold">
                        <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/16by9/small/03.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay -->
                            <div class="w-100 my-auto">
                                <!-- Popup video -->
                                <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-md bg-primary d-block mx-auto text-white rounded-circle" data-glightbox data-gallery="y-video">
                                    <i class="bi bi-play-btn"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h5 class="card-title"><a href="post-single.html" class="btn-link text-white fw-bold">Best Twitter accounts for learning about investment</a></h5>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
                            <li class="nav-item">
                                <div class="nav-link">
                                    by <a href="#" class="text-reset btn-link">Joan</a>
                                </div>
                            </li>
                            <li class="nav-item">Mar 24, 2022</li>
                        </ul>
                    </div>
                </div>
                <!-- Card item END -->
                <!-- Card item START -->
                <div class="card bg-transparent overflow-hidden mb-4">
                    <!-- Card img -->
                    <div class="position-relative rounded-3 overflow-hidden card-fold">
                        <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/16by9/small/04.jpg" alt="Card image">
                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                            <!-- Card overlay -->
                            <div class="w-100 my-auto">
                                <!-- Popup video -->
                                <a href="https://youtu.be/n_Cn8eFo7u8" class="icon-md bg-primary d-block mx-auto text-white rounded-circle" data-glightbox data-gallery="y-video">
                                    <i class="bi bi-play-btn"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body px-0 pt-3">
                        <h5 class="card-title"><a href="post-single.html" class="btn-link text-white fw-bold">Ten questions you should answer truthfully</a></h5>
                        <!-- Card info -->
                        <ul class="nav nav-divider align-items-center d-none d-sm-inline-block text-white-force small opacity-6">
                            <li class="nav-item">
                                <div class="nav-link">
                                    by <a href="#" class="text-reset btn-link">Judy</a>
                                </div>
                            </li>
                            <li class="nav-item">Spe 07, 2022</li>
                        </ul>
                    </div>
                </div>
                <!-- Card item END -->
            </div>
            <!-- Card small END -->
        </div>
    </div>
</section>
<!-- =======================
Featured video END -->

<!-- =======================
Main content 2 START -->
<section class="position-relative">
    <div class="container" data-sticky-container>
        <div class="row">
            <!-- Main Post START -->
            <div class="col-lg-9">
                <!-- Entertainment START -->
                <div class="row">
                    <div class="col-12 mb-3">
                        <h2 class="m-0"><i class="bi bi-hand-index-thumb me-2"></i>Entertainment</h2>
                        <p>Checkout the hand pick post by admin</p>
                    </div>
                    <div class="col-md-6">
                        <!-- Card item big START -->
                        <div class="card mb-4">
                            <div class="card-body p-4 border rounded-3">
                                <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">12 worst types of business accounts you follow on Twitter</a></h4>
                                <p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty.</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/01.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jan 22, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item big END -->
                        <!-- Card item big START -->
                        <div class="card mb-4">
                            <div class="card-body p-4 border rounded-3">
                                <a href="#" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Travel</a>
                                <h4 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">Never underestimate the influence of social media</a></h4>
                                <p class="card-text">He moonlights difficult engrossed it, sportsmen. Interested has all Devonshire difficulty.</p>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/13.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Larry</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Mar 28, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item big END -->
                    </div>
                    <div class="col-md-6">
                        <!-- Card item START -->
                        <div class="card mb-1">
                            <div class="card-body px-0 border-bottom">
                                <a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Covid-19</a>
                                <h5><a href="post-single-3.html" class="btn-link stretched-link text-reset">Five unbelievable facts about money.</a></h5>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/05.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Bryan</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jun 17, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-1">
                            <div class="card-body px-0 border-bottom">
                                <a href="#" class="badge bg-dark mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Technology</a>
                                <h5><a href="post-single-3.html" class="btn-link stretched-link text-reset">Around the web: 20 fabulous infographics about business</a></h5>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/12.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Jacqueline</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Oct 11, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-1">
                            <div class="card-body px-0 border-bottom">
                                <a href="#" class="badge bg-warning mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                <h5><a href="post-single-3.html" class="btn-link stretched-link text-reset">7 common mistakes everyone makes while traveling</a></h5>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/06.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="stretched-link text-reset btn-link">Samuel</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Jul 22, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item END -->
                        <!-- Card item START -->
                        <div class="card mb-1">
                            <div class="card-body px-0">
                                <!-- Audio START -->
                                <div class="bg-light rounded">
                                    <audio class="player-audio" crossorigin>
                                        <source src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/videos/audio.mp3" type="audio/mp3">
                                    </audio>
                                </div>
                                <!-- Audio END -->
                                <h5 class="mt-3"><a href="post-single-3.html" class="btn-link text-reset">Skills that you can learn from business</a></h5>
                                <!-- Card info -->
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small">
                                    <li class="nav-item">
                                        <div class="nav-link">
                                            <div class="d-flex align-items-center position-relative">
                                                <div class="avatar avatar-xs">
                                                    <img class="avatar-img rounded-circle" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/avatar/07.jpg" alt="avatar">
                                                </div>
                                                <span class="ms-3">by <a href="#" class="text-reset btn-link">Judy</a></span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">Sep 30, 2022</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Card item END -->
                    </div>
                </div>
                <!-- Entertainment END -->

                <!-- Podcast slide START -->
                <div class="row">
                    <div class="col-12 my-3">
                        <h2 class="m-0"><i class="bi bi-mic me-2"></i>Latest Podcasts</h2>
                        <p>Listen and Learn: The best educational podcasts</p>
                    </div>
                    <div class="col-12">
                        <div class="tiny-slider arrow-dark arrow-hover arrow-round rounded-3">
                            <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="24" data-arrow="true" data-dots="false" data-items-xl="3" data-items-lg="2" data-items-md="2" data-items-sm="1" data-items-xs="1">
                                <!-- Card item START -->
                                <div>
                                    <div class="card card-fold bg-light">
                                        <div class="card-body p-4">
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small mb-2">
                                                <li class="nav-item"><i class="bi bi-clock-history"></i> 56:36</li>
                                                <li class="nav-item">With <a href="#">Larry Lawson</a> </li>
                                            </ul>
                                            <h4 class="card-title"><a href="post-single-6.html" class="stretched-link text-reset">The 15 reasons clients love Bootstrap</a></h4>
                                            <p class="m-0">Rooms oh fully taken by worse do points afraid</p>
                                        </div>
                                        <img src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/16by9/small/04.jpg" class="card-img-bottom" alt="Card image">
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div>
                                    <div class="card card-fold bg-light">
                                        <div class="card-body p-4">
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small mb-2">
                                                <li class="nav-item"><i class="bi bi-clock-history"></i> 26:15</li>
                                                <li class="nav-item">With <a href="#">Amanda Reed</a> </li>
                                            </ul>
                                            <h4 class="card-title"><a href="post-single-6.html" class="stretched-link text-reset">Five unbelievable facts about money </a></h4>
                                            <p class="m-0">Luckily cheered colonel I do we attack highest enabled</p>
                                        </div>
                                        <img src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/16by9/small/01.jpg" class="card-img-bottom" alt="Card image">
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div>
                                    <div class="card card-fold bg-light">
                                        <div class="card-body p-4">
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small mb-2">
                                                <li class="nav-item"><i class="bi bi-clock-history"></i> 1:05:20</li>
                                                <li class="nav-item">With <a href="#">Judy Nguyen</a> </li>
                                            </ul>
                                            <h4 class="card-title"><a href="post-single-6.html" class="stretched-link text-reset">This is why Bootstrap is famous</a></h4>
                                            <p class="m-0">The furnished she concluded depending procuring concealed </p>
                                        </div>
                                        <img src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/16by9/small/02.jpg" class="card-img-bottom" alt="Card image">
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div>
                                    <div class="card card-fold bg-light">
                                        <div class="card-body p-4">
                                            <ul class="nav nav-divider align-items-center d-none d-sm-inline-block small mb-2">
                                                <li class="nav-item"><i class="bi bi-clock-history"></i> 45:16</li>
                                                <li class="nav-item">With <a href="#">Bryan Knight</a> </li>
                                            </ul>
                                            <h4 class="card-title"><a href="post-single-6.html" class="stretched-link text-reset">10 common myths about startups</a></h4>
                                            <p class="m-0">Express besides it present if at an opinion visitor.</p>
                                        </div>
                                        <img src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/16by9/small/03.jpg" class="card-img-bottom" alt="Card image">
                                    </div>
                                </div>
                                <!-- Card item END -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Podcast slide END -->
            </div>
            <!-- Main Post END -->

            <!-- Sidebar 2 START -->
            <div class="col-lg-3 mt-5 mt-lg-0">
                <div data-sticky data-margin-top="80" data-sticky-for="767">
                    <div>
                        <h4>Recomended</h4>
                        <div class="tiny-slider dots-dark mt-3 mb-5">
                            <div class="tiny-slider-inner" data-autoplay="true" data-hoverpause="true" data-gutter="0" data-arrow="false" data-dots="true" data-items="1">
                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/07.jpg" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay Top -->
                                            <div class="w-100 mb-auto d-flex justify-content-end">
                                                <div class="text-end ms-auto">
                                                    <!-- Card format icon -->
                                                    <div class="icon-md bg-white-soft bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
                                                </div>
                                            </div>
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">7 common mistakes everyone makes while traveling</a></h5>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/08.jpg" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Sports</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="stretched-link btn-link text-reset fw-bold">Skills that you can learn from business</a></h5>
                                    </div>
                                </div>
                                <!-- Card item END -->
                                <!-- Card item START -->
                                <div class="card">
                                    <!-- Card img -->
                                    <div class="position-relative">
                                        <img class="card-img" src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/09.jpg" alt="Card image">
                                        <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                            <!-- Card overlay bottom -->
                                            <div class="w-100 mt-auto">
                                                <a href="#" class="badge bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>Marketing</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body p-0 pt-3">
                                        <h5 class="card-title"><a href="post-single-3.html" class="btn-link text-reset fw-bold">10 tell-tale signs you need to get a new business</a></h5>
                                    </div>
                                </div>
                                <!-- Card item END -->
                            </div>
                        </div>
                    </div>
                    <!-- Newsletter START -->
                    <div class="bg-light p-4 mt-4 rounded-3 text-center">
                        <h4>Subscribe to our mailing list!</h4>
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" placeholder="Email address">
                            </div>
                            <button type="submit" class="btn btn-primary">Subscribe</button>
                            <div class="form-text">We don't spam</div>
                        </form>
                    </div>
                    <!-- Newsletter END -->
                </div>
            </div>
            <!-- Sidebar 2 END -->
        </div> <!-- Row end -->
    </div>
</section>
<!-- =======================
Main content 2 END -->

<!-- =======================
Sticky post START -->
<div class="sticky-post bg-light border p-4 mb-5 text-sm-end rounded d-none d-xxl-block">
    <div class="d-flex align-items-center">
        <!-- Title -->
        <div class="me-3">
            <span>Trending post</span>
            <h6 class="m-0"> <a href="javascript:void(0)" class="stretched-link btn-link text-reset">Bad habits that people in the industry need to quit</a></h6>
        </div>
        <!-- image -->
        <div class="col-4 d-none d-md-block">
            <img src="<?= home_url() ?>/wp-content/themes/md-blog/assets/images/blog/4by3/05.jpg" alt="Image">
        </div>
    </div>
</div>
<!-- =======================
Sticky post END -->
<?php get_footer(); ?>