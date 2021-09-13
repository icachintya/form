<html>
</html>
<head>
 <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #FF00FF;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #DDA0DD;
}

.active {
  background-color:#FF69B4;
}
header {
  text-align: center;
  background-color:#FFC0CB;
}
article {
  text-align: center;
  background-color:#FFFAF0;
}
section {
  text-align: center;
  background-color:#DDA0DD;

</style>
</head>
<body>
<header>
<h1> Pemrograman WEB </h1>
 <ul>
  <li><a href="menu1.html">Home</a></li>
  <li><a class="active" href="login.html"></a></li>
  <li><a href="#">Kontak</a></li>
 </ul>
</header>

<section>
<form action="#">
 <h2> USER LOGIN </h2>
 <label> Username </label><br>
 <input type="text"><br>
 <label> Password </label><br>
 <input type="password"><br><br>
 <input type="submit" value="login">
</form>
</section>
</body>
</html>
