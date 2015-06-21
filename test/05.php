<html>
  <head>

      <title>
          My first website
      </title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

      <style>
          body{
              background: darkred;
          }

          .image {
              width: 750px;
              height: 820px;
              border-radius : 410px;
              border: 10px solid rgba(201, 34, 255, 0.100);
          }
      </style>
      <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
      <script>
          $(function(){
              $('#img1').on('click', function(){
                 alert('text');
              });

          });
      </script>
  </head>
  <body id="body">
  <div align="center">
      <p><h1><font color="dark">Welcome to my website</font></h1></p>
      </div>

        <hr align="center" color="black" width="80%">
  <div align="center">
      <img src="../images/Desert.jpg" id="img1" class="image">
  </div>
  <div align="center">
      <a href="http://google.com">Google</a> | <a href="http://ok.ru">Odnoklassniki</a>
  </div>
  <hr align="center" color="black" width="90%">
  <div align="center">
      <p><h1><font color="blue">Kiril ii cacashea </font></h1></p>
      <div align="center">
          <img src="../images/Tulips.jpg" id="img2" class="image">
      </div>

  </div>
  </body>

</html>




<?php
/**
 *
*/