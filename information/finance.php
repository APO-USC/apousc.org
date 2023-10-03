<?php
// Google Analytics
include_once("include/analytics.php");

// Initiate connection to database and user login session
include_once("include/session.php");

// Set values for page
$page_title = "Finance";
$current_page = "home";

// Load header
include_once("include/header.php");

// Below this PHP block, set page-specific JavaScript, CSS, and anything else for the <head><meta http-equiv="Content-Type" content="text/html; charset=euc-kr">
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
			<h2>Finance</h2>
			<p>If you don't see what you're looking for, just contact Elodie Zhen and Leon Yoshida!p>

                <h3>Spring 2023 Information</h3>
                <ul>
                    	<li><a href='https://docs.google.com/spreadsheets/d/1sQPCbvDb7I1TUUPZouZOJDQXC8QR1lqcqm3KYOZe04w/edit#gid=1852648581' target = "_blank">Budget</a></li>
                    	<li>Venmo: @apoakusc</li>
                    	<li>Email: <a href="mailto:finance.apousc@gmail.com">finance.apousc@gmail.com</a></li>
			<li><a href='https://docs.google.com/forms/d/e/1FAIpQLScfZJ_-fkXlfMOEyBHXxZmMeDUi6mde1QfDwD9dyMQRzXxVvA/viewform' target = "_blank">New Members: Financial Aid Application</a></li>
			<li><a href='https://docs.google.com/forms/d/e/1FAIpQLSeN3Fm2tfweVCKgAKAU_gH3kQhAsfzx9coco0Ht8lMn3X5lPA/viewform' target = "_blank">Actives: Financial Aid Application</a></li>
			<li><a href='https://docs.google.com/spreadsheets/d/14caTP6ABRb9NMGnrHJyy0u_Ub2aZz0ChzbkRq0uvyP0/edit#gid=0' target = "_blank">Dues Breakdown</a></li>
			<li><a href='https://forms.gle/sTVAQgdq4QZmtM3r9' target = "_blank">Payment Plan Adjustment Request</a></li>
			<li><a href='https://forms.gle/k3RaFyR37JPe247o6' target = "_blank">Chapter Retreat Auction</a></li>
<!-- 			<li><a href='https://docs.google.com/spreadsheets/d/1PXuN3l-g1iufoe9mkM1dk4oTXMJSzb-WA9KnPFyFqRw/edit#gid=0' target = "_blank">Extra Fundraising Point Oppprtunities - Spring 2023</a></li>
<!-- 			<li><a href='https://docs.google.com/spreadsheets/d/1x9XIh9mjRXdK5HI4_aqES2yVP0TQ-4vDHp-YxXfPsJo/edit?usp=sharing' target = "_blank">Semester Calendar</a></li> --> -->
                </ul>
                
                <h3>Dues</h3>
                <p>Please contact Elodie Zhen or Leon Yoshida if you need additional financial accommodations for our payment plans.</p>
		<p>Payments due @ 11:59 PM of each deadline or your account will be frozen :(</p>
		<h4><b>Actives: $141 early bird (9/16), $146 regular</b></h4>
                <h4><b>Associates: $55 regular</b></h4>
		<h4><b>New Members: $270 regular</b></h4>
		<p><b>Actives Payment Plan</b></p>	
                <ul>
			<li>Pay full September 18: $146</li>
                    	<li>September 18: $49</li>
                    	<li>October 2: $49</li>
                    	<li>October 16: $48</li>
            	</ul>

             	<p><b>Associates Payment Plan</b></p>	
                <ul>
			<li>Pay full September 18: $55</li>
                    	<li>September 18: $20</li>
                	<li>October 2: $20</li>
                    	<li>October 16: $15</li>
            	</ul>

		<p><b>New Members Payment Plan</b></p>	
                <ul>
                    	<li>Pay in full October 9: $270</li>
                	<li>October 9: $90</li>
                    	<li>October 23: $90</li>
			<li>November 6: $90</li>
            	</ul>
				<p><b>*If you do not pay your dues and do not communicate with the VPs, we will have to freeze your account until the matter is resolved.</b></p>
				
				<h3>Reimbursements</h3>
				
				<p>In order to get reimbursed, please send your receipts to Mia Ward or Justin Yang at finance.apousc@gmail.com.</p>
		<ul>
                    <li><a href='https://forms.gle/LsasfhVn2RPSQraD8' target = "_blank">Driver Reimbursement Car Information Form</a></li>
		    <li><a href='https://forms.gle/TrXuVXKV2uYKusQd7' target = "_blank">Driver Reimbursement Request</a></li>
		    <li><a href='https://forms.gle/1DPYTvujFbHPYfpv5' target = "_blank">General APO Reimbursement Form</a></li>
                </ul>
				
<br />
				

			
			<p class="bottomNote">Note: <abbr title="Portable Document Format">PDF</abbr> files require the Adobe Reader from Adobe Systems, Incorporated. Adobe and the Adobe logo are trademarks of Adobe Systems, Incorporated. Click on the following link to download.</p>
			<a href="http://get.adobe.com/reader/"><img src="img/get_adobe_reader.png" height="39" width="158" alt="Download Adobe Reader" /></a>
<?php
	// If user is not logged in, display Restricted Area warning
	} else {
		echo "			<h2>Restricted Area</h2>¥n";
		echo "			<p>Sorry, but you must be signed in to view this page.</p>¥n";
	}
?>
<?php
##################################################
// Load sidebar, footer, and dropdown stats panel
include_once("include/sidebarFooterDropdownpanel.php");
?>
