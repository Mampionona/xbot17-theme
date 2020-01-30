<?php
    $redirect_page_id = 13;
    $mon_compte_url = apply_filters('translated_post_link', $redirect_page_id);
    $logout_url = wp_logout_url( $mon_compte_url );
?>

<div class="side-nav">
    <div class="list-group">
        <a class="list-group-item" href="<?= $mon_compte_url; ?>"><?= __('Tableau de bord', 'xbot17'); ?></a>
        <a class="list-group-item" href="<?= apply_filters('translated_post_link', 58); ?>"><?= __('S\'inscrire avec IronFx', 'xbot17'); ?></a>
        <a class="list-group-item" href="<?= apply_filters('translated_post_link', 137); ?>"><?= __('Modifier mon profil', 'xbot17'); ?></a>
        <a class="list-group-item logout-url" href="<?= $logout_url; ?>"><?= __('Se déconnecter', 'xbot17'); ?></a>
    </div>
</div>
