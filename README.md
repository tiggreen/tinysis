Tinysis
=======

A Student Information Service for the Secure Data Management class at RIT. 

Readme file. The documentation for installation and usage of TinySIS. 

In order to install and use TinySIS you have to setup an Apache server which supports PHP and MySQL. TinySIS is written using PHP Codeigniter MVC framework (http://ellislab.com/codeigniter) for the server side and uses HTML, Javascript libraries for the client side. 
Below you can find a step-by-step guide to install and use TinySIS. 

1. Make sure that the server you want to install TinySIS on supports Apache and MySQL. If no, then install them. If you want to run TinySIS on your machine (localhost) we recommend you to use MAMP/WAMP  (download link is here - https://www.mamp.info/de/) which installs Apache, PHP and MySQL triple on your local machine. After the installation you can access the server on http://locahost. Follow the instructions on the website. 

2. TinySIS is open source and available for download at  https://github.com/thakobyan/tinysis.  Download the zip file from GitHub. 

3. The database .sql file which has already a test data in it is located in the /database folder.  

4. Upload the source code into the /htdocs directory of your server. 

5. Create a new MySQL database in your server and name it tinysis. Import tinysis_db_test.sql file into the tinysis database. 

6. Connect the application to the database by setting the database configuration (connection credentials) in the /application/config/database.php file. Depending the user/password you have already set  for the MySQL server you need to change username/password in the file.  

7. Since there are 4 types of user - student / instructor / admin / super user, we provide you 4 credentials so you can enter the system to see all  features for each user type. 

Student role - username: pg3467@rit.edu password: peter 
Instructor role - username: jpalis@rit.edu password: james
Admin role - username: tigerwoods@rit.edu password: tigerwoods
Super user role - username: miaphipps@rit.edu  password: letmein

You are all set to run TinySIS. Thank you for your interest. 

