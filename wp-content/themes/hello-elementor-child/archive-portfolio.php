<?php

$loop = new WP_Query( array( 'post_type' => 'portfolio' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); 
        $key_name = get_post_custom_values($key = 'portfolio_custom_link');?>
            <div class="pindex">
                <?php if ( has_post_thumbnail() ) { ?>
                    <div class="pimage">
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    </div>
                <?php } ?>
                <a href="<?php echo $key_name[0]; ?>"><?php the_title(); ?></a>
            </div>
<?php endwhile; endif; ?>