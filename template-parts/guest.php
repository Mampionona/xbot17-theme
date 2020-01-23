<?php
// Alefa mankany @page Mon compte raha efa connecté
if (is_user_logged_in()) {
    $page_id = get_translated_post_id(13);
    $mon_compte_url = get_the_permalink($page_id);
    wp_redirect($mon_compte_url);
    exit;
}
