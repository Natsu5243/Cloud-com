<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" type="text/css" href="styles/StyleSheet.css"/>
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                
            </div>
            <nav id="navigation">
                <ul id="nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Menu</a></li>
                    <li><a href="Sign Up Form.php">Sign Up</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </nav>
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            <div id="sidebar">
                
            </div>
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
    </body>
</html>
