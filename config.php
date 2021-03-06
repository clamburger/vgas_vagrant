<?php
$TIMEZONE = "America/New_York";

// Database connection information
$DB_HOST = "localhost";
$DB_USER = "vagrant";
$DB_PASS = "vagrant";
$DB_DB = "vidya";

// Used for volunteer applications
$EMAIL_TO = "";
$EMAIL_FROM = "";

// steamcommunity.com/dev/apikey
$STEAM_API_KEY = "";

// Event-specific details
$YEAR = "2013";
$DOMAIN = "$YEAR.vidyagaemawards.com";

$APPLICATIONS_OPEN = true;
$CATEGORY_VOTING_ENABLED = true;

$ACCOUNT_REQUIRED_TO_NOMINATE = false;

$DEFAULT_PAGE = "home";
$AD_LANDING_PAGE = "http://$DOMAIN/voting?promo";

// Items will only be showed if the user has access to them
$NAVBAR_ITEMS = array(
  "home"  => "Home",
  "categories" => "Categories and Nominations",
  "people" => "People",
  "http://steamcommunity.com/groups/vidyagaemawards/discussions/" => "Forum"
);
  
?>
