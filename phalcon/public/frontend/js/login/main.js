/*global LoginManager, LoginHelper */
var loginManager;
(function(){
    /** on document ready */
    $(document).ready(init);

    /**
     * @name main#initLogin
     * @event
     * @description initialize login
     */
    function init(){
        new JsHelper({ManagerHelper:LoginManager});
        loginManager = LoginManager.getInstance();
    }
    
})();