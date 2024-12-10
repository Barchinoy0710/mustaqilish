<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>PhotoFolio</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="assets/styles/layout.css" type="text/css" />
    <script type="text/javascript" src="assets/scripts/jquery.min.js"></script>
    <!-- tabs -->
    <script type="text/javascript" src="assets/scripts/jquery.ui.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#tabcontainer").tabs({
                event: "click"
            });
        });
    </script>
    <!-- / tabs -->
    <script type="text/javascript" src="assets/scripts/jquery-photostack.js"></script>
    <!-- coinslider -->
    <script type="text/javascript" src="assets/scripts/jquery-coin-slider.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#portfolioslider').coinslider({
                width: 480,
                height: 280,
                navigation: false,
                links: false,
                hoverPause: true
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <style>
        .wrapper #header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .wrapper .fl_left {
            float: left;
        }

        .wrapper .fl_right {
            float: right;
        }

        .wrapper #header button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .wrapper #header button:hover {
            background-color: #0056b3;
        }

        /* Modalning umumiy uslubi */
        .modal {
            display: none;
            /* Boshlang'ich holat */
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            /* Yengil qora fon */
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease-in-out;
            /* Ochilish animatsiyasi */
        }

        /* Modal kontenti */
        .modal-content {
            background: linear-gradient(145deg, #ffffff, #f3f3f3);
            padding: 30px;
            border-radius: 12px;
            width: 400px;
            max-width: 90%;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            text-align: left;
            animation: slideDown 0.4s ease;
            position: relative;
        }

        /* Modal sarlavhasi */
        .modal-content h2 {
            margin-top: 0;
            font-family: 'Poppins', sans-serif;
            color: #333;
            font-size: 24px;
            text-align: center;
        }

        /* Form elementlari */
        .modal-content label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 600;
            color: #555;
            font-family: 'Roboto', sans-serif;
        }

        .modal-content input,
        .modal-content textarea,
        .modal-content select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            color: #333;
            background: #f9f9f9;
            transition: all 0.3s ease;
        }

        .modal-content input:focus,
        .modal-content textarea:focus,
        .modal-content select:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            background: #fff;
        }

        /* Submit tugmasi */
        .modal-content button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(145deg, #007bff, #0056b3);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .modal-content button:hover {
            background: linear-gradient(145deg, #0056b3, #003d80);
            transform: scale(1.02);
        }

        /* Yopish belgisi */
        .close {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            color: #999;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .close:hover {
            color: #333;
        }

        /* Animatsiyalar */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                transform: translateY(-30px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .carousel-item img {
            max-height: 400px;
            object-fit: contain;
            border-radius: 10px;
            background-color: #555;
        }

        .carousel-caption {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 8px;
            padding: 10px;
        }

        .carousel-caption h5 {
            font-size: 20px;
            font-weight: bold;
        }

        .carousel-caption p {
            font-size: 14px;
        }

        .register-link {
            display: inline-block;
            margin-top: 10px;
            text-decoration: none;
            color: white;
            background-color: #3498db;
            padding: 8px 15px;
            border-radius: 5px;
            font-size: 14px;
            transition: background-color 0.3s;
        }

        .register-link:hover {
            background-color: #2980b9;
        }

        .logout-button {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .logout-button:hover {
            background-color: darkred;
        }
    </style>
    <!-- / coinslider -->
</head>

<body id="top">
    <div class="wrapper col1">
        <div id="header" class="clear">
            <div class="fl_left">
                <h1><a href="index.html">PhotoFolio</a></h1>
            </div>
            <div style="display: flex; justify-content: end; width: 100%;">
                @auth
                    <button onclick="openModal()">Maqola yuklash</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;"> @csrf
                        <button
                            style="background-color: red; color: white; border: none; padding: 10px; border-radius: 5px; onclick="
                            onclick="return confirm('Aniq chiqib ketmoqchmisiz?')" type="submit">Logout</button>
                    </form>
                @endauth
                @guest
                    <button><a style="color: white; text-decoration: none;"
                            href="{{ route('register') }}">Login|Registration</a></button>
                @endguest
            </div>
        </div>
    </div>

    <div class="wrapper col1">
        <div id="topbar" class="clear">
            <ul id="topnav">
                <li class="active"><a href="/">Asosiy sahifa</a></li>
                @auth

                    <li><a href="#">Kategoriya</a>
                        <ul>
                            <li><a href="kategoriya.html">Bola tarbiyasi uchun resurslar</a></li>
                            <li><a href="#">Ota-Onalar uchun rivjlanish bo'yicha resurslar</a></li>
                            <li><a href="#">Ta'lim va o'qituv materiallari</a></li>
                        </ul>
                    </li>
                    <li><a href="/profile">Profil</a></li>
                    @if (Auth::user()->role == 'admin')
                        <li><a href="/dashboard">Dashboard</a></li>
                    @endif
                    <li><a href="#">{{ Auth::user()->name }}</a></li>
                @endauth
            </ul>
            <form action="#" method="post" id="search">
                <fieldset>
                    <legend>Site Search</legend>
                    <input type="text" style="height: 30px;" value="Search Our Website&hellip;"
                        onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
                    <input type="image" id="go" src="assets/images/search.gif" alt="Search" />
                </fieldset>
            </form>
        </div>
    </div>
    <div class="wrapper col1">
        <div id="featured_slide">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    @foreach ($articles as $index => $article)
                        <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                            <img src="https://akademnashr.uz/wp-content/uploads/2023/04/kitob-haqida-kitob.jpg"
                                class="d-block w-100" alt="{{ $article->title }}">
                            <div class="carousel-caption">
                                <h5>{{ $article->title }}</h5>
                                <p>Kategoriya: {{ $article->category }}</p>
                                <p>{{ $article->description }}</p>
                                <span>Foydalanuvchi: {{ $article->user->name }}</span><br>
                                @guest
                                    <a href="register" class="register-link">Yuklab olish uchun ro'yhatdan o'ting</a>
                                @endguest
                                @auth
                                    <a href="articles/{{ $article->file }}" download="maqola">Yuklab olish</a>
                                @endauth
                            </div>
                        </div>
                    @endforeach
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
    </div>
    <div class="wrapper">
        <div id="footer" class="clear" style="display: flex; justify-content: center; width: 100%;">
            <div class="footbox" style="width: 30%;">
                <h2>Biz haqimizda</h2>
                <p>Ota-Ona Almashinuvi – ota-onalar o'rtasida resurslar, tajribalar va g'oyalarni almashish uchun
                    yaratilgan platforma.
                    Bizning maqsadimiz – oilalar o'rtasida o'zaro yordam va qo'llab-quvvatlashni rivojlantirishdir.
                    Kitoblar, o'yinchoqlar yoki foydali maslahatlar – barchasi bu yerda almashinishi mumkin.
                    Birgalikda hamjamiyatni yanada kuchliroq qilaylik!</p>
            </div>

            <div class="footbox" style="width: 30%;">
                <h2>Sahifalar</h2>
                <ul>
                    <li><a href="/">Asosiy sahifa</a></li>
                    @auth
                        <li><a href="#">Bola tarbiyasi uchun resurslar</a></li>
                        <li><a href="#">Ota-Onalar uchun rivjlanish bo'yicha resurslar</a></li>
                        <li><a href="#">Ta'lim va o'qituv materiallari</a></li>
                        <li class="active"><a href="{{ route('profile') }}">Profil</a></li>
                    @endauth
                </ul>
            </div>

        </div>
    </div>
    <div id="modal" class="modal">
        @auth
            <div class="modal-content">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Maqola Yuklashh</h2>
                <form id="uploadForm">
                    <label for="title">Sarlavha:</label>
                    <input type="text" id="title" name="title" placeholder="Sarlavha kiriting" required />
                    <label for="description">Tavsif:</label>
                    <textarea id="description" name="description" placeholder="Tavsif kiriting" rows="4" required></textarea>
                    <label for="category">Kategoriya:</label>
                    <select id="category" name="category" required>
                        <option value="" disabled selected>Kategoriyani tanlang</option>
                        <option value="education">Bola tarbiyasi uchun resurslar</option>
                        <option value="technology">Ota-Onalar uchun rivjlanish bo'yicha resurslar</option>
                        <option value="art">Ta'lim va o'qituv materiallari</option>
                    </select>
                    <label for="file">Kitob yuklash:</label>
                    <input type="file" id="file" name="file" accept=".pdf,.docx" required />
                    <button type="submit">Yuklash</button>
                </form>
            </div>
        @endauth
    </div>
    <script>
        function openModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }
    </script>
</body>

</html>
