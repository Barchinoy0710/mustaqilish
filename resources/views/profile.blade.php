<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Profile</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="assets/styles/layout.css" type="text/css" />
<style>

        .profile-container {
            background-color: #000;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 600px;
        }
        .profile-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .profile-header h2 {
            font-size: 24px;
            margin: 0;
            color: #ffffff;
        }
        .profile-info {
            margin-bottom: 15px;
        }
        .profile-info div {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .profile-info label {
            font-weight: bold;
            color: #d9c1c1;
            font-size: 18px;
        }
        .profile-info .value {
          font-size: 18px;
            color: #eae1e1;
        }
        .status {
            display: inline-block;
            padding: 5px 10px;
            background-color: #28a745;
            color: #ffffff;
            border-radius: 12px;
            font-weight: bold;
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
<div class="wrapper col1">
  <div id="topbar" class="clear">
    <ul id="topnav">
      <li><a href="{{route('index')}}">Asosiy sahifa</a></li> 
      <li><a href="#">Kategoriya</a>
        <ul>
          <li><a href="{{route('category')}}">Bola tarbiyasi uchun resurslar</a></li>
          <li><a href="{{route('category')}}">Ota-Onalar uchun rivjlanish bo'yicha resurslar</a></li>
          <li><a href="{{route('category')}}">Ta'lim va o'qituv materiallari</a></li>
        </ul>
      </li>
      <li class="active"><a href="{{route('profile')}}">Profil</a></li> 
    </ul>
  </div>
</div>
<div class="wrapper ">
  <div id="container" class="clear"> 
    <div id="portfolio">
      <div class="profile-container">
        <div class="profile-header">
            <h2>Foydalanuvchi Profili</h2>
        </div>
        <div class="profile-info">
            <div>
                <label>Ism:</label>
                <div class="value">{{$user->name}}</div>
            </div>
            <div>
                <label>Elektron pochta:</label>
                <div class="value">{{$user->email}}</div>
            </div>
            <div>
                <label>Yuklagan maqolalar soni:</label>
                <div class="value">{{$user->article->count()}}</div>
            </div>
            <div>
                <label>Tasdiqlangan maqolalar soni:</label>
                <div class="value" style="color: #28a745;">{{$user->article->where('status',1)->count()}}</div>
            </div>
            <div>
                <label>Tasdiqlanmagan maqolalar soni:</label>
                <div class="value" style="color: #dc3545;">{{$user->article->where('status',0)->count()}}</div>
            </div>
            <div>
                <label>Holat:</label>
                <div class="status">active</div>
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
        <li><a href="{{route('index')}}">Asosiy sahifa</a></li> 
        <li><a href="{{route('category')}}">Bola tarbiyasi uchun resurslar</a></li>
        <li><a href="{{route('category')}}">Ota-Onalar uchun rivjlanish bo'yicha resurslar</a></li>
        <li><a href="{{route('category')}}">Ta'lim va o'qituv materiallari</a></li>
        <li class="active"><a href="{{route('profile')}}">Profil</a></li> 

      </ul>
    </div>
  
  </div>
</div>
</body>
</html>