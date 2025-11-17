<?php  include 'header.php' ?>
</head>
<body>
  <main class="menu-card" role="main">
    <header>
      <div class="brand">
        <div class="logo" aria-hidden="true">M</div>
        <div>
          <h1>Faqat Menyu</h1>
          <p class="lead">Soddalashtirilgan sahifa — faqat menyu elementlari</p>
        </div>
      </div>
      <div>
        <button id="toggle" class="hamburger" aria-expanded="true" aria-controls="mainmenu" aria-label="Menyuni ko'rsat/yashirish">
          ☰ <span class="sr-only">Menyuni ko'rsat yoki yashirish</span>
        </button>
      </div>
    </header>

    <nav id="mainmenu" aria-label="Asosiy navigatsiya">
      <ul class="menu" role="menubar">
        <li role="none"><a role="menuitem" tabindex="0" class="menu-item" href="#home">Bosh sahifa</a></li>
        <li role="none"><a role="menuitem" tabindex="0" class="menu-item" href="#about">Biz haqimizda</a></li>
        <li role="none"><a role="menuitem" tabindex="0" class="menu-item" href="#services">Xizmatlar</a></li>
        <li role="none"><a role="menuitem" tabindex="0" class="menu-item" href="#pricing">Narxlar</a></li>
        <li role="none"><a role="menuitem" tabindex="0" class="menu-item" href="#contact">Aloqa</a></li>
      </ul>
    </nav>

    <p class="muted">Bu sahifa faqat navigatsiya (menyu) uchun. Havolalarni o'zgartiring yoki qo'shing.</p>
  </main>


<?php  include 'footer.php' ?>