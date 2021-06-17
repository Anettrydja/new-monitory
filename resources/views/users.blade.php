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
                {{-- <button id="detailbutton"><a href="/detailedappview">Detailne vaade</a></button> --}}
                <button id="userbutton"><a href="/users">Kasutajate haldus</a></button>
                <button id="homebutton"><a href="/home">Avaleht</a></button>
            </div>
            <div id="bottom">
                <div id="profile">
                    <img id="usericon" src="<?php echo asset('css/usericon.png')?>"></img>
                    <span id="name">Test Testerino</span>
                </div>
                    <button id="userpagebutton"><a href="">Profiil/konto</a></button>
                <button id="logout"><a href=""a>Logi välja</a>
            </div>
        </div>
        <div id="container_two">
            <div id="container_two_top">
                <button id="create"><a href="/addnewuser">Lisa uus kasutaja</a></button>
                <button id="create"><a href="/deleteuser">Kustuta kasutaja</a></button>
                <hr>
            </div>
            <h1>Hetkel aktiivsed kasutajad: </h1>
            <table id="usertable">
                <tr>
                <td id="usernametd">Kasutajanimi/E-mail</td>
                <td id="firstnametd">Eesnimi ja perekonnanimi</td>
                </tr>
                @foreach ($users as $users)
                <tr>
                <td id="usernameinfotd">{{ $users->email }}</td>
                <td id="firstnameinfotd">{{ $users->name }}</td>
                {{-- <td>{{ $users->lastname }}</td> --}}
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>
</html>