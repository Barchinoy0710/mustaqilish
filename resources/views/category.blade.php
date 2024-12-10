<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PhotoFolio | Portfolio</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="assets/styles/layout.css" type="text/css" />
<style>
  .grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    padding: 20px;
    justify-content: center;
  }

  .card {
    width: 285px;
    height: 400px;
    background-color: rgba(0, 0, 0, 0.6); /* Orqasi shaffof */
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 15px;
}

.card img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Rasm to'liq joylashishi */
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1; /* Card orqasida */
}

.card-body {
    position: absolute;
    bottom: 0;
    padding: 20px;
    z-index: 2; /* Rasmning ustida */
    background: rgba(0, 0, 0, 0.7); /* Matn orqasini ko'rsatish uchun shaffof qora rang */
    color: #fff; /* Matn oq rangda */
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    text-align: center; /* Matnni markazlashtirish */
}

.card-title {
    font-size: 20px;
    font-weight: 700;
    margin-bottom: 10px;
    color: #fff;
}

.card-text, .user-info {
    font-size: 14px;
    margin-bottom: 15px;
    color: #ddd;
}

.download-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #3498db;
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    padding: 10px 20px;
    border-radius: 6px;
    transition: background-color 0.3s;
}

.download-btn:hover {
    background-color: #2c80b6;
}

.download-btn i {
    margin-right: 8px;
    font-size: 18px;
}

</style>
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header" class="clear">
    <div class="fl_left">
      <h1><a href="../index.html">PhotoFolio</a></h1> 
    </div> 
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="topbar" class="clear">
    <ul id="topnav">
      <li><a href="{{route('index')}}">Asosiy sahifa</a></li> 
      <li><a href="/category">Kategoriya</a>
        <ul>
          <li><a href="#">Bola tarbiyasi uchun resurslar</a></li>
          <li><a href="#">Ota-Onalar uchun rivjlanish bo'yicha resurslar</a></li>
          <li><a href="#">Ta'lim va o'qituv materiallari</a></li>
        </ul>
      </li>
      <li ><a href="pages/portfolio.html">Profil</a></li> 
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper ">
  <div id="container" class="clear" style="display: flex;"> 
    <div class="wrapper">
        <div class="grid-container">
          <div class="card">
            <img src="https://akademnashr.uz/wp-content/uploads/2023/04/kitob-haqida-kitob.jpg" alt="Card Image">
            <div class="card-body">
              <h3 class="card-title">How to Watch YouTube</h3>
              <p class="card-text">Juda ham foydali manba bo'ladi barchangizga tavsiya qilaman.</p>
              <p class="user-info">Foydalanuvchi: Shashvarbek</p>
              <a href="kitob.pdf" download class="download-btn">
                <i>&#128229;</i> Yuklab olish
              </a>
            </div>
          </div>
      
          <div class="card">
            <img src="https://akademnashr.uz/wp-content/uploads/2023/04/kitob-haqida-kitob.jpg" alt="Card Image">
            <div class="card-body">
              <h3 class="card-title">How to Watch YouTube</h3>
              <p class="card-text">Juda ham foydali manba bo'ladi barchangizga tavsiya qilaman.</p>
              <p class="user-info">Foydalanuvchi: Shashvarbek</p>
              <a href="kitob.pdf" download class="download-btn">
                <i>&#128229;</i> Yuklab olish
              </a>
            </div>
          </div>
      
          <div class="card">
            <img src="https://akademnashr.uz/wp-content/uploads/2023/04/kitob-haqida-kitob.jpg" alt="Card Image">
            <div class="card-body">
              <h3 class="card-title">How to Watch YouTube</h3>
              <p class="card-text">Juda ham foydali manba bo'ladi barchangizga tavsiya qilaman.</p>
              <p class="user-info">Foydalanuvchi: Shashvarbek</p>
              <a href="kitob.pdf" download class="download-btn">
                <i>&#128229;</i> Yuklab olish
              </a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>
<div class="wrapper">
  <div id="footer" class="clear" style="display: flex; justify-content: center; width: 100%;" >
    <div class="footbox" style="width: 30%;">
      <h2>Biz haqimizda</h2>
      <p>Ota-Ona Almashinuvi – ota-onalar o'rtasida resurslar, tajribalar va g'oyalarni almashish uchun yaratilgan platforma.
        Bizning maqsadimiz – oilalar o'rtasida o'zaro yordam va qo'llab-quvvatlashni rivojlantirishdir. Kitoblar, o'yinchoqlar yoki foydali maslahatlar – barchasi bu yerda almashinishi mumkin.
        Birgalikda hamjamiyatni yanada kuchliroq qilaylik!</p>
    </div>
    
    <div class="footbox" style="width: 30%;">
      <h2>Sahifalar</h2>
      <ul>
        <li><a href="../index.html">Asosiy sahifa</a></li> 
        <li><a href="#">Bola tarbiyasi uchun resurslar</a></li>
        <li><a href="#">Ota-Onalar uchun rivjlanish bo'yicha resurslar</a></li>
        <li><a href="#">Ta'lim va o'qituv materiallari</a></li>
        <li class="active"><a href="./pages/portfolio.html">Profil</a></li> 

      </ul>
    </div>
  
  </div>
</div>
</body>
</html>