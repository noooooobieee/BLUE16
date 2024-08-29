<html lang="en" data-bs-theme="dark"><head>
<?php
$currentYear = date('Y');

$pageGeneratedAt = date('Y-m-d H:i:s.u', time());

$isIE6 = false;
if (isset($_SERVER['HTTP_USER_AGENT']) && strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 6') !== false) {
    $isIE6 = true;
}

?>

<!--[if IE 6]>
  © COPYRIGHT <?php echo $currentYear; ?> SYNT2X.XYZ
  DO NOT COPY, MODIFY, OR REDISTRIBUTE THIS CODE
  WITHOUT PERMISSION FROM SYNT2X.XYZ

  PAGE GENERATED AT : <?php echo $pageGeneratedAt; ?> UTC
<![endif]-->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="/static/img/syntax.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script async="" src="https://www.clarity.ms/s/0.7.20/clarity.js"></script><script async="" src="https://www.clarity.ms/tag/l354hmqrfz"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-7P5LY26BKG"></script>
<link href="/static/css/global.css" rel="stylesheet">
<script> window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);} gtag('js', new Date());gtag('config', 'G-7P5LY26BKG');</script>
<script type="text/javascript">
          (function(c,l,a,r,i,t,y){
              c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
              t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
              y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
          })(window, document, "clarity", "script", "l354hmqrfz");
        </script>
<script src="/static/js/presence.js"></script>
<style>
          .subnav-bar a {
            color: rgb(199, 199, 199) !important;
            font-size: 14px;
            text-decoration: none;
            margin-right: 15px;
            margin-top: 0;
          }
          .subnav-bar a:hover {
            color: rgb(255, 255, 255) !important;
          }
          .subnav-bar {
            background-color: rgb(23, 23, 23);
            padding: 3px;
          }
          @media screen and (max-width: 992px) {
            .subnav-bar {
              display: none;
            }
            .main-nav-dropdown {
              display: block !important;
            }
          }
          @media screen and (min-width: 992px) {
            .main-nav-dropdown {
              display: none;
            }
          }
        </style>
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<title>Search Groups - Syntax</title>
<meta name="robots" content="noindex">
<style>
    .group-bg {
        background-color: rgb(30,30,30);
    }
    .text-secondary {
        color: rgb(200,200,200) !important;
    }
    .bg-drop {
        box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);
    }
    h5 {
        font-size: 15px;
        margin-bottom: 5px !important;
    }
</style>
<meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"></head>
<body data-new-gr-c-s-check-loaded="14.1055.0" data-gr-ext-installed="">
<div class="fixed-top width-100">
<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
<a class="navbar-brand position-relative me-md-2 " href="/home">
<h1 class="title-logo">SYNTAX</h1>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/home">Home</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/games">Games</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/catalog">Catalog</a>
</li>
<li class="nav-item">
<a class="nav-link active" aria-current="page" href="/develop">Develop</a>
</li>
<div class="nav-item dropdown d-flexr main-nav-dropdown">
<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="height:28px;">
Others
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="/users/796/friends">Friends</a></li>
<li><a class="dropdown-item" href="/groups">Groups</a></li>
<li><a class="dropdown-item" href="/users">Users</a></li>
<li><a class="dropdown-item" href="/avatar">Avatar</a></li>
<li><a class="dropdown-item" href="/messages">Messages</a></li>
<li><a class="dropdown-item" href="/trade">Trades</a></li>
<li><a class="dropdown-item" href="/download">Downloads</a></li>
<li><a class="dropdown-item" href="/discourse/">Forums</a></li>

<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="https://discord.gg/cBMp3Z52UM">Discord</a></li>
</ul>
</div>
</ul>
<div class="d-flex" id="currencydiv">
<a style="margin-right:10px;font-weight: 600;text-decoration: none;" href="/users/796/profile"><img class="rounded-5 overflow-hidden me-2" width="32" height="32" src="/Thumbs/Head.ashx?x=48&amp;y=48&amp;userId=796" alt="TZoo2005"><span>TZoo2005</span></a>
<a href="/transactions/"><span class="rbx-icon-nav-robux"></span></a>
<span class="">137</span>
<a href="/transactions/"><span class="rbx-icon-nav-tix"></span></a>
<span>421</span>
<div class="nav-item dropdown d-flex ms-3">
<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="height:28px;">
<span class="rbx-icon-nav-settings"></span>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a class="dropdown-item" href="/settings">Settings</a></li>

<li><a class="dropdown-item" href="/membership">Membership</a></li>
<li><a class="dropdown-item" href="/giftcard-redeem">Redeem Codes</a></li>
<li><hr class="dropdown-divider"></li>
<li><form action="/logout" method="post"><input type="hidden" name="csrf_token" value="IjFiOTgxMDRhZDViYTNiYmVmMDBjZTEzMDJiYzI2NGNiNTI5MjQwODgi.ZdaKfw.M9PR_ut3ZhBVhcS4ym7G5ft4mAA"><button class="dropdown-item" style="color:rgb(255, 6, 60);font-weight:600;" type="submit">Logout</button></form></li>
</ul>
</div>
</div>
</div>
</div>
</nav>
<div class="w-100 border-bottom subnav-bar ps-3 pe-3">
<a href="/users/796/profile">Profile</a>
<a href="/users/796/friends">Friends</a>
<a href="/users">Users</a>
<a href="/avatar">Avatar</a>
<a href="/messages">Messages</a>
<a href="/groups">Groups</a>
<a href="/trade">Trades</a>
<a href="/download">Downloads</a>
<a href="/discourse/">Forums</a>

<a href="https://discord.gg/cBMp3Z52UM">Discord</a>
</div>
</div>
<div class="ms-auto me-auto ps-2 pe-2 mb-3" style="width: 700px;min-height: 100vh;margin-top: 120px;">
<h2>Search Groups</h2>
<form method="post">
<div class="input-group">
<div class="form-floating" style="width: 52%;">
<input type="text" class="form-control" id="search-input" name="query" value="" placeholder="Awesome Group">
<label for="search-input">Search</label>
</div>
<button type="submit" class="btn btn-outline-primary fw-bold" style="min-width: 50px;"><i class="bi bi-search"></i></button>
</div>
</form>
<div class="row mt-2">
<div class="col-12 mt-2">
<a href="/groups/1/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=1" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">SYNTAX Official Group</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 763 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">official syntax fan group1!11
join the official discord server for updates
https://discord.gg/cBMp3Z52UM</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/14/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=14" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Name Snipe</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 640 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">𝗪𝗲𝗹𝗰𝗼𝗺𝗲 𝘁𝗼 𝗡𝗮𝗺𝗲 𝗦𝗻𝗶𝗽𝗲 𝗴𝗿𝗼𝘂𝗽
𝗛𝗮𝘃𝗲 𝗮 𝗴𝗼𝗼𝗱 𝘂𝘀𝗲𝗿𝗻𝗮𝗺𝗲 𝗰𝗼𝗺𝗲 𝗷𝗼𝗶𝗻 𝗮𝗻𝗱 𝘀𝗲𝗲 𝗵𝗼𝘄 𝗴𝗼𝗼𝗱 𝗶𝘁 𝗶𝘀!
𝗙𝗲𝗲𝗹 𝗳𝗿𝗲𝗲 𝘁𝗼 𝗺𝗲𝘀𝘀𝗮𝗴𝗲 𝗡𝗲𝗱𝗼 𝗶𝗳 𝘆𝗼𝘂 𝗳𝗲𝗲𝗹 𝘆𝗼𝘂𝗿 𝗿𝗮𝗻𝗸 𝗶𝘀 𝘂𝗻𝗳𝗮𝗶𝗿.
𝗥𝗮𝗻𝗸𝘀
𝗚𝗼𝗱𝗹𝘆 𝗦𝗻𝗶𝗽𝗲 : 𝘆𝗼𝘂𝗿 𝘀𝗻𝗶𝗽𝗲 𝗶𝘀 𝘃𝗲𝗿𝘆 𝗿𝗮𝗿𝗲 𝗮𝗻𝗱 𝗮𝗹𝗺𝗼𝘀𝘁 𝗶𝗺𝗽𝗼𝘀𝘀𝗶𝗯𝗹𝗲
𝗛𝗼𝗹𝘆 𝗦𝗻𝗶𝗽𝗲 : 𝘆𝗼𝘂 𝗵𝗮𝘃𝗲 𝗮 𝘃𝗲𝗿𝘆 𝗴𝗼𝗼𝗱 𝘀𝗻𝗶𝗽𝗲
𝗔𝗻𝗶𝗺𝗮𝗹 𝗡𝗮𝗺𝗲 : 𝘆𝗼𝘂𝗿 𝘂𝘀𝗲𝗿𝗻𝗮𝗺𝗲 𝗶𝘀 𝗮𝗻 𝗮𝗻𝗶𝗺𝗮𝗹
𝗔𝗰𝘁𝘂𝗮𝗹 𝗪𝗼𝗿𝗱𝘀 : 𝗿𝗮𝗿𝗲 𝘀𝗻𝗶𝗽𝗲 𝗯𝘂𝘁 𝗻𝗼𝘁 𝘄𝗼𝗿𝘁𝗵 𝘁𝗵𝗲 𝗵𝘆𝗽𝗲
𝗜𝗗 𝗦𝗻𝗶𝗽𝗲 : 𝘆𝗼𝘂 𝗵𝗮𝘃𝗲 𝗮𝗻 𝗶𝗱 𝘀𝗻𝗶𝗽𝗲
𝟯 𝗹𝗲𝘁𝘁𝗲𝗿 𝗦𝗻𝗶𝗽𝗲 : 𝗱𝗲𝗽𝗲𝗻𝗱𝘀 𝗼𝗻 𝘆𝗼𝘂𝗿 𝘂𝘀𝗲𝗿𝗻𝗮𝗺𝗲 𝗶𝗳 𝗶𝘁𝘀 𝗮 𝗿𝗮𝗻𝗱𝗼𝗺 𝟯 𝗹𝗲𝘁𝘁𝗲𝗿 𝗼𝗿 𝗵𝗮𝘀 𝗮 𝗺𝗲𝗮𝗻𝗶𝗻𝗴
𝗟𝗲𝗴𝗲𝗻𝗱𝗮𝗿𝘆 𝗦𝗻𝗶𝗽𝗲 : 𝗔𝗯𝗼𝘃𝗲 𝗿𝗮𝗿𝗲 𝘀𝗻𝗶𝗽𝗲
𝗚𝗿𝗲𝗮𝘁 𝗦𝗻𝗶𝗽𝗲 : 𝘂𝗻𝗰𝗼𝗺𝗺𝗼𝗻 𝘂𝘀𝗲𝗿𝗻𝗮𝗺𝗲
𝗚𝗼𝗼𝗱 𝗦𝗻𝗶𝗽𝗲 : 𝗰𝗼𝗺𝗺𝗼𝗻 𝘂𝘀𝗲𝗿𝗻𝗮𝗺𝗲
𝗡𝗼𝗿𝗺𝗮𝗹 𝗦𝗻𝗶𝗽𝗲 : 𝗗𝗼𝗲𝘀𝗻𝘁 𝗰𝗼𝘂𝗻𝘁 𝗮𝘀 𝗮 𝘀𝗻𝗶𝗽𝗲
𝗧𝗿𝗮𝘀𝗵 𝗨𝘀𝗲𝗿𝗻𝗮𝗺𝗲 : 𝘁𝗿𝗮𝘀𝗵.</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/144/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=144" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Yappers</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 269 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">Rank System:
Every week, the oldest 25 Yapplings get ranked up to Yapper.
Every week, the oldest 10 Yappers get ranked up to Big Yapper.
Every week, the oldest 5 Big Yappers get ranked up to Bigger Yapper.
Every week, the oldest Bigger Yapper gets ranked up to Ultra Yapper.</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/142/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=142" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Let's Make A Deal</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 208 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">We are LMAD and we Trade Limiteds! Converse with your fellow Traders!</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/78/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=78" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Net</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 130 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;"> What's your Net? </p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/151/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=151" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Syntax Pokemon Brick Bronze</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 119 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">A project aimed at reviving the deleted pokemon games of roblox.
2018 will be coming, no eta. We are still working on fixing this game.
------------------------------------------
Project Pokemon: https://www.syntax.eco/games/27589/ALPHA-Project-Pokemon
Pokemon Brick Bronze: https://www.syntax.eco/games/27251/AUDIO-Pokemon-Brick-Bronze
Pokemon Online: https://www.syntax.eco/games/29560/ALPHA-Pokemon-online
Pokemon bluesteel version: (COMING SOON)
------------------------------------------
Discord: https://discord.gg/CutqQPEsVs</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/47/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=47" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Russian community</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 117 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">это группа Russian community
Заходите в наш дискорд сервер https://discord.gg/wuXvVe5D4c</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/32/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=32" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Syntax Verification Program</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 103 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">People who are in this group are a notable and authentic person, brand or public figure. (unofficial!)</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/3/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=3" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Roblox</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 91 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">Official fan club of Roblox!</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/17/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=17" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;"> ~/Flood Escape\~</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 84 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">This is the Official Flood Escape Group!
Join here for the latest news and info relating to Flood Escape, along with exclusive access to the Pre-Releases of Flood Escape, showing features before release or during the next versions development!
Check out the games here:
https://www.syntax.eco/games/431/Flood-Escape
https://www.syntax.eco/games/1676/Flood-Escape-Modded
https://www.syntax.eco/games/3408/Acid-Escape</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/11/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=11" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Syntax Video Stars</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 65 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">Welcome to the unofficial Syntax Video Stars group!</p>
</div>
</div>
</div>
</a>
</div>
<div class="col-12 mt-2">
<a href="/groups/8/" class="text-decoration-none m-0 p-0">
<div style="background-color: rgb(31,31,31);box-shadow: 0px 0px 10px 0px rgb(0,0,0,0.5);overflow: hidden;" class="p-2">
<div class="d-flex">
<img src="/Thumbs/GroupIcon.ashx?x=100&amp;y=100&amp;groupid=8" style="aspect-ratio: 1/1;height: 80px !important;" class="rounded border">
<div class="ms-2 flex-fill" style="overflow: hidden;">
<div class="d-flex w-100">
<p class="text-white text-truncate m-0" style="font-size: 17px;">Lets Make A Deal</p>
<p class="text-secondary m-0 ms-auto" style="font-size: 14px;"><i class="bi bi-people"></i> 50 Members</p>
</div>
<p class="text-secondary m-0 w-100" style="font-size: 14px;">Welcome to the first LMAD group, in this group we will only be talking about limiteds and items.</p>
</div>
</div>
</div>
</a>
</div>
</div>
<div class="d-flex w-100 mt-2" style="font-size: 14px;">
<a class="text-decoration-none ms-auto text-secondary">Previous</a>
<p class="m-0 ms-2 me-2 text-white">Page 1 of 17</p>
<a class="text-decoration-none me-auto " href="/groups/search?page=2&amp;query=">Next</a>
</div>
</div>
<div id="footer">
<div class="container pt-4 pb-4">
<div class="row">
<div class="col-4">
<b>©2024 syntax.eco</b>
<p>syntax.eco is not affiliated or related to the Roblox Corporation or any of its subsidaries.</p>
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

</body><grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration></html>