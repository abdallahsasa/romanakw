<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactUsPageController extends Controller
{

    public function __construct()
    {
//        $this->model_instance = Message::class;

        $this->index_view = 'website.contact';


        $this->index_route = 'website.contact';

        $this->success_message = 'شكراً لتواصلكم معنا';
        $this->error_message = "فشل في إرسال رسالة ، يمكنك المحاولة مرة أخرى";

    }

    public function index()
    {
//        $subjects = Subject::all();
        return view($this->index_view);
    }
}
