<?php
// Initiate connection to database and user login session
include_once("include/session.php");

// Set values for page
$page_title = "Election-Documents";
$current_page = "home";

// Load header
include_once("include/header.php");

// Below this PHP block, set page-specific JavaScript, CSS, and anything else for the <head>
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

<!-- for copying and pasting purposes
						<li></li>
							<ul><a href="docs/election/fall13/"></a></ul>
-->
<br />

      <div class="contentBox">
       <p><!--Please review the <a href="docs/Officer Duties_EditedSpring2015.pdf">Officer Descriptions</a>, <a href="docs/APOAKBylawsRevisions.pdf">Bylaws</a>, and <a href="docs/Officer Election Policy (updated 7.6.15).pdf">Officer Election Policy</a> for procedures regarding elections and for a list of each position's responsibilities. If you wish to decline your nomination, please click "[Decline]" next to your name, or email <a href="mailto:webmaster.apousc@gmail.com">webmaster.apousc@gmail.com</a> so that the website administrator may decline on your behalf. <br/><br/><strong>If you are accepting your nominations, please be sure to submit the <a href="docs/F19OQ.docx">E-Board Application</a> by 11:59 PM on Sunday, April 14th. </strong></br></br>-->
	<strong>If you would like to apply for an appointed position, please submit your <a href="https://docs.google.com/document/d/18Vd460lAekF7P-1RoF9GFa0hEsk1FhFu/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true">A-Board Application </a> 
						by 12:00 PM on TUESDAY, NOVEMBER 30.</strong></p>
        
      </div>



			<!--<h2><a href="docs/F19AB.docx">Appointed Board Application</a></h2>-->
   <!--   <h2><a href="docs/F19OQ.docx">Executive Officer Application</a></h2>-->
      

			<h2>Candidate Documents</h2>
          
           <h3>President</h3>
	    <ul> 
            <li><b>Bethany Cheng</b></li>
              <ul><a href = "https://drive.google.com/file/d/16J_7ZlnL5czpvqFwhrK-8Amtni1H2hYF/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/18q3FK8dUtkvaXUYilVZ-7LgAlvhWU9q2/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1zWN5_Jq22CBHs1y2TyYSdV7xSTbQLxc8/view?usp=sharing" target="_blank"> Schedule </a></ul>
            </ul>
           

          <h3>New Member Educator</h3>
           <ul>    
           <li><b>Johann Kim</b></li>
              <ul><a href = "https://drive.google.com/file/d/1KvELDSK8-85Nd9VHEmQGYtzruEef11VC/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1f1zXZjqlqIAeXUtLs68eqKIpOK7tyiOH/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1rh_AKu_5y6Lb4D5mJrnNnUTF48DB7JCV/view?usp=sharing" target="_blank"> Schedule </a></ul>
	   <li><b>Lilly Tran</b></li>
              <ul><a href = "https://drive.google.com/file/d/1BOi0QeXge63cuRP0TNjQPNkPPapgbfCj/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1OiDlZg7__ydKkiG25Ny_fujOdR_B2yUi/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1FvfmeHxAi9JGOSzkYS-9Cp9rXEtY0rqQ/view?usp=sharing" target="_blank"> Schedule </a></ul>
          </ul> 

          <h3>VP of Service</h3>
	    <ul>
            <li><b>Jess Tadokoro</b></li>
              <ul><a href = "https://drive.google.com/file/d/1tQ2dXzt0Pi0HsCDXWGBLwMT5SCg6alf2/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1B6Dw7yBHtPU0NmeacLGGX0mu9gz_0zG9/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1O0DpQkC1Enx2SqgSwQLdeIlMnoayPVmy/view?usp=sharing" target="_blank"> Schedule </a></ul>
             </ul> 

          <h3>Co-VP of Membership</h3>
	    <ul>
<!--             <li><b></b></li>
              <ul><a href = ""> Application </a></ul>
              <ul><a href = ""> Resume </a></ul>
	    	<ul><a href = ""> Schedule </a></ul>
		<li><b></b></li>
              <ul><a href = ""> Application </a></ul>
              <ul><a href = ""> Resume </a></ul>
	    	<ul><a href = ""> Schedule </a></ul> -->
            </ul>

          <h3>VP of Fellowship</h3>
	    <ul>
             <li><b>Ryan Tsang</b></li>
              <ul><a href = "https://docs.google.com/document/d/1tCCYAQIm5gn6aikedvknuhzas51p_qyFLriaozb10q8/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1UuOTLG677ltsTujtb4Qk7bqSzt4Hj77BfNbXFVII-I0/edit?usp=sharing" target="_blank"> Resume </a></ul>
<!-- 	    	<ul><a href = "" target="_blank"> Schedule </a></ul> -->
	</ul>

          <h3>Co-VP of Finance</h3>
		<ul>
		  <li><b>Stephen Nguyen</b></li>
              <ul><a href = "https://docs.google.com/document/d/1HgtjHtJguoO99hcHDvSOrHG5vY43tmg0/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1RsJkZUnfnIENEKfmU6-_LggQL48maGd-/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1qI35SGE6dm9iEh3Urm7tJ1i1ob1XiIdf/view?usp=sharing" target="_blank"> Schedule </a></ul>
                <li><b>Tammy Kongboonma</b></li>
              	<ul><a href = "https://docs.google.com/document/d/1kyCF7xi8XRuVI5Px3ZHrwa9vBQv2mBsN/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true" target="_blank"> Application </a></ul>
              	<ul><a href = "https://drive.google.com/file/d/1APUIVShT7tRd3d6djh02R0fegRENgjot/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1tNDkup-Yy4LWPhFTUl9bfBjweA1Up6sv/view?usp=sharing" target="_blank"> Schedule </a></ul>
              </ul>

          <h3>VP of Communications</h3>
		<ul>
                <li><b>Jackie Wu</b></li>
              <ul><a href = "https://drive.google.com/file/d/1noj6mqNpU4W16i6deCUfGeZMbIuHs3iD/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/16Paqv0LMGP8pAxYcZraTgCS4_P9PvMg6/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1kUwnFOl6YNOYL1Bsaknbl50mJMe4pKWd/view?usp=sharing" target="_blank"> Schedule </a></ul>
              </ul>
            
                  
          <h3>Interchapter Chair</h3>
           	<ul>
              <li><b>Angelique Calma</b></li>
              <ul><a href = "https://drive.google.com/file/d/19O47VxISF69ERqQfJDpIPZzJpzJTBff6/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1Hw9A_a5HHGeu1Gxz5Lwl_e2fNMTfQ8kG/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/186-s3w1xxChh882DJaaM6Pdn3nK5Jh9f/view?usp=sharing" target="_blank"> Schedule </a></ul>
            </ul> 

<h3>Diversity and Inclusion Chair</h3>
		<ul>
              <li><b>May Song</b></li>
              <ul><a href = "https://drive.google.com/file/d/1qp3ycYro94h7XFrM9uMudsx-U1wn_nhS/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1ErJYmhlZ4Hi3BBXIZ3xC5Ci8FhRGua5v/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1MIH_GiTYF1AI2YYSmeEqhjVDEK51D6qL/view?usp=sharing" target="_blank"> Schedule </a></ul>
		<li><b>Adam Parish</b></li>
              <ul><a href = "https://drive.google.com/file/d/1m_iPMEhC-_W9IWykKEQ1D8uJJrPazq-p/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1LDJ3zKNzfMxa1VJCc46m9fhj6a8ZHv1Y/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1_iHE3x7gHrr7a7Cnie0WRESvVKijDwyC/view?usp=sharing" target="_blank"> Schedule </a></ul>
		</ul>
    
			<p class="bottomNote">Note: <abbr title="Portable Document Format">PDF</abbr> files require the Adobe Reader from Adobe Systems, Incorporated. Adobe and the Adobe logo are trademarks of Adobe Systems, Incorporated. Click on the following link to download.</p>
			<a href="http://get.adobe.com/reader/"><img src="img/get_adobe_reader.png" height="39" width="158" alt="Download Adobe Reader" /></a>
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
