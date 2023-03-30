@php
@endphp
		<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;
			}
			body{
				/*background-color: black;*/
			}
			.a1{
				width: 600px;
				height: 436px;
				background-color:#fcfcfc;
				position: absolute;
				top: 50%;
				left: 50%;
				margin-left: -300px;
				margin-top: -218px;
				border: 2px solid black;
			}
			
			.a2{
				width: 576px;
				height: 399px;
				background-color:#fffec8;
				margin: 15px 0 0 9px;
				border: 2px solid black;
			}
			
			.a3{
				
				width: 549px;
				height: 50px;
				background-color:#90c4fd;
				margin: 73px 0 0 21px;
				position: absolute;
				top: 0px;
				left: 0px;	
				border: 2px solid black;
			}
			
			.a4{
				
				width: 341px;
				height: 152px;
				background-color:#ffc4c4;
				margin: 139px 0 0 21px;
				position: absolute;
				top: 0px;
				left: 0px;	
				border: 2px solid black;
			}
			
			.a5{
				
				width: 549px;
				height: 43px;
				background-color:#90c4fd;
				margin: 305px 0 0 21px;
				position: absolute;
				top: 0px;
				left: 0px;	
				border: 2px solid black;
			}
			
			.a6{
				width: 187px;
				height: 259px;
				background-color: lightblue;
				opacity: 0.3;
				margin: 139px 0 0 379px;
				position: absolute;
				top: 0px;
				left: 0px;	
				border: 2px solid black;
			}
			
			.a2 p{
				text-align: center;
				font-weight: bold;
				font-size: 18px;
				line-height: 56px;
				text-align: center;
			}
			
			.a3 p{
				text-align: center;
				font-weight: bold;
				font-size: 18px;
				line-height: 50px;
				text-align: center;
			}
			
			.a4 p{
				text-align: center;
				font-weight: bold;
				font-size: 18px;
				line-height: 145px;
				text-align: center;
			}
			
			.a5 p{
				text-align: center;
				font-weight: bold;
				font-size: 18px;
				line-height: 45px;
				text-align: center;
			}
			
			.a6 p{
				font-weight: bold;
				font-size: 18px;
				padding: absolute;
				line-height: 245px;
				text-align: center;
				
			}
			
		</style>
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Table Series</h3>
                <p>Provides some common styles of table.</p>
                <hr>
            </div>
        </div>
    </div>
</section>
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="uix-table uix-table--bordered">
<div style="height:500px; color:read">
</div>
		<div class="a1">
@foreach ([1, 2, 3, 4] as $elem)
@endforeach
			<div class="a2">
				<p>#container</p>
			</div>
			<div class="a3">
				<p>#banner</p>
			</div>
			<div class="a4">
				<p>#content</p>
				</div>
			<div class="a5">
				<p>#footer</p>
			</div>
			<div class="a6">
				<p>#links</p>
			</div>
		</div>
                    <table>
                        <tbody>
                            <tr>
                                @foreach ($infos['headers'] as $header)
                                <th>{{$header}}</th>
                                @endforeach
                            </tr>
                            @foreach ($infos['infos'] as $subInfos)
                            <tr class="odd">
                                @foreach ($subInfos as $info)
                                <td>{{$info}}</td>
                                @endforeach
                            </tr>
                            @endforeach
                            <tr class="even">
                                <td><a href="#">Tom McFarlin</a></td>
                                <td>$100K</td>
                                <td>For all the blogging he does.</td>
                            </tr>
                        </tbody>
                    </table>           
                </div>
            </div>
        </div>
    </div>
</section>
