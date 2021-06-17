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
                <div id="infocontainer">
                    <form id="changeinput" method="POST">
                        <label for="urlinput">URL: </label>
                        <div id="inputarea">
                            <input type="text" name="urlinput" id="urlinput" placeholder="Testinfo2">
                            <input type="submit" name="urlsubmit" value="✓">
                        </div>
                    </form>
                    <form id="changeinput" method="POST">
                        <label for="platforminput">Platvorm: </label>
                        <div id="inputarea">
                            <input type="text" name="platforminput" id="platforminput" placeholder="Testinfo3">
                            <input type="submit" name="platformsubmit" value="✓">
                        </div>
                    </form>
                    <form id="changeinput" method="POST">
                        <label for="addressinput">Serveri tegelik aadress: </label>
                        <div id="inputarea">
                            <input type="text" name="addressinput" id="addressinput" placeholder="Testinfo4">
                            <input type="submit" name="addresssubmit" value="✓">
                        </div>
                    </form>
                    <form id="changeinput" method="POST">
                        <label for="contactinput">Tehniline kontakt: </label>
                        <div id="inputarea">
                            <input type="text" name="contactinput" id="contactinput" placeholder="Testinfo5">
                            <input type="submit" name="contactsubmit" value="✓">
                        </div>
                    </form>
                    <form id="changeinput" method="POST">
                        <label for="serverinput">Asukoht serveris: </label>
                        <div id="inputarea">
                            <input type="text" name="serverinput" id="serverinput" placeholder="Testinfo6">
                            <input type="submit" name="serversubmit" value="✓">
                        </div>
                    </form>
                    <form id="changeinput" method="POST">
                        <label for="versioninput">Rakenduse versioon: </label>
                        <div id="inputarea">
                            <input type="text" name="versioninput" id="versioninput" placeholder="Testinfo7">
                            <input type="submit" name="versionsubmit" value="✓">
                        </div>
                    </form>
                    <form id="changeinput" method="POST">
                        <label for="clientinput">Tellija: </label>
                        <div id="inputarea">
                            <input type="text" name="clientinput" id="clientinput" placeholder="Testinfo8">
                            <input type="submit" name="clientsubmit" value="✓">
                        </div>
                    </form>
                </div>
                <div id="comment_analysiscontainer">
                    <div id="commentcontainer">
                        <form method="POST">
                            <input type="submit" name="commentsubmit" id="commentsubmit" value="✓">
                            <textarea type="text" name="commentinput" id="commentinput" placeholder="Testinfo9"></textarea>
                            </form>
                    </div>
                    <div id="analysis_makechanges">
                        <div id="buttoncontainer">
                            <button id="save"><a href="/app/info">Salvesta</a></button>
                        </div>
                        <div id="buttoncontainer">
                            <form method="POST" id="deletebuttonform">
                                <input type="submit" name="deletebutton" id ="deletebutton" value="Kustuta rakendus">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
