@extends('layouts.frontsite')

@section('head')
    
<script type="text/javascript">	
    $(window).load(function(){
    
            
                $('div.what1').click(function() {
                    $('div.what1').toggleClass('active');
                    $('div.line1').toggleClass('active');
                    $('div.info1').toggleClass('active');
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info1').hasClass('active'))
                    {			
                        $('div.what1').toggleClass('active');						
                        $('div.line1').toggleClass('active');
                        $('div.info1').toggleClass('active');			
                    }
                });
            
                $('div.what2').click(function() {
                    $('div.what2').toggleClass('active');
                    $('div.line2').toggleClass('active');
                    $('div.info2').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info2').hasClass('active'))
                    {			
                        $('div.what2').toggleClass('active');						
                        $('div.line2').toggleClass('active');
                        $('div.info2').toggleClass('active');			
                    }
                });
            
                $('div.what3').click(function() {
                    $('div.what3').toggleClass('active');
                    $('div.line3').toggleClass('active');
                    $('div.info3').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info3').hasClass('active'))
                    {			
                        $('div.what3').toggleClass('active');						
                        $('div.line3').toggleClass('active');
                        $('div.info3').toggleClass('active');			
                    }
                });
            
                $('div.what4').click(function() {
                    $('div.what4').toggleClass('active');
                    $('div.line4').toggleClass('active');
                    $('div.info4').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info4').hasClass('active'))
                    {			
                        $('div.what4').toggleClass('active');						
                        $('div.line4').toggleClass('active');
                        $('div.info4').toggleClass('active');			
                    }
                });
            
                $('div.what5').click(function() {
                    $('div.what5').toggleClass('active');
                    $('div.line5').toggleClass('active');
                    $('div.info5').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info5').hasClass('active'))
                    {			
                        $('div.what5').toggleClass('active');						
                        $('div.line5').toggleClass('active');
                        $('div.info5').toggleClass('active');			
                    }
                });
            
                $('div.what6').click(function() {
                    $('div.what6').toggleClass('active');
                    $('div.line6').toggleClass('active');
                    $('div.info6').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info6').hasClass('active'))
                    {			
                        $('div.what6').toggleClass('active');						
                        $('div.line6').toggleClass('active');
                        $('div.info6').toggleClass('active');			
                    }
                });
            
                $('div.what7').click(function() {
                    $('div.what7').toggleClass('active');
                    $('div.line7').toggleClass('active');
                    $('div.info7').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info7').hasClass('active'))
                    {			
                        $('div.what7').toggleClass('active');						
                        $('div.line7').toggleClass('active');
                        $('div.info7').toggleClass('active');			
                    }
                });
            
                $('div.what8').click(function() {
                    $('div.what8').toggleClass('active');
                    $('div.line8').toggleClass('active');
                    $('div.info8').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info9').hasClass('active'))
                                {			
                                    $('div.what9').toggleClass('active');
                                    $('div.line9').toggleClass('active');
                                    $('div.info9').toggleClass('active');			
                                }if(!$('div.info8').hasClass('active'))
                    {			
                        $('div.what8').toggleClass('active');						
                        $('div.line8').toggleClass('active');
                        $('div.info8').toggleClass('active');			
                    }
                });
            
                $('div.what9').click(function() {
                    $('div.what9').toggleClass('active');
                    $('div.line9').toggleClass('active');
                    $('div.info9').toggleClass('active');
                                if($('div.info1').hasClass('active'))
                                {			
                                    $('div.what1').toggleClass('active');
                                    $('div.line1').toggleClass('active');
                                    $('div.info1').toggleClass('active');			
                                }
                                if($('div.info2').hasClass('active'))
                                {			
                                    $('div.what2').toggleClass('active');
                                    $('div.line2').toggleClass('active');
                                    $('div.info2').toggleClass('active');			
                                }
                                if($('div.info3').hasClass('active'))
                                {			
                                    $('div.what3').toggleClass('active');
                                    $('div.line3').toggleClass('active');
                                    $('div.info3').toggleClass('active');			
                                }
                                if($('div.info4').hasClass('active'))
                                {			
                                    $('div.what4').toggleClass('active');
                                    $('div.line4').toggleClass('active');
                                    $('div.info4').toggleClass('active');			
                                }
                                if($('div.info5').hasClass('active'))
                                {			
                                    $('div.what5').toggleClass('active');
                                    $('div.line5').toggleClass('active');
                                    $('div.info5').toggleClass('active');			
                                }
                                if($('div.info6').hasClass('active'))
                                {			
                                    $('div.what6').toggleClass('active');
                                    $('div.line6').toggleClass('active');
                                    $('div.info6').toggleClass('active');			
                                }
                                if($('div.info7').hasClass('active'))
                                {			
                                    $('div.what7').toggleClass('active');
                                    $('div.line7').toggleClass('active');
                                    $('div.info7').toggleClass('active');			
                                }
                                if($('div.info8').hasClass('active'))
                                {			
                                    $('div.what8').toggleClass('active');
                                    $('div.line8').toggleClass('active');
                                    $('div.info8').toggleClass('active');			
                                }if(!$('div.info9').hasClass('active'))
                    {			
                        $('div.what9').toggleClass('active');						
                        $('div.line9').toggleClass('active');
                        $('div.info9').toggleClass('active');			
                    }
                });		$('div.what1').toggleClass('active');					
        $('div.line1').toggleClass('active');
        $('div.info1').toggleClass('active');
    });  

        
    </script>
    
    <style>
    
                div.info1 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info1.active {
                    max-height: 1000px;	
                }
                    div.line1 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line1.active {
                        height: 83px;
                    }div.what1 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what1.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what1:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info2 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info2.active {
                    max-height: 1000px;	
                }
                    div.line2 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line2.active {
                        height: 57px;
                    }div.what2 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what2.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what2:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info3 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info3.active {
                    max-height: 1000px;	
                }
                    div.line3 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line3.active {
                        height: 83px;
                    }div.what3 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what3.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what3:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info4 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info4.active {
                    max-height: 1000px;	
                }
                    div.line4 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line4.active {
                        height: 57px;
                    }div.what4 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what4.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what4:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info5 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info5.active {
                    max-height: 1000px;	
                }
                    div.line5 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line5.active {
                        height: 83px;
                    }div.what5 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what5.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what5:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info6 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info6.active {
                    max-height: 1000px;	
                }
                    div.line6 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line6.active {
                        height: 57px;
                    }div.what6 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what6.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what6:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info7 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info7.active {
                    max-height: 1000px;	
                }
                    div.line7 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line7.active {
                        height: 83px;
                    }div.what7 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what7.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what7:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info8 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info8.active {
                    max-height: 1000px;	
                }
                    div.line8 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line8.active {
                        height: 57px;
                    }div.what8 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what8.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what8:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                div.info9 {
                    width:960px;
                    max-height: 0px;
                    overflow: hidden;
                }

                div.info9.active {
                    max-height: 1000px;	
                }
                    div.line9 {
                        background-image:url("{{ asset('images/line-history.png') }}");
                        width:3px;
                        height:0px;
                        position:absolute;
                    }
                    
                    div.line9.active {
                        height: 83px;
                    }div.what9 {
                    background-image:url("{{ asset('images/history-off.png') }}");
                    width:46px;
                    height:31px;
                    cursor:pointer;
                    font-family:open sans;
                    font-size:10px;
                    color:#ffffff;
                    padding-top:17px;
                    position:absolute;
                }
                
                div.what9.active {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }
                
                div.what9:hover {
                    background-image:url("{{ asset('images/history-on.png') }}");
                }		
    </style>
@endsection

@section('content')
@include('layouts.partial.profile-head')
    
</table>			
<div style="font-family:open sans;font-weight:700;color:#326a95;font-size:29px;margin-top:20px;">
    Company History
</div>
<div style="font-family:open sans;color:#4a4a4a;font-size:14px;text-transform:uppercase;">
    Know More about our history
</div>
<div>
    <img src="{{ asset('images/line-blue.jpg') }}">
</div>

<div style="background-image:url({{ asset('images/history.png') }});width:744px;height:153px;margin:20px 0 0 0;position:relative;">
    <div style="font-family:open sans;font-weight:600;color:#326a95;font-size:20px;position:absolute;top:0px;left:28px;">
        START
    </div>

        <div class="what1" style="top:20px;left:35px;">	
            1974
        </div>				
        <div class="line1" style="bottom:8px;left:56px;">	
        </div>
        <div class="what2" style="top:50px;left:125px;">	
            1975
        </div>				
        <div class="line2" style="bottom:8px;left:146px;">	
        </div>
        <div class="what3" style="top:20px;left:215px;">	
            1982
        </div>				
        <div class="line3" style="bottom:8px;left:236px;">	
        </div>
        <div class="what4" style="top:50px;left:305px;">	
            1984
        </div>				
        <div class="line4" style="bottom:8px;left:326px;">	
        </div>
        <div class="what5" style="top:20px;left:395px;">	
            1994
        </div>				
        <div class="line5" style="bottom:8px;left:416px;">	
        </div>
        <div class="what6" style="top:50px;left:485px;">	
            1997
        </div>				
        <div class="line6" style="bottom:8px;left:506px;">	
        </div>
        <div class="what7" style="top:20px;left:575px;">	
            2001
        </div>				
        <div class="line7" style="bottom:8px;left:596px;">	
        </div>
        <div class="what8" style="top:50px;left:665px;">	
            2015
        </div>				
        <div class="line8" style="bottom:8px;left:686px;">	
        </div>
        <div class="what9" style="top:20px;left:755px;">	
            2020
        </div>				
        <div class="line9" style="bottom:8px;left:776px;">	
        </div>								
    <div style="font-family:open sans;font-weight:600;color:#326a95;font-size:20px;position:absolute;top:25px;left:664px;">
        NOW
    </div>
</div>


        <div class="info1">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [1974] Berdiri PT. SURYA TIMUR SAKTI JATIM
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                PT. SURYA TIMUR SAKTI JATIM memulai bisnisnya di jalan Embong Ploso 23 Surabaya dengan nama 'Yamaha Pool' dengan jumlah karyawan 16 orang
            </div>
        </div>
        <div class="info2">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [1975] Mulainya Pertumbuhan Perusahaan
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                Performa perusahaan semakin bertumbuh pesat diiringi dengan pergantian nama menjadi 'YMAHA HARAPAN JATIM' dan perpindahan kantornya ke jalan Kranggan 102 Surabaya
            </div>
        </div>
        <div class="info3">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [1982] Relokasi Tempat
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                Selama 7 tahun YAMAHA HARAPAN JATIM bertempat di jalan Kranggan 102 sebelum pada tahun 1982 berpindah kantor lagi ke jalan Kedungdoro 62-64 Surabaya
            </div>
        </div>
        <div class="info4">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [1984] Perubahan Nama Perusahaan
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                Pada Tanggal 10 September 1984 nama perusahaan YAMAHA HARAPAN JATIM resmi berganti nama menjadi PT. SURYA TIMUR SAKTI JATIM.
            </div>
        </div>
        <div class="info5">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [1994] Berdiri PT. RODA SAKTI SURYARAYA
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                PT. RODA SAKTI SURYARAYA didirikan untuk meningkatkan pelayanan terutama di area Malang, Jember dan Nusa Tenggara
            </div>
        </div>
        <div class="info6">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [1997] Relokasi Tempat Tahap  II
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                Seiring dengan peningkatan pelayanan dan kinerjanya, pada tahun 1997, kantor PT. SURYA TIMUR SAKTI JATIM berpindah jalan Tegalsari 60 Surabaya
            </div>
        </div>
        <div class="info7">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [2001] Peresmian Kantor Pusat PT.SURYA TIMUR SAKTI JATIM dan PT. RODA SAKTI SURYA RAYA
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                Pada awal tahun 2001, tepatnya pada tanggal 1 Januari, diresmikan Gedung RSSR dilokasi yang strategis dan lebih luas yaitu di CBD (Central Bussiness District) kota Surabaya, Jalan Basuki Rahmat 45-47 sebagai kantor pusat PT.SURYA TIMUR SAKTI JATIM dan PT. RODA SAKTI SURYA RAYA
            </div>
        </div>
        <div class="info8">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [2015] 41 tahun berdiri
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                41 tahun kebersamaan kami PT. Surya Timur Sakti Jatim dan PT. Roda Sakti Surya Raya yang senantiasa fokus kepada kepuasaan pelanggan dan terdepan dalam pelayanan
            </div>
        </div>
        <div class="info9">
            <div style="width:780px;font-family:open sans;font-weight:600;color:#326a95;font-size:29px;line-height:30px;margin:20px 0 0 0;">
                [2020] SAMPAI SEKARANG
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-weight:600;font-size:15px;line-height:20px;margin:15px 0 10px 0;">
                
            </div>
            <div style="width:780px;font-family:open sans;color:#4a4a4a;font-size:12px;line-height:20px;">
                
            </div>
        </div>						

</div>
<img src="{{ asset('images/profile-shadow.png') }}">
</div>	

<div style="background-image:url({{ asset('images/bg-profile.png') }});height:44px;">	
</div>	
<div style="font-family:open sans;font-weight:700;color:#326a95;font-size:36px;margin-top:20px;">
Yamaha Jatim Services
</div>
<div style="font-family:open sans;font-weight:600;color:#4a4a4a;font-size:16px;text-transform:uppercase;margin:0 0 20px 0;">
Corporate profile and story about Yamaha Jatim
</div>


<div style="font-family:open sans;color:#444444;font-size:12px;width:830px;line-height:20px;">
PT SURYA TIMUR SAKTI JATIM sebagai dealer motor resmi YAMAHA di Surabaya telah berkomitmen untuk memberikan pelayanan yang terbaik kepada seluruh konsumen YAMAHA. Kami dibantu oleh tenaga ahli yang telah berpengalaman dalam bidangnya selama bertahun-tahun dan telah mendapatkan pendidikan dan sertifikasi secara resmi.
</div>

<table style="line-height:20px;margin:40px 0 50px 0;">
<tr>
<td style="padding:0 20px 0 20px;">
    <img src="{{ asset('images/profile-separator.png') }}">
</td>
<td width=170px align=center valign=top>
    <div>
        <img src="{{ asset('data/service_pic/1.png') }}" width=78px>				
    </div>
    <div style="font-family:ralewaymedium;color:#326a95;font-size:14px;margin-top:10px;text-transform:uppercase;">
        TRUSTED
    </div>
    <div style="font-family:open sans;color:#444444;font-size:11px;margin-top:10px;">
        Mutu dan Kualitas dari produk YAMAHA telah terjamin dan diakui dunia selama berpuluh-puluh tahun.
    </div>
</td>
<td style="padding:0 20px 0 20px;">
    <img src="{{ asset('images/profile-separator.png') }}">
</td>
<td width=170px align=center valign=top>
    <div>
        <img src="{{ asset('data/service_pic/2.png') }}" width=78px>		
    </div>
    <div style="font-family:ralewaymedium;color:#326a95;font-size:14px;margin-top:10px;text-transform:uppercase;">
        EXPERIENCED
    </div>
    <div style="font-family:open sans;color:#444444;font-size:11px;margin-top:10px;">
        Kami menyediakan tenaga-tenaga ahli yang siap untuk melayani seluruh konsumen YAMAHA.
    </div>
</td>
<td style="padding:0 20px 0 20px;">
    <img src="{{ asset('images/profile-separator.png') }}">
</td>
<td width=170px align=center valign=top>
    <div>
        <img src="{{ asset('data/service_pic/3.png') }}" width=78px>		
    </div>
    <div style="font-family:ralewaymedium;color:#326a95;font-size:14px;margin-top:10px;text-transform:uppercase;">
        INNOVATION
    </div>
    <div style="font-family:open sans;color:#444444;font-size:11px;margin-top:10px;">
        Produk YAMAHA selalu memberikan inovasi-inovasi baru sehingga produk kami selalu mengikuti perkembangan jaman dan trend yang ada saat ini.
    </div>
</td>
<td style="padding:0 20px 0 20px;">
    <img src="{{ asset('images/profile-separator.png') }}">
</td>
<td width=170px align=center valign=top>
    <div>
        <img src="{{ asset('data/service_pic/4.png') }}" width=78px>		
    </div>
    <div style="font-family:ralewaymedium;color:#326a95;font-size:14px;margin-top:10px;text-transform:uppercase;">
        RELIABLE
    </div>
    <div style="font-family:open sans;color:#444444;font-size:11px;margin-top:10px;">
        Seluruh Produk YAMAHA dapat dipercaya karena kami selalu mengutamakan kualitas yang terbaik untuk konsumen kami.
    </div>
</td>
<td style="padding:0 20px 0 20px;">
    <img src="{{ asset('images/profile-separator.png') }}">
</td>
</tr>
</table>		

<hr style="border:0px solid;border-bottom:1px solid #efefef">

@include('layouts.partial.profile-footer')
@endsection