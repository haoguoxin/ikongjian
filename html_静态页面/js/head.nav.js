/**
 * Created by zhaochengju on 16/5/21.
 */
var isLogin = function () {
    var flag = false;
    $.ajax({
        url: "/getUserinfo",
        type: "post",
        dataType: "json",
        async: false,
        cache: false,
        success: function (data) {
            var result = data["result"];
            if (result && result == 1) {
                flag = true;
            }
        }
    });
    return flag;
}
var initHeadNav = function (thiz) {
    $(thiz).append($('<h2></h2>').addClass('headWelcome').append('欢迎来到爱空间'));
    if (isLogin()) {
        $(thiz).append($('<a></a>').addClass('headLogin').prop({'href': '/user/wdzl'}).append('个人中心'));
        $(thiz).append($('<a></a>').addClass('headLogin').prop({'href': '/logout'}).append('退出'));
    } else {
        $(thiz).append($('<a></a>').addClass('headLogin').prop({'href': '/showLogin'}).append('请登录'));
        $(thiz).append($('<a></a>').addClass('headLogin').prop({'href': '/regist/showRegister'}).append('免费注册'));
    }
    $(thiz).append($('<a></a>').addClass('headApp').prop({'href': '#footerApp'}).append('爱空间APP'));
    $(thiz).append($('<a></a>').addClass('headWechat').prop({'href': '#footerMa'}).append('微信公众号'));
    $(thiz).append($('<a></a>').addClass('headTribe').prop({
        'href': 'http://xiaoqu.qq.com/mobile/barindex.html?_bid=128&_wv=1027&bid=193220',
        'name': 'Top'
    }).prop({'target':'_blank'}).append('兴趣部落'));
}
$(document).ready(function () {
    var $headFunction = $('.headFunction');
    $headFunction.each(function (i, item) {
        initHeadNav(item);
    })
})

