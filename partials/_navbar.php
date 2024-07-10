 
    <main>
        <section>
            <div class="intro">
                <a href="index.php"><img src="Images/passionis.png" alt=""></a>
                <h1><a href="index.php">Passionis Villalar</a> </h1>
                <h4>Tatil passionis ile daha tutkulu</h4>
                <div class="membership">
                    <div class="member">
                        <div class="loggedin">
                            <?php if(isLoggedIn()): ?>
                                <img src="Images/login.png" alt="login png"> <a href="index.php">Hoşgeldiniz</a>
                                <img src="Images/exit-icon-4597.png" alt="exit png"> <a href="logout.php">Çıkış Yap</a>
                            <?php else: ?> 
                                <img src="Images/login.png" alt="login png"> <a href="login.php">Giriş Yap</a>
                            <?php endif; ?>

                        </div>
                        <div class="loggedin">
                            <?php if(!isLoggedIn()): ?>
                                <img src="Images/register.png" alt="register png"> <a href="register.php">Üye Ol</a>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <header>
                <nav class="navbar">
                    <ul class="nav-links">
                        <li><a href="index.php">Ana Sayfa</a></li>
                        <li><a href="about.php">Hakkında</a></li>
                        <li><a href="communication.php">İletişim</a></li>

                    </ul>
                </nav>
            </header>
        </section>
<?php if(isLoggedIn()): ?>
<section class="sidebar">
      <div class="sidebar-header">
        <img src="Images/passionis.png" alt="logo" />
        <h2>Passionis</h2>
      </div>
      <ul class="sidebar-links">
        <h4>
          <span>Admin Panel</span>
          <div class="menu-separator"></div>
        </h4>
        <li>
          <a href="villa-categories.php">
            <span class="material-symbols-outlined"> dashboard </span
            >Villa Ekle - Sil</a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> overview </span
            ></a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> monitoring </span
            >Analytic</a
          >
        </li>
        <h4>
          <span>General</span>
          <div class="menu-separator"></div>
        </h4>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> folder </span>Projects</a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> groups </span>Groups</a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> move_up </span>Transfer</a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> flag </span>All Reports</a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined">
              notifications_active </span
            >Notifications</a
          >
        </li>
        <h4>
          <span>Account</span>
          <div class="menu-separator"></div>
        </h4>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> account_circle </span
            >Profile</a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> settings </span
            >Settings</a
          >
        </li>
        <li>
          <a href="#"
            ><span class="material-symbols-outlined"> logout </span>Logout</a
          >
        </li>
      </ul>
      <div class="user-account">
        <div class="user-profile">
          <img src="images/profile-img.jpg" alt="Profile Image" />
          <div class="user-detail">
            <h3>Eva Murphy</h3>
            <span>Web Developer</span>
          </div>
        </div>
      </div>
</section>
<?php endif; ?>