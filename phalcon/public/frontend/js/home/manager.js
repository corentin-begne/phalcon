/*global ActionModel */
var HomeManager;
(function(){
    /**
    * @class HomeManager
    * @constructor
    * @property {String} [baseName = "home"] base name of the interface associated with
    * @property {ActionModel} action Instance of ActionModel
    * @description  Manage home
    */
    HomeManager = function HomeManager(){
        extendSingleton(HomeManager);
        this.basePath = "home/";
        this.action = ActionModel.getInstance();
        this.manager = ManagerHelper.getInstance();
    };

    HomeManager.getInstance = function(){
        return getSingleton(HomeManager);
    };
    
})();