modalNode = require "./modal.html"
itemNode =  require "./item.html"

do ($=jQuery)->

  $modalNode = (imageLists)->
    $elem = $(modalNode);
    for image in imageLists
      listNode = "<li>#{image}</li>"
      $(".modal-body ul",$elem).append(listNode)
    return $elem;


  album = (opt)->
    url = "/api.php/photo/list/default/"
    $.get url,{},(data)=>
      console.log "data recieved",data
      $(this).append $modalNode data.list;
      $(".modal",this).modal("show")

    return $(".modal",this.target);

  $.fn.album = album
