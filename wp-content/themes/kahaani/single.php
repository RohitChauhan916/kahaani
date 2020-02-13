<?php 
get_header();

while(have_posts())
{
    the_post();

?>
         <section class="breadcrumb">
        <div class="container">
            <div class="supplier_title">
                <h1 class="sup_title" data-in-effect="flipInY" data-out-effect="flipOutY"><?php the_title();?></h1>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="supplier_country">
                        <p class="blog_name"><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?></p>
                        <!--<h4>Effort means the end of failure</h4>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="blog blog_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="col-md-6 col-sm-6">
                        <article class="blog_section wow slideInLeft" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;">
                            <div class="blog_image">
                                <?php the_post_thumbnail();?>
                            </div>
                            <div class="news_desc">
                                <div class="news_info">
                                    <ul>
                                        <li>
                                            <div class="info_image">
                                                <i class="ion-ios-calendar-outline"></i>
                                            </div>
                                            <div class="info_desc">
                                                <p><?php the_time('F j.Y');?></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="info_image">
                                                <i class="ion-ios-person-outline"></i>
                                            </div>
                                            <div class="info_desc">
                                                <p><?php the_field('story_teller'); ?></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                    </div>
                    <article class="blog_section wow slideInLeft" data-wow-duration="2s">

                        <div class="article_details">
                            <?php the_content();?>
                        </div>

                    </article>


                </div>

            </div>
        </div>
    </section>

    <!--  tagline area  -->
    <section class="search_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="search_info">
                        <h1 class="txt_search" data-in-effect="bounceInUp" data-out-effect="bounceOutDown">क्या है आपकी कहानी ज़िद्द की ? हमें बताएँ  &nbsp; <i class="ion-android-call"></i><a href="tel:8448983000">+91-8448983000</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
        <!-- Start Featured Categories area  -->
        <section class="featured_categories">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title_style">
                        <h1>More Stories</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php 
                    $relatedProperties = new WP_Query(array(
                        'posts_per_page' => 3,
                        'post_type' => 'post',
                        'orderby'   =>'rand',
                    ));
                    while($relatedProperties->have_posts()){
                        $relatedProperties->the_post()
                ?>
                    <div class="col-sm-4 col-xs-12 pb-30">
                        <figure class="single_category">
                            <div class="black_white">
                            <?php the_post_thumbnail();?>
                    </div>
                            <figcaption class="category_hover">
                                <div class="category_info">
                                    <a href="<?php the_permalink();?>">
                                        <h3><?php the_field('story_teller'); ?></h3>
                                        <div class="category_desc">
                                            <p><?php the_title();?></p>
                                        </div>
                                    </a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <br />
<?php
} 
get_footer();
?>