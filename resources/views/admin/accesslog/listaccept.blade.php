 @extends('admin.accesslog.listHeader')
 @section('status')
  <small style="color:green">[Accept]</small>
  @endsection
 
  @section('table')
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr >
                                <th>Id</th>
                                <th>Name</th>
                                <th>Resource</th>
                                <th>Request</th>
                                <th>Send Date</th>
                                <th>Reason</th>
                                <th>Deny</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($accesslog as $acc)
                            <tr class="odd gradeX" align="center">
                                <td>{{$acc->id}}</td>
                                <td>{{$acc->user->firstName}}</td>
                                <td>{{$acc->resource->resName}}</td>
                                <td>{{$acc->requestDate}}</td>
                                <td>{{$acc->sendDate}}</td>
                                <td>{{$acc->reason}}</td>
                               <td><i class="fa fa-close  fa-fw" style="color:red"></i><a href="admin/accesslog/deny/{{$acc->id}}"></a></td>
                            </tr>
                        @endforeach
                
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    @endsection

@section('script')
<script>
      $(".btn-success").hide();
</script>
@endsection