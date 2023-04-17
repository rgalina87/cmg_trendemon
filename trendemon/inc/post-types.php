<?php

if ( ! function_exists( 'td_register_post_types' ) ) {
    /**
     * Register Custom Post Types
     */
    function td_register_post_types() {

        $post_types = [

            'lp' => [
                'label'         => __( 'Landing Page', 'trendemon' ),
                'labels'        => [
                    'name'          => __( 'Landing Pages', 'trendemon' ),
                    'singular_name' => __( 'Landing Page', 'trendemon' ),
                ],
                'public'        => true,
                'menu_position' => 42,
                'has_archive'   => false,
                'menu_icon'     => 'dashicons-megaphone',
                'rewrite'       => [ 'slug' => __( 'lp', 'trendemon' ), 'with_front' => false ],
                'supports'      => [ 'title', 'editor', 'thumbnail' ],
            ],

            'case_studies' => [
                'label'         => __( 'Case Study Page', 'trendemon' ),
                'labels'        => [
                    'name'          => __( 'Case Study Pages', 'trendemon' ),
                    'singular_name' => __( 'Case Study Page', 'trendemon' ),
                ],
                'public'        => true,
                'menu_position' => 42,
                'has_archive'   => false,
                'menu_icon'     => 'dashicons-megaphone',
                'rewrite'       => [ 'slug' => __( 'case_study', 'trendemon' ), 'with_front' => false ],
                'supports'      => [ 'title', 'editor', 'thumbnail' ],
            ],

            'playbooks' => [
                'label'         => __( 'Playbook Page', 'trendemon' ),
                'labels'        => [
                    'name'          => __( 'Playbook Pages', 'trendemon' ),
                    'singular_name' => __( 'Playbook Page', 'trendemon' ),
                ],
                'public'        => true,
                'menu_position' => 43,
                'has_archive'   => false,
                'menu_icon'     => 'dashicons-megaphone',
                'rewrite'       => [ 'slug' => __( 'playbook', 'trendemon' ), 'with_front' => false ],
                'supports'      => [ 'title', 'editor', 'thumbnail' ],
            ],

        ];

        foreach ( $post_types as $post_type => $args ) {
            register_post_type( $post_type, $args );
        }
    }

    add_action( 'init', 'td_register_post_types' );
}

?>
