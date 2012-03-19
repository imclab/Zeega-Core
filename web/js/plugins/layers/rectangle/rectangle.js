/************************************

	Rectangle LAYER CHILD CLASS
	
	
	TODO:
		
		Features: 
			-fullscreen bleed?

************************************/
(function(Layer){

	Layer.Rectangle = Layer.Model.extend({

		layerType : 'Rectangle',
		
		defaultAttributes : {
			'title' : 'Color Layer',
			'url' : null,
			'backgroundColor': '#ff00ff',
			'left' : 0,
			'top' : 0,
			'height' : 100,
			'width' : 100,
			'opacity':.75,
		},

		init : function(){
			console.log('RECTANGLE INIT')
		},

		preload : function( target )
		{
			
		},
	
		play : function( z )
		{
			
		},

		stash : function()
		{
			this.display.css({'top':"-1000%",'left':"-1000%"});
		}
	
		
	});
	
	Layer.Views.Controls.Rectangle = Layer.Views.Controls.extend({
		
		render : function()
		{
			var color = new Layer.Views.Lib.ColorPicker({
				property : 'backgroundColor',
				color : this.attr.backgroundColor,
				model: this.model,
				label : 'Color'
			});
			
			var widthSlider = new Layer.Views.Lib.Slider({
				property : 'width',
				model: this.model,
				label : 'Width',
				suffix : '%',
				min : 1,
				max : 200,
			});
			
			var heightSlider = new Layer.Views.Lib.Slider({
				property : 'height',
				model: this.model,
				label : 'Height',
				suffix : '%',
				min : 1,
				max : 200,
			});
			
			var opacitySlider = new Layer.Views.Lib.Slider({
				property : 'opacity',
				model: this.model,
				label : 'Opacity',
				step : 0.01,
				min : .05,
				max : 1,
			});
			
			this.controls
				.append( color.render().el )
				.append( opacitySlider.render().el )
				.append( widthSlider.render().el )
				.append( heightSlider.render().el );
			
			return this;
		
		}
		
	});

	Layer.Views.Visual.Rectangle = Layer.Views.Visual.extend({
		
		render : function()
		{
			var style = {
				'backgroundColor' : this.attr.backgroundColor,
				'height' : this.attr.height +'%'
			}

			$(this.el).css( style );
				
			return this;
		}
		
	});
	
})(zeega.module("layer"));