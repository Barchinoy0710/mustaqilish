<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        /* Umumiy stil */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
            color: #333;
        }

        /* Sidebar dizayni */
        .sidebar {
            width: 260px;
            background-color: #2c3e50;
            color: #ecf0f1;
            padding-top: 20px;
            height: 100vh;
            box-sizing: border-box;
            overflow-y: auto;
            position: fixed;
        }

        .sidebar h2 {
            text-align: center;
            margin: 0 0 20px;
            font-size: 1.8em;
            font-weight: 600;
        }

        .menu-item {
            color: #ecf0f1;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 15px;
            display: block;
            transition: background-color 0.3s, transform 0.3s;
        }

        .menu-item:hover {
            background-color: #34495e;
            transform: translateX(5px);
        }

        /* Asosiy kontent */
        .main-content {
            margin-left: 280px;
            padding: 20px;
            display: flex;
            flex-direction: column;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: auto;
            max-width: calc(100% - 280px);
        }

        .welcome-message {
            font-size: 1.4em;
            text-align: center;
            color: #2c3e50;
            margin-bottom: 30px;
        }

        /* Maqola kartasi dizayni */
        .article {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .article:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
        }

        .article-text {
            flex: 2;
            padding-right: 15px;
        }

        .article-image {
            flex: 1;
            border-radius: 8px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .article-image img {
            width: 100%;
            max-height: 200px;
            object-fit: contain;
        }

        .article-footer {
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9em;
        }

        .button {
            padding: 10px 15px;
            border: none;
            background-color: #3498db;
            color: #ffffff;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
            font-weight: bold;
        }

        .button:hover {
            background-color: #2980b9;
            transform: scale(1.05);
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            color: #3498db;
            font-weight: bold;
            text-decoration: none;
            transition: color 0.3s;
        }

        .download-btn::before {
            content: '📥';
            margin-right: 5px;
        }

        .download-btn:hover {
            color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h2>Admin Panel</h2>
        <div class="menu-item" style="display: none;" onclick="showSection('welcome')">Asosiy sahifa</div>
        <div class="menu-item" onclick="showSection('approved')">Tasdiqlangan maqolalar</div>
        <div class="menu-item" onclick="showSection('pending')">Tasdiqlanmagan maqolalar</div>
    </div>
    <div class="main-content" id="welcome">
        <div class="welcome-message">
            Assalomalekum PhotoFolio Website ning Admin paneliga hush kelibsiz!
        </div>
    </div>
    <div class="main-content" id="approved">
        <h2>Tasdiqlangan maqolalar</h2>
        <div class="article">
            <div class="article-text">
                <h3>How to Watch YouTube</h3>
                <p><strong>Kategoriya:</strong> Ta'lim va o'qituv materiallari</p>
                <p>Juda ham foydali manba bo'ladi barchangizga tavsiya qilaman.</p>
                <a href="kitob.pdf" class="download-btn" download>Yuklab olish</a>
                <div class="article-footer">
                    <span>Foydalanuvchi: Shashvarbek</span>
                </div>
            </div>
            <div class="article-image">
                <img src="https://akademnashr.uz/wp-content/uploads/2023/04/kitob-haqida-kitob.jpg" alt="Rasm">
            </div>
        </div>
    </div>

    <div class="main-content" id="pending">
        <h2>Tasdiqlanmagan maqolalar</h2>
        <div class="article">
            <div class="article-text">
                <h3>How to Watch YouTube</h3>
                <p><strong>Kategoriya:</strong> Ta'lim va o'qituv materiallari</p>
                <p>Juda ham foydali manba bo'ladi barchangizga tavsiya qilaman.</p>
                <a href="kitob.pdf" class="download-btn" download>Yuklab olish</a>
                <div class="article-footer">
                    <span>Foydalanuvchi: Shashvarbek</span>
                    <button class="button">Tasdiqlash</button>
                </div>
            </div>
            <div class="article-image">
                <img src="https://cdn.asaxiy.uz/asaxiy-content/product/main_image/mobile/626972ef8754f.jpg.webp" alt="Rasm">
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            // Barcha bo'limlarni yashirish
            const sections = document.querySelectorAll('.main-content');
            sections.forEach(section => {
                section.style.display = 'none';
            });

            // Tanlangan bo'limni ko'rsatish
            document.getElementById(sectionId).style.display = 'block';
        }

        // Bo'lim tanlanmagan holatda "welcome" bo'limini ko'rsatish
        document.addEventListener('DOMContentLoaded', () => {
            showSection('welcome');
        });
    </script>
</body>
</html>
