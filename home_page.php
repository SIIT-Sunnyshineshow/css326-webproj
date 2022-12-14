<?php 
require_once('connect.php'); 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Template Page</title>
  </head>
  <style>
    body {
      margin: 0;
    }

    header {
      font-family: Arial, Helvetica, sans-serif;
      width: 100%;
      background-color: #1c3948;

      color: #e4960e;
      font-size: 65px;
      text-shadow: 2px 2px 5px #000000;
    }

    .header {
      font-family: Arial, Helvetica, sans-serif;
      background-color: #1c3948;
      text-decoration: none;
      color: #e4960e;
      font-size: 65px;
      text-shadow: 2px 2px 5px #000000;
    }

    .header_button {
      width: 25%;
      height: 50px;
      background-color: #eba92a;
      transition-duration: 0.4s;

      font-family: Arial, Helvetica, sans-serif;
      font-size: 25px;
      font: bold;
    }

    .header_button:hover {
      background-color: white;
      color: black;
      border: 2px solid #000000;
    }

    footer {
      font-family: Arial, Helvetica, sans-serif;
      width: 100%;
      background-color: #1c3948;

      color: #e4960e;
      font-size: 30px;
      bottom: 0px;
    }

    .grid-container {
      display: grid;
      grid-template-columns: 200px 400px 400px;
      padding: 10px;
    }
    .grid-item {
      background-color: rgba(255, 255, 255, 0.8);
      /* border: 1px solid rgba(0, 0, 0, 0.8); */
      font-size: 30px;
    }
  </style>
  <header>
    <div style="padding: 20px"><a href="./home_page.php" class="header">Librariann</a></div>
  </header>
  <body>
    <div>
      <a href="./item_page.php"
        ><button class="header_button"><strong>Item</strong></button></a
      ><a href="./borrow_page.php"
        ><button class="header_button"><strong>Borrow</strong></button></a
      ><a href="book_page.php"
        ><button class="header_button"><strong>Books</strong></button></a
      ><?php 
      if (isset($_SESSION['username']) && $_SESSION['username'])
      {
        echo "<a href=\"user_page.php\"
        ><button class=\"header_button\"><strong>User</strong></button></a
      >";
      }
      else
      {
        echo "<a href=\"SignIn_page.php\"
        ><button class=\"header_button\"><strong>Login</strong></button></a
      >";
      }
      
      ?>
    </div>
    <div id="actual_content">
      <div
        style="
          padding: 20px;
          font-size: 30px;
          font-family: Arial, Helvetica, sans-serif;
        "
      >
        <form id="search_area" style="margin-left: 20px; margin-top: 20px" action="search.php" method="POST">
          <input
            type="text"
            name="bookname"
            placeholder="Type to search..."
            style="
              width: 30%;
              height: 30px;
              font-size: 20px;
              margin-right: 10px;
            "
          />
          <input type="submit" style="padding: 9px" />
        </form>
      </div>
      <!-- Books -->
      <?php
      $i = 0;

      $query = "SELECT * FROM book INNER JOIN genre ON genre.genre_id = book.genre_id INNER JOIN bookshelf ON bookshelf.book_id = book.book_id ORDER BY book_name";

      $result = $mysqli->query($query);

      while($row=$result->fetch_array())
      {
        echo "<div style=\"padding: 35px\">
        <div class=\"grid-container\" style=\"margin-left: 50px\">
          <div class=\"grid-item\">
            <img
              src=\"".$row['book_img']."\"
              alt=\"book\"
              width=\"200px\"
            />
          </div>
          <div class=\"grid-item\" style=\"margin-left: 30px\">
            Book name: ".$row['book_name']." <br /><br />
            Author: ".$row['author']." <br /><br />
            Genre: ".$row['genre_name']." <br /><br />
            Location: ".$row['bookshelf_serial']." <br /><br />
          </div>
          <div class=\"grid-item\" style=\"margin-left: 30px\">
            Book ID: ".$row['book_id']." <br /><br />
            Date Added: ".$row['date_added']." <br /><br />
            Status: ".$row['borrowed_status']." <br /><br />
          </div>
        </div>
      </div>";
      $i++;
      }
      ?>
      
      <!-- Books -->
      <!-- <div style="padding: 35px">
        <div class="grid-container" style="margin-left: 50px">
          <div class="grid-item">
            <img src="assets/book_detail_large.gif" alt="book" width="200px" />
          </div>
          <div class="grid-item" style="margin-left: 30px">
            Book name: Citrus <br /><br />
            Author: Zenshu?? <br /><br />
            Genre: Shoujo, Yuri <br /><br />
            Location: Y-001 <br /><br />
          </div>
          <div class="grid-item" style="margin-left: 30px">
            Book ID: CT001 <br /><br />
            Date Added: 19/10/2022 <br /><br />
            Status: Available <br /><br />
          </div>
        </div>
      </div> -->
    </div>
  </body>
  <footer><div style="padding: 10px">Contact Information</div></footer>
</html>
