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
                    <form action="add" method="post">
    
                        @csrf
                        <div class="form-group">
                            <label for="">Eesnimi</label>
                            <input type="text" class="form-control" name="firstname" placeholder="Eesnimi">
                        </div>
                        <div class="form-group">
                            <label for="">Perekonnanimi</label>
                            <input type="text" class="form-control" name="lastname" placeholder="Perekonnanimi">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" class="form-control" name="username" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="">Parool</label>
                            <input type="text" class="form-control" name="password" placeholder="Parool">
                        </div>
                        <div class="form-group">
                            <input type="radio" name="status" id="statusadmininput" value="2" ><label for="statusadmininput">Administraator</label>
                            <input type="radio" name="status" id="statusreginput" value="1" ><label for="statusreginput">Tavakasutaja</label>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Loo kasutaja</button>
                        </div>
                        <button><a href="/users">Mine tagasi</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>