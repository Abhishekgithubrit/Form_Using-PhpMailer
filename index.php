<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        
    </style><style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap');

:root{
    --green:#27ae60;
    --black:#444;
    --light-color:#777;
    --bg-color:#e6e6e6;
    --border:.1rem solid rgba(0,0,0,.2);
    --box-shadow:.4rem .4rem 1rem #ccc,
                -.4rem -.4rem 1rem #fff;
    --box-shadow-inset:.4rem .4rem 1rem #ccc inset,
                      -.4rem -.4rem 1rem #fff inset;
}

*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    outline: none; border:none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}

html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
}

body{
    background: var(--bg-color);
    padding-left: 30rem;
}

body.active{
    --black:#fff;
    --light-color:#ddd;
    --bg-color:#222;
    --border:.1rem solid rgba(0,0,0,.4);
    --box-shadow:.4rem .4rem 1rem #111,
                -.4rem -.4rem 1rem #333;
    --box-shadow-inset:.4rem .4rem 1rem #111 inset,
                      -.4rem -.4rem 1rem #333 inset;
}

section{
    min-height: 100vh;
    padding:2rem;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding:1rem 3.5rem;
    border-radius: .5rem;
    font-size: 1.7rem;
    cursor: pointer;
    background: none;
    color:var(--black);
    box-shadow: var(--box-shadow);
}

.btn:hover{
    box-shadow: var(--box-shadow-inset);
    color:var(--green);
}

.heading{
    text-align: center;
    font-size: 5rem;
    color:var(--black);
    text-transform: uppercase;
    padding-bottom: 2rem;
}

.heading span{
    color:var(--green);
    text-transform: uppercase;
}

.header{
    position: fixed;
    top:0; left: 0;
    z-index: 999;
    background: var(--bg-color);
    width: 30rem;
    border-right: var(--border);
    height: 100%;
    padding:2rem;
    text-align: center;
}

.header .user img{
    margin:1rem 0;
    border:1rem solid transparent;
    border-radius: 50%;
    height: 18rem;
    width: 18rem;
    box-shadow: var(--box-shadow);
}

.header .user h3{
    color:var(--black);
    font-size: 2.5rem;
}

.header .user p{
    color:var(--green);
    font-size: 1.5rem;
}

.header .navbar{
    padding-top: 1rem;
}

.header .navbar a{
    display: block;
    margin:1.5rem 0;
    padding:.7rem;
    border-radius: 5rem;
    font-size: 2rem;
    box-shadow: var(--box-shadow);
    color:var(--black);
}

.header .navbar a:hover{
    box-shadow: var(--box-shadow-inset);
    color: var(--green);
}

#menu-btn{
    position: fixed;
    top:1.5rem; left: 2rem;
    z-index: 1000;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    border-radius: 50%;
    font-size: 2rem;
    cursor: pointer;
    box-shadow: var(--box-shadow);
    text-align: center;
    color:var(--black);
    background: var(--bg-color);
    display: none;
}

#menu-btn:hover{
    color:var(--green);
    box-shadow: var(--box-shadow-inset);
}

#theme-toggler{
    position: fixed;
    top:1.5rem; right: 2rem;
    z-index: 1000;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    border-radius: 50%;
    font-size: 2rem;
    cursor: pointer;
    box-shadow: var(--box-shadow);
    text-align: center;
    color:var(--black);
    background: var(--bg-color);
}

#theme-toggler:hover{
    color:var(--green);
    box-shadow: var(--box-shadow-inset);
}

.home{
    display: flex;
    flex-flow: column;
    align-items: center;
    justify-content: center;
    text-align: center;
}

.home .content h3{
    font-size: 7rem;
    color:var(--black);
    line-height: 1.1;
    text-transform: uppercase;
}

.home .content p{
    font-size: 2rem;
    color:var(--green);
    padding-bottom: .5rem;
}

.home .share{
    position: relative;
    top: 10rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    padding:1rem;
}

.home .share a{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    box-shadow: var(--box-shadow);
    margin:.5rem;
    font-size: 2rem;
    color:var(--black);
    border-radius: .5rem;
}

.home .share a:hover{
    box-shadow: var(--box-shadow-inset);
    color:var(--green);
}

.about .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap-reverse;
    gap:2rem;
}

.about .row .box-container{
    flex:1 1 40rem;
    display: flex;
    gap:1.5rem;
    flex-wrap: wrap;
}

.about .row .box-container .box{
    flex:1 1 18rem;
    text-align: center;
    padding:2rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
}

.about .row .box-container .box h3{
    font-size: 5rem;
    color:var(--black);
    line-height: 1.1;
}

.about .row .box-container .box p{
    font-size: 1.7rem;
    color:var(--light-color);
    padding:.5rem 0;
}

.about .row .content{
    flex:1 1 40rem;
}

.about .row .content h3{
    font-size: 3.5rem;
    color:var(--black);
    line-height: 1.8;
}

.about .row .content h3 span{
    color:var(--green);
}

.about .row .content p{
    font-size: 1.7rem;
    color:var(--light-color);
    line-height: 1.8;
    padding:1rem 0;
}

.about .row:nth-child(3){
    padding-top: 2rem;
}

.about .row .progress{
    flex:1 1 40rem;
}

.about .row .progress h3{
    color:var(--black);
    font-weight: normal;
    font-size: 2rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.about .row .progress .bar{
    box-shadow: var(--box-shadow);
    border-radius: 5rem;
    height:2rem;
    padding:.5rem;
    margin:1rem 0;
}

.about .row .progress .bar span{
    display: block;
    height: 100%;
    background: var(--green);
    border-radius: 5rem;
}

.about .row .progress .bar-1-1 span{
    width: 90%;
}

.about .row .progress .bar-1-2 span{
    width: 75%;
}

.about .row .progress .bar-1-3 span{
    width: 80%;
}

.about .row .progress .bar-2-1 span{
    width: 95%;
}

.about .row .progress .bar-2-2 span{
    width: 89%;
}

.about .row .progress .bar-2-3 span{
    width: 65%;
}

.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:2rem;
}

.services .box-container .box{
    padding:2rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    position: relative;
    z-index: 0;
    overflow:hidden;
}

.services .box-container .box i{
    font-size:4rem;
    padding-bottom: 5rem;
    color:#fff;
}

.services .box-container .box h3{
    font-size:2rem;
    padding-bottom: 1rem;
    color:var(--black);
}

.services .box-container .box p{
    font-size:1.4rem;
    line-height: 1.8;
    color:var(--light-color);
}

.services .box-container .box::before{
    content: '';
    position: absolute;
    top:0; left: 0;
    height: 100%;
    width: 100%;
    background: var(--green);
    z-index: -1;
    clip-path: circle(9rem at 5% 0%);
    transition: .3s linear;
}

.services .box-container .box:hover::before{    
    clip-path: circle(100%);
}

.services .box-container .box:hover > *{
    color:#fff;
}

.portfolio .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(27rem, 1fr));
    gap:2rem;
}

.portfolio .box-container .box{
    height: 25rem;
    border-radius: .5rem;
    overflow:hidden;
    box-shadow: var(--box-shadow);
    position: relative;
    border:1rem solid transparent;
}

.portfolio .box-container .box img{
    height: 100%;
    width: 100%;
    object-fit: cover;
}

.portfolio .box-container .box .content{
    position: absolute;
    top:0; left: 0;
    height: 100%;
    width: 100%;
    background: var(--bg-color);
    display: grid;
    place-items: center;
    transform: scale(0);
}

.portfolio .box-container .box:hover .content{
    transform: scale(1);
}

.portfolio .box-container .box .content h3{
    font-size: 2.5rem;
    color:var(--black);
    text-transform: uppercase;
    transform: translateY(-5rem);
    opacity: 0;
    transition-delay: .3s;
}

.portfolio .box-container .box:hover .content h3{
    transform: translateY(0rem);
    opacity: 1;
}

.contact form{
    margin:1rem auto;
    max-width: 70rem;
    border-radius: .5rem;
    box-shadow: var(--box-shadow);
    padding:2rem;
}

.contact form .box{
    padding:1rem 1.5rem;
    width:100%;
    background: none;
    color:var(--black);
    font-size: 1.6rem;
    text-transform: none;
    margin:.7rem 0;
    box-shadow: var(--box-shadow);
    border-radius: .5rem;
}

.contact form textarea{
    height: 20rem;
    resize: none;
}

.contact form .box:focus{
    box-shadow: var(--box-shadow-inset);
}

.credits{
    font-size: 2rem;
    text-align: center;
    padding:2.5rem 1rem;
    margin-top: 1rem;
    border-top: var(--border);
    color:var(--black);
}

.credits span{
    color: var(--green);
}


/* media queries  */

@media (max-width:991px){

    html{
        font-size: 55%;
    }

    body{
        padding-left: 0;
    }

    .header{
        left:-110%;
    }

    .header.active{
        left:0%;
        transition: .4s linear;
    }

    #menu-btn{
        display: initial;
    }

}

@media (max-width:450px){

    html{
        font-size: 50%;
    }

    .header{
        width:100%;
        border-right: 0;
    }

}
</style>

</head>
<body>
<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> me </h1>
    <form action="send.php" method="post"> <!-- Use action="send.php" and method="post" -->
        <input type="text" name="name" placeholder="Your Name" class="box" required>
        <input type="email" name="email" placeholder="Your Email" class="box" required>
        <input type="text" name="subject" placeholder="Subject" class="box" required>
        <textarea name="message" class="box" placeholder="Your Message" id="" cols="30" rows="10" required></textarea>
        <input type="submit" name="send" value="Send Message" class="btn">
    </form>
</section>
<div class="credits"> created by <span>mr.Abhishek Chatruvedi</span> | all rights reserved 
    <p>myEmail: abhishekchatruvedi291@gmail.com</p>
</div>
</body>
</html>
