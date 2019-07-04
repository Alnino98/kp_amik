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
                <li class="breadcrumb-item active"><a href="rapb">RAPB</a></li>
            </ol>
    
    <div class="container">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModalAdd">Add New</button>
        <table class="table table-striped" id="mytable">
          <thead>
            <tr>
              <th>Uraian</th>
              <th>Semester</th>
              <th>Jumlah Mahasiswa</th>
              <th>Jumlah SKS/MK</th>
              <th>Besarnya</th>
              <th>Jumlah 100%</th>
              <th>Jumlah 90%</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($rapb as $RAPB) 
            <tr>
              <td>{{$RAPB->KATEGORI}}</td>
              <td>{{$RAPB->URAIAN}}</td>
              <td>{{$RAPB->SEMESTER}}</td>
              <td>{{$RAPB->JML_MHS}}</td>
              <td>{{$RAPB->JML_SKS}}</td>
              <td>{{$RAPB->BESARNYA}}</td>
              <td>{{$RAPB->JML_100}}</td>
              <td>{{$RAPB->JML_90}}</td>
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
                <td>: {{ $rapb->currentPage() }}</td>
            </tr>
            <tr>
                <td>Jumlah Data</td>
                <td>: {{ $rapb->total() }} </td>
            </tr>
            <tr>
                <td>Data Per Halaman</td>
                <td>: {{ $rapb->perPage() }} </td>
            </tr>
        </table>

        {{ $rapb->links() }}
      </div>

      <!-- Modal Add Produk-->
      <form action="/saverab" method="POST">
        {{ csrf_field() }}
        <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add New RAPB</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>
             <div class="modal-body">
                <div class="form-group">
                    <p class="form-control">KATEGORI
                        <select onclick="typeB()" class="KATEGORI" id="KATEGORI" name='KATEGORI'>
                            <option value='danabangunan'>Dana Bangunan</option>
                            <option value='biayatetap'>Biaya Tetap</option>
                            <option value='biayasks'>Biaya SKS</option>
                            <option value='biayapraktikum'>Biaya Praktikum</option>
                            <option value='registrasi'>Registrasi</option>
                            <option value='perpustakaan'>Perpustakaan</option>
                            <option value='kerjapraktek'>Kerja Praktek</option>
                            <option value='tugasakhir'>Tugas Akhir</option>
                            <option value='biayapbma'>Biaya PBMA</option>
                            <option value='biayauts'>Biaya UTS</option>
                            <option value='biayauas'>Biaya UAS</option>
                            <option value='biayawisuda'>Biaya Wisuda</option>
                        </select>
                    </p>
                                                    
                </div>
               <div class="form-group">
                   <input type="text" id="uraian" name="uraian" class="form-control" placeholder="Uraian" required>
               </div>
               <div class="form-group">
                   <input type="text" id="semester" name="semester" class="form-control" placeholder="Semester" required>
               </div>
               <div class="form-group">
                   <input type="text" id="jumlahmahasiswa" name="jumlahmahasiswa" class="form-control" placeholder="Jumlah Mahasiswa" required>
               </div>
               <div class="form-group">
                   <input type="text" id="jumlahsks" name="jumlahsks" class="form-control" placeholder="Jumlah SKS" required>
               </div>
               <div class="form-group">
                   <input type="text" id="besarnya" name="besarnya" class="form-control" placeholder="Besarnya" required>
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
                  <h5 class="modal-title" id="exampleModalLabel">Edit RAPB</h5>
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
                                        <h5 class="modal-title" id="myModalLabel">Delete RAPB</h5>
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