<?php
require_once('essentials.php');
<% if (type === 'normal') { %>
require_once('acf.php');
<% } %>
require_once('image.php');
require_once('menu-settings.php');
require_once('theme.php');
<% if (type === 'headless') { %>
require_once('url.php');
<% } %>