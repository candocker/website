@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
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
				<div class="container uix-t-c">
					<div class="uix-lavalamp-menu__container">
						<ul class="uix-lavalamp-menu">
							<li><a href="#">menu</a></li>
							<li><a href="#">long menu</a></li>
							<li><a href="#">even longer menu</a></li>
							<li><a href="#">short menu</a></li>
						</ul>
					</div>   
					<!-- /.uix-lavalamp-menu__container -->           
				</div> 
				<!-- .container end -->
			</section>
<section class="uix-spacing--s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="uix-table uix-table--bordered">
                    <table>
                        <tbody>
                            <tr>
                                <th>Employee</th>
                                <th class="views">Salary</th>
                                <th></th>
                            </tr>
                            <tr class="odd">
                                <td><a href="#">John Saddington</a></td>
                                <td>$1</td>
                                <td>Because that&#8217;s all Steve Job&#8217; needed for a salary.</td>
                            </tr>
                            <tr class="even">
                                <td><a href="#">Tom McFarlin</a></td>
                                <td>$100K</td>
                                <td>For all the blogging he does.</td>
                            </tr>
                            <tr class="odd">
                                <td><a href="#">Jared Erickson</a></td>
                                <td>$100M</td>
                                <td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
                            </tr>
                            <tr class="even">
                                <td><a href="#">Chris Ames</a></td>
                                <td>$100B</td>
                                <td>With hair like that?! Enough said&#8230;</td>
                            </tr>
                        </tbody>
                    </table>           
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Text 1</th>
                                <th>Text 2</th>
                                <th>Text 3</th>
                                <th>Text 4</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>David Lin</td>
                                <td>123 344 4343</td>
                                <td>35745784</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Co Cheey</td>
                                <td>231 343 3334</td>
                                <td>1490933</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Foristin</td>
                                <td>767 929 1212</td>
                                <td>7954511</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table">
                    <table>
                        <tbody style="background: #FAFAFA;">
                            <tr>
                                <td>
                                    01
                                </td>
                                <td>
                                    No. 329395683525385873
                                </td>
                                <td colspan="2" class="uix-t-c uix-t-l--md">
                                    <a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--t uix-btn__bg--primary is-pill">Contact</a>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="uix-controls uix-controls__checkbox">
                                        <label>
                                            <input type="checkbox" name="checkboxname" checked>
                                        </label>
                                    </div>
                                </td>
                                <td>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</td>
                                <td>$25.5</td>
                                <td>$33.5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <div class="uix-table">
                    <table>
                        <tbody style="background: #FAFAFA;">
                            <tr>
                                <td>
                                    02
                                </td>
                                <td>
                                    No. 329395683525385873
                                </td>
                                <td colspan="2" class="uix-t-c uix-t-l--md">
                                    <a href="#" class="uix-btn uix-btn__border--thin uix-btn__size--t uix-btn__bg--primary is-pill">Contact</a>
                                </td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="uix-controls uix-controls__checkbox">
                                        <label>
                                            <input type="checkbox" name="checkboxname">
                                        </label>
                                    </div>
                                </td>
                                <td>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</td>
                                <td>$25.5</td>
                                <td>$1225.5</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table is-horizontal">
                    <table>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>David Lin</td>
                                <td>123 344 4343</td>
                                <td>35745784</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Co Cheey</td>
                                <td>231 343 3334</td>
                                <td>1490933</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Foristin</td>
                                <td>767 929 1212</td>
                                <td>7954511</td>
                            </tr>
                        </tbody>
                    </table>  
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table is-horizontal uix-table--alternant-row">
                    <table>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>David Lin</td>
                                <td>123 344 4343</td>
                                <td>35745784</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Co Cheey</td>
                                <td>231 343 3334</td>
                                <td>1490933</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Foristin</td>
                                <td>767 929 1212</td>
                                <td>7954511</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>David Lin</td>
                                <td>123 344 4343</td>
                                <td>35745784</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Co Cheey</td>
                                <td>231 343 3334</td>
                                <td>1490933</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Foristin</td>
                                <td>767 929 1212</td>
                                <td>7954511</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table uix-table--noborder is-horizontal">
                    <table>
                        <tbody>
                            <tr>
                                <td colspan="3">
                                    <h3>Title Here</h3>    
                                </td>
                            </tr>    
                            <tr>
                                <td>List 1</td>
                                <td>Content 1</td>
                                <td>Remark 1</td>
                            </tr>
                            <tr>
                                <td>List 2</td>
                                <td>Content 2</td>
                                <td>Remark 2</td>
                            </tr>
                            <tr>
                                <td>List 3</td>
                                <td>Content 3</td>
                                <td>Remark 3</td>
                            </tr>
                         </tbody>
                    </table>    
                </div>    
                <!-- //////////////////  --><br><br>
                <div class="uix-table uix-table--per-line">
                    <table>
                        <thead>
                            <tr>
                                <th style="width:33.3%">Number</th>
                                <th style="width:33.3%">Name</th>
                                <th style="width:33.3%">Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uix-t-c">Center</td>
                                <td class="uix-t-l">Left</td>
                                <td class="uix-t-r">Right</td>
                            </tr>
                        </tbody>
                    </table>        
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table uix-table--per-line">
                    <table>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Foristin</td>
                                <td>767 929 1212</td>
                                <td>7954511</td>
                            </tr>
                            <tr>
                                <td colspan="2">content</td>
                                <td colspan="2">content</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Number</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Foristin</td>
                                <td>767 929 1212</td>
                                <td>7954511</td>
                            </tr>
                            <tr>
                                <td colspan="2">content</td>
                                <td colspan="2">content</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //////////////////  --><br><br>
                <div class="uix-table uix-table--alternant-col">
                    <table>
                        <colgroup>
                            <col></col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                            <col>
                        </colgroup>
                        <tbody>
                            <tr>
                                <th class="uix-typo--color-white">Month </th>
                                <th>'94 </th>
                                <th>'95 </th>
                                <th>'96 </th>
                                <th>'97 </th>
                                <th>'98 </th>
                                <th>'99 </th>
                                <th>'00 </th>
                                <th>'01 </th>
                                <th>'02 </th>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Jan </td>
                                <td>14 </td>
                                <td>13 </td>
                                <td>14 </td>
                                <td>13 </td>
                                <td>14 </td>
                                <td>11 </td>
                                <td>11 </td>
                                <td>11 </td>
                                <td>11 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Feb </td>
                                <td>13 </td>
                                <td>15 </td>
                                <td>12 </td>
                                <td>15 </td>
                                <td>15 </td>
                                <td>12 </td>
                                <td>14 </td>
                                <td>13 </td>
                                <td>13 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Mar </td>
                                <td>16 </td>
                                <td>15 </td>
                                <td>14 </td>
                                <td>17 </td>
                                <td>16 </td>
                                <td>15 </td>
                                <td>14 </td>
                                <td>15 </td>
                                <td>15 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Apr </td>
                                <td>17 </td>
                                <td>16 </td>
                                <td>17 </td>
                                <td>17 </td>
                                <td>17 </td>
                                <td>15 </td>
                                <td>15 </td>
                                <td>16 </td>
                                <td>16 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">May </td>
                                <td>21 </td>
                                <td>20 </td>
                                <td>20 </td>
                                <td>21 </td>
                                <td>22 </td>
                                <td>20 </td>
                                <td>21 </td>
                                <td>20 </td>
                                <td>19 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Jun </td>
                                <td>24 </td>
                                <td>23 </td>
                                <td>25 </td>
                                <td>24 </td>
                                <td>25 </td>
                                <td>23 </td>
                                <td>25 </td>
                                <td>23 </td>
                                <td>24 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Jul </td>
                                <td>29 </td>
                                <td>28 </td>
                                <td>26 </td>
                                <td>26 </td>
                                <td>27 </td>
                                <td>26 </td>
                                <td>25 </td>
                                <td>26 </td>
                                <td>25 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Aug </td>
                                <td>29 </td>
                                <td>28 </td>
                                <td>27 </td>
                                <td>28 </td>
                                <td>28 </td>
                                <td>27 </td>
                                <td>26 </td>
                                <td>28 </td>
                                <td>26 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Sep </td>
                                <td>24 </td>
                                <td>23 </td>
                                <td>23 </td>
                                <td>26 </td>
                                <td>24 </td>
                                <td>24 </td>
                                <td>24 </td>
                                <td>22 </td>
                                <td>21 </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Oct </td>
                                <td>20 </td>
                                <td>22 </td>
                                <td>20 </td>
                                <td>22 </td>
                                <td>20 </td>
                                <td>19 </td>
                                <td>20 </td>
                                <td>22 </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Nov </td>
                                <td>18 </td>
                                <td>17 </td>
                                <td>16 </td>
                                <td>17 </td>
                                <td>16 </td>
                                <td>15 </td>
                                <td>14 </td>
                                <td>15 </td>
                                <td> </td>
                            </tr>
                            <tr>
                                <td class="uix-typo--color-white">Dec </td>
                                <td>15 </td>
                                <td>13 </td>
                                <td>13 </td>
                                <td>14 </td>
                                <td>13 </td>
                                <td>10 </td>
                                <td>13 </td>
                                <td>11 </td>
                                <td> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- .row end -->
</div>
<!-- .container end -->
</section>   
   <!-- Content   
====================================================== -->
<section>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Responsive Table</h3>
            <p>Change window size to watch. The class <code>.is-responsive.js-uix-table--responsive</code> used here will be applied <code>.uix-table</code></p>
            <hr>
        </div>
    </div>
    <!-- .row end -->
</div>
<!-- .container end -->
</section>
   <!-- Content  
====================================================== -->
<section class="uix-spacing--s">
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="uix-table uix-table--noborder is-horizontal is-responsive js-uix-table--responsive">
                    <table>
                        <thead>
                            <tr>
                                <th>Head 1<span class="js-uix-table-responsive__hidden"> | hidden on mobile</span></th>
                                <th>Head 2</th>
                                <th>Head 3</th>
                            </tr>
                        </thead>
                        <tbody class="uix-t-l--md">
                            <tr>
                                <td>1.</td>
                                <td>Content 1</td>
                                <td>Remark 1</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Content 2</td>
                                <td>Remark 2</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Content 3</td>
                                <td>Remark 3</td>
                            </tr>
                         </tbody>
                    </table>    
                </div>            
                <!-- //////////////////  --><br><br>
            </div>
        </div>
        <!-- .row end -->
</div>
<!-- .container end -->
</section>   
  <!-- Content   
====================================================== -->
<section>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Responsive Table with Scroll Bars</h3>
            <p>Change window size to watch. The class <code>.js-uix-table--responsive-scrolled</code> used here will be applied <code>.uix-table</code></p>
            <hr>
        </div>
    </div>
    <!-- .row end -->
</div>
<!-- .container end -->
</section>
   <!-- Content  
====================================================== -->
<section class="uix-spacing--s">
<div class="container">
        <div class="row">
            <div class="col-12 uix-t-c">
                <div class="uix-table uix-table--bordered js-uix-table--responsive-scrolled">
                    <table>
                        <thead>
                            <tr>
                                <th>Numbers</th>
                                <th>Names</th>
                                <th>Values</th>
                                <th>Dates</th>
                                <th>Cash Money</th>
                                <th>Messages</th>
                                <th>Note</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#">000000001</a></td>
                                <td>Dr. Jayhawk</td>
                                <td>102</td>
                                <td>03/30/1940</td>
                                <td>$60.42</td>
                                <td>PAID</td>
                                <td>
                                    Remark
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">000000002</a></td>
                                <td>Dr. Jayhawk</td>
                                <td>137</td>
                                <td>03/18/1953</td>
                                <td>$69.68</td>
                                <td>PAID</td>
                                <td>
                                    Remark
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">000000003</a></td>
                                <td>Dr. Wolverine Longer Text Test</td>
                                <td>154</td>
                                <td>03/29/1976</td>
                                <td>$86.68</td>
                                <td>PAID</td>
                                <td>
                                    Remark
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">000000004</a></td>
                                <td>Dr. Tarheel</td>
                                <td>113</td>
                                <td>03/30/1981</td>
                                <td>$63.50</td>
                                <td>PAID</td>
                                <td>
                                    Remark
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">000000005</a></td>
                                <td>Dr. Orange</td>
                                <td>147</td>
                                <td>03/30/1987</td>
                                <td>$74.73</td>
                                <td>PAID</td>
                                <td>
                                    Remark
                                </td>
                            </tr>
                            <tr>
                                <td><a href="#">000000006</a></td>
                                <td>Dr. Who</td>
                                <td>000</td>
                                <td>04/08/2013</td>
                                <td>$0.00</td>
                                <td>PENDING</td>
                                <td>
                                    Remark
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- //////////////////  --><br><br>
            </div>
        </div>
        <!-- .row end -->
</div>
<!-- .container end -->
</section>   
  <!-- Content   
====================================================== -->
<section>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h3>Row Dropzone</h3>
            <p>Not applicable to tables with <code>&lt;table&gt;</code></p>
            <hr>
        </div>
    </div>
    <!-- .row end -->
</div>
<!-- .container end -->
</section>
   <!-- Content  
====================================================== -->
<section class="uix-spacing--s">
<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="uix-table-grid" role="grid">
                    <div class="uix-table-grid__head" role="row">
                        <div class="uix-table-grid__head-cell" style="flex: 1;" role="columnheader" tabindex="0">Column Title</div>
                        <div class="uix-table-grid__head-cell" style="flex: 1;" role="columnheader" tabindex="0">Column Title</div>
                        <div class="uix-table-grid__head-cell" style="flex: 1;" role="columnheader" tabindex="0">Column Title</div>
                    </div>
                    <div class="uix-table-grid__body" role="rowgroup">
                        <div class="uix-table-grid__row" role="row">
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Alpha</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Alpha</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Alpha</div>
                        </div>
                        <div class="uix-table-grid__row is-drop-target" role="row">
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Bravo</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Bravo</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Bravo</div>
                        </div>
                        <div class="uix-table-grid__row" role="row">
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Charlie</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Charlie</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Charlie</div>
                        </div>
                        <div class="uix-table-grid__row" role="row">
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Delta</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Delta</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Delta</div>
                        </div>
                        <div class="uix-table-grid__row" role="row">
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Echo</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Echo</div>
                            <div class="uix-table-grid__row-cell" style="flex: 1;" role="gridcell">Row Item Echo</div>
                        </div>
                    </div>
                </div>
                <!-- /.uix-table-grid -->
            </div>
        </div>
        <!-- .row end -->
    </div>
</section>          
			
			<!-- Floating Side Element
			============================================= -->      
			<div class="uix-floating-side-el">

				<a id="app-quick-appointment" href="javascript:"><span><i class="fa fa-envelope-open" aria-hidden="true"></i></span>Order</a>

				<a id="app-quick-service" href="javascript:"><span><i class="fa fa-headphones" aria-hidden="true"></i></span>Service Online</a>


				<a id="app-quick-appointment" href="javascript:"><span><i class="fa fa-calculator" aria-hidden="true"></i></span>Estimate</a>

				<a href="faq.html"><span><i class="fa fa-question-circle-o" aria-hidden="true"></i></span>FAQ</a>

			</div>
			<!-- .uix-floating-side-el end -->


			<div style="height: 2500px;"></div>
@endsection
