<?php


function pageHeader()
{
    ?>
    !DOCTYPE html>
        <html>
            <head>
                <meta charset="UTF-8">
                <title></title>
            </head>
            <body>
    <?php
    // Call the navigation menu
    navigationMenu();
}   

function pageFooter()
{
    ?>      Copyright &copy; Byron Baron (2311617) <?php echo date("Y"); ?>
            </body>
        </html>
    <?php
}

function navigationMenu()
{
    echo "<a href='index.php'>Home</a><br>";
    echo "<a href='buying.php'>Buying</a><br>";
    echo "<a href='orders.php'>Orders</a><br>";
}
    
