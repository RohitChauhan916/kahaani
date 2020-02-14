<?php 
get_header();

?>
<div class="row">
<div class="container">
<form class="navbar-form">
<div class="form-group">
<select name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Month' ) ); ?></option> 
  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</div>
</select>
</form>
</div>
</div>
    <section class="featured_categories" id="blog_section">
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
                            <a href="<?php the_permalink();?>" class="tittle-post"><?php the_field('story_teller'); ?> 

                            </a>
                            <h4><?php the_title(); ?></h4>
                            <p><?php echo wp_trim_words(get_the_content(), 30) ?></p>
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