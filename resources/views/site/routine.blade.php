@extends('layouts.site')

@section('stylesheet')


@endsection

@section('content')



    <section id="hero" class="d-flex align-items-center">

        <div class="container">
           <h1 style="text-align: center">Routine</h1>
        </div>

    </section><!-- End Hero -->

    <section class="container">

        <br/>



        <div class="row">
            <h2 class="text-center mb-4">Follow The Routine and Save Our Planet</h2>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <section style="padding-top:20px;" class="panel ">
                            <header class="panel-heading">
                                <h3 style="text-align: center " class="panel-title mb-5 text-primary">Daily Routine For Reducing Carbon Dioxide Emission</h3>
                            </header>
                            <div class="panel-body">


                                <div class="row d-flex">
                                    <div class="col-lg-6 col-md-6 col-xl-6 text-right mb-3">
                                        <label for="exampleInputEmail1">Pick a Date</label>
                                        <input type="datetime-local">
                                    </div>
                                    <div style="font-weight: bold; position: absolute;
                                    right: -252px;top:80px" class=" col-xl-6">
                                        
                                        <p class="">Average Carbon Footprint: <span style="color:crimson; font-weight: bold">1.6 KG</span></p>
                                        <p style=" margin-left: 30px;">Your Carbon Footprint: <span style="color:green; font-weight: bold">1.2 KG</span></p>
                                    </div>
                                </div>
                                {{--<table class="table table-bordered table-striped mb-none" id="data-table">--}}
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                       cellspacing="0" width="100%" style="font-size: 14px">

                                    <thead>
                                    <tr>
                                        <th width="10">No</th>
                                        <th>Factor</th>
                                        {{-- <th width="200">Created</th> --}}

                                        <th width="50">Status</th>
                                        {{--                                    <th width="50">Nav Status</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="p-2">1</td>

                                            <td class="p-1">Plant a tree</td>
                                            
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="p-2">2</td>
                                            <td class="p-1">Eat Local Food</td>
                                            
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="p-2">3</td>

                                            <td class="p-1">Did not waste your food.</td>
                                            
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="p-2">4</td>

                                            <td class="p-1">Washed clothes in normal water</td>
                                            
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="p-2">5</td>

                                            <td class="p-1">Used reusable bags.</td>
                                          
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="p-2">6</td>

                                            <td class="p-1">Used Energy Star products</td>
                                            
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="p-2">7</td>
                                            <td class="p-1">Support & buy from companies - environmentally responsible</td>
                                           
                                            
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="p-2">8</td>

                                            <td class="p-1">Used electricity sparingly.</td>
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="p-2">9</td>

                                            <td class="p-1">Used non power consuming public transport.</td>
                                           
                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>

                                        <tr>
                                            <td class="p-2">10</td>

                                            <td class="p-1">Avoid flying if possible</td>
                                           

                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="p-2">11</td>

                                            <td class="p-1">Purchasing a hybrid or electric vehicle</td>
                                            

                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="p-2">12</td>

                                            <td class="p-1">Spread awareness about CO2 emissions</td>
                                            

                                            <td class="text-capitalize p-1" width="100">
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox"
                                                           data-id=""
                                                           id="myonoffswitch{{ ('id') }}">
                                                    <label class="onoffswitch-label" for="myonoffswitch{{ ('id') }}">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            </td>

                                        </tr>




                                    </tbody>
                                </table>
                                              <div class="row">
                                                <div class="col-sm-12" style="text-align: end">
                                                    <a href="" type="button" class="btn btn-dark">Submit</a>
                                                </div>
                                              </div>
                            </div>
                            <p style="font-weight: bold"><span style="color:crimson;font-size:25px">20,000 </span>Users  of our App have reduced <span style="color:green;font-size:25px">10,000 kg</span> Carbon Footprints from our environment.</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
@section('script')

@endsection
