<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="img/stficon.png" type="image/ico" rel="shortcut icon">


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/montserrat.css" rel="stylesheet" type="text/css">
    <link href="fonts/lato.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
                 <nav class="navbar navbar-default navbar-fixed-top">
                   <div class="container">
                      <!-- Brand and toggle get grouped for better mobile display -->
                 <div class="navbar-header">
                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                              <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand" href="#page-top">STF</a>
                     </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                             <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  
                    
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="teams.php">Teams</a>
                    </li>
                    <?php
                                if(isset($_SESSION['login_user'])){?>
                                    <li>
                                        <a href="Students1.php">Students</a>
                                    </li>
                                <?php }?>

                    <?php

                                if(isset($_SESSION['login_user'])){

                                    $post=(string)($_SESSION['des']);

                                if(strcmp($post,"admin") == 0 || strcmp($post,"coach") == 0){ ?>
                                    <li>
                                        <a href="Coaches2.php">Coaches</a>
                                    </li>
                                <?php } } ?>             

                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                         <a href="contact.php">Contact</a>
                    </li>
                    <?php 
                        if(isset($_SESSION['login_user'])){  ?>
                            <li>
                                <a href="logout.php">logout</a>
                            </li>
                            <li>
                                    <a  style="color: rgb(234, 216, 20);">Hello <?php echo $_SESSION['login_user']; ?></a>
                            </li>

                        <?php } else{?>
                            <li>
                                <a href="login.php">Login</a>    
                            </li>

                    <?php }?>
                             
                        </ul>
                     </div>
                    <!-- /.navbar-collapse -->
                 </div>
                <!-- /.container -->
             </nav>
    
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#page-top">STF</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                  
                    
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="teams.php">Teams</a>
                    </li>
                    <?php
                                if(isset($_SESSION['login_user'])){?>
                                    <li>
                                        <a href="Students1.php">Students</a>
                                    </li>
                                <?php }?>

                    <?php

                                if(isset($_SESSION['login_user'])){

                                    $post=(string)($_SESSION['des']);

                                if(strcmp($post,"admin") == 0 || strcmp($post,"coach") == 0){ ?>
                                    <li>
                                        <a href="Coaches2.php">Coaches</a>
                                    </li>
                                <?php } } ?>             

                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                         <a href="contact.php">Contact</a>
                    </li>
                    <?php 
                        if(isset($_SESSION['login_user'])){  ?>
                            <li>
                                <a href="logout.php">logout</a>
                            </li>
                            <li>
                                    <a  style="color: rgb(234, 216, 20);">Hello <?php echo $_SESSION['login_user']; ?></a>
                            </li>

                        <?php } else{?>
                            <li>
                                <a href="login.php">Login</a>    
                            </li>

                    <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
   
</body>
</html>    