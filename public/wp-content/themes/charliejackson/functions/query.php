<?php

function charliejackson_admin_query($query)
{
    if (!is_admin()) {
        $query->set('post_type', 'any');
    }
}
