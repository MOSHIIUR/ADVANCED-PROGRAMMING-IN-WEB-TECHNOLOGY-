<html>
<head>
<title>@yield('title')</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">AWT</a>
    </div>
    <ul class="nav navbar-nav">

      </li>

      <li><a href="home">Homepage</a></li>
      <li><a href="login">Login</a></li>
      <li><a href="signup">Registration</a></li>
      <li><a href="profile">Profile</a></li>
      <li><a href="logout">Log Out</a></li>
    </ul>
  </div>
</nav>
    @yield('content')
</body>

</html>