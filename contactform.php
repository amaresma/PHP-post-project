<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $POST['email'];
    $age = $POST['number'];
    $cpu = $POST['dropdown'];
    $purpose = $POST['usage_purpose'];
    $updates = $POST['updates'];
    $message = $POST['message'];

    $mailTo = "surveymaresma@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have recieved an email from ".$name.$message;
    $client = "Name: ".$name." Age: ".$age;
    $requeriments = "CPU: ".$cpu."\nPurpose: ".$purpose."\nUpdates: ".$updates;

    mail($mailTo, $headers, $txt, $client, $requeriments);
    header("Location: index.php?maildend");
}
?>