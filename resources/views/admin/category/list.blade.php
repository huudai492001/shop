@extends('admin.layout.layout')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>S.no</th>
                <th>Category Name</th>
                <th>Parent Category Name</th>
                <th>Category created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $key=>$categorie)
                <tr>
                    <td>{{$key++}}</td>
                    <td>{{$categorie->name}}</td>
                    <td>
                        @if($categorie->category_id)
                            {{$categorie->parent->name}}
                        @else
                            No parent id
                        @endif
                    </td>
                    <td>{{$categorie->created_at}}</td>
                    <td>
                        <a href="{{route('admin.edit', $categorie->id)}}"> <i class="fa fa-edit"></i></a>
                        |
                        <a href="javascript:void(0)" style="font-size: 17px; padding: 5px;" data-id="{{$categorie->id}}" class="category_delete" >
                        <i class="fa fa-trash"></i></a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@push('footer-script')
    <script>

        $('.category_delete').on('click', function (){
            if(confirm('Are you delete this category')){
                var id = $(this).data('id');
                $.ajax({
                    url: '{{route('admin.delete')}}',
                    method: 'post',
                    data:{
                        _token:"{{csrf_token()}}",
                        'id':id
                    },
                    success:function (data){
                        location.reload();
                    }

                })
            }
        });
    </script>

@endpush
