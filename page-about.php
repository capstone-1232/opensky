<?php get_header(); ?>

<body>
    <main id="primary" class="site-main">
        <div class="container">
            <section class="about-section">
                <div class="about-flex">
                    <div class="img">
                        <img class="rounded" src="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/wp-content/uploads/2024/04/cole-keister-xMMh-VFGL9M-unsplash-scaled.jpg" alt="Tranquil sky">
                    </div>
                    <div class="text">
                        <h2>About Open Sky Mental Health</h2>
                        <p>Open Sky Mental Health is a a place where you can find stillness and a gentle approach to sorting through the challenges of life.</p>
                        <p>Founded in 2021 in my hometown of Leduc, Open Sky Mental Health offers a range of compassion-focused mental health supports. </p>
                        <p>Open Sky Mental Health, alongside Connelly Counselling, provides skillful support and interventions to people dealing with issues including anxiety, depression, trauma, emotion regulation, bereavement and grief, stress, relationship challenges and conflict. </p>
                        <p>We strive to offer the right intervention at the right time when life is difficult. We work with you to achieve your goals and relive suffering.</p>
                        <p>We are able to provide family support through our group practice. If you and a family member both need individual counselling, we can often arrange for you to be seen at the same time.</p>
                        <button class="button" onclick="window.location.href='mailto:leanne@openskymentalhealth.com'">Get in Touch</button>
                    </div>
                </div>
            </section>
    
            <section class="biography-section">
                <div class="about-flex">
                    <div class="text">
                        <h2>About Me</h2>
                        <?php
                            $args = array(
                                'post_type' => 'biography',
                                'posts_per_page' => 3
                            );
                            $the_query = new WP_Query($args); ?>
            
                            <?php if ($the_query->have_posts()) : ?>
            
                                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                    <p><?php echo get_field('introductory_information') ?></p>
                                    <p><?php echo get_field('biography')?></p>
                                <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>
                    <div class="img">
                        <img class="rounded" src="https://naitsa-a.web.dmitcapstone.ca/open-sky-mental-health/wp-content/uploads/2024/04/RAE_7839.jpg" alt="Portrait of Leanne Floden">
                    </div>
                </div>
            </section>
        </div>

    </main>
</body>

<?php get_footer() ?>