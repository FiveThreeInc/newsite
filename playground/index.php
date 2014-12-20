<!DOCTYPE html>
<html>
    <head>
        <title>Five 3 - Playground</title>

         <!--Import General Schemas-->
        <?php require_once('../siteobjects/mainmeta.php'); ?>

        <!--IMPORT CX SITE ICONS-->
        <?php require_once('../siteobjects/icons.php'); ?>

        <!--Google Schemas-->

        <!--Google Resources-->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!--Host Resources-->
        <link rel="stylesheet" type="text/css" href="http://beta.fivethreeinc.com/css/default.css/"/>

        <!--TESTING-->
        <script type="text/javascript">

        </script>
        <style type="text/css">
           
        </style>
    </head>
    <body>
        <header class="minilink">
            <h1 class="minilink"><a href="">Playground</a></h1>
            <nav>
                <ul>
                    <li><a href="/news">interfaces</a></li>
                    <li><a href="/team">objects</a></li>
                    <li><a href="/work">tools</a></li>
                    <li><a href="/products">forms</a></li>
                    
                </ul>
            </nav>
        </header>
        <footer>
            <a href="https://www.facebook.com/FiveThreeInc" class="facebook">facebook</a>
            <a href='https://twitter.com/FiveThreeInc' class="twitter">twitter</a>
            <a class="google">google plus</a>
            <span>Copyright &copy; <?php
                ini_set('date.timezone', 'Europe/London');
                $thisYear = date('Y');
                echo $thisYear
                ?> <br />Team Five 3 <br />All Rights Reserved. </span>
        </footer>
    </body>
</html>