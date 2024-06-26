@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Content 
====================================================== -->
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Table Sorter</h3>
                <p>Users can filter and limit the data displayed within a long data table.</p>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>    
           <!-- Content 
====================================================== -->
           <!-- Content 
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="uix-table is-horizontal uix-table--alternant-row js-uix-table-sorter">
                        <table>
                            <thead>
                                <tr>
                                    <th>Index</th>
                                    <th data-sort-type="number">Money</th>
                                    <th data-sort-type="text">Name</th>
                                    <th data-sort-type="number">Number</th>
                                    <th data-sort-type="date">Date</th>
                                    <th data-sort-type="date">Date2</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>$55.134</td>
                                    <td>David Lin</td>
                                    <td>3453434</td>
                                    <td>2012-09-25T12:10:46+00:00</td>
                                    <td>May 22, 2003</td>
                                    <td><a href="#">Button</a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>$255.134</td>
                                    <td>Co Cheey</td>
                                    <td><span class="uix-typo--color-highlight">-2324.343</span></td>
                                    <td>2013-09-10T12:10:46+00:00</td>
                                    <td>September 13, 2013</td>
                                    <td><a href="#">Button</a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>$4.134</td>
                                    <td>Foristin</td>
                                    <td><span class="uix-typo--color-highlight">-34789.34</span></td>
                                    <td>2018-09-24T12:10:46+00:00</td>
                                    <td>January 2, 2019</td>
                                    <td><a href="#">Button</a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>$3454.134</td>
                                    <td>Alice</td>
                                    <td>+224.5</td>
                                    <td>2011-09-21T12:10:46+00:00</td>
                                    <td>December 1, 2018</td>
                                    <td><a href="#">Button</a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>$224.0</td>
                                    <td>Wooli</td>
                                    <td>+33.6</td>
                                    <td>2011-02-26T12:10:46+00:00</td>
                                    <td>July 22, 2017</td>
                                    <td><a href="#">Button</a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>$356.2</td>
                                    <td>Spiter Low</td>
                                    <td>278.23487</td>
                                    <td>2019-01-01T12:10:46+00:00</td>
                                    <td>July 28, 2017</td>
                                    <td><a href="#">Button</a></td>
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
        </main>
@endsection
