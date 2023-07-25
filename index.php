<?php

$redirect_url = (!is_user_logged_in()) ? wp_login_url() : apply_filters('rta_redirect', admin_url( 'admin.php' ));
wp_redirect( $redirect_url );
exit();
