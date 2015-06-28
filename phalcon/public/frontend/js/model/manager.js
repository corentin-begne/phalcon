/*global ActionModel, ucfirst, isDefined, extendSingleton, getSingleton, InterfaceHelper */
var ManagerModel;
(function(){
    /**
    * @name ManagerModel
    * @constructor
    * @property {ActionModel} [action = new ActionModel()] Instance of ActionModel
    * @description Manage global manager functions and actions
    */
    ManagerModel = function(){        
        extendSingleton(ManagerModel);
        this.action = ActionModel.getInstance();
        this.container = $("body");
    };

    /**
     * @member ManagerModel#getInstance
     * @description get the single class instance
     * @return {ManagerModel} the single class instance
     */
    ManagerModel.getInstance = function(){
        return getSingleton(ManagerModel);
    };

    ManagerModel.prototype.init = function(manager) {
        var that = this;                
        var selectors = {
            ".action":action
        };
        $.each(selectors, addMouseDownEvent);

        function addMouseDownEvent(selector, fn){            
            var elements = that.container.find(selector);
            elements.each(addEvent);
            
            function addEvent(i, element){
                var actionType = $(element).attr("actionType");
                if(!isDefined(actionType)){
                    actionType = "mousedown";                    
                }
                $(element).unbind(actionType);
                $(element).bind(actionType, fn);
            }
        }

        function action(event){
            var name = $(this).attr("actionName");
            if(isDefined(manager[name])){ 
                manager[name]($(this),event);
            }
        }
    };
})();