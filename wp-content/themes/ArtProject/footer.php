<div id="footer">	
		<?php bloginfo('name'); ?> <?php _e('is proudly powered by', 'blank') ?> <a href="http://wordpress.org/">WordPress</a> &#124; <a href="<?php bloginfo('rss2_url'); ?>"><?php _e('Entries (RSS)', 'blank'); ?></a> &#124; <a href="<?php bloginfo('comments_rss2_url'); ?>"><?php _e('Comments (RSS)', 'blank'); ?></a><br />
		<?php _e('Page generated in', 'blank'); ?> <?php timer_stop(1); ?> <?php _e('seconds', 'blank') ?>.
	<?php wp_footer(); //leave for plugins ?>
    </div> <!-- end div#footer -->
</div> <!-- end div#wrapper, begins in header.php -->
</body>
</html>
