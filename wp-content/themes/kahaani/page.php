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
                                <li><a href="index.html">Home</a>
                                    <i class="ion-ios-arrow-forward"></i>
                                </li>
                                <li><a href="#"></a></li>
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