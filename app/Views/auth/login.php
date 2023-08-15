<?= $this->extend('auth/template/index') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4"><?= lang('Auth.loginTitle') ?></h3>
                </div>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('login') ?>" method="post">
                        <?= csrf_field() ?>
<?php if ($config->validFields === ['email']) : ?>
                            <!-- email -->
                            <div class="form-floating mb-3">
                                <input name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="inputEmail" type="email" placeholder="<?= lang('Auth.email') ?>" />
                                <label for="inputEmail"><?= lang('Auth.email') ?></label>
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
<?php else : ?>
                            <!-- username -->
                            <div class="form-floating mb-3">
                                <input name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" id="inputEmail" type="text" placeholder="<?=lang('Auth.emailOrUsername')?>" />
                                <label for="inputEmail"><?=lang('Auth.emailOrUsername')?></label>
                                <div class="invalid-feedback">
                                    <?= session('errors.login') ?>
                                </div>
                            </div>
<?php endif ?>
                        <!-- password -->
                        <div class="form-floating mb-3">
                            <input name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="inputPassword" type="password" placeholder="<?=lang('Auth.password')?>" />
                            <label for="inputPassword"><?=lang('Auth.password')?></label>
                            <div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
                        </div>

<?php if ($config->allowRemembering): ?>
                        <!-- remember password -->
                        <div class="form-check mb-3">
                            <input name="remember" class="form-check-input" id="inputRememberPassword" type="checkbox" <?php if (old('remember')) : ?> checked <?php endif ?> />
                            <label cass="form-check-label" for="inputRememberPassword"><?=lang('Auth.rememberMe')?></label>
                        </div>
<?php endif ?>

                        <!-- forgot password and login -->
                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                        <?php if ($config->activeResetter): ?>
                            <a class="small" href="<?= url_to('forgot') ?>"><?=lang('Auth.forgotYourPassword')?></a>
                        <?php endif ?>
                            <button type="submit" class="btn btn-primary"><?=lang('Auth.loginAction')?></button>
                        </div>
                    </form>
                </div>

<?php if ($config->allowRegistration) : ?>
                <div class="card-footer text-center py-3">
                    <div class="small"><a href="<?= base_url('register') ?>"><?=lang('Auth.needAnAccount')?></a></div>
                </div>
<?php endif ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>