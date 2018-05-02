<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_coect
function pg_coection_string() {
  // we will fill this out next
}
# Establish db coectio
$db = pg_coect(pg_coection_string());
if (!$db) {
    echo "Database coection error."
    exit;
}
$result = pg_query($db, "SELECT statement goes here");
?>