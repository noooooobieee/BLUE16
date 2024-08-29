<html lang="en" data-bs-theme="dark"><head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/static/css/global.css" rel="stylesheet">
<link rel="icon" href="/static/img/syntax.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-7P5LY26BKG"></script>
<script> window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);} gtag('js', new Date());gtag('config', 'G-7P5LY26BKG');</script>
<script src="/static/js/presence.js"></script>

<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>Settings - blue16</title>
<meta name="robots" content="noindex">
<link href="/static/css/settings.css" rel="stylesheet"> 
<meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"></head>
<body data-new-gr-c-s-check-loaded="14.1047.0" data-gr-ext-installed="">
<?php
include('../header.php');
?>
<div id="main">
<div class="settings-container">
<h1>Account Settings</h1>
<div class="linebreak"></div>
<div class="d-flex align-items-center mb-2">
<p style="width: fit-content;height: 100%;" class="me-auto">Username: <b><?php echo $user_data['username']; ?></b></p>
<a class="btn btn-primary btn-sm d-flex fw-bold text-decoration-none" href="/settings/update-username">Edit Username</a>
</div>
<div class="d-flex align-items-center mb-2">
<p style="width: fit-content;height: 100%;" class="me-auto">Password: <b>************</b></p>
<a class="btn btn-primary btn-sm d-flex fw-bold text-decoration-none" href="/settings/update-password">Edit Password</a>
</div>
<div class="d-flex align-items-center mb-2">
<p style="width: fit-content;height: 100%;" class="me-auto">Email: <b>No Email Linked</b></p>
<a class="btn btn-primary btn-sm d-flex fw-bold text-decoration-none" href="/settings/update-email">Add email</a>
</div>
<div class="d-flex align-items-center mb-2">
<p style="width: fit-content;height: 100%;" class="me-auto">Authenticator App Authentication: <b>Disabled</b></p>
<a href="/settings/enableTOTP" class="text-decoration-none"><button class="btn btn-success btn-sm d-flex fw-bold">Enable Authenticator</button></a>
</div>
<div class="d-flex align-items-center mb-2">
<p style="width: fit-content;height: 100%;" class="me-auto">Discord Account: </p>
<form action="/settings/unlink_discord" method="post"><button class="btn btn-danger btn-sm d-flex fw-bold">Unlink Discord</button></form>
</div>
<h5>Description</h5>
<form action="/settings/description" method="POST">
<textarea class="form-control" id="description" rows="3" maxlength="256" name="description" placeholder="Enter a description about yourself here... ( 256 chars max )">Hi! I just joined Syntax!</textarea>
<div class="d-flex justify-content-end">
<button type="submit" class="btn btn-primary mt-2">Save</button>
</div>
</form>
</div>
</div>
<div id="footer">
<div class="container pt-4 pb-4">
<div class="row">
<div class="col-4">
<b>©2024 blue16.xyz</b>
<p>blue16.xyz is not affiliated or related to the Roblox Corporation or any of its subsidaries!!!</p>
</div>
<div class="col" id="footerlist">
<a href="/terms">Terms of Service</a>
<a href="/privacy">Privacy Policy</a>
<a href="https://discord.gg/cBMp3Z52UM">Discord</a>
</div>
<div class="col" id="footerlist">
<a href="/home">Home</a>
<a href="/games">Games</a>
<a href="/catalog">Catalog</a>
<a href="/develop">Develop</a>
</div>
<div class="col" id="footerlist">
<a href="/settings">Settings</a>
<a href="/currency-exchange">Currency Exchange</a>
<a href="/download">Downloads</a>
</div>
</div>
</div>
</div>

</body></html>