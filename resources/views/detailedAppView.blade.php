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
                <img id="usericon" src="<?php echo asset('css/usericon.png')?>"></img>
                <span id="name">Test Testerino</span>
                <button id="userpagebutton"><a href="">Profiil/konto</a></button>
                <button id="logout"><a href=""a>Logi välja</a>
            </div>
        </div>
        <div id="container_two">
            <div id="content">
                <table id="detailedtable">
                    <tr>
                    <td id="davtd">Platvorm</td>
                    <td id="davtd">URL</td>
                    <td id="davtd">Serveri aadress</td>
                    <td id="davtd">Asukoht serveris</td>
                    <td id="davtd">Tehniline kontakt</td>
                    <td id="davtd">Versioon</td>
                    <td id="davtd">Kommentaarid</td>
                    <td id="davtd">Tellija</td>
                    </tr>
                    @foreach ($app as $app)
                    <tr>
                    <h1>{{ $app->name }}</h1>
                    <td id="davtdinf">{{ $app->platform }}</td>
                    <td id="davtdinf">{{ $app->url }}</td>
                    <td id="davtdinf">{{ $app->server_address }}</td>
                    <td id="davtdinf">{{ $app->server_place }}</td>
                    <td id="davtdinf">{{ $app->contact }}</td>
                    <td id="davtdinf">{{ $app->version }}</td>
                    <td id="davtdinf">{{ $app->comments }}</td>
                    <td id="davtdinf">{{ $app->client }}</td>
                    </tr>
                    @endforeach
                </table>
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