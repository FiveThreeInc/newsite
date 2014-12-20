<!DOCTYPE html>
<html>
    <head>
        <title>Five 3 - Contact</title>

        <!--General Schemas-->
        <meta content="Team Five Three: Designing and developing rich web and mobile applications. " name="description">
        <meta name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">

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
            <h1 class="minilink"><a href="http://beta.fivethreeinc.com">Contact</a></h1>
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