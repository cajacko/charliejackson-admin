<?php

function charliejackson_create_project_post_type()
{
    register_post_type(
        'project',
        array(
            'labels' => array(
                'name' => __('Projects'),
                'singular_name' => __('Project')
            ),
            'public' => true,
            'has_archive' => true,
            'taxonomies' => array('category', 'post_tag'),
            'hierarchical' => true,
        )
    );
}
