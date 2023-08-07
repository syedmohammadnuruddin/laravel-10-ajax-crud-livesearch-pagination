<table class="table table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($products as $key=>$product)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$product->name}}</td>
        <td>{{$product->price}}</td>
        <td>
            <a 
            class="btn btn-success update_product_form"
            data-bs-toggle="modal"
            data-bs-target="#updateModal"
            data-id="{{$product->id}}"
            data-name="{{$product->name}}"
            data-price="{{$product->price}}"
            href="">
            <i class="las la-edit"></i>
          </a>
            <a 
            class="btn btn-warning delete_product"
            data-id="{{$product->id}}"
             href="">
            <i class="las la-times"></i>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {!! $products->links() !!}