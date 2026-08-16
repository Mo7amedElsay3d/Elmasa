<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>تم الحجز بنجاح | قاعة الماسة</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: "Cairo", sans-serif;
            height:100vh;
            background:
                linear-gradient(rgba(0,0,0,.65),rgba(0,0,0,.65)),
                url('{{ asset("image/كوشه.jpg") }}') center center/cover no-repeat;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .success-box{
            background:rgba(255,255,255,.95);
            width:90%;
            max-width:700px;
            padding:50px;
            border-radius:20px;
            text-align:center;
            box-shadow:0 20px 50px rgba(0,0,0,.25);
        }

        .success-box i{
            font-size:80px;
            color:#d4af37;
            margin-bottom:20px;
        }

        .success-box h1{
            color:#222;
            margin-bottom:15px;
            font-weight:bold;
        }

        .success-box h3{
            color:#d4af37;
            margin-bottom:25px;
        }

        .success-box p{
            color:#555;
            font-size:18px;
            line-height:2;
            margin-bottom:35px;
        }

        .btn-home{
            background:#d4af37;
            color:#fff;
            padding:14px 35px;
            border-radius:50px;
            text-decoration:none;
            font-size:18px;
            transition:.3s;
        }

        .btn-home:hover{
            background:#b8941f;
            color:#fff;
            text-decoration:none;
        }
    </style>
</head>

<body>

    <div class="success-box">

        <i class="fa fa-check-circle"></i>

        <h1>أهلاً بك في قاعة الماسة 💎</h1>

        <h3>تم استلام طلب الحجز بنجاح</h3>

        <p>
            شكرًا لاختيارك <strong>قاعة الماسة</strong> لإقامة حفل زفافك.
            <br><br>
            تم استلام طلب الحجز الخاص بك بنجاح،
            وسيتم التواصل معك عبر <strong>واتساب</strong> من قبل إدارة القاعة
            في أقرب وقت لتأكيد الحجز والإجابة عن أي استفسارات.
            <br><br>
            نتمنى لك حفلًا سعيدًا وحياة مليئة بالفرح والسعادة. ❤️
        </p>

        <a href="{{ url('/') }}" class="btn-home">
            العودة إلى الصفحة الرئيسية
        </a>

    </div>

</body>

</html>