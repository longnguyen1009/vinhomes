<?php
    global $wp;
    $current_link = home_url( $wp->request );
?>

<div id="nav_menu-94" class="widget clearfix widget_nav_menu">
    <h3 class="widgettitle"><?php the_title(); ?></h3>
    <div class="menu-vinhomes-symphony-container">

        <ul id="menu-vinhomes-symphony" class="menu">

            <?php 
                    
                    if(get_post_type() == 'du_an'){
                    $id = get_the_ID();
                    $terms = get_the_terms($id, 'phan_khu');
                    sort($terms);
                    ?>
            <li id="menu-item-31293" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-31293 current-menu-item">
                <a href="<?php the_permalink();  ?>" aria-current="page">Tổng quan dự
                    án</a>
            </li>
            <?php
                    foreach($terms as $term){
                        if($term->parent == 0){ 
                            $args = array(
                                'post_type' => 'toa_nha',
                                'tax_query' => array(
                                array(
                                'taxonomy' => 'phan_khu',
                                'field' => 'term_id',
                                'terms' => $term->term_id,
                                'include_children' => false
                                    )
                                )
                            );
                            $query = new WP_Query( $args );
                            if( $query ->have_posts()){
                                while($query ->have_posts()){
                                    $query -> the_post();
                                ?>
            <li id="menu-item-31394"
                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has menu-item-31394"><a
                    href="<?php the_permalink(); ?>">
                    <?php the_title();?></a>
                <?php
                                    $terms_children = get_term_children($term->term_id, 'phan_khu');         
                                     if(!empty( $terms_children ) && !is_wp_error( $terms_children ) ){ ?>
                <ul class="sub-menu">
                    <?php
                                        foreach($terms_children as $terms_child){
                                            $args = array(
                                                'post_type' => 'toa_nha',
                                                'tax_query' => array(
                                                array(
                                                'taxonomy' => 'phan_khu',
                                                'field' => 'term_id',
                                                'terms' =>$terms_child,
                                                'include_children' => false
                                                    )
                                                )
                                            );
                                            $query1 = new WP_Query( $args );
                                            if( $query1 ->have_posts()){
                                                while($query1 ->have_posts()){
                                                    $query1 -> the_post();
                                                    ?>
                    <li id="menu-item-36450"
                        class="menu-item menu-item-type-post_type menu-item-object-post menu-item-36450"><a
                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php
                                                }
                                            }

                                        }
                                        ?>

                </ul>
                <?php    } ?>
            </li>
            <?php
                                    }
                                } 
                            ?>

            <?php
                        }
                    }
                    wp_reset_query();
                } else {
                    $du_an_terms = get_the_terms($id, 'phan_khu');
                    $args = array(
                        'post_type' => 'du_an',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'phan_khu',
                            'field' => 'term_id',
                            'terms' => $du_an_terms[0]->term_id,
                             )
                          )
                        );
                        $query = new WP_Query( $args );
                        if($query->have_posts()){
                            while($query->have_posts()){
                                $query->the_post();
                                $du_an_id = get_the_ID();
                                $terms = get_the_terms($du_an_id, 'phan_khu');
                    sort($terms); ?>
                    <li id="menu-item-31293" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-31293">
                <a href="<?php the_permalink();  ?>" aria-current="page">Tổng quan dự
                    án</a>
            </li>
                    <?php
                    foreach($terms as $term){
                        if($term->parent == 0){ 
                            $args = array(
                                'post_type' => 'toa_nha',
                                'tax_query' => array(
                                array(
                                'taxonomy' => 'phan_khu',
                                'field' => 'term_id',
                                'terms' => $term->term_id,
                                'include_children' => false
                                    )
                                )
                            );
                            $query2 = new WP_Query( $args );
                            if( $query2 ->have_posts()){
                                while($query2 ->have_posts()){
                                    $query2 -> the_post();
                                ?>
            <li id="menu-item-31394" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-has menu-item-31394
                <?php if(str_contains($current_link, $post->post_name)){ ?> current-menu-item <?php } ?>"><a
                    href="<?php the_permalink(); ?>">
                    <?php the_title(); ?></a>
                <?php
                                    $terms_children = get_term_children($term->term_id, 'phan_khu');         
                                     if(!empty( $terms_children ) && !is_wp_error( $terms_children ) ){ ?>
                <ul class="sub-menu">
                    <?php
                                        foreach($terms_children as $terms_child){
                                            $args = array(
                                                'post_type' => 'toa_nha',
                                                'tax_query' => array(
                                                array(
                                                'taxonomy' => 'phan_khu',
                                                'field' => 'term_id',
                                                'terms' =>$terms_child,
                                                'include_children' => false
                                                    )
                                                )
                                            );
                                            $query3 = new WP_Query( $args );
                                            if( $query3 ->have_posts()){
                                                while($query3 ->have_posts()){
                                                    $query3 -> the_post();
                                                    ?>
                    <li id="menu-item-36450" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-36450
                        <?php if(str_contains($current_link, $post->post_name)){ ?> current-menu-item <?php } ?>"><a
                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    <?php
                                                }
                                            }

                                        }
                                        ?>

                </ul>
                <?php    } ?>
            </li>
            <?php
                                    }
                                } 
                            ?>

            <?php
                        }
                    }
                    wp_reset_query();
                            }
                        }
                }
            ?>
        </ul>
    </div>
</div>