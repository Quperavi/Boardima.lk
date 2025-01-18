@extends('layouts.app')
@section('content')

<div class="container mt-n10 pt-15">
    <div class="card mb-4">
        <div class="card-body">
            <div class="datatable">
                <table class="table table-striped table-bordered h-auto" cellspacing="0" width="100%"  id="dataTable" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Slots</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Slots</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https:////cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script>
        function loadData(data) {
            $('#dataTable').DataTable( {
                destroy: true,
                paging: true,
                searching: true,
                data : data
            });
        }

        function tableData() {
            $.ajax({
                url: `/api/boading/list`,
                method: "get",
                contentType: "application/json; charset=utf-8",
                success: async function (data) {
                    if (data.status == "true" || data.status == true) {
                        const arr = [];

                        let wait = new Promise(resolve => {
                            if (data.data.length === 0) {
                                resolve(arr);
                            }
                            for (var i = 0; i < data.data.length; i++){

                                let item = data.data[i];
                                let row = [];
                                row.push(i+1);
                                row.push(`<span class="i${item.id}">${item.name}</span>`);
                                row.push(`<span class="i${item.id}">${item.price}</span>`);
                                row.push(`<span class="i${item.id}">${item.slots}</span>`);
                                row.push(`<span class="i${item.id}">${item.address}</span>`);
                                row.push(`<div style="display:flex; justify-content:center; ">
                            <button style="margin-right: 10px;"
                            class="btn btn-datatable btn-icon btn-transparent-dark mr-2 ml-2 p-3 bg-info" >
                                <i class="fa fa-pen text-light" aria-hidden></i>
                            </button>
                            <button  class="btn btn-datatable btn-icon btn-transparent-dark ml-2 p-3   bg-danger">
                                <i class="fa fa-trash text-light "  aria-hidden="true"></i>
                            </button>
                            </div>`);
                                arr.push(row);


                                if ( i == arr.length -1){
                                    resolve(arr);
                                }
                            }
                        })

                        data = await wait;

                        loadData(data)

                    } else {
                        iziToast.error({
                            timeout: 5000,
                            icon: 'fa fa-ban',
                            title: 'Error',
                            message: data.massage,
                        });
                    }
                },
                error: function (data) {

                    if( !data.responseJSON.status ){
                        iziToast.error({
                            timeout: 5000,
                            icon: 'fa fa-ban',
                            title: 'Error',
                            message: data.responseJSON.massage,
                        });
                    }
                }
            });
        }tableData()
    </script>

@endsection

