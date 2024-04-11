<?php get_header(); ?>

<body>
    <main id="primary" class="site-main">
        <section>
            <div class="workshops-banner">
                <h2>
                    Workshops
                </h2>
            </div>
            <div class="container">
                
                    <?php
                    $args = array(
                        'post_type' => 'workshop',
                        'posts_per_page' => 3
                    );
                    $the_query = new WP_Query($args); ?>
    
                    <?php if ($the_query->have_posts()) : ?>
    
                        <?php while ($the_query->have_posts()) : $the_query->the_post();
                            $description = get_field('workshop_info') ?>
                            <div class="workshops-text">
                                <h3><?php the_title(); ?></h3>
                                <p><?php echo get_field('workshop_info') ?></p>
                                <p><strong>Dates and Times: </strong><?php echo get_field('dates_and_times') ?></p>
                                <p><strong>Location: </strong><?php echo get_field('location') ?></p>
                                <p><strong>Fees: </strong><?php echo get_field('fee') ?></p>
                                <p><strong>Facilitators: </strong><?php echo get_field('facilitators') ?></p>
                            </div>
                        <?php endwhile; ?>
    
                        <?php wp_reset_postdata(); ?>
    
                    <?php endif; ?>
            </div>
        </section>

    </main>
</body>

<?php get_footer() ?>