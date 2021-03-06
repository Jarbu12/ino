<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
 <title>Raja Ongkir - Cek Ongkos Kirim</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/jquery-easyui-1.4.4/themes/black/easyui.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/jquery-easyui-1.4.4/themes/mobile.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/jquery-easyui-1.4.4/themes/color.css">
 <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/jquery-easyui-1.4.4/themes/icon.css">
 <link rel="stylesheet" type="text/css" href="styles.css">
 <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-easyui-1.4.4/jquery.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-easyui-1.4.4/jquery.easyui.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url();?>assets/jquery-easyui-1.4.4/jquery.easyui.mobile.js"></script>
 <script type="text/javascript">
 $(function(){
 $('#cekOngkir').click(function(){
 $('form').submit();
 })
 })
 </script>
</head>
<body>
 <div class="easyui-navpanel" style="position:relative;padding:20px">
 <header>
 <div class="m-toolbar">
 <div class="m-title">Raja Ongkir Form</div>
 <div class="m-right">
 <a href="javascript:void(0)" class="easyui-linkbutton" onclick="$('#ff').form('reset')" style="width:60px">Reset</a>
 </div>
 </div>
 </header>
 <form id="ff" name="frmOngkir" method="POST" action="<?php echo site_url('page=get_kota&act=result');?>">
 <div>
 <label>Kota Asal Pengiriman</label>
 <input class="easyui-combobox" prompt="Kota Asal Pengiriman" name="origin" style="width:100%" required data-options="
 valueField: 'city_id',
 textField: 'city_name',
 url:'<?php echo site_url("page=get_kota")?>',
 method:'get',
 panelHeight:'30%'
 
 ">
 <!-- <input class="easyui-textbox" prompt="Kota Asal Pengiriman" style="width:100%" data-options="required:true"> -->
 </div>
 <div>
 <label>Kota Tujuan Pengiriman</label>
 <input class="easyui-combobox" prompt="Kota Tujuan Pengiriman" name="destination" style="width:100%" required data-options="
 valueField: 'city_id',
 textField: 'city_name',
 url:'<?php echo site_url("page=get_kota")?>',
 method:'get',
 panelHeight:'30%' ">
 <!-- <input class="easyui-textbox" prompt="Kota Tujuan Pengiriman" style="width:100%" data-options="required:true"> -->
 </div>
 <div>
 <label>Berat Kiriman</label>
 <br>
 <input class="easyui-slider" value="1" style="width:100%"
 data-options="
 showTip:true,
 rule: [0,'|',25,'|',50,'|',75,'|',100],
 onChange: function(value){
 $('#berat').numberbox('setValue',value);
 },
 ">
 </div>
 <div>
 <label>Kurir</label>
 <select name="kurir" class="easyui-combobox">
 	<option value="jne">Jalur Nugraha Eka KURIR</option>
 	<option value="pos">POS Indonesia</option>
 	<option value="tiki">TIKI</option>
 </select>
 </div>
 <div>
 <p>&nbsp;</p>
 <input class="easyui-numberbox" name="weight" value="1" id="berat" style="width:20%"> gram
 </div>
 <div style="text-align:center;margin-top:30px">
 <a class="easyui-linkbutton" style="width:100%;height:40px" id="cekOngkir"><span style="font-size:16px">Periksa Ongkir</span></a>
 </div>
 
 </form>
 </div>
 <style scoped>
 form label{
 display: block;
 margin: 10px 0 5px 0;
 }
 </style>
</body>
</html>