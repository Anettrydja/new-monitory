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
                <div id="profile">
                    <img id="usericon" src="<?php echo asset('css/usericon.png')?>"></img>
                    <span id="name">Test Testerino</span>
                </div>
                <div id="profilebutton">
                    <button><a href="">Profiil/konto</a></button>
                </div>
                <button id="logout"><a href=""a>Logi välja</a>
            </div>
        </div>
        <div id="container_two">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <hr>
                    @if(Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success')}}
                        </div>
                    @endif
                    @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail')}}
                        </div>
                    @endif
                    <form action="addapp" method="post">
    
                        @csrf
                        <div class="form-group">
                            <label for="">Rakenduse nimi</label>
                            <br>
                            <input type="text" class="form-control" name="name" placeholder="nimi">
                        </div>
                        <div class="form-group">
                            <label for="">Rakenduse platvorm</label>
                            <br>
                            <input type="text" class="form-control" name="platform" placeholder="platvorm">
                        </div>
                        <div class="form-group">
                            <label for="">Rakenduse URL</label>
                            <br>
                            <input type="text" class="form-control" name="url" placeholder="url">
                        </div>
                        <div class="form-group">
                            <label for="">Serveri aadress</label>
                            <br>
                            <input type="text" class="form-control" name="server_address" placeholder="serveri aadress">
                        </div>
                        <div class="form-group">
                            <label for="">Serveri asukoht</label>
                            <br>
                            <input type="text" class="form-control" name="server_place" placeholder="serveri asukoht">
                        </div>
                        <div class="form-group">
                            <label for="">Vastutav isik</label>
                            <br>
                            <input type="text" class="form-control" name="contact" placeholder="vastutav isik">
                        </div>
                        <div class="form-group">
                            <label for="">Versioon</label>
                            <br>
                            <input type="text" class="form-control" name="version" placeholder="versioon">
                        </div>
                        <div class="form-group">
                            <label for="">Tellija</label>
                            <br>
                            <input type="text" class="form-control" name="client" placeholder="tellija">
                        </div>
                        <div>
                            <label for="comment">Kommentaarid</label>
                            <br>
                            <textarea rows="10" class="form-control" cols="80" name="comments" id="comment" placeholder="Kommentaarid....."></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Lisa rakendus</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>