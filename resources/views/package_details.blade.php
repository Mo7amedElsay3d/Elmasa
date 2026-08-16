<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $package->name }} | قاعة الماسة</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Cairo", sans-serif;
            min-height: 100vh;

            background:
                linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .75)),
                url('{{ asset('image/كوشه.jpg') }}') center center / cover no-repeat fixed;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 40px 15px;
        }

        .package-card {
            width: 100%;
            max-width: 1000px;

            background: rgba(255, 255, 255, .97);

            border-radius: 25px;
            overflow: hidden;

            box-shadow: 0 25px 60px rgba(0, 0, 0, .4);

            display: flex;

            animation: fadeIn .7s ease;
        }

        .package-image {
            width: 45%;
            min-height: 550px;
            position: relative;
        }

        .package-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .package-content {
            width: 55%;
            padding: 55px 45px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .hall-name {
            color: #d4af37;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .package-content h1 {
            color: #222;
            font-size: 40px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .divider {
            width: 75px;
            height: 3px;
            background: #d4af37;
            margin-bottom: 25px;
        }

        .price {
            color: #b8941f;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 25px;
        }

        .description-title {
            color: #333;
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .description {
            color: #666;
            font-size: 17px;
            line-height: 2;
            margin-bottom: 35px;
        }

        .booking-btn {
            display: inline-block;

            background: #d4af37;
            color: #fff;

            padding: 14px 35px;
            border-radius: 50px;

            text-decoration: none;
            text-align: center;

            font-size: 17px;
            font-weight: 700;

            box-shadow: 0 8px 20px rgba(212, 175, 55, .3);

            transition: .3s;
        }

        .booking-btn:hover {
            background: #b8941f;
            color: #fff;

            text-decoration: none;

            transform: translateY(-3px);
        }

        .back-btn {
            display: block;

            margin-top: 18px;

            color: #777;

            text-decoration: none;

            text-align: center;

            font-size: 15px;

            transition: .3s;
        }

        .back-btn:hover {
            color: #b8941f;
            text-decoration: none;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(25px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {

            .package-card {
                flex-direction: column;
            }

            .package-image {
                width: 100%;
                min-height: 300px;
                height: 300px;
            }

            .package-content {
                width: 100%;
                padding: 40px 25px;
            }

            .package-content h1 {
                font-size: 30px;
            }

            .price {
                font-size: 25px;
            }

            .description {
                font-size: 15px;
            }

            .booking-btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <div class="package-card">

        {{-- Package Image --}}
        <div class="package-image">

            @if ($package->name == 'Silver')
                <img src="{{ asset('image/silver.png') }}" alt="Silver Package">
            @elseif ($package->name == 'Gold')
                <img src="{{ asset('image/gold.png') }}" alt="Gold Package">
            @else
                <img src="{{ asset('image/vip.png') }}" alt="VIP Package">
            @endif

        </div>


        {{-- Package Information --}}
        <div class="package-content">

            <div class="hall-name">
                قاعة الماسة 💎
            </div>

            <h1>
                باقة {{ $package->name }}
            </h1>

            <div class="divider"></div>

            <div class="price">
                {{ number_format($package->price) }} جنيه
            </div>

            <div class="description-title">
                تفاصيل الباقة
            </div>

            <ul class="package-details">
                @foreach (explode("\n", $package->details) as $detail)
                    <li>
                        <i class="fa fa-check"></i>
                        {{ $detail }}
                    </li>
                @endforeach
            </ul>

            <a href="{{ url('/?package_id=' . $package->id .'#booking') }}" class="booking-btn">
                <i class="fa fa-calendar"></i>
                احجز هذه الباقة
            </a>

            <a href="{{ url('/') }}" class="back-btn">
                ← العودة إلى الباقات
            </a>

        </div>

    </div>

</body>

</html>
