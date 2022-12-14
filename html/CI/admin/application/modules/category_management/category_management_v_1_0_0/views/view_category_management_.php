<style>
  .ui-state-highlight { height: 3em; line-height: 1.2em; }
</style>

  <!-- container-fluid : s -->
  <div class="container-fluid " style="width:100%">
    <!-- Page Heading -->
    <div class="page-header">
      <h1>Product category management</h1>
      <span style="font-size:14px; color:#333; float:right; padding-top:10px;">
      </span>
    </div>
    <form id="form_default" name="form_default" method="post">
      <!-- body : s -->
      <input type="hidden" name ="select_depth" id="select_depth" value="">
      <input type="hidden" name ="cate_type" id="cate_type" value="<?=$cate_type?>">
      <input type="hidden" name ="select_category_management_idx_1" id="select_category_management_idx_1">
      <input type="hidden" name ="select_category_management_idx_2" id="select_category_management_idx_2">
      <input type="hidden" name ="select_category_management_idx_3" id="select_category_management_idx_3">
      <input type="hidden" name ="select_category_management_idx_4" id="select_category_management_idx_4">

      <div class="bg_wh mt20">
        <div class="table-responsive">

          <div class="row category_col">
            <div class="col-md-3">
              <h4>Category 1</h4>
              <ul class="category sortable" style="height:500px">
              <?php
                $i = 0;
                foreach($first_cate_list as $row){
                $img_path = ($row->img_path)? $row->img_path :"/images/btn_del.gif";
               ?>
                <li <?php if($i==0){ echo 'class="active"'; } ?>>
                  <img src='<?=$img_path?>' style='width:15px;' id='img_<?=$row->category_management_idx?>' onClick=img_change('<?=$row->category_management_idx?>')>
                  [<?=$row->category_management_idx?>]<input type="text" id="<?=$row->category_management_idx?>" value="<?=$row->category_name?>" readonly style="width:130px" >
                  <input type="hidden" name="first_cate_list_idx[]" value="<?=$row->category_management_idx?>">
                  <span class="category_btn">
                    <?php if($row->state == 1) {?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Activation</a>
                    <?php } else { ?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Deactivation</a>
                    <?php } ?>

                    <a href="javascript:void(0)" class="btn-sm btn-default">Edit</a>
                  </span>
                </li>
                <?php
                  $i++;
                }
              ?>
              </ul>

              <h4>Category 1</h4>
              <input type="text" class="form-control add_item_val" style="width:230px" placeholder="???????????? 1??????">

               <a href="#" class="btn btn-info" onclick="category_management_reg_in(0)"> Add</a>
            </div>
            <div class="col-md-3">
              <h4>Category 2</h4>
              <ul class="category sortable" style="height:500px">
              <?php
                $i = 0;
                foreach($second_cate_list as $row){
                $img_path = ($row->img_path)? $row->img_path :"/images/btn_del.gif";
                ?>
                <li <?php if($i==0){ echo 'class="active"'; } ?>>

                  <img src='<?=$img_path?>' style='width:15px;' id='img_<?=$row->category_management_idx?>' onClick=img_change('<?=$row->category_management_idx?>')>
                  <input type="text" id="<?=$row->category_management_idx?>" value="<?=$row->category_name?>" readonly>
                  <input type="hidden" name="second_cate_list_idx[]" value="<?=$row->category_management_idx?>">
                  <input type="hidden" name="parent_category_management_idx" value="<?=$row->parent_category_management_idx?>">
                  <span class="category_btn">

                    <?php if($row->state == 1) {?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Activation</a>
                    <?php } else { ?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Deactivation</a>
                    <?php } ?>

                    <a href="javascript:void(0)" class="btn-sm btn-default">Edit</a>

                  </span>
                </li>
                <?php
                  $i++;
                }
              ?>
              </ul>
              <h4>Category 2</h4>
              <input type="text" class="form-control add_item_val" placeholder="???????????? 2??????"> <a href="#" class="btn btn-info" onclick="category_management_reg_in(1)"> Add</a>
            </div>
            <div class="col-md-3">
              <h4>Category 3</h4>
              <ul class="category sortable" style="height:500px">
              <?php
                $i = 0;
                foreach($third_cate_list as $row){ ?>
                <li <?php if($i==0){ echo 'class="active"'; } ?>>
                  <input type="text" id="<?=$row->category_management_idx?>" value="<?=$row->category_name?>" readonly>
                  <input type="hidden" name="third_cate_list_idx[]" value="<?=$row->category_management_idx?>">
                  <input type="hidden" name="parent_category_management_idx" value="<?=$row->parent_category_management_idx?>">
                  <span class="category_btn">

                    <?php if($row->state == 1) {?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Activation</a>
                    <?php } else { ?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Deactivation</a>
                    <?php } ?>

                    <a href="javascript:void(0)" class="btn-sm btn-default">Edit</a>

                  </span>
                </li>
                <?php
                  $i++;
                }
              ?>
              </ul>
              <h4>Category 3</h4>
              <input type="text" class="form-control add_item_val" placeholder="???????????? 3??????"> <a href="#" class="btn btn-info" onclick="category_management_reg_in(2)"> Add</a>
            </div>
            <div class="col-md-3">
              <h4>Category 4</h4>
              <ul class="category sortable" style="height:500px">
              <?php
                $i = 0;
                foreach($fourth_cate_list as $row){ ?>
                <li <?php if($i==0){ echo 'class="active"'; } ?>>
                  <input type="text" id="<?=$row->category_management_idx?>" value="<?=$row->category_name?>" readonly>
                  <input type="hidden" name="fourth_cate_list_idx[]" value="<?=$row->category_management_idx?>">
                  <input type="hidden" name="parent_category_management_idx" value="<?=$row->parent_category_management_idx?>">
                  <span class="category_btn">

                    <?php if($row->state == 1) {?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Activation</a>
                    <?php } else { ?>
                      <a href="javascript:void(0)" class="btn-sm btn-info">Deactivation</a>
                    <?php } ?>

                    <a href="javascript:void(0)" class="btn-sm btn-default">Edit</a>

                  </span>
                </li>
                <?php
                  $i++;
                }
              ?>
              </ul>
              <h4>Category 4</h4>
              <input type="text" class="form-control add_item_val" placeholder="???????????? 4??????"> <a href="#" class="btn btn-info" onclick="category_management_reg_in(3)"> Add</a>
            </div>
          </div>

        </div>
      </div>
    </form>
  </div>
  <!-- container-fluid : e -->
<script>

  //????????? ?????? ?????????
  $(document).on("click",".category li",function(){
    // ????????? ???????????? ??????
    $(this).siblings("li").removeClass("active");
    $(this).addClass("active");

    // ????????? ??????????????? ??????

    var category_depth = $(".category").index($(this).parent()) + 1;
    req_category_depth = category_depth +1;
    var category_management_idx = null;
    category_management_idx = $(this).find('input[type="text"]').attr('id');
    $("#select_category_management_idx_"+category_depth).val(category_management_idx);
    $("#select_depth").val(category_depth-1);

    if(category_depth > 0){

      if(category_depth == 1){
        $(".category").eq(1).html("");
        $(".category").eq(2).html("");
        $(".category").eq(3).html("");
      }else if(category_depth == 2){
        $(".category").eq(2).html("");
        $(".category").eq(3).html("");
      }else if(category_depth == 3){
        $(".category").eq(3).html("");
      }

      category_management_list(category_management_idx, category_depth,req_category_depth);
    }
  });

  //??????, ?????? ??????
  $(document).on("click",".category_btn a",function(){
    var $item = $(this).parents("li");
    var category_depth = $('.category').index($item.parent()) + 1;
    var category_management_idx = $item.find('input').attr('id');

		if($(this).hasClass("btn-danger")){ //????????????
			var result = confirm("Are you sure you want to delete it?");
			if(result){
				category_management_del(category_management_idx);
				if($item.hasClass('active')){
					if(category_depth == 1){
						$(".category").eq(1).html("");
						$(".category").eq(2).html("");
						$(".category").eq(3).html("");
					}else if(category_depth == 2){
						$(".category").eq(2).html("");
						$(".category").eq(3).html("");
          }else if(category_depth == 3){
						$(".category").eq(3).html("");
					}
				}
				$item.remove();
			}
    } else if($(this).hasClass("btn-info")){ // ????????????
      var result = confirm("Do you want to change the status?");
			if(result){
        var category_depth = $('.category').index($item.parent()) + 1;
        var state = "";
        var rt = "";

        if($(this).text()=='Activation'){
          state ='1';
          $(this).text("Deactivation");
        }else{
          state ='0';
          $(this).text("Activation");
        }
        $.ajax({
          url: "/<?=mapping('category_management')?>/category_state_up",
          type: "POST",
          dataType: "json",
          async: false,
          data: {
            category_management_idx: category_management_idx,
            category_depth: category_depth,
            state: state,

          },
          success: function(result) {
            if(result.code == '1'){
              rt ="1";
            }else{
              alert(result.msg);
              rt ="0";
            }
          },
          error: function(request,status,error){
            alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
          }
        });

        if(rt =="0"){
          if($(this).text()=='Activation'){
            $(this).text("Deactivation");
          }else{
            $(this).text("Activation");
          }
        }


			}
    } else {
      if($(this).hasClass("btn-confirm")){ //?????? ??? ????????????
				var result = confirm("Do you want to save your Edit ?");
				if(result){
					$item.find("input").attr("readonly",true)
					$(this).text("Edit").removeClass("btn-confirm");
					var category_management_idx = $item.find("input").attr('id');
					var category_name = $item.find("input").val();

					category_management_mod_up(category_management_idx, category_name);
				}
      } else { //?????? ??????
        $item.find("input").attr("readonly",false).focus();
        $(this).text("Ok").addClass("btn-confirm");
      }
    }
  });

// ???????????? ????????? ????????????
  function category_management_list(parent_category_management_idx, category_depth,req_category_depth){
    var cate_type = 	$("#cate_type").val();

    $.ajax({
  		url: "/<?=mapping('category_management')?>/category_management_list",
  		type: "post",
  		data : {parent_category_management_idx: parent_category_management_idx,category_depth: req_category_depth,cate_type: cate_type},
  		dataType: 'json',
  		async: true,
  		success: function(result){
        if(result.category_management_list){
          for(var i=0; i<result.category_management_list.length; i++){
            var category_management_idx = result.category_management_list[i].category_management_idx;
            var category_name = result.category_management_list[i].category_name;
            var parent_category_management_idx = result.category_management_list[i].parent_category_management_idx;
            var state = result.category_management_list[i].state;
            var img_path = result.category_management_list[i].img_path;
            add_item(category_management_idx, category_name, category_depth + 1, parent_category_management_idx,state,img_path);
          }
        }
  		}
  	});
  }

  // ?????? ?????? ??????
  function category_management_reg_in(order){
    var target_list = $(".category").eq(order);
    var category_name = $(".add_item_val").eq(order).val();
    var category_depth = order + 1;
    var parent_category_management_idx = $("#select_category_management_idx_"+order).val();
    var select_depth = $("#select_depth").val();
    var cate_type = 	$("#cate_type").val();

    if(category_name == ""){
      alert("Please enter a classification name");
      return;
    }

    if(category_depth != 1 && !parent_category_management_idx){
      alert("Please register after selecting the top category.");
      return;
    }

    $.ajax({
      url: "/<?=mapping('category_management')?>/category_management_reg_in",
      type: "POST",
      dataType: "json",
      async: true,
      data: {
        "category_depth": category_depth,
        "parent_category_management_idx": parent_category_management_idx,
        "cate_type": cate_type,
        "category_name": category_name
      },
      success: function(result) {
        if(result.code == 1){
          var category_management_idx = result.category_management_idx;
          add_item(category_management_idx, category_name, category_depth,'','1','');
          $(".add_item_val").eq(order).val("");
					alert("Category added successfully.");
        }else{
          alert(result.msg);
        }
      },
      error: function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }
    });
  }

// ?????? ???????????? ??????
  function category_management_del(category_management_idx){
    $.ajax({
      url: "/<?=mapping('category_management')?>/category_management_del",
      type: "POST",
      dataType: "json",
      async: true,
      data: {
        "category_management_idx": category_management_idx
      },
      success: function(result) {
        console.log(result);
      },
      error: function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }
    });
  }

// ?????? ???????????? ??????
  function category_management_mod_up(category_management_idx, category_name){
    $.ajax({
      url: "/<?=mapping('category_management')?>/category_management_mod_up",
      type: "POST",
      dataType: "json",
      async: true,
      data: {
        category_management_idx: category_management_idx,
        category_name: category_name,
      },
      success: function(result) {
        console.log(result);
      },
      error: function(request,status,error){
        alert("code:"+request.status+"\n"+"message:"+request.responseText+"\n"+"error:"+error);
      }
    });
  }



// ???????????? ???????????? ??????
  function add_item(category_management_idx, category_name, category_depth,parent_category_management_idx,state,img_path){

    var cate_list_idx="";
    var cate_img_path="";
    if(category_depth==1){
      if(img_path !=""){
        cate_img_path = "<img src='"+img_path+"' style='width:15px;' id='img_"+category_management_idx+"'  onClick=img_change('"+category_management_idx+"')>";
      }else{
        cate_img_path = "<img src='/images/btn_del.gif' style='width:15px;' id='img_"+category_management_idx+"'  onClick=img_change('"+category_management_idx+"')>";
      }
      cate_list_idx = "<input type='hidden' name='first_cate_list_idx[]' value='" + category_management_idx + "'>";
    }else  if(category_depth == 2){
      if(img_path !=""){
        cate_img_path = "<img src='"+img_path+"' style='width:15px;' id='img_"+category_management_idx+"'  onClick=img_change('"+category_management_idx+"')>";
      }else{
        cate_img_path = "<img src='/images/btn_del.gif' style='width:15px;' id='img_"+category_management_idx+"'  onClick=img_change('"+category_management_idx+"')>";
      }
      cate_list_idx = " <input type='hidden' name='second_cate_list_idx[]' value='" + category_management_idx + "'>";
    }else if(category_depth ==3){
      cate_list_idx = " <input type='hidden' name='third_cate_list_idx[]' value='" + category_management_idx + "'>";
    }else if(category_depth ==4){
      cate_list_idx = " <input type='hidden' name='fourth_cate_list_idx[]' value='" + category_management_idx + "'>";
    }

    var category_state ="";

		if( state == 0){
			category_state = "<a href='javascript:void(0)' class='btn-sm btn-info'>Deactivation</a> ";
		} else {
			category_state = "<a href='javascript:void(0)' class='btn-sm btn-info'>Activation</a> ";
		}

		var $item = $("<li>" +
									 cate_img_path +
									" ["+category_management_idx+"]<input type='text' name='name' id='" + category_management_idx + "'value='" + category_name + "' readonly style='width:130px'>" +
									cate_list_idx +
									" <input type='hidden' name='parent_category_management_idx' value='" + parent_category_management_idx + "'>" +
									" <span class='category_btn'>" +
									category_state +
									"   <a href='#' class='btn-sm btn-default'>??????</a>" +
									" </span>" +
									"</li>");




    $('.category').eq(category_depth - 1).append($item);
  }

  var category_order_set = function (){

    $.ajax({
      url: "/<?=mapping('category_management')?>/category_order_set",
      type: "POST",
      dataType: "json",
      async: true,
      data: $("#form_default").serialize(),
      success: function(result) {
        if(result.code == 0){
          alert(result.msg);
        }
      }

    });
  }

  //????????? ??????
  function img_change(category_management_idx){
    openWin = window.open("/<?=mapping('category_management')?>/img_change?category_management_idx="+category_management_idx,"CLIENT_WINDOW", "width=500, height=350, resizable = no, scrollbars = no");
    openWin.focus();
  }

  //????????? ??????
  function img_set(category_management_idx,img_path){
    $("#img_"+category_management_idx).attr("src", img_path);
  }

  $( function() {
    $( ".sortable" ).sortable({
      placeholder: "ui-state-highlight",
      axis: "y",
      update: function() {
          $("#select_depth").val($(this).index('.sortable'));
          category_order_set();

      }

    });
    $( ".sortable" ).disableSelection();
  } );
</script>
