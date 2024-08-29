<!DOCTYPE html>
<html lang="en" data-bs-theme="dark"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/static/css/global.css" rel="stylesheet">
<link rel="icon" href="/static/img/syntax.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script async="" src="./Admin - Syntax_files/js"></script>
<script> window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);} gtag('js', new Date());gtag('config', 'G-7P5LY26BKG');</script>
<script src="/static/js/presence.js"></script>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>Admin - Syntax</title>
<meta name="robots" content="noindex">
<link href="/static/css/admin.css" rel="stylesheet"> 
<meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"><style type="text/css" id="operaUserStyle"></style></head>
<body>
<? include('../header.php');?>
<div id="main">
<div class="container">


<div class="d-flex align-items-center mb-1">
    <img src="./Admin - Syntax_files/Head(1).ashx" class="rounded-2" width="90px" height="90px">
    <h3 class="ms-2 me-3">Welcome, <?php echo $user_data['username']; ?>!</h3>
    <div class="row text-center ms-auto p-2 rounded-2 me-2" style="background-color: rgb(27,27,27);box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
        <p class="col-md-3 m-0">Users Online: <b class="text-white">13</b></p>
        <p class="col-md-3 m-0">Users Ingame: <b class="text-white">4</b></p>
        <p class="col-md-3 m-0">Active Servers: <b class="text-white">3</b></p>
        <p class="col-md-3 m-0">New users today: <b class="text-white">12</b></p>
        <p class="col-md-3 m-0">Pending Assets: <b class="text-white">0</b></p>
    </div>
</div>

<div class="row p-2">
    <?php if ($showManageUsersLink): ?>
        <div class="col-md-4 mb-1 p-1">
            <a href="/admin/manage-users">
                <div class="admin-box p-2">
                    <h2 class="mb-1 text-truncate"><i class="bi bi-people me-2"></i>Manage Users</h2>
                    <p class="m-0 mb-2 text-truncate">Manage users and their permissions</p>
                </div>
            </a>
        </div>
    <?php endif; ?>
    <div class="col-md-4 mb-1 p-1">
        <a href="/admin/pending-assets">
            <div class="admin-box p-2">
                <h2 class="mb-1 text-truncate"><i class="bi bi-hourglass-split me-2"></i>Pending Assets</h2>
                <p class="m-0 mb-2 text-truncate">View and moderate pending assets</p>
            </div>
        </a>
    </div>
</div>

</div>
</div>
<div id="footer">
<div class="container pt-4 pb-4">
<div class="row">
<div class="col-4">
<b>©2023 syntax.eco</b>
<p>syntax.eco is not affiliated or related to the Roblox Corporation or any of its subsidaries.</p>
</div>
<div class="col" id="footerlist">
<a href="https://www.syntax.eco/terms">Terms of Service</a>
<a href="https://www.syntax.eco/privacy">Privacy Policy</a>
<a href="https://discord.gg/cBMp3Z52UM">Discord</a>
</div>
<div class="col" id="footerlist">
<a href="https://www.syntax.eco/home">Home</a>
<a href="https://www.syntax.eco/games">Games</a>
<a href="https://www.syntax.eco/catalog">Catalog</a>
<a href="https://www.syntax.eco/develop">Develop</a>
</div>
<div class="col" id="footerlist">
<a href="https://www.syntax.eco/settings">Settings</a>
<a href="https://www.syntax.eco/currency-exchange">Currency Exchange</a>
<a href="https://www.syntax.eco/download">Downloads</a>
</div>
</div>
</div>
</div>

</body></html>