<?php
# This file was automatically generated by the MediaWiki 1.40.0-alpha
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/MainConfigSchema.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry

$wgShowExceptionDetails = true;
$wgShowDBErrorBacktrace = true;

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}


## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = "Civable";

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = "";

## The protocol and server name to use in fully-qualified URLs
$wgServer = "https://civable.com/";

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "https://upload.wikimedia.org/wikipedia/commons/6/6c/Government_icon_%28black%29.svg",
	'icon' => "https://upload.wikimedia.org/wikipedia/commons/6/6c/Government_icon_%28black%29.svg",
];

## Add custom namespaces
define("NS_COUNTRY", 3000);
define("NS_COUNTRY_TALK", 3001);
define("NS_REGION", 3002);
define("NS_REGION_TALK", 3003);
define("NS_CITY", 3004);
define("NS_CITY_TALK", 3005);
define("NS_PROP", 3006);
define("NS_PROP_TALK", 3007);
define("NS_NEED", 3008);
define("NS_NEED_TALK", 3009);
define("NS_TOPIC", 3010);
define("NS_TOPIC_TALK", 3011);

$wgExtraNamespaces[NS_COUNTRY] = "Country";
$wgExtraNamespaces[NS_COUNTRY_TALK] = "Country_talk";
$wgExtraNamespaces[NS_REGION] = "Region";
$wgExtraNamespaces[NS_REGION_TALK] = "Region_talk";
$wgExtraNamespaces[NS_CITY] = "City";
$wgExtraNamespaces[NS_CITY_TALK] = "City_talk";
$wgExtraNamespaces[NS_PROP] = "Prop";
$wgExtraNamespaces[NS_PROP_TALK] = "Prop_talk";
$wgExtraNamespaces[NS_NEED] = "Need";
$wgExtraNamespaces[NS_NEED_TALK] = "Need_talk";
$wgExtraNamespaces[NS_TOPIC] = "Topic";
$wgExtraNamespaces[NS_TOPIC_TALK] = "Topic_talk";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = "";
$wgPasswordSender = "";

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = "mysql";
$wgDBserver = "mediawiki-mysql.cs8muc6vydab.us-east-2.rds.amazonaws.com";
$wgDBname = "mysql_db";
$wgDBuser = "admin";
$wgDBpassword = "JLpGyVsLQmgm1jcNAFOG";

# MySQL specific settings
$wgDBprefix = "";

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

## To enable image uploads, make sure the 'images' directory
## is writable, then set this to true:
$wgEnableUploads = true;
$wgUseImageMagick = true;
$wgImageMagickConvertCommand = "/usr/bin/convert";

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = false;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = "en";

# Time zone
$wgLocaltimezone = "UTC";

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = "de17ae84f86c9ec9d1b97f3d37575a07d245e5dc6e4eb7fb7790e03ab6fbd0c0";

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = "1";

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = "9e107071b5567c04";

## For attaching licensing metadata to pages, and displaying an
## appropriate copyright notice / icon. GNU Free Documentation
## License and Creative Commons licenses are supported so far.
$wgRightsPage = ""; # Set to the title of a wiki page that describes your license/copyright
$wgRightsUrl = "";
$wgRightsText = "";
$wgRightsIcon = "";

# Shared memory settings
$wgMainCacheType = CACHE_ACCEL;
$wgMessageCacheType = CACHE_ACCEL;
$wgCacheDirectory = 'cache/';
$wgUseLocalMessageCache = true;
$wgParserCacheType = CACHE_DB;
$wgMemCachedServers = [];
$wgUseGzip = true;
$wgEnableSidebarCache = true;

# NO DB HITS!
$wgDisableCounters = true;
$wgMiserMode = true;

# Text cache
$wgRevisionCacheExpiry = 3*24*3600;
$wgParserCacheExpireTime = 14*24*3600;

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = "/usr/bin/diff3";

## Default skin: you can change the default skin. Use the internal symbolic
## names, e.g. 'vector' or 'monobook':

# Enabled skins.
# The following skins were automatically enabled:
wfLoadSkin( 'MinervaNeue' );
wfLoadSkin( 'Vector' );
wfLoadSkin( 'Medik' );
wfLoadSkin( 'Citizen' );
wfLoadSkin( 'Tweeki' );
$wgDefaultSkin = "Citizen";
$wgCitizenUseNumberFormatter = false
// $wgHiddenPrefs[] = 'skin';

# Load extensions
wfLoadExtension( 'Cargo' );
$wgCargoPageDataColumns[] = 'creationDate';
$wgCargoPageDataColumns[] = 'modificationDate';
$wgCargoPageDataColumns[] = 'numRevisions';

wfLoadExtension( 'PageForms' );
wfLoadExtension( 'WikiEditor' );
wfLoadExtension( 'VisualEditor' );
wfLoadExtension( 'VEForAll' );
wfLoadExtension( 'CategoryTree' );
wfLoadExtension( 'DynamicPageList3' );
wfLoadExtension( 'DataTransfer' );
wfLoadExtension( 'AutoCreateCategoryPages' );
wfLoadExtension( 'ParserFunctions' );
wfLoadExtension( 'Nuke' );
wfLoadExtension( 'UrlGetParameters' );


# Enable display titles
$wgAllowDisplayTitle = true;
$wgRestrictDisplayTitle = false;

# Enable string functions
$wgPFEnableStringFunctions = true;

# Configure S3 storage for images
$wgAWSCredentials = [
	'key' => 'AKIAZZ7GTF46DUT7BI2J',
	'secret' => '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',
	'token' => false
];

$wgAWSRegion = 'us-east-2';

$wgAWSBucketName = "civable-s3";