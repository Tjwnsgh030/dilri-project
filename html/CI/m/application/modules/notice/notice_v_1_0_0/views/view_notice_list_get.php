
<?php
$display =(count($result_list)<1)? "block":"none";

if(!empty($result_list)){
	foreach($result_list as $row){

		switch ($this->nationcode)
		 {
			case 'us':
					$row->title = $row->title_us;
				break;
				case 'kr':
						$row->title = $row->title_kr;
					break;
					case 'bd':
						$row->title = $row->title_bd;
						break;
		}
?>
	<li>
		<p class="title">
			<a href="/<?=$this->nationcode.'/'.mapping('notice')?>/notice_detail?notice_idx=<?=$row->notice_idx?>">
				<?=$row->title?>
			</a>
			<span class="date"><?=$this->global_function->dateYmdHyphen($row->ins_date)?></span>
		</p>
	</li>
<?php
		}
	}
?>


<script type="text/javascript">
	$(document).ready(function(){
		$("#total_block").val('<?=$total_block ?>');
	});

	$("#no_data").css("display","<?=$display?>");

</script>
