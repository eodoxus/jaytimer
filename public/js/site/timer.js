Site.Timer = Class.extend({
	
	DEFAULT_START_HOUR: 6,
	
	listen: function() {
		this.$('.bubble').on('click', this.toggleBubble.bind(this));
	},
	
	toggleBubble: function(e) {
		var bubble = $(e.currentTarget);
		if (bubble.hasClass('filled')) {
			bubble.removeClass('filled');
		} else {
			bubble.addClass('filled');
		}
	},
	
	getStartHour: function() {
		if ((start = $.cookie('start-hour'))) {
			return start;
		}
		return this.DEFAULT_START_HOUR;
	},
	
	render: function() {
		var now = new Date();
		this.$('header .start-hour').val(this.getStartHour());
		this.$('header .date').text(now.format("dddd mmmm d"));
		this.$('header .time').text(now.format("HH:MM:ss"));
		
		var cur = parseInt(this.getStartHour());
		var first = false;
		this.$('th').each(function(iDx) {
			var $th = $(this);
			
			if ($th.hasClass('info')) return;
			
			if ( ! first) {
				$th.find('.start.hour').text(cur);
				first = true;
			}
			$th.find('.end.hour').text(++cur);
		});
		
		var curHour = now.format("HH");
		if (curHour[0] == '0') curHour = curHour.substr(1);
		cur = parseInt(curHour) - parseInt(this.getStartHour());
		$(this.$('th').get(cur)).addClass('current');
		this.$('tr').each(function() {
			$($(this).find('td').get(cur)).addClass('current');
		});
	}
});
