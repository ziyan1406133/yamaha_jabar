

<div style="width:100%;box-shadow: inset 0px -10px 40px rgba(200,200,200,0.9);">
	<table width=960px align="center" border=0 cellpadding=0 cellspacing=0>
	<tr>
		<td width=200px rowspan=2>
			<div style="padding:10px 0px 10px 0px;">
				<a href="home.html"><img src="images/logo.png"></a>
			</div>
		</td>
		<td align=right valign=bottom>			
			<div style="font-family:ralewaylight;font-size:11px;color:#2e6a97;display:inline-block;vertical-align:middle;">
				Follow Us :
			</div>
		
				<a href="https://www.facebook.com/yamahafriends/" target="_blank">
				<div style="display:inline-block;vertical-align:middle;">
					<img src="images/icon-social1.png">
				</div>
				</a>
				<a href="https://twitter.com/YamahaFriends" target="_blank">
				<div style="display:inline-block;vertical-align:middle;">
					<img src="images/icon-social2.png">
				</div>
				</a>
				<a href="https://www.youtube.com/channel/UCqB7nOwJmOkWSxCMaJ3KxPg" target="_blank">
				<div style="display:inline-block;vertical-align:middle;">
					<img src="images/icon-social3.png">
				</div>
				</a>			<div style="display:inline-block;vertical-align:middle;margin:0 0 0 20px;">				
				<form id = "searchform" method = "post" action = "http://yamaha-jatim.co.id/news">
					<table cellpadding=0 cellspacing=0>
					<tr>
						<td>
							<input type="text" name="keyword" value="" style="border:1px solid #2e6a97;width:120px;padding:4px 10px 3px 10px;font-size:11px;font-family:raleway;color:#222222;text-align:center;" placeholder="Enter Keywords">
						</td>
						<td>
							<input type="submit" name="btnsubmit" value="." style="border:1px solid #2e6a97;height:22px;width:30px;background-image:url(images/icon-search.png);background-repeat:no-repeat;background-position:center center;color:#222222;background-color:#2e6a97;color:#2e6a97;">
						</td>
					</tr>
					</table>
				</form>
			</div>
		</td>
	</tr>
	<tr>
		<td align=right valign=bottom>		
			<table cellspacing=0 cellpadding=0>
			<tr>
				<td valign=bottom style="padding:0px 0px 15px 0px;">
					<img src="images/separator.png">
				</td>
				<td valign=bottom align=center>
					<a href="{{ route('homepage') }}">
						<div class="head" 
						{{-- style="border-bottom:4px solid #2e6a97;" --}}
						>
							HOME
						</div>					
					</a>
				</td>
				<td valign=bottom style="padding:0px 0px 15px 0px;">
					<img src="images/separator.png">
				</td>
				<td valign=bottom align=center>
					<a href="company.html">
						<div class="head" >
							PROFILE
						</div>
					</a>
				</td>
				<td valign=bottom style="padding:0px 0px 15px 0px;">
					<img src="images/separator.png">
				</td>
				<td valign=bottom align=center>
					<div id='cssmenu'>
					<ul>
					   <li class='has-sub'><a href='product.html' ><span>PRODUCT</span></a>
						  <ul>
							<li><a href='product.html'><span>PRODUCT LIST</span></a></li>
							<li><a href="data/price_pdf/1.pdf" target="_blank"><span>PRICE LIST</span></a></li>							<li><a href='technology.html'><span>TECHNOLOGY</span></a></li>
						  </ul>
					   </li>
					</ul>
					</div>
				</td>
				<td valign=bottom style="padding:0px 0px 15px 0px;">
					<img src="images/separator.png">
				</td>
				<td valign=bottom align=center>
					<a href="dealer.html">
						<div class="head" >
							DEALERS NETWORK
						</div>
					</a>
				</td>
				<td valign=bottom style="padding:0px 0px 15px 0px;">
					<img src="images/separator.png">
				</td>
				<td valign=bottom align=center>
					<a href="career.html">
						<div class="head" >
							CAREER
						</div>
					</a>
				</td>
				<td valign=bottom style="padding:0px 0px 15px 0px;">
					<img src="images/separator.png">
				</td>
				<td valign=bottom align=center>
					<a href="{{ route('contact_us') }}">
						<div class="head" >
							CONTACT US
						</div>
					</a>
				</td>
				<td valign=bottom style="padding:0px 0px 15px 0px;">
					<img src="images/separator.png">
				</td>
			</tr>
			</table>
		</td>
	</tr>
	</table>
</div>