$(document).ready(function(){
 
 function fetch_employee_data()
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   dataType:"json",
   success:function(data)
   {
    for(var count=0; count<data.length; count++)
    {
     var 
     name = '<div data-name="name" class="name" data-type="text" data-pk="'+data[count].id+'">'+data[count].name+'</div>';
     $('#name').append(name);
     $('#name1').append(name);
     $('#name2').append(name);
     designation = '<div data-name="designation" class="designation" data-type="text" data-pk="'+data[count].id+'">'+data[count].designation+'</div>';
     $('#designation').append(designation);
     $('#designation1').append(designation);
     email = '<div data-name="email" class="email" data-type="text" data-pk="'+data[count].id+'">'+data[count].email+'</div>';
     $('#email').append(email);
     $('#email1').append(email);
     email2 = '<div data-name="email2" class="email2" data-type="text" data-pk="'+data[count].id+'">'+data[count].email2+'</div>';
     $('#email2').append(email2);
     ph1 = '<div data-name="ph1" class="ph1" data-type="number" data-pk="'+data[count].id+'">'+data[count].ph1+'</div>';
     $('#ph1').append(ph1);
     $('#cph1').append(ph1);
     ph2 = '<div data-name="ph2" class="ph2" data-type="number" data-pk="'+data[count].id+'">'+data[count].ph2+'</div>';
     $('#ph2').append(ph2);
     website = '<div data-name="website" class="website" data-type="text" data-pk="'+data[count].id+'">'+data[count].website+'</div>';
     $('#website').append(website);
     wai = '<div data-name="wai" class="wai" data-type="text" data-pk="'+data[count].id+'">'+data[count].wai+'</div>';
     $('#wai').append(wai);
     rga = '<div data-name="rga" class="rga" data-type="text" data-pk="'+data[count].id+'">'+data[count].rga+'</div>';
     $('#rga').append(rga);
	 hobbies = '<div data-name="hobbies" class="hobbies" data-type="text" data-pk="'+data[count].id+'">'+data[count].hobbies+'</div>';
     $('#hobbies').append(hobbies);
	 act1 = '<div data-name="act1" class="act1" data-type="text" data-pk="'+data[count].id+'">'+data[count].act1+'</div>';
     $('#act1').append(act1);
	 dact1 = '<div data-name="dact1" class="dact1" data-type="text" data-pk="'+data[count].id+'">'+data[count].dact1+'</div>';
     $('#dact1').append(dact1);
	  act2 = '<div data-name="act2" class="act2" data-type="text" data-pk="'+data[count].id+'">'+data[count].act2+'</div>';
     $('#act2').append(act2);
	 dact2 = '<div data-name="dact2" class="dact2" data-type="text" data-pk="'+data[count].id+'">'+data[count].dact2+'</div>';
     $('#dact2').append(dact2);
	  act3 = '<div data-name="act3" class="act3" data-type="text" data-pk="'+data[count].id+'">'+data[count].act3+'</div>';
     $('#act3').append(act3);
	 dact3 = '<div data-name="dact3" class="dact3" data-type="text" data-pk="'+data[count].id+'">'+data[count].dact3+'</div>';
     $('#dact3').append(dact3);
	  act4 = '<div data-name="act4" class="act4" data-type="text" data-pk="'+data[count].id+'">'+data[count].act4+'</div>';
     $('#act4').append(act4);
	 dact4 = '<div data-name="dact4" class="dact4" data-type="text" data-pk="'+data[count].id+'">'+data[count].dact4+'</div>';
     $('#dact4').append(dact4);
	  act5 = '<div data-name="act5" class="act5" data-type="text" data-pk="'+data[count].id+'">'+data[count].act5+'</div>';
     $('#act5').append(act5);
	 dact5 = '<div data-name="dact5" class="dact5" data-type="text" data-pk="'+data[count].id+'">'+data[count].dact5+'</div>';
     $('#dact5').append(dact5);
	  act6 = '<div data-name="act6" class="act6" data-type="text" data-pk="'+data[count].id+'">'+data[count].act6+'</div>';
     $('#act6').append(act6);
	 dact6 = '<div data-name="dact6" class="dact6" data-type="text" data-pk="'+data[count].id+'">'+data[count].dact6+'</div>';
     $('#dact6').append(dact6);
	 ts1 = '<div data-name="ts1" class="ts1" data-type="text" data-pk="'+data[count].id+'">'+data[count].ts1+'</div>';
     $('#ts1').append(ts1);
	 ts2 = '<div data-name="ts2" class="ts2" data-type="text" data-pk="'+data[count].id+'">'+data[count].ts2+'</div>';
     $('#ts2').append(ts2);
	 ts3 = '<div data-name="ts3" class="ts3" data-type="text" data-pk="'+data[count].id+'">'+data[count].ts3+'</div>';
     $('#ts3').append(ts3);
	 ts4 = '<div data-name="ts4" class="ts4" data-type="text" data-pk="'+data[count].id+'">'+data[count].ts4+'</div>';
     $('#ts4').append(ts4);
     tsother = '<div data-name="tsother" class="tsother" data-type="text" data-pk="'+data[count].id+'">'+data[count].tsother+'</div>';
     $('#tsother').append(tsother);
	 institute = '<div data-name="institute" class="institute" data-type="text" data-pk="'+data[count].id+'">'+data[count].institute+'</div>';
     $('#institute').append(institute);
	 isd = '<div data-name="isd" class="isd" data-type="combodate" data-pk="'+data[count].id+'">'+data[count].isd+'</div>';
     $('#isd').append(isd);
	  ied = '<div data-name="ied" class="ied" data-type="combodate" data-pk="'+data[count].id+'">'+data[count].ied+'</div>';
     $('#ied').append(ied);
	 idesc = '<div data-name="idesc" class="idesc" data-type="textarea" data-pk="'+data[count].id+'">'+data[count].idesc+'</div>';
     $('#idesc').append(idesc);
	project1= '<div data-name="project1" class="project1" data-type="text" data-pk="'+data[count].id+'">'+data[count].project1+'</div>';
     $('#project1').append(project1);
	 p1sd = '<div data-name="p1sd" class="p1sd" data-type="combodate" data-pk="'+data[count].id+'">'+data[count].p1sd+'</div>';
     $('#p1sd').append(p1sd);
	  p1ed = '<div data-name="p1ed" class="p1ed" data-type="combodate" data-pk="'+data[count].id+'">'+data[count].p1ed+'</div>';
     $('#p1ed').append(p1ed);
	 p1desc = '<div data-name="p1desc" class="p1desc" data-type="textarea" data-pk="'+data[count].id+'">'+data[count].p1desc+'</div>';
     $('#p1desc').append(p1desc);
	 pname1 = '<div data-name="pname1" class="pname1" data-type="text" data-pk="'+data[count].id+'">'+data[count].pname1+'</div>';
     $('#pname1').append(pname1);
	 project2= '<div data-name="project2" class="project2" data-type="text" data-pk="'+data[count].id+'">'+data[count].project2+'</div>';
     $('#project2').append(project2);
	 p2sd = '<div data-name="p2sd" class="p2sd" data-type="combodate" data-pk="'+data[count].id+'">'+data[count].p2sd+'</div>';
     $('#p2sd').append(p2sd);
	  p2ed = '<div data-name="p2ed" class="p2ed" data-type="combodate" data-pk="'+data[count].id+'">'+data[count].p2ed+'</div>';
     $('#p2ed').append(p2ed);
	 p2desc = '<div data-name="p2desc" class="p2desc" data-type="textarea" data-pk="'+data[count].id+'">'+data[count].p2desc+'</div>';
     $('#p2desc').append(p2desc);
	 p2name = '<div data-name="p2name" class="p2name" data-type="text" data-pk="'+data[count].id+'">'+data[count].p2name+'</div>';
     $('#p2name1').append(p2name);
	 projectc= '<div data-name="projectc" class="projectc" data-type="text" data-pk="'+data[count].id+'">'+data[count].projectc+'</div>';
     $('#projectc').append(projectc);
	 pcsd = '<div data-name="pcsd" class="pcsd" data-type="combodate" data-pk="'+data[count].id+'">'+data[count].pcsd+'</div>';
     $('#pcsd').append(pcsd);
	  pced = '<div data-name="pced" class="pced" data-type="combodate" data-value="1984-05-15" data-title="Select date" data-pk="'+data[count].id+'">'+data[count].pced+'</div>';
     $('#pced').append(pced);
	 pcdesc = '<div data-name="pcdesc" class="pcdesc" data-type="textarea" data-pk="'+data[count].id+'">'+data[count].pcdesc+'</div>';
     $('#pcdesc').append(pcdesc);
	 pcname = '<div data-name="pcname" class="pcname" data-type="text" data-pk="'+data[count].id+'">'+data[count].pcname+'</div>';
     $('#pcname1').append(pcname);
	 qgivenby= '<div data-name="qgivenby" class="qgivenby" data-type="text" data-pk="'+data[count].id+'">'+data[count].qgivenby+'</div>';
     $('#qgivenby').append(qgivenby);
	 quote= '<div data-name="quote" class="quote" data-type="textarea" data-pk="'+data[count].id+'">'+data[count].quote+'</div>';
     $('#quote').append(quote);
     address= '<div data-name="address" class="address" data-type="textarea" data-pk="'+data[count].id+'">'+data[count].address+'</div>';
     $('#address').append(address);




	
    }useReturnData(data);
   }
  })
 }
 function useReturnData(data){
    myvar = data;
    console.log(myvar);
};
 fetch_employee_data();
 
 $('#container').editable({
  container: 'body',
  selector: 'div.name',
  url: "update.php",
  title: 'Enter Name',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#container').editable({
  container: 'body',
  selector: 'div.designation',
  url: "update.php",
  title: 'Enter Designation',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
  $('#container').editable({
  container: 'body',
  selector: 'div.email',
  url: "update.php",
  title: 'Enter Email',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
   $('#container').editable({
  container: 'body',
  selector: 'div.email2',
  url: "update.php",
  title: 'Enter another Email',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#container').editable({
  container: 'body',
  selector: 'div.ph1',
  url: "update.php",
  title: 'Enter Phone No.',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
  $('#container').editable({
  container: 'body',
  selector: 'div.ph2',
  url: "update.php",
  title: 'Enter another phone no.',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 
 $('#container').editable({
  container: 'body',
  selector: 'div.website',
  url: "update.php",
  title: 'Enter Website',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#container').editable({
  container: 'body',
  selector: 'div.wai',
  url: "update.php",
  title: 'Enter What you do?',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });
 
 $('#container').editable({
  container: 'body',
  selector: 'div.rga',
  url: "update.php",
  title: 'You are good at?',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
 $('#container').editable({
  container: 'body',
  selector: 'div.hobbies',
  url: "update.php",
  title: 'Enter Hobbies',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.act1',
  url: "update.php",
  title: 'Activity 1',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.dact1',
  url: "update.php",
  title: 'Activity 1 Desc',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 

 $('#container').editable({
  container: 'body',
  selector: 'div.act2',
  url: "update.php",
  title: 'Activity 2',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.dact2',
  url: "update.php",
  title: 'Activity 2 Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
 
 $('#container').editable({
  container: 'body',
  selector: 'div.act3',
  url: "update.php",
  title: 'Activity 3',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.dact3',
  url: "update.php",
  title: 'Activity 3 Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
 
 $('#container').editable({
  container: 'body',
  selector: 'div.act4',
  url: "update.php",
  title: 'Activity 4',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.dact4',
  url: "update.php",
  title: 'Activity 4 Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
 
 
 $('#container').editable({
  container: 'body',
  selector: 'div.act5',
  url: "update.php",
  title: 'Activity 5 ',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.dact5',
  url: "update.php",
  title: 'Activity 5 description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
 
 $('#container').editable({
  container: 'body',
  selector: 'div.act6',
  url: "update.php",
  title: 'Activity 6',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.dact6',
  url: "update.php",
  title: 'Activity 6 Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
   $('#container').editable({
  container: 'body',
  selector: 'div.ts1',
  url: "update.php",
  title: 'Technical Skill 1',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
   $('#container').editable({
  container: 'body',
  selector: 'div.ts1',
  url: "update.php",
  title: 'Technical Skill 1',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
    $('#container').editable({
  container: 'body',
  selector: 'div.ts2',
  url: "update.php",
  title: 'Technical Skill 2',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 

   $('#container').editable({
  container: 'body',
  selector: 'div.ts3',
  url: "update.php",
  title: 'Technical Skill 3',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
    $('#container').editable({
  container: 'body',
  selector: 'div.ts4',
  url: "update.php",
  title: 'Technical Skill 4',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
    $('#container').editable({
  container: 'body',
  selector: 'div.tsother',
  url: "update.php",
  title: 'Other Technical Skill',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
    $('#container').editable({
  container: 'body',
  selector: 'div.institute',
  url: "update.php",
  title: 'Institute Name',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 

    $('#container').editable({
  container: 'body',
  selector: 'div.isd',
  url: "update.php",
  title: 'Start Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
     $('#container').editable({
  container: 'body',
  selector: 'div.ied',
  url: "update.php",
  title: 'End Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
      $('#container').editable({
  container: 'body',
  selector: 'div.idesc',
  url: "update.php",
  title: 'Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
     $('#container').editable({
  container: 'body',
  selector: 'div.project1',
  url: "update.php",
  title: 'Project 1',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
     $('#container').editable({
  container: 'body',
  selector: 'div.p1sd',
  url: "update.php",
  title: 'Start Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
      $('#container').editable({
  container: 'body',
  selector: 'div.p1ed',
  url: "update.php",
  title: 'End Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
      $('#container').editable({
  container: 'body',
  selector: 'div.pname1',
  url: "update.php",
  title: 'Project Name',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
      $('#container').editable({
  container: 'body',
  selector: 'div.p1desc',
  url: "update.php",
  title: 'Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.project2',
  url: "update.php",
  title: 'Project 2',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.p2sd',
  url: "update.php",
  title: 'Start Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
   $('#container').editable({
  container: 'body',
  selector: 'div.p2ed',
  url: "update.php",
  title: 'End Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
   $('#container').editable({
  container: 'body',
  selector: 'div.p2desc',
  url: "update.php",
  title: 'Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
   $('#container').editable({
  container: 'body',
  selector: 'div.p2name',
  url: "update.php",
  title: 'Project Name',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
 $('#container').editable({
  container: 'body',
  selector: 'div.projectc',
  url: "update.php",
  title: 'Current Project',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
  $('#container').editable({
  container: 'body',
  selector: 'div.pcsd',
  url: "update.php",
  title: 'Start Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
   $('#container').editable({
       format: 'MMM, YYYY',    
        viewformat: 'DD.MM.YYYY',    
        template: 'D / MMMM / YYYY',    
        combodate: {
                minYear: 1990,
                maxYear: 2030,
                minuteStep: 1
           },
  container: 'body',
  selector: 'div.pced',
  url: "update.php",
  title: 'End Date',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
   $('#container').editable({
  container: 'body',
  selector: 'div.pcdesc',
  url: "update.php",
  title: 'Description',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
   $('#container').editable({
  container: 'body',
  selector: 'div.pcname',
  url: "update.php",
  title: 'Current Project Name',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
    $('#container').editable({
  container: 'body',
  selector: 'div.quote',
  url: "update.php",
  title: 'Quote',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
    $('#container').editable({
  container: 'body',
  selector: 'div.qgivenby',
  url: "update.php",
  title: 'Given By',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 }); 
 
    $('#container').editable({
  container: 'body',
  selector: 'div.address',
  url: "update.php",
  title: 'Address',
  type: "POST",
  inputclass: 'some_class',
  //dataType: 'json',
  validate: function(value){
   if($.trim(value) == '')
   {
    return 'This field is required';
   }
  }
 });  

 
 
 
});