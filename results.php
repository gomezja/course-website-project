<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Team 09 - Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar box-shadow"  id="nav">
        <div class="nav-item">
            <a class="nav-brand" id="active" href="index.html">Team 09</a>
        </div>

        <div class="nav-content">
            <div class="nav-item">
                <a class="nav-link" href="about.html">About</a>
            </div>

            <div class="nav-item">
                <div class="nav-dropdown">
                    <a class="dropdown-btn" href="#" onclick="dropdownClicked()">
                        Project<i class="fas fa-caret-down fa-sm" id="dropdown-icon" ></i>
                    </a>
                    <div class="dropdown-content" id="dropdown">
                        <a href="files/ResearchAndProposal.pdf">Research Paper &amp; Proposal</a>
                        <a href="files/ProgressReport.pdf">Progress Report</a>
                        <a href="files/ProjectPresentation.pdf">Project Oral Presentation</a>
                        <a href="files/FinalProjectReport.pdf">Final Project Report</a>
                        <a href="http://athena.ecs.csus.edu/~mei/177/assignment.html">Project Instructions</a>
                    </div>
                </div>
            </div>

            <div class="nav-item">
                <a class="nav-link" href="datamart.html">Data Mart</a>
            </div>
            <div class="nav-item">
                <a class="nav-link" href="testing.html">Testing Page</a>
            </div>
        </div>

        <!-- icon displays only when small screen size"-->
        <a class="nav-icon" id="ham" href="#" onclick="hamburgerIconClicked()">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </a>
    </div>
	
	<div class="section text-center">
		<h1 class="section-title text-center">Data Mart</h1>
	</div>
		
    <!-- footer -->
    <div class="footer">
        <div class="row">
            <div class="col-3 offset-1">
                <div class="footer-link">
                    <a href="index.html">Team 09</a>
                </div>

                <div class="footer-topic mt-2">Members:</div>
                <div class="footer-info">Jesus Gomez, Jammy Loeur</div>

                <div class="footer-topic mt-2">Created:</div>
                <div class="footer-info">SPRING 2017</div>
            </div>

            <div class="col-3 offset-2 hide">
                <div class="footer-link">
                    <a href="about.html">About</a>
                    <a href="datamart.html">Data Mart</a>
                    <a href="testing.html">Testing Page</a>
                </div>
            </div>

            <div class="col-3 hide">
                <div class="footer-topic">Project</div>

                <div class="footer-sublink">
                    <a href="files/ResearchAndProposal.pdf">Research Paper &amp; Proposal</a>
                    <a href="files/ProgressReport.pdf">Progress Report</a>
                    <a href="files/ProjectPresentation.pdf">Project Oral Presentation</a>
                    <a href="files/FinalProjectReport.pdf">Final Project Report</a>
                    <a href="http://athena.ecs.csus.edu/~mei/177/assignment.html">Project Instructions</a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="myScripts.js"></script>
</body>
</html>