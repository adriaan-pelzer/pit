<?php
global $voices_number;
global $ie_6;
?>
<footer <?php if($ie_6){if(($voices_number > 18)) {echo 'style="padding-bottom: ' . (($voices_number - 18) * 16) . 'px;"';}} ?>>
<hr />
<p>&copy; <?php echo date('Y'); ?> PIT Productions</p>
</footer>
</body>
</html>
