<?php
$lang_addl = array(
	//admin pages
	'bans'					=>	'Bans',
	'trashbin'				=>	'Trash bin',
	'censoring'				=>	'Censoring',
	'iptracker'				=>	'IP Tracker',
	'usergroups'			=>	'User groups',
	'maintenance'			=>	'Maintenance',
	'style'					=>	'Style',
	'extensions'			=>	'Extensions',
	
	//bans
	'newban'				=>	'Add new ban',
	'editban'				=>	'Edit ban',
	'deleteban'				=>	'Delete ban',
	'expires'				=>	'Expires',
	'never'					=>	'Never',
	'deletebanconfirm'		=>	'Are you sure you want to delete this ban?',
	'jk'					=>	'Just kidding',
	
	//censoring
	'censorintro'			=>	'You may use this page to set inappropriate words to censor.<br />This will not affect old posts unless the reparse posts function is used (available on the <a href="' . $base_config['baseurl'] . '/admin/maintenance">maintenance page</a>).',
	'newword'				=>	'Add new word',
	'find'					=>	'Find',
	'replacewith'			=>	'Replace with',
	'importcensor1'			=>	'Import dictionary',
	'importcensor2'			=>	'If you want, you can import a pre-defined dictionary of censored words.',
	'exportcensor'			=>	'To export the censoring list so it can be used on another forum, please click the download link below.',
	'imghostrestriction'	=>	'Image host restrictions',
	'hostlist'				=>	'Domain names that are allowed/disallowed (set blacklist/whitelist mode above, and put one domain per line)',
	'whitelist'				=>	'Whitelist',
	'blacklist'				=>	'Blacklist',
	'none'					=>	'None',
	
	//admin forums
	'forumname'				=>	'Forum name',
	'permissions'			=>	'Permissions',
	'grouptitle'			=>	'Group title',
	'viewforum'				=>	'View forum',
	'posttopics'			=>	'Post topics',
	'postreplies'			=>	'Post replies',
	'editcats'				=>	'Edit categories',
	'catname'				=>	'Category name',
	'sortpos'				=>	'Sort position',
	'delete?'				=>	'Delete?',
	'updatecats'			=>	'Update categories',
	'editforums'			=>	'Edit forums',
	'newforum'				=>	'Add new forum',
	'newforumname'			=>	'New forum',
	'forumname'				=>	'Forum name',
	'updateforums'			=>	'Update forums',
	'addcat'				=>	'Add new category',
	
	//maintenance (admin page)
	'redirmsg'				=>	'If you are not redirected within a few seconds, <a href="$1">click here</a> to continue.',
	'updatingtopic'			=>	'Updating topic #$1',
	'updatingforum'			=>	'Updating forum #$1',
	'reparsingposts'		=>	'Reparsing posts - now is a good time to get off the computer for a little while. :)',
	'reparsingpost'			=>	'Reparsing post #$1',
	'reparsingsigs'			=>	'Reparsing signatures - now is a good time to get off the computer for a little while. :)',
	'reparsingsig'			=>	'Reparsing signature #$1',
	'rebuildingsearch'		=>	'Rebuilding search index - now is a good time to get off the computer for a little while. :)',
	'procpost'				=>	'Processing post #$1',
	'updatingpostcounts'	=>	'Updating user post counts - now is a good time to get off the computer for a little while. :)',
	'recountinguser'		=>	'Recounting user #$1',
	'recountingtopicreplies'=>	'Recalculating topic reply counts - now is a good time to get off the computer for a little while. :)',
	'maintenancedesc'		=>	'From this page, you can run the various maintenance utilities necessary to help keep your forum working.',
	'rebuildsearch'			=>	'Rebuild search index',
	'rebuildsearchdesc'		=>	'If there are problems searching, you can rebuild the search index.',
	'deleteorphans'			=>	'Delete orphaned topics',
	'deleteorphansdesc'		=>	'If you are ever getting a message saying a topic has no posts in it, run this utility to remove all of them.',
	'updatelastpost'		=>	'Update topic/forum last post data',
	'updatelastpostdesc'	=>	'If the last post data in topics and forums appears to be invalid, run this tool to fix it.',
	'reparse'				=>	'Reparse',
	'reparsedesc'			=>	'This forum pre-parses BBCode, meaning that the BBCode is converted into HTML at the time of posting/editing the post. This means that any changes to BBCode will not affect old posts. If you have added new BBCode and want to apply it on old posts, you should run this utility.',
	'reparseposts'			=>	'Reparse all posts',
	'reparsesigs'			=>	'Reparse all signatures',
	'updatecounts'			=>	'Update counts',
	'updateuserpostcounts'	=>	'Update user post counts',
	'updateforumpostcounts'	=>	'Update forum post counts',
	'updateforumtopiccounts'=>	'Update forum topic counts',
	'updatetopicpostcounts'	=>	'Update topic post counts',
	
	//user groups
	'defaultusergroup'		=>	'Default user group:',
	'newusergroup'			=>	'Create new user group',
	'groupname'				=>	'Group name',
	'groupnamedesc'			=>	'This is the title of the group itself.',
	'usertitle'				=>	'User title',
	'usertitledesc'			=>	'This will show up under a user&apos;s username in their posts.',
	'editpostsdesc'			=>	'This option allows users to edit their own posts.',
	'deletepostsdesc'		=>	'This option allows users to delete their own posts.',
	'modprivs'				=>	'Moderator privileges',
	'modprivsdesc'			=>	'This option gives users access to the moderator tools, which include being able to edit and delete everybody&apos;s posts, ban users, and view deleted posts.',
	'adminprivs'			=>	'Administrator privileges',
	'adminprivsdesc'		=>	'This option gives users access to the complete admin panel.',
	'allowsig'				=>	'Allow signature',
	'allowsigdesc'			=>	'This option allows users to have a signature under their posts.',
	'viewuserlist'			=>	'View user list',
	'viewuserlistdesc'		=>	'This option allows users to view the user list.',
	'postlinks'				=>	'Post links',
	'postlinksdesc'			=>	'This option allows users to include the [url] tag in their posts.',
	'postimgs'				=>	'Post images',
	'postimgsdesc'			=>	'This option allows users to include the [img] tag in their posts.',
	'postflood'				=>	'Post flood',
	'postflooddesc'			=>	'Users must wait this many seconds between posts. Set to zero for no limit.',
	'maxpostsperhour'		=>	'Max posts per hour',
	'maxpostsperhourdesc'	=>	'Users in this group may only post this many posts in one hour, and must wait until fewer than this many posts have been posted by that user in the past hour before continuing. Set to zero for no limit.',
	'userlistvisgrps'		=>	'Visible groups on user list',
	'userlistvisgrpsdesc'	=>	'If a user in this group visits the user list, only users in the groups checked above will be visible. Uncheck all options to enable all groups.',
	'promoteto'				=>	'Promote to',
	'dontpromote'			=>	'[Do not promote]',
	'after'					=>	'after',
	'deleteusergroup'		=>	'Delete user group',
	'deletegroupconfirm'	=>	'Are you sure you want to delete the user group &quot;$1&quot;?',
	'moveallusersto'		=>	'Move all users in this group to: ',
	'accessboard'			=>	'Access board',
	'accessboarddesc'		=>	'Access the board at all (if not enabled, users will only be able to log in and register',
	'viewforums'			=>	'View forums',
	'viewforumsdesc'		=>	'Allow viewing of new forums by default',
	'posttopicsdesc'		=>	'Allow posting new topics by default when creating new forums',
	'postrepliesdesc'		=>	'Allow posting replies by default when creating new forums',
	
	//extension installation
	'uploadfailed'			=>	'File upload failed.',
	'notzip'				=>	'The file you uploaded is not a ZIP file.',
	'noinfophp'				=>	'The extension did not have an info.php file',
	'badextinfo'			=>	'The $ext_info variable was either not set or not an array in the info.php file.',
	'extinfomissingkey'		=>	'The $ext_info variable was missing the following required key: <b>$1</b>',
	'extinstallation'		=>	'Extension installation',
	'makingdbchanges'		=>	'Making database changes - success',
	'runninginstallphp'		=>	'Running install.php - success',
	'copyingfiles'			=>	'Copying files - success',
	'nochangesvar'			=>	'The variable $changes was not set in changes.php',
	'changesmissingkey'		=>	'$changes[$1] is missing a key.',
	'invalidchangetype'		=>	'Invalid change type: ',
	'installcomplete'		=>	'Installation complete!',
	'unzipfailed'			=>	'Something went wrong with unzipping. Not sure what. :(',
	'installnewext'			=>	'Install new extension',
	
	//admin index
	'boardsettings'			=>	'Board settings',
	'boardtitle'			=>	'Board title',
	'adminemail'			=>	'Administrator email',
	'onlinetimeout'			=>	'Online timeout',
	'allowPM'				=>	'Allow private messaging',
	'allownotifs'			=>	'Allow notifications',
	'onlinetimeoutdesc'		=>	'If a user does not visit any page after this many seconds, they will be considered offline. Use 0 to disable online/offline display.',
	'verifyregs'			=>	'Verify new registrations',
	'disableregs'			=>	'Disable new registrations',
	'verifyregsdesc'		=>	'Verify new user registrations by emailing them an access code',
	'disableregsdesc'		=>	'Do not allow new registrations',
	'general'				=>	'General',
	'userstopicsposts'		=>	'Users, topics, and posts',
	'enableavatars'			=>	'Enable avatars',
	'enableavatarsdesc'		=>	'An avatar is a user icon that will show next to all of their posts.',
	'rulesdesc'				=>	'Users must agree to these rules when they register. This is not parsed as BBCode and may contain HTML.',
	'announcement'			=>	'Announcement',
	'announcementdesc'		=>	'Here you may specify an announcement to appear in the top banner under the navigation bar. You may use HTML as this is not parsed as BBCode.',
	'enableannouncement'	=>	'Enable announcement?',
	'siteappearance'		=>	'Site appearance',
	'customfooter'			=>	'Here you may specify custom text to appear below the &quot;Powered by FutureBB&quot; message.',
	'addl_header_links'		=>	'Additional header links<br />Enter them in the following format: <code>3:&lt;a href=&quothttp://yoursite.com&quot&gt;My website&lt;/a&gt;</code><br />That example would make it appear as the third header link.',
	'topicsperpage'			=>	'Topics per page',
	'postsperpage'			=>	'Posts per page',
	'showpostcounts'		=>	'Show user post counts',
	'showpostcountsdesc'	=>	'Show users&apos; post counts in their posts',
	'zeronolimit'			=>	'Set an option to zero for no limit',
	'maxchars'				=>	'Maximum number of characters',
	'maxlines'				=>	'Maximum number of lines',
	'maxheight'				=>	'Maximum height (pixels)',
	'maintenancemode'		=>	'Maintenance mode',
	'maintenancemsg'		=>	'Maintenance message:',
	'autoactivatemaint'		=>	'Automatically activate maintenance mode in',
	'maintschedpanel'		=>	'(Maintenance mode is already scheduled to turn on at $1).',
	'autodeactivatemaint'	=>	'Automatically deactivate maintenance mode in ',
	'maintoffschedpanel'	=>	'(Maintenance mode is already scheduled to turn off at $1).',
	'serverinfo'			=>	'Server info',
	'fbbversion'			=>	'FutureBB Version',
	'database'				=>	'Database',
	'os'					=>	'Operating system',
	'newversionmsg'			=>	'A new version of FutureBB is available! You can download it on <a href="http://futuresight.org/products/futurebb">the FutureSight Technologies website</a>.',
	'maxquotedepth'			=>	'Maximum quote depth',
	'quotedepth>1'			=>	'The maximum quote depth must be greater than 1',
	'fixerrors'				=>	'The following errors must be fixed before continuing:',
);