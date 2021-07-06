/*
 ====================================
 [ JQUERY TABLE CONTENT ]
 ------------------------------------
 1.0 - Core
 2.0 - Modal
 3.0 - Cell
 4.0 - Flash
 5.0 - SmartCrumbs
 6.0 - Validate
 -------------------------------------
 [ END JQUERY TABLE CONTENT ]
 =====================================
 */
 var AppJS = (function ($) {
    "use strict";
    
    /************************
     * 1.0 - Core
     ************************/
    
    // BaseURL
    var baseURL = "/";
    var setBaseURL = function(url){
        this.baseURL = baseURL = url;
    };
    
    // CsrfToken
    var csrfToken = "";
    var setCsrfToken = function(csrfToken){
        this.csrfToken = csrfToken;
        $.ajaxSetup({
            headers : {'X-CSRF-Token': csrfToken}
        });
    };
    
    // iniCore
    var iniCore = function(){
        // Tooltip
        if ($.fn.tooltip) {
            $('[data-toggle="tooltip"]').tooltip();
        }
        // PopOver
        if ($.fn.popover) {
            $('[data-toggle="popover"]').popover();
        }
        // Ajax Links
        $("a[data-ajax-link], button[data-ajax-link], span[data-ajax-link]").on('click', function(e){
            e.preventDefault();
            
            $.ajax({
                type: ($(this).data('ajax-type')) ? $(this).data('ajax-type') : "GET",
                url: $(this).data('ajax-link'),
                data: ($(this).data('ajax-data')) ? $(this).data('ajax-data') : {},
                dataType: 'html',
                beforeSend: function() {
                    // Boxloader
                    //$(event.target).boxloader({show:true});
                },
                success: function(data) {
                    // Fix probar dataType:jsonp o similar
                    data = JSON.parse(data);
                    // Flash Message
                    if (data.flashMessages) {
                        AppJS.flash.ajax(data.flashMessages);
                        if (data.success) {
                            $('table.tablesorter[data-ajax-reload]').trigger('ajaxReload');
                        }
                    }
                }
            });
        });
        
        // Booststrap Toggle
        if ($.fn.bootstrapToggle) {
            $('input[type=checkbox][data-toggle]').bootstrapToggle();
        };
        
        // CheckAll
        $('th.checkAll input:checkbox').on('ifToggled', function(e){
            var table = $(e.target).closest('table');
            var filterSelector = ($(this).data('filtered')) ? 'tr:not(.filtered) ' : '' ;
            
            $(filterSelector + 'td.checkRow input:checkbox', table).prop('checked', this.checked);
            $('span.checkAllChecked', table).html((this.checked) ? $('td.checkRow input:checkbox', table).length : 0);
            // Comprobamos y Actualizamos iCheck
            if ($.fn.iCheck) {
                $("input.iCheck", table).iCheck('update');
            }
        });

        // CheckRow
        $('td.checkRow input:checkbox').on('ifToggled', function(e){
            var table = $(e.target).closest('table');
            var filterSelector = ($('th.checkAll input:checkbox', table).data('filtered')) ? 'tr:not(.filtered) ' : '' ;
            var total = $(filterSelector+'td.checkRow input:checkbox', table).length;
            var checked = $(filterSelector+'td.checkRow input:checkbox:checked', table).length;
            
            $('th.checkAll input:checkbox', table).prop('checked', total===checked);
            $('span.checkAllChecked', table).html(checked);
            // Comprobamos y Actualizamos iCheck
            if ($.fn.iCheck) {
                $("input.iCheck", table).iCheck('update');
            }
        });
        
        // BoxLoader
        $("form[data-boxloader]:not([data-modal-submit])").on("submit", function(e){
            e.preventDefault();
            if ($(this).data('validate')!==true || $(this).valid()) {
                //$(this).boxloader();
                $(this).pluginBound('boxloader');
                if ($(this).data('ajax-submit')) {
                } else {
                    $(this).off('submit').submit();
                }
            }
        });
        
        // PluginBound
        jQuery.fn.pluginBound = function (plugin, options) {
            // Pseudo Singleton
            if (!$(this).data('pluginbound-'+plugin)) {
                $(this).data('pluginbound-'+plugin, true);
                $(this)[plugin]($.extend({}, options || {}));
            }
            return this;
        };
        
        
        // BoxLoader
        jQuery.fn.boxloader = function (options) {
            
            var jOptions = $.extend({show: true}, options || {});
            if (jOptions.show===true) {
                $(this).closest('div.box, div.tab-pane, div.nav-tabs-custom').append('<div class="overlay"><i class="fa fa-refresh fa-spin"></i></div>');
            } else {
                $(this).closest('div.box, div.tab-pane, div.nav-tabs-custom').find('div.overlay').remove();
            }
            return this;
        };
        
        // Cargador de Scripts
        jQuery.cachedScript = function (url, options) {
            // Allow user to set any option except for dataType, cache, and url
            options = $.extend(options || {}, {
                dataType: "script",
                cache: true,
                url: url
            });
            // Use $.ajax() since it is more flexible than $.getScript
            // Return the jqXHR object so we can chain callbacks
            return jQuery.ajax(options);
        };
        
        // LoadScript
        jQuery.loadScript = function (url, callback) {
        
            // Antes de E6
            var list = document.getElementsByTagName('script');
            var i = list.length, flag = false;
            while (i--) {
                if (list[i].src === url) {
                    flag = true;
                    break;
                }
            }
            if (!flag) {
                loadScriptTag(url, callback);
            } else if (callback instanceof Function){
                callback();
            }
        
            /*
            // ES 6
            let scripts = Array
                .from(document.querySelectorAll('script'))
                .map(scr => scr.src);
            if (!scripts.includes(url)) {
                loadScriptTag(url, callback);
            } else if (callback !== null){
                callback();
            }
            */
           
            function loadScriptTag(url, callback){
                var tag = document.createElement('script');
                tag.src = url;
                
                if (callback instanceof Function){
                    if (tag.readyState) { // IE, incl. IE9
                        tag.onreadystatechange = function() {
                            if (tag.readyState === "loaded" || tag.readyState === "complete") {
                                tag.onreadystatechange = null;
                                callback();
                            }
                        };
                    } else {
                        tag.onload = function() { // Other browsers
                            callback();
                        };
                    }
                } 
                
                document.getElementsByTagName('body')[0].appendChild(tag);
           };
           
        }
               
    };
    
    
    /************************
     * 2.0 - Modal
     ************************/
    
    // iniModal
    var iniModal = function() {
        $('body')
            // Enlaces y Botones
            .on('click.modal', 'a[data-modal], button[data-modal], span[data-modal]', function(e){
                e.preventDefault();
                var $modalHandler = $(this);
                // Comprobamos backdrop
                if ($modalHandler.data('backdrop')) {
                    var options = {show:true, backdrop: $modalHandler.data('backdrop'), keyboard:false};
                } else {
                    var options = {show:true};
                }
                loadModal($(this).data('modal'), options);
            })
            // Modal Submit
            .on('submit.modal', "form[data-modal-submit]",function(e){
                e.preventDefault();
                if ($(this).data('validate')!==true || $(this).valid()) {

                    // Comprobamos Boxloader
                    var self = this;                
                    if($(self).data('boxloader')) {
                        //$(self).pluginBound('boxloader');
                        $(self).boxloader();
                    }

                    $("#myModal").load($(this).attr('action'), $(this).serialize(), function(){
                        iniCore();
                        //iniValidate();
                        if ((typeof modalCallback !=='undefined' && $.isFunction(modalCallback))) {
                            modalCallback($(this));
                        }
                        $(this).modal({show:true});
                        // Comprobamos Boxloader
                        if ($(self).data('boxloader')) {
                            $(self).boxloader({show:false});
                        }
                        //https://github.com/dangrossman/bootstrap-daterangepicker/issues/156
                        $.fn.modal.Constructor.prototype.enforceFocus = function () {};
                    });
                }
            });
    };  
    
    // AutoFocus
    $("#myModal").on('shown.bs.modal', function () {
        $(this).find('input:text:visible:enabled:not(.no-focus) ,input:radio:visible:enabled:not(.no-focus), input:checkbox:visible:enabled:not(.no-focus), select:visible:enabled:not(.no-focus), textarea:visible:enabled:not(.no-focus)').first().focus();
    });
       
    // loadModal()
    var loadModal = function(url, options, callback){
        var mOptions = $.extend({}, options);
        $("#myModal").load(url, function(response, status, xhr){
            
            switch (xhr.status) {
                case 500:   // Server Error
                    loadModal(baseURL + "app/error/modal500", {show:true});
                    break;
                    
                case 400:
                case 401:   // Unauthorized
                case 404:   //Not Found
                    loadModal(baseURL + "app/error/modal400", {show:true});
                    break;
                    
                default:
                    iniCore();
                    //iniValidate();
                    if ((typeof modalCallback !=='undefined' && $.isFunction(modalCallback))) {
                        modalCallback($(this));
                    }
                    if ((typeof callback !=='undefined' && $.isFunction(callback))) {
                        callback($(this));
                    }
                    $(this).modal(mOptions);
                    //https://github.com/dangrossman/bootstrap-daterangepicker/issues/156
                    $.fn.modal.Constructor.prototype.enforceFocus = function () {};
                    break;
            }
            
        });
    };
    
    
    /************************
     * 4.0 - Flash
     ************************/
    
    // Flash
    var flash = (function(){
        
        /**
         * Renderiza un Flash Message
         * @param {type} messages
         * @param {String} alertClass
         * @param {String} iconClass
         * @returns {String}
         */
        var _render = function(messages, alertClass, iconClass){
            
            var _innerHTML = '';
            var _messages = [];
            if (typeof messages === 'string') {
                _messages[0]=messages;
            }
            if (Array.isArray(messages)) {
                _messages = messages;
            }
            
            for (var i = 0; i < _messages.length; i++) {
                _innerHTML+= '<p><i class="'+iconClass+'"></i> '+_messages[i]+'</p>';
            } 
            
            var _template = '<!-- JS Flash -->';
            _template+= '<div class="alert '+alertClass+' alert-dismissible" role="alert">';
            _template+= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
            _template+= _innerHTML;
            _template+= '</div>';
            
            return _template;  
        }; 

        // Error Messages
        var ajax = function(messages) {
            $("#mainContent").prepend(messages);
        };
        var error = function(messages, elementId) {
            elementId = (!elementId) ? 'mainContent' : elementId;
            $("#"+elementId).prepend(_render(messages, 'alert-danger', 'fa fa-warning'));
        };
        // Info Messages
        var info = function(messages, elementId) {
            elementId = (!elementId) ? 'mainContent' : elementId;
            $("#"+elementId).prepend(_render(messages, 'alert-info', 'fa fa-info-circle'));
        };
        // Success Messages
        var success = function(messages, elementId) {
            elementId = (!elementId) ? 'mainContent' : elementId;
            $("#"+elementId).prepend(_render(messages, 'alert-success', 'fa fa-check'));
        };
        // Warning Messages
        var warning = function(messages, elementId) {
            elementId = (!elementId) ? 'mainContent' : elementId;
            $("#"+elementId).prepend(_render(messages, 'alert-warning', 'fa fa-warning'));
        };
                
        // Expose Public Methods
        return {
            ajax: ajax,
            error: error,
            info: info,
            success: success,
            warning: warning
        };

    })();
    
    
    
    // Expose Public Methods
    return {
        iniCore: iniCore,
        iniModal: iniModal,
        loadModal: loadModal,  
        flash: flash,
        // BaseURL
        baseURL: baseURL,
        setBaseURL: setBaseURL,
        // CsrfToken
        csrfToken: csrfToken,
        setCsrfToken: setCsrfToken,
    };

})(jQuery);

AppJS.iniCore();
AppJS.iniModal();
//AppJS.iniValidate();