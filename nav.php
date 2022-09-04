<?php
// importing all svg icons
$svg = array();
foreach(glob('vectors/*.svg') as $vector) {
    $ph = pathinfo($vector);
    $svg[$ph['filename']] = file_get_contents($vector);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Beyiddondolo</title>
        <style><?php require 'nav.css'; ?></style>
    </head>
    <body>
        <div class="main">
            <div class="top">
                <div class="mx-auto wd flex">
                    <a href="#" class="flex items-center noborder">
                        <span class="icon"><?=$svg['home']?></span>
                        <span>Home (Beyiddondolo)</span>
                    </a>
                    <a href="#" class="flex items-center">
                        <span class="icon"><?=$svg['address-book']?></span>
                        <span>About us</span>
                    </a>
                    <a href="#" class="flex items-center noborder" style="margin-left: auto;">
                        <span class="icon"><?=$svg['facebook']?></span>
                        <span>Facebook</span>
                    </a>
                    <a href="#" class="flex items-center">
                        <span class="icon"><?=$svg['instagram']?></span>
                        <span>Instagram</span>
                    </a>
                    <a href="#" class="flex items-center">
                        <span class="icon"><?=$svg['whatsapp']?></span>
                        <span>Whatsapp</span>
                    </a>
                </div>
            </div>
            <div class="searchbar">
                <div class="wd mx-auto flex items-center">
                    <div id="logo"></div>
                    <div class="flex-grow">
                        <form class="mx-auto flex items-center">
                            <div class="flex-grow flex flex-col">
                                <input type="text" placeholder="search for products by name or category ...">
                            </div>
                            <button type="submit">search</button>
                        </form>
                    </div>
                    <div class="flex items-center">
                        <a href="#" class="flex items-center" style="margin-right: 10px;">
                            <span class="icon"><?=$svg['user']?></span>
                            <span>Login</span>
                        </a>
                        <a href="#" class="flex items-center">
                            <span class="icon"><?=$svg['cart-arrow-down']?></span>
                            <span>cart</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="nav2">
                <div class="wd mx-auto flex items-center">
                    <div class="categories flex items-center">
                        <div class="icon"><?=$svg['bars']?></div>
                        <div class="txt">Categories</div>
                        <div class="icon"><?=$svg['caret-down']?></div>
                        <div class="list flex flex-col">
                            <a href="#">All categories</a>
                            <a href="#">Bags</a>
                            <a href="#">Beauty</a>
                            <a href="#">Electronics</a>
                        </div>
                    </div>
                    <a href="#">Sell with us</a>
                </div>
            </div>
        </div>
    </body>
</html>