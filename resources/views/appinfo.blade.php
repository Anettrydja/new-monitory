<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?php echo asset('css/appinfo.css')?>">
<body>
    <br>
    <div id="logoimage">
        <image src="<?php echo asset ('images/logotest.png')?>" alt="logo" height="100px" width="320px">
    </div>
    <br>
    <div id="container"> 
        <div id="container_one">
            <div id="top">
                <button id="addbutton"><a href="">Lisa rakendus</a></button>
                <button id="notificationsbutton"><a href="">Teavitused</a></button>
                <button id="userbutton"><a href="">Kasutajate haldus</a></button>
            </div>
            <div id="bottom">
                <div id="profile">
                    <img id="usericon" src="<?php echo asset('images/user_icon.png')?>"></img>
                    <span id="name">Test Testerino</span>
                </div>
                <div id="profilebutton">
                    <button id="userpagebutton"><a href="">Profiil/konto</a></button>
                </div>
                <button id="logout"><a href=""a>Logi välja</a>
            </div>
        </div>
        <div id="container_two">
            <div id="content">
                <div id="titlecontainer">
                    <h1 id="title">Testinfo1</h1>
                </div>
                <div id="infocontainerdisplay">
                    <div id="inputarea2">
                        <span id="urlinfo">URL:</span>
                        <span id="platforminfo">Platvorm:</span>
                        <span id="addressinfo">Serveri tegelik aadress:</span>
                        <span id="contactinfo">Tehniline kontakt:</span>
                        <span id="serverinfo">Asukoht serveris:</span>
                        <span id="versioninfo">Rakenduse versioon:</span>
                        <span id="orderinfo">Tellija:</span>
                    </div>
                    <div id="infoarea">
                        <span id="testinfo">Testinfo2</span>
                        <span id="testinfo">Testinfo3</span>
                        <span id="testinfo">Testinfo4</span>
                        <span id="testinfo">Testinfo5</span>
                        <span id="testinfo">Testinfo6</span>
                        <span id="testinfo">Testinfo7</span>
                        <span id="testinfo">Testinfo8</span>
                    </div>
                </div>
                <div id="comment_analysiscontainer2">
                    <div id="commentcontainer">
                        <div id="commentarea">
                        <span>Testinfo9</span>
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