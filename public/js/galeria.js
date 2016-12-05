$(".img-gallery").click(function(){
    $("#image-modal").attr('src',$(this).attr('src'));
    if(this.dataset.size === "large"){
        $("#modal-gallery-content").addClass("modal-lg");
    }
    else{
         $("#modal-gallery-content").removeClass("modal-lg")
    }
    $("#modal-gallery").modal('show');
})