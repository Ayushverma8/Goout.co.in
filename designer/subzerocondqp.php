<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <script type='text/javascript' src='https://cdn.sdslabs.co.in/cdnjs/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
    <link rel="stylesheet" href="https://cdn.sdslabs.co.in/css/css/bootstrap/1.4.0/bootstrap.min.css">
    <title>Application Title | SDSLabs</title>
    <meta name="author" content="Team SDSLabs">
	<title>SDSLabs Accounts</title>
	<link rel="stylesheet" href="https://sdslabs.co.in/lollipop/topbar.css">
	<script src="https://sdslabs.co.in/pipeline/api/v4/api.js" type="text/javascript"></script>
    <script src="script.js" type="text/javascript">
	$(document).ready(function(){
		topbar.showTopbar();
	});
    </script>
    <style type="text/css">
      /* Override some defaults */
      html, body {
		font-family: 'Open Sans',Arial, Helvetica, sans-serif;
        background: #F2F2FF !important;
      }
      body {
        padding-top: 30px; /* 40px to make the container go all the way to the bottom of the topbar */
      }
      .container > footer p {
        text-align: center; /* center align it with the container */
      }
      .container {
        width: 920px; /* downsize our container to make the content feel a bit tighter and more cohesive. NOTE: this removes two full columns from the grid, meaning you only go to 14 columns and not 16. */
      }

      /* The white background content wrapper */
      .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; /* negative indent the amount of the padding to maintain the grid system */
        -webkit-box-shadow: 0 5px 10px rgba(0,0,0, 0.3);
		   -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
				box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        border-left: 1px solid #D2D2D2;
		border-right: 1px solid #D2D2D2;
		border-bottom: 1px solid #D2D2D2;
      }

      /* Page header tweaks */
      .page-header {
        background-color: #f5f5f5;
        padding: 20px 20px 10px;
        margin: -20px -20px 20px;
    }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <div class="page-header">
          <h1>Application Title<small></small></h1>
        </div>
        <div class="row">
          <div class="span14">
<?php
	error_reporting(E_ALL);
	ini_set('display_errors','On');
  $l=mysql_connect('localhost','root','move_forward_quickly');
  if(mysql_error($l)){
    die('An error occured connecting to db');
  }
  else: ?>
  <?
    mysql_select_db('sdsprac_application');
    $q=mysql_query("SELECT name,branch,enroll,email,phone,file FROM designers",$l);
    ?>
     <h3>Designers</h3><br>
     <table>
     <tr><th>Name</th><th>Branch</th><th>Enrollment No</th><th>Email</th><th>Phone number</th><th>File</th></tr></table>
     <?     
    while($p=mysql_fetch_array($q))
    { ?>
      <tr><td><?=$p['name']?></td>
      <td><?=$p['branch']?></td>
      <td><?=$p['enroll']?></td>
      <td><?=$p['email']?></td>
      <td><?=$p['phone']?></td>
      <td><a href='http://www.sdslabs.co.in/pipeline/application/'+<?substr($p[5],0)?>>Download</a></td></tr>
      <?
    }?>
      </table>
    
      
    <?
    mysql_close($l);
    ?>
             
	    </div>
        </div>
      </div>
    </div> <!-- /container -->
</html>
