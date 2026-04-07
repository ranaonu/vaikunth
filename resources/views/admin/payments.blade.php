@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-12 d-flex no-block align-items-center">
         <h4 class="page-title">Payments</h4>        
      </div>
   </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
   
    <div class="row">
      <div class="col-12">
         <div class="card">
             <div class="card-body">
               <div class="table-responsive">
                 <table
                   id="zero_config"
                   class="table table-striped table-bordered"
                 >
                   <thead>
                     <tr>
                        <td><strong>Id</strong></td>
                       <th><strong>Name</strong></th>
                       <th><strong>Total Amount</strong></th>
                       <th><strong>Total Paid</strong></th>
                       <th><strong>Balance</strong></th>
                       <th><strong>Action</strong></th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($getPayments)>0)
                      @foreach($getPayments as $key => $payment) 
                        <tr>
                          <td>{{$key+1}}</td>
                          <td>{{$payment['therepist_detail']['name']}}</td>
                          <td>{{$payment['total_amount']}}</td>
                          <td>{{$payment['total_paid']}}</td>
                          <td>{{$payment['total_amount'] - $payment['total_paid']}}</td>
                          <td>
                            <a href="{{url('/')}}/admin/edit/therapist/payment/{{base64_encode($payment['id'])}}"><button type="button" class="btn btn-info btn-sm text-white">
                              Edit
                            </button> </a>
                          </td>
                        </tr>
                      @endforeach
                    @else
                    <tr>
                      <td colspan="6" align="center">No Record found</td>
                    </tr>
                    @endif
                   </tbody>
                   
                 </table>
               </div>
             </div>
           </div>
         </div>
       </div>
</div>


@endsection