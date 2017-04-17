<?php
// HOME NAVIGATION
function TT_SUBSCRIBE_home_navigation() {
	$param_page = $_GET['page'];
	
	switch ($param_page) {
		case 'tt-subscribe':
		?>
            <li><a href="?page=tt-subscribe">Home</a></li>
            <li><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
            <li><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
            <li><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
            <li><a href="?page=tt-subscribe-support">Support</a></li>
            <li><a href="?page=tt-subscribe-about">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
<?php	break;
	}
}

// FOOTER NAVIGATION
function TT_SUBSCRIBE_footer() {
?>
    <div class="tt-subscribe-admin-footer">
    	Version <?=$GLOBALS['TT_SUBSCRIBE_VERSION'];?> | 
        Plugin created by <a href="http://thesabeltuto.blogspot.com" target="_blank">Thesabel Tuto</a> | 
        Plugin site at <a href="http://ttplugins.wordpress.com/" target="_blank">TT Plugins</a> | 
        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">DONATE!</a>
    </div>	
<?php
}

// HEADER NAVIGATION
function TT_SUBSCRIBE_navigation() {
	$param_page = $_GET['page'];
	
	switch ($param_page) {
		case 'tt-subscribe':
		?>
            <li id="ts0" class="active"><a href="?page=tt-subscribe">Home</a></li>
            <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
            <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
            <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
            <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
            <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            <?php
            break;
		case 'tt-subscribe-basic':
		?>
            <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
            <li id="ts1" class="active"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
            <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
            <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
            <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
            <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            <?php
            break;
		case 'tt-subscribe-subscriptions':
		?>
            <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
            <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
            <li id="ts2" class="active"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
            <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
            <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
            <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            <?php
            break;
		case 'tt-subscribe-advance':
		?>
            <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
            <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
            <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
            <li id="ts3" class="active"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
            <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
            <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            <?php
            break;
		case 'tt-subscribe-support':
		?>
            <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
            <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
            <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
            <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
            <li id="ts4" class="active"><a href="?page=tt-subscribe-support">Support</a></li>
            <li id="ts5"><a href="?page=tt-subscribe-about">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            <?php
            break;
		case 'tt-subscribe-about':
		?>
            <li id="ts0"><a href="?page=tt-subscribe">Home</a></li>
            <li id="ts1"><a href="?page=tt-subscribe-basic">Basic Settings</a></li>
            <li id="ts2"><a href="?page=tt-subscribe-subscriptions">Subscriptions</a></li>
            <li id="ts3"><a href="?page=tt-subscribe-advance">Advance Settings</a></li>
            <li id="ts4"><a href="?page=tt-subscribe-support">Support</a></li>
            <li id="ts5" class="active"><a href="?page=tt-subscribe-about">About</a></li>
            <li id="donate"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=H228JQZP6269J&lc=US&item_name=TT%2dPlugins%3a%20Support%20WordPress%20Plugin%20Development&item_number=TT%2dPlugins&currency_code=USD&bn=PP%2dDonationsBF%3abtn_donateCC_LG%2egif%3aNonHosted" target="_blank">Donate</a></li>
            <?php
            break;
	}
}
?>