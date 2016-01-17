 <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก HN -->       
<div id="win_hn_sr" class="easyui-window" title="ค้นหาประวัติผู้ป่วย/ประวัติการรักษา" 
              data-options="modal:true,closed:true,iconCls:'icon-save', iconCls:'icon-man'   " 
              style="width:350px;height:150px;padding:10px;">
             <table>
                 <tr>
                     <td> HN :</td>
                     <td>
                         <select class="easyui-combogrid" id="HN_sr"  name="HN_sr"   style="width:150px;height: 40px" data-options="
            panelWidth: 300,
            idField: 'itemid',
            textField: 'HN_diagnosis',
            mode:'remote',
            idField:'HN',
            url: '<?=base_url()?>index.php/welcome/cmb_hn/',
            method: 'post',
            columns: [[
                {field:'HN',title:'HN'},
                {field:'Name',title:'Name'},
                {field:'Surname',title:'Lastname'},
                  {field:'Sex',title:'Sex'},
                
            ]],
            fitColumns: true,
          
                              " />
                         
                    
                         
                     </td>
                 </tr>
                 <tr>
                     <td colspan="2">     
                         <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" 
                            iconCls:'icon-man',
                            onClick:function()
                               {
                                    //$('#HN_sr').combogrid('getValue');                             
                                    //alert(  $('#HN_sr').combogrid('getValue') );  
                                    var   hn_sr= $('#HN_sr').combogrid('getValue');     
                                
                                      $('#p_patient').panel('open');
                                    $('#dg_patient').datagrid({
                                        url:'<?=base_url()?>index.php/welcome/dg_patient_sr_HN/' +  hn_sr     ,
                                      fitColumns:true,
                                      singleSelect:true,
                                      pagination: true  ,
                                     rownumbers:true ,    
                                      columns:[[
                                          {  field:'Name',title:'Name' },
                                          {  field:'Surname',title:'Lastname' },
                                          {  field:'HN',title:'HN' },
                                          {  field:'BirthDate',title:'Birth Date' },
                                          {  field:'Sex',title:'Sex' },
                                          {field:'id_patient',title:'ID'},
                                                     ]]
                                    
                                    });
                                   
                                    
                                    
                               }
                            " 
                            style="height: 30px" >Open</a>
                         <a href="javascript:void(0)" class="easyui-linkbutton" data-options=" iconCls:'icon-cancel' "  onclick="$('#win_hn_sr').window('close')"  style="height: 30px" >Close</a>
                     </td>
                 </tr>
                 
                 
             </table>
         </div>
 
  <!-- ค้นหา ประวัติผู้ป่วย/ประวัติการรักษา  จาก HN -->

