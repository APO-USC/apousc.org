<?php
// Google Analytics
include_once("include/analytics.php");

// Initiate connection to database and user login session
include_once("include/session.php");

// Set values for page
$page_title = "Documents";
$current_page = "home";

// Load header
include_once("include/header.php");

// Below this PHP block, set page-specific JavaScript, CSS, and anything else for the <head><meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
##################################################
?>
<?php
##################################################
// Load top navigation
include_once("include/topnav.php");

// Below this PHP block, enter only the main HTML content of the page. All necessary layout, body, html, etc. tags are included in the PHP includes.
##################################################
?>
<?php
	// If user is logged in, show documents
	if ($session->logged_in) {
?>
<br />
			<h2>Academic Resources</h2>
			<p>If you don't see what you're looking for, just contact an officer!</p>
			<p>If you want to upload or update a document on this page feel free to contact webmaster.apousc@gmail.com!</p>
                	
                <h3>Academic Documents</h3>
					<ul>
            <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSet6-LhKONaD4VHk9ngQ1Z_gwHU-ac8lAg6XdMt95SXHfCLxg/viewform">APO Chegg Request Form</a></li>
						<li><a href="https://docs.google.com/spreadsheets/d/1T4rq8Lrn3aT7DWqzACcQPGi55NcQQBjDebeICYm2kYY/edit?usp=sharing">APO Rate My Professor</a></li>
						<p style="margin-left: 40px"><a href="https://forms.gle/1XxgyWA1FUUc2TCm7" target = "_blank">  Rate My Professor Submission Form</a></p>
						<li><a href="https://skydrive.live.com/"  target = "_blank">Test Bank</a> (<b>username:</b> membership.apousc@gmail.com <b>PW:</b> Forgetmenot)</li>
						<p style="margin-left: 40px"><a href="https://forms.gle/Z5ZLmXJahH3hQo75A" target = "_blank">  Test Bank Submission Form</a></p>
					</ul>
						
<br />
				
			
<?php
	// If user is not logged in, display Restricted Area warning
	} else {
		echo "			<h2>Restricted Area</h2>\n";
		echo "			<p>Sorry, but you must be signed in to view this page.</p>\n";
	}
?>
<?php
##################################################
// Load sidebar, footer, and dropdown stats panel
include_once("include/sidebarFooterDropdownpanel.php");
?>