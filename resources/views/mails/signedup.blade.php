<!DOCTYPE html>
<html lang="pl">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta content="width=device-width" name="viewport"/>
    <style>
        #container {
            max-width: 500px;
            margin: 50px auto 0 auto;
            font-family: Verdana, sans-serif;
        }

        #container h1 {
            margin-bottom: 50px;
            color: #ffffff !important;
        }

        #container p {
            margin: 25px auto;
            color: #ffffff !important;
        }

        #container a {
            text-decoration: none;
            color: rgba(255, 255, 255, .5) !important;
        }

        #footer h3 {
            margin-top: 50px;
            color: #ffffff !important;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; -webkit-text-size-adjust: 100%; background-color: #283C4B; color: #ffffff">

<div id="container">
    <h1>Cześć, {{$name??''}}!</h1>
    <p>Wpisałeś się właśnie na newsletter <a href="https://ordertzk.pl">Order TZK</a>. Jest nam niezmiernie miło z tego
        powodu. Prosimy Cię jeszcze o potwierdzenie adresu klikając w <a href="{{$link??"#"}}">Ten link</a>.</p>
    <p>Jeśli jednak nie wpisywałeś się na naszą listę, zignoruj tego maila, a zostanie usunięty z naszej bazy w ciągu 24
        godzin.</p>
    <div id="footer">
        <h3>Pozdrawiamy, <br/>Zespół <a href="https://ordertzk.pl">Order TZK</a></h3>
    </div>
</div>

</body>
</html>
