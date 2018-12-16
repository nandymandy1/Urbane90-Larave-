<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Category;

class ProductController extends Controller
{
    // Load products 
    public function loadProducts($collection){

        $products = Product::where('collection', $collection)->orderBy('created_at')->get();
        $category = Category::where('dirName', $collection)->first()->name;
        // return $category;
        return view('urbane.collection', ['collection' => $category])-> with('products', $products);
    }

    // Add product
    public function addProduct(Request $req){

        $product = new Product();
        $product->name = $req->input('title');
        $product->description = $req->input('description');
        $product->collection = $req->input('collection');

        // Decode the Image
        $expolded = explode(',', $req->image);
        $decodedImg = base64_decode($expolded[1]);
        
        // Encode the File Type
        if(str_contains($expolded[0] , 'jpeg')){
            $ext = 'jpeg';
        } else if (str_contains($expolded[0] , 'jpg')) {
            $ext = 'jpg';
        } else if (str_contains($expolded[0] , 'gif')) {
            $ext = 'gif';
        } else if (str_contains($expolded[0] , 'png')) {
            $ext = 'png';
        } else {
            $ext = 'tiff';
        }

        $fileName = str_random().'.'.$ext;
        $path = __DIR__ . '/../../../../assets/img/collections/'.$product->collection.'/'.$fileName;
        file_put_contents($path, $decodedImg);
        $product->img_path = $fileName;
        $product->save();
        return response()->json(['success' => true , 'msg' => 'Product Added Successfully.']);
        
    }

    // Add a new Category
    public function addCategory(Request $req){
        $category = new Category();
        $category->name = $req->input('category');
        $category->dirName = $req->input('dirName');
        mkdir(__DIR__ . '/../../../../assets/img/collections/'. $category->dirName , 0777, true);
        $category->save();
        return response()->json(['category' => $category, 'success' => true]);
    }

    // Return all the Categories to the user
    public function getCategories(){
        $category = Category::all();
        return response()->json(['categories'=> $category]);
    }

    // Delete all the categories 
    public function deleteCategory(Request $req){
        $category = Category::find($req->input('id'));
        $this->removeDirectory(__DIR__ . '/../../../../assets/img/collections/'. $category->dirName);
        $category->delete();
        return response()->json(['success' => true]);
    }

    function removeDirectory($path) {
        $files = glob($path . '/*');
       foreach ($files as $file) {
           is_dir($file) ? removeDirectory($file) : unlink($file);
       }
       rmdir($path);
        return;
   }

    // Get Products Counts
    public function getProdCount(){
        return Product::count();
    }

    // Delete Products
    public function deleteProduct(Request $req){
        $product = Product::find($req->input('id'));
        unlink(__DIR__ . '/../../../../assets/img/collections/'. $product->dirName . '/' .$product->img_path);
        $product->delete();
        return response()->json(['success' => true]);
    }

    // Get all the prodoucts
    public function getProducts(){
        return Product::paginate(10);
    }

    
}
