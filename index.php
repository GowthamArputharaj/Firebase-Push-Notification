<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- To include from local files -->
    <!-- <link rel="stylesheet" href="./lib/bootstrap.min.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="./lib/jquery.min.js"></script>
    <script src="./lib/bootstrap.min.js"></script> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Gowtham</title>
</head>
<body class="bg-dark">
    <div class="my-3 text-center">
        <h1 class="text-white text-monospace">Gowtham</h1>
    </div>
    <div class="mt-5 mx-auto p-4 w-50 bg-secondary form-group rounded">
        <h2 class="bg-dark mx-auto w-100 btn text-monospace text-white text-italic rounded">Message area</h2>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title"/>
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" id="body" placeholder="Enter body"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary text-white btn-outline-primary bg-primary" onclick="sendNotification()">Send Notification</button>
        </div>
    </div>
</body>
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.0/firebase-messaging.js"></script>

<script src="./apiKey.js"></script>
<script src="./main.js"></script>
</html>
