@extends('dashboards.app')

@section('body')
    

    <div id="content-wrapper">
        <!-- /.container-fluid -->
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/index">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><a href="rab">RAB</a></li>
            </ol>
    
    <div class="container">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
        <table class="table table-striped" id="mytable">
          <thead>
            <tr>
              <th>Kode POS</th>
              <th>Kategori</th>
              <th>Kode Sub</th>
              <th>Uraian</th>
              <th>Jumlah Mata Angg</th>
              <th>Jumlah POS</th>
              <th>Jumlah Total</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($rab as $RAB) 
            <tr>
              <td>{{$RAB->KODE_POS}}</td>
              <td>{{$RAB->KATEGORI}}</td>
              <td>{{$RAB->KODE_SUB}}</td>
              <td>{{$RAB->URAIAN}}</td>
              <td>{{$RAB->JML_MATA_ANGG}}</td>
              <td>{{$RAB->JML_POS}}</td>
              <td>{{$RAB->JML_TOTAL}}</td>
              <td>                        
                <a href="javascript:void(0);" class="btn btn-sm btn-info edit" data-id="" data-product_name="" data-product_price="}">Edit</a>
                <a href="javascript:void(0);" class="btn btn-sm btn-danger delete" data-id="">Delete</a>
              </td>
            </tr>
            @endforeach                        
          </tbody>
        </table>
        <table>
            <tr>
                <td>Halaman</td>
                <td>: {{ $rab->currentPage() }}</td>
            </tr>
            <tr>
                <td>Jumlah Data</td>
                <td>: {{ $rab->total() }} </td>
            </tr>
            <tr>
                <td>Data Per Halaman</td>
                <td>: {{ $rab->perPage() }} </td>
            </tr>
        </table>

        {{ $rab->links() }}
      </div>

      <!-- Modal Add Produk-->
      <form action="/saverab" method="POST">
        {{ csrf_field() }}
        <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add New RAB</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
                <div class="form-group">
                    <p class="form-control">Kode POS
                        <select onclick="typeB()" class="kode_pos" id="kode_pos" name='kode_pos'>
                            <option value='B1'>B1</option>
                            <option value='B2'>B2</option>
                            <option value='B3'>B3</option>
                            <option value='B4'>B4</option>
                            <option value='B5'>B5</option>
                            <option value='B6'>B6</option>
                            <option value='B7'>B7</option>
                        </select>
                    </p>
                    <input type="text" id="typeBOut1" name="kategori" hidden="true">
                    <input class="form-control" id="typeBOut2" type="text" name="kategori" disabled="true">                                
                </div>
               <div class="form-group">
                   <input type="text" id="kode_sub" name="kode_sub" class="form-control" placeholder="Kode Sub" required>
               </div>
               <div class="form-group">
                   <input type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian" required>
               </div>
               <div class="form-group">
                   <input type="text" id="jumlah_mata_angg" name="jumlah_mata_angg" class="form-control" placeholder="Jumlah Mata Angg" required>
               </div>
               <div class="form-group">
                   <input type="text" id="jumlah_pos" name="jumlah_pos" class="form-control" placeholder="Jumlah POS" required>
               </div>
 
             </div>
             <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Save</button>
             </div>
           </div>
         </div>
        </div>
     </form>

     <!-- Modal Update Produk-->
       <form action="/update" method="post">
           <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Edit RAB</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                      <input type="text" name="product_name" class="form-control product_name" placeholder="Product Name" required>
                  </div>
     
                  <div class="form-group">
                      <input type="text" name="product_price" class="form-control price" placeholder="Price" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <input type="hidden" name="id" class="product_id">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </div>
            </div>
           </div>
      </form>
 
     <!-- Modal Delete Produk-->
      <form id="add-row-form" action="/delete" method="post">
         <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                   <div class="modal-header">
                                        <h5 class="modal-title" id="myModalLabel">Delete RAB</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   </div>
                   <div class="modal-body">
                                                 <strong>Anda yakin mau menghapus data ini?</strong>
                   </div>
                   <div class="modal-footer">
                                            <input type="hidden" name="product_id" class="form-control product_id2" required>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Delete</button>
                   </div>
                    </div>
            </div>
         </div>
     </form>

    </div>


@endsection