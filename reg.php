<?php
/** 
 * Created by HelloEyakub. 
 * User: Eyakub Sorkar    
 */  
session_start();
require_once('db_conection.php');

?>

<!DOCTYPE html> 
<html> 
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.3.6-dist\css\bootstrap.css">  
        <title>Registration</title>  
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
                            <h3 class="panel-title">Sign Up</h3>  
                        </div>  
                        <div class="panel-body">  
                            <form role="form" method="post" action="welcome.php">  
                                <fieldset>  

                                    <div class="form-group"  >  
                                        <input class="form-control" placeholder="E-mail" name="email" type="" autofocus> 
                                    </div>  
                                    <div class="form-group"  >  
                                        <input class="form-control" placeholder="Username" name="username" type="" autofocus> 
                                    </div>  
                                    <div class="form-group"  >  
                                        <input class="form-control" placeholder="Password" name="email" type="" autofocus> 
                                    </div>

                                    <button class="btn btn-lg btn-success btn-block" name="login" type="submit">Sign Up</button><br>
                                    
                                </fieldset>  
                            </form>  
                            
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  


    </body>  

</html>  

