Your email is <?= $identity?>
Click on the link below to reset your password
<?= base_url('auth/reset_password/' . $forgottenPasswordCode, lang('IonAuth.emailForgotPassword_link')) ?>
