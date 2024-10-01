<head>

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="Profile/Views/css/styles.css" />
    <script src="profile/views/js/script.js"></script>
    <script
      src="https://kit.fontawesome.com/8107febab7.js"
      crossorigin="anonymous"
    ></script>
    <!--in the head i have the normal viewport meta tag, the css stylesheet ofcourse, and a fontawesome script for the icons-->
  </head>
  <body>
    <div class="container">
      <!--this is the main grid container that holds all the items-->

      <header>
        <!--this is the first item in the grid which hold the header and the nav-bar-->
        <i class="fa-solid fa-cat"></i>
        <nav>
          <a onclick="page('/')">Home</a>
          <a onclick="page('/about')">About</a>
          <a onclick="page('/contact')">Contact</a>
        </nav>
      </header>