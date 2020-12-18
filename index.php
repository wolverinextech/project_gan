<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">
        
        <!-- ===== Fonts Googleapis ===== -->
        <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

        <title>Tools BlackHat Heroes</title>
    </head>
    <body id="body-pd" onload="initClock()">
        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="assets/img/perfil.jpg" alt="">
            </div>
        </header>

        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='bx bx-layer nav__logo-icon'></i>
                        <span class="nav__logo-name">BHH Users</span>
                    </a>

                    <div class="nav__list">
                        <a href="#" class="nav__link active">
                        <i class='bx bx-grid-alt nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-user nav__icon' ></i>
                            <span class="nav__name">Website</span>
                        </a>
                        
                        <a href="#" class="nav__link">
                            <i class='bx bx-message-square-detail nav__icon' ></i>
                            <span class="nav__name">Tools</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bookmark nav__icon' ></i>
                            <span class="nav__name">Blog</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-folder nav__icon' ></i>
                            <span class="nav__name">CTF</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                            <span class="nav__name">About</span>
                        </a>
                    </div>
                </div>

                <a href="#" class="nav__link">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>
        
        <br/>
        <center>
        <h1 class="welcome">Welcome To My Zone</h1>
        <br/>
        <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <!--digital clock end-->
    <br/><br/>
        
        <div class="updating">
        	<marquee class="jalan">Tunggu Terus Ya Guys Update - Update Terbaru Kita</marquee>
        </div>
        <p class="ogg">{ Keahlian }</p>
        <div class="org">
        	<h2 class="ket">Web Developer</h2>
            <div class="hayo">
            	<img src="assets/img/perfil.jpg" class="anjay">
            	<p>Membuat dan menghias website sesuai dengan kreasi sendiri.</p>
                <br/>
           </div>
           <br/>
           <div class="org">
        	<h2 class="ket">Defacer</h2>
            <div class="hayo">
            	<img src="assets/img/perfil.jpg" class="anjay">
            	<p>Mencari bug pada website dan mengelsekusinya.</p>
                <br/>
           </div>
           <br/>
           <div class="org">
        	<h2 class="ket">Programer</h2>
            <div class="hayo">
            	<img src="assets/img/perfil.jpg" class="anjay">
            	<p>Membuat sebuah tools / program sendiri.</p>
                <br/>
           </div>
           <br/>
           <div class="org">
        	<h2 class="ket">Editor</h2>
            <div class="hayo">
            	<img src="assets/img/perfil.jpg" class="anjay">
            	<p>Membuat dan mengedit logo / video untuk team.</p>
                <br/>
           </div>
           <br/><br/>
           
           <p class="ogg">{ About Us }</p>
           <div class="about">
           	<p class="abcont">23<br/>Member</p>
               <button class="abton"><a href="#" class="textt">More Info</a></button>
           </div>
           <div class="about">
           	<p class="abcont">4<br/>Admin</p>
               <button class="abton"><a href="#" class="textt">More Info</a></button>
           </div>
           <div class="about">
           	<p class="abcont">17<br/>Defacer</p>
               <button class="abton"><a href="#" class="textt">More Info</a></button>
           </div>
           <div class="about">
           	<p class="abcont">7<br/>Editor</p>
               <button class="abton"><a href="#" class="textt">More Info</a></button>
           </div>
           <br/>
           
           <p class="ogg">Also Visit!!</p>
           <button class="butfot"><a href="#" class="linkfot">Website</a></button>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <button class="butfot"><a href="#" class="linkfot">Blog</a></button>
        </center>
        <!--===== MAIN JS =====-->
       <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";
		  
          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
