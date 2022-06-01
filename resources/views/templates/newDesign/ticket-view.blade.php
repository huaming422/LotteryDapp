@extends('templates.newDesign.master')
@section('content')
    <section class="powerball">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>View Ticket</h2>
                </div>
            </div>
        </div>
    </section>


    <section class="lottery-result-section section-padding has_bg_image d-flex align-items-center">
        <div  class="container">
            <div  class="row justify-content-center">
                <div  class="col-lg-7">
                    <div  class="section-header text-center"></div>
                </div>
            </div>
            <div  class="row">
                <div  class="col-lg-10 m-auto">
                    <div  class="lottery-winning-num-part">
                        <div  class="lottery-winning-num-table">
                            <div  class="lottery-winning-table">
                                <table >
                                    <thead >
                                        <tr >
                                            <th  class="date">Transaction #</th>
                                            <th  class="numbers">Ticket number</th>
                                            <th  class="date">Draw Date</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        @foreach($data as $d)
                                            <tr>
                                                <td  class="date">{{ $d->trans }}</td>
                                                <td  class="numbers">{{ $d->tktno }}</td>
                                                <td  class="date">{{ $d->drawdate }}</td>
                                            </tr>
                                        @endforeach
   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-12 text-center"><a  class="text-btn"
                                                        href="#">See the latest results</a></div>
            </div>
        </div>
    </section>

@endsection
