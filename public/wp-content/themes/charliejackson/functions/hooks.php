<?php

function charliejackson_admin_init()
{
    charliejackson_plugins();
}

function charliejackson_admin_pre_get_posts($query)
{
    charliejackson_admin_query($query);
}
