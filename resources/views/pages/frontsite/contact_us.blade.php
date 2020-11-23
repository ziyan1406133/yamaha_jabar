 @extends('layouts.frontsite')

 @section('head')
     
 @endsection

 @section('content')
    <hr style="border:0px solid;border-bottom:0px solid #c8c8c8;padding:0 0 0 0;margin:0 0 0 0;">	</div>
        <img src="{{ asset('data/contact/1.jpg') }}" style="margin:20px 0 0 0;">	
        <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:36px;margin-top:20px;">
            Hubungi Kami :
        </div>
        <div style="font-family:open sans;font-weight:600;color:#4a4a4a;font-size:16px;text-transform:uppercase;">
            Info Pemesanan dan Keluhan Pelanggan :
        </div>
        <div style="margin-bottom:20px;">
            <img src="{{ asset('images/line-blue.jpg') }}">
        </div>
        
        
        <form id = "contactform" method="post" action = "{{ route('message.store') }}"> 		
            @csrf	
        <table width=960px border=0 style="line-height:20px;margin:40px 0 50px 0;">
        <tr>
            <td width=320px>
                <input type="text" name="name" required placeholder="Name" value="" style="margin:0px 0px 15px 0px;font-family:ralewaylight;font-size:13px;border:1px solid #dedede;padding:10px 20px 10px 20px;width:250px;border-radius:5px;"/>
                <input type="email" name="email" required placeholder="Email Address" value="" style="margin:0px 0px 15px 0px;font-family:ralewaylight;font-size:13px;border:1px solid #dedede;padding:10px 20px 10px 20px;width:250px;border-radius:5px;"/>
                <input type="text" name="company" placeholder="Company" value="" style="margin:0px 0px 15px 0px;font-family:ralewaylight;font-size:13px;border:1px solid #dedede;padding:10px 20px 10px 20px;width:250px;border-radius:5px;"/>
                <input type="text" name="phone" placeholder="Telp" value="" style="margin:0px 0px 15px 0px;font-family:ralewaylight;font-size:13px;border:1px solid #dedede;padding:10px 20px 10px 20px;width:250px;border-radius:5px;"/>
                <input type="text" name="fax" placeholder="Fax" value="" style="margin:0px 0px 15px 0px;font-family:ralewaylight;font-size:13px;border:1px solid #dedede;padding:10px 20px 10px 20px;width:250px;border-radius:5px;"/>
            </td>
            <td valign=top>
                <textarea name="content" required placeholder="Message" style="width:300px;height:200px;font-family:ralewaylight;font-size:13px;border:1px solid #dedede;border:1px solid #dedede;padding:10px 20px 10px 20px;border-radius:5px;resize:none;" maxlength="255"/></textarea>

            </td>
            <td rowspan=2 valign=top>
            
                    <div style="border:1px solid #ccc;padding:20px;border-radius:5px;background-color:#ffffff;">			
                        <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:20px;margin:0 0 10px 0;">
                            Kontak Kami :
                        </div>
                        <div style="font-family:open sans;color:#4a4a4a;font-size:13px;">
                            PT ARISTA JAYA LESTARI <br />
    Jl. Ipik Gandamanah No.176, <br />
    Munjuljaya, Purwakarta, Jawa Barat 41117 <br />
    Tlp & Wa : 0821 2399 7870<br />
    fb & Ig	 : @promoyamahajabar<br />
    
                        </div>
                        <div style="font-family:open sans;font-weight:700;color:#326a95;font-size:20px;margin:40px 0 10px 0;">
                            Jam Buka
                        </div>
                        <div style="font-family:open sans;color:#4a4a4a;font-size:13px;">
                            Setiap Hari <br />
    Senin-Minggu, 24 Jam <br />
                        </div>
                    </div>			
            </td>
        </tr>
        <tr>
            <td>
                <textarea name="address" placeholder="Address" style="margin:0px 0px 15px 0px;width:250px;height:116px;font-family:ralewaylight;font-size:13px;border:1px solid #dedede;border:1px solid #dedede;padding:10px 20px 10px 20px;border-radius:5px;resize:none;" maxlength="255"/></textarea>
            </td>
            <td valign=top>		
            </td>
        </tr>
        <tr>
            <td colspan=2 align=right>			
                <div style="margin:0px 20px 0px 0px;">						
                    <div class="icon" style="display:inline-block;vertical-align:middle;"><input type="reset" value="RESET" id="reset" class="transp" style="margin:0px 10px 0px 0px;font-family:ralewaybold;font-size:14px;color:#fff;background-color:#7c7c7c;width:113px;height:37px;cursor:pointer;border:0px solid;font-style:italic;border-radius:5px;"/></div>
                    <div class="icon" style="display:inline-block;vertical-align:middle;"><input type="submit" value="SEND" class="transp" style="font-family:ralewaybold;font-size:14px;color:#fff;background-color:#163f6e;width:113px;height:37px;cursor:pointer;border:0px solid;border-radius:5px;"/></div>													
                </div>
            </td>
            <td>
                &nbsp;
            </td>
        </tr>
        </table>
        </form>
        
        
    <hr style="border:0px solid;border-bottom:1px solid #efefef">
        
    <table width=960px style="margin-top:-20px;margin-bottom:20px;">
    <tr>
        <td align=center valign=top>
            <div style="font-family:open sans;font-size:13px;color:#272727;margin:0 0 10px 0;">
                PARTNER LINK:
            </div>
            
                    <a href="http://www.yamaha-friends.com/" target="_blank">
                        <img src="{{ asset('data/partner_pic/1.png') }}" width=178px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://yamaha-kaltim.co.id/" target="_blank">
                        <img src="{{ asset('data/partner_pic/2.png') }}" width=178px style="margin:0 0 10px 0;">
                    </a>		
        </td>
        <td align=center valign=top>
            <div style="font-family:open sans;font-size:13px;color:#272727;margin:0 0 10px 0;">
                YAMAHA AFFILIATES:
            </div>
            
                    <a href="http://www.baf.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/1.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://indomobilfinance.com/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/2.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://www.adira.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/3.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://www.otofinance.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/4.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>
                    <a href="http://www.wom.co.id/" target="_blank">
                        <img src="{{ asset('data/affiliate_pic/5.png') }}" width=84px style="margin:0 0 10px 0;">
                    </a>	</td>
    </tr>
    </table>
 
 @endsection

 @section('foot')

 @endsection