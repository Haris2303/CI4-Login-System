<?= $this->extend('auth/template/index') ?>
<?= $this->section('content') ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header">
                    <h3 class="text-center font-weight-light my-4"><?=lang('Auth.register')?></h3>
                </div>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <!-- username -->
                        <div class="row mb-3">
                            <div class="col-md">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input name="username" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" id="inputFirstName" type="text" placeholder="<?=lang('Auth.username')?>" value="<?= old('username') ?>"/>
                                    <label for="inputFirstName"><?=lang('Auth.username')?></label>
                                </div>
                            </div>
                        </div>
                        <!-- email -->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="inputEmail" type="email" placeholder="<?=lang('Auth.email')?>" value="<?= old('email') ?>" />
                            <label for="inputEmail"><?=lang('Auth.email')?></label>
                            <small id="emailHelp" class="form-text text-muted"><?=lang('Auth.weNeverShare')?></small>
                        </div>
                        <div class="row mb-3">
                            <!-- password -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" id="inputPassword" type="password" placeholder="<?=lang('Auth.password')?>" autocomplete="off" />
                                    <label for="inputPassword"><?=lang('Auth.password')?></label>
                                </div>
                            </div>
                            <!-- password confirmation -->
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" id="inputPasswordConfirm" type="password" placeholder="<?=lang('Auth.repeatPassword')?>" autocomplete="off" />
                                    <label for="inputPasswordConfirm"><?=lang('Auth.repeatPassword')?></label>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 mb-0">
                            <div class="d-grid"><button type="submit" class="btn btn-primary btn-block"><?=lang('Auth.register')?></button></div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center py-3">
                    <div class="small"><?=lang('Auth.alreadyRegistered')?> <a href="<?= base_url('login') ?>"><?=lang('Auth.signIn')?></a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>