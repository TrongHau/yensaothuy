var stFilter = window.stFilter || {};
(function($){
	stFilter = {
		init: function(){
			this.ajaxClickInputFilter();
			this.loadView();
			this.changeView();
		},
		ajaxClickInputFilter: function(){

			$(document).on('click','.content_sortPagiBar.pagiFilter li a', function(e){
				e.preventDefault();
				stFilter.ajaxRenderHTML($(this).attr('href'))
			});
			$(document).on('click','#left_column .block .title_block', function(e){
				$(this).parents('.left-module').siblings().find('.block_content').slideUp();
				$(this).next().slideToggle();
			})
		},
		ajaxGetFilterQuery: function(){
			var _query = '', _price = '', _vendor = '', _id = '';
			_id = $('#coll-handle').val();
			var _str = '/search?q=filter=';
			_query = "("+_id+")";

			_price=_price.substring(0,_price.length -2);
			if(_price != ""){
				_price='('+_price+')';
				_query+='&&'+_price;
			}

			_vendor=_vendor.substring(0,_vendor.length -2);
			if(_vendor != ""){
				_vendor='('+_vendor+')';
				_query+='&&'+_vendor;
			}
			_str += encodeURIComponent(_query);
			return _str;
		},
		ajaxRenderHTML: function(str){
			jQuery.ajax({
				url : str,
				async: false,
				success: function(data){
					jQuery("#pd_collection").html(data);
				}
			});
			if(sessionStorage.page_view == 'view_grid' ){
				$('.filter').removeClass('view_list').addClass('view_grid');
			}else{
				$('.filter').removeClass('view_grid').addClass('view_list');
			}
			replaceImageLoop();
			scrollReplaceRegExpImg();
		},
		changeView: function(){
			$(document).on('click','.view-product-list .display-product-option li', function(){
				$('#pd_collection').hide();
				$('.view-product-list .display-product-option li').removeClass('selected');
				$(this).addClass('selected');
				sessionStorage.page_view = $(this).data('view');
				if(sessionStorage.page_view.indexOf('view_grid') != -1 ){
					$('.filter').removeClass('view_list').addClass('view_grid');
				}else{
					$('.filter').removeClass('view_grid').addClass('view_list');
				}
				setTimeout(function(){
					$('#pd_collection').fadeIn(300);
				},500)
			})
		},
		loadView: function(){
			$('.view-product-list .display-product-option li').removeClass('selected');
			if(sessionStorage.page_view == 'undefined' || sessionStorage.page_view == null){
				sessionStorage.page_view = 'view_grid';
			}
			if(sessionStorage.page_view == 'view_grid' ){
				$('.filter').removeClass('view_list').addClass('view_grid');
				$('.view-product-list .display-product-option li.view-as-grid').addClass('selected');
			}else{
				$('.filter').removeClass('view_grid').addClass('view_list');
				$('.view-product-list .display-product-option li.view-as-list').addClass('selected');
			}
		}
	}
	$(document).ready(function() {
		stFilter.init()
	});
})(jQuery)