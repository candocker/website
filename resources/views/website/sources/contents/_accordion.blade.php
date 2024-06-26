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
                <h3>Accordion 1</h3>
                <p>Show hidden divs on click.</p>
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
                    <div class="uix-accordion" data-event="click" data-first-show="true" role="tablist">
                          <dl class="is-active">
                              <dt role="presentation"><a href="javascript:">Item 1</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                      <h4>Usage:</h4>Click on an item to open.
                                  </div>
                              </dd>
                          </dl>
                          <dl>
                              <dt role="presentation"><a href="javascript:">Item 2</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                      Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                  </div>
                              </dd>      
                          </dl>
                          <dl>
                              <dt role="presentation"><a href="javascript:">Item 3</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                         <p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                  </div>
                              </dd>      
                          </dl>
                          <dl>
                              <dt role="presentation"><a href="javascript:">Item 4</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                      Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                  </div>
                              </dd>      
                          </dl>
                    </div>
                    <!-- .uix-accordion end -->     
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
                <h3>Accordion 2</h3>
                <p>Show hidden divs on mouseover.</p>
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
                    <div class="uix-accordion" data-event="mouseenter" data-first-show="false" role="tablist">
                          <dl>
                              <dt role="presentation"><a href="javascript:">Item 1</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                      <h4>Usage:</h4>Click on an item to open.
                                  </div>
                              </dd>    
                          </dl>
                          <dl>
                              <dt role="presentation"><a href="javascript:">Item 2</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                      Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                  </div>
                              </dd>      
                          </dl>
                          <dl>
                              <dt role="presentation"><a href="javascript:">Item 3</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                         <p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
                                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
                                        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac.</p>
                                  </div>
                              </dd>      
                          </dl>
                          <dl>
                              <dt role="presentation"><a href="javascript:">Item 4</a></dt>
                              <dd role="tabpanel">
                                  <div>
                                      Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
                                  </div>
                              </dd>      
                          </dl>
                    </div>
                    <!-- .uix-accordion end -->     
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
        </main>
@endsection
