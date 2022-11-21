<?php
get_header();
the_post();
$post = $wp_query->get_queried_object();
$pagename = $post->post_title;
?>

<main class="article">
    <section class="art">
        <div class="wrap">
            <div class="blog__tags">
                <?php

                $last_article_cats = wp_get_post_categories($post->ID);
                $arrayTagsLength = count($last_article_cats);

                $j = 0;
                while ($j < $arrayTagsLength) {
                    if ($last_article_cats[$j] != 3) :
                        $color = get_field('category_color', 'category_' . $last_article_cats[$j]);
                        $hex = $color;
                        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                ?>
                        <div class="blog__tag" style="color: <?php echo $color; ?>; background: rgba(<?php echo "$r , $g , $b"; ?>,.35);">
                            <?php echo get_the_category_by_ID($last_article_cats[$j]); ?>
                        </div>
                <?php
                    endif;
                    $j++;
                }
                ?>
            </div>
            <h1 class="title">
                <?php echo $pagename; ?>
            </h1>

            <div class="blog__info">
                <div class="blog__author">
                    <?php echo the_author_meta('user_nicename', $post->post_author); ?>
                </div>
                •
                <div class="blog__date">
                    <?php echo get_the_date('dS M Y', $post->ID); ?>
                </div>
            </div>
        </div>
        <img src="<?php the_field('acticle_image', $post->ID) ?>" alt="">
    </section>
    <section class="content">
        <div class="wrap ">
            <?php the_field('arcticle_content', $post->ID) ?>
        </div>
    </section>



    <?php
    $articles = get_posts(array(
        'numberposts' => 4,
        'orderby'     => 'date',
        'category_name'    => 'blog',
        'order'       => 'DESC',
        'post_type'   => 'post',
        'suppress_filters' => true
    ));
    if (count($articles) > 0) :

        $arrayLength = count($articles);
        $i = 0;
    ?>
        <section class="blog">
            <div class="wrap">
                <h2 class="title">
                    Blog
                </h2>
                <div class="blog__items">

                    <?php
                    while ($i < $arrayLength) {
                    ?>
                        <a href="<?php echo get_post_permalink($articles[$i]->ID); ?>" class="blog__item">
                            <div class="blog__content">
                                <h3 class="title">                                    
                                    <?php
                                    $text = $articles[$i]->post_title;
                                    if (strlen($text) > 35) {
                                        $text = substr($text, 0, 38) . '...';
                                    }
                                    echo $text;
                                    ?>
                                </h3>
                                <div class="blog__tags">
                                    <?php

                                    $last_article_cats = wp_get_post_categories($articles[$i]->ID);
                                    $arrayTagsLength = count($last_article_cats);

                                    $j = 0;
                                    while ($j < $arrayTagsLength) {
                                        if ($last_article_cats[$j] != 3) :
                                            $color = get_field('category_color', 'category_' . $last_article_cats[$j]);
                                            $hex = $color;
                                            list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                                    ?>
                                            <div class="blog__tag" style="color: <?php echo $color; ?>; background: rgba(<?php echo "$r , $g , $b"; ?>,.35);">
                                                <?php echo get_the_category_by_ID($last_article_cats[$j]); ?>
                                            </div>
                                    <?php
                                        endif;
                                        $j++;
                                    }
                                    ?>
                                </div>
                                <div class="blog__info">
                                    <div class="blog__author">
                                        <?php echo the_author_meta('user_nicename', $articles[$i]->post_author); ?>
                                    </div>
                                    •
                                    <div class="blog__date">
                                        <?php echo get_the_date('dS M Y', $articles[$i]->ID); ?>
                                    </div>
                                </div>
                            </div>
                            <img src="<?php the_field('acticle_image', $articles[$i]->ID) ?>" alt="" class="blog__image">
                        </a>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
                <div class="swiper blog__slider">
                    <div class="swiper-wrapper">
                        <?php
                        $i = 0;
                        while ($i < $arrayLength) {
                        ?>
                            <a href="<?php echo get_post_permalink($articles[$i]->ID); ?>" class="swiper-slide blog__item">
                                <div class="blog__content">
                                    <h3 class="title">
                                        <?php echo $articles[$i]->post_title; ?>
                                    </h3>
                                    <h4 class="text">
                                        <?php the_field('acticle_descr', $articles[$i]->ID) ?>
                                    </h4>
                                    <div class="blog__tags">
                                        <?php

                                        $last_article_cats = wp_get_post_categories($articles[$i]->ID);
                                        $arrayTagsLength = count($last_article_cats);

                                        $j = 0;
                                        while ($j < $arrayTagsLength) {
                                            if ($last_article_cats[$j] != 3) :
                                                $color = get_field('category_color', 'category_' . $last_article_cats[$j]);
                                                $hex = $color;
                                                list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                                        ?>
                                                <div class="blog__tag" style="color: <?php echo $color; ?>; background: rgba(<?php echo "$r , $g , $b"; ?>,.35);">
                                                    <?php echo get_the_category_by_ID($last_article_cats[$j]); ?>
                                                </div>
                                        <?php
                                            endif;
                                            $j++;
                                        }
                                        ?>
                                    </div>
                                    <div class="blog__info">
                                        <div class="blog__author">
                                            <?php echo the_author_meta('user_nicename', $articles[$i]->post_author); ?>
                                        </div>
                                        •
                                        <div class="blog__date">
                                            <?php echo get_the_date('dS M Y', $articles[$i]->ID); ?>
                                        </div>
                                    </div>
                                </div>
                                <img src="<?php the_field('acticle_image', $articles[$i]->ID) ?>" alt="" class="blog__image">
                            </a>
                        <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
    <?php
    endif;
    ?>
</main>


<?php get_footer();
