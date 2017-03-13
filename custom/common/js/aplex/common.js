/**
 * 跳转到下一指定id的控件上
 */
function jumpNextId(id){
    var nextId = document.getElementById(id);
    var event = arguments.callee.caller.arguments[0] || window.event;
    //判断是否按了回车，enter的keycode代码是13
    if(event.keyCode == 13){
        nextId.focus();
    }
}

/**
 * 跳转到Login按钮上，并执行login函数，进行直接跳转
 */
function jumpLogin(id){
    var nextId = document.getElementById(id);
    var event = arguments.callee.caller.arguments[0] || window.event;
    //判断是否按了回车，enter的keycode代码是13
    if(event.keyCode == 13){
        login();
    }
}
