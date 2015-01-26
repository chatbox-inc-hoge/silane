<?php
require __DIR__."/../vendor/autoload.php";

use \Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;


$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => '127.0.0.1',
    'database'  => 'misaki',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();

$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->bootEloquent();

$eloquent = new \Chatbox\Invitation\Eloquent\TmpMail;
$provider = new \Chatbox\TmpData\TmpDataProvider($eloquent);
$inv = new \Chatbox\Invitation\Invitation(null,$provider);

$message = null;
if($_GET["mode"] === "flush"){
    $message = "all messages have been flushed";
}else if($_GET["mode"] === "delete"){
    $message = "message:HOGEHOGE have been removed";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="">Login Sample</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="#" data-toggle="modal" data-target="#myModal">See List</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div>
</nav>

<div class="container">
    <div class="row">
        <?php if($message):?>
        <div class="alert alert-info">
            <?=$message?>
        </div>
        <?php endif;?>
        <div class="col-sm-6 col-sm-offset-3" style="margin-top:5em">
            <?php if($_SERVER['REQUEST_METHOD'] === "POST"): ?>
                <?php $inv->send($_POST["mail"],["hoge"=>"piyo"]);?>
                <div class="well text-center" style="padding:2em 0">
                    <p>下記のアドレスにメールを送信しました。</p>
                    <p><?=$_POST["mail"]?></p>
                </div>
            <?php else:?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" name="mail" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            <?php endif;?>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Registered Item</h4>
            </div>
            <div class="modal-body">

                <?php
                $list = \Chatbox\Invitation\Eloquent\TmpMail::all();
                ?>

                <table class="table table-condensed table-bordered">
                    <tr>
                        <th>key</th>
                        <th>value</th>
                        <th></th>
                    </tr>
                    <?php foreach($list as $invItem):?>
                        <tr>
                            <td><?=$invItem->key?></td>
                            <td><?=json_encode($invItem->value)?></td>
                            <td><a href="?mode=delete&key=<?=$invItem->key?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                        </tr>

                    <?php endforeach;?>
                </table>
            </div>
            <div class="modal-footer">
                <a href="" class="btn btn-default" data-dismiss="modal">Close</a>
                <a href="?mode=flush" class="btn btn-primary">flush all</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>