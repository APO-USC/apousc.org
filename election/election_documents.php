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
		<!--     no applicants     --> 
            </ul> 

          <h3>Co-VP of Membership</h3>
	    <ul>
		<!--     no applicants     --> 
		</ul>

          <h3>VP of Fellowship</h3>
	    <ul>
		<li><b>Ethan Afflick</b></li>
              	<ul><a href = "https://drive.google.com/file/d/15vRnCwstCZAa4j0-qZxkE0JiY1tiGaTT/view?usp=sharing"> Application </a></ul>
              <!-- 	<ul><a href = "https://drive.google.com/file/d/1BPEAvS0oy6AtIZeOblPIN8F-9EDbl0pP/view?usp=sharing" target="_blank"> Resume </a></ul>  --> 
	      <!-- 	<ul><a href = "https://drive.google.com/file/d/1g7sJJ5YCExKYLHEfuLj_FqBTHJIZAD_Y/view?usp=sharing" target="_blank"> Schedule </a></ul>  --> 
	    </ul>

          <h3>Co-VP of Finance</h3>
	      <ul>
		    <!--     no applicants     -->   
             </ul>

          <h3>VP of Communications</h3>
		<ul>
              		    <!--     no applicants     -->   
               </ul>
            
                  
          <h3>Interchapter Chair</h3>
           	<ul>
               <li><b>Ayezah Bagro</b></li>
              <ul><a href = "https://drive.google.com/file/d/1opvu89jGyN4si_kx76nfgBWR6F97X8Va/view?usp=sharing" target="_blank"> Application </a></ul>
              <ul><a href = "https://drive.google.com/file/d/1J065bP6XbuVPagnB3eKAELIfzfcy1XtN/view?usp=sharing" target="_blank"> Resume </a></ul>
	    	<ul><a href = "https://drive.google.com/file/d/1xnQjR1LL4KhpOf3fX1RO7ZsXwrh0uehQ/view?usp=sharing" target="_blank"> Schedule </a></ul> 
            </ul> 

<h3>Diversity and Inclusion Chair</h3>
		<ul>
		      <li><b>Jonah Vu</b></li>
		      <ul><a href = "https://drive.google.com/file/d/1X9di8s3cyJpBGL0Yu36VKcTSj9UkIEl3/view?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1kKeVXuo7uNm89UYR4fspLuLf1Uh2fghl/view?usp=sharing" target="_blank"> Resume </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1zK3zsSfW7lxwIeJ_AeFDilaOjzOYMu-p/view?usp=sharing" target="_blank"> Schedule </a></ul>
		      <li><b>Devin Hayden</b></li>
		      <ul><a href = "https://drive.google.com/file/d/1ot-4qQaMFsu_Lb0cQt-5aD9K6VBmoith/view?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/17Kv2gqs6Qo52c7gm49D89O6Hy3qfXQzS/view?usp=sharing" target="_blank"> Resume </a></ul>
		      <li><b>Brigitte Buntin</b></li>
		      <ul><a href = "https://drive.google.com/file/d/1WeY9ojljnjufcBgZ9gEz4CvBMRtR369A/view?usp=sharing" target="_blank"> Application </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1XTyPDwnubMfJeM6oFFgoIFK3fD7WBwaE/view?usp=sharing" target="_blank"> Resume </a></ul>
		      <ul><a href = "https://drive.google.com/file/d/1gz48GCrQvBD39rgYbZEpgfsaIBeE4LVm/view?usp=sharing" target="_blank"> Schedule </a></ul>
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
