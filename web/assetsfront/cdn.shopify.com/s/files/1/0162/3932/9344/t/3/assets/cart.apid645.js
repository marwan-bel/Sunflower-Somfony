/* override functions api.jquery.js */
Shopify.onItemAdded = function(line_item) {
  Shopify.getCart();
};

Shopify.onCartUpdate = function(cart) {
  Shopify.cartUpdateInfo(cart, '.single-cart-item-area');
};

Shopify.onError = function(XMLHttpRequest, textStatus) {
  var data = eval('(' + XMLHttpRequest.responseText + ')');
  if (!!data.message) {
    var str = data.description;
  } else {
   	var str = 'Error : ' + Shopify.fullMessagesFromErrors(data).join('; ') + '.';
  }
  jQuery('.error_message').text(str);
  jQuery('#modalAddToCartError').modal("toggle");
  setTimeout(function () {
  	jQuery('.shopping__cart').removeClass("shopping__cart__on");
    jQuery('.body__overlay').removeClass("is-visible");
  },2000);
}

Shopify.addItem = function(variant_id, quantity, callback) {
  var quantity = quantity || 1;
  var params = {
    type: 'POST',
    url: '/cart/add.js',
    data: 'quantity=' + quantity + '&id=' + variant_id,
    dataType: 'json',
    success: function(line_item) {
      if ((typeof callback) === 'function') {
        callback(line_item);
      }
      else {
        Shopify.cartPopap(variant_id);
        Shopify.onItemAdded(line_item);
      }
    },
    error: function(XMLHttpRequest, textStatus) {
      Shopify.onError(XMLHttpRequest, textStatus);
    }
  };
  jQuery.ajax(params);
};

Shopify.addItemFromForm = function(form_id, variant_id,callback) {
    var params = {
      type: 'POST',
      url: '/cart/add.js',
      beforeSend: function(){
        if(form_id == "add-item-qv") {
          jQuery('#' + form_id).find(".addtocartqv").html(jQuery(".quickViewModal_info .button_wait").html());
        }
      },
      data: jQuery('#' + form_id).serialize(),
      dataType: 'json',
      success: function(line_item) {
        if ((typeof callback) === 'function') {
          callback(line_item);
        }
        else {
          if(form_id != "add-item-qv") {
            Shopify.cartPopapForm(variant_id);
          } else {
          	jQuery('#' + form_id).find(".addtocartqv").html(jQuery(".quickViewModal_info .button_added").html());
            jQuery('#' + form_id).find(".addtocartqv").addClass("added_in_cart");
            setTimeout(function(){
              	jQuery('#' + form_id).find(".addtocartqv").removeClass("added_in_cart");
            	jQuery('#' + form_id).find(".addtocartqv").html(jQuery(".quickViewModal_info .button").html());
            }, 2000);
          }
          Shopify.onItemAdded(line_item);
        }
      },
      error: function(XMLHttpRequest, textStatus) {
        if(form_id != "add-item-qv") {
          Shopify.onError(XMLHttpRequest, textStatus);
        } else {
          jQuery('#' + form_id).find(".addtocartqv").html(jQuery(".quickViewModal_info .button_error").html());
          jQuery('#' + form_id).find(".addtocartqv").addClass("error_in_cart");
          setTimeout(function(){
            jQuery('#' + form_id).find(".addtocartqv").removeClass("error_in_cart");
            jQuery('#' + form_id).find(".addtocartqv").html(jQuery(".quickViewModal_info .button").html());
          }, 2000);
        }
        Shopify.onItemAdded(line_item);
      }
    };
    jQuery.ajax(params);
};

/* user functions */

Shopify.addItemFromFormStart = function(form, product_id) {
  Shopify.addItemFromForm(form, product_id);
}

Shopify.cartPopap = function(variant_id) {
  	var title = jQuery('.'+variant_id+':first .product_title').text();
  	jQuery('.productmsg').text('');
  	jQuery('#modalAddToCart').modal("toggle");
}
Shopify.cartPopapForm = function(variant_id) {
  	var title = jQuery('.product-info__title:first h2').text();
	jQuery('.productmsg').text('');
	jQuery('#modalAddToCart').modal("toggle");
}

Shopify.cartUpdateInfo = function(cart, cart_cell_id) {
  var formatMoney = "<span class='money'>${{amount}}</span>";
  if ((typeof cart_cell_id) === 'string') {
    var cart_cell = jQuery(cart_cell_id);
    if (cart_cell.length) {

      cart_cell.empty();

      jQuery.each(cart, function(key, value) {
        if (key === 'items') {
			
          if (value.length) {
            jQuery(".cart-item-wrapper").css({"display": "block"});
            jQuery(".cart-empty-title").css({"display": "none"});
            
            var table = jQuery(cart_cell_id);
            jQuery.each(value, function(i, item) {
              if(i > 19){
                  return false;
              }
              jQuery('<div class="single-cart-item"><div class="cart-img"><a href="' + item.url + '"><img src="' + item.image + '" alt=""></a></div><div class="cart-text-btn"><div class="cart-text"><h5><a href="' + item.url + '">' + item.title + '</a></h5><span class="cart-qty">×' + item.quantity + '</span>  <span class="cart-price">' + Shopify.formatMoney(item.price, formatMoney) + '</span></div><div class="remove-item" id="remove-item"><a href="javascript:void(0);" onclick="Shopify.removeItem(' + item.variant_id + ')"><i class="fa fa-close"></i></a></div></div></div>').appendTo(table);
            });
          }
          else {
            jQuery(".cart-item-wrapper").css({"display": "none"});
			jQuery(".cart-empty-title").css({"display": "block"});
          }
        }
      });
    }
  }

  changeHtmlValue(".shopping-cart__total", Shopify.formatMoney(cart.total_price, formatMoney));
  changeHtmlValue(".bigcounter", cart.item_count);

  jQuery('.currency .active').trigger('click');
}

//Utils
function changeHtmlValue (cell, value) {
  var $cartLinkText = jQuery(cell);
  $cartLinkText.html(value);
};