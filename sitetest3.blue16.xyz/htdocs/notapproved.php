<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/static/css/global.css" rel="stylesheet">
<link rel="icon" href="/static/img/syntax.ico" type="image/x-icon">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-7P5LY26BKG"></script>
<script> window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);} gtag('js', new Date());gtag('config', 'G-7P5LY26BKG');</script>
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
<title>Banned - BLUE16</title>
<meta name="robots" content="noindex">
<style>
    .text-secondary {
        color: rgb(200,200,200) !important;
    }
</style>
<meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9"></head>
<body data-new-gr-c-s-check-loaded="14.1047.0" data-gr-ext-installed="">
<div class="fixed-top width-100">
</div>
<div>
<div style="display: flex;align-items: center;justify-content: center;min-height: 100vh;">
    <div class="p-3 border" style="min-width: 700px;">
        <h1 class="mb-0">Account Deleted</h1>
        <div class="d-flex">
            <p class="text-secondary m-0" style="font-size: 13px;">Banned On: <span class="text-white">time UTC</span></p>
            <p class="text-secondary m-0 ms-auto" style="font-size: 13px;">Expires On: <span class="text-white">time to expire</span></p>
        </div>
        <div class="linebreak"></div>
        <p class="text-secondary m-0" style="font-size: 16px;">Reason: <span class="text-white">pro user</span></p>
        <div class="linebreak"></div>
        <div class="w-100 d-flex align-items-center">
            {% if not hasBanExpired: %}
            <p class="text-secondary m-0" style="font-size: 13px;">If you wish to appeal this ban you can open a ticket on our <a class="text-decoration-none" href="https://discord.gg/cBMp3Z52UM">Discord Server</a></p>
            <form action="/logout" method="post"><button class="btn border-primary btn-sm text-white ms-auto" type="submit">Logout</button></form>
            {%else%}
            <p class="text-secondary m-0" style="font-size: 13px;">By clicking Re-activate you agree to our <a href="/terms" class="text-decoration-none">Terms Of Service</a></p>
            <form method="post" class="ms-auto">
                <button class="btn border-success btn-sm text-white" type="submit">Re-activate my Account</button>
            </form>
            <form action="/logout" method="post"><button class="btn border-primary btn-sm text-white ms-auto" type="submit">Logout</button></form>
            {%endif%}
        </div>
    </div>
</div>