@extends('components.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('order.show' , $invoice->id)}}">orders</a></li>
        </ol>
    </nav>

    <div class="row" >
        <div class="col-md-12">
            <div class="card">
                <div class="card-body" id="invoice">
                    <div class="container-fluid d-flex justify-content-between">
                        <div class="col-lg-3 ps-0">
                            <a href="#" class="noble-ui-logo d-block mt-3">Orders<span>management</span></a>
                            <p class="mt-1 mb-1"><b>Invoice</b></p>
                            <p>street:<br>Address:<br>City:</p>
                            <h5 class="mt-5 mb-2 text-muted">Invoice to :</h5>
                            <p>{{$invoice->user->name}}<br> {{$invoice->address}}<br> {{$invoice->city}}</p>
                        </div>
                        <div class="col-lg-3 pe-0">
                            <h4 class="fw-bold text-uppercase text-end mt-4 mb-2">invoice</h4>
                            <h6 class="text-end mb-5 pb-4"># INV-{{$invoice->id + 1000}}</h6>
{{--                            <p class="text-end mb-1"></p>--}}{{--Balance Due--}}
{{--                            <h4 class="text-end fw-normal"></h4>--}}{{--$ 72,420.00--}}
                            <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Invoice Date :</span>{{$invoiceDate}}</h6>
                            <h6 class="mb-0 mt-3 text-end fw-normal mb-2"><span class="text-muted">Expect_delivery_date :</span>{{$invoice->expect_delivery_date}}</h6>

                            <h6 class="text-end fw-normal"><span class="text-muted">Due Date :</span>{{$invoice->payment->name}}</h6>
                        </div>
                    </div>
                    <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                        <div class="table-responsive w-100">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>URL</th>
                                    <th class="text-end">Cost</th>
                                    <th class="text-end">Shipping Cost</th>
                                    <th class="text-end">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="text-end">
                                    <td class="text-start">{{$invoice->id}}</td>
                                    <td class="text-start">{{$invoice->url}}<br>specs:{{$invoice->specs}}</td>
                                    <td>${{$invoice->cost}}</td>
                                    <td>${{$invoice->shipping_cost}}</td>
                                    <td>${{$totalCost}}</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
{{--                    <div class="container-fluid mt-5 w-100">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-6 ms-auto">--}}
{{--                                <div class="table-responsive">--}}
{{--                                    <table class="table">--}}
{{--                                        <tbody>--}}
{{--                                        <tr>--}}
{{--                                            <td>Sub Total</td>--}}
{{--                                            <td class="text-end">$ 14,900.00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>TAX (12%)</td>--}}
{{--                                            <td class="text-end">$ 1,788.00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td class="text-bold-800">Total</td>--}}
{{--                                            <td class="text-bold-800 text-end"> $ 16,688.00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr>--}}
{{--                                            <td>Payment Made</td>--}}
{{--                                            <td class="text-danger text-end">(-) $ 4,688.00</td>--}}
{{--                                        </tr>--}}
{{--                                        <tr class="bg-light">--}}
{{--                                            <td class="text-bold-800">Balance Due</td>--}}
{{--                                            <td class="text-bold-800 text-end">$ 12,000.00</td>--}}
{{--                                        </tr>--}}
{{--                                        </tbody>--}}
{{--                                    </table>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="container-fluid w-100">
                        <a href="javascript:;" class="btn btn-primary float-end mt-4 ms-2"><i data-feather="send" class="me-3 icon-md"></i>Send Invoice</a>
                        <a href="#null" onclick="window.print()" class="btn btn-outline-primary float-end mt-4"><i data-feather="printer" class="me-2 icon-md"></i>Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <script type="text/javascript">--}}

{{--        function printContent(id){--}}
{{--            str=document.getElementById(id).innerHTML--}}
{{--            newwin=window.open('','printwin','left=100,top=100,width=400,height=400')--}}
{{--            newwin.document.write('<HTML>\n<HEAD>\n')--}}
{{--            newwin.document.write('<TITLE>Print Page</TITLE>\n')--}}
{{--            newwin.document.write('<script>\n')--}}
{{--            newwin.document.write('function chkstate(){\n')--}}
{{--            newwin.document.write('if(document.readyState=="complete"){\n')--}}
{{--            newwin.document.write('window.close()\n')--}}
{{--            newwin.document.write('}\n')--}}
{{--            newwin.document.write('else{\n')--}}
{{--            newwin.document.write('setTimeout("chkstate()",2000)\n')--}}
{{--            newwin.document.write('}\n')--}}
{{--            newwin.document.write('}\n')--}}
{{--            newwin.document.write('function print_win(){\n')--}}
{{--            newwin.document.write('window.print();\n')--}}
{{--            newwin.document.write('chkstate();\n')--}}
{{--            newwin.document.write('}\n')--}}
{{--            newwin.document.write('<\/script>\n')--}}
{{--            newwin.document.write('</HEAD>\n')--}}
{{--            newwin.document.write('<BODY onload="print_win()">\n')--}}
{{--            newwin.document.write(str)--}}
{{--            newwin.document.write('</BODY>\n')--}}
{{--            newwin.document.write('</HTML>\n')--}}
{{--            newwin.document.close()--}}
{{--        }--}}

{{--    </script>--}}
@endsection
