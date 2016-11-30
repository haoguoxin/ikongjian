/**
 * 页面头部城市切换插件
 * 依赖插件: jQuery cookie.utils
 * Created by zhaochengju on 16/5/21.
 */
var expires = 36500, districtArr = new Array();
var IKJ_AREA_DOMIAN = "IKJ_AREA_DOMIAN", IKJ_AREA_POSTFIX = "IKJ_AREA_POSTFIX", IKJ_IS_SELECT = "IKJ_IS_SELECT";
// 初始化地域信息
var initDistrictArr = function () {
    $.ajax({
        url: "/getDistrict",
        type: "post",
        dataType: "json",
        async: false,
        cache: true,
        success: function (result) {
            var district = result.districtList;
            $(district).each(function (i, item) {
                var areaArr = new Array();
                $(item.areas).each(function (i, entity) {
                    areaArr.push(new areaObj(entity.code, entity.name, entity.postFix, entity.domain.replace('http://', '')));
                })
                districtArr.push(new districtObj(item.name, areaArr));
            })
        }
    })
}
// 地区对象
var districtObj = function (name, areaArr) {
    this.name = name;
    this.areaArr = areaArr;
}
var areaObj = function (code, name, postFix, domain) {
    this.code = code;
    this.name = name;
    this.postFix = postFix;
    this.domain = domain;
}
var getAreaObj = function (domain) {
    if (domain == null || domain == null) {
        return null;
    }
    var obj = null;
    $(districtArr).each(function (i, item) {
        $(item.areaArr).each(function (j, jtem) {
            if (jtem.domain.indexOf(domain) >= 0) {
                obj = jtem;
            }
        })
    })
    return obj;
}
// 选择地域
var setArea = function (domain) {
    var obj = getAreaObj(domain);
    if (obj != null) {
        setCookie(IKJ_AREA_DOMIAN, obj.domain);
        setCookie(IKJ_AREA_POSTFIX, obj.postFix);
        setCookie(IKJ_IS_SELECT, "true");
        window.location.host = obj.domain;
    }
}
var $headAreaList = function () {
    var $tbody = $('<tbody></tbody>');
    $(districtArr).each(function (i, item) {
        var $tr = $('<tr></tr>').append($('<th></th>').css({
            'font-style': 'normal',
            'font-weight': 'normal',
            'border-right': '1px solid #b0b0b0',
            'border-bottom': '1px solid #b0b0b0',
        }).prop({'width': 56}).append(item.name));
        var $td = $('<td></td>').css({
            'border-bottom': '1px solid #b0b0b0',
            'padding': '0 5px'
        });
        $(item.areaArr).each(function (i, entity) {
            var $a = $('<a></a>').prop('href', 'javascript:setArea(\'' + entity.domain.replace('http://', '') + '\')').append(entity.name);
            $td.append($a.css({
                'color': '#fff',
                'margin': '0 5px'
            }));
        })
        $tr.append($td);
        $tbody.append($tr);
    })
    var $table = $('<table></table>').prop({
        'width': 340,
        'border': 0,
        'cellspacing': 0,
        'cellpadding': 0
    }).append($tbody);
    var $p = $("<p></p>").append('更多城市敬请期待！').css({
        'line-height':'20px',
        'padding':'0 12px',
        'margin':' 8px 0'
    });
    return $('<div></div>').css({
        'display': 'none',
        'position': 'absolute',
        'color': '#fff',
        'z-index': '1000',
        'top': '35px',
        'left': '109px',
        'background': 'rgba(51, 51, 51, 0.8)'
    }).append($table).append($p);
}
// 初始化地域弹窗
var initHeadAreas = function (thiz) {
    $(thiz).append('房屋所在城市');
    var obj = getAreaObj(window.location.host);
    var text = obj != null ? obj.name : "北京";
    var $spanArea = $('<span></span>').css({
        'color': '#fff',
        'cursor': 'pointer',
        'padding': '0 18px 0 10px',
        'background': 'url(statics/images/ikongjian/images/head_down.png) no-repeat right center',
    }).append(text);
    $(thiz).append($spanArea);
    // 注册点击事件
    var $headAreaList1 = $headAreaList();
    $(thiz).hover(function () {
        $(thiz).append($headAreaList1);
        $headAreaList1.stop().slideToggle(1000);
    }, function () {
        $headAreaList1.stop().slideToggle(1000, function () {
            $(this).remove();
        })
    })
}
// 页面加载
$(document).ready(function () {
    initDistrictArr();
    var $headArea = $('.headArea');
    if ($headArea.length > 0) {
        $headArea.each(function (i, item) {
            initHeadAreas(item);
        })
    }

    var cikFlag = getCookie(IKJ_IS_SELECT);
    if (cikFlag == null || cikFlag == "") {
        initAreas(districtArr);
    }
})

// 未选城市弹窗
var initAreas = function (district) {
    var $pop = $('<div/>').css({
        "position": "fixed",
        "top": "0",
        "left": "0",
        "z-index": "1000",
        "background": "rgba(178,178,178,.5)",
        "width": "100%",
        "height": "100%"
    });
    var $areaHead = $('<div/>').css({
        "position": "relative",
        "marginBottom": "20px",
        "height": "99px"
    }).append($('<img/>').prop({'src': 'statics/images/ikongjian/images/area_head.png'})).append($('<a/>').click(function () {
        // 关闭弹窗
        $pop.remove();
        $('body').removeProp('style');
    }).css({
        "position": "absolute",
        "top": "12px",
        "right": "12px"
    }).prop({'href': 'javascript:void(0)'}).append($('<img/>').prop({'src': 'statics/images/ikongjian/images/area1.png'})));
    var $table = $('<table/>').css({
        "borderTop": "1px solid #dcdcdc",
        "line-height": "34px",
        "font-size": "14px",
    }).prop({'width': '100%', 'border': '0', 'cellspacing': '0', 'cellpadding': '0'});

    $(district).each(function (i, item) {
        var $tr = $('<tr/>').append($('<th/>').css({
            "width": "73px",
            "borderRight": "1px solid #dcdcdc",
            "borderBottom": "1px solid #dcdcdc",
            "font-weight": "normal",
            "color": "#333"
        }).prop({'width': '41'}).text(item.name));
        var $td = $('<td/>').css({
            "borderBottom": "1px solid #dcdcdc",
        });
        $(item.areaArr).each(function (j, jtem) {
            $td.append($('<a/>').css({
                "margin": "0 15px",
                "color": "#6c6c6c"
            }).prop({'href': 'javascript:setArea(\"' + jtem.domain.replace('http://', '') + '\")'}).text(jtem.name))
        })
        $tr.append($td);
        $table.append($tr);
    })

    var $areaText = $('<div/>').css({
        "width": "677px",
        "margin": "0 auto"
    }).append($table).append($('<strong/>').text('更多城市敬请期待！').css({
        "display": "block",
        "font-weight": "normal",
        "text-align": "center",
        "line-height": "34px",
        "color": "#6c6c6c",
    }));
    var $areatc = $('<div/>').css({
        "width": "712px",
        "background": "#fff",
        "margin": "10% auto"
    }).append($areaHead).append($areaText);
    $pop.append($areatc);
    $("body").append($pop).css({
        'padding': '0 17px 0 0',
		'height': '100%'
    });
}
