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
	<strong>If you would like to apply for an appointed position, please submit your <a href="https://docs.google.com/document/d/16JRtSSt4ihxeHlAcbldeb1h2yoclIkxztDJWLb_BDOQ/edit?usp=sharing" target="_blank">A-Board Application </a> 
						by 11:59 PM on TUESDAY, APRIL 23.</strong></p>
        
      </div>



			<!--<h2><a href="docs/F19AB.docx">Appointed Board Application</a></h2>-->
   <!--   <h2><a href="docs/F19OQ.docx">Executive Officer Application</a></h2>-->
      

			<h2>Candidate Documents</h2>
          
           <h3>President</h3>
	    <ul> 
              <li><b>Dana Souter</b></li>
              <ul><a href = "https://docs.google.com/document/d/1SZWZG88yTCZkSJUdP5fZhxRRYDsDTU6i6NLNMxVxHWo/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1Euk4zJFdD9zNhNa1-RzOJv7tKK49I5A9EQRaxGJ8mXE/edit?usp=sharing" target="_blank"> Resume </a></ul>
	    	<!-- <ul><a href = "https://drive.google.com/file/d/1mJXh3WyjER8SjgJeB4RfrGDKyyYdlLUG/view?usp=sharing" target="_blank"> Schedule </a></ul> -->
            </ul>
           

          <h3>New Member Educator</h3>
           <ul>    
              <!-- <li><b>Ethan Afflick</b></li>
              <ul><a href = "https://drive.google.com/file/d/1sH6fMvs4ftfRR5U4oyv1j_OGhKn-J5DF/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/15KGRzAZZdObYSfM5sULzKx5c6RPvgspM/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1HuZydpz9rvA7vgysN4NBFlc6fiY69aFo/view?usp=sharing" target="_blank"> Schedule </a></ul> -->
       </ul> 

          <h3>VP of Service</h3>
	    <ul>
		 <li><b>Riddhi Mandavia</b></li>
              <ul><a href = "https://docs.google.com/document/d/1LPyDCsZI_fA7HeozgG6Ff8TOIKIMTWc3HmB0PmSUElU/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1fsdIGZ0GjWQjK8dOKx8rbUyhA-QVqb7jITRXRlVSsb8/edit?usp=sharing" target="_blank"> Resume </a></ul>
	    	<!-- <ul><a href = "https://drive.google.com/file/d/13y00x5VtMD4gE433ElpeRdGvx9t46C53/view?usp=sharing" target="_blank"> Schedule </a></ul> -->
            </ul> 
	 <ul>
		 <li><b>Angie Bussayabuntoon</b></li>
              <ul><a href = "https://docs.google.com/document/d/1Rc45g5GYFQStkI4bERIIcnV1wjpkaZhG6LZDqt5LjaE/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1-2iFlJnM2L__0Yp-ns3lMARy7h-y16rQiGiObq3nsmU/edit?usp=sharing" target="_blank"> Resume </a></ul>
	    	<!-- <ul><a href = "https://drive.google.com/file/d/13y00x5VtMD4gE433ElpeRdGvx9t46C53/view?usp=sharing" target="_blank"> Schedule </a></ul> -->
            </ul> 
	 <ul>
		 <li><b>Elizabeth Kunz</b></li>
              <ul><a href = "https://docs.google.com/document/d/1nSDjj6_P_xp2-_w0gElJHSV9jTCm_M9LRfGIdNImoUg/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1pUMkwCvOquXeNueuUXZUwFhjt4kJ-BCfZz-TLLRMomY/edit?usp=sharing" target="_blank"> Resume </a></ul>
	    	<!-- <ul><a href = "https://drive.google.com/file/d/13y00x5VtMD4gE433ElpeRdGvx9t46C53/view?usp=sharing" target="_blank"> Schedule </a></ul> -->
            </ul> 



          <h3>Co-VP of Membership</h3>
	    <ul>
		 <li><b>Tess Sanford</b></li>
              <ul><a href = "https://docs.google.com/document/d/11DFdapVk9ZTz26kgIYK9nTmKE04u1p5qexOrpNmJec0/edit?usp=sharing" target="_blank"> Application </a></ul>
             <!-- <ul><a href = "https://drive.google.com/file/d/100hByvd-G49VkpbWEi05X9slGM6FOZaY/view?usp=sharing" target="_blank"> Resume </a></ul>  -->
		    <li><b>Dara Macareno</b></li>
              <ul><a href = "https://docs.google.com/document/d/1Tw2MJxq3Jftlqssm0XTMu2zMJw9wUxmTM_xnJlr56Sc/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1M3tTfxOq7hs3h_9DVMwEpSuEZ012lqWWSR7UZQweQ0g/edit?usp=sharing" target="_blank"> Resume </a></ul> 
		</ul>

          <h3>VP of Fellowship</h3>
	    <ul>
 		<li><b>Sophia Cho</b></li>
              	<ul><a href = "https://docs.google.com/document/d/1dobnH9y0revdgl5xhpN3uTfQ1txpHU-L71u5Ae-XOrU/edit?usp=sharing" target="_blank"> Application </a></ul>
               	<ul><a href = "https://docs.google.com/document/d/1cdARW1-ZMfPJ-vQOhFy8Q2XlvKhPHTeYMgu-vGXn-GM/edit?usp=sharing" target="_blank"> Resume </a></ul>  
	      <!-- 	<ul><a href = "https://drive.google.com/file/d/1g7sJJ5YCExKYLHEfuLj_FqBTHJIZAD_Y/view?usp=sharing" target="_blank"> Schedule </a></ul>  --> 
		     <li><b>Ashton Mahadeo</b></li>
              <ul><a href = "https://docs.google.com/document/d/1dobnH9y0revdgl5xhpN3uTfQ1txpHU-L71u5Ae-XOrU/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/12mWU9-FpRtNxDs-Mbr1j_uqmsVIw-NCXdw2fjBcz3gc/edit?usp=sharing" target="_blank"> Resume </a></ul> 
	    </ul>

          <h3>Co-VP of Finance</h3>
	      <ul>
              	      <li><b>Ellorie Mariano Ho</b></li>
		      <ul><a href = "https://docs.google.com/document/d/16z2xqytTSAR2P7gK7ByBpsy410QGsxVLKx6XwY8Pi7A/edit?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://docs.google.com/document/d/1UpgV9cXrLbc4P_JB_pR0McdplIRGr21ihLng8uJz2p0/edit?usp=sharing" target="_blank"> Resume </a></ul>
		      <li><b>Yifei Wang</b></li>
		      <ul><a href = "https://docs.google.com/document/d/1GcxFEGI6PcKEdFYE4qFY7yvJbrcltBNymOLbQkJRmJo/edit?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://docs.google.com/document/d/1RJYSNnaKI1zwAsPsRe4i8f5dwBMLCmDFgb2tIEXMGJw/edit?usp=sharing" target="_blank"> Resume </a></ul>  
             </ul>

          <h3>VP of Marketing</h3>
		<ul>
              	<li><b>Ella Su</b></li>
              <ul><a href = "https://docs.google.com/document/d/1oKfcS097SdF7H0hIdyK3RLgZCAfV8dea38AGyuwjNAs/edit?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://docs.google.com/document/d/1h1QQ6anzb6m6i9p7ZaVVGK_kkvrNFBKRlTqm_-inmwE/edit?usp=sharing" target="_blank"> Resume </a></ul>
	    	<!-- <ul><a href = "https://drive.google.com/file/d/13y00x5VtMD4gE433ElpeRdGvx9t46C53/view?usp=sharing" target="_blank"> Schedule </a></ul> -->
               </ul>

        <h3>VP of Philanthropy</h3>
		<ul>
              	      <li><b>Julia Ho</b></li>
		      <ul><a href = "https://docs.google.com/document/d/13qGEsAK-rGsgxbwU9sjtLLbujdDRe9blv5BjGH-8B_w/edit?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://docs.google.com/document/d/1o0ko8inz2TYTPCVxWKAFEu5cJ0gcZBUMKZ54omhLnXE/edit?usp=sharing" target="_blank"> Resume </a></ul>
		      <li><b>Brandon Licup</b></li>
		      <ul><a href = "https://docs.google.com/document/d/1Arn6WqTvhQHMG2znPPxXcTd2Xcxd1aiSBhld653MNyU/edit?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://docs.google.com/document/d/1OFIdGXVLuzufcYfScpx-Vz0JUd6vMqO9/edit?usp=sharing&ouid=114849692149195937267&rtpof=true&sd=true" target="_blank"> Resume </a></ul>  
		    <!-- <ul><a href = "https://drive.google.com/file/d/1UjDv6ON-T1fM8i4LKNKjgVXTVsFk2qUI/view?usp=sharing" target="_blank"> Schedule </a></ul> -->

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
		      <li><b>Sophia Cho</b></li>
		      <ul><a href = "https://docs.google.com/document/d/1s7NLhiHjrm1MXN3fG4Edrh68LnpqhWR0kVQGd_R0_d8/edit?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://docs.google.com/document/d/1ff5CEqiPIbMUNTEmeHvLrTu1QYMhAmUS9MUiiR3ox5o/edit?usp=sharing" target="_blank"> Resume </a></ul>
		     <!-- <ul><a href = "https://drive.google.com/file/d/1aroZyS0F5yeUYQ4w7H3n7M-DB7twFQPn/view?usp=sharing" target="_blank"> Schedule </a></ul> -->
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
