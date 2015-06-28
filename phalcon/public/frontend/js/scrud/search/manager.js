/*global ActionModel */
var SearchScrudManager;
(function(){
    /**
    * @class TemplateManager
    * @constructor
    * @property {ActionModel} action Instance of ActionModel
    * @description  Manage template
    */
    SearchScrudManager = function SearchScrudManager(){
        extendSingleton(SearchScrudManager);
        this.basePath = "scrud/search//";
        this.action = ActionModel.getInstance();
        this.manager = ManagerModel.getInstance();
    };

    SearchScrudManager.getInstance = function(){
        return getSingleton(SearchScrudManager);
    };
    
})();