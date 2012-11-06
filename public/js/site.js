if (typeof log == 'undefined') log = function(msg) { if (console && console.log) console.log(msg); }

var Class = Backbone.View.extend({
	
	initialize: function(el) {
		this.setElement(el);
		this.render();
		this.listen();
	},
	
	listen: function() {
		/* Should be overridden */
	},
	
	beginLoading: function($el) {
		$el = $el ? $el : this.$el;
		$el.append('<div class="loading"></div>');
	},
	
	endLoading: function() {
		this.$('.loading').remove();
	}
});

var Site = Site || {};