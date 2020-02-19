<?php
/*
    Template Name: Add Post From Frontend
*/

get_header();
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
<div class="col-sm-12">
<h3>Add New Post</h3>
<form class="form-horizontal" name="form" method="post" action="http://localhost/mail.php" enctype="multipart/form-data">
<input type="hidden" name="ispost" value="1" />
<input type="hidden" name="userid" value="" />
<div class="row">
    <div class="col-lg-6">
    <label class="control-label">Name</label>
    <input type="text" class="form-control" name="name" />
    </div>
    <div class="col-lg-6">
    <label class="control-label">Phone Number</label>
    <input type="text" class="form-control" name="phn" />
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
    <label class="control-label">City</label>
    <input type="text" class="form-control" name="city" />
    </div>
    <div class="col-lg-6">
    <label class="control-label">State</label>
    <input type="text" class="form-control" name="state" />
    </div>
</div>
<div class="row">
<div class="col-lg-6">
<label class="control-label">Email</label>
<input type="email" class="form-control" name="email" />
</div>
<div class="col-md-12 col-lg-6">
<label class="control-label">Title</label>
<input type="text" class="form-control" name="title" />
</div>
</div>
<div class="row">
<div class="col-md-12">
<label class="control-label">Sample Content</label>
<textarea class="form-control" rows="8" name="sample_content"></textarea>
</div>
</div>
<!--<div class="col-md-12">
<label class="control-label">Choose Category</label>
<select name="category" class="form-control">
<?php $catList = get_categories();
foreach($catList as $listval)
{
echo '<option value="'.$listval->term_id.'">'.$listval->name.'</option>';
}


?>
</select>
</div>-->
<div class="row">
<div class="col-md-12">
<label class="control-label">Upload Post Image</label>
<input type="file" name="sample_image" class="form-control" />
</div>
</div>
<div class="row">
<div class="col-md-12">
<input type="submit" class="post_btn btn btn-primary" value="SUBMIT" name="submitpost" />
</div>
</div>
</form>
<div class="clearfix"></div>
</div>
<?php
if(is_user_logged_in())
{
if(isset($_POST['ispost']))
{
global $current_user;
get_currentuserinfo();

$user_login = $current_user->user_login;
$user_email = $current_user->user_email;
$user_firstname = $current_user->user_firstname;
$user_lastname = $current_user->user_lastname;
$user_id = $current_user->ID;

$post_title = $_POST['title'];
$sample_image = $_FILES['sample_image']['name'];
$post_content = $_POST['sample_content'];
$category = $_POST['category'];

$new_post = array(
'post_title' => $post_title,
'post_content' => $post_content,
'post_status' => 'pending',
'post_name' => 'pending',
'post_type' => $post_type
);

$pid = wp_insert_post($new_post);
add_post_meta($pid, 'meta_key', true);

if (!function_exists('wp_generate_attachment_metadata'))
{
require_once(ABSPATH . "wp-admin" . '/includes/image.php');
require_once(ABSPATH . "wp-admin" . '/includes/file.php');
require_once(ABSPATH . "wp-admin" . '/includes/media.php');
}
if ($_FILES)
{
foreach ($_FILES as $file => $array)
{
if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK)
{
return "upload error : " . $_FILES[$file]['error'];
}
$attach_id = media_handle_upload( $file, $pid );
}
}
if ($attach_id > 0)
{
//and if you want to set that image as Post then use:
update_post_meta($new_post, '_thumbnail_id', $attach_id);
set_post_thumbnail( $pid, $attach_id );
}

$my_post1 = get_post($attach_id);
$my_post2 = get_post($pid);
$my_post = array_merge($my_post1, $my_post2);

}
}
else
{
echo "<h2 style='text-align:center;'>User must be login for add post!</h2>";
}
?>
</div>
</div>
</div>
<?php
    get_footer();
?>