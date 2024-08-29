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
        .title-logo {
            --color1: #ffffff;
            --color2: #14b8b8;
            background: repeating-linear-gradient(
                -45deg,
                var(--color1),
                var(--color1) 20px,
                var(--color2) 20px,
                var(--color2) 40px
            );
            background-clip: text;
            color: transparent;
            -webkit-background-clip: text;
            animation: 40s linear 0s infinite move;
            font-family: Monaco, Monaco, monospace;
        }

        @keyframes move {
            from {
                background-position: 0px;
            }
            to {
                background-position: 1000px;
            }
        }

        .blur-animation {
            filter: blur(0px);
            animation: blurEffect 5s ease-in-out infinite alternate;
        }

        @keyframes blurEffect {
            0% {
                filter: blur(0px);
            }
            100% {
                filter: blur(5px);
            }
        }


        
        </style>
<div class="fixed-top width-100">
<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
<a class="navbar-brand position-relative me-md-2" href="/home"><h1 class="title-logo">BLUE16</h1></a>
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
<li><a class="dropdown-item" href="/users/<?php echo $user_data['id']; ?>/friends">Friends</a></li>
<li><a class="dropdown-item" href="/groups">Groups</a></li>
<li><a class="dropdown-item" href="/avatar">Avatar</a></li>
<li><a class="dropdown-item" href="/messages">Messages</a></li>
<li><a class="dropdown-item" href="/trade">Trades</a></li>
<li><a class="dropdown-item" href="/download">Downloads</a></li>

<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="https://dsc.gg/blue16">Discord</a></li>
</ul>
</div>
</ul>
<div class="d-flex" id="currencydiv">
<a style="margin-right:10px;font-weight: 600;text-decoration: none;" href="/users/<?php echo $user_data['id']; ?>/profile"><img class="rounded-5 overflow-hidden me-2" width="32" height="32" src="https://t7.rbxcdn.com/0127ba3af388fdf1b6def624d491b72a"><span><?php echo $user_data['username']; ?></span></a>
<a href="/transactions/"><span class="rbx-icon-nav-robux"></span></a>
<span class=""><?php echo $user_data['robux']; ?></span>
<a href="/transactions/"><span class="rbx-icon-nav-tix"></span></a>
<span><?php echo $user_data['tickets']; ?></span>
<div class="nav-item dropdown d-flex ms-3">
<a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="height:28px;">
<span class="rbx-icon-nav-settings"></span>
</a>
<ul class="dropdown-menu dropdown-menu-end">
<li><a class="dropdown-item" href="/settings">Settings</a></li>
<li><a class="dropdown-item" href="/invite-keys">Invite Keys</a></li>
<li><a class="dropdown-item" href="/membership">Membership</a></li>
<li><a class="dropdown-item" href="/giftcard-redeem">Redeem Codes</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="/logout" style="color:rgb(255, 6, 60);font-weight:600;">Logout</a></li>
</ul>
</div>
</div>
</div>
</div>
</nav>
<div class="w-100 border-bottom subnav-bar ps-3 pe-3">
<a href="/users/<?php echo $user_data['id']; ?>/profile">Profile</a>
<a href="/users/796<?php echo $user_data['id']; ?>friends">Friends</a>
<a href="/users">Users</a>
<a href="/avatar">Avatar</a>
<a href="/messages">Messages</a>
<a href="/groups">Groups</a>
<a href="/trade">Trades</a>
<a href="/download">Downloads</a>
<a href="/discourse/">Forums</a>
<a href="https://discord.gg/A9mv477NrP">Discord</a>
  <?php   if ($user_data['power'] >= 1) { ?>
  <a href="/admin/">Admin</a>
  <?php } ?>
</div>
<div id="websitewidemessage" class="alert rounded-0 text-white p-1" role="alert">
<p>Website working on, please wait when it will be done!</p>
</div>
</div>
<?php
    ob_end_flush();
