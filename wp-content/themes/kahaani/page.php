<?php 
get_header();

while(have_posts()){
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
                        <div class="country">
                            <ul>
                               <li><?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Breadcrumb area  -->
    <section class="about_info">
        <div class="container">
            <div class="row">
            <?php the_content();?>
            </div>
        </div>
</section>
<?php }
get_footer();
?>