<div id="password-lost-form" class="widecolumn">
    <?php //if ( $attributes['show_title'] ) : ?>
        <h2><?php _e( '비밀번호 분실?', 'personalize-login' ); ?></h2>
    <?php //endif; ?>

    <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
        <?php foreach ( $attributes['errors'] as $error ) : ?>
            <p class="zmes-login-error">
                <?php echo $error; ?>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>

    <p>
        <?php _e( "이메일을 입력하시면 비밀번호 설정 링크를 보내드립니다.", 'personalize_login' ); ?>
    </p>

    <form id="lostpasswordform" action="<?php echo wp_lostpassword_url(); ?>" method="post">
        <p class="form-row">
            <label for="email"><?php _e( '이메일', 'personalize-login' ); ?></label>
            <input type="text" name="user_login" id="user_login">
        </p>

        <p class="lostpassword-submit">
            <input type="submit" name="submit" class="lostpassword-button"
                   value="<?php _e( '비밀번호 변경', 'personalize-login' ); ?>"/>
        </p>
    </form>
</div>
