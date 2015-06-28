/*global ActionModel */
var CreateScrudManager;
(function(){
    /**
    * @class TemplateManager
    * @constructor
    * @property {ActionModel} action Instance of ActionModel
    * @description  Manage template
    */
    CreateScrudManager = function CreateScrudManager(){
        extendSingleton(CreateScrudManager);
        this.basePath = "scrud/create//";
        this.action = ActionModel.getInstance();
        this.manager = ManagerModel.getInstance();
    };

    CreateScrudManager.getInstance = function(){
        return getSingleton(CreateScrudManager);
    };
    
})();