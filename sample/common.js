(function(){
    console.log("hogehoge");
})()


$(function(){

    var url = '/test.php';
    $("#fileupload").on("change",function(){
        $file = $(this).prop("files")[0];
        if($file){
            $reader = new FileReader();
            $reader.readAsText($file,"UTF-8");
            $reader.onload = function(evt){
                console.log("読み込み完了",evt,this);
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