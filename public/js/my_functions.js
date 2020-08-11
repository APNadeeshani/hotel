// JavaScript Document
//Chech User Permission
function vlfrm(usid,pmid){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"fun_val_usrfrm.php",
		async: false,
		data:"usid="+usid+"&pmid="+pmid,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Check User permision for form report access
function userpermsnval(usid,pmid){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"fun_val_usrfrm.php",
		async:false,
		data:"usid="+usid+"&pmid="+pmid,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Check Operator Status
function getoprsts(opid){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"fun_val_oprsts.php",
		async:false,
		data:"opid="+opid,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Data Encrip
function data_encyp(sodt){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"st_encryption.php",
		async: false,
		data:"sosd="+sodt,
		success: function(msg){temp=msg;}
	});
	return temp;
}

//Number Format
function number_format(number,decimals,dec_point,thousands_sep){
  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + (Math.round(n * k) / k)
        .toFixed(prec);
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
    .split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '')
    .length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1)
      .join('0');
  }
  return s.join(dec);
}

//Number to word
function numtoword(num) {
	var a = ['','one ','two ','three ','four ', 'five ','six ','seven ','eight ','nine ','ten ','eleven ','twelve ','thirteen ','fourteen ','fifteen ','sixteen ','seventeen ','eighteen ','nineteen '];
	var b = ['', '', 'twenty','thirty','forty','fifty', 'sixty','seventy','eighty','ninety'];
	if ((num = num.toString()).length > 9) return 'overflow';
	n = ('000000000' + num).substr(-9).match(/^(\d{2})(\d{2})(\d{2})(\d{1})(\d{2})$/);
	if (!n) return; var str = '';
	str += (n[1] != 0) ? (a[Number(n[1])] || b[n[1][0]] + ' ' + a[n[1][1]]) + 'crore ' : '';
	str += (n[2] != 0) ? (a[Number(n[2])] || b[n[2][0]] + ' ' + a[n[2][1]]) + 'lakh ' : '';
	str += (n[3] != 0) ? (a[Number(n[3])] || b[n[3][0]] + ' ' + a[n[3][1]]) + 'thousand ' : '';
	str += (n[4] != 0) ? (a[Number(n[4])] || b[n[4][0]] + ' ' + a[n[4][1]]) + 'hundred ' : '';
	str += (n[5] != 0) ? ((str != '') ? 'and ' : '') + (a[Number(n[5])] || b[n[5][0]] + ' ' + a[n[5][1]]) + 'only ' : '';
	return str;
}

//Make AutoID as string
function makeid_stg(){
	var text = "";
	var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
	for(var i=0; i<6; i++){text+=possible.charAt(Math.floor(Math.random()*possible.length));}
	return text;
}

//Make AutoID as Intiger
function makeid_int(){
	var text=(Math.floor(Math.random()*(9999-1000+1))+1000);
	return text;
}

//Check Maincash balance
function getmaincshbal(brco){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"fun_get_maincshbal.php",
		async: false,
		data:"brco="+brco,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Check Issued Cheque Availability
function checkchqaval(cqno,baco){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"fun_val_isschq.php",
		async: false,
		data:"cqno="+cqno+"&baco="+baco,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Received Cheque Validation
function recchqval(brco,cqno){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"fun_val_recchq.php",
		async: false,
		data:"brco="+brco+"&cqno="+cqno,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Get Received Cheque Details
function getrecechqdtl(cqno){
	var rtdt='';
	$.ajax({
		type:'POST',
		url:'fun_get_recechqdtl.php',
		async: false,
		data:"cqno="+cqno,
		beforeSend:function(){$("body").css("cursor","wait");},
		success:function(data){
			rtdt=data;
			$("body").css("cursor","default");
		}
	});
	return rtdt;
}

//Add New Event to task
function addevnt(usid,rfno,trid,tdcr,tadt){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"fun_add_event.php",
		async: false,
		data:"usid="+usid+"&rfno="+rfno+"&trid="+trid+"&tdcr="+tdcr+"&tadt="+tadt,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Get Loan Account Details
function load_lnaccdtl(acno){
	var rtdt='';
	$.ajax({
		url:'fun_get_mcrcrdtl.php',
		type:'POST',
		async: false,
		data:"acno="+acno,
		beforeSend:function(){$("body").css("cursor","wait");},
		success:function(data){
			rtdt=data;
			$("body").css("cursor","default");
		}
	});
	return rtdt;
}

//Get Loan Account Details
function load_dpaccdtl(acno){
	var rtdt='';
	$.ajax({
		url:'fun_get_svadpdtl.php',
		type:'POST',
		async: false,
		data:"acno="+acno,
		beforeSend:function(){$("body").css("cursor","wait");},
		success:function(data){
			rtdt=data;
			$("body").css("cursor","default");
		}
	});
	return rtdt;
}


//-----Clients--------
//Client Validation
function val_client(nicn){
	var rtdt='';
	$.ajax({
		url:'fun_val_aplcnt.php',
		type:'POST',
		async: false,
		data:"idno="+nicn,
		beforeSend:function(){$("body").css("cursor","wait");},
		success:function(data){
			rtdt=data;
			$("body").css("cursor","default");
		}
	});
	return rtdt;
}

//Get Client Status
function getclntsts(clid){
	var temp=0;
	$.ajax({
		type:"POST",
		url:"clnt_get_sts.php",
		async: false,
		data:"clid="+clid,
		beforeSend: function(){$("body").css("cursor","wait");},
		success: function(msg){temp=msg; $("body").css("cursor","default");}
	});
	return temp;
}

//Load Loan Account Ledger
function load_mccrledg(acno){	
	$('#modal-isi-body').load('mccr_accledg.php?acno='+acno,function(){});
}