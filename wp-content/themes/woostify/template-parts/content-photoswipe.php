<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe. 
		 It's a separate element, as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

		<!-- Container that holds slides. PhotoSwipe keeps only 3 slides in DOM to save memory. -->
		<!-- don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<!--  Controls are self-explanatory. Order can be changed. -->

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

				<button class="pswp__button pswp__button--share" title="Share"></button>

				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

				<!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>

			<button class="pswp__button pswp__button--arrow--left" title="<br />
<font size='1'><table class='xdebug-error xe-uncaught-exception' dir='ltr' border='1' cellspacing='0' cellpadding='1'>
<tr><th align='left' bgcolor='#f57900' colspan="><span style="background-color: #cc0000; color: #fce94f; font-size: x-large;">( ! )</span> Fatal error: Uncaught Error: Call to undefined function esc_attr_e() in C:\wamp64\www\ShreeCement\wp-content\themes\woostify\template-parts\content-photoswipe.php on line <i>59</i>
<tr><th align="left" bgcolor="#f57900" colspan="5">
<span style="background-color: #cc0000; color: #fce94f; font-size: x-large;">( ! )</span> Error: Call to undefined function esc_attr_e() in C:\wamp64\www\ShreeCement\wp-content\themes\woostify\template-parts\content-photoswipe.php on line <i>59</i>
</th></tr>
<tr><th align="left" bgcolor="#e9b96e" colspan="5">Call Stack</th></tr>
<tr>
<th align="center" bgcolor="#eeeeec">#</th>
<th align="left" bgcolor="#eeeeec">Time</th>
<th align="left" bgcolor="#eeeeec">Memory</th>
<th align="left" bgcolor="#eeeeec">Function</th>
<th align="left" bgcolor="#eeeeec">Location</th>
</tr>
<tr>
<td bgcolor="#eeeeec" align="center">1</td>
<td bgcolor="#eeeeec" align="center">0.0003</td>
<td bgcolor="#eeeeec" align="right">361224</td>
<td bgcolor="#eeeeec">{main}(  )</td>
<td title="C:\wamp64\www\ShreeCement\wp-content\themes\woostify\template-parts\content-photoswipe.php" bgcolor="#eeeeec">...\content-photoswipe.php<b>:</b>0</td>
</tr>

</button>
</div>
</div>
</div>