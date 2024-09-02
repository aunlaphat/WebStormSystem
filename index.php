<?php
    if(isset($_GET['controller'])&&isset($_GET['action']))
    {
         $controller = $_GET['controller'];
         $action = $_GET['action'];
    }else{
          $controller = 'pages';
          $action = 'home';
    }
?>

<html>
<head>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai+Looped:wght@600&family=IBM+Plex+Sans+Thai:wght@700&display=swap" rel="stylesheet">


    <style>
        body {
            width: 100%;
            margin: auto;
            display: table-cell;
            text-align: center;
            background-image: linear-gradient(45deg, rgba(255, 148, 205, 1) 0%, rgba(194, 245, 236, 1) 21%, rgba(255, 138, 224, 1) 45%, rgba(247, 183, 141, 1) 62%, rgba(247, 143, 125, 1) 74%, rgba(248, 89, 182, 1) 100%);
            font-family: 'IBM Plex Sans Thai', sans-serif;
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
        }
        .test {
            width: 25%;
            margin: auto;
            display: table-cell;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'IBM Plex Sans Thai', sans-serif;
            font-family: 'IBM Plex Sans Thai Looped', sans-serif;
        }

        th, td {
            padding: 5px; //ความสูงต่ำของตาราง
            text-align: center;
            border-bottom: 2.5px solid #ddd;
            border-top: 2.5px solid #ddd;
            border-left: 2.5px solid #ddd;
            border-right: 2.5px solid #ddd;
        }
        tr:hover {background-color: #ffc14d;} //สีเวลาเม้าโดนบรรทัดจะขึ้นสี
        tr:nth-child(odd) {background-color: Pink;}

        table.center {
            margin-left: auto; 
            margin-right: auto;
            background-color: #FFFFFF;
        }

        .button {
        appearance: none;
        background-color: #82f2da;
        border-radius: 40em;
        border-style: none;
        box-shadow: #ADCFFF 0 -12px 6px inset;
        box-sizing: border-box;
        color: #000000;
        cursor: pointer;
        display: inline-block;
        font-family: 'IBM Plex Sans Thai', sans-serif;
        font-family: 'IBM Plex Sans Thai Looped', sans-serif;
        font-size: 0.25rem;
        font-weight: 500;
        letter-spacing: -.40px;
        margin: 0;
        outline: none;
        padding: 1rem 1.3rem;
        quotes: auto;
        text-align: center;
        text-decoration: none;
        transition: all .15s;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        }

        
        .button:hover {
        background-color: #FFC229;
        box-shadow: #FF6314 0 -6px 8px inset;
        transform: scale(1.125);
        }

        .button:active {
        transform: scale(1.025);
        }

        @media (min-width: 768px) {
        .button {
            font-size: 1.5rem;
            padding: .75rem 2rem;
        }
        }

        .h3{
            color: #123455;
        }
              
        .button-32 {
            background-color: #000000 ;
            border-radius: 13px;
            color: #FFFFFF;
            cursor: pointer;
            font-weight: bold;
            padding: 5px 5px;
            text-align: center;
            transition: 100ms;
            width: 5%;
            box-sizing: border-box;
            border: 0;
            font-size: 14px;
            user-select: none;
            -webkit-user-select: none;
            touch-action: manipulation;
        }

        .button-32:not(:disabled):hover,
        .button-32:not(:disabled):focus {
        outline: 0;
        background: #FF5733;
        box-shadow: 0 0 0 2px rgba(0,0,0,.2), 0 3px 8px 0 rgba(0,0,0,.15);
        }

        .button-32:disabled {
        filter: saturate(0.2) opacity(0.5);
        -webkit-filter: saturate(0.2) opacity(0.5);
        cursor: not-allowed;
        }

        input{
            padding: 3px;
                    border-radius: 6px;
                    font-size: 16px;
                    background: #fbfbfb;
                    border: 1px solid transparent;
                    height: 22px;
                    box-shadow: 0 0 0 1px #dddddd, 0 2px 4px 0 rgb(0 0 0 / 7%), 0 1px 1.5px 0 rgb(0 0 0 / 5%);
                    :focus{
                        border: 2px solid #000;
                        border-radius: 4px;
                    } 
        }

        select {
            appearance: #fff;
            background-color: #fcfcfd;
            border: 2px solid transparent;
            padding: 0 1em 0 0;
            margin: 0.5%;
            width: 10%;
            font-family: inherit;
            font-size: inherit;
            cursor: inherit;
            line-height: inherit;

        }

        
</style>
</head>
<body >

    <?php echo "controller = ". $controller.", action = ". $action; ?>

    <br >
    <br><button class="button"><a href="?controller=pages&action=home">Home</a></button><br>
    <br>
    <button class="button"><a  href="?controller=name_of_storm&action=index"> ระบบรายชื่อพายุ </a></button>
    <button class="button"><a  href="?controller=country&action=index"> รายชื่อประเทศ </a></button>
    <button class="button"><a  href="?controller=name_of_another&action=index"> ชื่อทดแทน </a></button>
    <button class="button"><a  href="?controller=column&action=index"> ชุดในบัญชีรายชื่อ </a></button>
    <button class="button"><a  href="?controller=status&action=index"> สถานะชื่อ </a></button>
    <button class="button"><a  href="?controller=summary&action=index"> สรุประบบรายชื่อพายุ </a></button>
    <br>
    <br>

    <?php require_once("./routes.php"); ?>
</body>
</html>