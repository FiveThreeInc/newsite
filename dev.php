<!DOCTYPE html>
<html>
    <head>
        <title>Five 3</title>

         <!--Import General Schemas-->
        <?php require_once('./siteobjects/mainmeta.php'); ?>

        <!--IMPORT CX SITE ICONS-->
        <?php require_once('./siteobjects/icons.php'); ?>

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
        <header>
            <h1><a href="">Five Three</a></h1>
            <nav>
                <ul>
                    <li><a href="/news">news</a></li>
                    <li><a href="/team">team</a></li>
                    <li><a href="/work">work</a></li>
                    <li><a href="/products">products</a></li>
                    <li><a href="/games">games</a></li>
                    <li><a href="/contact">contact</a></li>
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