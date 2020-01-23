<?php
if (!is_user_logged_in()) {
    $redirect_uri = apply_filters('translated_post_link', 13);
    wp_redirect($redirect_uri);
    exit;
}
