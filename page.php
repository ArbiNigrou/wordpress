<?php  get_header();   ?>  

<?php while (have_posts()) : the_post(); ?>

    <article class="topcontent">
        <header>
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><?php the_title();?></a></h2>
        </header>
        <footer>
            <p class="post-info"><?php the_author_posts_link(); ?> | <?php the_time() ?></p> 
        </footer>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('full'); ?>
        </a>
        <content>
            <p>
                <?php the_content('lire la suite...'); ?>
            </p>
        </content>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </header>
    </article>

<?php endwhile; ?>

<?php  get_sidebar();   ?>  
<?php  get_footer();   ?>  