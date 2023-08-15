<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
        <title>website with login & registration</title>
        <style>
            *{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: 'poppins',sans-serif;
}
body{
    display:flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background:url(background1.jpg)no-repeat;
   
    background-size: cover;
    background-position: center;
}
header{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    padding:20px 100px;
    display:flex;
    justify-content: space-between;
    align-items:center ;
    z-index: 99;

}
header::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    /* height:100%; */
    background:transparent;
    backdrop-filter:blur(1px);
    z-index:-1;
}
header::after{
    content:'';
    position:absolute;
    top:0;
    left:-100%;
    width:100%;
    height:20%;
    background:linear-gradient(90deg,transparent,rgba(69, 67, 97, 0.815),transparent);
transition:.9s;
}
header:hover::after{
    left:100%;
}
.logo{
    font-size: 2em;
    /* color:#fff; */
    font-family: 'Caprasimo', cursive;
    user-select: none;
    transition:.4s;
background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
cursor:pointer;
}

.logo:hover{
    
    /* transform:scale(1.3); */
}
#check{
    display:none;
}
.icons{
    position:absolute;
    font-size:2.8rem;
    color:#fff;
    cursor:pointer;
    display:none;
right:5%;
}
/* BREAKPOINTS */
@media (max-width:992px){
    header{
        padding:1.3rem 5%;
    }
}
@media (max-width:768px){
.icons{
    display:inline-flex;
}
#check:checked~.icons #menu-icon{
    display:none;
}
#check:checked~.icons #close-icon{
    display:block;
}
.icons #close-icon{
    display:none;
}
    .navigation{
    position:absolute;
    top:100%;
    left:0;
    width:100%;
    height:0;
    background:rgba(0,0,0,.1);
    backdrop-filter:blur(1px);
    box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    transition:.3s ease;
    overflow:hidden;
}
#check:checked~.navigation{
    height:17.7rem;
}
    .navigation a{
        display:block;
        font-size:1.1rem;
        margin:1.5rem 0;
        text-align:center;
        transform:translateY(-50px);
        opacity:0;
        transition:.3s ease;
    }
    #check:checked~.navigation a{
        transform:translateY(0);
        opacity:1;
        transition-delay:calc(.15s * var(--i));
    }
    
}



.navigation a{
position: relative;
font-size: 1.1em;
color:#fff;
text-decoration: none;
font-weight: 500;
margin-left: 40px;
}
.navigation a::after{
    content:'';
    position:absolute;
    width:100%;
    height:3px;
    background:#fff;
    border-radius: 5px;
    left:0;
    bottom:-6px;
    transform:scaleX(0);
    transform-origin: right;
    transition: transform .5s;
}
.navigation a:hover::after{
    transform-origin: left;
transform:scalex(1);
}
.navigation .btnlogin-popup{
width:130px;
height:50px;
background:transparent;
border:2px solid #fff;
outline:none;
border-radius:6px;
cursor:pointer;
font-size: 1.1em;
color:#fff;
font-weight: 500;
margin-left: 40px;
transition: .5s;
}
.navigation .btnlogin-popup:hover{
    background: #fff;
    color:#162938;
}
.navigation .subcribe{
    width:130px;
height:50px;
background:transparent;
border:2px solid #fff;
outline:none;
border-radius:6px;
cursor:pointer;
font-size: 1.1em;
color:#fff;
font-weight: 500;
margin-left: 40px;
transition: .5s;
}
.navigation .subcribe:hover{
    background: #fff;
    color:#162938;
}
.wrapper{
    position: relative;
    width: 400px;
    height: 440px;
    background: transparent;
    border: 2px solid rgba(255,255,255,.5);
    border-radius: 20px;
    backdrop-filter: blur(20px);
    box-shadow: 0 0 30px rgba(0,0,0,.5);
    display: flex;
    justify-content: center;
    align-items:center;
    overflow: hidden;
    transform: scale(0);
    transition: transform .5s ease,height .2s ease;
    
}
.wrapper.active-popup{
    transform: scale(1);
}
.wrapper.active{
    height: 520px;
}
.wrapper .form-box{
    width: 100%;
    padding: 40px;
}
.wrapper .form-box.login{
    transition: transform .18s ease;
    transform: translateX(0);
}
.wrapper.active .form-box.login{
    transition: none;
    transform: translateX(-400px);
}
.wrapper .form-box.register{
    position: absolute;
    transition: none;
    transform: translateX(400px);
}
.wrapper.active .form-box.register{
    transition: transform .18s ease;
    transform: translateX(0);
}
.wrapper .icon-close{
   position: absolute; 
   top: 0;
   right: 0;
   width: 45px;
   height: 45px;
   background: #162938;
   font-size: 2em;
   color: #fff;
   display: flex;
   justify-content: center;
   align-items: center;
   border-bottom-left-radius: 20px;
   cursor: pointer;
   z-index: 1;
}
.form-box h2{
    font-size: 2em;
    color: white;
    text-align: center;
}
.input-box{
    position: relative;
    width: 100%;
    height:50px ;
    border-bottom: 2px solid #fff;
    margin: 30px 0;
}
.input-box label{
    position: absolute;
    top:50%;
    left: 5px;
    transform: translateY(-50%);
    font-size: 1em;
    color: white;
    font-weight: 500;
    pointer-events: none;
    transition: .5s;
}
.input-box input:focus~label,
.input-box input:valid~label{
    top: -5px;
}
.input-box input{
    width: 100%;
    height: 100%;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    color: #fff;
    font-weight: 600;
    padding: 0 35px 0 5px;
}
.input-box .icon{
    position: absolute;
    right: 8px;
    font-size: 1.2em;
    color: #fff;
    line-height: 57px;
}
.remember-forgot{
    font-size: .9em;
    color: #fff;
    font-weight: 500;
    margin: -15px 0 15px;
    display: flex;
    justify-content: space-between;

}
.remember-forgot label input{
   accent-color: #fff; 
   margin-right: 3px;
}
.remember-forgot a{
    color: #fff;
    text-decoration: none;
}
.remember-forgot a:hover{
  text-decoration: underline;  
}
.btn{
    width: 100%;
    height: 45px;
    background: rgba(113, 7, 128, 0.548);
    border: none;
    outline: none;
    border-radius: 6px;
    cursor: pointer;
    font-size: 1em;
    color: #fff;
    font-weight: 500;
    transition:.5s;
}
.btn:hover{
    background-color:rgb(114, 7, 128);
    transform:scale(1.1);
}

.login-register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    font-weight: 500;
    margin: 25px 0 10px;
}
.login-register p a{
    color: #fff;
    text-decoration: none;
    font-weight: 600;
}
.login-register p a:hover{
    text-decoration: underline;
}
            </style>
    </head>
    <body>
        <header>
            <h2 class="logo">ABUBAKAR</h2>
            <input type="checkbox" id="check">
            <label for="check" class="icons"><ion-icon name="menu" id="menu-icon"></ion-icon>
            <ion-icon name="close" id="close-icon"></ion-icon>
</label>
            <nav class="navigation">
                <a href="#" style="--i:0;">Home</a>
                <a href="#" style="--i:1;">About</a>
                <a href="#" style="--i:2;">Services</a>
                <a href="#" style="--i:3;">Contact</a>
                <button class="btnlogin-popup">Login</button>
                <button class="subcribe" onclick="location.href='@Url.Action("https://www.linkedin.com/in/abubakrfarooq/?lipi=urn%3Ali%3Apage%3Ad_flagship3_discover_hub%3BDBOtysfJSEupfFWBs1EDkA%3D%3D")>Subscribe</button>

            </nav>
        </header>
        <div class="wrapper">
            <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
            <div class="form-box login">
                <h2>Login</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="Password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
            <div class="form-box register">
                <h2>Registration</h2>
                <form action="#">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person"></ion-icon></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="Password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree to the terms & conditions</label>
                    
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
        <script>
      const wrapper = document.querySelector('.wrapper');
const loginlink = document.querySelector('.login-link');
const registerlink = document.querySelector('.register-link');
const btnpopup = document.querySelector('.btnlogin-popup');
const iconclose = document.querySelector('.icon-close');
registerlink.addEventListener('click',()=>{
    wrapper.classList.add('active');
});
loginlink.addEventListener('click',()=>{
    wrapper.classList.remove('active');
});
btnpopup.addEventListener('click',()=>{
    wrapper.classList.add('active-popup');
});
iconclose.addEventListener('click',()=>{
    wrapper.classList.remove('active-popup');
});
        </script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>