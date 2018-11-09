        <div class="media md-line">
            <div class="media-body">
                <h5 class="mt-0 bold"><a href="<?php the_permalink(); ?>" class="text-body"><?php the_title(); ?></a></h5>
                <p class="date">Posted on <?php the_date(); ?></p>
                <div class="text-secondary roboto"><?php the_excerpt(); ?></div>
                <a href="<?php the_permalink(); ?>"><button class="btn btn-outline-secondary">Read post</button></a>
            </div>
        </div>
