
<h2 style="color:black;font-family:verdana;">Welcome to the <em>A Kavi Websites Production</em> Client Status Portal</h2> 
<p>Note: Scheduled Networking Maintenance on Digital Ocean <br>
This will be expected to take place on <br>
Start: 2021-01-18 22:00 UTC <br>
End: 2021-01-18 23:00 UTC <br>
<b>No outages are expected</b>. Resource Management will be disabled <br>
however connectivity will not be impacted. <br>
The servers impacted by this maintenance will be <br>
Web Server 2 mySQL/HTTPS and Web Server 3 mySQL/HTTPS<br>
</p>

<?php

$output = shell_exec('python3 /home/pi/status/mSQLWB1.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">mySQL Web Server 1 Database Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">mySQL Web Server 1 Database Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';

}

$output = shell_exec('python3 /home/pi/status/mSQLWB2.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">mySQL Web Server 2 Database Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">mySQL Web Server 2 Database Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';
}

$output = shell_exec('python3 /home/pi/status/mSQLWB3.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">mySQL Web Server 3 Database Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">mySQL Web Server 3 Database Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';

}



$output = shell_exec('python3 /home/pi/status/mSQLWB1LOCAL.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">mySQL Web Server 1 LOCAL Access Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">mySQL Web Server 1 LOCAL Access Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';

}




$output = shell_exec('python3 /home/pi/status/80WB1LOCAL.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">HTTP Web Server 1 LOCAL Access Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">HTTP Web Server 1 LOCAL Access Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';

}



$output = shell_exec('python3 /home/pi/status/443WB1.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">HTTPS Web Server 1 Database Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">HTTPS Web Server 1 Database Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';
}



$output = shell_exec('python3 /home/pi/status/443WB2.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">HTTPS Web Server 2 Database Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">HTTPS Web Server 2 Database Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';
}

$output = shell_exec('python3 /home/pi/status/443WB3.py');
if(strpos($output, "SUCCESS") !== false){
    echo ' 
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:green;font-family:verdana;">HTTPS Web Server 3 Database Operating</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="checkmark.png">
    </div>

    </div>

    ';
} else{
    echo '
    <div id="container" style="white-space:nowrap">
    <div id="texts" style="display:inline; white-space:nowrap;"> 
        <p style="color:red;font-family:verdana;">HTTPS Web Server 3 Database Currently Down</p> 
    </div>
    <div id="image" style="display:inline;">
        <img width="25" src="xmark.png">
    </div>

    </div>

    ';

}
?>
<p>Results are updated upon each refresh. To refresh now press the button below</p>
<form action="index.php">
    <input type="submit" value="Update Results" />
</form>
<br>
<br>
<h4> Last Incident Report </h4>
<p> No incidents have occured. 100% Uptime </p>
<br>
<br>
<br>
<br>
<p> Thank you for visiting this status portal, if there are any issues, please contact Kavi immediately!</p>
<p> <a href="https://kavipatel.xyz">Return to A Kavi Website Production Website</a> </p>
<p>All Rights Reserved, A Kavi Websites Production</p>


