<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h3 class="head-title"><i class="fa fa-bar-chart"></i><small> <?php echo $this->lang->line('student'); ?>  <?php echo $this->lang->line('report'); ?></small></h3>                
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>                    
                </ul>
                <div class="clearfix"></div>
            </div>
           
            
             <div class="x_content filter-box"> 
                <?php echo form_open_multipart(site_url('report/student_report'), array('name' => 'sattendance', 'id' => 'sattendance', 'class' => 'form-horizontal form-label-left'), ''); ?>
                <div class="row">                    
                    <div class="col-md-10 col-sm-10 col-xs-12">
                       
                            <div class="item form-group">
                      
                       <p>Fill the details of students </p>
                            </div>
                        
                           
                       
                       
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="name" value="S.name"> name<br>
                            </div>
                        </div>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="registration_no" value="S.registration_no"> Registration Number<br>
                            </div>
                        </div>
                          
                          <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="phone" value="S.phone"> phone<br>
                            </div>
                        </div><div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="present_address" value="S.present_address">Present Address<br>
                            </div>
                        </div>
                           <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="permanent_address" value="S.permanent_address"> Permanent Address <br>
                            </div>
                        </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="gender" value="S.gender">Gender<br>
                            </div>
                        </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="blood_group" value="S.blood_group"> Blood Group<br>
                            </div>
                        </div>
                            <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="religion" value="S.religion"> Religion<br>
                            </div>
                        </div>
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="dob" value="S.dob"> Date of Birth<br>
                            </div>
                        </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="other_info" value="S.other_info"> Other Information<br>
                            </div>
                        </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="is_hostel_member" value="S.is_hostel_member"> Hostel Member<br>
                            </div>
                        </div>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="is_transport_member" value="S.is_transport_member"> Transport<br>
                            </div>
                        </div>
                               
                    </div>
                               
                               
                               <div class="col-md-10 col-sm-10 col-xs-12">
                       
                            <div class="item form-group">
                      <br>
                       <p>Fill the details of Gaurdian  </p>
                            </div>
                        
                           
                                <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="gname"  value="G.name">  Name<br>
                            </div>
                        </div>
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="grelation" value="G.relation"> Relation<br>
                            </div>
                        </div>
                               
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="gphone"  value="G.phone"> Phone<br>
                            </div>
                        </div>
                               
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="gprofession"  value="G.profession"> Profession<br>
                            </div>
                        </div>
              
                               
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="gpresent_address"  value="G.present_address">  Present Address<br>
                            </div>
                        </div>
                               
                             <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="item form-group">
                      
                       <input type="checkbox" name="gpermanent_address"  value="G.permanent_address">  permanent Address <br>
                            </div>
                        </div>
                               
                          
                               
                                
                                      
                    </div>
                
                    <div class="col-md-2 col-sm-2 col-xs-12">
                        <div class="form-group"><br/>
                            <button id="send" type="submit" class="btn btn-success"><?php echo $this->lang->line('find'); ?></button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>

            <div class="x_content">
                <div class="" data-example-id="togglable-tabs">
                    
                    <ul  class="nav nav-tabs bordered">
                        <li class="active"><a href="#tab_tabular"   role="tab" data-toggle="tab"   aria-expanded="true"><i class="fa fa-list-ol"></i> <?php echo $this->lang->line('tabular'); ?> <?php echo $this->lang->line('report'); ?></a> </li>
                    </ul>
                    <br/>
                    
                    <div class="tab-content">
                        <div  class="tab-pane fade in active" id="tab_tabular" >
                            <div class="x_content">
                                                           
                                                            
                            <table class="datatable-responsive table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <td><?php echo 'S.no'; ?> <i class="fa fa-long-arrow-down"></i> -  <i class="fa fa-long-arrow-right"></i></td>
                                        
                                          
                                        <?php if(isset($_POST['name'])){ 
                                        ?>
                                            <td><?php echo "NAME" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['registration_no'])){ 
                                        ?>
                                            <td><?php echo "Registration Number" ; ?></td>
                                        <?php } ?>
                                         <?php if(isset($_POST['phone'])){ 
                                        ?>
                                            <td><?php echo "Phone" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['present_address'])){ ?>
                                        <td><?php echo "Present address" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['permanent_address'])){ 
                                        ?>
                                        <td><?php echo "Permanent address" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['gender'])){ 
                                        ?>
                                            <td><?php echo "GENDER" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['blood_group'])){ 
                                        ?>
                                            <td><?php echo "Blood group" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['religion'])){ 
                                        ?>
                                            <td><?php echo "Religion" ; ?></td>
                                        <?php } ?>
                                         <?php if(isset($_POST['dob'])){ 
                                        ?>
                                            <td><?php echo "Date of Birth" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['other_info'])){ 
                                        ?>
                                            <td><?php echo "Other info" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['is_hostel_member'])){ 
                                        ?>
                                            <td><?php echo "hostel member" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['gname'])){ 
                                        ?>
                                            <td><?php echo "Guardian NAME" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['gphone'])){ 
                                        ?>
                                            <td><?php echo "Guardian Phone" ; ?></td>
                                        <?php } ?>
                                         
                                        <?php if(isset($_POST['gprofession'])){ 
                                        ?>
                                            <td><?php echo "Guardian Profession" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['gpresent_address'])){ 
                                        ?>
                                            <td><?php echo "Guardian Present Address" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['gpermanent_address'])){ 
                                        ?>
                                            <td><?php echo "Guardian Permanent Address" ; ?></td>
                                        <?php } ?>
                                        <?php if(isset($_POST['grelation'])){ 
                                        ?>
                                            <td><?php echo "Guardian Relation" ; ?></td>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>   
                                    <?php  $i=1;$count = 1; if(isset($students) && !empty($students)){ ?>
                                            
                                            <?php foreach($students as $obj){ ?>
                                        <tr>
                                            <td><?php echo $i;
                                            $i++;?></td>
                                            <?php $attendancee = get_guardian_id($obj->id); 
                                            ?>
                                            <?php if(!empty($attendancee)){ ?>
                                                <?php foreach($attendancee AS $key ){ ?>
                                                    <?php  ?>
                                                <?php } ?>
                                            <?php }
                       $stuinfo = get_student_info($obj->id,$key,$name,$rno,$phone,$preadd,$peradd,$gender,$bgroup,$religion,$dob,$photo,$other_info,$hmem,$discount,        $gname, $gphone, $gpreadd , $gperadd, $gprofession,$grelation );
                                       $guainfo=get_guardian_info($obj->id,$key ,$gname, $gphone, $gpreadd, $gperadd, $gprofession,  $grelation )?>
                                        <?php if(!empty($stuinfo)){ ?>
                                                <?php foreach($attendance AS $keyy ){ ?>
                                                    <td> <?php echo $keyy  ? $keyy : '<i style="color:red;">--</i>'; ?></td>
                                                <?php } ?>
                                        <?php if(!empty($guainfo)){ ?>
                                                <?php foreach($guainfo AS $keyys ){ ?>
                                                    <td> <?php echo $keyys  ? $keyys : '<i style="color:red;">--</i>'; ?></td>
                                                <?php } ?>
                                        
                                        </tr>
                                        <?php } ?>                                      
                                    <?php }
                                                                            }                                                       }else{ ?>
                                        <tr><td colspan="32" class="text-center"><?php echo $this->lang->line('no_data_found'); ?></td></tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            </div>
                        </div>                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 <script type="text/javascript">
         
    <?php if(isset($class_id) && isset($section_id)){ ?>
        get_section_by_class('<?php echo $class_id; ?>', '<?php echo $section_id; ?>');
    <?php } ?>
    
    function get_section_by_class(class_id, section_id){       
           
        $.ajax({       
            type   : "POST",
            url    : "<?php echo site_url('ajax/get_section_by_class'); ?>",
            data   : { class_id : class_id , section_id: section_id},               
            async  : false,
            success: function(response){                                                   
               if(response)
               {
                  $('#section_id').html(response);
               }
            }
        });          
    }
    
    $("#sattendance").validate();  
</script>
 <script type="text/javascript">
        $(document).ready(function() {
          $('#datatable-responsive').DataTable( {
              dom: 'Bfrtip',
              iDisplayLength: 15,
              buttons: [
                  'copyHtml5',
                  'excelHtml5',
                  'csvHtml5',
                  'pdfHtml5',
                  'pageLength'
              ],
              search: true
          });
        });
        
        function get_subject_by_class(url){          
            if(url){
                window.location.href = url; 
            }
        }
        
        function get_guardian_by_id(guardian_id){
            
            $.ajax({       
            type   : "POST",
            dataType: "json",
            url    : "<?php echo site_url('ajax/get_guardian_by_id'); ?>",
            data   : { guardian_id : guardian_id},               
            async  : true,
            success: function(response){ 
               if(response)
               {
                $('#add_phone').val(response.phone);  
                $('#add_present_address').val(response.present_address);  
                $('#add_permanent_address').val(response.permanent_address);  
                $('#add_religion').val(response.religion);  
               }else{
                    $('#add_phone').val('');  
                    $('#add_present_address').val('');  
                    $('#add_permanent_address').val('');  
                    $('#add_religion').val(''); 
               }
            }
        });  
        }
    $("#add").validate();     
    $("#edit").validate();      
</script>