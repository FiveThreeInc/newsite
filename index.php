<!DOCTYPE html>
<html>
    <head>
        <title>Five 3</title>

        <!--General Schemas-->
        <meta content="Team Five Three: Designing and developing rich web and mobile applications. " name="description">
        <meta name="viewport" content=" width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta content="text/html;charset=utf-8" http-equiv="Content-Type">

        <!--Google Schemas-->

        <!--Google Resources-->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

        <!--Host Resources-->
        <link rel="stylesheet" type="text/css" href="http://beta.fivethreeinc.com/css/default.css/"/>

        <!--TESTING-->
        <script type="text/javascript">

        </script>
        <style type="text/css">
            /*FOOTER*/
/*            footer {width:122px; height: 90px; position: relative;margin:0px auto;padding: 30px 0px;}
            footer a{background: transparent; border: 1px solid rgba(170,170,170,1.0);border-radius: 4px;display: inline-block;font-size: 0px;height: 30px; width: 30px; margin: 0px 4px 10px; float: left;}
            footer a.facebook{background: url('/img/fivethree.png') 0px -78px;  background-size: 117px 245px;}
            footer a.twitter{background: url('/img/fivethree.png') -29px -77px;  background-size: 117px 245px;}
            footer a.google{background: url('/img/fivethree.png') -60px -77px;  background-size: 117px 245px;}
            footer a:hover{background-color: rgb(211,211,211);border: 1px solid rgba(170,170,170,1.0);cursor: pointer;}
            footer span{display: block;height: 90px;text-align: center; font-family: 'helvetica-neue', sans-serif; font-size: 10px; letter-spacing: 0px; font-weight: 300;padding: 0px 5px;}*/

        </style>
    </head>
    <body>
        <header>
            <h1><a href="">Five Three</a></h1>
            <nav>
                <ul>
                    <li><a href="/news">news</a></li>
                    <li><a href="">team</a></li>
                    <li><a href="">work</a></li>
                    <li><a href="">products</a></li>
                    <li><a href="">games</a></li>
                    <li><a href="">contact</a></li>
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