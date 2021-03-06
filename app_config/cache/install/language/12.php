<?php
$q = 'INSERT INTO `#^language`(language,langkey,value,category) VALUES';
$lang_insert_data = array(
	array('English', $db->escape('addtonginx'), $db->escape('The code below is a sample of what you probably need to add to your nginx configuration file (item #2 above). Please note that it needs to be put in the proper location and may not work in all configurations. See <a href="http://nginx.org/en/docs/http/ngx_http_rewrite_module.html" target="_BLANK">the nginx website</a> for more information.'), 'install'),
	array('English', $db->escape('bademail'), $db->escape('You entered an invalid email address.'), 'register'),
	array('English', $db->escape('duplicateuser'), $db->escape('Username already exists'), 'register'),
	array('English', $db->escape('badusername'), $db->escape('Username must only contain letters, numbers, periods, hyphens, and underscores. The first invalid character is: $1'), 'register'),
	array('English', $db->escape('dupeipreg'), $db->escape('A user from your IP address has already registered within the past two hours. Please come back later and try again.'), 'register'),
	array('English', $db->escape('verifyemail'), $db->escape('Someone has registered using your email address as the user $1. If this is you, go to the login page ($2/login?activate) and log in, and when it asks you for an access code, please use the following:
$3
If this is not you, then please disregard this message.'), 'register'),
	array('English', $db->escape('botchallenge'), $db->escape('You failed the anti-bot challenge.'), 'register'),
	array('English', $db->escape('shortusername'), $db->escape('Your username must be longer than 4 characters.'), 'register'),
	array('English', $db->escape('regsdisabled'), $db->escape('Registrations are disabled.'), 'register'),
	array('English', $db->escape('regsdisableddesc'), $db->escape('The administrator of this forum has disabled registrations.'), 'register'),
	array('English', $db->escape('latestpostsin'), $db->escape('Latest posts in $1'), 'rss'),
	array('English', $db->escape('notifsfor'), $db->escape('Notifications for $1'), 'rss'),
	array('English', $db->escape('interface'), $db->escape('Interface'), 'admin'),
	array('English', $db->escape('notranslation'), $db->escape('Unfortunately, this page does not have a translation available.'), 'main'),
	array('English', $db->escape('blockininline'), $db->escape('The tag <b>[$1]</b> can not be placed inside <b>[$2]</b> because block tags can not be placed inside of inline tags.'), 'main'),
	array('English', $db->escape('nonesting'), $db->escape('Additional BBCode tags can not go inside of a <b>[$1]</b> tag.'), 'main'),
	array('English', $db->escape('shortpass'), $db->escape('Your password is shorter than 8 characters'), 'main'),
	array('English', $db->escape('commonpass'), $db->escape('Your password is in the list of the most commonly used passwords'), 'main'),
	array('English', $db->escape('reply'), $db->escape('Reply'), 'main'),
	array('English', $db->escape('pm_reply_header'), $db->escape('Replying to message at $1:'), 'profile'),
	array('English', $db->escape('addforum'), $db->escape('Add forum'), 'admin'),
	array('English', $db->escape('titletooshort'), $db->escape('The title you entered must be at least 4 characters.'), 'install'),
	array('English', $db->escape('pwdmismatch'), $db->escape('The passwords did not match. Please try again.'), 'install'),
	array('English', $db->escape('usernameinvalid'), $db->escape('The username you entered had an illegal character (only alphanumerics, hyphens, underscores, and periods, please) or was too short (< 4 characters)'), 'install'),
	array('English', $db->escape('bademail'), $db->escape('The email you entered was invalid.'), 'install'),
	array('English', $db->escape('passtooshort'), $db->escape('Your password was too short (< 8 characters)'), 'install'),
	array('English', $db->escape('invalidbaseurl'), $db->escape('Your base URL was invalid. It needs to be consistent with the base path and have the format of a valid URL.'), 'install'),
	array('English', $db->escape('invalidbasepath'), $db->escape('Your base path was invalid - it must start with a slash and can not end with a slash'), 'install'),
	array('English', $db->escape('lists'), $db->escape('Lists'), 'main'),
	array('English', $db->escape('listsintro'), $db->escape('If you wish to have items in a series, you can do so using the <code>[list]</code> tag.'), 'main'),
	array('English', $db->escape('forbulletedlist'), $db->escape('For a bulleted list, just use <code>[list]</code>. For example,'), 'main'),
	array('English', $db->escape('fornumberlist'), $db->escape('For a numbered list, just use <code>[list=1]</code>. For example,'), 'main'),
	array('English', $db->escape('item#'), $db->escape('Item #$1'), 'main'),
	array('English', $db->escape('dateformat'), $db->escape('Date format'), 'admin'),
	array('English', $db->escape('timeformat'), $db->escape('Time format'), 'admin'),
	array('English', $db->escape('timeformatdesc'), $db->escape('The following two entries allow you to set the format used for displaying all times by the software. For items that only display the date, the date format is used, but for items that display the time, the date format and time format are joined together. The formats must follow the <a href="http://php.net/manual/en/function.date.php#refsect1-function.date-parameters">PHP guidelines</a>.'), 'main'),
	array('English', $db->escape('basegroupon'), $db->escape('Base new group on:'), 'admin'),
	array('English', $db->escape('forumalreadyopen'), $db->escape('You have modified a forum or already have one open for editing. Please refresh the page and then try again.'), 'admin'),
	array('English', $db->escape('existingwords'), $db->escape('Existing words'), 'admin'),
	array('English', $db->escape('bbcodeinPM'), $db->escape('BBCode in private messages'), 'admin'),
	array('English', $db->escape('showallposts'), $db->escape('Show all posts'), 'profile'),
	array('English', $db->escape('otherforumeditsconfirmrefresh'), $db->escape('Edits to a forum have been submitted in another window. Do you want to refresh this page to reflect those changes?'), 'admin'),
	array('English', $db->escape('unknown error'), $db->escape('An unknown error occurred'), 'main'),
	array('English', $db->escape('specificnestingerror'), $db->escape('The tag <b>[$1]</b> cannot be placed directly inside <b>[$2]</b>.'), 'main'),
	array('English', $db->escape('errorwaslocated'), $db->escape('The above error was located at: '), 'main'),
	array('English', $db->escape('tagwasopened'), $db->escape('The <b>[$1]</b> tag was opened at the following location: '), 'main'),
	array('English', $db->escape('archiveforum'), $db->escape('Archive forum'), 'admin'),
	array('English', $db->escape('archived'), $db->escape('(Archived)'), 'main'),
	array('English', $db->escape('changecategory'), $db->escape('Change category'), 'admin'),
	array('English', $db->escape('continuetocompleteinstall'), $db->escape('Press the "Continue" button below to complete the installation of FutureBB.'), 'install'),
);
foreach ($lang_insert_data as &$entry) {
	$entry = '(\'' . implode('\',\'', $entry) . '\')';
}
$q = new DBMassInsert('language', array('language', 'langkey', 'value', 'category'), $lang_insert_data, 'Failed to insert language data');
$q->commit();
