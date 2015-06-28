/*global ActionModel */
var LoginManager;
(function(){
    /**
    * @class LoginManager
    * @constructor
    * @property {String} [baseName = "login"] base name of the interface associated with
    * @property {ActionModel} action Instance of ActionModel
    * @description  Manage login
    */
    LoginManager = function LoginManager(){
        extendSingleton(LoginManager);
        this.basePath = "login/";
        this.action = ActionModel.getInstance();
        this.manager = ManagerModel.getInstance();
        this.isAvailable = true;
    };

    LoginManager.getInstance = function(){
        return getSingleton(LoginManager);
    };

    LoginManager.prototype.connect = function(element, event) {
        var that = this;
        event.preventDefault();
        if(!this.isAvailable){
            return false;
        }
        this.isAvailable = false;
        this.action.sendData(this.basePath+'connect', $(element).serialize(), checkResult);

        function checkResult(data){
            if(data.success){
                window.location.href = that.action.action.basePath;
            } else {
                console.log(data.error);
            }
        }
    };

})();