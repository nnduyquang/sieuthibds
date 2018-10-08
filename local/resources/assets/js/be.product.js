// integratedCKEDITOR('description-post',height=200);
integratedCKEDITOR('content-post',height=800);
// integratedCKEDITOR('seo-description-post',height=200);
// if ($('#btnBrowseImageProduct').length) {
//     var button1 = document.getElementById('btnBrowseImageProduct');
//     button1.onclick = function () {
//         selectFileWithKCFinder('pathImageProduct','showHinhProduct');
//     }
// };
$('.ulti-copy').click(function(){
    var selected = [];
    $('input[type=checkbox][name=id\\[\\]]').each(function() {
        if ($(this).is(":checked")) {
            selected.push($(this).val());
        }
    });
    if(selected.length!=0)
    {
        $('input[name=listID]').val(selected);
        alert('Đã lưu sản phẩm');
    }
    else{
        alert('Mời bạn chọn sản phẩm');
    }
    console.log(selected);
    // alert(id[0]);
});
$('select[name=select-city]').change(function () {
    var id = $(this).val();
    var data = new FormData($(this).get(0));
    data.append('id', id);
    var option = '<option value=\'-1\'>Chọn Phường/Xã</option>';
    $('select[name=select-ward]').html(option);
    $.ajax({
        type: "POST",
        url: getBaseURL() + "sml_admin/san-pham/getAllDistrictsByCity",
        dataType: 'json',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
            if (data.success) {
                var option = '<option value=\'-1\'>Chọn Quận/Huyện</option>';
                data.districts.forEach(function (item) {
                    option += "<option value='" + item['id'] + "'>" + item['name'] + "</option>"
                });
                $('select[name=select-district]').html(option);
            }
            else {
                alert('no')
            }
        }
    });
});
$('select[name=select-district]').change(function () {
    var id = $(this).val();
    var data = new FormData($(this).get(0));
    data.append('id', id);
    $.ajax({
        type: "POST",
        url: getBaseURL() + "sml_admin/san-pham/getAllWardsByDistrict",
        dataType: 'json',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
            if (data.success) {
                var option = '<option value=\'-1\'>Chọn Phường/Xã</option>';
                data.wards.forEach(function (item) {
                    option += "<option value='" + item['id'] + "'>" + item['name'] + "</option>"
                });
                $('select[name=select-ward]').html(option);
            }
            else {
                alert('no')
            }
        }
    });
});
$('textarea[name=map]').change(function(){
    $('.show-map').html($(this).val());
});

