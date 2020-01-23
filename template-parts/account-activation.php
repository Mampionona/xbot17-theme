<?php if ((bool) filter_input( INPUT_GET, 'activate_account' )): ?>
    <div class="account-activated alert alert-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><?= __('Félicitations! Votre compte a été activé avec succès.', 'xbot17'); ?></p>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
