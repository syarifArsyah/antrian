@extends('layouts.app')

@section('content')
    <h1>List Expedisi</h1>
    <div class="row my-2">
        <div class="col">
            <button type="button" id="addData" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus"></i> Tambah Data
              </button>
        </div>
    </div>
    
    <div class="row">
        <div class="col">
            <table class="table" id="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Expedisi</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($expedisis as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>
                                <button class="btn btn-warning btn-sm py-1 px-3"><i class="fa fa-pencil"></i> Edit</button>
                                <button class="btn btn-danger btn-sm py-1 px-3"><i class="fa fa-trash"></i> Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Expedisi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form name="expedisiForm">
                        @csrf
                        {{-- <input type="hidden" name="expedisi_id" id="expedisi_id"> --}}
                        <div class="row">
                            <div class="col-xs-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nama Expedisi : </strong>
                                    <input type="text" name="nama" id="namaexpedisi" placeholder="Nama Expedisi" class="form-control @error('namaexpedisi') is-invalid @enderror" autofocus>
                                    @error('namaexpedisi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <button type="button" id="closeModal" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="btn-save" name="btn-save" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            function modalClose() { 
                $(".modal-fade").modal("hide");
                $(".modal-backdrop").remove();

            $('#addData').on('click',function(){
                $("#btn-save").html('Create-expedisi');
                $('#modalTambah').modal('show');
            });

             }

            $(document).on('click','#closeModal', function(e){
                modalClose();
            });

            $('#btn-save').on('click',function(e){
                e.preventDefault();
                $('#modalTambah').modal('show');

                var nama = $('#namaexpedisi').val();
                // console.log(nama);
                $.ajax({
                    type    : 'POST',
                    url     : "{{route('expedisi.store')}}",
                    data    : {nama:nama},
                    success : function(data){
                        if($.isEmptyObject(data.error)){
                            // location.reload();
                            $('#modalTambah'). modal('toggle');
                            Swal.fire({
                            position: 'top-center',
                            icon: 'success',
                            title: 'Success',
                            showConfirmButton: false,
                            timer: 1500
                             }),
                             setInterval(() => {
                                 location.reload();
                             }, 1500);
                             modalClose();
                        }else{
                            console.log(data.error)
                        }
                    }
                })
            });
        });
    </script>
@endpush