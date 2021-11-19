<!DOCTYPE html>
<!-- Open Html -->
<html <?php language_attributes(); ?>>
	<!-- Open Head -->
	<head>
		<script>
        //     window['_fs_debug'] = false;
        //     window['_fs_host'] = 'fullstory.com';
        //     window['_fs_script'] = 'edge.fullstory.com/s/fs.js';
        //     window['_fs_org'] = '16K551';
        //     window['_fs_namespace'] = 'FS';
        //     (function(m,n,e,t,l,o,g,y){
        //     if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;}
        //     g=m[e]=function(a,b,s){g.q?g.q.push([a,b,s]):g._api(a,b,s);};g.q=[];
        //     o=n.createElement(t);o.async=1;o.crossOrigin='anonymous';o.src='https://'+_fs_script;
        //     y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y);
        //     g.identify=function(i,v,s){g(l,{uid:i},s);if(v)g(l,v,s)};g.setUserVars=function(v,s){g(l,v,s)};g.event=function(i,v,s){g('event',{n:i,p:v},s)};
        //     g.anonymize=function(){g.identify(!!0)};
        //     g.shutdown=function(){g("rec",!1)};g.restart=function(){g("rec",!0)};
        //     g.log = function(a,b){g("log",[a,b])};
        //     g.consent=function(a){g("consent",!arguments.length||a)};
        //     g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)};
        //     g.clearUserCookie=function(){};
        //     g.setVars=function(n, p){g('setVars',[n,p]);};
        //     g._w={};y='XMLHttpRequest';g._w[y]=m[y];y='fetch';g._w[y]=m[y];
        //     if(m[y])m[y]=function(){return g._w[y].apply(this,arguments)};
        //     g._v="1.3.0";
        // })(window,document,window['_fs_namespace'],'script','user');
        
        window["_fs_ready"] = function () {
            let addToCartButton = document.querySelector(".button.single_add_to_cart_button.button.alt");
            if (addToCartButton) {
                addToCartButton.addEventListener("click", function(e) {
                    FS.event("CartButtonClicked", { 
                        product: document.querySelector("h1.product_title.entry-title.p-font").innerText,
                        price: document.querySelector(".price .woocommerce-Price-amount.amount > bdi").innerText
                    });
                });
            }
            
            document.querySelectorAll("td.product-remove a i").forEach(function() { 
                    this.addEventListener("click", function(e) {
                        FS.event("CartItemRemoved", {
                            orderTotal: document.querySelector(".order-total .woocommerce-Price-amount.amount > bdi").innerText
                        }); 
                });
            });
            
            // window.addEventListener('fullstory/rageclick', function(e) {
            //     alert('AAAHHH');
            //     FS.log('log', 'Rage click.');
            // });
        }
    </script>
    <?php wp_head(); ?>
	</head>
	<!-- Close Head -->
	<body <?php body_class(); ?>>

		<?php
			/**
			 * @hooked - g5plus_site_loading - 5
			 **/
			do_action('g5plus_before_page_wrapper');
		?>

		<!-- Open Wrapper -->
		<div id="wrapper">

		<?php
		/**
		 * @hooked - g5plus_page_above_header - 5
		 * @hooked - g5plus_page_top_bar - 10
		 * @hooked - g5plus_page_header - 15
		 **/
		do_action('g5plus_before_page_wrapper_content');
		?>

			<!-- Open Wrapper Content -->
			<div id="wrapper-content" class="clearfix">

			<?php
			/**
			 **/
			do_action('g5plus_main_wrapper_content_start');
			?>
