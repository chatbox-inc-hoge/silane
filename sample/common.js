(function(){
    var loadList = function($scope){
        console.log("データを送信します",$scope);
        $.get("/api.php/photo/list/"+$scope.category+"/",{},function(data){
            $scope.$apply(function(){
                if(data.list){
                    $scope.lists.length=0;
                    $scope.lists.push.apply($scope.lists,data.list);
                    console.log(data)
                }else{
                    console.error("データの受信形式が異常です。")
                }
            });
        });
    };

    var app = angular.module("albumSample",[]);
    app.controller("imageListController",["$scope",function($scope){
        console.log("hogehoge controller");
        $scope.lists = [];
        $scope.category = "default";
        $scope.reload = function(){
            loadList(this);
        };

        loadList($scope);
    }]);
    console.log("hogehoge");
})();


$(function(){

    var url = '/api.php/upload/post';
    $(document).on("change","#fileupload",function(){
        $file = $(this).prop("files")[0];
        if($file){
            console.log("ファイルが選択されました",$file);
            $reader = new FileReader();
            $reader.readAsDataURL($file,"UTF-8");
            $reader.onload = function(evt){
                console.log("読み込み完了",evt,this);
                $.post(url,{
                    file: $file.name,
                    data: this.result
                },function(data){
                    console.log("転送完了");
                    $file = null;
                });
            }
        }else{
            console.log("ファイルの選択がない");
        }


    });



//    $('#fileupload').fileupload({
//        url: url,
//        dataType: 'json',
//        done: function (e, data) {
//            $.each(data.result.files, function (index, file) {
//                $('<p/>').text(file.name).appendTo('#files');
//            });
//        },
//        progressall: function (e, data) {
//            var progress = parseInt(data.loaded / data.total * 100, 10);
//            $('#progress .progress-bar').css(
//                'width',
//                progress + '%'
//            );
//        }
//    }).prop('disabled', !$.support.fileInput)
//        .parent().addClass($.support.fileInput ? undefined : 'disabled');
//

});