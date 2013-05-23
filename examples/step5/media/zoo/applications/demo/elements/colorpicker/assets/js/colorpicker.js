/* Copyright (C) ZOOlanders.com - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only */
(function($){

    var Plugin = function(){};

    $.extend(Plugin.prototype, {

        name: 'EditElementColorPicker',

        initialize: function(element, options){
			var $this = this;

			this.options = $.extend({
				
			}, options);
			
			$this.apply(element.find("input"));
        },
		apply: function (inputs) {
			var op = this.options;
			inputs.each( function() {
				var selector = $(this).next("div.colorSelector"),
					input = $(this);
				
				( $(this).data("initialized-colorpicker") || (selector.ColorPicker({
					color: op.color,
					onShow: function (colpkr) {
						$(colpkr).fadeIn(500);
						return false;
					},
					onHide: function (colpkr) {
						$(colpkr).fadeOut(500);
						return false;
					},
					onChange: function (hsb, hex, rgb) {
						input.val('#' + hex);
						selector.find('div').css('backgroundColor', '#' + hex);
					},
					onSubmit: function(hsb, hex, rgb, el) {
						$(el).prev().val(hex);
						$(el).ColorPickerHide();
					}
				}),
				
				$(this).bind('keyup', function(){
					selector.find('div').css('backgroundColor', input.val());
					selector.ColorPickerSetColor( input.val() );
				}).trigger('keyup')
				
				, $(this).data("initialized-colorpicker", !0)) );
			});
		}

    });

	$.fn[Plugin.prototype.name] = function() {

		var args   = arguments;
		var method = args[0] ? args[0] : null;

		return this.each(function() {
			var element = $(this);

			if (Plugin.prototype[method] && element.data(Plugin.prototype.name) && method != 'initialize') {
				element.data(Plugin.prototype.name)[method].apply(element.data(Plugin.prototype.name), Array.prototype.slice.call(args, 1));
			} else if (!method || $.isPlainObject(method)) {
				var plugin = new Plugin();

				if (Plugin.prototype['initialize']) {
					plugin.initialize.apply(plugin, $.merge([element], args));
				}

				element.data(Plugin.prototype.name, plugin);
			} else {
				$.error('Method ' +  method + ' does not exist on jQuery.' + Plugin.name);
			}

		});
	};

})(jQuery);