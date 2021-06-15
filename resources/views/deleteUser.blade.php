<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="{{ asset('css/layout.css') }}" >
<body>
    <br>
    <div id="logoimage">
        {{-- <image src="logotest.png" alt="logo" height="100px" width="320px"> --}}
    </div>
    <br>
    <div id="container"> 
        <div id="container_one">
            <div id="top">
                <button><a href="">Lisa rakendus</a></button>
                <button><a href="">Teavitused</a></button>
                <button><a href="">Detailne vaade</a></button>
                <button><a href="">Kasutajate haldus</a></button>
            </div>
            <div id="bottom">
                <div id="profile">
                    {{-- <img id="usericon" src="usericon.png"></img> --}}
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
                <td><a href = 'delete/{{ $user->id }}'>Kustuta</a></td>
                </tr>
                @endforeach
                </table>
        </div>
    </div>
</body>