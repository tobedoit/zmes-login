<div id="register-form" class="widecolumn">
    <?php //if ( $attributes['show_title'] ) : ?>
        <h2><?php _e( '회원가입', 'personalize-login' ); ?></h2>
    <?php //endif; ?>

    <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
        <?php foreach ( $attributes['errors'] as $error ) : ?>
            <p class="zmes-login-error">
                <?php echo $error; ?>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>


    <form id="signupform" action="<?php echo wp_registration_url(); ?>" method="post">
        <p class="form-row">
            <label for="email"><?php _e( '이메일', 'personalize-login' ); ?> <strong>*</strong></label>
            <input type="text" name="email" id="email">
        </p>

        <p class="form-row">
            <label for="first_name"><?php _e( '이름', 'personalize-login' ); ?></label>
            <input type="text" name="first_name" id="first-name">
        </p>

        <!-- <p class="form-row">
            <label for="last_name"><?php // _e( '성', 'personalize-login' ); ?></label>
            <input type="text" name="last_name" id="last-name">
        </p> -->

        <p class="form-row">
            <?php _e( 'Note: 비밀번호를 설정 링크를 이메일로 보내드립니다.', 'personalize-login' ); ?>
        </p>

        <p class="signup-submit">
            <input type="submit" name="submit" class="register-button"
                   value="<?php _e( '회원가입', 'personalize-login' ); ?>"/>
        </p>
    </form>
</div>
