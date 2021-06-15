<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" >
<body>
    <br>
    <div id="logoimage">
        <image src="logotest.png" alt="logo" height="100px" width="320px">
    </div>
    <br>
    <div id="container"> 
        <div id="container_one">
            <div id="top">
                <button><a href="">Lisa rakendus</a></button>
                <button><a href="">Teavitused</a></button>
                <button><a href="">Detailne vaade</a></button>
                <button><a href="">Kasutajate haldus</a></button>
                <button><a href="/home">Avaleht</a></button>
            </div>
            <div id="bottom">
                <div id="profile">
                    <img id="usericon" src="usericon.png"></img>
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
                <button id="create"><a href="/addnewuser">Lisa uus kasutaja</a></button>
                <button id="create"><a href="/deleteuser">Kustuta kasutaja</a></button>
            </div>
            <hr>
            <table border = "1">
                <tr>
                <td>Kasutajanimi/E-mail</td>
                <td>Eesnimi</td>
                <td>Perekonnanimi</td>
                </tr>
                @foreach ($users as $user)
                <tr>
                <td>{{ $user->username }}</td>
                <td>{{ $user->firstname }}</td>
                <td>{{ $user->lastname }}</td>
                </tr>
                @endforeach
            </table>
            <hr>
        </div>
    </div>
</body>
</html>