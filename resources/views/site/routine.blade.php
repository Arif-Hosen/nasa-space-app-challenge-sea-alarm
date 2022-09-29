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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <section class="panel">
                            <header class="panel-heading">
                                <h2 style="text-align: center" class="panel-title">List of </h2>
                            </header>
                            <div class="panel-body">


                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-xl-12 text-right mb-3">
                                        <input type="datetime-local">
                                    </div>
                                </div>
                                {{--<table class="table table-bordered table-striped mb-none" id="data-table">--}}
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                                       cellspacing="0" width="100%" style="font-size: 14px">

                                    <thead>
                                    <tr>
                                        <th width="10">No:</th>
                                        <th>Factor</th>
                                        <th width="200">Created</th>

                                        <th width="50">Status</th>
                                        {{--                                    <th width="50">Nav Status</th>--}}
                                    </tr>
                                    </thead>
                                    <tbody>

                                        <tr>
                                            <td class="p-2">1</td>
                                            <td class="p-1">Plantation</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td class="p-1">waste your food?</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td class="p-1">wash your cloth in normal water?</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td class="p-1">Reusable bag</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td class="p-1">Electronics- Energy Star products</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td class="p-1">Use bi cycle</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td class="p-1">Aware using electricity</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                                            <td class="p-1">talk others about CO2 emission</td>
                                            <td width="200" class="p-1">{{ date('F d, Y h:i A', strtotime('time')) }}</td>







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
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>





@endsection
@section('script')

@endsection
