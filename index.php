<?php
$vid = array('1.mp4','2.mp4','3.mp4','4.mp4','5.mp4');
shuffle($vid);
?>
<html>
  <head>
    <meta property="og:title" content="Fumo!">
<meta property="og:image" content="fumo.jpg">
<meta property="og:description" content="All you need is a little fumo!">
<meta property="og:url" content="https://fumo.moe">
<meta name="twitter:card" content="summary_large_image">
    <meta name="title" content="Fumo!">
<meta name="description" content="fumo.moe">
<meta name="keywords" content="fumos">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<title>Fumo!</title>
  </head>
    <style>
body {
  background-color: black;
}
h1 {
  color: white;
}
h2 {
  color: white;
}
p {
  color: white;
}
.content {
  max-width: 500px;
  margin: auto;
  text-align: center;
}
a:link {
  color: green;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}
h2 {
  font-style: italic;
}
</style>

<body class="content">

<h1>Fumo!</h1>
<h2>All you need is a little fumo!</h2>
<ul>
  <?php
   for( $i = 0; $i < 3; $i++)
      echo "<li style=\"display: inline;\">
              <video width=\"320\" height=\"320\" controls=\"\" autoplay=\"\" loop=\"\">
              <source src=\"$vid[$i]\" type=\"video/mp4\">
              </video>
            </li>";

?>
 </ul>
</ul>

<p>Thanks to <a href="https://www.instagram.com/presidente_loli_chan/">Presidente Loli-chan</a> for funding this website</p>
<p>Created and managed by <a href="https://nekoto.moe">Nekoto</a></p>
</body>
</html>