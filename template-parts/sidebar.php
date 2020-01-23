<?php $redirect_page_id = 13; ?>
<?php $logout_url = wp_logout_url( apply_filters('translated_post_link', $redirect_page_id) ); ?>

<div class="list-group">
    <a class="list-group-item" href="<?= apply_filters('translated_post_link', 58); ?>"><?= __('S\'inscrire avec IronFx', 'xbot17'); ?></a>
    <a class="list-group-item logout-url" href="<?= $logout_url; ?>"><?= __('Se déconnecter', 'xbot17'); ?></a>
</div>
