<?php
	function render($template, $data) {
		ob_start();
		include $template;
		$result = ob_get_contents();
		ob_end_clean();
		return $result;
	}
?>
