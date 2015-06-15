/*global ActionModel */
var [className]Manager;
(function(){
    "use strict";
    /**
    * @class [className]Manager
    * @constructor
    * @property {ActionModel} action Instance of ActionModel
    */
    [className]Manager = function(){
        this.basePath = "[path]/";
        this.action = ActionModel.getInstance();
    };

    /** initialize events */
    [className]Manager.prototype.init = function(){
    };
})();