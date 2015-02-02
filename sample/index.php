<?php
require __DIR__."/../vendor/autoload.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?= \Chatbox\CDN::fullset();?>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">album</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-sm-12">

            <div class="alert alert-danger">
                <strong>hogehoge</strong>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid amet aperiam architecto autem delectus deleniti et exercitationem fuga ipsam magni molestiae nesciunt nostrum perferendis provident quidem quo, similique vel voluptate.</p>
            </div>

            <form class="form-inline">
                <div class="form-group">
                    <label>Category</label>
                    <select class="form-control" name="" id="">
                        <option value="">hogehoge</option>
                        <option value="">hogehoge</option>
                        <option value="">hogehoge</option>
                        <option value="">hogehoge</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control">
                </div>
                <a class="btn btn-default" href="">add New Category</a>
            </form>

            <div role="tabpanel" style="margin-top: 1em;">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#SimpleUploadTab" data-toggle="tab">SimpleUpload</a></li>
                    <li role="presentation"><a href="#MultipleUploadTab" data-toggle="tab">MultipleUpload</a></li>
                    <li role="presentation"><a href="#ImageListTab" data-toggle="tab">ImageList</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="SimpleUploadTab">
                        <div class="page-header">
                            <h2>Upload New Image</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, beatae consequatur eius enim, exercitationem, explicabo facilis fuga libero non perspiciatis quas recusandae reiciendis sint tempora tenetur totam velit voluptas voluptate.</p>
                        </div>
                        <form class="form-inline">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" class="form-control" placeholder="Jane Doe">
                            </div>
                            <div class="form-group">
                                <label>File</label>
                                <input type="file" class="form-control" placeholder="jane.doe@example.com">
                            </div>
                            <button type="submit" class="btn btn-default">Send invitation</button>
                        </form>

                    </div>
                    <div class="tab-pane" id="MultipleUploadTab">

                    </div>
                    <div class="tab-pane" id="ImageListTab">

                    </div>
                </div>

            </div>


        </div>
    </div>


</div>



</body>
</html>