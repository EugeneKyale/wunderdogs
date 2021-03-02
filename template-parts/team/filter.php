<section class="team__filter-container">
    <section id="filters" class="team__filter">
        <a href="#" data-filter="*" class="selected">
            <p> All </p>
        </a>
        <?php
            $terms = get_terms("team-department"); // get all categories, but you can use any taxonomy
            $count = count($terms); //How many are they?
                if ($count > 0) {  //If there are more than 0 terms
                    foreach ($terms as $term) {  //for each term:
                        echo "<a href='#' data-filter='.".$term->slug."'><h6>" . $term->name . "</h6></a>\n";
                        //create a list item with the current term slug for sorting, and name for label
                    }
                }
        ?>
    </section>
</section>