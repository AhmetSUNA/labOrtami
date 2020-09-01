<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Staj Sunum</title>
  
  <style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #16a085;
}

.container {
  max-width: 600px;
  width: 100%;
  height: auto;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  height: auto;
  border-radius: 40px;
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
  border-radius: 40px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
  border-radius: 40px;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
  border-radius: 40px;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  border-radius: 40px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
  border-radius: 40px;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
  border-radius: 40px;
}



#contact button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

.middle{
  width: 100%;
  height: 100%;
  position: relative;
  float: left;
  display: flex;
  justify-content: center;
  align-items: center;

}

.middle > .container{
  width: auto;
  height: auto;
  position: relative;
  float: left;
  background-color: #ffffff;
  margin: 200px 40px;
  padding: 30px 30px;
  border-radius: 40px;

}

.middle > .container a{
  width: 100%;
  height: auto;
  position: relative;
  text-align: center;
  background-color: #ffffff;
  padding-left: 40px;
  padding-right: 40px;
  text-decoration: none;
  color: black;
  margin-top: 10px;
  margin-bottom: 10px;
  border: 1px solid black;
  margin: 10px 20px;
  background: lightgray;
  font-size: 22px;
  border-radius: 40px;
  color: black;

}

.middle > .container a:hover{
  color: white;
  background: black;
  transition: 0.2s;
  border-radius: 40px;
}

.home{
  width: 100%;
  height: auto;
  position: relative;
  float: left;
  border-radius: 40px;
}

.home > .home-container{
  width: 100%;
  height: auto;
  position: relative;
  float: left;
  border-radius: 40px;
}

.home > .home-container > .icon{
  width: auto;
  height: auto;
  position: relative;
  float: right;
  padding-right: 30px;
  border-radius: 40px;
  padding-top: 20px;
}

.home > .home-container > .icon > img{
  width: 50px;
  height: 30px;
  position: relative;
  float: right;
  padding-right: 20px;
  
}

.home > .home-container > .icon > a{
  width: auto;
  height: auto;
  position: relative;
  float: right;
  color: black;
  text-decoration: none;
  font-size: 22px;
  font-weight: 600;
  letter-spacing: 1px;
  margin-left: -10px
  
}

  </style>
  

  
</head>

<body>

  <div class="home">
    <div class="home-container">
      <div class="icon">
        
        <a href="http://localhost/labOrtami/">ANASAYFA</a>
        <img src="25694.svg">

      </div>
    </div>
  </div>
  
     
  <div class="middle">
    <div class="container">
      <a href="Command Injection/index.php">Command Injection</a> <br>
      <a href="Cross Site Request Forgery/index.php">Cross Site Request Forgery</a> <br>
      <a href="Cross Site Scripting/index.php">Cross Site Scripting</a> <br>
      <a href="File Inclusion/index.php">File Inclusion</a> <br>
      <a href="File Upload/index.php">File Upload</a> <br>
      <a href="SQL Injection/index.php">SQL Injection</a> <br>
      <a href="url/index.php">URL</a> <br>
    </div>
  </div>
    
    
    
    
  

</body>
</html>
