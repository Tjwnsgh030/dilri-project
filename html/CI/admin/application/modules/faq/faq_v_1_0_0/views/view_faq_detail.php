<!-- container-fluid : s -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="page-header">
    <h1>FAQ Details</h1>
    <span style="line-height:35px; float:right;">
      Registration date: <?=$this->global_function->date_Ymd_hyphen($result->ins_date)?>
    </span>
  </div>
  <!-- body : s -->
  <div class="bg_wh mt20">
    <!-- search : s -->
  	<div class="table-responsive">
      <form name="form_default" id="form_default" method="post">
        <input type="hidden" name="faq_idx" id="faq_idx" value="<?=$result->faq_idx?>">
    		 <table class="table table-bordered td_left">
          <colgroup>
        	<col style="width:15%">
        	<col style="width:35%">
        	<col style="width:15%">
        	<col style="width:35%">
          </colgroup>
          <tbody>
            <tr>
              <th><span class="text-danger">*</span> Classification </th>
              <td colspan=3>
                <select class="form-control w_auto" name="faq_type" id="faq_type">
                  <?for($i=1;$i<=11;$i++){?>
                    <? if($i!=9){ ?>
                      <option value="<?=$i?>" <?=($result->faq_type ==$i)? "selected": "";?>><?=$this->global_function->get_faq_type($i)?></option>
                    <? } ?>
                  <?}?>
                </select>
              </td>
            </tr>
            <tr>
              <th><span class="text-danger">*</span> Title<br>(En/Kr/Bdt) </th>
              <td colspan=3>
                  <!--   <input name="title" id="title" type="text" class="form-control" value="<?=$result->title?>"> -->

                <input name="title_us" id="title_us" type="text" class="form-control" value="<?=$result->title_us?>">
                <input name="title_kr" id="title_kr" type="text" class="form-control" value="<?=$result->title_kr?>">
                <input name="title_bd" id="title_bd" type="text" class="form-control" value="<?=$result->title_bd?>">
              </td>
            </tr>
            <tr>
              <th colspan="4">
                <span class="text-danger" >*</span> Content (En/Kr/Bdt)
              </th>
            </tr>
            <tr>
              <td colspan="4" class="table_left" colspan="3">
  <!--  <textarea class="input_default textarea_box" name="contents" id="contents" placeholder=""><?=$result->contents?></textarea> -->

                <textarea class="input_default textarea_box" name="contents_us" id="contents_us" placeholder=""><?=$result->contents_us?></textarea>
                <textarea class="input_default textarea_box" name="contents_kr" id="contents_kr" placeholder=""><?=$result->contents_kr?></textarea>
                <textarea class="input_default textarea_box" name="contents_bd" id="contents_bd" placeholder=""><?=$result->contents_bd?></textarea>
              </td>
            </tr>
            <tr>
             <th>Exposed</th>
               <td colspan="3">
                     <?php if($result->state == "N"){ ?>
                       <label class="switch">
                         <input type="checkbox" name="state" id="state" value="Y">
                         <span class="check_slider"></span>
                       </label>
                     <?php }else if($result->state == "Y"){ ?>
                       <label class="switch">
                         <input type="checkbox" name="state" id="state" value="Y" checked>
                         <span class="check_slider"></span>
                       </label>
                     <?php } ?>
               </td>
             </tr>
          </tbody>
        </table>
        <div class="mt15">
          <a class="btn btn-gray" href="javascript:void(0)" onclick="default_list();">List</a>
          <a class="btn btn-info" href="javascript:void(0)" onclick="default_mod();" style="float:right;">Edit</a>
          <a class="btn btn-danger" href="javascript:void(0)" onClick="default_del('<?=$result->faq_idx?>')" style="float:right;">Delete</a>
        </div>
      </div>
    </div>
  </form>
  <!-- body : e -->

</div>
<!-- container-fluid : e -->

<script>

  // faq ??????
  function default_list(){
    history.back(<?=$history_data?>);
  }

  // faq ??????
  function default_mod(){

    $.ajax({
      url      : "/<?=mapping('faq')?>/faq_mod_up",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : $("#form_default").serialize(),
      success: function(result){
        if(result.code == "-1"){
          alert(result.code_msg);
          $("#"+result.focus_id).focus();
        }else{
          alert("Corrected successfully..");
          default_list();
        }
      }
    });
  }

  // faq ??????
  function default_del(faq_idx){

    if(!confirm("Are you sure you want to delete it?")){
      return;
    }

    $.ajax({
      url      : "/<?=mapping('faq')?>/faq_del",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : {
        "faq_idx": faq_idx
      },
      success: function(result) {
        if(result.code == "-1"){
          alert(result.code_msg);
        }else{
          alert("Successfully deleted.");
          default_list();
        }
      }
    });

  }

  // faq ?????? ??????
  function faq_state_mod_up(faq_idx, state){

    var formData = {
      "faq_idx" : faq_idx,
      "state" : state
    };

    $.ajax({
      url      : "/<?=mapping('faq')?>/faq_state_mod_up",
      type     : 'POST',
      dataType : 'json',
      async    : true,
      data     : formData,
      success: function(result){
        if(result.code == "-1"){
          alert(result.code_msg);
          $("#"+result.focus_id).focus();
          return;
        }
      }
    });
  }


</script>
