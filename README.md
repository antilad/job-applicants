# Job Applicants
A project to display the applicants for a job vacancy using a design based upon the GOV.UK frontend.

## About
This project contains a mixture of HTML, CSS, JavaScript and PHP/MySQL. The template used throughout was built using the GOV.UK Prototype Kit v3.0.0 (https://github.com/alphagov/govuk_prototype_kit) and styled in line with GOV.UK conventions then modified with PHP coding to add functionality to connect to the MySQL database table containing the applicant data and read, display and search through this data.

## How to Run
+ Copy all files from repo into directory on webserver running PHP (version 5+)
+ Using a web browser navigate to index.php file within this directory

## Live Demo
A live demo of this project can be accessed at http://antilad.com/projects/job-applicants/

## Files and Folders
+ css - Directory containing all stylesheets and image files used within the project
+ js - Directory containing all JavaScript files used within the project
+ dbaccess.php - Credentials needed to access MySQL database
+ index.php - Main page, displays list of all applicants for the job
+ search.php - Search page, allows searching by name or candidate number
+ view.php - Page displaying all details for specific record based on candidate number

## Thanks
alphagov (GOV.UK Prototype Kit v3.0.0)
