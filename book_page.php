<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Index Page</title>
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
      position: fixed;
      bottom: 0px;
    }
    .subhead {
      width: auto;
      padding: 20px 10px 0 20px;

      margin-bottom: 10px;

      transition-duration: 0.4s;
      font: 30px Arial, sans-serif;
    }
    #announcement,
    #newbook {
      font-weight: bold;
      margin-bottom: 10px;
    }

    ul {
      list-style-type: none;
      width: 25%;
      margin: 0;
      padding: 1%;
      overflow: hidden;
      background-color: #eba92a;
    }
    a {
      text-decoration: none;
      text-align: justify;
    }

    img {
      padding: 0 20px 0;
      align-content: center;
    }
    #extra1,
    #extra2,
    #extra3,
    #extra4,
    #extra5 {
      padding: 0 100px 0;
    }
    html {
      scroll-behavior: smooth;
      overflow: scroll;
      overflow-x: hidden;
    }

    figure {
      display: inline-block;
    }
    figcaption {
      text-align: center;
    }
  </style>
  <header>
    <div style="padding: 20px">Librariann</div>
  </header>
  <body>
    <div>
      <a href="./item_page.html"
        ><button class="header_button"><strong>Item</strong></button></a
      ><a href="./borrow_page.php"
        ><button class="header_button"><strong>Borrow</strong></button></a
      ><a href="book_page.php"
        ><button class="header_button"><strong>Books</strong></button></a
      ><a href="SignIn_page.php"
        ><button class="header_button"><strong>Login</strong></button></a
      >
    </div>

    
    <br />

    <div>
      <div class="subhead" id="newbook">New Book Arrived !!!</div>
      <figure>
        <img src="\css326\assets\123.jpg" style="width: 300px; height: 199px" />
        <figcaption>It Starts With Us</figcaption>
      </figure>
      <figure>
        <img src="\css326\assets\124.jpg" style="width: 300px; height: 199px" />
        <figcaption>Faith Still Moves Mountains</figcaption>
      </figure>
      <figure>
        <img src="\css326\assets\125.jpg" style="width: 300px; height: 199px" />
        <figcaption>The Light We Carry</figcaption>
      </figure>
      <figure>
        <img src="\css326\assets\126.jpg" style="width: 300px; height: 199px" />
        <figcaption>Diary of a Wimpy Kid: Diaper Overlode</figcaption>
      </figure>
      <figure>
        <img src="\css326\assets\127.jpg" style="width: 150px; height: 199px" />
        <figcaption>Think Again</figcaption>
      </figure>
      <br />
      <br />
      <br />
      <br />
    </div>
  </body>
  <footer><div style="padding: 10px">Contact Information</div></footer>
</html>
