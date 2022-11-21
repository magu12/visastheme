<?php /* Template Name: Blog Page */ ?>

<?php
get_header();
the_post();

$articles = get_posts(array(
    'numberposts' => -1,
    'orderby'     => 'date',
    'category_name'    => 'blog',
    'order'       => 'ASC',
    'post_type'   => 'post',
    'suppress_filters' => true
));

$last_article = end($articles);
array_pop($articles);
$articles = array_reverse($articles);
$last_article_cats = wp_get_post_categories($last_article->ID);
?>

<main class="blog-page">
    <section class="news wrap">
        <h1 class="title">
            News & Press
        </h1>
        <div class="news__content">
            <a href="<?php echo get_post_permalink($last_article->ID); ?>" class="news__last">
                <img src="<?php the_field('acticle_image', $last_article->ID); ?>" alt="">
                <h3 class="title">
                    <?php echo $last_article->post_title; ?>
                </h3>

                <div class="blog__tags">
                    <?php
                    $arrayLength = count($last_article_cats);

                    $i = 0;
                    while ($i < $arrayLength) {
                        if ($last_article_cats[$i] != 3) :
                            $color = get_field('category_color', 'category_' . $last_article_cats[$i]);
                            $hex = $color;
                            list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");
                    ?>
                            <div class="blog__tag" style="color: <?php echo $color; ?>; background: rgba(<?php echo "$r , $g , $b"; ?>,.35);">
                                <?php echo get_the_category_by_ID($last_article_cats[$i]); ?>
                            </div>
                    <?php
                        endif;
                        $i++;
                    }
                    ?>
                </div>
                <div class="blog__info">
                    <div class="blog__author">
                        <?php echo the_author_meta('user_nicename', $last_article->post_author); ?>
                    </div>
                    •
                    <div class="blog__date">
                        <?php echo get_the_date('dS M Y', $last_article->ID); ?>
                    </div>
                </div>
            </a>

            <?php
            $articles_recent = $articles;
            $arrayLength = count($articles_recent);

            $i = 0;
            $limit = 3;
            ?>
            <div class="news__recent">
                <div class="news__items">
                    <?php
                    while ($i < $limit && $i < $arrayLength) {
                    ?>
                        <a href="<?php echo get_post_permalink($articles_recent[$i]->ID); ?>" class="news__item">
                            <img src="<?php the_field('acticle_image', $articles_recent[$i]->ID) ?>" alt="">
                            <div class="news__info">
                                <h3 class="title">
                                    <?php echo $articles_recent[$i]->post_title; ?>
                                </h3>

                                <div class="blog__tags">
                                    <?php

                                    $last_article_cats = wp_get_post_categories($articles_recent[$i]->ID);
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
                                        <?php echo the_author_meta('user_nicename', $articles_recent[$i]->post_author); ?>
                                    </div>
                                    •
                                    <div class="blog__date">
                                        <?php echo get_the_date('dS M Y', $articles_recent[$i]->ID); ?>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>


    <?php if (count($articles) > 3) :
        $articles = array_reverse($articles);
        array_splice($articles, count($articles) - 3, 3);
        $articles = array_reverse($articles);
        $arrayLength = count($articles);
        $i = 0;
    ?>
        <section class="blog">
            <div class="wrap">
                <h2 class="title">
                    Rest Articles
                </h2>
                <div class="blog__items">
                    <?php
                    while ($i < $arrayLength) {
                    ?>
                        <a href="<?php echo get_post_permalink($articles[$i]->ID); ?>" class="blog__item">
                            <img src="<?php the_field('acticle_image', $articles[$i]->ID) ?>" alt="" class="blog__image">
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
                        </a>
                    <?php
                        $i++;
                    }
                    ?>
                </div>
                <!--  <ul class="pagination">
                    <li class="current">
                        <a href="/">
                            1
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            2
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            3
                        </a>
                    </li>
                    <li>
                        ...
                    </li>

                    <li>
                        <a href="/">
                            4
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            5
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            6
                        </a>
                    </li>
                </ul> -->
            </div>
        </section>
    <?php
    endif;
    ?>
</main>

<?php get_footer();
