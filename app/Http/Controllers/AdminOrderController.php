<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Pdf;

class AdminOrderController extends Controller
{
    private $pdf;
    public function index()
    {
        return view('admin.order.index',['orders' => Order::latest()->get()]);
    }
    public function detail($id)
    {
        return view('admin.order.detail',['order' => Order::find($id)]);
    }
    public function edit($id)
    {
        return view('admin.order.edit',['order' => Order::find($id)]);
    }
    public function update(Request $request,$id)
    {

        Order::updateOrder($request, $id);
        return redirect('admin-order/manage')->with('message','Order info update successfully..');
    }
    public function showInvoice($id)
    {
        return view('admin.order.show-invoice',['order' => Order::find($id)]);
    }
    public function downloadInvoice($id)
    {
        $this->pdf = Pdf::loadView('admin.order.download-invoice',['order' => Order::find($id)]);
        return $this->pdf->stream('invoice.pdf');

    }
    public function delete($id)
    {
        Order::deleteOrder($id);
        OrderDetail::deleteOrderDetail($id);
        return back()->with('message','Order info delete successfully..');
    }

}
