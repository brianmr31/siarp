
<html>
    <head>
    
        <script type = "text/javascript" language = "javascript">
        $(document).ready(function() { 
            $('.actionBar').hide();
            $('a[href="#step-1"').click(function() {
                $('.charS').hide();
                $('a[href="#step-1"').click(function() {
                    $('.charS').hide();
                });
                $('a[href="#step-3"').click(function() {
                    $(".stepContainer").height(0);
                });
                $(".stepContainer").height(300);
                $('.actionBar').hide();
                $('a[href="#step-3"').click(function() {
                    $(".stepContainer").height(0);
                });
            });
            $('a[href="#step-2"').click(function() {
                $('.charS').hide();
                $('a[href="#step-2"').click(function() {
                    $('.charS').hide();
                });
                $('a[href="#step-3"').click(function() {
                    $(".stepContainer").height(0);
                });
                $(".stepContainer").height(300);
                $('.actionBar').hide();
                $('a[href="#step-3"').click(function() {
                    $(".stepContainer").height(0);
                });
                $('.charS').hide();
            });
            $('a[href="#step-3"').click(function() {
                $(".stepContainer").height(0);
                $('.actionBar').hide();
                $('.charS').show();
                $('a[href="#step-3"').click(function() {
                    $(".stepContainer").height(0);
                    $('.actionBar').hide();
                });
            });
            $('a[href="#step-4"').click(function() {
                $('.charS').hide();
                $('a[href="#step-4"').click(function() {
                    $('.charS').hide();
                });
                $('a[href="#step-3"').click(function() {
                    $(".stepContainer").height(0);
                });
                $(".stepContainer").height(300);
                $('.actionBar').hide();
                $('a[href="#step-3"').click(function() {
                    $(".stepContainer").height(0);
                });
            });
            
            
        });
        
        google.charts.load('current', {
	    packages : [ 'corechart','bar','timeline']
	});
        var jsonD = new Array();
        var jsonS = new Array();
        var jsonT = new Array();
        $.ajax({
            url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/d.txt',
            dataType: 'json',
            async : false ,
            success: function(response) {
                    jsonD = response;
            }
        });
        $.ajax({
            url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/s.txt',
            dataType: 'json',
            async : false ,
            success: function(response) {
                    jsonS = response;
            }
        });
        $.ajax({
            url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/t.txt',
            dataType: 'json',
            async : false ,
            success: function(response) {
                    jsonT = response;
            }
        });
        function ArpScan(){
            $('#macsrc').find('option').remove();
            $('#macdst').find('option').remove();
            $('#time').find('option').remove();
            document.getElementById('Arpdiv').style.display = "block";
            document.getElementById('Mitmdiv').style.display = "none";
            document.getElementById('Netcutdiv').style.display = "none";
            document.getElementById('QScandiv').style.display = "none";
            document.getElementById('Srcdiv').style.display = "none";
            var select = document.getElementById("macsrc");
            for(var i = 0 ; i < jsonS.length ; i++ ){
                if(typeof jsonS[i] === 'object'){
                    if(typeof jsonS[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonS[i].MacSrc;
                        select.add(option, 0);
                    }
                }
            }
            var select = document.getElementById("time");
            for(var i = 0 ; i < jsonT.length ; i++ ){
                if(typeof jsonT[i] === 'object'){
                    if(typeof jsonT[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonT[i].time;
                        select.add(option, 0);
                    }
                }
            }
            $('.actionBar').hide();
        }
        function MITM(){
            $('#macsrc3').find('option').remove();
            $('#time3').find('option').remove();
            $('#macdst3').find('option').remove();
            document.getElementById('Arpdiv').style.display = "none";
            document.getElementById('Mitmdiv').style.display = "block";
            document.getElementById('Netcutdiv').style.display = "none";
            document.getElementById('QScandiv').style.display = "none";
            document.getElementById('Srcdiv').style.display = "none";
            var select = document.getElementById("macsrc3");
            for(var i = 0 ; i < jsonS.length ; i++ ){
                if(typeof jsonS[i] === 'object'){
                    if(typeof jsonS[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonS[i].MacSrc;
                        select.add(option, 0);
                    }
                }
            }
            var select = document.getElementById("macdst3");
            for(var i = 0 ; i < jsonD.length ; i++ ){
                if(typeof jsonD[i] === 'object'){
                    if(typeof jsonD[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonD[i].MacDst;
                        select.add(option, 0);
                    }
                }
            }
            var select = document.getElementById("time3");
            for(var i = 0 ; i < jsonT.length ; i++ ){
                if(typeof jsonT[i] === 'object'){
                    if(typeof jsonT[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonT[i].time;
                        select.add(option, 0);
                    }
                }
            }
            $('.actionBar').hide();
        }
        function QScan(){
            $('#macsrc2').find('option').remove();
            $('#time2').find('option').remove();
            document.getElementById('Arpdiv').style.display = "none";
            document.getElementById('Mitmdiv').style.display = "none";
            document.getElementById('Netcutdiv').style.display = "none";
            document.getElementById('QScandiv').style.display = "block";
            document.getElementById('Srcdiv').style.display = "none";
            var select = document.getElementById("macsrc2");
            for(var i = 0 ; i < jsonS.length ; i++ ){
                if(typeof jsonS[i] === 'object'){
                    if(typeof jsonS[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonS[i].MacSrc;
                        select.add(option, 0);
                    }
                }
            }
            var select = document.getElementById("time2");
            for(var i = 0 ; i < jsonT.length ; i++ ){
                if(typeof jsonT[i] === 'object'){
                    if(typeof jsonT[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonT[i].time;
                        select.add(option, 0);
                    }
                }
            }
            $('.actionBar').hide();
        }
        function Src(){
            $('#macsrc1').find('option').remove();
            $('#time1').find('option').remove();
            document.getElementById('Arpdiv').style.display = "none";
            document.getElementById('Mitmdiv').style.display = "none";
            document.getElementById('QScandiv').style.display = "none";
            document.getElementById('Netcutdiv').style.display = "none";
            document.getElementById('Srcdiv').style.display = "block";
            var select = document.getElementById("macsrc1");
            for(var i = 0 ; i < jsonS.length ; i++ ){
                if(typeof jsonS[i] === 'object'){
                    if(typeof jsonS[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonS[i].MacSrc;
                        select.add(option, 0);
                    }
                }
            }
            var select = document.getElementById("time1");
            for(var i = 0 ; i < jsonT.length ; i++ ){
                if(typeof jsonT[i] === 'object'){
                    if(typeof jsonT[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonT[i].time;
                        select.add(option, 0);
                    }
                }
            }
            $('.actionBar').hide();
        }
        function Netcut(){
            $('#macsrcN').find('option').remove();
            $('#timeN').find('option').remove();
            document.getElementById('Arpdiv').style.display = "none";
            document.getElementById('Mitmdiv').style.display = "none";
            document.getElementById('Netcutdiv').style.display = "block";
            document.getElementById('QScandiv').style.display = "none";
            document.getElementById('Srcdiv').style.display = "none";
            var select = document.getElementById("macsrcN");
            for(var i = 0 ; i < jsonS.length ; i++ ){
                if(typeof jsonS[i] === 'object'){
                    if(typeof jsonS[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonS[i].MacSrc;
                        select.add(option, 0);
                    }
                }
            }
            var select = document.getElementById("timeN");
            for(var i = 0 ; i < jsonT.length ; i++ ){
                if(typeof jsonT[i] === 'object'){
                    if(typeof jsonT[i] != 'undefined'){
                        var option = document.createElement('option');
                        option.text = option.value = jsonT[i].time;
                        select.add(option, 0);
                    }
                }
            }
            $('.actionBar').hide();
        }
        function searchNetcut(){
            macatt = document.getElementById('macsrcN');
            time = document.getElementById('timeN');
            x = new Array();
            x.push("Ip Attacked");
            x.push("Count");
            $.ajax({
                    url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/ArpScn.txt',
                    dataType: 'json',
                    async : false ,
                    success: function(response) {
                            jsonData = response;
                    }
            });
            query = '//*[MacDst!="ff:ff:ff:ff:ff:ff"]';
            search = JSON.search(jsonData,query);
            query = '//*[ArpMacDst="0:0:0:0:0:0"]';
            search = JSON.search(search,query);
            query = '//*[ArpMacSrc="'+macatt.value+'"]';
            search = JSON.search(search,query);
            query = '//*[MacSrc="'+macatt.value+'"]';
            search = JSON.search(search,query);
            query = '//*[status="Request"]';
            search = JSON.search(search,query);
            query = '//*[time="'+time.value+'"]';
            search = JSON.search(search,query);
            dataTable  = new Array();
            if(search.length != 0){
                for(var i = 0 ; i < search.length ; i++ ){
                data = new Array();
                    if(typeof search[i] === 'object'){
                        if(typeof search[i] != 'undefined'){
                            data.push(search[i].ArpIpDst);
                            data.push(search[i].value);
                        }
                    dataTable.push(this.data);
                    }
                }
                console.log(dataTable);
                dataTable.splice(0,0,x);
                dataTable.join();
                var view = new google.visualization.arrayToDataTable(dataTable);
                var options = {
                    title: "Grafik IP Tujuan",
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
                document.getElementById('SNetcut').style.display = "block";
              var chart = new google.visualization.BarChart(document.getElementById("barchart_SNetcut"));
              chart.draw(view, options);
            }else{
                document.getElementById('SNetcut').style.display = "none";
            }
        }
        function searchArpScan(){
            macsrc = document.getElementById('macsrc');
            macdst = document.getElementById('macdst');
            time = document.getElementById('time');
            x = new Array();
            x.push("Ip Destination");
            x.push("Count");
            $.ajax({
                    url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/ArpScn.txt',
                    dataType: 'json',
                    async : false ,
                    success: function(response) {
                            jsonData = response;
                    }
            });
            query = '//*[MacDst="ff:ff:ff:ff:ff:ff"]';
            search = JSON.search(jsonData,query);
            query = '//*[MacSrc="'+macsrc.value+'"]';
            search = JSON.search(search,query);
            query = '//*[time="'+time.value+'"]';
            search = JSON.search(search,query);
            dataTable  = new Array();
            if(search.length != 0){
                for(var i = 0 ; i < search.length ; i++ ){
                data = new Array();
                    if(typeof search[i] === 'object'){
                        if(typeof search[i] != 'undefined'){
                            data.push(search[i].ArpIpDst);
                            data.push(search[i].value);
                        }
                    dataTable.push(this.data);
                    }
                }
                console.log(dataTable);
                dataTable.splice(0,0,x);
                dataTable.join();
                var view = new google.visualization.arrayToDataTable(dataTable);
                var options = {
                    title: "Grafik IP Tujuan",
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
                document.getElementById('SArpdiv').style.display = "block";
              var chart = new google.visualization.BarChart(document.getElementById("barchart_SArpdiv"));
              chart.draw(view, options);
            }else{
                document.getElementById('SArpdiv').style.display = "none";
            }
        }
        function searchMITM(){
            macsrc = document.getElementById('macsrc3');
            time = document.getElementById('time3');
            macdst = document.getElementById('macdst3');
            x = new Array();
            x.push("Ip ");
            x.push("Count");
            $.ajax({
                    url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/Mitm.txt',
                    dataType: 'json',
                    async : false ,
                    success: function(response) {
                            jsonData = response;
                    }
            });
            query = '//*[time="'+time.value+'"]';
            search = JSON.search(jsonData,query);
            console.log(search);
            query = '//*[status="Reply"]';
            search = JSON.search(search,query);
            console.log(search);
            query = '//*[ArpMacDst="'+macdst.value+'"]';
            search = JSON.search(search,query);
            console.log(search);
            query = '//*[ArpMacSrc="'+macsrc.value+'"]';
            search = JSON.search(search,query);
            console.log(search);
            if(search.length != 0){
                dataTable  = new Array();
                for(var i = 0 ; i < search.length ; i++ ){
                data = new Array();
                    if(typeof search[i] === 'object'){
                        if(typeof search[i] != 'undefined'){
                            data.push(search[i].ArpIpSrc+"=>"+search[i].ArpIpDst );
                            data.push(search[i].value);
                        }
                    dataTable.push(this.data);
                    }
                }
                dataTable.splice(0,0,x);
                dataTable.join();
                console.log(dataTable);
                var view = new google.visualization.arrayToDataTable(dataTable);
                var options = {
                    title: "Grafik IP Sumber",
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
              document.getElementById('SMitmdiv').style.display = "block";
              var chart = new google.visualization.BarChart(document.getElementById("barchart_SMitmdivS"));
              chart.draw(view, options);
            }else{
                document.getElementById('SMitmdiv').style.display = "none";
            }
        }
        function searchQScan(){
            macsrc = document.getElementById('macsrc2');
            time = document.getElementById('time2');
            x = new Array();
            x.push("Mac Destination");
            x.push("Count");
            $.ajax({
                    url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/Q.txt',
                    dataType: 'json',
                    async : false ,
                    success: function(response) {
                            jsonData = response;
                    }
            });
            query = '//*[MacSrc="'+macsrc.value+'"]';
            search = JSON.search(jsonData,query);
            query = '//*[time="'+time.value+'"]';
            search = JSON.search(search,query);
            dataTable  = new Array();
            for(var i = 0 ; i < search.length ; i++ ){
                data = new Array();
                    if(typeof search[i] === 'object'){
                        if(typeof search[i] != 'undefined'){
                            data.push(search[i].MacDst);
                            data.push(search[i].value);
                        }
                    dataTable.push(this.data);
                    }
                }
                console.log(dataTable);
                dataTable.splice(0,0,x);
                dataTable.join();
                var view = new google.visualization.arrayToDataTable(dataTable);
                var options = {
                    title: "Grafik Mac Tujuan",
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
              document.getElementById('SQScandiv').style.display = "block";
              var chart = new google.visualization.BarChart(document.getElementById("barchart_SQScandiv"));
              chart.draw(view, options);
        }
        function searchSrc(){
            macsrc = document.getElementById('macsrc1');
            time = document.getElementById('time1');
            x = new Array();
            x.push("Ip Source");
            x.push("Count");
            $.ajax({
                    url: '<?php echo Yii::app()->request->baseUrl; ?>/data/TestTAFinal/<?php echo $dir; ?>/Src.txt',
                    dataType: 'json',
                    async : false ,
                    success: function(response) {
                            jsonData = response;
                    }
            });
            query = '//*[MacSrc="'+macsrc.value+'"]';
            search = JSON.search(jsonData,query);
            query = '//*[time="'+time.value+'"]';
            search = JSON.search(search,query);
            dataTable  = new Array();
            for(var i = 0 ; i < search.length ; i++ ){
                data = new Array();
                    if(typeof search[i] === 'object'){
                        if(typeof search[i] != 'undefined'){
                            data.push(search[i].ArpIpSrc);
                            data.push(search[i].value);
                        }
                    dataTable.push(this.data);
                    }
                }
                console.log(dataTable);
                dataTable.splice(0,0,x);
                dataTable.join();
                var view = new google.visualization.arrayToDataTable(dataTable);
                var options = {
                    title: "Cek IP Sumber",
                    bar: {groupWidth: "95%"},
                    legend: { position: "none" },
                };
              document.getElementById('SSrcdiv').style.display = "block";
              var chart = new google.visualization.BarChart(document.getElementById("barchart_SSrcdiv"));
              chart.draw(view, options);
        }
        function drawChartDst() {
            x = new Array();
            x.push("Mac Source");
            x.push("Count");
            search = JSON.search(jsonD,'//*');
            dataTable  = new Array();
            for(var i = 0 ; i < search.length ; i++ ){
            data = new Array();
                if(typeof search[i] === 'object'){
                    if(typeof search[i] != 'undefined'){
                        this.data.push(search[i].MacDst);
                        this.data.push(search[i].value);
                    }
                dataTable.push(this.data);
                }
            }
            dataTable.splice(0,1,x);
            dataTable.join();
            console.log(dataTable);
            var view = new google.visualization.arrayToDataTable(dataTable);
            var options = {
                title: "Mac Destination",
                bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };
          var chart = new google.visualization.BarChart(document.getElementById("barchart_valuesdst"));
          chart.draw(view, options);
        }
        function drawChartSrc() {
            x = new Array();
            x.push("Mac Source");
            x.push("Count");
            search = JSON.search(jsonS,'//*');
            dataTable  = new Array();
            for(var i = 0 ; i < search.length ; i++ ){
            data = new Array();
                if(typeof search[i] === 'object'){
                    if(typeof search[i] != 'undefined'){
                        this.data.push(search[i].MacSrc);
                        this.data.push(search[i].value);
                    }
                dataTable.push(this.data);
                }
            }
            dataTable.splice(0,1,x);
            dataTable.join();
            console.log(dataTable);
            var view = new google.visualization.arrayToDataTable(dataTable);
            var options = {
            title: "Mac Source",
            bar: {groupWidth: "95%"},
            legend: { position: "none" },
          };
          var chart = new google.visualization.BarChart(document.getElementById("barchart_valuessrc"));
          chart.draw(view, options);
          }
        </script>
    </head>
    <body >
<?php
$pattern = "[a-zA-Z0-9]"; 
$i = 0 ;?>
<div class="row">
    <div class="box box-primary"> 
        <div class="box-header with-border">
          <h3 class="box-title">Menu Filter File</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <form method="POST">
                <select name='file' onchange='this.form.submit()' class="form-control " >
                <?php 
                    if($dir != ''){
                        echo "<option value=$dir>".$dir."</option>" ;
                    }else{
                        echo "<option value=>None</option>" ;
                    }
                    foreach($files as $key => $value) {
                        if($i>1){
                            ereg ("[a-zA-Z0-9]+", $value, $regs);
                            echo "<option value=$regs[0]>".$regs[0]."</option>" ;
                            //include '/home/brian/TestTAFinal/'.$regs[0].'/Q.txt';
                        }
                    $i++;
                }
                ?>
                </select>
            </form>
        </div>
    </div>
</div>
    <?php 
        if($dir != ''){ ?>
        <script type = "text/javascript" language = "javascript">
            google.charts.setOnLoadCallback(drawChartSrc);
            google.charts.setOnLoadCallback(drawChartDst);
        </script>
        <script type="text/javascript">
    $(document).ready(function(){
    	// Smart Wizard     	
    $('#wizardNetcut').smartWizard({transitionEffect:'slideleft',
        onLeaveStep:leaveAStepCallbackwizardNetcut,
        onFinish:onFinishCallbackwizardNetcut,
        enableAllSteps: true,
        enableFinishButton:true});

      function leaveAStepCallbackwizardNetcut(obj){
        var step_num= obj.attr('rel');
        return validateStepswizardNetcut(step_num);
      }
      
      function onFinishCallbackwizardNetcut(){
       if(validateAllStepswizardNetcut()){
        $('form').submit();
       }
      }
        $('#wizardARPScan').smartWizard({transitionEffect:'slideleft',
        onLeaveStep:leaveAStepCallbackwizardARPScan,
        onFinish:onFinishCallbackwizardARPScan,
        enableAllSteps: true,
        enableFinishButton:true});

      function leaveAStepCallbackwizardARPScan(obj){
        var step_num= obj.attr('rel');
        return validateStepswizardARPScan(step_num);
      }
      
      function onFinishCallbackwizardARPScan(){
       if(validateAllStepswizardARPScan()){
        $('form').submit();
       }
      }
        $('#wizardMITM').smartWizard({transitionEffect:'slideleft',
        onLeaveStep:leaveAStepCallbackwizardMITM,
        onFinish:onFinishCallbackwizardMITM,
        enableAllSteps: true,
        enableFinishButton:true});

      function leaveAStepCallbackwizardMITM(obj){
        var step_num= obj.attr('rel');
        return validateStepswizardMITM(step_num);
      }
      
      function onFinishCallbackwizardMITM(){
       if(validateAllStepswizardMITM()){
        $('form').submit();
       }
      }
      
     function validateAllStepswizardMITM(){
       var isStepValid = true;
       if(validateStep2wizardMITM() == false){
         isStepValid = false;
         $('#wizardMITM').smartWizard('setError',{stepnum:1,iserror:true});         
       }else{
         $('#wizardMITM').smartWizard('setError',{stepnum:1,iserror:false});
       }
       if(!isStepValid){
          $('#wizardMITM').smartWizard('showMessage','Please correct the errors in the steps and continue');
       }
              
       return isStepValid;
    } 	
      function validateStepswizardMITM(step){
      var isStepValid = true;
      // validate step 1
      if(step == 2){
        if(validateStep2wizardMITM() == false ){
          isStepValid = false; 
          $('#wizardMITM').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizardMITM').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizardMITM').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }      
      return isStepValid;
    }
       function validateStep2wizardMITM(){
       var isValid = false;
       var value = $('input[name=SMITM]:checked', '#myFormMITM').val()
       if(value == 1){
           isValid = true;            
           searchMITM();
       }
       return isValid;
    }
        $('#wizardQScan').smartWizard({transitionEffect:'slideleft',
        onLeaveStep:leaveAStepCallbackwizardQScan,
        onFinish:onFinishCallbackwizardQScan,
        enableAllSteps: true,
        enableFinishButton:true});

      function leaveAStepCallbackwizardQScan(obj){
        var step_num= obj.attr('rel');
        return validateStepswizardQScan(step_num);
      }
      
      function onFinishCallbackwizardQScan(){
       if(validateAllStepswizardQScan()){
        $('form').submit();
       }
      }
        $('#wizardSrc').smartWizard({transitionEffect:'slideleft',
        onLeaveStep:leaveAStepCallbackwizardSrc,
        onFinish:onFinishCallbackwizardSrc,
        enableAllSteps: true,
        enableFinishButton:true});

      function leaveAStepCallbackwizardSrc(obj){
        var step_num= obj.attr('rel');
        return validateStepswizardSrc(step_num);
      }
      
      function onFinishCallbackwizardSrc(){
       if(validateAllStepswizardSrc()){
        $('form').submit();
       }
      }
});
    function validateAllStepswizardSrc(){
       var isStepValid = true;
       if(validateStep2wizardSrc() == false){
         isStepValid = false;
         $('#wizardSrc').smartWizard('setError',{stepnum:1,iserror:true});         
       }else{
         $('#wizardSrc').smartWizard('setError',{stepnum:1,iserror:false});
       }
       if(!isStepValid){
          $('#wizardSrc').smartWizard('showMessage','Please correct the errors in the steps and continue');
       }
              
       return isStepValid;
    } 	
      function validateStepswizardSrc(step){
      var isStepValid = true;
      // validate step 1
      if(step == 2){
        if(validateStep2wizardSrc() == false ){
          isStepValid = false; 
          $('#wizardSrc').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizardSrc').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizardSrc').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }      
      return isStepValid;
    }
       function validateStep2wizardSrc(){
       var isValid = false;
       var value = $('input[name=SArpScan]:checked', '#myFormSrc').val()
       if(value == 1){
           isValid = true;            
           searchSrc();
       }
       return isValid;
    }
    function validateAllStepswizardQScan(){
       var isStepValid = true;
       if(validateStep2wizardQScan() == false){
         isStepValid = false;
         $('#wizardQScan').smartWizard('setError',{stepnum:1,iserror:true});         
       }else{
         $('#wizardQScan').smartWizard('setError',{stepnum:1,iserror:false});
       }
       if(!isStepValid){
          $('#wizardQScan').smartWizard('showMessage','Please correct the errors in the steps and continue');
       }
              
       return isStepValid;
    } 	
      function validateStepswizardQScan(step){
      var isStepValid = true;
      // validate step 1
      if(step == 2){
        if(validateStep2wizardQScan() == false ){
          isStepValid = false; 
          $('#wizardQScan').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizardQScan').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizardQScan').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }      
      return isStepValid;
    }
       function validateStep2wizardQScan(){
       var isValid = false;
       var value = $('input[name=SQScan]:checked', '#myFormQScan').val()
       if(value == 1){
           isValid = true;            
           searchQScan();
       }
       return isValid;
    }
    function validateAllStepswizardNetcut(){
       var isStepValid = true;
       if(validateStep2wizardNetcut() == false){
         isStepValid = false;
         $('#wizardNetcut').smartWizard('setError',{stepnum:1,iserror:true});         
       }else{
         $('#wizardNetcut').smartWizard('setError',{stepnum:1,iserror:false});
       }
       if(!isStepValid){
          $('#wizardNetcut').smartWizard('showMessage','Please correct the errors in the steps and continue');
       }
              
       return isStepValid;
    } 	
      function validateStepswizardNetcut(step){
      var isStepValid = true;
      // validate step 1
      if(step == 2){
        if(validateStep2wizardNetcut() == false ){
          isStepValid = false; 
          $('#wizardNetcut').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizardNetcut').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizardNetcut').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }      
      return isStepValid;
    }
       function validateStep2wizardNetcut(){
       var isValid = false;
       var value = $('input[name=SNetcut]:checked', '#myFormNetcut').val()
       if(value == 1){
           isValid = true;            
           searchNetcut();
       }
       return isValid;
    }
    function validateAllStepswizardARPScan(){
       var isStepValid = true;
       if(validateStep2wizardARPScan() == false){
         isStepValid = false;
         $('#wizardARPScan').smartWizard('setError',{stepnum:1,iserror:true});         
       }else{
         $('#wizardARPScan').smartWizard('setError',{stepnum:1,iserror:false});
       }
       if(!isStepValid){
          $('#wizardARPScan').smartWizard('showMessage','Please correct the errors in the steps and continue');
       }
              
       return isStepValid;
    } 	
      function validateStepswizardARPScan(step){
      var isStepValid = true;
      // validate step 1
      if(step == 2){
        if(validateStep2wizardARPScan() == false ){
          isStepValid = false; 
          $('#wizardARPScan').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizardARPScan').smartWizard('setError',{stepnum:step,iserror:true});         
        }else{
          $('#wizardARPScan').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }      
      return isStepValid;
    }
       function validateStep2wizardARPScan(){
       var isValid = false;
       var value = $('input[name=SArpScan]:checked', '#myformARPScan').val()
       if(value == 1){
           isValid = true; 
           searchArpScan();
       }
       return isValid;
    }
        function heightMiss(){
            $(".stepContainer").height(0);
        }
	
</script>

<div class="row">
    <div class="box box-primary"> 
        <div class="box-header with-border">
          <h3 class="box-title">Menu Filter Mac</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <button name="ArpScan" onclick="ArpScan()" class="btn btn-info">ArpScan</button>
            <button name="MITM" onclick="MITM()" class="btn btn-info ">MITM</button>
            <button name="Netcut" onclick="Netcut()" class="btn btn-info ">Netcut</button>
            <button name="QScan" onclick="QScan()" class="btn btn-info " >QScan</button>
            <button name="Src" onclick="Src()" class="btn btn-info" >Src</button>
        </div>
<div id="Netcutdiv"  style="display:none;" class=" answer_list" > 
<br>
<div class="box box-default collapsed-box"> 
    
    <div class="box-header with-border">
      <h3 class="box-title"> Netcut Detected</h3>
    </div>
    <form action="#" method="POST" id="myFormNetcut">
      <input type='hidden' name="issubmit" value="1">
    <!-- Tabs -->
        <div id="wizardNetcut" class="swMain">
            <ul>
                <li><a href="#step-1" id="stp1">
                    <span class="stepNumber">1</span>
                    <span class="stepDesc">
                       Deskripsi<br />
                       <small>Deskripsi Netcut</small>
                    </span>
                </a></li>
                <li><a href="#step-2" id="stp2">
                    <span class="stepNumber">2</span>
                    <span class="stepDesc">
                       Opsi<br />
                       <small>Menu pilihan Netcat</small>
                    </span>
                </a></li>
                <li><a href="#step-3" id="stp3">
                    <span class="stepNumber">3</span>
                    <span class="stepDesc">
                       Grafik <br />
                       <small>Grafik hasil Netcat</small>
                    </span>
                </a></li>
                <li><a href="#step-4" id="stp4">
                    <span class="stepNumber">4</span>
                    <span class="stepDesc">
                       Kesimpulan <br />
                       <small>Kesimpulan Necut</small>
                    </span>
                </a></li>
                </ul>
                <div id="step-1">	
                <h2 class="StepTitle">Step 1: Deskripsi Netcut</h2>
                <p>
                    Fitur ini digunakan untuk mengetahui pengguna netcut yang ada pada jaringan
                    .Semua pada mac address pada jaringan diduga dicurigai sebagai pengguna netcut
                    .Pengguna netcut yang sesungguhnya mempunyai grafik ip tujuan lebih dari 1
                </p>
                <p>
                    Fitur ini mempunyi dua input yaitu :
                    <ul>
                        <li>Mac attacher</li>
                        <li> digunkaan untuk memilih mac yang diduga penyerang</li>
                        <li>Time</li>
                        <li> digunkaan untuk memilih waktu yang penyerangan </li>
                    </ul>
                </p>
                    
                </div>
                <div id="step-2">
                <h2 class="StepTitle">Step 2: Netcut Opsi</h2>	
                    <div class="row">
                        <div class="col-md-3">
                            <label>mac attacker</label>
                            <select id="macsrcN" name="macsrc" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih Mac address yang diduga menyerang jaringan 
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select id="timeN" name="time" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih waktu penyerangan yang mungkin terjadi pada jaringan 
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                            <input type="radio" name="SNetcut" id="BSNetcut" class="btn btn-info" value="1">Netcut
                        </div>    
                        <div class="col-md-6">
                            aktifkan untuk melakukan proses
                        </div>
                     </div>
                </div>                      
                <div id="step-3" >
                    
                </div> 
                <div id="step-4">
                    <h2 class="StepTitle">Step 4: Kesimpulan</h2>	
                    >Jika grafik ip tujuan yang ditampilkan lebih dari 1 berarti mac tersebut diduga sebagai pelaku netcut
                    <br>Jika tidak ada grafik maka mac address tersebut tidak diduga sebagai pelaku netcut
                </div>
      </div>
    <!-- End SmartWizard Content -->  		
    </form> 
    <div class="charS" id="SNetcut"  style="display:none;text-align: center;" >
        <div id="barchart_SNetcut"  style="width:100%;height: 500px;" class="col-md-6"></div>
    </div>
</div>
</div>
            
            <div id="Arpdiv"  style="display:none;" class=" answer_list" > 
                <br>
                <div class="box box-default collapsed-box"> 
                    <div class="box-header with-border">
                      <h3 class="box-title"> ARP SCAN</h3>
                    </div>
    <form action="#" method="POST" id="myformARPScan">
    <input type='hidden' name="issubmit" value="1">
    <!-- Tabs -->
        <div id="wizardARPScan" class="swMain">
            <ul>
                <li><a href="#step-1">
                    <span class="stepNumber">1</span>
                    <span class="stepDesc">
                       Deskripsi<br />
                       <small>Deskripsi ARPScan</small>
                    </span>
                </a></li>
                <li><a href="#step-2">
                    <span class="stepNumber">2</span>
                    <span class="stepDesc">
                       Opsi<br />
                       <small>Menu pilihan ARPScan</small>
                    </span>
                </a></li>
                <li><a href="#step-3">
                    <span class="stepNumber">3</span>
                    <span class="stepDesc">
                       Grafik <br />
                       <small>Grafik hasil ARPScan</small>
                    </span>
                </a></li>
                <li><a href="#step-4">
                    <span class="stepNumber">4</span>
                    <span class="stepDesc">
                       Kesimpulan <br />
                       <small>Kesimpulan ARPScan</small>
                    </span>
                </a></li>
                </ul>
                <div id="step-1">	
                <h2 class="StepTitle">Step 1: Deskripsi ARPScan</h2>
                <p>
                    Fitur ini digunakan untuk mengetahui pengguna melakukan scanning yang ada pada jaringan
                    .Scanning pada jaringan sendiri biasa dilakukan secara automatis oleh pengguna netcut, ettercap dan tool jaringan lainnya
                    .Semua pada mac address pada jaringan diduga dicurigai sebagai melakukan scanning. 
                    .Pelaku scanning yang sesungguhnya mempunyai grafik ip tujuan dapat mempunyai ip tujuan yang banyak ketika melakukan full scanning,
                    .Namun juga dapat mempunyai ip tujuan sedikit karena hanya menyecan beberapa ip atau 1 ip saja dijaringan
                </p>
                <p>
                    Fitur ini mempunyi dua input yaitu :
                    <ul>
                        <li>Mac sumber</li>
                        <li> digunkaan untuk memilih mac yang diduga melakukan scanning</li>
                        <li>Time</li>
                        <li> digunkaan untuk memilih waktu yang penyerangan </li>
                    </ul>
                </p>
                </div>
                <div id="step-2">
                <h2 class="StepTitle">Step 2: ARPScan Opsi</h2>	
                    <div class="row">
                        <div class="col-md-3">
                            <label>mac Source</label>
                            <select id="macsrc" name="macsrc" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih mac address yang diduga melakukan scanning ip pada jaringan
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select id="time" name="time" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih waktu penyerangan yang mungkin terjadi pada jaringan 
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                            <input type="radio" name="SArpScan" class="btn btn-info" value="1">ARPScan
                            
                        </div>    
                        <div class="col-md-6">
                            aktifkan untuk melakukan proses
                        </div>
                     </div>
                </div>            
                
                <div id="step-3"  >
                   
                </div> 
                <div id="step-4">
                    <h2 class="StepTitle">Step 4: Kesimpulan</h2>	
                    >semua host dapat dikatakan melakukan scanning ketika mempunyai ip tujuan yang banyak pada grafik 
                    <br>>dicurigai melakukan penyerangan ketika hanya ada beberapa ip pada grafik
                    <br>>Jika tidak ada grafik maka mac address tersebut tidak diduga sebagai pelaku scanning 
                </div>
                
      </div>
    <!-- End SmartWizard Content -->  		
    </form>
                <div class="charS" id="SArpdiv"  style="display:none;text-align: center;" >
                    <div id="barchart_SArpdiv" style="width:100%;height: 500px;" class="col-md-6" ></div>
                </div>
                </div>
            </div>
            <div id="Mitmdiv"  style="display:none;" class="answer_list " > 
                <br>
                <div class="box box-default collapsed-box"> 
                    <div class="box-header with-border">
                      <h3 class="box-title"> MITM</h3>
                    </div>
    <form action="#" method="POST" id="myFormMITM">
    <input type='hidden' name="issubmit" value="1">
    <!-- Tabs -->
        <div id="wizardMITM" class="swMain">
            <ul>
                <li><a href="#step-1">
                    <span class="stepNumber">1</span>
                    <span class="stepDesc">
                       Deskripsi<br />
                       <small>Deskripsi MITM</small>
                    </span>
                </a></li>
                <li><a href="#step-2">
                    <span class="stepNumber">2</span>
                    <span class="stepDesc">
                       Opsi<br />
                       <small>Menu pilihan MITM</small>
                    </span>
                </a></li>
                <li><a href="#step-3">
                    <span class="stepNumber">3</span>
                    <span class="stepDesc">
                       Grafik <br />
                       <small>Grafik hasil MITM</small>
                    </span>
                </a></li>
                <li><a href="#step-4">
                    <span class="stepNumber">4</span>
                    <span class="stepDesc">
                       Kesimpulan <br />
                       <small>Kesimpulan MITM</small>
                    </span>
                </a></li>
                </ul>
                <div id="step-1">	
                <h2 class="StepTitle">Step 1: Deskripsi MITM</h2>
                <p>
                    Fitur ini digunakan untuk mengetahui pengguna melakukan <b>man in the middle attack</b> (MITM) yang ada pada jaringan                    
                    .Semua pada mac address pada jaringan diduga dicurigai sebagai melakukan <b>man in the middle attack</b> (MITM). 
                    .Pelaku <b>man in the middle attack</b> (MITM) yang sesungguhnya mempunyai grafik ip tujuan dapat mempunyai ip tujuan yang banyak ketika melakukan full scanning,
                    .Namun juga dapat mempunyai ip tujuan sedikit karena hanya menyecan beberapa ip atau 1 ip saja dijaringan
                </p>
                <p>
                    Fitur ini mempunyi dua input yaitu :
                    <ul>
                        <li>Mac sumber</li>
                        <li> digunkaan untuk memilih mac yang diduga melakukan <b>man in the middle attack</b> (MITM) </li>
                        <li>Mac tujuan</li>
                        <li> digunkaan untuk memilih mac yang diduga sebagai target serangan (gateway) Pilih lah mac gateway karena serangan man in the middle attack pasti menyerang gateway</li>
                        <li>Time</li>
                        <li> digunkaan untuk memilih waktu yang penyerangan </li>
                    </ul>
                </p>
                </div>
                <div id="step-2">
                <h2 class="StepTitle">Step 2: MITM Opsi</h2>	
                    <div class="row">
                        <div class="col-md-3">
                            <label>Mac Src</label><br>
                            <select id="macsrc3" name="macsrc" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih mac address yang diduga melakukan  <b>man in the middle attack</b> (MITM)
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <label>Mac Dst</label><br>
                            <select id="macdst3" name="macsrc" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih mac address gateway karena serangan man in the middle attack selalu menyerang gateway
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select id="time3" name="time" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih waktu penyerangan yang mungkin terjadi pada jaringan
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                            <input type="radio" name="SMITM" class="btn btn-info" value="1">MITM
                        </div>    
                        <div class="col-md-6">
                            aktifkan untuk melakukan proses
                        </div>
                     </div>
                </div>                      
                <div id="step-3" >
                    
                </div> 
                <div id="step-4">
                    <h2 class="StepTitle">Step 4: Kesimpulan</h2>	
                    >Ketika ketika muncul grafik maka mac src yang dipilih melakukan serangan man in the middle attack
                    <br>>Ketika tidak muncul table mac src yang dipilih tidak melakukan serangan man in the middle attack
                </div>
      </div>
    <!-- End SmartWizard Content -->  		
    </form>
            <div class="charS" id="SMitmdiv"  style="display:none;text-align: center;" >
                <div id="barchart_SMitmdivS" style="width:100%;height: 500px;"  class="col-md-6" ></div>
            </div>
                </div>
            </div>
            <div id="QScandiv"  style="display:none;" class="answer_list" >
                <br>
                <div class="box box-default collapsed-box"> 
                    <div class="box-header with-border">
                      <h3 class="box-title"> Quick SCAN</h3>
                    </div>
    <form action="#" method="POST" id="myFormQScan">
    <input type='hidden' name="issubmit" value="1">
    <!-- Tabs -->
        <div id="wizardQScan" class="swMain">
            <ul>
                <li><a href="#step-1">
                    <span class="stepNumber">1</span>
                    <span class="stepDesc">
                       Deskripsi<br />
                       <small>Deskripsi QScan</small>
                    </span>
                </a></li>
                <li><a href="#step-2">
                    <span class="stepNumber">2</span>
                    <span class="stepDesc">
                       Opsi<br />
                       <small>Menu pilihan QScan</small>
                    </span>
                </a></li>
                <li><a href="#step-3">
                    <span class="stepNumber">3</span>
                    <span class="stepDesc">
                       Grafik <br />
                       <small>Grafik hasil QScan</small>
                    </span>
                </a></li>
                <li><a href="#step-4">
                    <span class="stepNumber">4</span>
                    <span class="stepDesc">
                       Kesimpulan <br />
                       <small>Kesimpulan QScan</small>
                    </span>
                </a></li>
                </ul>
                <div id="step-1">	
                <h2 class="StepTitle">Step 1: Deskripsi QScan</h2>
                    <p>
                        Fitur ini digunakan untuk melihat jumlah mac sumber dan tujuannya pada jaringan sebagai pedoman untuk mengetahui host mana yang sangat aktif pada jaringan
                        .Grafik yang dituntukan adalah grafik mac tujuan dari mac sumber yang telah dipilih
                    </p>
                    <p>
                        Fitur ini mempunyi dua input yaitu :
                        <ul>
                            <li>Mac sumber</li>
                            <li> digunakan untuk memilih mac address host</li>
                            <li>Time</li>
                            <li> digunkaan untuk memilih waktu interaksi host tersebut </li>
                        </ul>
                    </p>
                </div>
                <div id="step-2">
                <h2 class="StepTitle">Step 2: QScan Opsi</h2>	
                       <div class="row">
                        <div class="col-md-3">
                            <label>mac Source</label>
                            <select id="macsrc2" name="macsrc" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih mac address host
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select id="time2" name="time" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih waktu interaksi host tersebut pada jaringan 
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                            <input type="radio" name="SQScan" class="btn btn-info" value="1">QScan
                        </div>    
                        <div class="col-md-6">
                            aktifkan untuk melakukan proses
                        </div>
                     </div>
                </div>                      
                <div id="step-3" >
                </div> 
                <div id="step-4">
                    <h2 class="StepTitle">Step 4: Kesimpulan</h2>	
                    semkin banyak paket data yang ada semakin aktif host tersebut
                </div>
      </div>
    <!-- End SmartWizard Content -->  		
    </form>
            <div class="charS" id="SQScandiv"  style="display:none;text-align: center;" >
                <div id="barchart_SQScandiv" style="width:100%;height: 500px;" class="col-md-6" ></div>
            </div>
                </div>
            </div>
            <div id="Srcdiv"  style="display:none;" class="answer_list" > 
                <br>
                <div class="box box-default collapsed-box"> 
                    <div class="box-header with-border">
                      <h3 class="box-title"> SOURCE MAC</h3>
                    </div>
    <form action="#" method="POST" id="myFormSrc">
    <input type='hidden' name="issubmit" value="1">
    <!-- Tabs -->
        <div id="wizardSrc" class="swMain">
            <ul>
                <li><a href="#step-1">
                    <span class="stepNumber">1</span>
                    <span class="stepDesc">
                       Deskripsi<br />
                       <small>Deskripsi SOURCE MAC</small>
                    </span>
                </a></li>
                <li><a href="#step-2">
                    <span class="stepNumber">2</span>
                    <span class="stepDesc">
                       Opsi<br />
                       <small>Menu pilihan SOURCE MAC</small>
                    </span>
                </a></li>
                <li><a href="#step-3">
                    <span class="stepNumber">3</span>
                    <span class="stepDesc">
                       Grafik <br />
                       <small>Grafik hasil SOURCE MAC</small>
                    </span>
                </a></li>
                <li><a href="#step-4">
                    <span class="stepNumber">4</span>
                    <span class="stepDesc">
                       Kesimpulan <br />
                       <small>Kesimpulan SOURCE MAC</small>
                    </span>
                </a></li>
                </ul>
                <div id="step-1">	
                <h2 class="StepTitle">Step 1: Deskripsi SOURCE MAC</h2>
                    <p>
                        Fitur ini digunakan untuk melihat jumlah mac sumber dan penggunaan ip nya pada jaringan.
                         host yang mempunyai ip yang banyak pada mac sumber yang sama bisa melakukan <b> man in the middle attack </b>
                        .grafik yang ditampilkan berisi ip yang dipakai oleh mac address yang dipilih
                    </p>
                    <p>
                        Fitur ini mempunyi dua input yaitu :
                        <ul>
                            <li>Mac sumber</li>
                            <li> digunakan untuk memilih mac address host yang ingin dicek ip nya</li>
                            <li>Time</li>
                            <li> digunkaan untuk memilih waktu interaksi host tersebut </li>
                        </ul>
                    </p>
                </div>
                <div id="step-2">
                <h2 class="StepTitle">Step 2: SOURCE MAC Opsi</h2>	
                       <div class="row">
                        <div class="col-md-3">
                            <label>mac Source</label>
                            <select id="macsrc1" name="macsrc" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih Mac address host yang ingin dicek ip nya
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>time &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select id="time1" name="time" class="form-control "></select>
                        </div>
                        <div class="col-md-6">
                            Pilih waktu penyerangan yang mungkin terjadi pada jaringan 
                        </div>
                       </div>
                       <div class="row">
                        <div class="col-md-3">
                            <label>submit &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
                            <input type="radio" name="SArpScan" class="btn btn-info" value="1">SrcScan Proses
                        </div>    
                        <div class="col-md-6">
                            aktifkan untuk melakukan proses
                        </div>
                     </div>
                </div>                      
                <div id="step-3" >
                </div> 
                <div id="step-4">
                    <h2 class="StepTitle">Step 4: Kesimpulan</h2>	
                    semakin banyak ip yang dipakai oleh mac yang sama, mac tersebut bisa diduga melakukan kegiantan penyerangan pada jaringan
                </div>
      </div>
    <!-- End SmartWizard Content -->  		
    </form>
            <div class="charS" id="SSrcdiv"  style="display:none;text-align: center;" >
               <div id="barchart_SSrcdiv" style="width:100%;height: 500px;" class="col-md-6" ></div>
            </div>
                </div>
            </div>
    </div>
</div>
 <?php   //echo Yii::app()->request->baseUrl.'/data/TestTAFinal/'.$dir.'/s.txt'; ?>
<?php }

?>
</div>
<div class="row">
    <div class="box box-primary"> 
        <div class="box-header with-border">
          <h3 class="box-title">ARP Basic Chart</h3>
          <div class="box-tools pull-right">
            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
            <div id="barchart_valuessrc" style="width: 50%px; height: 500px;" class="col-md-6"></div>
            <div id="barchart_valuesdst" style="width: 50%px; height: 500px;" class="col-md-6"></div>
        </div>
    </div>

</div>
</body>
