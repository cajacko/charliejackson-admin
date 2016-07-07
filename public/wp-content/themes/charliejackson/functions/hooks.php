<?php

function charliejackson_admin_init()
{
    charliejackson_plugins();
}

function charliejackson_init()
{
    charliejackson_create_project_post_type();
}

function charliejackson_admin_pre_get_posts($query)
{
    charliejackson_admin_query($query);
}
