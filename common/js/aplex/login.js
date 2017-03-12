/**
 * 处理登录系统相关的逻辑
 */
function login() 
{
    username = $('input[name="username"]').val();
    passwd = $('input[name="passwd"]').val();
    if (S(username).trim().isEmpty() || S(passwd).trim().isEmpty()) {
        confirm("Please Check Your Username And Passwd");
        return;
    }
    
    window.location.href="loginDealWith.php?username=" + username + "&passwd=" + passwd;
}
