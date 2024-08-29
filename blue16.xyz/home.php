
<!DOCTYPE html>
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
<title>Home - BLUE16</title>
<meta name="robots" content="noindex">
<link href="/static/css/home.css" rel="stylesheet"> 
<meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"></head>
<body data-new-gr-c-s-check-loaded="14.1043.0" data-gr-ext-installed="">
<?php
include('header.php');
?>
<div id="main">
<div class="container">
<div class="alert p-2 alert-warning d-flex align-items-center">
<i class="bi bi-envelope-plus ms-2" style="font-size: 26px;"></i>
<div class="m-2">
<span style="font-family: &quot;Lucida Console&quot;, Monaco, monospace;">uh just warning</span>
</div>
<a href="/redirect" class="ms-auto text-decoration-none me-2"><button class="btn btn-warning btn-sm" style="font-family: &quot;Lucida Console&quot;, Monaco, monospace;">test button</button></a>
</div>
<div class="d-flex align-items-center">
<img class="rounded-5 overflow-hidden me-4" src="https://cdn.discordapp.com/avatars/859791186617171998/4608e9ebd7475a701eba969a2ca1eae4.webp?size=1024&format=webp&width=0&height=320" style="width:auto;max-height: 130px;">
<div class="mt-2">
<h1 style="font-family: &quot;Monaco&quot;, Monaco, monospace;">
Hello, <?php echo$user_data['username'] ?>!
</h1>
<span class="rbx-icon-bc"></span>
</div>
</div>
<h4>Friends ( number )</h4>
<div class="w-100 p-2 d-flex card-container" style="overflow-x: hidden;min-height: 100px;">
<a href="/users/676/profile">
<div style="height: fit-content; width:90px;" class="me-3">
<div class="image-container">
<img class="rounded w-100 d-table" src="https://cdn.discordapp.com/avatars/859791186617171998/4608e9ebd7475a701eba969a2ca1eae4.webp?size=1024&format=webp&width=0&height=320" style="margin: 0 auto;height: fit-content; max-width: 100px;">
</div>
<p class="text-white w-100 text-center d-inline-block m-0 text-truncate" style="font-size: 12px; font-family: &quot;Lucida Console&quot;, Monaco, monospace;">proplayernotrealitsfaketrustmeyeaimnotjoking</p>
</div>
</a>

<a href="/users/676/profile">
<div style="height: fit-content; width:90px;" class="me-3">
<div class="image-container">
<img class="rounded w-100 d-table" src="https://cdn.discordapp.com/avatars/859791186617171998/4608e9ebd7475a701eba969a2ca1eae4.webp?size=1024&format=webp&width=0&height=320" style="margin: 0 auto;height: fit-content; max-width: 100px;">
</div>
<p class="text-white w-100 text-center d-inline-block m-0 text-truncate" style="font-size: 12px; font-family: &quot;Lucida Console&quot;, Monaco, monospace;">haha</p>
</div>
</a>
</div>
<h4 class="mt-2">Recently Played</h4>
<div class="w-100 p-2 d-flex" style="overflow-x: hidden;min-height: 100px;overflow-x: auto;">
<a class="text-decoration-none" href="/games/5614/">
<div class="me-3 overflow-hidden rounded place-card">
<div class="position-relative">
<img width="100%" style="aspect-ratio: 1/1;" src="https://cdn.discordapp.com/avatars/859791186617171998/4608e9ebd7475a701eba969a2ca1eae4.webp?size=1024&format=webp&width=0&height=320">
<div class="position-absolute" style="bottom: 0px;left: 0px;">
<div class="fw-bold bg-dark text-white" style="font-size: 12px;padding: 3px;border-top-right-radius: 4px;">2020</div>
</div>
</div>
<div class="p-1">
<h5 class="mb-0" style="font-size: 17px;text-overflow: ellipsis;">Happy Home of Robloxia!</h5>
<div class="d-flex align-items-center">
<p style="margin:0;font-size: 14px;" class="text-secondary"><i class="bi bi-people"></i> 0 <span style="font-size: 13px;">Playing</span></p>
</div>
<div class="w-100 votePercentageBackground">
<div class="votePercentageFill" style="width: 66%;"></div>
<div>
<div class="segment" style="left: 18%;"></div>
<div class="segment" style="left: 38%;"></div>
<div class="segment" style="left: 58%;"></div>
<div class="segment" style="left: 78%;"></div>
</div>
</div>
</div>
</div>
</a>
</div>
</div>
</div>
<div id="footer">
<div class="container pt-4 pb-4">
<div class="row">
<div class="col-4">
<b>©2024 blue16.xyz</b>
<p>blu16 is not affiliated or related to the rublox corporatiun or any of its subsidaries!!!!!</p>
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
