<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

##CRUD
<hr>
##Data insert (Query Builder Laravel) :
<pre>
        public function newProduct(Request $request){
        DB::table('products')->insert([
            'mname'       => $request->mname,
            'memail'      => $request->memail,
            'mphone'      => $request->mphone,
            'mdepertment' => $request->mdepertment,
            'gender'      => $request->gender,
        ]);
    }
</pre>


##Data insert (Eloquent ORM) Way-1 :
<pre>
        public function newProduct(Request $request){
        $product = new Product();
        $product->mname         = $request-> mname;
        $product->memail        = $request-> memail;
        $product->mphone        = $request-> mphone;
        $product->mdepertment   = $request-> mdepertment;
        $product->gender        = $request-> gender;
        $product->save();

        return redirect('all-product')->with('message', 'Product Insert Successfully');
    }
</pre>

##Data insert (Eloquent ORM) Way-2 :
<pre>
         public function newProduct(Request $request){
           Product::create($request->all());
           return redirect('all-product')->with('message', 'Product Insert Successfully');
         }
</pre>

##Data show (Eloquent) :
<pre>
        public function allProduct(){
        $products = Product::all();
        return view('frontEnd.home.showProduct',[
            'products' => $products         //data pass by url
        ]);
        }
</pre>

<h4>FrontEnd For show</h4>
 <pre>
       @foreach ($products as $product)
        <tr>
			<td>{{ $product->mname }}</td>
			<td>{{ $product->memail }}</td>
			<td>{{ $product->mphone }}</td>
            <th>{{ $product->gender == 1 ? 'Male' : 'Female' }}</th>
			<td>{{ $product->mdepertment}}</td>
		</tr>
        @endforeach
 </pre>

##Data Edit 
 
    <a href="{{ route('editProduct',['id'=>$product->id])}}" class="btn btn-warning"><i class="far fa-edit"></i></a>


  <pre>
    Route::get('edit-product/{id}', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
 </pre>
 
  <pre>
     public function editProduct($id){
        $products = Product::find($id); //find table row by $id
        return view('frontEnd.home.editProduct',[
            'products' => $products //data pass by url
        ]);
    }
 </pre>
 FrontEnd :

        <form action="#" method="">
                @csrf
                <input class="myinput" type="text" name="mname" value="{{ $products->mname }}">
                <input class="myinput" type="email" name="memail" value="{{ $products->memail }}">
                <input class="myinput" type="phone" name="mphone" value="{{ $products->mphone }}">
                <input class="myinput" type="text" name="mdepertment" value="{{$products->mdepertment}}">
                <h6>Gender</h6>
                Male : <input class="" type="radio" value="1" name="gender" {{ $products->gender == 1 ? 'checked ': '' }}>
                Female : <input class="" type="radio" value="0" name="gender" {{ $products->gender == 0 ? 'checked' : '' }}>
                <br>
                <input type="submit" name="sbmt" value="Update Product" class="mt-2 ">
        </form>
        
##Data Update

        <form action="{{ route('updateProduct') }}" method="post">
                @csrf
                <input class="myinput" type="text" name="mname" value="{{ $products->mname }}">
                <input class="myinput" type="hidden" name="id" value="{{ $products->id }}">
                <input class="myinput" type="email" name="memail" value="{{ $products->memail }}">
                <input class="myinput" type="phone" name="mphone" value="{{ $products->mphone }}">
                <input class="myinput" type="text" name="mdepertment" value="{{$products->mdepertment}}">
                <h6>Gender</h6>
                Male : <input class="" type="radio" value="1" name="gender" {{ $products->gender == 1 ? 'checked ': '' }}>
                Female : <input class="" type="radio" value="0" name="gender" {{ $products->gender == 0 ? 'checked' : '' }}>
                <br>
                <input type="submit" name="sbmt" value="Update Product" class="mt-2 ">
         </form>
         
   <pre>
        public function updateProduct(Request $request){
            $product = Product::find($request->id);
            $product->mname = $request->mname;
            $product->memail = $request->memail;
            $product->mphone = $request->mphone;
            $product->mdepertment = $request->mdepertment;
            $product->gender = $request->gender;
            $product->save();
            return redirect('all-product')->with('message', 'Product Edit Successfully');
            }
   </pre>
   
   ##Data Delete
   
    <a href="{{ route('deleteProduct',['id'=>$product->id])}}" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
    

<pre>
      public function deleteProduct($id){
      $product = Product::find($id);
      $product->delete();
      return redirect('all-product')->with('message', 'Product Delete Successfully');
      }
</pre>
