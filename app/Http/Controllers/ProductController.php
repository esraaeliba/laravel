<?php 

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

 
class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view ('products.index')->with('products', $products);
    }
 
    public function create()
    {
        return view('products.create');
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'price' => ['required', 'numeric', 'gt:0'],
            'images' => ['required', 'string'],
            'category_id' => ['required', 'exists:categories,id'],
            'description' => ['required', 'string'],
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'valid' => false,
                    'message' => 'something went wrong',
                    'errors' => $validator->errors()
                ],
                400,
            );
        }
        $request->merge (['images'=>[
                 'links'=> explode(';', $request->images)
                ]]);
        $newProduct = Product::create($request->all());

        return redirect()->route('product.index')
                    ->with('success','Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product', $product);
    }
 
   
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit')->with('product', $product);
    }
 
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $input = $request->all();
        $product->update($input);
        return redirect('product')->with('flash_message', 'product Updated!');  
    }
 
   
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect('product')->with('flash_message', 'product deleted!');  
    }
}
