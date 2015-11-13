<?php
$q = 'INSERT INTO `#^language`(language,langkey,value,category) VALUES';
$lang_insert_data = array(
	array('English', $db->escape('onlinetimeoutdesc'), $db->escape('If a user does not visit any page after this many seconds, they will be considered offline. Use 0 to disable online/offline display.'), 'admin'),
	array('English', $db->escape('verifyregs'), $db->escape('Verify new registrations'), 'admin'),
	array('English', $db->escape('disableregs'), $db->escape('Disable new registrations'), 'admin'),
	array('English', $db->escape('verifyregsdesc'), $db->escape('Verify new user registrations by emailing them an access code'), 'admin'),
	array('English', $db->escape('disableregsdesc'), $db->escape('Do not allow new registrations'), 'admin'),
	array('English', $db->escape('general'), $db->escape('General'), 'admin'),
	array('English', $db->escape('userstopicsposts'), $db->escape('Users, topics, and posts'), 'admin'),
	array('English', $db->escape('enableavatars'), $db->escape('Enable avatars'), 'admin'),
	array('English', $db->escape('enableavatarsdesc'), $db->escape('An avatar is a user icon that will show next to all of their posts.'), 'admin'),
	array('English', $db->escape('rulesdesc'), $db->escape('Users must agree to these rules when they register. This is not parsed as BBCode and may contain HTML.'), 'admin'),
	array('English', $db->escape('announcement'), $db->escape('Announcement'), 'admin'),
	array('English', $db->escape('announcementdesc'), $db->escape('Here you may specify an announcement to appear in the top banner under the navigation bar. You may use HTML as this is not parsed as BBCode.'), 'admin'),
	array('English', $db->escape('enableannouncement'), $db->escape('Enable announcement?'), 'admin'),
	array('English', $db->escape('siteappearance'), $db->escape('Site appearance'), 'admin'),
	array('English', $db->escape('customfooter'), $db->escape('Here you may specify custom text to appear below the &quot;Powered by FutureBB&quot; message.'), 'admin'),
	array('English', $db->escape('topicsperpage'), $db->escape('Topics per page'), 'admin'),
	array('English', $db->escape('postsperpage'), $db->escape('Posts per page'), 'admin'),
	array('English', $db->escape('showpostcounts'), $db->escape('Show user post counts'), 'admin'),
	array('English', $db->escape('showpostcountsdesc'), $db->escape('Show users&apos; post counts in their posts'), 'admin'),
	array('English', $db->escape('zeronolimit'), $db->escape('Set an option to zero for no limit'), 'admin'),
	array('English', $db->escape('maxchars'), $db->escape('Maximum number of characters'), 'admin'),
	array('English', $db->escape('maxlines'), $db->escape('Maximum number of lines'), 'admin'),
	array('English', $db->escape('maintenancemode'), $db->escape('Maintenance mode'), 'admin'),
	array('English', $db->escape('maintenancemsg'), $db->escape('Maintenance message:'), 'admin'),
	array('English', $db->escape('autoactivatemaint'), $db->escape('Automatically activate maintenance mode in'), 'admin'),
	array('English', $db->escape('maintschedpanel'), $db->escape('(Maintenance mode is already scheduled to turn on at $1).'), 'admin'),
	array('English', $db->escape('autodeactivatemaint'), $db->escape('Automatically deactivate maintenance mode in '), 'admin'),
	array('English', $db->escape('maintoffschedpanel'), $db->escape('(Maintenance mode is already scheduled to turn off at $1).'), 'admin'),
	array('English', $db->escape('serverinfo'), $db->escape('Server info'), 'admin'),
	array('English', $db->escape('fbbversion'), $db->escape('FutureBB Version'), 'admin'),
	array('English', $db->escape('database'), $db->escape('Database'), 'admin'),
	array('English', $db->escape('os'), $db->escape('Operating system'), 'admin'),
	array('English', $db->escape('newversionmsg'), $db->escape('A new version of FutureBB is available! You can download it on <a href="http://futuresight.org/products/futurebb">the FutureSight Technologies website</a>.'), 'admin'),
	array('English', $db->escape('maxquotedepth'), $db->escape('Maximum quote depth'), 'admin'),
	array('English', $db->escape('quotedepth>1'), $db->escape('The maximum quote depth must be greater than 1'), 'admin'),
	array('English', $db->escape('fixerrors'), $db->escape('The following errors must be fixed before continuing:'), 'admin'),
	array('English', $db->escape('avatarmaxfilesize'), $db->escape('Maxiumum avatar file size'), 'admin'),
	array('English', $db->escape('avatarfilesizedesc'), $db->escape('The maximum allowed avatar file size (KiB)'), 'admin'),
	array('English', $db->escape('enablebbcode'), $db->escape('Enable BBCode'), 'admin'),
	array('English', $db->escape('enablebbcodedesc'), $db->escape('Allow BBCode in posts - if this box is changed, it will not affect existing posts unless the &quot;reparse posts&quot; tool is used on the maintenance page'), 'admin'),
	array('English', $db->escape('enablesmilies'), $db->escape('Enable smilies'), 'admin'),
	array('English', $db->escape('enablesmiliesdesc'), $db->escape('Enable smilies - if this box is changed, it will not affect existing posts unless the &quot;reparse posts&quot; tool is used on the maintenance page'), 'admin'),
	array('English', $db->escape('undeletepostheader'), $db->escape('Are you sure you want to undelete the post? You can view it below.'), 'admin'),
	array('English', $db->escape('undeletetopicheader'), $db->escape('Are you sure you wish to undelete this topic?'), 'admin'),
	array('English', $db->escape('headertext'), $db->escape('FutureBB Installation'), 'install'),
	array('English', $db->escape('welcome'), $db->escape('Welcome'), 'install'),
	array('English', $db->escape('dbtype'), $db->escape('Database type'), 'install'),
	array('English', $db->escape('dbsetup'), $db->escape('Database setup'), 'install'),
	array('English', $db->escape('syscfg'), $db->escape('System configuration'), 'install'),
	array('English', $db->escape('adminacct'), $db->escape('Administrator account'), 'install'),
);
$q = new DBMassInsert('language', array('language', 'langkey', 'value', 'category'), $lang_insert_data, 'Failed to insert language data');
$q->commit();
