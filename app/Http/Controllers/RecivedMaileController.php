<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\MailER as MailE;
use App\Models\StorageWay as SWM;
use App\Models\Folder as FM;
use App\Models\City as CM;
use App\Models\Clients as CL;

class RecivedMaileController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mail = MailE::all()->where('typeMail',1);
        return view('RecivedMaile.lista', compact('mail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $folder = FM::all();
        $storagew = SWM::all();
        $city = CM::all();
        $client = CL::all();
        $mail = MailE::all();
        return view('RecivedMaile.create', compact('folder', 'storagew', 'city','client','mail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function files()
    {
        $folder = FM::all();
        $storagew = SWM::all();
        $city = CM::all();
        $mail = MailE::all();
        return view('RecivedMaile.files', compact('folder', 'storagew', 'city', 'mail'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $toArchive=0;
        if ($request->deliveredToArchive = "on") {
            $toArchive=1;
        }else{
            $toArchive=0;
        }

        $originalsentDate = $request->sentDate;
        $newsentDate = date("Y-m-d", strtotime($originalsentDate));

        $originalreceivedDate = $request->receivedDate;
        $newreceivedDate = date("Y-m-d", strtotime($originalreceivedDate));

        $mail = new MailE;
        $mail->idMail2       = 0;
        $mail->codEnterprise = $request->dependency_id;
        $mail->typeMail      = 1;
        $mail->sentDate      = $newsentDate;
        $mail->receivedDate  = $newreceivedDate;
        $mail->city_id       = $request->city_id;
        $mail->sender        = $request->sender;
        $mail->addressee     = $request->addressee;
        $mail->dependency_id = $request->dependency_id;
        $mail->folder_id     = $request->folder_id;
        $mail->affair        = $request->affair;
        $mail->observations   = $request->observations;
        $mail->storagew_id   = $request->storagew_id;
        $mail->noPages       = $request->noPages;
        $mail->deliveredToArchive = $toArchive;
        $mail->CompanyMssgr  = $request->CompanyMssgr;
        $mail->nameMessenger = $request->nameMessenger;

        $mail->save();

        return redirect('recived_maile');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $folder = FM::all();
        $storagew = SWM::all();
        $city = CM::all();
        return view('RecivedMaile.show', compact('folder','storagew','city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $folder = FM::all();
        $storagew = SWM::all();
        $city = CM::all();
        return view('RecivedMaile.edit', compact('folder','storagew','city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idMail)
    {
        $mail = MailE::find($idMail);
                
        $mail->idMail2 = $request->idMail2;
        $mail->codEnterprise = $request->codEnterprise;
        $mail->typeMail = $request->typeMail;
        $mail->folder_id = $request->idFolder;
        $mail->affair   = $request->affair;
        $mail->sentDate = $request->sentDate;
        $mail->sender = $request->sender;
        $mail->addressee = $request->addressee;
        $mail->receivedDate = $request->receivedDate;
        $mail->storagew_id  = $request->idStorageWay;
        $mail->noPages  = $request->noPages;
        $mail->obervations  = $request->obervations;
        $mail->deliveredToArchive = $request->deliveredToArchive;
        $mail->nameMessenger = $request->nameMessenger;
        $mail->city_id = $request->idCity;

        $mail->save();

        return redirect('mailer.listM');
    }
}
