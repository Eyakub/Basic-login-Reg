<?php
/** 
 * Created by HelloEyakub. 
 * User: Eyakub Sorkar    
 */  
session_start();
require_once('db_conection.php');
//phpinfo();
//include 'db_conection.php';
?>

<!DOCTYPE html> 
<html> 
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.css">  
        <title>Login</title>  
    </head>  
    <style>  
        .login-panel {  
            margin-top: 150px;
        }  
    </style>  

    <body background="images/back.jpg">  


        <div class="container">  
            <div class="row">  
                <div class="col-md-4 col-md-offset-4">  
                    <div class="login-panel panel panel-success">  
                        <div class="panel-heading">  
                            <h3 class="panel-title">Sign In</h3>  
                        </div>  
                        <div class="panel-body">  
                            <form role="form" method="post" action="login.php">  
                                <fieldset>  
                                    <div class="form-group"  >  
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus> 
                                    </div>  

                                    <div class="form-group">  
                                        <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
                                    </div>  

                                    <button class="btn btn-lg btn-success btn-block" name="login" type="submit">Login</button><br>
                                    <a href="reg.php"><button type="button" class="btn btn-lg btn-success btn-block">Register</button></a><br>
                                </fieldset>  
                            </form>  
                            <?php

                            if (isset($_POST['login'])) {
                                $email = mysqli_real_escape_string($dbcon, $_POST['email']);
                                $password = mysqli_real_escape_string($dbcon, $_POST['password']);
                                $query = "select * from login where email='$email' and password='$password' ";
                                //echo $query;
                                $query_run = mysqli_query($dbcon, $query);
                                //echo mysql_num_rows($query_run);
                              //  if ($query_run) {
                                    if (mysqli_num_rows($query_run) > 0) {
                                        if($row = mysqli_fetch_array($query_run, MYSQLI_ASSOC));

                                        $_SESSION['email'] = $email;
                                        $_SESSION['password'] = $password;
                                        echo "<script>window.open('welcomee.php','_self')</script>"; 
                                        //header("Location: welcomee.php?loginsuccess");
                                        exit();
                                    } else {
                                    	header("Location: login.php?loginfailed");
                                        echo '<script type="text/javascript">alert("No such User exists. Invalid Credentials")</script>';
                                        exit();
                                    }
                               // } else {
                               //     echo '<script type="text/javascript">alert("Database Error")</script>';
                                //}
                            } else {
                                
                            }
                            ?>
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  


    </body>  

</html>  

