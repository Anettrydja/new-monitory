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
                    <img id="usericon" src="<?php echo asset('css/usericon.png')?>"></img>
                    <span id="name">Test Testerino</span>
                </div>
                <div id="profilebutton">
                    <button id="userpagebutton"><a href="">Profiil/konto</a></button>
                </div>
                <button id="logout"><a href="">Logi välja</a>
            </div>
        </div>
        <div id="container_two">
            <div id="content">
                <div id="titlecontainer">
                    <h1 id="title">Üldvaade</h1>
                </div>
                <div id="tablecontainer">
                    <table>
                        <tr>
                        <td id="tdtitle">URL</td>
                        <td id="tdtitle">PLATVORM</td>
                        <td id="contacttd">TEHNILINE KONTAKT</td>
                        <td><td>
                        </tr>
                        @foreach ($apps as $apps)
                        <tr>
                        <td>{{ $apps->url }}</td>
                        <td>{{ $apps->platform }}</td>
                        <td>{{ $apps->contact }}</td>
                        <td id="buttontd"><button id="tablebutton"><a href="detailedappview/{{ $apps->id }}">{{ $apps->name }}</a></button></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>

        </div>
    </div>
</body>