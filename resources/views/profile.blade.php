<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <link rel="shortcut icon" href="/img/logo.png">
        <title>Profile Page</title>
        <link rel="stylesheet" href="css2/style3.css">
    </head>
    <body>
        <div class="container">
           <div class="profile-box">
               <img src="/img/menu.png" class = "menu-icon">
               <img src="/img/profile.png" class = "profile-pic-icon">
               <h3>
             {{session('useremail')}} 
               </h3>
               <p>welcome in your acoount</p>
               <div class="social-media">
                   <img src="img/instagram.png">
                   <img src="img/telegram.png">
               </div>
               <button value="submit" class="logbutn"><a href="/logout" >Logout</a></button><br>
               <div class="profile-button">
                   <p>learn more..</p>
                   <img src="/img/arrow.png">
               </div>
           </div>
        </div>
        
    </body>
</html>
