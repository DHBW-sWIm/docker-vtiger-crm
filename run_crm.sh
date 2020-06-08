#/bin/bash

echo "<?php \$db_pass = '${MYSQL_ROOT_PASSWORD}'; ?>" > db_pass.php
echo "<?php \$db_host = '${MYSQL_HOST}'; ?>" > db_host.php
echo "<?php \$db_user = '${MARIADB_USER}'; ?>" > db_user.php
echo "<?php \$db_name = '${MYSQL_DATABASE}'; ?>" > db_name.php
echo "<?php \$site_URL = '${VT_SITE_URL}'; ?>" > site_url.php
apache2-foreground