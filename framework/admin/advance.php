<?php // Admin > Advance Settings page

function tt_subscribe_advance_page() {
?>
    <div class="tt-subscribe-admin">
        <h1>TT Subscribe <span>Version <?=$GLOBALS['TT_SUBSCRIBE_VERSION'];?></span></h1>
        
        <div id="tt-subscribe-admin-nav">
            <ul>
                <?php TT_SUBSCRIBE_navigation(); ?>
            </ul>
        </div>

        <form method="post" action="options.php">
        <?php settings_fields( 'tt_subscribe_data_advance' );
			do_settings_sections( 'tt_subscribe_data_advance' ); ?>
 		<div class="tt-subscribe-admin-content" id="ts-3">
        	<h2>Advance Settings</h2>
            <?php submit_button(); ?>
            <h3>Custom Style</h3>
			<div class="tt-subscribe-admin-section"><textarea type="text" name="tt-subscribe-css" rows="7" cols="60" /><?php echo get_option('tt-subscribe-css'); ?></textarea>
            <br />Enter your custom style in css. No need to add &lt;style&gt; tags.
            </div>
			<h3>Custom Script</h3>
			<div class="tt-subscribe-admin-section"><textarea type="text" name="tt-subscribe-script" rows="7" cols="60" /><?php echo get_option('tt-subscribe-script'); ?></textarea>
            <br />Enter your custom script in javascript or jquery. No need to add &lt;script&gt; tags.
            </div>
            <?php submit_button(); ?>
        </div>
        <?php TT_SUBSCRIBE_footer(); ?>
        </form>
    </div>
<?php
} // function tt_subscribe_advance_page() ---- END
?>