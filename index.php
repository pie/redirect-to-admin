<?php

$redirect_url = (!is_user_logged_in()) ? wp_login_url() : admin_url( 'admin.php?page=timesheets' );
wp_redirect( $redirect_url );
exit();
