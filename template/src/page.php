<?php
/**
 * Page page
 *
* @author       <%= author %>
 * @package      Wordpress
 * @subpackage   <%= name %>
 * @version      1.0
 * @since        1.0
 */
<% if (wordpressType === 'headless') { %>
$uri = $_SERVER['REQUEST_URI'];
wp_redirect('https://' . FRONTEND_DOMAIN . $uri, 301);
exit();
<% } else { %>
get_header();
the_post();
the_title();
the_content();
get_footer();
<% } %>
