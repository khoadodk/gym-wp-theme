<?php get_header('front') ?>
    <?php while(have_posts()): the_post( ); ?>
        <!-- HERO SECTION in function.php -->

        <!-- WELCOME SECTION-->
        <section class="welcome text-center section">
            <h2 class="text-primary"><?php the_field('welcome_heading'); ?></h2>
            <p><?php the_field('welcome_text'); ?></p>
        </section>

        <!-- AREAS SECTION-->
        <section class="section-areas">
            <ul class="areas-container">
                <li class="area">
                    <?php
                        $area1 = get_field('area_1');
                        $image = wp_get_attachment_image_src( $area1['area_image'], 'mediumSize')[0];
                    ?>
                    <img src="<?php echo $image ?>">
                    <p><?php echo $area1['area_name'] ?></p>
                </li>
                        <li class="area">
                    <?php
                        $area2 = get_field('area_2');
                        $image = wp_get_attachment_image_src( $area2['area_image'], 'mediumSize')[0];
                    ?>
                    <img src="<?php echo $image ?>">
                    <p><?php echo $area2['area_name'] ?></p>
                </li>
                        <li class="area">
                    <?php
                        $area3 = get_field('area_3');
                        $image = wp_get_attachment_image_src( $area3['area_image'], 'mediumSize')[0];
                    ?>
                    <img src="<?php echo $image ?>">
                    <p><?php echo $area3['area_name'] ?></p>
                </li>
                        <li class="area">
                    <?php
                        $area4 = get_field('area_4');
                        $image = wp_get_attachment_image_src( $area4['area_image'], 'mediumSize')[0];
                    ?>
                    <img src="<?php echo $image ?>">
                    <p><?php echo $area4['area_name'] ?></p>
                </li>
            </ul>
        </section>

        <!-- CLASS LIST SECTION -->
        <section class="classes-homepage">
            <div class="container section">
                <h2 class="text-primary text-center">
                    Our Classes
                </h2>
                <?php gym_classes_list(4); ?>

                <div class="button-container">
                    <a class="button" href="<?php echo get_permalink( get_page_by_title( 'Classes' )) ?>">
                        View All Classes
                    </a>
                </div>
            </div>
        </section>

        <!-- INSTRUCTORS SECTION -->
        <section class="instructors">
            <div class="container section">
                <h2 class="text-center">Our Instructors</h2>
                <p class="text-center">Professional instructors will help you achieve your body goals</p>

                <?php gym_instructors_list(); ?>
            </div>
        </section>

        <!-- TESTIMONIALS SECTION -->
        <section class="testimonials">
            <h2 class="text-center">Testimonials</h2>
            <div class="container">
                <?php gym_testimonials_list(); ?>
            </div>
        </section>


    <?php endwhile; ?>
<?php get_footer(); ?>