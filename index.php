<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Reporting</title>
    <link rel="stylesheet" href="main.css">
    <script src="script.js"></script>
    
</head>
<body>
</head>
<body>
    <nav class="rootnav">
        <li class="rootnavhome"><a href="index.html">Home</a></li>
        <li><a href="safety.html">Safety</a></li>
        <li><a href="amatrol.html">Amatrol</a></li>
        <li><a href="gdt.html">GD&T</a></li>
        <li><a href="onboarding.html">Onboarding</a></li>
        <li><a href="timereport.html" style="text-decoration: underline;">Time</a></li>    
        </nav>
        <p></p>
    <button class="courselistbtn" onclick="displaylist()">Course List</button>
    <div id="myDIV" style="display: none;">
        <table class="courselist">
            <tr>
                <th>Lubrication</th>
            </tr>
            <tr>
                <td>E121</td>
                <td>Central Lubrication: Operate/Install/Tune/Maintain/Troubleshoot</td>
            </tr>
            <tr>
                <th>Hydraulics</th>
            </tr>
            <tr>
                <td>E205</td>
                <td>Hydraulic Systems 1: Basic</td>
            </tr>
            <tr>
                <td>E206</td>
                <td>Hydraulic Systems 2: Intermediate</td>
            </tr>
            <tr>
                <td>E207</td>
                <td>Hydraulic Systems 3: Advanced</td>
            </tr>
            <tr>
                <td>E208</td>
                <td>Hydraulic Systems 4: Electro-Fluid Power Systems</td>
            </tr>
            <tr>
                <td>E209</td>
                <td>Hydraulic Troubleshooting</td>
            </tr>
            <tr>
                <th>Electrical</th>
            </tr>
            <tr>
                <td>E210</td>
                <td>Industrial Electricity 1: AC/DC Electrical Systems</td>
            </tr>
            <tr>
                <td>E211</td>
                <td>Industrial Electricity 2: Electrical Relay Control</td>
            </tr>
            <tr>
                <td>E212</td>
                <td>Industrial Electricity 3: Electric Motor Control</td>
            </tr>
            <tr>
                <td>E213</td>
                <td>Industrial Electricity 4: Variable Frequency AC Motor Drives</td>
            </tr>
            <tr>
                <td>E214</td>
                <td>Industrial Electricity 5: Electric Power Distribution/Industrial Electrical Wiring</td>
            </tr>
            <tr>
                <td>E215</td>
                <td>Industrial Electricity 6: Mastering Programmable Controllers</td>
            </tr>
            <tr>
                <td>E240</td>
                <td>Industrial Electricity 7: Siemens S71200 Series PLC</td>
            </tr>
            <tr>
                <td>E241</td>
                <td>Industrial Electricity 8: Power and Control Electronics</td>
            </tr>
            <tr>
                <td>E243</td>
                <td>Industrial Electricity 9: AB CompactLogix L16</td>
            </tr>
            <tr>
                <th>Mechanical</th>
            </tr>
            <tr>
                <td>E217</td>
                <td>Mechanical Drives 1: Intro to Mechanical Drives</td>
            </tr>
            <tr>
                <td>E218</td>
                <td>Mechanical Drives 2: V-Belt Drive Transmission</td>
            </tr>
            <tr>
                <td>E219</td>
                <td>Mechanical Drives 3: Ball Bearing Maintenance</td>
            </tr>
            <tr>
                <td>E220</td>
                <td>Mechanical Drives 4: Linear Axis Drives, Clutches and Brakes</td>
            </tr>
            <tr>
                <th>Pneumatics</th>
            </tr>
            <tr>
                <td>E221</td>
                <td>Pneumatic Systems 1: Intro to Pneumatic Systems</td>
            </tr>
            <tr>
                <td>E222</td>
                <td>Pneumatic Systems 2: Pneumatic Components and System Applications</td>
            </tr>
            <tr>
                <td>E223</td>
                <td>Pneumatic Systems 3: Advanced Pneumatic Applications</td>
            </tr>
            <tr>
                <td>E224</td>
                <td>Pneumatic Troubleshooting</td>
            </tr>
            <tr>
                <th>Pump Sys.</th>
            </tr>
            <tr>
                <td>E242</td>
                <td>Pump Systems: Operate/Maintain/Install/Troubleshoot</td>
            </tr>
        </table>
    </div>
<!-- User input form for newfile.txt-->
    <form class="timereportf" action="index.php" method="POST">
    <label for="empnum">Emp #:</label>
    <input type="text" name="empnum" id="empnum" maxlength="4" autocomplete="off" required>
    <br>
    <label for="courseid">Course ID:</label>
    <input type="text" name="courseid" id="courseid" autocomplete="off" required>
    <br>
    <label for="timein">Time IN:</label>
    <input type="datetime-local" name="timein" id="timein" autocomplete="off" required>
    <br>
    <label for="timeout">Time OUT:</label>
    <input type="datetime-local" name="timeout" id="timeout" autocomplete="off" required>
    <input type="submit" name="submit">
    </form>
<!--Grabs form input and writes to newfile.txt-->
    <?php 
    if(isset($_POST["submit"])){
        $EmpNum = $_POST['empnum'];
        $CourseID = $_POST['courseid'];
        $TimeIN = $_POST['timein'];
        $TimeOUT = $_POST['timeout'];
        $file = fopen("newfile.txt","a") or die ("file not open");
        $saveData = $EmpNum.";".$CourseID.";".$TimeIN.";".$TimeOUT."\n";
        fputs($file,$saveData) or die ("Data did not write");
        fclose($file);} 
    ?>
</body>
</html>