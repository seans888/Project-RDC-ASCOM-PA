<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <br/>
    <div class="jumbotron">
        <h1>RDC, ASCOM, PA</h1>

        <p class="lead">Document Management System</p>
        <?php if (!Yii::$app->user->isGuest) { ?>
            <p><a class="btn btn-lg btn-success" href="index.php?r=test-project">Current Test Projects</a></p>
            <p><a class="btn btn-lg btn-success" href="index.php?r=event">Calendar</a></p>
        <?php } else { ?>
            <p><a class="btn btn-lg btn-success" href="index.php?r=site%2Flogin">Login</a></p>
        <?php } ?>
    </div>

    <hr/>

    <div class="row">
        <div class="col-lg-9">
            <blockquote>
                <p>A project developed by students of Asia Pacific College<br/>
                    for the Research Development Center, ASCOM, PA</p>
            </blockquote>
        </div>
        <div class="col-lg-3">
            <blockquote class="blockquote-reverse">
                <p>Project Developers:
                <ul>
                    <li>Buan, Michael John</li>
                    <li>Caranto, Edric Jon Cleon</li>
                    <li>Carlos, Christian Aleck</li>
                </ul>
                </p>
            </blockquote>
        </div>
    </div>
    <hr/>

    <!--<div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h4>Developed by:</h4>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>-->
        </div>

    </div>
</div>
