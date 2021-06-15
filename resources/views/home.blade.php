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
                <button><a href="/addnewapp">Lisa rakendus</a></button>
                <button><a href="">Teavitused</a></button>
                <button><a href="/deatiledappview">Detailne vaade</a></button>
                <button><a href="/users">Kasutajate haldus</a></button>
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
            <hr>
            <table border = "1">
                <tr>
                <td>URL</td>
                <td>PLATVORM</td>
                <td>TEHNILINE KONTAKT</td>
                <td></td>
                </tr>
                @foreach ($apps as $apps)
                {{-- <button><a href="/detailed">{{$apps->name}}</a></button>
                <h1>{{$apps->name}}</h1> --}}
                <tr>
                <td>{{ $apps->url }}</td>
                <td>{{ $apps->platform }}</td>
                <td>{{ $apps->contact }}</td>
                <td><button><a href="detailedappview/{{ $apps->id }}">{{ $apps->name }}</a></button></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</body>