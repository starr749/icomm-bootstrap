
<?php 

/**
* LATEST-STORIES.PHP
*
* Description: Called in category.php line 89
*                        page-home.php line 129
* 
*              - HTML code to display the latest stories.
*
* 
*
* @author
*
*
*
*
**/


  $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' );
  $url = $thumb[0];
  //$url = get_template_directory_uri().'/includes/timthumb.php?src='.$thumb[0].'&h=150&w=270&zc=1';

  //get author link
  $author_id = get_the_author_meta('ID');
  $author_name = get_the_author();
  $author_link = get_author_posts_url($author_id);
?>
  <div class="row-fluid">

    <div class="span4">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <img class="pull-left" src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
      </a>
    </div>
    <div class="span8">
      <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
        <h3><?php the_title(); ?></h3>
      </a>
      <div class="navbar author no-margin">
        <div class="navbar-inner no-margin">
          <ul class="nav">
            <li class="rightborder-dark left"><a href="<?php echo $author_link ?>"><?php the_author(); ?></a></li>
            <li><p>
              <?php 
              if (get_the_date() != "") {
                $my_date = get_the_date();
                echo "posted ".$my_date;  
              }
              ?>
            </p></li>
          </ul>
        </div>
      </div>
      <p class="lead">
        <?php the_excerpt(); ?>
      </p>
    </div>
  </div>
<hr>