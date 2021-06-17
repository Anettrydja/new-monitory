<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/layout.css')); ?>" >
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
                
                <button id="userbutton"><a href="/users">Kasutajate haldus</a></button>
                <button id="homebutton"><a href="/home">Avaleht</a></button>
            </div>
            <div id="bottom">
                <div id="profile">
                    <img id="usericon" src="<?php echo asset('css/usericon.png')?>"></img>
                    <span id="name">Test Testerino</span>
                </div>
                    <button id="userpagebutton"><a href="">Profiil/konto</a></button>
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
                        <td id="emptytd">DETAILNE VAADE</td>
                        </tr>
                        <?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apps): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                        <td><?php echo e($apps->url); ?></td>
                        <td><?php echo e($apps->platform); ?></td>
                        <td><?php echo e($apps->contact); ?></td>
                        <td id="buttontd"><button id="tablebutton"><a href="detailedappview/<?php echo e($apps->id); ?>"><?php echo e($apps->name); ?></a></button></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>

        </div>
    </div>
</body><?php /**PATH C:\Users\anett\new-monitory\resources\views/home.blade.php ENDPATH**/ ?>