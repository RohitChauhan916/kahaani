<?php 
get_header();

?>
    <section class="featured_categories" id="blog_section" style="margin-top: 5%;">
        <div class="container">
            <div class="row">
            <?php 
            while(have_posts()){
                the_post(); ?>
                <div class="col-md-4 col-sm-6">
                    <article class="blog-post t" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="post-img">
                            <a href="<?php the_permalink();?>">
                            <div class="black_white">
                                <?php the_post_thumbnail();?>
                                </div>
                            </a>
                        </div>
                        <div class="blog_content">
                            <a href="<?php the_permalink();?>" class="tittle-post"><?php the_title();?> 

                            </a>
                            <h4>How I embraced failure, learned from it and success came along.</h4>
                            <p><?php the_excerpt();?></p>
                            <a href="<?php the_permalink();?>" class="read_more">READMORE</a>
                        </div>
                    </article>			
                </div>
            <?php }?>
            </div>
        </div>
    </section>
    <div class="paginatoin-area text-center">
                                <ul class="pagination-box">
                                <?php echo paginate_links(); ?>
                                </ul>
                            </div>
    <section class="featured_categories">
        <div class="container">
        </div>
    </section>
<?php 
get_footer();
?>