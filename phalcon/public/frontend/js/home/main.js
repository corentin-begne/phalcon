/*global HomeManager, LoginHelper */
var homeManager;
(function(){
    /** on document ready */
    $(document).ready(init);

    /**
     * @name main#initLogin
     * @event
     * @description initialize login
     */
    function init(){
        new JsHelper({ManagerHelper:HomeManager});
        homeManager = HomeManager.getInstance();
    }
    
})();