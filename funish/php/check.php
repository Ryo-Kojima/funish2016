<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="google-site-verification" content="yxJIcVN_VyofWO6KBZ39ENa6fhGDuDo6mnKKa2nnHpE" />
    <meta name="keywords" content="funish,ビジコン,学生団体funish,事業立案,メンバー">
    <meta name="description" content="ビジネスコンテストや制作など幅広く展開する学生団体funish皆さまの想いをビジネスを通して具現化することを心がけています。お気軽にお問い合わせください。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="robots" content="index, follow">
    <link rel="shortcut icon" href="favicon/funish.ico">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Funish | 確認画面</title>
  </head>
  <body>
    <header id="header">
      <div id="header_pc">
        <div id="header_inner_pc2">
          <div class="header_left">
            <a href="./index.php"><h1><img src="images/logo.jpg" alt="logo"></h1></a>
          </div>
          <div class="header_right">
            <nav>
              <ul>
                <li id="list1"><a href="#AboutUs">About us</a></li>
                <li id="list2"><a href="#Activity">Activity</a></li>
                <li id="list3"><a href="#Staff">Staff</a></li>
                <li id="list4"><a href="#Gallery">Gallery</a></li>
                <li id="list5"><a href="#Record">Record</a></li>
                <li id="list6"><a href="#Contact">Contact</a></li>
              </ul>
            </nav>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div id="header_sp">
        <div id="header_inner_sp2">
          <div class="header_left_sp">
            <a href="../index.php"><h1><img src="images/logo.jpg" alt="logo"></h1></a>
          </div>
          <div class="header_nav clearfix">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
          <div class="header_right_sp">
            <nav>
              <ul>
                <li><a href="#AboutUs">About us</a></li>
                <li><a href="#Activity">Activity</a></li>
                <li><a href="#Staff">Staff</a></li>
                <li><a href="#Gallery">Gallery</a></li>
                <li><a href="#Record">Record</a></li>
                <li><a href="#Contact">Contact</a></li>
                <li id="close">×</li>
              </ul>
            </nav>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </header>
    <section id="Contact">
      <div id="Contact_pc">
        <div id="Contact_wapper_pc">
          <h2>Contact</h2>
          <form class="form_pc" action="./comp.php" method="post">
            <table style="margin: 0 auto;">
              <tbody>
                <tr>
                  <th>名前<span>*</span></th><td><?php echo $name;?></td>
                </tr>
                <tr>
                  <th>学校名/企業名<span>*</span></th><td><?php echo $school;?></td>
                </tr>
                <tr>
                  <th>学部(任意)</th><td><?php echo $major;?></td>
                </tr>
                <tr>
                  <th>学年(任意)</th><td id="age"><?php echo $age;?></td>
                </tr>
                <tr>
                  <th>メールアドレス<span>*</span></th><td><?php echo $email;?></td>
                </tr>
                <tr>
                  <th>お問い合わせ内容<span>*</span></th><td><?php echo $message;?></td>
                </tr>
              </tbody>
            </table>
            <input type="submit" name="send" value="send" id="submit_pc">
          </form>
        </div>
      </div>
      <div id="Contact_sp">
        <div id="Contact_wapper_sp">
          <h2>Contact</h2>
          <form class="form_sp" action="./comp.php" method="post">
            <table style="margin: 0 auto;">
              <tbody>
                <tr>
                  <th>名前<span>*</span></th><td><?php echo $name;?></td>
                </tr>
                <tr>
                  <th>学校名/企業名<span>*</span></th><td><?php echo $school;?></td>
                </tr>
                <tr>
                  <th>学部(任意)</th><td><?php echo $major;?></td>
                </tr>
                <tr>
                  <th>学年(任意)</th><td><?php echo $age;?></td>
                </tr>
                <tr>
                  <th>メールアドレス<span>*</span></th><td><?php echo $email;?></td>
                </tr>
                <tr>
                  <th>お問い合わせ内容<span>*</span></th><td><?php echo $message;?></td>
                </tr>
              </tbody>
            </table>
            <input type="submit" name="send" value="send" id="submit_sp">
          </form>
        </div>
      </div>
    </section>
    <footer id="footer">
      <div id="footer_pc">
        <div id="footer_wapper_pc">
          <ul class="footer_list">
            <li><a href="#AboutUs">About us</a></li>
            <li><a href="#Activity">Activity</a></li>
            <li><a href="#Staff">Staff</a></li>
            <li><a href="#Gallery">Gallery</a></li>
            <li><a href="#Record">Record</a></li>
            <li><a href="#Contact">Contact</a></li>
          </ul>
          <div class="clearfix"></div>
          <div class="footer_sns">
            <div class="sns">
              <a href="https://www.facebook.com/funish.tokyo"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <div class="sns2">
              <a href="https://twitter.com/funish2016"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
          </div>
          <p><small>Copyright &copy;funish ALL RIGHTS RESERVED.</small></p>
        </div>
      </div>
      <div id="footer_sp" class="footer_layout">
        <div id="footer_wapper_sp">
          <ul class="footer_list">
            <li id="footer_list_sp1"><a href="#AboutUs">Aboutus</a></li>
            <li id="footer_list_sp2"><a href="#Activity">Activity</a></li>
            <li id="footer_list_sp3"><a href="#Staff">Staff</a></li>
            <li id="footer_list_sp4"><a href="#Gallery">Gallery</a></li>
            <li id="footer_list_sp5"><a href="#Record">Record</a></li>
            <li id="footer_list_sp6"><a href="#Contact">Contact</a></li>
          </ul>
          <div class="clearfix"></div>
          <div class="footer_sns">
            <div class="sns">
              <a href="https://www.facebook.com/funish.tokyo"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <div class="sns2">
              <a href="https://twitter.com/funish2016"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
          </div>
          <p><small>Copyright&copy;funishALLRIGHTSRESERVED.</small></p>
        </div>
      </div>
    </footer>
  </body>
</html>
