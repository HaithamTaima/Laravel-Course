<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**first : SQL  Native*/

        //select *from products
//        $data = DB::select('SELECT * FROM products');
        //for+==========
//        for ($i=0; $i< count($data)  ;$i++){
//            echo "ID: ".$data[$i]->id.' ::  Name '.$data[$i]->name. '<br>';
//        }


//        foreach ($data as $product){
//            echo "ID:  $product->id ::Name: $product->name <br>";
//        }
        /**Query builder */

//        $data=DB::table('products')->get(['id','name','price']);
//        $data=DB::table('products')->get();
//        $data=DB::table('products')->select()->get();
//
//        foreach ($data as $product){
//           echo "ID:  $product->id ::Name: $product->name <br>";
//        }

        /**Eloquent*/
        $data = Product::all();
                foreach ($data as $product){
            echo "ID:  $product->id ::Name: $product->name <br>";
        }
                /**  index DELETE at وسلة المحذوفات  */
        //$data=Product::where( 'deleted at', '=', null)->get();
        //$data=Product::whereNull( 'deleted at')->get();
        //$data=Product::withTrashed()->get();
        //$data=Product::withoutTrashed()->get();
        //$data=Product::withoutTrashed()->get();
        //$data=Product::onlyTrashed()->get();


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        /** first sql native*/
//        $isSaved =DB::insert('INSERT INTO Products (name ,price ) values (?,?)',['products name 1',4]);
//        echo $isSaved ? 'Saved successfully':'Save failed !';

        /**second: query builder*/
//        $isSaved=DB::table('products')->insert([
//            'name'=>'QB products 2',
//            'price'=>39,
//            'created_at'=>now(),
//            'updated_at'=>now(),
//        ]);
//        echo $isSaved ? 'Saved successfully':'Save failed ! ';

//        $newRowId=DB::table('products')->insertGetId([
//            'name'=>'QB products 3',
//            'price'=>90,
//        ]);
//        echo "new row idd $newRowId";

        /**Third : Eloquent*/
        $product = new Product();
        $product->name = 'Eloquent product (1)';
        $product->price = 40;
        $isSaved = $product->save();
        echo $isSaved ? 'Saved successfully' : 'Saved Failed';

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        /** First: SQL Native*/
//        $item=DB::selectOne('SELECT * FROM products WHERE id =?',[$id]);
//
//        if (!is_null($item)){
//            echo "ID : $item->id  ::Name $item->name";
//        }


        /** Second: Query Builder*/

//        $item=DB::table('products')->where('id','=',$id)->first();
//        $item=DB::table('products')->find($id);
//
//            echo "ID : $item->id  ::Name $item->name";
//
//
        /**Third: Eloquent*/

//        $item=Product::where('id','=','$id')->all(); ERROR
//        $item=Product::where('id','=',$id)->first();
//        $item=Product::find($id);
//        $item=Product::findOrFail($id);

//        echo "ID : $item->id  ::Name $item->name";

        //echo "ID : $product->id  ::Name $product->name";

        /** ****************************DELETE****************************************** */
        //First:SQL Native
        //DELETE FROM products;
        //DELETE FROM products WHERE id = 1;

//        $countOfDeletedRows =DB::delete('DELETE FROM products WHERE id = ?',[$id]);
//        echo $countOfDeletedRows > 0 ?'Deleted successfully ': 'Delete failed! ';

        // Second: Query Builder
//        $countOfDe1etedRows = DB:: table( 'products' )->where( 'id','=',$id)->delete();
//        $countOfDe1etedRows = DB:: table( 'products' )->delete();

//        echo $countOfDe1etedRows >0?'Deleted sucessfuly ':'Delete failed';

            //Eloquent
            /** /=> 1) (FORCE DELETE )      */
        //$countOfDeletedRows= Product::destroy(1,2,3,4,5);

        //$countOfDeletedRows= Product::destroy($id);
        //echo $countOfDeletedRows >0?'Deleted sucessfuly ':'Delete failed';

        //$deleted =Product::findOrFail($id)->delete();

        //$product = Product::findOrFail($id);
        //$deleted=$product->delete();
        //echo $deleted ? 'Deleted successfully' : 'Delete failed !';

            /**  /=> 2) (SOFT DELETE) */
                //   1) Delete (SOFT) => Trashed Deleted_at != NULL
//        $product = Product::findOrFail($id)->delete();
//        echo $product ? 'Deleted successfully' : 'Delete failed !';

        /** 2) Restore =>Deleted_at != NULL برجع id لمحذوف من سلة المهملات  */
//        $product =Product::onlyTrashed()->findOrFail($id);
//        $restored =$product->restore();
//        echo $product ? 'Restore successfully' : 'Delete failed !';

        /**  3) Delete (SOFT=>Force) => FORCE DELETED* الحذف النهائي */
        $deleted =Product::findOrFail($id)->forceDelete();
        echo $deleted ? 'Deleted successfully' : 'Delete failed !';

    }

    /**
     * Show the form for editing the specified resource.
     */
    //Product $product
    public function edit($id)
    {
        /** First: SQL Native*/
        //UPDATE PRODUCTS SEt name ='NewName';
        //UPDATE products SET name ='NewName' WHERE id =1;

        //$countOfUpdatedRows =DB::update(
        //'UPDATE products SET name =? WHERE id = ? ',
        //['Updated Name',$id],
        //);
        //echo $countOfUpdatedRows ==1 ? 'Updated Successfully' : 'Update failed!';
        /** Second: Query Builder*/
        //$countOfUpdatedRows = DB::table('products')->where('id', '=', $id)->update([
            //'name' => 'QB Update' ,
            //'price'=>45,
        //]);
        //echo $countOfUpdatedRows ==1 ? 'Updated Successfully' : 'Update failed!';

        /**Third: Eloquent*/
        //$product = Product::where('id','=',$id)->first();
        //$product=Product::find($id);

        //$product=Product::findOrFail($id);
        //$product->name='Updated Eloquent Product';
        //$updated =$product->save();
        //echo $updated ?'Updated Successfully':'Update failed!';

        $updated =Product::where('id','=',$id)->update([
            'name'=>'Eloquent',
        ]);
        echo $updated ? 'Updated Successfully ':'Update failed!';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
