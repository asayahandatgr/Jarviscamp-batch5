<!DOCTYPE html>
<html>
<head>
    <title>Perkenalan Diri</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e0f7fa;
            color: #00796b;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            margin-top: 50px;
        }
        .profile {
            display: inline-block;
            margin: 20px;
            padding: 20px;
            border: 2px solid #004d40;
            border-radius: 10px;
            background-color: #ffffff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        }
        .profile img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }
        .profile h2 {
            margin: 10px 0 5px;
        }
        .profile p {
            margin: 0;
            color: #004d40;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Introducing Myself</h1>
        <div class="profile">
            <img src="{{ url ('/assets/img/mypict.jpg') }}" alt="Profile Picture">
            <h2>Tegar Asayahanda Firdaus</h2>
            <p>Saya adalah Seorang Mahasiswa Program Studi Teknik Informatika, Saat ini saya masih Semester 2 dan Saya memiliki minat di bidang Software Engineering</p>
        </div>
    </div>
</body>
</html>
