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
	<strong>If you would like to apply for an appointed position, please submit your <a href="https://docs.google.com/document/d/1TP5goDQeJ1hpN6Z9H2wlY6DAevSg_3r2_hMZnui6f6k/edit?usp=sharing" target="_blank">A-Board Application </a> 
						by 11:59 AM on WEDNESDAY, NOVEMBER 23.</strong></p>
        
      </div>



			<!--<h2><a href="docs/F19AB.docx">Appointed Board Application</a></h2>-->
   <!--   <h2><a href="docs/F19OQ.docx">Executive Officer Application</a></h2>-->
      

			<h2>Candidate Documents</h2>
          
           <h3>President</h3>
	    <ul> 
             <li><b>Jaden Sibrian</b></li>
              <ul><a href = "https://drive.google.com/file/d/1w-SBytbWiwVAdWi_S-Fa2TrLZuOO-YG0/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1A8HQ5SUGyof6LpRu2IxBK4m7ZRHqOUb-/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1yP45hrmM6eVDvTBVqrM-PAJbQruVqBa4/view?usp=sharing" target="_blank"> Schedule </a></ul>
            </ul>
           

          <h3>New Member Educator</h3>
           <ul>    
           <!-- <li><b>Diego Ramos</b></li>
              <ul><a href = "https://docs.google.com/document/d/1k1MMWj98Z_tDeTluVPwQvyyAH8_ptSkq/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1ZculEmi6rA6HX3H-8m20KHId9Ojq0dzj/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1jM2GWniG9jvGZZwTbquZ5qapRZw4PSMG/view?usp=sharing" target="_blank"> Schedule </a></ul>
	   <li><b>Ryan Tsang</b></li>
              <ul><a href = "https://docs.google.com/document/d/1SkI9YP14XPVakJZ_Rt5WIYYpR0WIE5dwwNIUYhDz6UY/edit?usp=sharing" target="_blank"> Application </a></ul>
<!--               <ul><a href = "" target="_blank"> Resume </a></ul>
	    	<ul><a href = "" target="_blank"> Schedule </a></ul> -->
      -->    </ul> 

          <h3>VP of Service</h3>
	    <ul>
        <!--     	<li><b>Jackie Wu</b></li>
                <ul><a href = "https://drive.google.com/file/d/1lnrWVqExJilFeIROfHeXRLMvU4bm0Usy/view?usp=sharing" target="_blank"> Application </a></ul>
                <ul><a href = "https://drive.google.com/file/d/1vPxoRNz-LCgtOfi7sNv5gTguidIV1iys/view?usp=sharing" target="_blank"> Resume </a></ul>
<!-- 	    	<ul><a href = "" target="_blank"> Schedule </a></ul>  -->
		<li><b>David Kamassah</b></li>
              	<ul><a href = "https://docs.google.com/document/d/1Cmd_ypT1pngdpHVN3lytS8Y3d67Kh6vMyARaSChZg98/edit"> Application </a></ul>
<!--               	<ul><a href = ""> Resume </a></ul>
	    	<ul><a href = ""> Schedule </a></ul> -->
         -->    </ul> 

          <h3>Co-VP of Membership</h3>
	    <ul>
	<!--	<li><b>Crystal Thai</b></li>
		<ul><a href = "https://drive.google.com/file/d/1B96eAxwB_VL-VSG-LQS3t_1Lft0e5U6G/view?usp=sharing"> Application </a></ul>
		<ul><a href = "https://drive.google.com/file/d/10mraTQRuT3nXuFe5m73eKJc9wM75GouH/view?usp=sharing"> Resume </a></ul>
		<ul><a href = "https://drive.google.com/file/d/1fadvJHwei971HCfXLMUykgUnYNbhDGCq/view?usp=sharing"> Schedule </a></ul>
		<li><b>Ben Tran</b></li>
		<ul><a href = "https://drive.google.com/file/d/1iElfJIqfp2T0sd73zF1LSCNCuMk_V1B9/view?usp=sharing"> Application </a></ul>
		<ul><a href = "https://drive.google.com/file/d/1r-6zHnH2H2I8Dpl-t1S3GfR1dMJ4bON9/view?usp=sharing"> Resume </a></ul>
		<ul><a href = "https://drive.google.com/file/d/1sY2oNOqA7mO_2q3kpO9GDozR7r8-GS8Y/view?usp=sharing"> Schedule </a></ul> 
           </ul>
	    <ul>
		<li><b>Kelly Chua</b></li>
		<ul><a href = "https://drive.google.com/file/d/1xEAlPai4VaFpWdnBKl9MGVnOhxqJhcmG/view?usp=sharing"> Application </a></ul>
		<ul><a href = "https://drive.google.com/file/d/1GcILnYwGqEZRa0k9EqSWV7XH4vRm6DPC/view?usp=sharing"> Resume </a></ul>
<!-- 		<ul><a href = ""> Schedule </a></ul> -->
		<li><b>Jonah Vu</b></li>
		<ul><a href = "https://drive.google.com/file/d/14paYchCdHl3f_eS6BVhohwd34KP7dYc9/view?usp=sharing"> Application </a></ul>
		<ul><a href = "https://drive.google.com/file/d/1bEpZn07ENW6G0Qr_YwUY8wQl1f03SWjc/view?usp=sharing"> Resume </a></ul>
<!-- 		<ul><a href = ""> Schedule </a></ul>  -->
           --> </ul>

          <h3>VP of Fellowship</h3>
	    <ul>
		<li><b>Jaden Sibrian</b></li>
              	<ul><a href = "https://drive.google.com/file/d/1RkEdv0AyNHIw8USQ6zxrLAzWncqqJHSK/view?usp=sharing" target="_blank"> Application </a></ul>
              	<ul><a href = "https://drive.google.com/file/d/1BPEAvS0oy6AtIZeOblPIN8F-9EDbl0pP/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1g7sJJ5YCExKYLHEfuLj_FqBTHJIZAD_Y/view?usp=sharing" target="_blank"> Schedule </a></ul>
	    </ul>

          <h3>Co-VP of Finance</h3>
	      <ul>
 		<!--  <li><b>Mia Ward</b></li>
              <ul><a href = "https://docs.google.com/document/d/1EcMbV1YabhdHP-oRDEYb6hW9kgsJbj8bUkIYcu7XjGg/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1CX8uMhilOfRVwmDUYDZHDVbpcsF0_T_p/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1Z81koNLCQ8ijFoWfxuUeWq1PWicsVYNd/view?usp=sharing" target="_blank"> Schedule </a></ul>
                <li><b>Justin Yang</b></li>
              	<ul><a href = "https://drive.google.com/file/d/1POY4-_DoniitLTWxnPJqmBq63TGlyCvR/view?usp=sharing" target="_blank"> Application </a></ul>
              	<ul><a href = "https://drive.google.com/file/d/1mhQK2QhrJWOFo0ny7xY1Mvu9C7ujC-wO/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1nrkUlE38RE5f51soydZjuHGD0wEyT07S/view?usp=sharing" target="_blank"> Schedule </a></ul>
          -->    </ul>

          <h3>VP of Communications</h3>
		<ul>
               <!--  <li><b>Dylan Pham</b></li>
              <ul><a href = "https://drive.google.com/file/d/1hXBiRajtRbuIK4GEPOS6qphAo9VPoNJ1/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1v0R5z3Maop7ykRJmO1SxAR4xzQaoNaN8/view?usp=sharing" target="_blank"> Resume </a></ul>
	      <ul><a href = "https://drive.google.com/file/d/1fpMw85gcNJgV-71BEQtG2jVV2xk4GgYi/view" target="_blank"> Schedule </a></ul>
         -->     </ul>
            
                  
          <h3>Interchapter Chair</h3>
           	<ul>
               <li><b>Kelani Fong</b></li>
              <ul><a href = "https://docs.google.com/document/d/1eeVEpBoeugtOOMgOZnG6o57wempEsnbd-gbT3vmnkpY/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1Of3k6ziRuVerXl-ZPHaungVQtMf3iMEt/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1uDPe7_gAhzg4SW77x9IYFuxIAw8jG8HI/view?usp=sharing" target="_blank"> Schedule </a></ul> 
            </ul> 

<h3>Diversity and Inclusion Chair</h3>
		<ul>
		      <li><b>Leah Huynh</b></li>
		      <ul><a href = "https://drive.google.com/file/d/1Lrhih5wIgDBVPoOLQO0HLmGshF0-IsCJ/view?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1hbeXTo8BWUpydd0ADNvRjKfdXciIr3tz/view?usp=sharing" target="_blank"> Resume </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1k-UQDzapELk409tMADKV1s7OSef_xoHw/view?usp=sharing" target="_blank"> Schedule </a></ul>
		      <li><b>Matthew Kuloszewski</b></li>
		      <ul><a href = "https://drive.google.com/file/d/1TQzs5KBtNQoeCASY5LHCi2lYh2kw74hY/view?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1z8JQEl9XcM0Hfbc3SB0ioL2iUwvWkhbB/view?usp=sharing" target="_blank"> Resume </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1MI5Ab9EajtyS0HRKq0LzSAmw_VuOulTl/view?usp=sharing" target="_blank"> Schedule </a></ul>
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
