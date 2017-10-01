<?php


 ?>

 <html>

<head>
<style type="text/css">
/* Bordered form */
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #bbbbbb;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}


/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}


@media only screen and (min-width: 769px) {
form {
width:768px;
    margin-left: auto;

}
}


/* Add padding to containers */
.container {
    padding: 16px;

}




</style>
</head>

<body>

  <form>
  <!--<div class="imgcontainer">
    <img src="img_avatar2.png" alt="Avatar" class="avatar">
  </div>-->

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit" name="login" id="login">Login</button>

  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="submit" name="register" id="register">Register</button>
  </div>
</form>




</body>
