@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<form method="post" action="#" id="app-my-form">
    <!-- Content 
    ====================================================== -->
    <section class="uix-spacing--s uix-spacing--no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Inputs</h3>
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
                        Text 1:
                        <div class="uix-controls">
                          <input type="text" class="js-uix-float-label" value="" name="input-name-1">
                          <label>Input Normal</label>
                        </div>
                        <br>
                        Text 2:
                        <div class="uix-controls">
                          <input type="text" class="js-uix-float-label" name="input-name-2" maxlength="50" value="0">
                          <label>Input Normal</label>
                        </div>
                        <br>
                        Text 3:
                        <div class="uix-controls is-disabled">
                          <input type="text" class="js-uix-float-label"  name="input-name-3" disabled>
                          <label>Disabled</label>
                        </div>
                        <div class="uix-controls">
                          <input type="text" class="js-uix-float-label"  name="input-name-3_2" readonly>
                          <label>Read Only</label>
                        </div>
                        <div class="uix-controls">
                          <input type="text" class="js-uix-float-label"  name="input-name-3_3" required>
                          <label>Required<span class="uix-controls__im">*</span></label>
                        </div>
                        <br>
                        Text 4:<br>
                        <div class="uix-controls is-fullwidth">
                          <input type="text" class="js-uix-float-label" name="input-name-4">
                          <label>Fullwidth</label>
                        </div>
                        <br>
                        Text 5:
                        <div class="uix-controls is-error">
                          <input type="text" class="js-uix-float-label" value="Error" name="input-name-5">
                          <label>Input Name</label>
                        </div>
                        <br>
                        Text 6:
                        <div class="uix-controls is-success">
                          <input type="text" class="js-uix-float-label" value="Success" name="input-name-6">
                          <label>Input Name</label>
                        </div>
                        <br>
                        Text 7:
                        <div class="uix-controls is-pill">
                          <input type="text" class="js-uix-float-label" name="input-name-7">
                          <label>Input Name</label>
                        </div>
                        <br>
                        Text 8:
                        <div class="uix-controls is-rounded">
                          <input type="text" class="js-uix-float-label" name="input-name-8">
                          <label>Input Name</label>
                        </div>
                        <br>
                        Text 9:
                        <div class="uix-controls uix-controls__short-s">
                          <input type="text" class="js-uix-float-label" name="input-name-s-1">
                          <label>Short Input 1</label>unit
                        </div>
                        <br>
                        Text 10:
                        <div class="uix-controls uix-controls__short-m">
                          <input type="text" class="js-uix-float-label" name="input-name-s-2">
                          <label>Short Input 2</label>unit
                        </div>
                        <br>
                        Text 11:
                        <div class="uix-controls uix-controls__short-l">
                          <input type="text" class="js-uix-float-label" name="input-name-s-3">
                          <label>Short Input 3</label>unit
                        </div>
                        <br>
                        Text 12:
                        <div class="uix-controls is-iconic">
                          <i class="fa fa-user-o" aria-hidden="true"></i>
                          <input type="text" class="js-uix-float-label" name="input-name-12">
                          <label>Icon Left</label>
                        </div>
                        <div class="uix-controls is-iconic is-reversed">
                          <i class="fa fa-user-o" aria-hidden="true"></i>
                          <input type="text" class="js-uix-float-label" name="input-name-12_2">
                          <label>Icon Right</label>
                        </div>    
                        <br>
                        Mixed some UI attributes (<code>class="uix-controls is-fullwidth is-pill is-success"</code>):<br>
                        <div class="uix-controls is-fullwidth is-pill is-success">
                          <input type="text" class="js-uix-float-label" name="input-name-13">
                          <label>Input Name</label>
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
                    <h3>Textarea</h3>
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
                        <div class="uix-controls uix-controls__textarea">
                          <textarea rows="5" name="comments" class="js-uix-float-label"></textarea>
                          <label>Textarea</label>
                        </div>
                        <br>
                        <div class="uix-controls uix-controls__textarea is-fullwidth">
                          <textarea rows="5" name="comments" class="js-uix-float-label"></textarea>
                          <label>Fullwidth</label>
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
                    <h3>Select (normal)</h3>
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
                        <div class="uix-controls uix-controls__normal-select is-disabled">
                            <span class="uix-controls__arrow"><i class="fa fa-sort"></i></span>
                            <select name="country">
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                                <option value="Option 3">Option 3</option>
                            </select>
                            <label>Disabled Select</label>
                        </div>
                        <br>
                        <div class="uix-controls uix-controls__normal-select">
                            <span class="uix-controls__arrow"><i class="fa fa-sort"></i></span>
                            <select name="country">
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                                <option value="Option 3">Option 3</option>
                            </select>
                            <label>Select</label>
                        </div>
                        <br>
                        <div class="uix-controls uix-controls__normal-select">
                            <span class="uix-controls__arrow"><i class="fa fa-sort"></i></span>
                            <select name="country">
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                                <option value="Option 3">Option 3</option>
                            </select>
                            <label>Select</label>
                        </div>
                        <br>
                        <div class="uix-controls uix-controls__normal-select is-fullwidth">
                            <span class="uix-controls__arrow"><i class="fa fa-sort"></i></span>
                            <select class="js-uix-float-label">
                                <option value="blank"></option>
                                <option value="Apple">Apple</option>
                                <option value="Banana">Banana</option>
                                <option value="Kiwi">Kiwi</option>
                                <option value="Orange">Orange</option>
                                <option value="Watermelon">Watermelon</option>
                            </select>
                            <label>Select Arrow</label>
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
                    <h3>Custom Select</h3>
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
                        <div class="uix-controls uix-controls__select is-disabled">
                            <label>
                                <select name="selectname">
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                            </label>
                            <span>Disabled Select</span>
                        </div>
                        <br>
                        <div class="uix-controls uix-controls__select">
                            <label>
                                <select name="selectname">
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                            </label>
                            <span>Custom Select</span>
                        </div>
                        <br>
                        <div class="uix-controls uix-controls__select is-fullwidth">
                            <label>
                                <select name="selectname">
                                    <option value="">Full Width Select</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                            </label>
                        </div>
                        <br>
                        <div class="uix-controls uix-controls__select uix-controls__select--top is-pill">
                            <label>
                                <select name="selectname">
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                </select>
                            </label>
                            <span>Custom Select -Converse</span>
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
                    <h3>Multiple Select</h3>
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
                        <div class="uix-controls uix-controls__multi-sel" data-targetid="my-multi-selector-name-1">
                             <span aria-checked="false" role="checkbox" data-value="1">facebook<i class="fa fa-check no"></i></span>
                             <span aria-checked="false" role="checkbox" data-value="2">twitter<i class="fa fa-check no"></i></span>
                             <span aria-checked="false" role="checkbox" data-value="3">google_plus<i class="fa fa-check no"></i></span>
                             <span aria-checked="false" role="checkbox" data-value="4">pinterest<i class="fa fa-check no"></i></span>
                        </div>
                        <input type="hidden" id="my-multi-selector-name-1" name="my-multi-selector-name-1" value="1,3">
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
                    <h3>Single Select</h3>
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
                    <div class="uix-controls uix-controls__single-sel" data-targetid="my-cus-radio-name-1">
                         <span aria-checked="false" role="radio" data-value="1" data-switchid="my-cus-radio-switch-1">Switch 1</span>
                         <span aria-checked="false" role="radio" data-value="2" data-switchid="my-cus-radio-switch-2">Switch 2</span>
                         <span aria-checked="false" role="radio" data-value="3" data-switchid="my-cus-radio-switch-3">Switch 3</span>
                    </div>
                    <input type="hidden" id="my-cus-radio-name-1" name="my-cus-radio-name-1" value="2">
                    <div id="my-cus-radio-switch-1" style="padding: 10px; background: #d2ff52; background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%); margin: -30px 0 15px 0; max-width: 300px;">Switch 1</div>
                    <div id="my-cus-radio-switch-2" style="padding: 10px; background: #d2ff52; background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%); margin: -30px 0 15px 0; max-width: 300px;">Switch 2</div>
                    <div id="my-cus-radio-switch-3" style="padding: 10px; background: #d2ff52; background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%); margin: -30px 0 15px 0; max-width: 300px;">Switch 3</div>
                </div>  
            </div>
            <!-- .row end -->
           <div class="row">
                <div class="col-12">
                    <div class="uix-controls uix-controls__single-sel is-pill" data-targetid="my-cus-radio-name-2">
                         <span aria-checked="false" role="radio" data-value="1">facebook</span>
                         <span aria-checked="false" role="radio" data-value="2">twitter</span>
                         <span aria-checked="false" role="radio" data-value="3">google_plus</span>
                         <span aria-checked="false" role="radio" data-value="4">pinterest</span>
                    </div>
                    <input type="hidden" id="my-cus-radio-name-2" name="my-cus-radio-name-2" value="1">
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
                    <h3>Switch</h3>
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
                    <div class="uix-controls uix-controls__toggle is-disabled" data-off-text="off" data-on-text="on">
                        <label>
                            <input role="switch" type="checkbox" name="togglename">
                        </label>
                    </div>
                </div>  
            </div>
            <!-- .row end -->       
           <div class="row">
                <div class="col-12">
                    <div class="uix-controls uix-controls__toggle" data-off-text="off" data-on-text="on">
                        <label>
                            <input role="switch" type="checkbox" name="togglename">
                        </label>
                    </div>
                </div>  
            </div>
            <!-- .row end -->                           
           <div class="row">
                <div class="col-12">
                    <div class="uix-controls uix-controls__toggle is-pill" data-off-text="off" data-on-text="on" data-targetid="my-toggle-name-1">
                        <label>
                            <input role="switch" type="checkbox" name="togglename2">
                        </label>
                    </div>
                    <div id="my-toggle-name-1" style="padding: 10px; background: #d2ff52; background: linear-gradient(to bottom, #d2ff52 0%,#91e842 100%); margin: 5px 0 15px 0; max-width: 300px;">Switch</div>
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
                    <h3>Radio</h3>
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
                        <div class="uix-controls uix-controls__radio">
                            <label>
                                <input type="radio" name="radioname">Radio Name 1
                            </label>
                            <label>
                                <input type="radio" name="radioname" checked>Radio Name 2
                            </label>
                            <label>
                                <input type="radio" name="radioname">Radio Name 3
                            </label>
                        </div>
                    </div>  
                </div>
                <!-- .row end -->     
               <div class="row">
                    <div class="col-12">
                        <div class="uix-controls uix-controls__radio is-disabled">
                            <label>
                                <input type="radio" name="radioname2">Disabled Radio Name 1
                            </label>
                            <label>
                                <input type="radio" name="radioname2" checked>Disabled Radio Name 2
                            </label>
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
                    <h3>Date</h3>
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
                    <div class="uix-controls uix-controls__short-l uix-controls__date">
                      <input  type="text" class="js-uix-float-label" name="shortinput3"
                              autocomplete="off" 
                              data-picker="true" 
                              data-picker-min-date="0"
                              data-picker-max-date="+2050/01/01"
                              data-picker-format="Y-m-d H:i:s" 
                              data-picker-timepicker="true" 
                              data-picker-lang="en">
                      <label>Date 1</label>
                    </div>
                </div>  
            </div>
            <!-- .row end -->    
           <div class="row">
                <div class="col-12">
                    <div class="uix-controls uix-controls__short-l uix-controls__date">
                      <input  type="text" class="js-uix-float-label" name="shortinput3-2"
                              autocomplete="off" 
                              data-picker="true" 
                              data-picker-min-date="-2016/01/01"
                              data-picker-max-date="0"
                              data-picker-format="M d, Y" 
                              data-picker-timepicker="false" 
                              data-picker-lang="en">
                      <label>Date 2</label>
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
                    <h3>Checkbox</h3>
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
                        <div class="uix-controls uix-controls__checkbox">
                            <label>
                                <input type="checkbox" name="checkboxname">Checkbox
                            </label>
                        </div>
                    </div>  
                </div>
                <!-- .row end --> 
               <div class="row">
                    <div class="col-12">
                        <div class="uix-controls uix-controls__checkbox">
                            <label>
                                <input type="checkbox" name="checkboxname" checked>Checkbox
                            </label>
                        </div>
                    </div>  
                </div>
                <!-- .row end --> 
               <div class="row">
                    <div class="col-12">
                        <div class="uix-controls uix-controls__checkbox is-disabled">
                            <label>
                                <input type="checkbox" name="checkboxname">Disabled Checkbox
                            </label>
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
                    <h3>Number</h3>
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
                        <div class="uix-controls uix-controls__number">
                            <input type="number" step="0.01" min="0" class="js-uix-float-label" name="numberdemo1" value="1">
                            <span class="uix-controls__number__btn uix-controls__number__btn--add" data-step="15">+</span>
                            <span class="uix-controls__number__btn uix-controls__number__btn--remove" data-step="15">-</span>
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
                    <h3>Dynamic Fields</h3>
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
                        <div class="uix-controls__dynamic-fields-container" data-max-fields="10">
                            <div class="uix-controls__dynamic-fields__tmpl">
                                <div class="uix-controls__dynamic-fields__tmpl__wrapper">
                                    <!-- Use placeholder `___GUID___` to represent the unique ID of each item  -->
                                    <!--///////////  Custom fields begin /////////// -->
                                    <div class="uix-controls uix-controls__short-l">
                                          <input type="text" placeholder="Title" class="js-uix-float-label" value="" name="appnotice-title" id="appnotice-title-___GUID___">
                                    </div>    
                                    &nbsp;&nbsp;
                                    <div class="uix-controls uix-controls__short-l">
                                          <input type="text" placeholder="URL" class="js-uix-float-label" value="" name="appnotice-url" id="appnotice-url-___GUID___">
                                    </div>    
                                    <!--///////////  Custom fields end /////////// -->
                                    <a href="javascript:void(0);" class="uix-controls__dynamic-fields__removebtn"><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                                </div>
                            </div>  
                            <div class="uix-controls__dynamic-fields__append"></div>
                            <a href="javascript:void(0);" class="uix-controls__dynamic-fields__addbtn"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add new</a>
                        </div>
                        <!-- /.uix-controls__dynamic-fields-container -->    
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
                    <h3>File</h3>
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
                        <div class="uix-controls__file-container">  
                            <input type="file" id="my-file">
                            <label tabindex="0" for="my-file" class="uix-controls__file-trigger"><i class="fa fa-upload" aria-hidden="true"></i>Upload File</label>
                        </div>
                        <p class="uix-controls__file-return"></p>
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
                    <h3>File Field</h3>
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
                        <div class="uix-controls__file-field-container">
                            <div class="uix-controls__file-field-trigger">
                              <div>
                                  <input type="file" accept="image/*"  data-title="Drag and drop a file here">
                              </div>
                            </div>
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
                    <h3>Tag Input</h3>
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
                        <div class="uix-controls__tags-wrapper is-rounded" data-placeholder="Add tag...">
                            <input type="text" name="taginputname1" value="">
                        </div>
                        <br>
                        <div class="uix-controls__tags-wrapper is-rounded" data-placeholder="Add tag..." data-max-tags="5">
                            <input type="text" name="taginputname2" value="tag1,tag2">
                        </div>
                    </div>  
                </div>
                <!-- .row end -->  
        </div>
        <!-- .container end -->
    </section>
   <!-- Content 
    ====================================================== -->
    <section class="uix-spacing--s uix-spacing--no-top">
        <div class="container">
           <div class="row">
                <div class="col-12 uix-t-l">
                    <p class="uix-t-l">
                      <button type="submit" class="uix-btn uix-btn__border--thin uix-btn__size--s uix-btn__bg--primary">Submit Your Info</button>
                    </p> 
                     <span class="response"></span>
                </div>  
            </div>
            <!-- .row end --> 
        </div>
        <!-- .container end -->
    </section>
</form>
<!-- Content 
====================================================== -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Search Box</h3>
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
    <div class="container uix-t-c">
            <div class="row">
                <div class="col-12">
                    <div class="uix-controls__merge" role="search">
                        <input id="search-input" placeholder="Enter your search term..." name="search-input" type="text" required />
                        <button type="submit" class="uix-btn uix-btn__bg--primary"><span><i class="fa fa-search" aria-hidden="true"></i>Search</span></button>                    
                    </div>
                    <div class="uix-controls__merge is-pill">
                        <input id="search-input2" placeholder="Enter your search term..." name="search-input" type="text" required />
                        <button type="submit" class="uix-btn uix-btn__bg--primary"><span>Search</span></button>                    
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
                <h3>Subscribe</h3>
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
    <div class="container uix-t-c">
            <div class="row">
                <div class="col-12">
                    <div class="uix-controls__merge">
                        <input id="subscribe-input" placeholder="Enter your Email" name="subscribe-input" type="email" required />
                        <button type="submit" class="uix-btn uix-btn__bg--primary"><span>Subscribe</span></button>                    
                    </div>      
                    <div class="uix-controls__merge is-pill">
                        <input id="subscribe-input" placeholder="Enter your Email" name="subscribe-input" type="email" required />
                        <button type="submit" class="uix-btn uix-btn__bg--primary"><span>Subscribe</span></button>                    
                    </div>    
                    <div class="uix-controls__merge is-iconic">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input id="subscribe-input2" placeholder="Enter your Email" name="subscribe-input" type="email" required />
                        <button type="submit" class="uix-btn uix-btn__bg--primary"><span>Subscribe</span></button>                    
                    </div>       
                    <div class="uix-controls__merge is-pill is-iconic">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <input id="subscribe-input3" placeholder="Enter your Email" name="subscribe-input" type="email" required />
                        <button type="submit" class="uix-btn uix-btn__bg--primary"><span>Subscribe</span></button>                    
                    </div>       
                </div>     
            </div>
            <!-- .row end -->  
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection
