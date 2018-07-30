<?php
include("include/Database.php");
include("include/config.php");
?>
<head>
    <meta charset="UTF-8"> 
    <title>LOJA</title>
    <style type="text/css">
    *{margin:0px;padding:0px;font-family:arial,tahoma;}
    nav{margin:0 auto;width:100%}
    #navMenu {;width:100%;background:#fff;display:table}
    #navMenu ul{font-weight:bold;}
    #navMenu ul li{list-style:none;float:left;margin:10px 10px 0px 10px}
    #navMenu ul li a{text-decoration:none;background:#808080;color:white;padding:5px 5px 0 5px; }
    #navMenu ul li a:hover{background:#404040}
    hr {display:inline-block;width:100%}
    #main{background:#ccc;display:table;height:100%;width:100%;padding:10px 20px}
    #tabelaGrid{ border-collapse:collapse;}
    #tabelaGrid th{ background:#000;color:#fff;padding:10px;}
    #tabelaGrid td{ padding:10px;border-bottom:1px solid black}
    </style>
</head>
<body>
    <nav id="navMenu">
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/inserir/">INSERIR</a></li>
            <li><a href="/listar/">LISTAR</a></li>
        </ul>
    </nav>
    <hr>
    <div id="main"><?php include($main); ?></div>
    
</body>