<script type="text/javascript">
function pilihKab()
{
  var nilai = $('#pilKab').val();
  //$('#pilKec').text('okelah');
  $("#pilKec").append("<option value='-1'>1</option>");
  //alert(nilai);
}
</script>
<div class="topcolumn">

            <div class="logo"></div>

                            <ul  id="shortcut">

                                <li> <a href="<?=base_url()?>masters/dusun" title="Back To home"> <img src="<?=base_url()?>assets/template/fingers/images/icon/shortcut/home.png" alt="home" width="40px"/><strong>Daftar</strong> </a> </li>

                            </ul>      

          </div>  

          <div class="clear"></div>          

                    <div class="clear"></div>

                        

                  <div class="onecolumn" >

                  <div class="header"><span ><span class="ico  gray user"></span><?=$ket?></span> </div><!-- End header --> 

                  <div class="clear"></div>

                  <div class="content" >                      

                    <div class="tab_container" >



                          <div id="tab1" class="tab_content"> 

                              <div class="load_page">                        

                                 

                                <div class="formEl_b">  

                                <form id="validation" action="<?=base_url()?>masters/<?=$link?>" method="POST"> 

                                <fieldset >

                                <legend><?=$ket?> <span class="small s_color">( <?=$jenis?> )</span></legend>

                                      <div class="section">

                                      <label> Nama Kelurahan  <small>Pilih salah satu</small></label>

                                      <div>

                                              <?

                                              $selekkec = (isset($kueri->id_kelurahan))?$kueri->id_kelurahan:"";

                                              $jpkec = "data-placeholder='Pilih Kelurahan...' class='chzn-select' id='pilKec'";

                                              echo form_dropdown('kelurahan', $kelurahan, $selekkec,$jpkec);

                                              ?>

                                      </div>                                                                            

                                      </div>

                                      <div class="section">

                                      <label> Nama Dusun  </label>

                                      <div>

                                      <input type="text"  name="nama" id="nama"  class="validate[required] medium" value="<? if(isset($kueri->nama_dusun)){ echo $kueri->nama_dusun; } ?>"/>

                                      <span class="f_help"> Isikan Nama Dusun. </span> 

                                      </div>                                                                            

                                      </div>

                                      <div class="section last">

                                      <div>

                                        <a class="uibutton submit_form" >Simpan</a><a class="uibutton special"   onClick="ResetForm()" title="Reset  Form"   >Reset Form</a>

                                     </div>

                                     </div>

                                </fieldset>

                                </form>

                                </div>

                              </div>  

                          </div><!--tab1-->                                                                                                      

                  </div>                  

                  <div class="clear"/></div>                  

                  </div>

                  </div>