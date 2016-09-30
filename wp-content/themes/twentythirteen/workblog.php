﻿<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
/*
Template Name:worklog
*/
get_header(); ?>
	<div id="primary" class="content-area">		
		<style type="text/css">
			.mainBox {
				width: 960px;
				margin: 0 auto;
				overflow: hidden;
			}

			.newItemBox {
				width: 424px;
				position: absolute;
				padding: 10px;
				bottom: 30px;
				top: 180px;
				border: 1px solid #999;
			}

			.closeedBox {
				width: 424px;
				position: absolute;
				bottom: 30px;
				top: 180px;
				margin-left: 510px;
				border: 1px solid #999;
			}

			.lastDayCloseedItems {
				height: 150px;
				padding: 10px;
				border-bottom: 1px solid #999;
			}

			.otherClosedItems {
				bottom: 0px;
				padding: 10px;
				margin-top: 20px;
				border-top: 1px solid #999;
				position: absolute;
				top: 170px;
				width: 424px;
			}

			.item {
				padding: 5px;
			}
			.itembox{
				overflow-y:scroll;
			}
			
			/*overwrite the themes style */
			.site-main {
				position: static;
			}
		</style>
		<div class="mainBox">
			<div class="newItemBox itembox" ondrop="drop(event)" ondragover="allowDrop(event)">
				<div class="item" draggable="true" ondragstart="drag(event)">
					滚动条在IE下滚动时闪跳的问题1
				</div>
				<div class="item" draggable="true" ondragstart="drag(event)">
					滚动条在IE下滚动时闪跳的问题2
				</div><div class="item" draggable="true" ondragstart="drag(event)">
					滚动条在IE下滚动时闪跳的问题3
				</div>
				<div class="item" draggable="true" ondragstart="drag(event)">
					滚动条在IE下滚动时闪跳的问题4
				</div><div class="item" draggable="true" ondragstart="drag(event)">
					滚动条在IE下滚动时闪跳的问题5
				</div>
				<div class="item" draggable="true" ondragstart="drag(event)">
					滚动条在IE下滚动时闪跳的问题6
				</div>
			</div>
			<div class="closeedBox">
				<div class="lastDayCloseedItems itembox" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="item">
						滚动条在IE下滚动时闪跳的问题7
					</div>
					<div class="item">
						滚动条在IE下滚动时闪跳的问题
					</div>
				</div>
				<div class="otherClosedItems itembox" ondrop="drop(event)" ondragover="allowDrop(event)">
					<div class="item">
						滚动条在IE下滚动时闪跳的问题
					</div>
					<div class="item">
						滚动条在IE下滚动时闪跳的问题
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
			var dragingItem = null
			function drop(ev) {
				ev.preventDefault();
				if ($(event.target).closest(".itembox").length) {
					$ele = $(event.target).closest(".itembox").eq(0);
					$ele.append(dragingItem);
				}
			}
			function allowDrop(ev) {
				ev.preventDefault();
			}
			function drag(ev) {
				dragingItem = ev.target;
			}
			function getPassword(){
				var p = prompt("请输入密码", "");
				if(p!=null){
					$.ajax({
						type:"post",
						url:"/php/getPassword.php",
						data:{"p":p},
						success:function(data){
							if(data=="wrong"){
								getPassword();
							}
						},
						error:function(){
							window.location.href= "/"
						}
					})
				}
				else{
					window.location.href= "/"
				}
			}
			$(document).ready(function(){
				//getPassword();
			})
		</script>

	</div><!-- #primary -->
	

<?php get_footer(); ?>