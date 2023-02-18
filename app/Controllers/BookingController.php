<?php
namespace App\Controllers;

use App\Models\Booking;
use App\Request;

class BookingController extends Controller{
    public function listBooking(){
        $this->view('admin/header');
        $booking = Booking::all();     
        $this->view('admin/home',['booking'=>$booking]);
    }
    public function updateBook(Request $request){
        $this->view('admin/header');
        $id = $request->getBody()['Booking_id'];
        $book =Booking::findOneBooking($id);
        return $this->view('admin/updateBook',['booking'=>$book]); 
    }
    public function updateBk(Request $request){
        $data = $request->getBody();
        $book = new Booking();
        $book->updateBooking($data['Booking_id'],$data);
        header('Location:'.ROOT_PATH.'home-admin');
    }
}
?>