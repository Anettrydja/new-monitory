<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" >
<body>
    <br>
    <div id="logoimage">
        <div id="logoimage">
            <image src="<?php echo asset ('css/logotest.png')?>" alt="logo" height="100px" width="320px">
        </div>
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
                    <img id="usericon" src="<?php echo asset('images/usericon.png')?>"></img>
                    <span id="name">Test Testerino</span>
                </div>
                <div id="profilebutton">
                    <button><a href="">Profiil/konto</a></button>
                </div>
                <button id="logout"><a href=""a>Logi välja</a>
            </div>
        </div>
        <div id="container_two">
            <table border = "1">
                <tr>
                <td>Eesnimi</td>
                <td>Perekonnanimi</td>
                <td>Email</td>
                </tr>
                @foreach ($user as $user)
                <tr>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->username }}</td>
                <td><button><a href = 'delete/{{ $user->id }}'>Kustuta</a></button></td>
                </tr>
                @endforeach
                </table>
                <button><a href="/users">Mine tagasi</a></button>
        </div>
    </div>
</body>