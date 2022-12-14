<!-- header : s -->
<header>
	<a class="btn_back" href="javascript:history.go(-1)"><img class="w_100" src="/images/head_btn_back.png" alt="뒤로가기"></a>
	<? if($result->type=='0'){
		switch ($this->nationcode)
			 {
				 case 'us':
					$result->content = $result->contents_us;
					 break;
					 case 'kr':
							$result->content = $result->contents_kr;
						 break;
						 case 'bd':
						$result->content = $result->contents_bd;
							break;
			}

		?>
		<h1><?=lang("lang_join_00077","개인정보 취급방침")?></h1>
		<? } else if($result->type=='1'){

			switch ($this->nationcode)
				 {
					 case 'us':
						$result->content = $result->contents_us;
						 break;
						 case 'kr':
								$result->content = $result->contents_kr;
							 break;
							 case 'bd':
							$result->content = $result->contents_bd;
								break;
				}

			?>
			<h1><?=lang("lang_join_00076","서비스 이용약관")?></h1>
	<? } else if($result->type=='4'){

		switch ($this->nationcode)
			 {
				 case 'us':
					$result->content = $result->contents_us;
					 break;
					 case 'kr':
							$result->content = $result->contents_kr;
						 break;
						 case 'bd':
						$result->content = $result->contents_bd;
							break;
			}

		?>
		<h1><?=lang("lang_join_00080","위치기반 서비스 이용약관")?></h1>
	<? } ?>

</header>
<!-- header : e -->
<style>
.terms {margin: 30px 0;}
.terms span{color:inherit;font-size: inherit}
.terms a{color:inherit;font-size: inherit}
.terms h1{color:inherit;font-family: inherit; font-weight: inherit;}
.terms h2, .terms h3, .terms h4, .terms h5, .terms h6{color:inherit;font-family: inherit; font-weight: inherit;}
.terms body, .terms div, .terms dl, .terms dt, .terms dd, .terms ul, .terms ol, .terms li, .terms h1, .terms h2, .terms h3, .terms h4, .terms h5, .terms h6, .terms pre, .terms code,
.terms form, .terms fieldset, .terms legend, .terms textarea, .terms p, .terms blockquote, .terms th, .terms td, .terms input, .terms select, .terms textarea, .terms button{padding:revert;}
.terms dl, .terms ul, .terms ol, .terms menu, .terms li{list-style: revert;}
.table-bordered > thead > tr > th, .table-bordered > tbody > tr > th, .table-bordered > tfoot > tr > th, .table-bordered > thead > tr > td, .table-bordered > tbody > tr > td, .table-bordered > tfoot > tr > td{border:1px solid #ddd; vertical-align: middle;}
.terms .table > thead > tr > th, .terms .table > tbody > tr > th,
.terms .table > tfoot > tr > th, .terms .table > thead > tr > td, .terms .table > tbody > tr > td, .terms .table > tfoot > tr > td{padding: 8px 12px;line-height: 1.5;}
.terms iframe, .terms img{max-width: 100%}
</style>
<div class="body">
	<div class="md_container">
	  <div class="inner_wrap terms">
	    <?=$result->content ?>
		</div>
	</div>
</div>
<!-- modal : e -->
