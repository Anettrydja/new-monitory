<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" >
<body>
    <br>
    <div id="logoimage">
        <image src="<?php echo asset ('css/logotest.png')?>" alt="logo" height="100px" width="320px">
    </div>
    <br>
    <div id="container"> 
        <div id="container_one">
            <div id="top">
                <button id="addbutton"><a href="/addnewapp">Lisa rakendus</a></button>
                <button id="notificationsbutton"><a href="">Teavitused</a></button>
                <button id="detailbutton"><a href="/detailedappview">Detailne vaade</a></button>
                <button id="userbutton"><a href="/users">Kasutajate haldus</a></button>
                <button id="homebutton"><a href="/home">Avaleht</a></button>
            </div>
            <div id="bottom">
                <div id="profile">
                    <img id="usericon" src="<?php echo asset('css/usericon.png')?>"></img>
                    <span id="name">Test Testerino</span>
                </div>
                <div id="profilebutton">
                    <button><a href="">Profiil/konto</a></button>
                </div>
                <button id="logout"><a href=""a>Logi välja</a>
            </div>
        </div>
        <div id="container_two">
            <div id="top">
            </div>
            <hr>
            <table border = "1">
                <tr>
                <td>Platvorm</td>
                <td>URL</td>
                <td>Serveri aadress</td>
                <td>Asukoht serveris</td>
                <td>Tehniline kontakt</td>
                <td>Versioon</td>
                <td>Kommentaarid</td>
                <td>Tellija</td>
                </tr>
                @foreach ($app as $app)
                <tr>
                <h1>{{ $app->name }}</h1>
                <td>{{ $app->platform }}</td>
                <td>{{ $app->url }}</td>
                <td>{{ $app->server_address }}</td>
                <td>{{ $app->server_place }}</td>
                <td>{{ $app->contact }}</td>
                <td>{{ $app->version }}</td>
                <td>{{ $app->comments }}</td>
                <td>{{ $app->client }}</td>
                </tr>
                @endforeach
            </table>
            <hr>
        </div>
    </div>
</body>
</html>