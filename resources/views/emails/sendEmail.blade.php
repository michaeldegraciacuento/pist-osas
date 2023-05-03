<!DOCTYPE html>
<html>
<head>
    <title>PIST-OSAS</title>
</head>
<body>
    <h1>Greetings!</h1>
    <h1>{{$user_email->fname}} {{$user_email->lname}}</h1>
    <p>Your Appointment Application in PIST-OSAS has been approved by the date of {{ $appointment->date }} for the purpose of {{$appointment->purpose}}</p>
   
    <p>PIST-OSAS</p>
    <p>Management</p>
</body>
</html>