<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layout.css')); ?>" >
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
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <?php if(Session::get('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(Session::get('success')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(Session::get('fail')): ?>
                        <div class="alert alert-danger">
                            <?php echo e(Session::get('fail')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="add" method="post">
    
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="">Nimi</label>
                            <input type="text" class="form-control" name="name" placeholder="Eesnimi ja perekonnanimi">
                        </div>
                        <div class="form-group">
                            <label for="">E-mail</label>
                            <input type="text" class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <label for="">Parool</label>
                            <input type="text" class="form-control" name="password" placeholder="Parool">
                        </div>
                        <div class="form-group-type">
                            <input type="radio" name="type" id="statusadmininput" value="1" ><label for="statusadmininput">Administraator</label>
                            <input type="radio" name="type" id="statusreginput" value="2" ><label for="statusreginput">Tavakasutaja</label>
                        </div>
                        <div class="form-group">
                            <button id="createuser" type="submit" class="btn btn-primary btn-block">Loo kasutaja</button>
                        </div>
                        <br>
                        <button id="goback"><a href="/users">Mine tagasi</a></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body><?php /**PATH C:\Users\anett\new-monitory\resources\views/addNewUser.blade.php ENDPATH**/ ?>