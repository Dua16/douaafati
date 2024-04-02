<?php
   include("database.php");
   $email ="doua@gmail.com";
   $motpasse ="dua11";
   $name ="rabia";
   $full="qandar";
   $sql = "INSERT INTO `etud`(`email`, `password`, `name`, `fullnm`) 
      VALUES('$email','$motpasse','$name','$full')";
   try{
    mysqli_query($conn,$sql);
    echo"";
   }
   catch(mysqli_sql_exception){
          echo"";
   }
   ?>
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ENSAH | E-SERVICES</title>
    <link  rel="stylesheet"  href ="pw.css">
    <link rel="icon" href="OIP.jpeg">
    <style>
        *{
    margin : 0 ;
    padding : 0 ; 
    box-sizing :border-box;
    font-family :Georgia, 'Times New Roman', Times, serif;
}
body{
    display :flex ;
    justify-content: center;
    align-items: center ;
    min-height : 100vh;
    background-image : url('pw1.png');
    background-repeat: repeat;
    backdrop-filter: blur(2px);
}
.box{
    position : relative ; 
    width:400px ;
    height:420px;
    background:#010608;
    border-radius: 8px;
    overflow:hidden;
}
.box::before{
    content :'';
    position: absolute;
    width:380px ;
    height:420px;
    background:#0a0a0a;
    border-radius: 8px;
    top :-50% ;
    left :-50% ;
    background:linear-gradient(0deg,transparent,transparent,#2d5539,#2d5539,#2d5539);
    z-index :1;
    animation: animate 6s linear infinite;
    transform-origin: bottom right ;
}
.box::after{
    content :'';
    position: absolute;
    width:380px ;
    height:420px;
    background:#000000;
    border-radius: 8px;
    top :-50% ;
    left :-50% ;
    background:linear-gradient(0deg,transparent,transparent,#2d5539,#2d5539,#2d5539);
    z-index :1;
    animation: animate 6s linear infinite;
    transform-origin: bottom right ;
    animation-delay : -3s ;
}
@keyframes animate 
{
    0%
    {
        transform: rotate(0deg);
    }
    100%
    {
        transform: rotate(360deg);
    }
} 
.box form{
    position : absolute; 
    inset : 4px ; 
    background:#7ca37ee5 ;
    padding : 50px 40px ;
    border-radius : 8px ;
    z-index : 2 ; 
    display : flex ; 
    flex-direction: column;
}
.box form h2
{
    color :#fff;
    font-weight :500 ;
    text-align : center ; 
    letter-spacing : 0.1em;
}
.box form .inputBox
{
    position : relative ;
    width : 300px ; 
    margin-top : 35px; 
}
.box form .inputBox input
{
    position : relative;
    width : 100% ;
    padding : 20px 10px 10px ;
    background : transparent ; 
    outline : none ; 
    box-shadow : none ;
    color : #000000 ;
    font-size : 1em ;
    letter-spacing : 0.05em ;
    transition : 0.5s;
    z-index : 10 ;
}
.box form .inputBox span
{
    position : absolute ;
    left : 0 ;
    padding : 20px 10px 10px ; 
    pointer-events : none ;
    color : #000000f3 ;
    letter-spacing : 0.05em ;
    transition : 0.5s ;
}
.box form .inputBox input:valid ~ span,
.box form .inputBox input:focus ~ span 
{ 
     color : #fff ;
     font-size : 0.75em ; 
     transform : translateY(-34px);
}
.box form .inputBox i 
{
    position :absolute ;
    left :0;
    bottom :0;
    width : 100% ; 
    height :2px ;
    background : #fff;
    border-radius :4px ;
    overflow :hidden ;
    transition : 0.5s ;
    pointer-events : none ;

}

.box form .inputBox input:valid ~ i,
.box form .inputBox input:focus ~ i{
    height :44px;  
}
.box form .links
{
    display :flex ;
    justify-content : space-between ;
}

.box form .links a
{
    margin :10px 0 ;
    font-size :0.75em ;
    color :#000000 ;
    text-decoration :none ;
}
.box form .links a:hover , 
.box form .links a:nth-child(2) {
    color :#fff ;

} 
.box form input[type ="submit"]{
    border :none ; 
    outline : none ;
    padding : 9px 25px ;
    background :#fff;
    cursor :pointer ; 
    font-size : 0.9em ; 
    border-radius : 4px ;
    font-weight : 600 ; 
    width : 150px; 
    margin-top :10px ;
    justify-content: center;
    align-items: center;
}
.box form input[type ="submit"]:active{
    opacity:0.8;
}
.borderLine{
    position :absolute ;
    top : 0;
    inset : 0 ;

}
.borderLine::before{
    content :'';
    position: absolute;
    width:380px ;
    height:420px;
    background:#1c1c1c;
    border-radius: 8px;
    top :-50% ;
    left :-50% ;
    background:linear-gradient(0deg,transparent,transparent,#2d5539,#2d5539,#2d5539);
    z-index :1;
    animation: animate 6s linear infinite;
    transform-origin: bottom right ;
    animation-delay : -1.5s ;
}
.borderLine::after{
    content :'';
    position: absolute;
    width:380px ;
    height:420px;
    background:#1c1c1c;
    border-radius: 8px;
    top :-50% ;
    left :-50% ;
    background:linear-gradient(0deg,transparent,transparent,#2d5539,#2d5539,#2d5539);
    z-index :1;
    animation: animate 6s linear infinite;
    transform-origin: bottom right ;
    animation-delay : -4.5s ;
}
        </style>
</head>
<body>
       <div class="box">
        <span class="borderLine"></span>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>"  method ="POST">
            <h2>Plateforme e-Services</h2>
               <div class="inputBox">
                <input type="email" required="required">
                <span>user</span>  
                <i>
                </i>            
                </div>
                <div class="inputBox">
                    <input type="password"required="required">
                    <span>password</span>
                    <i></i>
                    </div>
                    <div class="links">
                        <a href="#">Mot de passe oublié</a>
                        <a href=" #">Questions</a>
                    </div>
                    <input type ="submit" value="Se connecter">
                     
        </form>
       </div>
</body>
</html>
<?php
  if($_SERVER["REQUEST_METHOD"]=="POST"){
        $user=filter_input(INPUT_POST,"user",FILTER_SANITIZE_SPECIAL_CHARS);
        $password=filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);
        
     }
   mysqli_close($conn);
?>
