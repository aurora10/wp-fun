<?php
/**
 * The template for displaying Author info
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
 
if ( (bool) get_the_author_meta( 'description' ) ) : ?>
<div class="author-bio">
    <h2 class="author-title">
        <span class="author-heading">
            <?php
            printf(
                /* translators: %s: post author */
                __( 'Published by %s', 'twentynineteen' ),
                esc_html( get_the_author() )
            );
            echo get_avatar(get_the_author_meta( 'ID'), 26 );
            ?>
        </span>
    </h2>
    <p class="author-description">
        <?php the_author_meta( 'description' ); ?>
        
    </p><!-- .author-description -->
</div><!-- .author-bio -->
<?php endif; ?>