<!DOCTYPE html>
<html>
<?php include_once 'globals.php'; ?>
<?php include_once 'includes/head.php' ?>
<body>
  <?php include 'includes/navbar.php' ?>

  <div class="row medium-8 large-7 columns">
  <?php
  $i = 0;
  for($i=0; $i<5; $i++){ ?>
  <div class="blog-post">
    <h3>Awesome blog post title <small>3/6/2015</small></h3>
    <img class="thumbnail" src="http://placehold.it/850x350">
    <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
    <div class="callout">
      <ul class="menu simple">
        <li><a href="#">Author: Caique Campos</a></li>
        <li><a href="#">Comments: 3</a></li>
      </ul>
    </div>
  <?php } ?>
  </div>
  <?php include 'includes/js.php' ?>
</body>
</html>
