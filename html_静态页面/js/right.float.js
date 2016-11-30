$(document).ready(function () {
    ask();
})
// css样式
var acss = {'display': 'block', 'cursor': 'pointer', 'width': '58px', 'height': '58px', 'margin-bottom': '2px'}
var buttoncss = {
    'display': 'block',
    'float': 'left',
    'cursor': 'pointer',
    'border': 'none',
    'width': '146px',
    ' height': '34px',
    'line-height': '34px'
}
var pcss = {
    'margin': '0 auto',
    'position': 'relative',
    'width': '298px',
    'height': '34px',
    'line-height': '34px',
    'margin-bottom': '10px'
}

// 我要预约
var $wyyy = function () {
    return $('<a/>').prop({
        'target': '_blank',
        'href': '/order/showCreateOrders'
    }).html('&nbsp;').css(acss).css({
        'background': 'url(images/ask1.jpg) no-repeat center top'
    }).hover(function () {
        $(this).css({'background': 'url(images/ask1_over.jpg) no-repeat center top'})
    }, function () {
        $(this).css({'background': 'url(images/ask1.jpg) no-repeat center top'})
    });
}
function ask() {
    var $indexAsk = $('<div/>').css({
        'position': 'fixed',
        'top': '45%',
        'right': '1%',
        'z-index': '99',
        'width': '58px'
    });
    $indexAsk.append($wyyy());
    $indexAsk.append($jsqbutton());
    $indexAsk.append($zxkf());
    $indexAsk.append($fhdb());
    $("body").append($indexAsk);
}
// 计算器按钮
var $jsqbutton = function () {
    return $('<a/>').prop({'href': 'javascript:void(0)'}).html('&nbsp;').css(acss).css({
        'background': 'url(images/ask2.jpg) no-repeat center top'
    }).hover(function () {
        $(this).css({'background': 'url(images/ask2_over.jpg) no-repeat center top'})
    }, function () {
        $(this).css({'background': 'url(images/ask2.jpg) no-repeat center top'})
    }).click($jsq);
}
// 计算器框
var $jsq = function () {
    var $ikjJsq = $('<div/>').addClass('ikjJsq').css({
        'overflow': 'hidden',
        'padding-bottom': '11px',
        'background-color': '#f2f2f2',
        'position': 'absolute',
        'display': 'none',
        'top': '60px',
        'left': '-346px',
        'width': '340px',
        'height': '178px',
    }).append($('<div/>').css({
        'overflow': 'hidden',
        'padding-bottom': '11px'
    }).append($('<i/>').click(function () {
        $('.ikjJsq').fadeOut(500, function () {
            $(this).remove();
        });
    }).css({
        'cursor': 'pointer',
        'float': 'right',
        'width': '13px',
        'height': '14px',
        'margin': '9px 9px 0 0'
    }).append($('<img/>').css({'border': '0 none'}).prop({'src': 'images/esc.png'}))));
    $ikjJsq.append($('<p/>').css(pcss).append($('<input/>').css({
        'display': 'block',
        'border': '1px solid #ddd',
        'font-family': "微软雅黑",
        'width': '298px',
        'height': '34px',
        'line-height': '34px',
        'padding': '0 20px',
        '-webkit-box-sizing': 'border-box',
        '-moz-box-sizing': 'border-box',
        'box-sizing': 'border-box',
        'margin': '0'
    }).prop({
        'id': 'jusuaninput',
        'type': 'text',
        'placeholder': '请输入您的建筑面'
    })).append($('<span/>').css({
        'position': 'absolute',
        'color': '#b0b0b0',
        'top': '0',
        'right': '11px',
        'line-height': '29px'
    }).text('M').append($('<sup/>').css({
        'vertical-align': 'super',
        'font-size': 'smaller'
    }).text('2'))));
    $ikjJsq.append($('<p/>').css(pcss).append($('<button/>').click(function () {
        // 新房按钮
        var jfang = $("#jusuaninput").val();
        if (jfang > 44 && jfang < 201) {
            if (typeof(tax) != "undefined") {
                var jfang1 = Math.round(jfang * (699) * tax());
                $("#ikjJsqP").html(jfang1);
            }
        } else {
            $("#ikjJsqP").html("只允许45㎡-200㎡的房屋进行计算");
        }
    }).html('&nbsp;').css(buttoncss).css({
        'background': 'url(images/ask_newjsq1.jpg) no-repeat center left',
        'margin-right': '6px'
    })).append($('<button/>').click(function () {
        // 旧房按钮
        var jfang = $("#jusuaninput").val();
        if (jfang > 44 && jfang < 201) {
            if (typeof(tax) != "undefined") {
                var jfang1 = Math.round(jfang * (699 + 119) * tax());
                $("#ikjJsqP").html(jfang1);
            }
        } else {
            $("#ikjJsqP").html("只允许45㎡-200㎡的房屋进行计算");
        }
    }).html('&nbsp;').css(buttoncss).css({
        'background': 'url(images/ask_oldjsq1.jpg) no-repeat center left'
    })));
    $ikjJsq.append($('<p/>').prop({'id': 'ikjJsqP'}).css(pcss).css({
        'background-color': '#ddd',
        'color': '#999',
        'text-align': 'center'
    }).append('建筑面积* (119+699元/㎡) * 税率(').append($('<span/>').text(tax()).css({'position': 'static'})).append(')'));
    $(this).after($ikjJsq.fadeIn(500));
}

// 在线客服
var $zxkf = function () {
    /*小能客服脚本  */
    $.ajax({
        url: "/user/customGetUserInfo",
        async: true,
        context: document.body,
        success: function (data) {
            //赋值
            window.NTKF_PARAM = data;
            //加载脚本，再加载脚本前NTKF_PARAM一定已赋值，脚本加载后赋值是无效的
            var protocol = "https:" == location.protocol ? "https://" : "http://";
            $.get(protocol + 'dl.ntalker.com/js/xn6/ntkfstat.js?siteid=kf_9272', function () {
            }, 'script');
        }
    });
    return $('<a/>').attr({
        'target': '_blank',
        'onclick': 'NTKF.im_openInPageChat("kf_9272_1464004455579");ga(\'send\', \'event\', \'联系客服\', \'Click\') '
    }).html('&nbsp;').css(acss).css({
        'background': 'url(images/ask3.jpg) no-repeat center top'
    }).hover(function () {
        $(this).css({'background': 'url(images/ask3_over.jpg) no-repeat center top'})
    }, function () {
        $(this).css({'background': 'url(images/ask3.jpg) no-repeat center top'})
    });
}

// 返回顶部
var $fhdb = function () {
    return $('<a/>').prop({'href': '#Top'}).html('&nbsp;').css(acss).css({
        'background': 'url(images/ask4.jpg) no-repeat center top'
    }).hover(function () {
        $(this).css({'background': 'url(images/ask4_over.jpg) no-repeat center top'})
    }, function () {
        $(this).css({'background': 'url(images/ask4.jpg) no-repeat center top'})
    });
}


//浮动页面右侧功能按钮
function ask() {
    var $indexAsk = $('<div/>').css({
        'position': 'fixed',
        'top': '45%',
        'right': '1%',
        'z-index': '99',
        'width': '58px'
    });
    $indexAsk.append($wyyy());
    $indexAsk.append($jsqbutton());
    $indexAsk.append($zxkf());
    $indexAsk.append($fhdb());
    $("body").append($indexAsk);
}

var tax = function () {
    var result = 0;
    $.ajax({
        type: "POST",
        url: "/getAreaTax",
        data: {},
        async: false,
        cache: true,
        dataType: "json",
        success: function (data) {
            if (data != null && data.tax != null) {
                result = data.tax.tax;
            }
        }
    });
    return result;
}

