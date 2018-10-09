integratedCKEDITOR('description-post',height=200);
integratedCKEDITOR('content-post',height=800);
// integratedCKEDITOR('seo-description-post',height=200);
if ($('#btnBrowseImagePost').length) {
    var button1 = document.getElementById('btnBrowseImagePost');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImagePost','showHinhPost');
    }
};
if ($('#btnBrowseImageMXH').length) {
    var button1 = document.getElementById('btnBrowseImageMXH');
    button1.onclick = function () {
        selectFileWithKCFinder('pathImageMXH','showHinhMXH');
    }
};
$('#btnBrowseMore').click(function () {
    window.KCFinder = {
        callBackMultiple: function (files) {
            window.KCFinder = null;
            var listImage = "";
            // textarea.value = "";
            for (var i = 0; i < files.length; i++)
                listImage += "<div class='col-md-3 text-center one-image'>" +
                    "<img src='" + files[i] + "' id='showHinh' class='image-choose' alt='' style=''>" +
                    "<input type='hidden' name='image-choose[]' value='" + files[i] + "'>" +
                    "<span data='" + i + "' class='remove-image'>X</span>" +
                    "</div>"


            $('#add-image').append(listImage);
            $('.remove-image').click(function () {
                $(this).parent().remove();
            });
        }
    };
    // window.open('http://localhost:8080/haimocweddingv4/js/kcfinder/browse.php?type=images',
    //     'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
    //     'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    // );
    window.open(getBaseURL() + 'js/kcfinder/browse.php?type=images',
        'kcfinder_multiple', 'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
})
$('select.select-locale').change(function(){
    var href=$(this).find(':selected').data('href');
    window.location.href= href;
});
