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
              <li><b>Katie Kim</b></li>
              <ul><a href = "https://drive.google.com/file/d/1uUUZ0jpyPmbtz3hAn8y5IL-2QINpKZ0W/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1nnnCIzqzNMc6on8bctqWGFrgfPEBsqIt/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1mJXh3WyjER8SjgJeB4RfrGDKyyYdlLUG/view?usp=sharing" target="_blank"> Schedule </a></ul> 
            </ul>
           

          <h3>New Member Educator</h3>
           <ul>    
              <li><b>Ethan Afflick</b></li>
              <ul><a href = "https://drive.google.com/file/d/1sH6fMvs4ftfRR5U4oyv1j_OGhKn-J5DF/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/15KGRzAZZdObYSfM5sULzKx5c6RPvgspM/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1HuZydpz9rvA7vgysN4NBFlc6fiY69aFo/view?usp=sharing" target="_blank"> Schedule </a></ul> 
       </ul> 

          <h3>VP of Service</h3>
	    <ul>
		<li><b>Matthew Su</b></li>
              <ul><a href = "https://drive.google.com/file/d/1qT8C0Qo8ojgqw6I5q-vff_c0KjUk4y4o/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/16EWgPkz2IhHAiP0qYk2vxLXYPyt75TQE/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/13y00x5VtMD4gE433ElpeRdGvx9t46C53/view?usp=sharing" target="_blank"> Schedule </a></ul> 
            </ul> 

          <h3>Co-VP of Membership</h3>
	    <ul>
		<li><b>Elijah Jhee</b></li>
              <ul><a href = "https://drive.google.com/file/d/1KfrHoyZ8DThFwo7GJ_VzCPl88R6wgv4Q/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/100hByvd-G49VkpbWEi05X9slGM6FOZaY/view?usp=sharing" target="_blank"> Resume </a></ul>
		    <li><b>Brandon Giang</b></li>
              <ul><a href = "https://drive.google.com/file/d/1d7Xz_NPbOjly7Yb8etk1ZV5n9tbdEhSL/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1zK-3gFRWB0pMGYWJergRd3szpql1sCcE/view?usp=sharing" target="_blank"> Resume </a></ul>
		</ul>

          <h3>VP of Fellowship</h3>
	    <ul>
<!-- 		<li><b>Ethan Afflick</b></li>
              	<ul><a href = "https://drive.google.com/file/d/15vRnCwstCZAa4j0-qZxkE0JiY1tiGaTT/view?usp=sharing" target="_blank"> Application </a></ul> -->
              <!-- 	<ul><a href = "https://drive.google.com/file/d/1BPEAvS0oy6AtIZeOblPIN8F-9EDbl0pP/view?usp=sharing" target="_blank"> Resume </a></ul>  --> 
	      <!-- 	<ul><a href = "https://drive.google.com/file/d/1g7sJJ5YCExKYLHEfuLj_FqBTHJIZAD_Y/view?usp=sharing" target="_blank"> Schedule </a></ul>  --> 
	    </ul>

          <h3>Co-VP of Finance</h3>
	      <ul>
		    <!--     no applicants     -->   
             </ul>

          <h3>VP of Marketing</h3>
		<ul>
              	<li><b>Andrea Shin</b></li>
              <ul><a href = "https://drive.google.com/file/d/1wMN33odg1cuQYVh5YOp71HA2i338jVuY/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1fRfZ9WNN7Ywa12iryipEC_OJqa-Nvgzs/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/13y00x5VtMD4gE433ElpeRdGvx9t46C53/view?usp=sharing" target="_blank"> Schedule </a></ul> 
               </ul>

        <h3>VP of Philanthropy</h3>
		<ul>
              	      <li><b>Angie Bussayabuntoon</b></li>
		      <ul><a href = "https://docs.google.com/document/d/1S-3RDcPASI9fLaech_78DX85LNPyckFwrQx_s0vjDOo/edit?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1z1hh4WupUjpxvjbE9iM79Kwo-BKRalpH/view?usp=sharing" target="_blank"> Resume </a></ul>
		      <li><b>Nicole Yu</b></li>
		      <ul><a href = "https://docs.google.com/document/d/12q-u_pLGIG0bU7VYJoj7F5cquz4gxxUS4Ws3LbX6w8U/edit?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://docs.google.com/document/d/1Q1RxtW7CaDtFcVaBac9-E9HKwOOu27oa/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true" target="_blank"> Resume </a></ul>  
		     <ul><a href = "https://drive.google.com/file/d/1UjDv6ON-T1fM8i4LKNKjgVXTVsFk2qUI/view?usp=sharing" target="_blank"> Schedule </a></ul>

               </ul>
            
                  
          <h3>Interchapter Chair</h3>
           	<ul>
<!--                <li><b>Ayezah Bagro</b></li>
              <ul><a href = "https://drive.google.com/file/d/1opvu89jGyN4si_kx76nfgBWR6F97X8Va/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1J065bP6XbuVPagnB3eKAELIfzfcy1XtN/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1xnQjR1LL4KhpOf3fX1RO7ZsXwrh0uehQ/view?usp=sharing" target="_blank"> Schedule </a></ul>  -->
            </ul> 

<h3>Diversity and Inclusion Chair</h3>
		<ul>
		      <li><b>Brigitte Buntin</b></li>
		      <ul><a href = "https://drive.google.com/file/d/1u6cqeMcsRGboEAZoZVfP_QlK93ZHTiA-/view?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1Gp_YCLXrPk3M42nNgRq_pVNtUeQb5w9q/view?usp=sharing" target="_blank"> Resume </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1aroZyS0F5yeUYQ4w7H3n7M-DB7twFQPn/view?usp=sharing" target="_blank"> Schedule </a></ul>
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
