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
            <div id="content">
                <div id="infocontainerdisplay">
                    <div id="inputarea2"> 
                        <table>
                            <tr>
                            <td id="tdtitle">Platvorm</td>
                            <td id="tdtitle">URL</td>
                            <td id="tdtitle">Serveri aadress</td>
                            <td id="tdtitle">Asukoht serveris</td>
                            <td id="tdtitle">Tehniline kontakt</td>
                            <td id="tdtitle">Versioon</td>
                            <td id="tdtitle">Kommentaarid</td>
                            <td id="tdtitle">Tellija</td>
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
                    </div>
                </div>
                <div id="comment_analysiscontainer2">
                    <div id="commentcontainer">
                        <div id="commentarea">
                            <td>kommentaarid...</td>
                        </div>
                    </div>
                    <div id="analysis_makechanges2">
                        <div id="buttoncontainer">
                            <button id="analysis"><a>Analüüs</a></button>
                        </div>
                        <div id="buttoncontainer">
                            <button id="changeinfo"><a href="/app/changeinfo">Muuda andmeid</a></button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>

