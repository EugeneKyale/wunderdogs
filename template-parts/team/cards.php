<?php
    // filter
    get_template_part('template-parts/team/filter', null);
    $args = array(
        'post_type'              => 'team',
        'posts_per_page'         => '-1',
        'order'                  => 'ASC',
    );
    $the_query = new WP_Query($args); //Check the WP_Query docs to see how you can limit which posts to display
?>
<section class="team">
    <div class="team__card" id="isotope-list">
    <?php
        if ($the_query->have_posts()) :
    ?>
        
            <?php while ($the_query->have_posts()) : $the_query->the_post();
                $termsArray = get_the_terms($post->ID, "team-department");  //Get the terms for this particular item
                $termsString = ""; //initialize the string that will contain the terms
                foreach ($termsArray as $term) { // for each term
                $termsString .= $term->slug.' '; //create a string that has all the slugs
                }
            ?> 
            <div class="team__card-wrapper <?php echo $termsString; ?> item"> 
                <?php
                    // 'item' is used as an identifier (see Setp 5, line 6)
                ?>
                    <div class="team__card-content">
                        <?php echo the_post_thumbnail('full'); ?>
                        <h6>
                            <?php the_title(); ?>
                        </h6>
                        <p>
                            <?php the_field('role'); ?>
                        </p>
                        <p>
                            <?php the_field('bio'); ?>
                        </p>
                        <a href="#"> Show More </a>
                    </div>
            </div> <!-- end item -->
    <?php
        endwhile;
    ?>
        </div>
<?php endif; ?>
</section>