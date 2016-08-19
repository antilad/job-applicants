<!DOCTYPE html>
<!--[if lt IE 9]><html class="lte-ie8" lang="en"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>
  Demo Project
</title>

    <!--[if gt IE 8]><!--><link href="css/govuk-template.css" media="screen" rel="stylesheet" type="text/css"><style type="text/css">
:root #content > #center > .dose > .dosesingle,
:root #content > #right > .dose > .dosesingle
{ display: none !important; }</style><!--<![endif]-->
    <link href="css/govuk-template-print.css" media="print" rel="stylesheet" type="text/css">

    <!--[if gte IE 9]><!--><link href="css/fonts.css" media="all" rel="stylesheet" type="text/css"><!--<![endif]-->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
  <link href="css/application.css" media="screen" rel="stylesheet" type="text/css">


  </head>

  <body class="js-enabled"><script id="__bs_script__">//<![CDATA[
    document.write("<script async src='/browser-sync/browser-sync-client.2.14.0.js'><\/script>".replace("HOST", location.hostname));
//]]></script><script async src="js/browser-sync-client.js"></script>

    <script>document.body.className = ((document.body.className) ? document.body.className + ' js-enabled' : 'js-enabled');</script>

    <?php
	// Import credentials to access database
    require_once('dbaccess.php');
	
	// Take id number from URL with GET request and assign to variable
	$idNumber = $_GET['id'];

    // Connect to the database
    $dbaccess = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    // Fetch record with matching candidate number from database
    $query = "SELECT * FROM jobApplicants WHERE idNumber=$idNumber";
    $data = mysqli_query($dbaccess, $query);
    ?>

    <div id="skiplink-container">
      <div>
        <a href="#content" class="skiplink">Skip to main content</a>
      </div>
    </div>

    <div id="global-cookie-message">
      
        
  <p>This project uses assets from the <a href="https://github.com/alphagov/govuk_prototype_kit/">GOV.UK Prototype Kit v3.0.0</a> but is not affiliated with GDS in any way.</p>

      
    </div>

    
    <header role="banner" id="global-header" class="
  with-proposition
">
      <div class="header-wrapper">
        <div class="header-global">
          <div class="header-logo">
            <a href="https://www.gov.uk/" title="Go to the GOV.UK homepage" id="logo" class="content">
              <img src="images/gov.png" alt="" height="31" width="35"> GOV.UK
            </a>
          </div>
          
        </div>
        
  <div class="header-proposition">
  <div class="content">
    <a href="#proposition-links" class="js-header-toggle menu">Menu</a>
    <nav id="proposition-menu">
      <a href="index.php" id="proposition-name"> Demo Project </a>
    </nav>
  </div>
</div>


      </div>
    </header>
    

    

    <div id="global-header-bar"></div>

    

<main id="content" role="main">

  <div class="grid-row">
    <div class="column-two-thirds">

      <h1 class="heading-xlarge">
         Applicant Details 
      </h1>

      <?php
	  // Check if any matching records are found
      if(mysqli_num_rows($data)>0) {
        // Loop through array
	    while ($row = mysqli_fetch_array($data)) {
		  // Display all applicant details
		  echo '<h2 class="heading-large">' . $row['firstName'] . ' ' . $row['lastName'] . '</h2><div class="grid-row">
    <div class="column-two-thirds"><p>Candidate Number: ' . $row['idNumber'] . '</p><p>Email Address: ' . $row['email'] . '</p><p>Phone Number: ' . $row['phoneNumber'] . '</p></div><div class="column-third"><p>Address:<br />' . $row['address1'] . '<br />' . $row['address2'] . '<br />' . $row['address3'] . '<br />' . $row['postCode'] . '</p></div></div><p>Work Summary:<br />' . $row['workSummary'] . '</p>';
	  }
	    // Close list tag
	    echo '</ul>';
	  
	    mysqli_close($dbaccess);
	  }
	  else {
		// If no records are found give an error message
		echo '<p>Invalid candidate number.</p>';
	  }
      ?>

      <h2 class="heading-medium">Further steps</h2>

      <p>You can return to the <a href="index.php">list of applicants</a>.</p>

      <p>Alternatively you can use the Applicant Search function to look for a specific name or candidate number.</p>

    </div>
    <div class="column-third">

      <aside class="govuk-related-items" role="complementary">
        <h2 class="heading-medium" id="subsection-title">Applicant Search</h2>
        <nav role="navigation" aria-labelledby="subsection-title">
          <div class="form-group">
            <form id="applicantSearch" method="post" action="search.php">
              <p class="font-xsmall">Insert your query (name or candidate number) into the box and press Search</p>
              <input type="text" class="form-control" id="searchTerm" name="searchTerm">
          </div>
          <div class="form-group">
            <input type="submit" class="button" value="Search">
            </form>
          </div>
        </nav>
      </aside>

    </div>
  </div>

</main>



    <footer class="group js-footer" id="footer" role="contentinfo">

      <div class="footer-wrapper">
        

        <div class="footer-meta">
          <div class="footer-meta-inner">
            

            <div class="open-government-licence">
              <p class="logo"><a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/" rel="license">Open Government Licence</a></p>
              
                <p>All content is available under the <a href="https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/" rel="license">Open Government Licence v3.0</a>, except where otherwise stated</p>
              
            </div>
          </div>

          <div class="copyright">
            <a href="http://www.nationalarchives.gov.uk/information-management/re-using-public-sector-information/copyright-and-re-use/crown-copyright/">© Crown copyright</a>
          </div>
        </div>
      </div>
    </footer>

    <div id="global-app-error" class="app-error hidden"></div>

    <script src="js/govuk-template.js"></script>

    
  <!-- Javascript -->
<script src="js/details.js"></script>
<script src="js/jquery-1.js"></script>
<script src="js/selection-buttons.js"></script>
<script src="js/application.js"></script>
  <!-- GOV.UK Prototype kit v3.0.0 -->

  

</body></html>
