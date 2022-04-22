@extends('layout')
@extends('livewire-layout')
@section('content')
<style>
    .init {
        text-align: initial;
    }
    .iniP {
        color:gray;
    }
    .tex {
        padding-top: 50px;
    }
    .BtDem {
        border: 1px solid gray;
    }
    .alig {
        text-align: center;
    }
    .footers {
        background:#040417;
        height: 300px;
        padding-bottom:40px;
        color: white;
    }
    .te {
        margin-top:10px;
        color: white!important;
        font-size:12px;
    }
</style>
{{-- Initial --}}
<div class="container" >
    <div class="row" style="width: 100%; padding-top: 60px; ">
        <div class="col-md-5 tex">
        <center>
            <h1 class="init">Zero Hassle Push to Talk conversations</h1>
            <p class="init iniP">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut esse ratione facere ex numquam ipsum possimus, saepe molestiae. Quo architecto voluptates officiis autem?</p>
           
        </center>   
        <button style="padding: 10px 20px;" class="btn BtDem">Demo</button>
        <button style="padding: 10px 20px;" class="btn btn-primary">Get Started</button>
        </div>
        <div class="col-md-7">
            <center>

                <img src="{{asset('img/main.png')}}" style="width: 50%; height:60vh;">
            </center>

        </div>
    </div>
    <div class="row" style="margin: 100px 0 0 0;">
        <div class="col-12">
            <h2 class="alig"> Great products, faster than ever</h2>
            <p class="alig">Everything you need to bluid corporate and grat products,</p>
        </div>
    </div>
    <div class="row" style="margin: 100px 0 40px 0; background:#80808017; padding-top: 40px; padding-bottom:40px; ">
        <div class="col-md-4"><h1 style=" text-align:center;color: dodgerblue;">400+</h1><p style="margin:0; text-align:center;">Projects completed</p></div>
        <div class="col-md-4"><h1 style=" text-align:center;color: dodgerblue;">600%</h1><p style="margin:0; text-align:center;">Projects completed</p></div>
        <div class="col-md-4"><h1 style=" text-align:center;color: dodgerblue;">10k</h1> <p style="margin:0; text-align:center;">Projects completed</p></div>
    </div>
    <div class="row" style="margin: 70px 0 40px 0;">
        <div class="col-md-6">
            <h1 class="alig" style="margin-top:100px;">We've really sped up our workflow with Company and haven't looked back</h1>
        </div>
            <div class="col-md-6">
                <img src="{{asset('img/collage.jpg')}}" style="width: 100%; height:60vh;">
            </div>
    </div>
 
</div>
<div class="container-fluid" style=" background:#80808017; padding:0 0 100px 0 ;">
    <div class="row" style="margin: 70px 0 40px 0; padding:60px 0; ">
        <center>
            <div class="col-12" style="max-width: 800px;">
                <h2 class="alig" style="margin-bottom:10px;">Frequently asked questiond</h2>
                <p class="alig" style="color:gray;">Everything you nedd to know about the product and billing</p>
    
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                         Can I change my plan later
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          What is your cancelattion policy
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          Can other info be added to an invoice 
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                      </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                           How doues billing work?
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                        </div>
                      </div>
                      <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          How do I change my account email
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                      </div>
                    </div>
                  </div>
            </div>
        </center>
        </div>
            <center>

                <div class="row"  style="background: white; width:80%; padding:60px 0 60px 0;">
                    <h4>Still have questions?</h4>
                    <p style="font-size:13px;">Can't find the answer you're looking for? please chat to our firendly team.</p>
                    <center><button class="btn btn-primary alig" style="width: 10%; font-size:10px;"> Get in touch</button></center>
                </div>
            </center>
</div>
<footer class="footers" >
<div class="container" style="  border-bottom: 1px solid gray; height:100%; ">
    <div class="row">
        <div class="col-11">
            <p style="width:300px; font-size:12px; margin:100px 0 0 0; ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod fuga ducimus mollitia accusamus explicabo?</p>
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link te active" style="padding: 8px 16px 8px 0;" aria-current="page" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link te" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link te" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link te disabled">Disabled</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link te disabled">Disabled</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link te disabled">Disabled</a>
                  </li>
              </ul>
        </div>
        <div class="col-1">
          <p style="margin:90px 0 0 0; font-size:12px;">  get te app</p>
        </div>
    </div>
</div>
</footer>
@endsection

