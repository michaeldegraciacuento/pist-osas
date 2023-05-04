<!DOCTYPE html>
<html>
<head>
    <title>PIST-OSAS</title>
</head>
<body>
    <h1>Greetings!</h1>
    <h1>{{strtoupper($user_email->fname)}}, {{strtoupper($user_email->lname)}} {{$user_email->mname}}</h1>
    <p>Your Appointment Application in PIST-OSAS has been approved by the date of {{ $appointment->date }} {{$appointment->time}}, for the nature of {{$appointment->purpose}}</p>
   
    <p>PIST-OSAS,</p>
    <p>Management</p>
</body>
</html>