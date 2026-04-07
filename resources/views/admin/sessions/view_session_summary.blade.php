@extends('layouts.admin')
@section('content')
<!-- ============================================================== -->
<div class="page-breadcrumb">
   <div class="row">
      <div class="col-10 d-flex no-block align-items-center">
         <h4 class="page-title">User Session Summary</h4>        
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
                      <td style="width:5px"><strong>Sr No</strong></td>
                      <th style="width:5px"><strong>Session Date</strong></th>
                      <th style="width:10px"><strong>User</strong></th>
                      <th style="width:20px"><strong>Complaints</strong></th>
                      <th style="width:20px"><strong>Observations</strong></th>
                      <th style="width:20px"><strong>Recommendations</strong></th>
                      <th style="width:5px"><strong>Next session date</strong></th>
                     </tr>
                   </thead>
                   <tbody>
                    @if(count($result)>0)
                     @foreach($result as $key => $summary)
                     <tr> 
                      <td style="width:5px">{{$key+1}}</td>
                      <td style="width:5px">{{date('Y-m-d',strtotime($summary['created_at']))}}</td>
                      <td style="width:10px">{{$userName}}</td>
                      <td style="width:25px">{{$summary['cheif_complaints']}}</td>
                      <td style="width:25px">{{$summary['observations']}}</td>
                      <td style="width:25px">{{$summary['recommendations']}}</td>
                      <td style="width:5px">{{date('Y-m-d',strtotime($summary['next_follow_up_date']))}}</td>
                      </tr>
                      @endforeach
                  @else
                  <tr><td colspan="7" align="center">No record found</td></tr>
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