
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Cloud Deployment Demo</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f3f4f6;
            color: #1f2937;
        }

        .container {
            max-width: 900px;
            margin: 80px auto;
            padding: 20px;
        }

        .card {
            background: white;
            padding: 45px;
            border-radius: 14px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(0,0,0,0.06);
        }

        .tag {
            display: inline-block;
            background: #dcfce7;
            color: #15803d;
            padding: 8px 16px;
            border-radius: 30px;
            font-size: 13px;
            margin-bottom: 25px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 15px;
        }

        p {
            color: #6b7280;
            line-height: 1.7;
        }

        .button {
            display: inline-block;
            margin-top: 28px;
            background: #e3342f;
            color: white;
            padding: 13px 25px;
            border-radius: 7px;
            text-decoration: none;
        }

        .info {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-top: 30px;
        }

        .info div {
            background: #f9fafb;
            padding: 20px;
            border-radius: 9px;
        }

        .info strong {
            display: block;
            margin-bottom: 8px;
        }

        footer {
            margin-top: 35px;
            font-size: 13px;
            color: #9ca3af;
        }

        @media(max-width: 600px) {
            .info {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 27px;
            }
        }
    </style>
</head>

<body>

<div class="container">
    <div class="card">

        <span class="tag">● Application Running</span>

        <h1>Welcome to Laravel Cloud!</h1>

        <p>
            This is a demo Laravel application deployed
            successfully using Laravel Cloud and GitHub.
        </p>

        <div class="info">
            <div>
                <strong>Framework</strong>
                Laravel
            </div>

            <div>
                <strong>Environment</strong>
                Cloud Hosting
            </div>

            <div>
                <strong>Status</strong>
                Running
            </div>
        </div>

        <a href="/test" class="button">
            Run Application Test
        </a>

        <footer>
            Laravel Cloud Deployment Demo
            <br><br>
            Developed by Deepak Lohani
        </footer>

    </div>
</div>

</body>
</html>
