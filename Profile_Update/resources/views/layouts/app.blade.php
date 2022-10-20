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
      <li class="active"><a href="home">Registration</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">  Social Media <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/FACEBOOK">Facebook</a></li>
          <li><a href="/instagram">instagram</a></li>
          <li><a href="/twitter">twitter</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">  STUDIES <span class="caret"></span></a>
      <ul class="dropdown-menu">
          <li><a href="/page">REG PAGE</a></li>
          <li><a href="/#">...</a></li>
        </ul>
      <li><a href="login">Login</a></li>
      <li><a href="profile">Profile</a></li>
    </ul>
  </div>
</nav>
    @yield('content')
</body>

</html>