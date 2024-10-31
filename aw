<!DOCTYPE html>
<html>
<head>
    <title>موقع المسلسلات</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .section {
            margin: 20px 0;
        }
        h2 {
            color: #333;
        }
        .item {
            display: inline-block;
            width: 30%;
            margin: 10px;
            vertical-align: top;
        }
        .item img {
            width: 100%;
        }
        .search-bar {
            margin: 20px;
            text-align: center;
        }
        .rating {
            color: #ffd700;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <header>
        <h1>مرحباً في موقع المسلسلات!</h1>
        <div class="search-bar">
            <input type="text" placeholder="ابحث عن مسلسل...">
            <button>بحث</button>
        </div>
    </header>
    <div class="container">
        <div class="section">
            <h2>الأحدث</h2>
            <div class="item">
                <img src="latest1.jpg" alt="مسلسل جديد 1">
                <p>مسلسل جديد 1</p>
                <div class="rating">★★★★★</div>
            </div>
            <div class="item">
                <img src="latest2.jpg" alt="مسلسل جديد 2">
                <p>مسلسل جديد 2</p>
                <div class="rating">★★★★☆</div>
            </div>
        </div>
        <div class="section">
            <h2>الأكثر مشاهدة</h2>
            <div class="item">
                <img src="popular1.jpg" alt="مسلسل شهير 1">
                <p>مسلسل شهير 1</p>
                <div class="rating">★★★★★</div>
            </div>
            <div class="item">
                <img src="popular2.jpg" alt="مسلسل شهير 2">
                <p>مسلسل شهير 2</p>
                <div class="rating">★★★★☆</div>
            </div>
        </div>
        <div class="section">
            <h2>الفئات</h2>
            <p>دراما</p>
            <p>كوميديا</p>
        </div>
    </div>
</body>
</html>
