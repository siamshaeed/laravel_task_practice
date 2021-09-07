<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

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
        $product->mname   = $request-> mname;
        $product->memail   = $request-> memail;
        $product->mphone   = $request-> mphone;
        $product->mdepertment   = $request-> mdepertment;
        $product->gender   = $request-> gender;
        $product->save();

        return redirect('all-product')->with('message', 'Product Insert Successfully');
    }
</pre>
