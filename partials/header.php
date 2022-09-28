<?php
$firstName = current(explode(' ',$userInfo->name));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css?v=4"/>
    <link rel="stylesheet" href="<?=$base;?>/assets/css/feed-item.css?v=7"/>    
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">

                <a href="<?=$base;?>"><img src="<?=$base;?>/assets/images/devsbook_logo.png" /></a>

            </div>
            <div class="head-side">
                <div class="head-side-left">
                    <div class="search-area">
                        <form method="GET" action="<?=$base;?>/search.php">
                            <input type="search" placeholder="Pesquisar" name="s" />
                        </form>
                    </div>
                </div>
                <div class="head-side-right">
                    <a href="<?=$base;?>/perfil.php" class="user-area">
                        <div class="user-area-text"><?=$firstName;?></div>
                        <div class="user-area-icon">
                        <?php if(!empty($userInfo->avatar)): ?>
                            <img src="<?=$base;?>/media/avatars/<?=$userInfo->avatar;?>" />
                        <?php else: ?>
                            <img src="<?=$base;?>/media/avatars/avatar.png" />
                        <?php endif; ?>
                        </div>
                    </a>
                    <a href="<?=$base;?>/log_out.php" class="user-logout">
                        <img src="<?=$base;?>/assets/images/power_white.png" />
                    </a>
                </div>
            </div>
        </div>
    </header>
    <section class="container main">