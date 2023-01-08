<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
  // $product = new Product;
  // $product->name = 'ipod 11';
  // $product->price = 19.99;
  // $product->save();
  // $id = $product->id;
  // dd($product);

  //$product = Product::create(array('name'=>'Google Pixel','price'=>1000));
});

Route::get('/get', function () {
  $products = Product::all();
  //dd($products);

  foreach ($products as $product){
    echo "$product->name <br>";
  }
});

Route::get('product/{id}', function ($id) {
  $product = Product::find($id);
  echo "$product->name <br>";
});

Route::get('productPriceG/{price}', function ($price) {
  $products = Product::where('price','>',$price)->get();
  dd($products);
  //echo "$product->name <br>";
});

Route::get('count', function () {
  $count = Product::all()->count();
  dd($count);
  //echo "$product->name <br>";
});

// Return product(s) of a manufacturer
Route::get('productFromMan/{id}', function ($id) {
  $products = Manufacturer::find($id)->products;
  dd($products);
  // foreach($products as $product){
  //   echo "$product->name <br>";
  // }
});

// Return manufacturer of a product(s) using product ID
Route::get('manufaturerFromProd/{id}', function ($id) {
  $manufacturer = Product::find($id)->manufacturer;
  dd($manufacturer);
  // foreach($manufacturer as $man){
  //   echo "$man->name <br>";
  // }
});

// Return product(s) of a manufacturer
Route::get('productFromManCount', function () {
  $products = Manufacturer::all()->count();
  dd($products);
  // foreach($products as $product){
  //   echo "$product->name <br>";
  // }
});

// Route::get('/home', function () {
//   $sql = "select * from vehicles";
//   $sql2 = "select * from clients";
//   $sql3 = "select * from bookings";
//   // $items = array();
//   // $items[] = DB::select($sql);
//   // $items[] = DB::select($sql2);
//   // $items[] = DB::select($sql3);
//   //dd($items);
//   $vehicles = DB::select($sql);
//   $clients = DB::select($sql2);
//   $bookings = DB::select($sql3);
//   return view('homeCLASS')->with("vehicles",$vehicles);
// });

// Route::get('/book', function () {
//   $sql = "select * from vehicles";
//   $sql2 = "select * from clients";

//   $vehicles = DB::select($sql);
//   $clients = DB::select($sql2);

//   return view('formPHP')->with("vehicles",$vehicles)->with("clients",$clients);
// });



// Route::get('/allBookings', function () {
//   $sql = "SELECT img,name,make,model,V.rego,C.lisenceno,pickup,dropoff,B.Booking_id FROM vehicles AS V,clients AS C,bookings AS B WHERE B.lisenceno = C.lisenceno AND B.rego = V.rego;";

//   $bookings = DB::select($sql);

//   return view('bookings')->with("bookings",$bookings);
// });









// Route::get('/clients', function () {
//   $sql = "SELECT * FROM clients";
//   $clients = DB::select($sql);
//   return view('clients')->with("clients",$clients);
// });




// Route::get('/greeting', function () {
//     return view('greetingForm');
//     //return view('homeCLASS');
// });

// Route::post('/greeting', function () {
//     $name = request("name");
//     $age = request("age");
//     //$data = array();
//     //$data[] = $name;
//     //$data[] = $age;
//     //dd($data);
//     return view('greeting')->with('name',$name)->with('age',$age + 1);

// });

// Route::get('/newClient', function () {
//     return view('createClient');
// });

// Route::get('/detail', function () {
//   return view('detailPHP');
// });

// Route::get('detail/{id}', function ($id) {
//   //dd($id);
//   $vehicle = get_vehicleDetails($id);
//   $bookings = get_Bookings($id);
//   $var = array();
//   $var[] = $bookings;
//   $var[] = $vehicle;
//   //return view('detailPHP')->with('var',$var);
//   return view('detailPHP')->with('vehicle',$vehicle)->with('bookings',$bookings);
// });

// Route::get('viewClient/{id}', function ($id) {
//   //dd($id);
//   $client = get_OneClient($id);
//   $bookings = get_vehicleAndBookings($id);
//   // $var = array();
//   // $var[] = $client;
//   // $var[] = $bookings;
//   // dd($var);
//   return view('clientDetail')->with('client',$client)->with('bookings',$bookings);
//   //return view('clientDetail')->with('var',$var);
//   //return view('detailPHP')->with('vehicle',$vehicle)->with('bookings',$bookings);
// });

// Route::get('updateClient/{id}', function ($id) {
//   //dd($id);
//   $client = get_OneClient($id);
//   // dd($client->Name);
//   // $var = array();
//   // $var[] = $client;
//   // $var[] = $bookings;
//   // dd($var);
//   return view('updateClient')->with('client',$client);
//   //return view('clientDetail')->with('var',$var);
//   //return view('detailPHP')->with('vehicle',$vehicle)->with('bookings',$bookings);
// });

// Route::post('/update_item_action', function () {
//   $name = request("name");
//   $age = request("age");
//   $lisenceNo = request("lisenceNo");
//   $lisenceType = request("lisenceType");
//   $gender = request("gender");
//   $id = request("id");
//   $error = array();
//   $error[0] = false;


//   if(array_key_exists('name',$_POST)){
//     if(($_POST['name']) != NULL){
//       $name = trim($_POST['name']);
//     }else{
//       $name = 'INVALID';
//       $error[0] = true;
//     }
//   }else{
//     $name = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('age',$_POST)){
//     $age = trim($_POST['age']);
//     if ((strlen($age)==2) && (is_numeric($age))){
//       $age = intval($age);
//       if(($age > 17) && ($age < 99)){}else{
//         $age = 'INVALID';
//         $error[0] = false;
//       }
//     }else{
//       $age = 'INVALID';
//       $error[0] = true;
//     }
//   }else{
//     $age = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('lisenceNo',$_POST)){
//     $lisenceNo = ($_POST['lisenceNo']);
//     if(is_numeric($lisenceNo)&&(strlen($lisenceNo) == 9)){}else{
//       $lisenceNo = 'INVALID';
//       $error[0] = true;
//     }
//   }else{
//     $lisenceNo = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('lisenceType',$_POST)){
//     $lisenceType = trim($_POST['lisenceType']);
//   }else{
//     $lisenceType = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('gender',$_POST)){
//     $gender = trim($_POST['gender']);
//   }else{
//     $gender = 'INVALID';
//     $error[0] = true;
//   }
    

//   updateClient($name,$age,$lisenceNo,$lisenceType,$gender,$id,$error);

//   return redirect(url("viewClient/$id"));

//   // if($client_id){
//   //   $error[0] = false;
//   //   return redirect(url("viewClient/$client_id"));
//   // }else{
//   //   $error[0] = true;
//   // }

//   $data = array();
//   $data[] = $name;
//   $data[] = $age;
//   $data[] = $lisenceNo;
//   $data[] = $lisenceType;
//   $data[] = $gender;
//   $data[] = $id;
//   $data[] = $error;
//   // dd($data);
//   return view('show_client_application')->with('name',$name)->with('age',$age)->with('lisenceNo',$lisenceNo)->with('lisenceType',$lisenceType)->with('gender',$gender)->with('error',$error);
//   //return view('homeCLASS');
// });

// function updateClient($name,$age,$lisenceNo,$lisenceType,$gender,$id,$error){
//   if(!($error[0])){
//     $sql = "UPDATE Clients SET Name=?, Age=?, LisenceNo=?, LicenceType=?, Gender=? WHERE Client_id=?";
//     DB::update($sql,array($name,$age,$lisenceNo,$lisenceType,$gender,$id));
//   }
// }

// Route::get('returnVehicle/{id}', function ($id) {
//   //dd($id);
//   $returnInfo = get_BookingsForReturn($id);
//   //dd($returnInfo);
//   return view('returnVehicle')->with('returnInfo',$returnInfo);
// });

// Route::get('/editVehicle/{$id}', function ($id) {
//   $vehicle = get_vehicleDetails($id);

//   $var = array();
//   $var[] = $bookings;
//   $var[] = $vehicle;
//   //return view('detailPHP')->with('var',$var);

//   return view('editVehicle')->with('vehicle',$vehicle);
// });

// Route::get('deleteClient/{id}', function ($id) {
//   // dd($id);
//   deleteClientAndBookings($id);
//   return redirect(url("clients"));
// });

// function deleteClientAndBookings($id){
//   //$sql = "SELECT B.LisenceNo FROM Clients as C,Bookings as B WHERE C.LisenceNo = B.LisenceNo AND C.Client_id=?";
//   $sql = "DELETE FROM Bookings WHERE LisenceNo IN (SELECT Bookings.LisenceNo FROM Bookings,Clients WHERE Bookings.LisenceNo=Clients.LisenceNo AND Clients.Client_id = ?)";
//   DB::delete($sql,array($id));
//   $sql = "DELETE FROM Clients WHERE Client_id=?";
//   DB::delete($sql,array($id));
// }

// function get_vehicleDetails($id){
//   $sql = "SELECT * FROM vehicles WHERE Vehicle_id=?";
//   $cars = DB::select($sql,array($id));
//   if(count($cars)!=1){
//     die("Something went wrong!:$sql");
//   }
//   $result = $cars[0];
//   return $result;
// }

// function get_Bookings($id){
//   $sql = "SELECT clients.Name,clients.LisenceNo,Pickup,Dropoff,Booking_id FROM vehicles,bookings,clients WHERE vehicles.rego = bookings.rego AND vehicle_id = ? AND clients.LisenceNo = bookings.LisenceNo;";
//   $bookings = DB::select($sql,array($id));
//   return $bookings;
// }

// function get_BookingsForReturn($id){
//   $sql = "SELECT vehicles.img,clients.Name,clients.LisenceNo,Pickup,Dropoff,Booking_id,vehicles.Rego,Make,Model FROM vehicles,bookings,clients WHERE vehicles.Rego=bookings.Rego AND clients.LisenceNo=bookings.LisenceNo AND bookings.Booking_id = ?";
//   $bookings = DB::select($sql,array($id));
//   return $bookings;
// }



// function get_vehicleAndBookings($id){
//   $sql = "SELECT vehicles.Rego,vehicles.Make,vehicles.Model,Pickup,Dropoff FROM vehicles,bookings,clients WHERE vehicles.rego = bookings.rego AND vehicle_id = ? AND clients.LisenceNo = bookings.LisenceNo;";
//   $bookings = DB::select($sql,array($id));
//   return $bookings;
// }


// function get_VehicleBookings($id){
//   $sql = "SELECT clients.Name,clients.LisenceNo,Pickup,Dropoff FROM vehicles,bookings,clients WHERE vehicles.rego = bookings.rego AND vehicle_id = ? AND clients.LisenceNo = bookings.LisenceNo;";
//   $bookings = DB::select($sql,array($id));
//   return $bookings;
// }

// function get_OneClient($id){
//   $sql = "SELECT * FROM clients WHERE Client_id = ?";
//   $clientDetails = DB::select($sql,array($id));
//   if(count($clientDetails)!=1){
//     die("Something went wrong!:$sql");
//   }
//   $result = $clientDetails[0];
//   return $result;
// }

// function get_clientDetails($id){
//   $sql = "SELECT * FROM clients WHERE Client_id = ?";
//   $clientDetails = DB::select($sql,array($id));
//   return $clientDetails;
// }
// function get_clientBookings($id){
//   $sql = "SELECT Booking_id FROM clients,bookings WHERE clients.LisenceNo = bookings.LisenceNo AND clients.Client_id = ?";
//   $clientBookings = DB::select($sql,array($id));
//   return $clientBookings;
// }

// Route::post('/show_booking', function () {
//     $name = request("name");
//     $rego = request("rego");
//     $pickUp = request("pickUp");
//     $drop = request("return");
//     $lisenceNo = '';
//     $booking_id = "";

//     // Error Flags
//     $error = array();
//     $error[0] = false;
//     $error[1] = "";
//     $isValidDate = true;
 
//     if(array_key_exists('name',$_POST)){
//         $name = $_POST['name'];
//         $data = explode(",",$name);
//         $lisenceNo = $data[1];
//         $name = $data[0];
//       }else{
//         $name = '';
//         $lisenceNo = '';
//         $error[0] = true;
//       }
      

//       if(array_key_exists('rego',$_POST)){
//         $rego = $_POST['rego'];
//       }else{
//         $rego = '';
//         $error[0] = true;
//       }
      
      
//       if(array_key_exists('pickUp',$_POST)){
//         $pickUp = $_POST['pickUp'];
//       }else{
//         $pickUp = '';
//         $error[0] = true;
//       }
      
      
//       if(array_key_exists('return',$_POST)){
//         $drop = $_POST['return'];
//       }else{
//         $drop = '';
//         $error[0] = true;
//       }
//       // CASE 0 - PickUp date is less than the drop off date
//       if($drop > $pickUp){
//         global $isValidDate;
//         $today = date("Y-m-d");
//         //dd($today);
//         $isValidDate = checkDates($pickUp,$drop,$rego,$today);
//         //dd($isValidDate);

//         if($isValidDate){
//           if(!($error[0])){
//             //dd($lisenceNo);
//            $booking_id = addBooking($lisenceNo,$rego,$pickUp,$drop);
//            return redirect(url("allBookings"));
//           }
//         }

//       }else{
//         $error[0] = true;
//         $error[1] = "Invalid Dates";
//       }
      
//     return view('show_booking')->with('name',$name)->with('rego',$rego)->with('pickUp',$pickUp)->with('return',$drop)->with('lisenceNo',$lisenceNo)->with('error',$error);
// });

// function addBooking($lisenceNo,$rego,$pickUp,$drop){
//   $sql = "INSERT INTO Bookings(LisenceNo, Rego, Pickup, Dropoff) VALUES (?,?,?,?)";
//   DB::insert($sql,array($lisenceNo,$rego,$pickUp,$drop));
//   $id = DB::getPdo()->lastInsertId();
//   return($id);
// }

// function checkDates($start,$end,$rego,$today){
//   $sql = "SELECT Pickup,Dropoff FROM bookings WHERE Rego = ?";
//   $dates = DB::select($sql,array($rego));
//   //dd($dates);
//   // CASE 4 - Pick Up date can not be before today
//   if($start < $today){
//     //dd($start < $today);
//     return false;
//   }else{
//     if(count($dates)==0){
//       return true;
//       //dd(count($dates));
//     }else{
//       // CASE 1 - Both Pick Up and Drop off and with in the satrt and end dates of another booking
//       foreach($dates as $date){ //: - FOREACH
//         if(( $start > $date->Pickup ) and ( $end < $date->Dropoff )){
//           return false;
//       // CASE 2 - Pick Up dates is before another bookings pickup and dropoff date is between another booking pickup and drop off
//         }else if( ( $start < $date->Pickup ) and  ( $end > $date->Pickup ) and ( $end < $date->Dropoff) ){
//           return false;
//           //dd("Case 2");
//       // CASE 3 - Pick Up date is between the other bookings pickup and dropoff date, and dropOff after drop off
//         }else if( ( ($start > $date->Pickup) and ($start < $date->Dropoff)) and ($end > $date->Dropoff) ){
//           return false;
//         }
//       } //:: - FOREACH
//       return true;
//     }
//   }

  
// }

// Route::post('/show_client_application', function () {
//   $name = request("name");
//   $age = request("age");
//   $lisenceNo = request("lisenceNo");
//   $lisenceType = request("lisenceType");
//   $gender = request("gender");
//   $error = array();
//   $error[0] = false;


//   if(array_key_exists('name',$_POST)){
//     if(($_POST['name']) != NULL){
//       $name = trim($_POST['name']);
//     }else{
//       $name = 'INVALID';
//       $error[0] = true;
//     }
//   }else{
//     $name = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('age',$_POST)){
//     $age = trim($_POST['age']);
//     if ((strlen($age)==2) && (is_numeric($age))){
//       $age = intval($age);
//       if(($age > 17) && ($age < 99)){}else{
//         $age = 'INVALID';
//         $error[0] = false;
//       }
//     }else{
//       $age = 'INVALID';
//       $error[0] = true;
//     }
//   }else{
//     $age = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('lisenceNo',$_POST)){
//     $lisenceNo = ($_POST['lisenceNo']);
//     if(is_numeric($lisenceNo)&&(strlen($lisenceNo) == 9)){}else{
//       $lisenceNo = 'INVALID';
//       $error[0] = true;
//     }
//   }else{
//     $lisenceNo = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('lisenceType',$_POST)){
//     $lisenceType = trim($_POST['lisenceType']);
//   }else{
//     $lisenceType = 'INVALID';
//     $error[0] = true;
//   }
  
//   if(array_key_exists('gender',$_POST)){
//     $gender = trim($_POST['gender']);
//   }else{
//     $gender = 'INVALID';
//     $error[0] = true;
//   }
    

//   $client_id = addClient($name,$age,$lisenceNo,$lisenceType,$gender,$error);

//   if($client_id){
//     $error[0] = false;
//     return redirect(url("viewClient/$client_id"));
//   }else{
//     $error[0] = true;
//   }

//   $data = array();
//   $data[] = $name;
//   $data[] = $age;
//   $data[] = $lisenceNo;
//   $data[] = $lisenceType;
//   $data[] = $gender;
//   $data[] = $error;
//   //dd($data);
//   return view('show_client_application')->with('name',$name)->with('age',$age)->with('lisenceNo',$lisenceNo)->with('lisenceType',$lisenceType)->with('gender',$gender)->with('error',$error);
//   //return view('homeCLASS');
// });

// function addClient($name,$age,$lisenceNo,$lisenceType,$gender,$error){
//   if(!($error[0])){
//     $sql = "INSERT INTO Clients(Name, Age, LisenceNo, LicenceType, Gender) VALUES (?,?,?,?,?)";
//     DB::insert($sql,array($name,$age,$lisenceNo,$lisenceType,$gender));
//     $id = DB::getPdo()->lastInsertId();
//     return($id);
//   }
// }

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hola', function () {
//     return 'welcome';
//     //return view('homeCLASS');
// });

// Route::get('hola/{name}', function ($name) {
//     return "Welcome $name";
//     //return view('homeCLASS');
// });


// // READ SQL FILE

// Route::get('/test', function () {
//   $sql = "select * from vehicles";
//   $sql2 = "select * from clients";
//   $sql3 = "select * from bookings";
//   // $items = array();
//   // $items[] = DB::select($sql);
//   // $items[] = DB::select($sql2);
//   // $items[] = DB::select($sql3);
//   //dd($items);
//   $vehicles = DB::select($sql);
//   $clients = DB::select($sql2);
//   $bookings = DB::select($sql3);
//   return view('db_view.homeCLASS')->with("vehicles",$vehicles);
// });

// Route::post('/remove_booking', function () {
//     $rego = request("rego");
//     $bookingID = request("booking_id");
//     $increment = request("increment");

//     removeBooking($rego,$bookingID,$increment);
//     return redirect(url("allBookings"));

//     $var = array();
//     $var[] = $rego;
//     $var[] = $bookingID;
//     $var[] = $increment;

//     dd($var);
// });

// function removeBooking($rego,$booking_id,$increment){
//   $sql = "SELECT Odometer FROM vehicles WHERE Rego=?";
//   $odom = DB::select($sql,array($rego));
//   //dd($odom);
//   //$odomNumber = $odom[0];
//   $odometerString = $odom[0]->Odometer;
//   $odometer = intval($odometerString);
//   //dd($odometer);
//   $odometer = $odometer + $increment;
//   //dd($odometer);
//   $sql = "UPDATE Vehicles SET Odometer=? WHERE Rego=?";
//   DB::update($sql,array($odometer,$rego));
//   $sql = "DELETE FROM Bookings WHERE Booking_id = ?";
//   DB::delete($sql,array($booking_id));
// }

// Route::get('/total', function () {

//   $bookings = get_TotalBookings();
//   //dd($bookings);
//   // $clients = DB::select($sql2);
//   // $bookings = DB::select($sql3);

//   return view('totalBookingTimes')->with("noOfDays",$bookings);
// });

// function get_TotalBookings(){
//   //SELECT *,JULIANDAY(Dropoff) - JULIANDAY(Pickup) + 1 AS days_inclusive FROM Bookings
//   // "SELECT Make,Model,img,B.Rego,COUNT(B.Rego) AS No_of_Bookings FROM Bookings as B LEFT OUTER JOIN (SELECT Make,Model,img,Rego AS Vrego FROM Vehicles)  ON Vrego=B.Rego GROUP BY  Rego ORDER BY No_of_Bookings DESC,Rego";
//   $sql = "SELECT Make,Model,img,B.Rego,JULIANDAY(Dropoff) - JULIANDAY(Pickup) + 1 AS days_inclusive FROM Bookings as B LEFT OUTER JOIN (SELECT Make,Model,img,Rego AS Vrego FROM Vehicles)  ON Vrego=B.Rego GROUP BY  Rego ORDER BY days_inclusive DESC,Rego";;
//   return (DB::select($sql));
// }
// //Days
// // SELECT *,JULIANDAY(Dropoff) - JULIANDAY(Pickup) + 1 AS days_inclusive FROM Bookings;

// //"SELECT       `column` FROM     `your_table` GROUP BY `column` ORDER BY COUNT(*) DESC LIMIT    1";
// //"SELECT <column_name>,COUNT(<column_name>) AS `value_occurrence` FROM <my_table> GROUP BY  <column_name> ORDER BY `value_occurrence` DESC LIMIT 1";
// // Route::get('/frequency', function () {

// //   $data = get_frequency();
// //   dd($data);
// //   return view('frequentlyBooked')->with("data",$data);
// // });

// // function get_frequency(){
// //   $sql = "SELECT Rego,COUNT(Rego) AS No_of_Bookings FROM Bookings GROUP BY  Rego ORDER BY No_of_Bookings DESC";
// //   return (DB::select($sql));
// // }

// function get_frequency(){
//   $sql = "SELECT Make,Model,img,B.Rego,COUNT(B.Rego) AS No_of_Bookings FROM Bookings as B LEFT OUTER JOIN (SELECT Make,Model,img,Rego AS Vrego FROM Vehicles)  ON Vrego=B.Rego GROUP BY  Rego ORDER BY No_of_Bookings DESC,Rego";
//   //"SELECT Make,Model,No_of_Bookings FROM Vehicles AS v LEFT OUTER JOIN (SELECT Rego,COUNT(Rego) AS No_of_Bookings FROM Bookings GROUP BY  Rego ORDER BY No_of_Bookings DESC) AS b ON v.Rego=b.Rego";
//   return (DB::select($sql));
// }

// Route::get('/frequent', function () {
//   $frequency_data = get_frequency();
//   //dd($frequency_data);
//   return view('frequentlyBooked')->with("frequency_data",$frequency_data);
// });

// //s2921450.elf.ict.griffith.edu.au/assignment_1_Laravel/public/home