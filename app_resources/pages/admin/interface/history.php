<?php
include FORUM_ROOT . '/app_resources/includes/parser.php';
$page_title = 'Interface Editing History';

$page_list = array();
$q = new DBSelect('pages', array('*'), '', 'Failed to get page list');
$result = $q->commit();
while ($page = $db->fetch_assoc($result)) {
	$page_list[$page['id']] = $page;
}

$q = new DBSelect('interface_history', array('h.*', 'u.username'), 'time>' . (time() - 60 * 60 * 24 * 60), 'Failed to retrieve history entries');
$q->set_order('time DESC');
$q->table_as('h');
$q->add_join(new DBJoin('users', 'u', 'u.id=h.user', 'LEFT'));
$result = $q->commit();

$page_edits = array();
$field_edits = array();
while ($entry = $db->fetch_assoc($result)) {
	if ($entry['area'] == 'pages') {
		if (!isset($page_edits[$entry['field']])) {
			$page_edits[$entry['field']] = array();
		}
		$page_edits[$entry['field']][] = array('time' => $entry['time'], 'old_value' => base64_decode($entry['old_value']), 'username' => $entry['username']);
	} else if ($entry['area'] == 'interface') {
		if (!isset($field_edits[$entry['field']])) {
			$field_edits[$entry['field']] = array();
		}
		$field_edits[$entry['field']][] = array('time' => $entry['time'], 'old_value' => $entry['old_value'], 'username' => $entry['username']);
	}
}

foreach ($page_edits as $pageid => &$page_entry) {
	for ($i = 0; $i < sizeof($page_entry); $i++) {
		if ($i == 0) {
			$lines = array();
			foreach ($page_list[$pageid] as $db_key => $db_val) {
				$lines[] = $db_key . '=>' . $db_val;
			}
			$page_entry[$i]['new_value'] = implode("\n", $lines);
		} else {
			$page_entry[$i]['new_value'] = $page_entry[$i - 1]['old_value'];
		}
		$page_entry[$i]['id'] = $pageid;
	}
}

foreach ($field_edits as $field => &$field_entry) {
	for ($i = 0; $i < sizeof($field_entry); $i++) {
		if ($i == 0) {
			if ($field == 'header') {
				$field_entry[$i]['new_value'] = $futurebb_config['header_links'];
			}
		} else {
			$field_entry[$i]['new_value'] = $field_entry[$i - 1]['old_value'];
		}
		$field_entry[$i]['field'] = $field;
	}
}

function pagediff($page1, $page2) {
	if ($page1['time'] > $page2['time']) {
		return -1;
	} else if ($page1['time'] < $page2['time']) {
		return 1;
	} else {
		return 0;
	}
}
?>
<h2>Page editing history</h2>
<table border="0">
	<tr>
		<th>Page ID</th>
		<th>Username</th>
		<th>Time</th>
		<th>Old value</th>
		<th>New value</th>
	</tr>
	<?php
	$page_edit_final_list = array();
	foreach ($page_edits as $pageid => $page_entry) {
		for ($i = 0; $i < sizeof($page_entry); $i++) {
			$page_edit_final_list[] = $page_entry[$i];
		}
	}
	usort($page_edit_final_list, 'pagediff');
	foreach ($page_edit_final_list as $entry) {
		$oldlines = explode("\n", $entry['old_value']);
		$oldparts = array();
		foreach ($oldlines as $line) {
			$parts = explode('=>', $line, 2);
			$oldparts[$parts[0]] = $parts[1];
		}
		$newlines = explode("\n", $entry['new_value']);
		$newparts = array();
		foreach ($newlines as $line) {
			$parts = explode('=>', $line, 2);
			$newparts[$parts[0]] = $parts[1];
		}
		$old_disp = array();
		$new_disp = array();
		foreach ($oldparts as $key => $val) {
			if ($newparts[$key] != $val) {
				$old_disp[] = '<b>' . $key . ':</b> ' . $val;
				$new_disp[] = '<b>' . $key . ':</b> ' . $newparts[$key];
			}
		}
		echo '<tr><td>' . $entry['id'] . '</td><td>' . htmlspecialchars($entry['username']) . '</td><td>' . user_date($entry['time']) . '</td><td>' . implode('<br />', $old_disp) . '</td><td>' . implode('<br />', $new_disp) . '</td></tr>';
	}
	?>
</table>

<h2>Field editing history</h2>
<div style="max-width:100%; overflow: auto">
	<table border="0">
		<tr>
			<th>Field</th>
			<th>Username</th>
			<th>Time</th>
			<th>Old value</th>
			<th>New value</th>
		</tr>
		<?php
		$field_edit_final_list = array();
		foreach ($field_edits as $field => $field_entry) {
			for ($i = 0; $i < sizeof($field_entry); $i++) {
				$field_edit_final_list[] = $field_entry[$i];
			}
		}
		usort($field_edit_final_list, 'pagediff');
		foreach ($field_edit_final_list as $entry) {
			echo '<tr><td>' . $entry['field'] . '</td><td>' . htmlspecialchars($entry['username']) . '</td><td>' . user_date($entry['time']) . '</td><td><pre>' . htmlspecialchars($entry['old_value']) . '</pre></td><td><pre>' . htmlspecialchars($entry['new_value']) . '</pre></td></tr>';
		}
		?>
	</table>
</div>