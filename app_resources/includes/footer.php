		</div>
		<?php if ($page_info['file'] != 'viewtopic.php') { ?>
		<$breadcrumbs/>
		<?php } ?>
		<div class="forum_footer">
			<p>Mod Share - LS97 and jvvg</p>
			<?php
			if ($futurebb_config['footer_text'] != '') {
				echo '<p>' . $futurebb_config['footer_text'] . '</p>';
			}
			?>
		</div>
		<$debug_info/>
	</div>
</body>
</html>
