<div class="login-form-container">
    <?php //if ( $attributes['show_title'] ) : ?>
        <h2><?php _e( '로그인', 'personalize-login' ); ?></h2>
    <?php //endif; ?>

    <!-- Show errors if there are any -->
    <?php if ( count( $attributes['errors'] ) > 0 ) : ?>
        <?php foreach ( $attributes['errors'] as $error ) : ?>
            <p class="zmes-login-error">
                <?php echo $error; ?>
            </p>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php if ( $attributes['registered'] ) : ?>
        <p class="login-info">
            <?php
                printf(
                    __( '<strong>%s</strong>에 회원가입을 하셨습니다. 입력하신 이메일 주소로 비밀번호를 전송했습니다.', 'personalize-login' ),
                    get_bloginfo( 'name' )
                );
            ?>
        </p>
    <?php endif; ?>

    <?php if ( $attributes['lost_password_sent'] ) : ?>
        <p class="login-info">
            <?php _e( '비밀번호 초기화를 위해 이메일내 링크를 확인하세요.', 'personalize-login' ); ?>
        </p>
    <?php endif; ?>

    <!-- Show logged out message if user just logged out -->
    <?php if ( $attributes['logged_out'] ) : ?>
        <p class="login-info">
            <?php _e( '로그아웃 하셨습니다. 로그인 하시겠습니까?', 'personalize-login' ); ?>
        </p>
    <?php endif; ?>

    <?php if ( $attributes['password_updated'] ) : ?>
        <p class="login-info">
            <?php _e( '비밀번호 변경되었습니다. 로그인 하세요.', 'personalize-login' ); ?>
        </p>
    <?php endif; ?>

    <?php
        wp_login_form(
            array(
                'label_username' => __( '사용자명', 'personalize-login' ),
                'label_log_in' => __( '로그인', 'personalize-login' ),
                'redirect' => $attributes['redirect'],
            )
        );
    ?>

    <?php wp_register('',' | ','회원가입');?><a class="forgot-password" href="<?php echo wp_lostpassword_url(); ?>" title="Lost Password">
        <?php _e( '비밀번호 분실?', 'personalize-login' ); ?>
    </a>
</div>
