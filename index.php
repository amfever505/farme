<?php
error_reporting(0);
require('dbconnect.php');
session_start();
if(isset($_COOKIE['email'])){
    header('Location: mypage.php');
    exit();
}
if (!empty($_POST)) {
    if (empty($error)) {
        $member = $db->prepare('SELECT COUNT(*) AS cnt FROM members WHERE	email=?');
        $member->execute(array($_POST['email']));
        $record = $member->fetch();
        if ($record['cnt'] > 0) {
            $error['email'] = 'duplicate';
        }
    }

    if (strlen($_POST['password']) < 8) {
        $error['password'] = 'length';
    }
    if (empty($error)) {
        $_SESSION['join'] = $_POST;
        header('Location: check.php');
        exit();
    }
}
$message = '';
if (isset($_SESSION['message'])) {
    $message = $_SESSION['message'];
}
$_SESSION = [];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>Farme | HOME</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="bootstrap-5.0.0-beta1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slide.css">
    <link rel="stylesheet" href="css/chara.css">

    <!--m+-->
    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/basic_latin/mplus_webfonts.css">
    <link rel="stylesheet" type="text/css" href="http://mplus-fonts.sourceforge.jp/webfonts/general-j/mplus_webfonts.css">


    <!--Poiret One-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">


    <!--slide-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenMax.min.js"></script>

    <!--chara-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- usa -->
    <link rel="stylesheet" type="text/css" href="css/usa.css">

    <!--??????????????????-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script src="js/infiniteslide.js"></script>
    <script src="js/jquery.pause.min.js"></script>

</head>

<body>
    <?php
    echo $message;
    ?>
    <?php
    $length = "<script type='text/javascript'>alert('??????????????????8?????????????????????????????????');</script>";
    $duplicate = "<script type='text/javascript'>alert('???????????????????????????????????????????????????');</script>";
    ?>
    <?php if ($error['password'] == 'length') : ?>
        <?php
        echo $length;
        ?>
    <?php endif; ?>

    <?php if ($error['email'] == 'duplicate') : ?>
        <?php
        echo $duplicate;
        ?>
    <?php endif; ?>

    <!-- OP Movie -->
    <!-- <div id="screen">
    <video class="vid" src="images/logo.mp4" playsinline autoplay muted></video>
    </div> -->

    <!--main-->
    <div class=main>
    <a href="index.php"><img src="images/logo.png" alt="logo" class="logo" /></a>

        <div class="main_txt">
            <h1>
                AR FRAME</h1>
            <h1>
                BY YOUR CREATION
            </h1>
            <p>???????????????????????????????????????</p>
        </div>
    </div>

    <div class="movie">
        <video src="images/HEW.mp4" loop playsinline autoplay muted></video>
    </div>

    <!--introduction-->
    <main class="main-content" id="introduction">
        <section class="slideshow">
            <div class="slideshow-inner">
                <div class="slides">
                    <div class="slide is-active ">
                        <div class="slide-content">
                            <div class="caption">
                                <div id="int_txtarea">
                                    <div id="int_txtarea_1">
                                        <h1>Our features</h1>
                                        <h2>???????????????</h2>
                                    </div>
                                    <div id="int_txtarea_2">
                                        <div id="int_txtarea_2_1">
                                            <h3>1</h3>
                                        </div>
                                        <div id="int_txtarea_2_2">
                                            <h2>???????????????</h2>
                                            <p>?????????????????????????????????<br>??????????????????????????????<br>???????????????????????????<br>??????????????????????????????</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="int_img">
                                    <img src="images/int_img.png" alt="???????????????" width="100%">
                                </div>

                            </div>
                        </div>
                        <div class="image-container" style="background-color: #576d6e; box-shadow:0px 0px 8px 3px rgb(77, 77, 77) inset;">

                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="caption">
                                <div id="int_txtarea">
                                    <div id="int_txtarea_1">
                                        <h1>Our features</h1>
                                        <h2>???????????????</h2>
                                    </div>
                                    <div id="int_txtarea_2">
                                        <div id="int_txtarea_2_1">
                                            <h3>2</h3>
                                        </div>
                                        <div id="int_txtarea_2_2">
                                            <h2>??????????????????</h2>
                                            <p>?????????????????????????????????<br>???????????????????????????????????????????????????????????????<br>?????????????????????????????????</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="int_img">
                                    <img src="images/int_img2.png" alt="???????????????" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="image-container" style="background-color: #694B2F;  box-shadow:0px 0px 8px 3px rgb(59, 59, 59) inset;">

                        </div>
                    </div>
                    <div class="slide">
                        <div class="slide-content">
                            <div class="caption">
                                <div id="int_txtarea">
                                    <div id="int_txtarea_1">
                                        <h1>Our features</h1>
                                        <h2>???????????????</h2>
                                    </div>
                                    <div id="int_txtarea_2">
                                        <div id="int_txtarea_2_1">
                                            <h3>3</h3>
                                        </div>
                                        <div id="int_txtarea_2_2">
                                            <h2>AR ???????????????</h2>
                                            <p>AR???????????????????????????????????????????????????????????????<br>????????????????????????????????????<br>?????????????????????????????????</p>
                                        </div>
                                    </div>
                                </div>
                                <div id="int_img">
                                    <img src="images/int_img3.png" alt="???????????????" width="100%">
                                </div>
                            </div>
                        </div>
                        <div class="image-container" style="background-color: #505e39;  box-shadow:0px 0px 8px 3px rgb(59, 59, 59) inset;">

                        </div>
                    </div>

                </div>
                <div class=" pagination">
                    <div class="item is-active">
                        <span class="icon">1</span>
                    </div>
                    <div class="item">
                        <span class="icon">2</span>
                    </div>
                    <div class="item">
                        <span class="icon">3</span>
                    </div>
                </div>
                <div class="arrows">
                    <div class="arrow prev">
                        <span class="svg svg-arrow-left">
                            <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                <path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z" />
                            </svg>
                            <span class="alt sr-only"></span>
                        </span>
                    </div>
                    <div class="arrow next">
                        <span class="svg svg-arrow-right">
                            <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewBox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve">
                                <path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z" />
                            </svg>
                            <span class="alt sr-only"></span>
                        </span>
                    </div>
                </div>
            </div>
        </section>
    </main>



    <!--gallery-->
    <div class="gal" id="gallery">
        <div id="gal_txtarea">
            <div id="gal_title">
                <h1>Gallery</h1>
                <h2>?????????</h2>
            </div>
            <div id="gal_txtarea_1">
                <h2>?????????????????????????????????</h2>
                <p>???????????????????????????????????????????????????????????????????????????</p>
            </div>
        </div>
        <div>
            <ul class="infiniteslide1">
                <li><img src="images/gal1.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal2.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal3.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal4.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal5.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal6.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal7.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal8.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal9.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal10.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal11.png" alt="" width="300" height="350" /></li>
                <li><img src="images/gal12.png" alt="" width="300" height="350" /></li>
            </ul>
        </div>
    </div>



    <!--login-->
    <div class="login" id="login">
        <section class="panels">
            <article class="panels__side panels__side--left">
                <div class="panels__side panels__side--inner-left">
                    <p>???????????????????????????????????????????????????????????????</p>
                    <div class="number"><span class="num3">3</span><span class="num2">2</span><span class="num1">1</span></div>
                </div>
                <div class="panels__side panels__side--inner">
                    <div id="login_area1">
                        <div id="login_area1_title">
                            <h1>Continue as Guest</h1>
                            <h2>???????????????????????????</h2>
                        </div>
                        <input type="button" class="loginbtn" id="btn2" value="?????????">
                        <svg class="loginarrow loginarrow--left" width="40" height="40" viewBox="0 0 24 24">
                            <path d="M0 0h24v24h-24z" fill="none" />
                            <path d="M20 11h-12.17l5.59-5.59-1.42-1.41-8 8 8 8 1.41-1.41-5.58-5.59h12.17v-2z" />
                        </svg>
                    </div>
                </div>
            </article>
            <article class="panels__side panels__side--right">
                <div class="panels__side panels__side--inner">
                    <div id="login_area2">
                        <div class="login_area2_title" id="ttl1">
                            <h1>Login</h1>
                            <h2>& ????????????</h2>
                        </div>
                        <input type="button" class="loginbtn" id="btn1a" value="????????????">
                        <input type="button" class="loginbtn" id="btn1b" value="????????????">
                        <svg class="loginarrow loginarrow--right" width="40" height="40" viewBox="0 0 24 24">
                            <path d="M0 0h24v24h-24z" fill="none" />
                            <path d="M12 4l-1.41 1.41 5.58 5.59h-12.17v2h12.17l-5.58 5.59 1.41 1.41 8-8z" />
                        </svg>
                    </div>
                </div>
                <div class="panels__side panels__side--inner-right">
                    <div class="login_area2_content" id="ctn1">
                        <div class="container">
                            <h2>????????????</h2>
                            <p>????????????????????????????????????????????????????????????<br>?????????????????????????????????
                            <p>
                            <form action="login.php" method="post" enctype="multipart/form-data">
                                <br>
                                <div class="row100">
                                    <div class="col">
                                        <div class="inputBox">
                                            <input type="email" name="email" required="required" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>" />
                                            <span class="text">?????????????????????</span>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row100">
                                    <div class="col">
                                        <div class="inputBox">
                                            <input type="password" name="password" required="required" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES); ?>" />
                                            <span class="text">???????????????</span>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                    <span class="pass" id="btn3" style="cursor: pointer;">?????????????????????????????????</span><br>
                                </div>
                                <br>
                                <label for="save" style="cursor: pointer;"><input id="save" type="checkbox" name="save" value="on"> ??????????????????????????????????????????</label>

                                <div class="row100">
                                    <div class="col">
                                        <input type="submit" value="??????" class="login_submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="login_area2_content" id="ctn2">
                        <div class="container">
                            <h2>????????????</h2>
                            <p>?????????????????????????????????????????????????????????
                            <p>
                            <form action="" method="post" enctype="multipart/form-data">
                                <br>
                                <div class="row100">
                                    <div class="col">
                                        <div class="inputBox">
                                            <input type="email" name="email" required="required" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>" />
                                            <span class="text">?????????????????????</span>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inputBox">
                                            <input type="password" name="password" required="required" value="<?php echo htmlspecialchars($_POST['password'], ENT_QUOTES); ?>" />
                                            <span class="text">???????????????</span>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="inputBox">
                                            <input type="text" name="name" required="required" value="<?php echo htmlspecialchars($_POST['name'], ENT_QUOTES); ?>" />
                                            <span class="text">??????</span>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <input type="submit" value="??????" class="login_submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="login_area2_content" id="ctn3">
                        <div class="container">
                            <h2>?????????????????????</h2>
                            <p>???????????????????????????????????????????????????<br>????????????????????????????????????????????????</p>
                            <br>
                            <form action="sentemail.php" method="post" enctype="multipart/form-data">
                                <div class="row100">
                                    <div class="col">
                                        <div class="inputBox">
                                            <input type="email" name="subject" id="subject" required="required" size="35" maxlength="255" value="<?php echo htmlspecialchars($_POST['email'], ENT_QUOTES); ?>" />
                                            <span class="text">?????????????????????</span>
                                            <span class="line"></span>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <input type="submit" value="??????" class="login_submit">
                                    </div>
                                </div>
                            </form>


                        </div>
                    </div>

                </div>
            </article>
        </section>
    </div>



    <!--team-->
    <div class="team" id="team">
        <div id="team_title">
            <h1>Our team</h1>
            <h2>??????????????????</h2>
        </div>
        <div id="team_back"></div>
        <div id="team_list">
            <div id="team_list_big">
                <div id="team_list_mini">
                    <img src="images/kasumi.png" alt="kasumi" id="team_img">
                    <div id="team_txt">
                        <h2>?????????</h2>
                        <p style="margin-left: 10px;">three.js???AR?????????????????????<br>??????????????????</p>
                    </div>
                </div>
                <div id="team_list_mini">
                    <img src="images/hagiwara.png" alt="hagiwara" id="team_img">
                    <div id="team_txt">
                        <h2>???????????????</h2>
                        <p style="margin-left: 10px;">?????????????????????????????????<br>????????????????????????????????????</p>
                    </div>
                </div>
                <div id="team_list_mini">
                    <img src="images/hiroki.png" alt="hiroki" id="team_img">
                    <div id="team_txt">
                        <h2>????????????</h2>
                        <p style="margin-left: 10px;">php????????????????????????<br>?????????????????????????????????</p>
                    </div>
                </div>
            </div>
            <div id="team_list_big" style="margin-top: 100px;">
                <div id="team_list_mini">
                    <img src="images/lely.png" alt="usagi" id="team_img">
                    <div id="team_txt">
                        <h2>????????????????????????</h2>
                        <p style="margin-left: 10px;">???????????????UI/UX???????????????</p>
                    </div>
                </div>
                <div id="team_list_mini">
                    <img src="images/usagi_sleep2.png" alt="usagi" id="team_img">
                    <div id="team_txt">
                        <h2>????????????</h2>
                        <p style="margin-left: 10px;">?????????????????????????????????&???????????????</p>
                    </div>
                </div>
                <div id="team_list_mini">
                    <img src="images/rintaro.png" alt="usagi" id="team_img">
                    <div id="team_txt">
                        <h2>???????????????</h2>
                        <p style="margin-left: 10px;">?????????????????????????????????????????????<br></p>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <!--techs-->
    <div class="techs" id="techs">
        <div id="techs_title">
            <h1>Our techs</h1>
            <h2>????????????</h2>
        </div>

        <div id="techs_contents">
            <div class="techs_wrap">
                <div class="techs_item">
                    <img src="images/HTML5.png" />
                    <h2>HTML5</h2>
                </div>
                <div class="techs_item">
                    <img src="images/CSS3.png" />
                    <h2>CSS3</h2>
                </div>
                <div class="techs_item">
                    <img src="images/JS.png" />
                    <h2>JavaScript</h2>
                </div>
                <div class="techs_item">
                    <img src="images/PHP.png" />
                    <h2>MySQL</h2>
                </div>

                <div class="techs_item">
                    <img src="images/threejs.png" />
                    <h2>three.js</h2>
                </div>
                <div class="techs_item">
                    <img src="images/arjs.png" />
                    <h2>AR.js</h2>
                </div>
                <div class="techs_item">
                    <img src="images/blender.png" />
                    <h2>Blender</h2>
                </div>
                <div class="techs_item">
                    <img src="images/heroku.png" />
                    <h2>heroku</h2>
                </div>
            </div>
        </div>
    </div>



    <!--????-->
    <div class="back">
    </div>



    <!--footer-->
    <footer>
        <div id="footer_1">
            <div id="footer_box">
                <img src="images/logo.png" alt="logo" id="footer_logo">
            </div>
            <div id="footer_box">
                <a href="#introduction">
                    <h2>Our features</h2>
                    <p>???????????????</p>
                </a>
                <a href="#gallery">
                    <h2>Gallery</h2>
                    <p>?????????</p>
                </a>
                <a href="#team">
                    <h2>Our team</h2>
                    <p>??????????????????</p>
                </a>
                <a href="#techs">
                    <h2>Our techs</h2>
                    <p>????????????</p>
                </a>
            </div>
            <div id="footer_box">
                <h2>SNS</h2>
                <p>Twitter</p>
                <p>Instagram</p>
                <p>Facebook</p>
                <p>Youtube</p>
            </div>
            <div id="footer_box">
                <h2>Access</h2>
                <p>?????????</p>
                <p>???168-000</p>
                <p>???????????????????????? HALTOKYO</p>
            </div>
        </div>

        <div id="footer_2">
            <p class="copy">AllCopyright &copy; farmeteam</p>
        </div>
    </footer>



    <!--chara-->
    <div class="U-wrap">

        <div class="Ubody">
            <img src="images/Ubody.png">
            <div class="Uhead">
                <img src="images/Uhead.png">
                <div class="Rear">
                    <img src="images/Rear.png">
                </div>
                <div class="Lear">
                    <img src="images/Lear.png">
                </div>
                <img src="images/eyes.png">
            </div>

        </div>
    </div>

    <div id="over" style="width: 100%; height: 100vh; top:0; position: fixed;"></div>


    <!--Charanav-->
    <div id="popup_area" class="popup">
        <ul>
            <li>
                <a href="mypage.php">
                    <h2>My page</h2>
                    <p>???????????????</p>
                </a>
            </li>
            <li class="QA">
                <h2>Q&A</h2>
                <p>??????????????????</p>
            </li>
            <li class="contact">
                <h2>Contact</h2>
                <p>??????????????????</p>
            </li>
        </ul>


        <div class="batu">
            ??
        </div>
    </div>



    <!--QA-->
    <div id="popup_area2" class="popup">
        <div id="popup_area2_box1">
            <ul>
                <li>
                    <a href="mypage.html">
                        <h2>My page</h2>
                        <p>???????????????</p>
                    </a>
                </li>
                <li class="QA">
                    <h2>Q&A</h2>
                    <p>??????????????????</p>
                </li>
                <li class="contact">
                    <h2>Contact</h2>
                    <p>??????????????????</p>
                </li>
            </ul>
        </div>


        <div id="popup_area2_box2">
            <h1>Q&A</h1>
            <h2>??????????????????</h2>
            <div id="popup_area2_box2_1">
                <div class="cp_qa">
                    <div class="cp_actab">
                        <input id="cp_tabfour031" type="checkbox" name="tabs">
                        <label for="cp_tabfour031">??????????????????</label>
                        <div class="cp_actab-content" id="qa_1">
                            <p>??????????????????</p>
                        </div>
                    </div>
                    <div class="cp_actab">
                        <input id="cp_tabfour032" type="checkbox" name="tabs">
                        <label for="cp_tabfour032">??????????????????</label>
                        <div class="cp_actab-content" id="qa_2">
                            <p>??????????????????</p>
                        </div>
                    </div>
                    <div class="cp_actab">
                        <input id="cp_tabfour033" type="checkbox" name="tabs">
                        <label for="cp_tabfour033">??????????????????</label>
                        <div class="cp_actab-content" id="qa_3">
                            <p>??????????????????</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div id="popup_area2_box3">
            <div class="batu">
                ??
            </div>
        </div>
    </div>



    <!--Contact-->
    <div id="popup_area3" class="popup">
        <div id="popup_area2_box1">
            <ul>
                <li>
                    <a href="mypage.html">
                        <h2>My page</h2>
                        <p>???????????????</p>
                    </a>
                </li>
                <li class="QA">
                    <h2>Q&A</h2>
                    <p>??????????????????</p>
                </li>
                <li class="contact">
                    <h2>Contact</h2>
                    <p>??????????????????</p>
                </li>
            </ul>
        </div>


        <div id="popup_area2_box2">
            <h1>Content Us</h1>
            <h2>??????????????????</h2>
            <div id="popup_area2_box2_1">
            <form action="contact.php" method="POST">
                    <div id="popup_category">
                        <p>????????????</p>
                        <select name="subject" id="subject" class="popup_select">
                            <option value="????????????1">????????????????????????1</option>
                            <option value="????????????2">????????????????????????2</option>
                            <option value="????????????3">????????????????????????3</option>
                            <option value="????????????4">????????????????????????4</option>
                            <option value="????????????5">????????????????????????5</option>
                        </select>
                    </div>
                    <div id="popup_title">
                        <p>????????????</p>
                        <input type="text"  name="text" id="text"value="<?php echo htmlspecialchars($_POST['text'],ENT_QUOTES); ?>">
                    </div>
                    <div id="popup_textarea">
                        <p>????????????????????????</p>
                        <textarea name="body" id="body" cols="30" rows="10" value="<?php echo htmlspecialchars($_POST['body'],ENT_QUOTES); ?>"></textarea><br>
                    </div>
                    <input type="submit" class="popup_submit">
                </form>
            </div>
        </div>


        <div id="popup_area2_box3">
            <div class="batu">
                ??
            </div>
        </div>
    </div>



    <script type="text/javascript">
        $(window).on('load', function() {
            $('.infiniteslide1').infiniteslide();
        });
    </script>
    <script type="text/javascript" src="js/slide.js"></script>
    <script src="js/chara.js"></script>
    <script src="js/index.js"></script>
    <script src="js/index_scroll.js"></script>
</body>

</html>