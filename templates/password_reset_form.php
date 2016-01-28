<div id="password-reset-form" class="widecolumn">
    <?php //if ( $attributes['show_title'] ) : ?>
        <h2><?php _e( '비밀번호 설정', 'personalize-login' ); ?></h2>
    <?php //endif; ?>

    <form name="resetpassform" id="resetpassform" action="<?php echo site_url( 'wp-login.php?action=resetpass' ); ?>" method="post" autocomplete="off">
        <input type="hidden" id="user_login" name="rp_login" value="<?php echo esc_attr( $attributes['login'] ); ?>" autocomplete="off" />
        <input type="hidden" name="rp_key" value="<?php echo esc_attr( $attributes['key'] ); ?>" />

        <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
            <?php foreach ( $attributes['errors'] as $error ) : ?>
                <p class="zmes-login-error">
                    <?php echo $error; ?>
                </p>
            <?php endforeach; ?>
        <?php endif; ?>

        <p>
            <label for="pass1"><?php _e( '새 비밀번호', 'personalize-login' ) ?></label>
            <input type="password" name="pass1" id="pass1" class="input" size="20" value="" autocomplete="off" minlength="8" />
        </p>
        <p>
            <label for="pass2"><?php _e( '비밀번호 확인', 'personalize-login' ) ?></label>
            <input type="password" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="off" minlength="8" />
        </p>

        <p class="description"><?php echo wp_get_password_hint(); ?></p>

        <p class="resetpass-submit">
            <input type="submit" name="submit" id="resetpass-button"
                   class="button" value="<?php _e( '비밀번호 설정', 'personalize-login' ); ?>" />
        </p>
    </form>
</div>
