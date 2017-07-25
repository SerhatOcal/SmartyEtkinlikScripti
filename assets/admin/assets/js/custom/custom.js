$(document).ready(function() {

    // //Menü Ayarları
    // $(".siderbar_menu > li").click(function (event) {
    //
    //     var parent = $(this).parent().parent().attr("id");
    //     var activeItem = $(this).attr("id");
    //     var base_url  = $(".base_url").text();
    //     var url  = $(this).find("a").attr("href");
    //     $.post(base_url + "admin/setActiveMenu",{parent:parent, activeItem:activeItem},function (response) {});
    //
    //     event.preventDefault();
    //     setTimeout(function () {
    //         window.location.href=url;
    //     })
    //
    // });

    //Confirm Ayarları

    $("#removeBtn").click(function () {

        var dataURL = $(this).attr("dataURL");
        var  remove =
            $.confirm({
                title: 'UYARI!',
                content: 'Silmek İstediğinizden Emin misiniz!',
                confirmButton: 'Evet',
                cancelButton: 'iptal',
                confirmButtonClass: 'btn-info',
                cancelButtonClass: 'btn-danger',
                confirm: function(result) {
                window.location.href = dataURL;
            }
        });

    });

});
