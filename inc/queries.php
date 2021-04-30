<?php

// CLASSES QUERY
function gym_classes_list($number = -1){?>
    <ul class="classes-list">
    <?php 
        $args = array(
            'post_type' => 'gym_classes',
            'posts_per_page' => $number
        );
        $classes = new WP_Query($args);
        while($classes ->have_posts()): $classes->the_post();
    ?>
    <li class="gym-class card">
        <?php the_post_thumbnail( 'mediumSize') ?>
        <div class="card-content">
            <a href="<?php the_permalink(); ?>">
                <h3><?php the_title(); ?></h3>
            </a>
            <?php
                $start_time = get_field('start_time');
                $end_time = get_field('end_time');
            ?>
            <p><?php echo the_field('class_days') . " - " . $start_time . " to " . $end_time ?></p>
        </div>
    </li>
    <?php endwhile; wp_reset_postdata(); ?>
    </ul>
<?php }

// INSTRUCTORS QUERY
function gym_instructors_list() { ?>
    <ul class="instructor-list">
            <?php 
                $args = array(
                    'post_type' => 'instructors',
                    'posts_per_page' => -1
                );
                $instructors = new WP_Query($args);

                while($instructors->have_posts()): $instructors->the_post(); ?>
                    <li class="instructor">
                        <?php the_post_thumbnail('mediumSize'); ?>
                        <div class="content text-center">
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>

                            <div class="specialty">
                                <?php 
                                    $specialty = get_field('specialty');

                                    foreach($specialty as $s): ?>
                                    <span class="tag"><?php echo $s; ?></span>
                                    <?php endforeach; ?>
                            </div>
                        </div>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
        </ul>

    <?php 
}

// TESTIMONIAL QUERY
function gym_testimonials_list() { ?>
    <ul class="testimonials-list">
        <?php 
            $args = array(
                'post_type' => 'testimonials', 
                'posts_per_page' => 10
            );
            $testimonials = new WP_Query($args);
            while($testimonials->have_posts()): $testimonials->the_post();
        ?>
        <li class="testimonial text-center">
            <blockquote>
                <?php the_content(); ?>
            </blockquote>

            <footer class="testimonial-footer">
                <?php the_post_thumbnail('thumbnail'); ?>
                <p><?php the_title(); ?></p>
            </footer>

        </li>
        <?php endwhile; wp_reset_postdata(); ?>
    </ul>
    <?php 
}