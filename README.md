<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

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

      <pre>
     FrontEnd :
       @foreach ($products as $product)
            <tr>
				<td>{{ $product->mname }}</td>
				<td>{{ $product->memail }}</td>
				<td>{{ $product->mphone }}</td>
                <th>{{ $product->gender == 1 ? 'Male' : 'Female' }}</th>
				<td>{{ $product->mdepertment}}</td>
				<td>
                    <a href="" class="btn btn-warning"><i class="far fa-edit"></i></a>
                    <a href="" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                </td>
			</tr>
        @endforeach
      </pre>
