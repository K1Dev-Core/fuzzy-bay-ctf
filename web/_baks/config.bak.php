<?php
/*
 * Naomi Bay - configuration backup
 * !! THIS FILE MUST NEVER BE DEPLOYED TO PRODUCTION !!
 * Kept here while we move the config to the new admin panel.
 */
echo "===================================================\n";
echo " Naomi Bay config dump (backup)\n";
echo "===================================================\n";
echo "db_host          = localhost\n";
echo "db_user          = naomi\n";
echo "db_pass          = naomi_bay_2024!\n";
echo "tracker_enabled  = false (maintenance)\n";
echo "upload_dir       = /var/uploads/private\n";
echo "maintenance_msg  = under construction, see you soon\n";
echo "flag             = " . (getenv('FLAG') ?: 'TCTT2026{3x4mpl3_fl4g}') . "\n";
echo "===================================================\n";
?>