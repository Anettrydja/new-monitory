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
                    <form action="add" method="post">
    
                        @csrf
                        <div class="form-group">
                            <label for="">Rakenduse nimi</label>
                            <input type="text" class="form-control" name="name" placeholder="nimi">
                        </div>
                        <div class="form-group">
                            <label for="">Rakenduse platvorm</label>
                            <input type="text" class="form-control" name="platform" placeholder="platform">
                        </div>
                        <div class="form-group">
                            <label for="">URL</label>
                            <input type="text" class="form-control" name="url" placeholder="url">
                        </div>
                        <div class="form-group">
                            <label for="">Server address</label>
                            <input type="text" class="form-control" name="server_address" placeholder="server_address">
                        </div>
                        <div class="form-group">
                            <label for="">server place</label>
                            <input type="text" class="form-control" name="server_place" placeholder="serverplace">
                        </div>
                        <div class="form-group">
                            <label for="">contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="contact">
                        </div>
                        <div class="form-group">
                            <label for="">version</label>
                            <input type="text" class="form-control" name="version" placeholder="version">
                        </div>
                        <div class="form-group">
                            <label for="">client</label>
                            <input type="text" class="form-control" name="client" placeholder="klient">
                        </div>
                        <div>
                            <label for="comment">Kommentaarid</label>
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