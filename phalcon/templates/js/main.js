/*global [className]Manager, LoginHelper */

var [name]Manager;
(function(){
    "use strict";
    /** on document ready */
    $(document).ready(init);

    /**
     * init helpers / main class
     */
    function (){
        new JsHelper([LoginHelper, window["AdminHelper"]]);
        [name]Manager = new [className]Manager();
    }
    
})();