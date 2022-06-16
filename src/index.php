
<html>
<head>
    <title>LFI to RCE</title>
</head>
<body>
<div id="main">
    <div class="container">
        <div class="row">
            <h1>CTF</h1>
        </div>
        <div class="row">
            <p class="lead">
                Do some bypass to find the flag.<br />
            </p>
        </div>
    </div>
</div>
<div class="container">

    <?php
    $f='ctf.txt';
    echo "<a class=\"btn btn-primary\" href=\".?file=$f\" /> What is CTF? </a><br><br>";

    if($file=$_GET['file']){
        $file=str_replace("../","",$file);
        if($file!="../index.php"){
            include('files/'.$file);
        }
    }
    ?>
    
    <!--Hint: Find the flag in the root directory--!>
    <!--For ease of use, the webserver will reset every minute.--!>

</div>
<script type="text/javascript" src="static/js/bootstrap.min.js"></script>
</body>
</html>

<?php
include ("footer.php");
?>