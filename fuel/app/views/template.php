<?php
session_start();
?>
<!DOCTYPE html>

<html>
<body>
<div id="wrapper">
    <div id="header">
        <div id="logo">
         <?php echo Asset::img('logo.png'); ?>
        </div>    
    </div>
</div>
</div>
<div id="content"></div>
</body>
</html>     

<!DOCTYPE html>
<html>
<head>
<title>DBTC Announcements</title>
<?php echo Asset::css('web_style.css'); ?>
</head>

<body>	
     <div id="wrapper">
        <div id="menu">
        	<nav id="nav_wrap">
            	<div id="navigation">
                	<ul class="top-level">
                        <li>
                        <?php
                        if(isset($_SESSION['user'])){
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;|Welcome '; echo $_SESSION['user']; echo '| <a href="logout.php">Logout</a> ';
                }else{
                    echo '&nbsp;&nbsp;You are not logged in.';
                }
            ?>
        </li>
           
                    	<li><a href="index.php">Home</a></li>
                        <li><a href="/menu/login">Login</a></li>
                        <li><a href="/menu/register">Register</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="/menu/sao">Annoucements</a>
                        	<ul class="sub-level">
                            	<li><a href="/menu/student_affairs">Student Affairs Office</a></li>
                                <li><a href="#">Guidance Office</a></li>
                                <li><a href="#">Dean's Office</a></li>
                                <li><a href="#">Faculty</a></li>
                                <li><a href="#">Rector's Office</a></li>
                                <li><a href="#">BSECE</a></li>
                                <li><a href="#">BSIE</a></li>
                                <li><a href="#">BSIT</a></li>
                                <li><a href="#">BSME</a></li>
                                <li><a href="#">BSTE</a></li>
                            </ul>
                        </li>
                     </ul>
                </div>
            </nav>

        </div>
        <div id="content"><?php echo $content; ?></div>
             <div id="footer">&copy; Edgar C. Williams 2016 IT19 Capstone Project Don Bosco Technical College Cebu</div>
</div>

</div>
</body>
</html>

