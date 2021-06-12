<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <main class="new">
        <h2 class="new__title"><?php the_title(); ?></h2>
        <p class="new__excerpt"><?php the_field('excerpt'); ?></p>

        <div class="new__content">
            <div class="new__header">
                <img width="600" height="auto"
                     class="capsule__image"
                     src="<?= get_field('news-image')['sizes']['medium'] ?>"
                     alt="<?= get_field('news-image')['alt'] ?>"
                     srcset="<?= get_field('news-image')['sizes']['thumbnail']; ?> 150,
                            <?= get_field('news-image')['sizes']['medium']; ?> 300w,
                            <?= get_field('news-image')['sizes']['large']; ?> 1000w">
            </div>
            <div class="new__wysiwyg">
                <p class="date"><?= strftime('%A, %e %B %G', strtotime(get_the_date())); ?></p>
                <?php the_content() ?>
            </div>
        </div>

        <div class="new__comments comments">
            <div class="comments__form">
                <?php comments_template(); ?>
            </div>
        </div>

        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "NewsArticle",
                "mainEntityOfPage": {
                    "@type": "WebPage",
                    "@id": "<?= get_permalink(); ?>>"
                },
                "headline": "<?= get_the_title(); ?>",
                "datePublished": "<?= get_the_date(); ?>",
                "dateModified": "<?= get_the_modified_date(); ?>",
                "description": "<?= wp_strip_all_tags(get_the_content()); ?>",
                "image": [
                        "<?= get_field('news-image')['src'] ?>"
                ],
                "author": {
                    "@type": "Person",
                    "name": [
                        "Sarah Joiret",
                        "Léo Cotteleer",
                        "EasySpacy"
                    ]
                },
                "publisher": {
                    "@type": "Organization",
                    "name": "EasySpacy",
                    "url": "<?php site_url(); ?>",
                    "logo": {
                      "@type": "ImageObject",
                      "url": "<?= get_template_directory_uri() . '/resources/favicon/easyspacy-300.png' ;?>"
                    }
                }
            }
        </script>
    </main>
<?php endwhile; endif; ?>
<?php get_footer(); ?>